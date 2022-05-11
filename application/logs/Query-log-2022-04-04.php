select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017819404602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017819404602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017819404602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017819404602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028738975524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017819404602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028738975524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003464937210083

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020627975463867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017819404602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028738975524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013048648834229

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021471977233887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021471977233887

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055980682373047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017619132995605

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017619132995605

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012259483337402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012259483337402

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069117546081543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021641254425049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069117546081543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021641254425049

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021951198577881

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020182132720947

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021951198577881

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020182132720947

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002331018447876

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025548934936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021951198577881

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020182132720947

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002331018447876

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.0004878044128418

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00068902969360352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.0020818710327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0046029090881348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0046029090881348

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083494186401367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083494186401367

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041241645812988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041241645812988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041241645812988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041241645812988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041241645812988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019330978393555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034701824188232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041241645812988

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037541389465332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024471282958984

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050258636474609

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050258636474609

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050258636474609

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.0014970302581787

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00074005126953125

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00065016746520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00045299530029297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00029182434082031

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034739971160889

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034739971160889

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038371086120605

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009610652923584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009610652923584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009610652923584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00053596496582031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00029611587524414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00022697448730469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.0003201961517334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018210411071777

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018210411071777

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036318302154541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044209957122803

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018210411071777

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036318302154541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044209957122803

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024890899658203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018210411071777

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036318302154541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044209957122803

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024890899658203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.0038919448852539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.0034542083740234

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.0041201114654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039072036743164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0057041645050049

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0057041645050049

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053000450134277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053000450134277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088810920715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035977363586426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088810920715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0034210681915283

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036251544952393

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00099301338195801

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0011579990386963

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0066299438476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015408992767334

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036411285400391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036411285400391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.0003819465637207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092792510986328

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092792510986328

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00045585632324219

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011529922485352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011529922485352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040483474731445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00044679641723633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.0004420280456543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026106834411621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00083589553833008

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088191032409668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088191032409668

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001068115234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001068115234375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011799335479736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001068115234375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011799335479736

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00018310546875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00013518333435059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093317031860352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093317031860352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00068402290344238

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.0004730224609375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.0021610260009766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00092792510986328

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00092792510986328

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.004025936126709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00093603134155273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00033402442932129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00095605850219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008897066116333

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057196617126465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00026679039001465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00028085708618164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00022196769714355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.0057220458984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.0025908946990967

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.0026640892028809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.008897066116333

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.008897066116333

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023510456085205

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023510456085205

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00057888031005859

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00038409233093262

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0017051696777344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043797492980957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012331008911133

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012331008911133

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058984756469727

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.00084710121154785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.00064206123352051

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.00045394897460938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039386749267578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075101852416992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075101852416992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075101852416992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075101852416992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075101852416992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.0025069713592529

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00025510787963867

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00017213821411133

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00025606155395508

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034379959106445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00025606155395508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00040006637573242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0017659664154053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00026607513427734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00022196769714355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0017280578613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054693222045898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054693222045898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087499618530273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087499618530273

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006861686706543

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.00089883804321289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.00031805038452148

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.00039196014404297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0074608325958252

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067901611328125

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010218620300293

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067615509033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011107206344604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011107206344604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030758380889893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013570785522461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 789 
 Execution Time:0.00056695938110352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 905 
 Execution Time:0.0003821849822998

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 905  and `patient_registration_id` = 789 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0043129920959473

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0043129920959473

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001168966293335

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 787 
 Execution Time:0.00052690505981445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 903 
 Execution Time:0.00037884712219238

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 903  and `patient_registration_id` = 787 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011391639709473

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011391639709473

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 788 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 904 
 Execution Time:0.0022091865539551

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 904  and `patient_registration_id` = 788 
 Execution Time:0.0015189647674561

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035507678985596

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001410961151123

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001410961151123

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026538372039795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026760101318359

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012059211730957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015089511871338

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026538372039795

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013918876647949

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019190311431885

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019190311431885

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0051250457763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069499015808105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069499015808105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069499015808105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076241493225098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069499015808105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076241493225098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049881935119629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004662036895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069499015808105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0076241493225098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049881935119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 788 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 904 
 Execution Time:0.00022196769714355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 904  and `patient_registration_id` = 788 
 Execution Time:0.00023007392883301

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 788 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 788 
 Execution Time:0.00044703483581543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 904 
 Execution Time:0.00029802322387695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 904  and `patient_registration_id` = 788 
 Execution Time:0.00032901763916016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 788 
 Execution Time:0.0017271041870117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002932071685791

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002932071685791

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select * from examination where examination_id= '827' and   office_id= '1' 
 Execution Time:0.00092506408691406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 827 
 Execution Time:0.0006721019744873

select * from examination_chargesdetails where  examination_id= '827' 
 Execution Time:0.00039100646972656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085783004760742

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085783004760742

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010550022125244

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010550022125244

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010390281677246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018680095672607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014848709106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011417865753174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014848709106445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00054001808166504

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=114  
 Execution Time:0.0042810440063477

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00054001808166504

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=114  
 Execution Time:0.0042810440063477

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=114  
 Execution Time:0.0011439323425293

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00054001808166504

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=114  
 Execution Time:0.0042810440063477

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=114  
 Execution Time:0.0011439323425293

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='114' and  office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_appointment where  patient_registration_id = 114 and appointment_date= '2022-04-04' 
 Execution Time:0.0010268688201904

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010890960693359

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054693222045898

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014121532440186

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012671947479248

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 789 
 Execution Time:0.00045204162597656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 905 
 Execution Time:0.0003819465637207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 905  and `patient_registration_id` = 789 
 Execution Time:0.00035881996154785

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 789 
 Execution Time:0.0021200180053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from examination where examination_id= '825' and   office_id= '1' 
 Execution Time:0.00091814994812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 825 
 Execution Time:0.00042200088500977

select * from examination_chargesdetails where  examination_id= '825' 
 Execution Time:0.00034594535827637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001816987991333

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001816987991333

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072383880615234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072383880615234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064802169799805

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='32' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071001052856445

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='50' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00086092948913574

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043582916259766

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 790 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 906 
 Execution Time:0.00018000602722168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 906  and `patient_registration_id` = 790 
 Execution Time:0.0006401538848877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 790 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 906 
 Execution Time:0.00035905838012695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 906  and `patient_registration_id` = 790 
 Execution Time:0.00046086311340332

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 790 
 Execution Time:0.0013430118560791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select * from examination where examination_id= '828' and   office_id= '1' 
 Execution Time:0.0018651485443115

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 828 
 Execution Time:0.00019383430480957

select * from examination_chargesdetails where  examination_id= '828' 
 Execution Time:0.00016212463378906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065088272094727

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065088272094727

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043916702270508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070405006408691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070405006408691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 114 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 907 
 Execution Time:0.00019693374633789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 907  and `patient_registration_id` = 114 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033020973205566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 790 
 Execution Time:0.00069403648376465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 906 
 Execution Time:0.00046396255493164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 906  and `patient_registration_id` = 790 
 Execution Time:0.00059986114501953

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 790 
 Execution Time:0.0021131038665771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010020732879639

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010020732879639

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050806999206543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050806999206543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select * from examination where examination_id= '828' and   office_id= '1' 
 Execution Time:0.002316951751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 828 
 Execution Time:0.00050091743469238

select * from examination_chargesdetails where  examination_id= '828' 
 Execution Time:0.0059428215026855

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079202651977539

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00086379051208496

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00086379051208496

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00034880638122559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033283233642578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061321258544922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 790 
 Execution Time:0.00056314468383789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 906 
 Execution Time:0.00063109397888184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 906  and `patient_registration_id` = 790 
 Execution Time:0.00037503242492676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 790 
 Execution Time:0.0020439624786377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select * from examination where examination_id= '828' and   office_id= '1' 
 Execution Time:0.00078988075256348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 828 
 Execution Time:0.00021100044250488

select * from examination_chargesdetails where  examination_id= '828' 
 Execution Time:0.00019502639770508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054121017456055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054121017456055

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046205520629883

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='91' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093317031860352

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029909610748291

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0012869834899902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 790 
 Execution Time:0.00059413909912109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 906 
 Execution Time:0.00039100646972656

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 906  and `patient_registration_id` = 790 
 Execution Time:0.00057291984558105

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 790 
 Execution Time:0.0017020702362061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000885009765625

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054216384887695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054287910461426

select * from examination where examination_id= '828' and   office_id= '1' 
 Execution Time:0.0020401477813721

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 828 
 Execution Time:0.00060296058654785

select * from examination_chargesdetails where  examination_id= '828' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.0004880428314209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0046288967132568

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.0004880428314209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0046288967132568

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.0010490417480469

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.0004880428314209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0046288967132568

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.0010490417480469

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='724' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036787986755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067782402038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039386749267578

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0025160312652588

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039386749267578

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0025160312652588

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039386749267578

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0025160312652588

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.00050497055053711

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='724' and  office_id= '1' 
 Execution Time:0.00017595291137695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036978721618652

select count(*) as cnt from patient_appointment where  patient_registration_id = 724 and appointment_date= '2022-04-04' 
 Execution Time:0.00076889991760254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 114 
 Execution Time:0.00033783912658691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 907 
 Execution Time:0.00021505355834961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 907  and `patient_registration_id` = 114 
 Execution Time:0.00029206275939941

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 114 
 Execution Time:0.001176118850708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select * from examination where examination_id= '829' and   office_id= '1' 
 Execution Time:0.012094020843506

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032520294189453

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 829 
 Execution Time:0.0039272308349609

select * from examination_chargesdetails where  examination_id= '829' 
 Execution Time:0.0039370059967041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036110877990723

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036110877990723

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022759437561035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='42' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046992301940918

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='15' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087714195251465

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081515312194824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='63' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00076484680175781

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00081992149353027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 787 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 903 
 Execution Time:0.00016999244689941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 903  and `patient_registration_id` = 787 
 Execution Time:0.0002751350402832

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 787 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select * from examination where examination_id= '826' and   office_id= '1' 
 Execution Time:0.00084400177001953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 826 
 Execution Time:0.00054597854614258

select * from examination_chargesdetails where  examination_id= '826' 
 Execution Time:0.00043821334838867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077295303344727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077295303344727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063419342041016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063419342041016

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002892017364502

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='90' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0008540153503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081515312194824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081515312194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081515312194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005497932434082

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00042986869812012

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=114  
 Execution Time:0.0036919116973877

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00042986869812012

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=114  
 Execution Time:0.0036919116973877

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=114  
 Execution Time:0.00077509880065918

select count(*) as cnt from patient_registration where  patient_registration_id= '114' and  office_id= '1' 
 Execution Time:0.00042986869812012

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=114  
 Execution Time:0.0036919116973877

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=114  
 Execution Time:0.00077509880065918

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='114' and  office_id= '1' 
 Execution Time:0.00020909309387207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 908 
 Execution Time:0.00017499923706055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 908  and `patient_registration_id` = 724 
 Execution Time:0.000640869140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075793266296387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075793266296387

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053939819335938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053939819335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053939819335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053939819335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053939819335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012328624725342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012328624725342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009918212890625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015439987182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013160705566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061607360839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069618225097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012328624725342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009918212890625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00072383880615234

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00072383880615234

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00060820579528809

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00060820579528809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053119659423828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053119659423828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037813186645508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053119659423828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014688968658447

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014688968658447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012331008911133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014688968658447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012331008911133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014688968658447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012331008911133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00040483474731445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 277 
 Execution Time:0.00031495094299316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 277  and `patient_registration_id` = 207 
 Execution Time:0.00092601776123047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010731220245361

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010731220245361

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 908 
 Execution Time:0.00031709671020508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 908  and `patient_registration_id` = 724 
 Execution Time:0.00074887275695801

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0013389587402344

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select * from examination where examination_id= '830' and   office_id= '1' 
 Execution Time:0.0011298656463623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 830 
 Execution Time:0.00068998336791992

select * from examination_chargesdetails where  examination_id= '830' 
 Execution Time:0.0007171630859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076198577880859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076198577880859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088620185852051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088620185852051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083017349243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083017349243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083017349243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066280364990234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083017349243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066280364990234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015201568603516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083017349243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066280364990234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015201568603516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020701885223389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083017349243164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055122375488281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066280364990234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015201568603516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020701885223389

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00048279762268066

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00048279762268066

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00027704238891602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00049781799316406

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 277 
 Execution Time:0.00040721893310547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 277  and `patient_registration_id` = 207 
 Execution Time:0.00059318542480469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 207 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select * from examination where examination_id= '103' and   office_id= '1' 
 Execution Time:0.0010979175567627

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 103 
 Execution Time:0.0018939971923828

select * from examination_chargesdetails where  examination_id= '103' 
 Execution Time:0.0015230178833008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016498565673828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016498565673828

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00076103210449219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 277 
 Execution Time:0.00052595138549805

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 277  and `patient_registration_id` = 207 
 Execution Time:0.00059795379638672

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 207 
 Execution Time:0.0013508796691895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select * from examination where examination_id= '103' and   office_id= '1' 
 Execution Time:0.00080609321594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 103 
 Execution Time:0.0018970966339111

select * from examination_chargesdetails where  examination_id= '103' 
 Execution Time:0.00045680999755859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022220611572266

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022220611572266

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012590885162354

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060105323791504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0039780139923096

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00053691864013672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 908 
 Execution Time:0.0005340576171875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 908  and `patient_registration_id` = 724 
 Execution Time:0.00054717063903809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0021848678588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016200542449951

select * from examination where examination_id= '830' and   office_id= '1' 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 830 
 Execution Time:0.00081706047058105

select * from examination_chargesdetails where  examination_id= '830' 
 Execution Time:0.00066018104553223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010120868682861

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010120868682861

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 207 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 277 
 Execution Time:0.0001978874206543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 277  and `patient_registration_id` = 207 
 Execution Time:0.00033688545227051

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 207 
 Execution Time:0.00054407119750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select * from examination where examination_id= '103' and   office_id= '1' 
 Execution Time:0.0017330646514893

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 103 
 Execution Time:0.00049281120300293

select * from examination_chargesdetails where  examination_id= '103' 
 Execution Time:0.0015339851379395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046515464782715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 908 
 Execution Time:0.00018215179443359

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 908  and `patient_registration_id` = 724 
 Execution Time:0.00014305114746094

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0010519027709961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '830' and   office_id= '1' 
 Execution Time:0.0015289783477783

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 830 
 Execution Time:0.00048589706420898

select * from examination_chargesdetails where  examination_id= '830' 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047683715820312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011410713195801

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010120868682861

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='53' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0035080909729004

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 908 
 Execution Time:0.00021719932556152

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 908  and `patient_registration_id` = 724 
 Execution Time:0.00027680397033691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.0011739730834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018379688262939

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018379688262939

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034213066101074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from examination where examination_id= '830' and   office_id= '1' 
 Execution Time:0.00088000297546387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 830 
 Execution Time:0.00034213066101074

select * from examination_chargesdetails where  examination_id= '830' 
 Execution Time:0.00035309791564941

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072789192199707

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00038290023803711

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094699859619141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.00029492378234863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 724 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 908 
 Execution Time:0.00046610832214355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 908  and `patient_registration_id` = 724 
 Execution Time:0.00028705596923828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 724 
 Execution Time:0.001194953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027704238891602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007171630859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007171630859375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select * from examination where examination_id= '830' and   office_id= '1' 
 Execution Time:0.0013890266418457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 830 
 Execution Time:0.00029802322387695

select * from examination_chargesdetails where  examination_id= '830' 
 Execution Time:0.00041389465332031

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='68' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098800659179688

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044798851013184

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001863956451416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001863956451416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001863956451416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020089149475098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00026512145996094

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0022001266479492

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00026512145996094

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0022001266479492

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.00080299377441406

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00026512145996094

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=724  
 Execution Time:0.0022001266479492

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=724  
 Execution Time:0.00080299377441406

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='724' and  office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014171600341797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014171600341797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014171600341797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014171600341797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014171600341797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086593627929688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00276780128479

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.00079107284545898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.00038695335388184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00054502487182617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 791 
 Execution Time:0.0020689964294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.00052213668823242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.00029802322387695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00028896331787109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 791 
 Execution Time:0.0014021396636963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001101016998291

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001101016998291

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038313865661621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030279159545898

select * from examination where examination_id= '831' and   office_id= '1' 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 831 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '831' 
 Execution Time:0.00034904479980469

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013320446014404

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087881088256836

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01537299156189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01537299156189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01537299156189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.0005648136138916

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.0003659725189209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00034022331237793

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 791 
 Execution Time:0.0019838809967041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090813636779785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090813636779785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select * from examination where examination_id= '831' and   office_id= '1' 
 Execution Time:0.00079011917114258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 831 
 Execution Time:0.00096487998962402

select * from examination_chargesdetails where  examination_id= '831' 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0091471672058105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.00017309188842773

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00018501281738281

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 791 
 Execution Time:0.0011110305786133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from examination where examination_id= '831' and   office_id= '1' 
 Execution Time:0.00099611282348633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058221817016602

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 831 
 Execution Time:0.00060796737670898

select * from examination_chargesdetails where  examination_id= '831' 
 Execution Time:0.00035309791564941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003201961517334

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047087669372559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.0010929107666016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.00039196014404297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00027298927307129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 791 
 Execution Time:0.0011050701141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086188316345215

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023293495178223

select * from examination where examination_id= '831' and   office_id= '1' 
 Execution Time:0.00066685676574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 831 
 Execution Time:0.00031805038452148

select * from examination_chargesdetails where  examination_id= '831' 
 Execution Time:0.00026392936706543

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0008549690246582

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00027680397033691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00020003318786621

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00038790702819824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092506408691406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092506408691406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010759830474854

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010759830474854

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055980682373047

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.00064897537231445

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.00067901611328125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038061141967773

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038061141967773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.0077199935913086

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.0032491683959961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.0060319900512695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0046648979187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039260387420654

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.00091910362243652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.00021982192993164

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.00022506713867188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066184997558594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066184997558594

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020813941955566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00037789344787598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00028610229492188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00035214424133301

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0014550685882568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014450550079346

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014450550079346

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058078765869141

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.00092387199401855

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.00033998489379883

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.00032901763916016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018219947814941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018219947814941

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='786' and  office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from patient_followup where  patient_registration_id = '786' and patient_followup_date='2022-04-11' and office_id= '1' 
 Execution Time:0.00055098533630371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 789 
 Execution Time:0.00032782554626465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 905 
 Execution Time:0.0002748966217041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 905  and `patient_registration_id` = 789 
 Execution Time:0.00023508071899414

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 789 
 Execution Time:0.0012228488922119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select * from examination where examination_id= '825' and   office_id= '1' 
 Execution Time:0.00068092346191406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 825 
 Execution Time:0.00046706199645996

select * from examination_chargesdetails where  examination_id= '825' 
 Execution Time:0.00023484230041504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059103965759277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059103965759277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049591064453125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024604797363281

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.0070970058441162

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 786 
 Execution Time:0.00035619735717773

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 902 
 Execution Time:0.00033998489379883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 902  and `patient_registration_id` = 786 
 Execution Time:0.00034999847412109

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 786 
 Execution Time:0.0017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select * from examination where examination_id= '824' and   office_id= '1' 
 Execution Time:0.0012269020080566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 824 
 Execution Time:0.00040507316589355

select * from examination_chargesdetails where  examination_id= '824' 
 Execution Time:0.00043916702270508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098204612731934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00098204612731934

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 791 
 Execution Time:0.00045108795166016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 909 
 Execution Time:0.00044393539428711

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 909  and `patient_registration_id` = 791 
 Execution Time:0.00033807754516602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 791 
 Execution Time:0.0019409656524658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select * from examination where examination_id= '831' and   office_id= '1' 
 Execution Time:0.001655101776123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 831 
 Execution Time:0.00046610832214355

select * from examination_chargesdetails where  examination_id= '831' 
 Execution Time:0.00033903121948242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059819221496582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059819221496582

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 790 
 Execution Time:0.00085186958312988

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 906 
 Execution Time:0.001356840133667

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 906  and `patient_registration_id` = 790 
 Execution Time:0.0007789134979248

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 790 
 Execution Time:0.002000093460083

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0066778659820557

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0066778659820557

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078010559082031

select * from examination where examination_id= '828' and   office_id= '1' 
 Execution Time:0.0037209987640381

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026769638061523

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 828 
 Execution Time:0.0039799213409424

select * from examination_chargesdetails where  examination_id= '828' 
 Execution Time:0.0037980079650879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003633975982666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003633975982666

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034720897674561

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 114 
 Execution Time:0.00042915344238281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 907 
 Execution Time:0.00030207633972168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 907  and `patient_registration_id` = 114 
 Execution Time:0.00044393539428711

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 114 
 Execution Time:0.0019180774688721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 114 
 Execution Time:0.00033879280090332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 907 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 907  and `patient_registration_id` = 114 
 Execution Time:0.00021791458129883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 114 
 Execution Time:0.0014710426330566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select * from examination where examination_id= '829' and   office_id= '1' 
 Execution Time:0.0034968852996826

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 829 
 Execution Time:0.00038409233093262

select * from examination_chargesdetails where  examination_id= '829' 
 Execution Time:0.00029706954956055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076389312744141

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076389312744141

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017430782318115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017430782318115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017430782318115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017430782318115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003079891204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017430782318115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003079891204834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023558139801025

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017430782318115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003079891204834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005948543548584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005948543548584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077486038208008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077486038208008

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032806396484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012328624725342

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097918510437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 792 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 910 
 Execution Time:0.00020289421081543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 910  and `patient_registration_id` = 792 
 Execution Time:0.0010309219360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 792 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 910 
 Execution Time:0.00017189979553223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 910  and `patient_registration_id` = 792 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 792 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 910 
 Execution Time:0.00024986267089844

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 910  and `patient_registration_id` = 792 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016582012176514

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016582012176514

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010960102081299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017921924591064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010960102081299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017921924591064

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074410438537598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074410438537598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019538402557373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028481483459473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019538402557373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011706352233887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014805793762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036787986755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010709762573242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010709762573242

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001201868057251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001201868057251

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00046896934509277

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019898414611816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019898414611816

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010161399841309

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010161399841309

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 793 
 Execution Time:0.00063514709472656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 911 
 Execution Time:0.00077605247497559

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 911  and `patient_registration_id` = 793 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076985359191895

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076985359191895

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011639595031738

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011639595031738

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093317031860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093317031860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093317031860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00067400932312012

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00067400932312012

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011870861053467

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011870861053467

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067019462585449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 794 
 Execution Time:0.00036191940307617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 912 
 Execution Time:0.0003361701965332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 912  and `patient_registration_id` = 794 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018360614776611

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018360614776611

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088286399841309

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018360614776611

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088286399841309

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 795 
 Execution Time:0.00040388107299805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 913 
 Execution Time:0.00024199485778809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 913  and `patient_registration_id` = 795 
 Execution Time:0.00069189071655273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008690357208252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008690357208252

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 792 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 910 
 Execution Time:0.00025177001953125

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 910  and `patient_registration_id` = 792 
 Execution Time:0.00048112869262695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 792 
 Execution Time:0.0015017986297607

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014081001281738

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014081001281738

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076508522033691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076508522033691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select * from examination where examination_id= '832' and   office_id= '1' 
 Execution Time:0.0011100769042969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 832 
 Execution Time:0.0028300285339355

select * from examination_chargesdetails where  examination_id= '832' 
 Execution Time:0.0015490055084229

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0024809837341309

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00075697898864746

SELECT *
FROM `examination`
WHERE `examination_id` = 832 
 Execution Time:0.00064706802368164

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00027894973754883

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00079107284545898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 792 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0006871223449707

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=832 
 Execution Time:0.0018229484558105

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=832 
 Execution Time:0.00088787078857422

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=832 
 Execution Time:0.00077915191650391

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=832 
 Execution Time:0.0004119873046875

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='832' and office_id='1' 
 Execution Time:0.0013771057128906

select * from examination_chargesdetails where  examination_id= '832' 
 Execution Time:0.00061988830566406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 796 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 914 
 Execution Time:0.00023317337036133

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 914  and `patient_registration_id` = 796 
 Execution Time:0.00016117095947266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021791458129883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 793 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 911 
 Execution Time:0.00029802322387695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 911  and `patient_registration_id` = 793 
 Execution Time:0.00031495094299316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 793 
 Execution Time:0.0015978813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select * from examination where examination_id= '833' and   office_id= '1' 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 833 
 Execution Time:0.00022506713867188

select * from examination_chargesdetails where  examination_id= '833' 
 Execution Time:0.00029420852661133

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068998336791992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 796 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 914 
 Execution Time:0.00017714500427246

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 914  and `patient_registration_id` = 796 
 Execution Time:0.0004270076751709

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 796 
 Execution Time:0.0012660026550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from examination where examination_id= '836' and   office_id= '1' 
 Execution Time:0.00079703330993652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 836 
 Execution Time:0.00023293495178223

select * from examination_chargesdetails where  examination_id= '836' 
 Execution Time:0.00029897689819336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059318542480469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059318542480469

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074887275695801

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.003328800201416

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072002410888672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017309188842773

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017309188842773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 797 
 Execution Time:0.003197193145752

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 915 
 Execution Time:0.00053977966308594

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 915  and `patient_registration_id` = 797 
 Execution Time:0.00311279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.013934135437012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.013934135437012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0051960945129395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 796 
 Execution Time:0.00049495697021484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 914 
 Execution Time:0.00033116340637207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 914  and `patient_registration_id` = 796 
 Execution Time:0.00034785270690918

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 796 
 Execution Time:0.0022549629211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select * from examination where examination_id= '836' and   office_id= '1' 
 Execution Time:0.00064802169799805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 836 
 Execution Time:0.00023794174194336

select * from examination_chargesdetails where  examination_id= '836' 
 Execution Time:0.00025606155395508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043582916259766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 796 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 914 
 Execution Time:0.00024104118347168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 914  and `patient_registration_id` = 796 
 Execution Time:0.00021982192993164

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 796 
 Execution Time:0.001133918762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select * from examination where examination_id= '836' and   office_id= '1' 
 Execution Time:0.00073909759521484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 836 
 Execution Time:0.00028705596923828

select * from examination_chargesdetails where  examination_id= '836' 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 797 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 915 
 Execution Time:0.00019311904907227

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 915  and `patient_registration_id` = 797 
 Execution Time:0.00021195411682129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 797 
 Execution Time:0.0011990070343018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select * from examination where examination_id= '837' and   office_id= '1' 
 Execution Time:0.00084304809570312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 837 
 Execution Time:0.00032997131347656

select * from examination_chargesdetails where  examination_id= '837' 
 Execution Time:0.00031495094299316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020885467529297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041580200195312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041580200195312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099992752075195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099992752075195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028131008148193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016191005706787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099992752075195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028131008148193

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079989433288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079989433288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054216384887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054216384887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054216384887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010368824005127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054216384887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010368824005127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054216384887695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010368824005127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00036501884460449

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071406364440918

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054001808166504

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016980171203613

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035381317138672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019400119781494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019400119781494

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00088882446289062

SELECT *
FROM `examination`
WHERE `examination_id` = 837 
 Execution Time:0.00075101852416992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029706954956055

SELECT *
FROM `user`
WHERE `user_id` = 106 
 Execution Time:0.0006260871887207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 797 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00060606002807617

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=837 
 Execution Time:0.0026760101318359

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=837 
 Execution Time:0.0016059875488281

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=837 
 Execution Time:0.00076699256896973

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=837 
 Execution Time:0.0002899169921875

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='837' and office_id='1' 
 Execution Time:0.0022709369659424

select * from examination_chargesdetails where  examination_id= '837' 
 Execution Time:0.00027298927307129

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 798 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 916 
 Execution Time:0.0002138614654541

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 916  and `patient_registration_id` = 798 
 Execution Time:0.00077986717224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092101097106934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092101097106934

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00038790702819824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=759  
 Execution Time:0.0035490989685059

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00038790702819824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=759  
 Execution Time:0.0035490989685059

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=759  
 Execution Time:0.00077486038208008

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00038790702819824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=759  
 Execution Time:0.0035490989685059

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=759  
 Execution Time:0.00077486038208008

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='759' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004730224609375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075387954711914

select count(*) as cnt from patient_appointment where  patient_registration_id = 759 and appointment_date= '2022-04-04' 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079512596130371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079512596130371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032591819763184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 798 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 916 
 Execution Time:0.00028610229492188

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 916  and `patient_registration_id` = 798 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014119148254395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014119148254395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014119148254395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014119148254395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 798 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 916 
 Execution Time:0.00044989585876465

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 916  and `patient_registration_id` = 798 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034821033477783

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034821033477783

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015521049499512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015521049499512

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014269351959229

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00080680847167969

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00080680847167969

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=257  
 Execution Time:0.0036530494689941

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00080680847167969

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=257  
 Execution Time:0.0036530494689941

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=257  
 Execution Time:0.00099802017211914

select count(*) as cnt from patient_registration where  patient_registration_id= '257' and  office_id= '1' 
 Execution Time:0.00080680847167969

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=257  
 Execution Time:0.0036530494689941

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=257  
 Execution Time:0.00099802017211914

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='257' and  office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001147985458374

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001147985458374

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from patient_appointment where  patient_registration_id = 257 and appointment_date= '2022-04-04' 
 Execution Time:0.00092697143554688

select count(*) as cnt from patient_registration where  patient_registration_id= '82' and  office_id= '1' 
 Execution Time:0.00092101097106934

select count(*) as cnt from patient_registration where  patient_registration_id= '82' and  office_id= '1' 
 Execution Time:0.00092101097106934

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=82  
 Execution Time:0.0028519630432129

select count(*) as cnt from patient_registration where  patient_registration_id= '82' and  office_id= '1' 
 Execution Time:0.00092101097106934

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=82  
 Execution Time:0.0028519630432129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=82  
 Execution Time:0.0005958080291748

select count(*) as cnt from patient_registration where  patient_registration_id= '82' and  office_id= '1' 
 Execution Time:0.00092101097106934

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=82  
 Execution Time:0.0028519630432129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=82  
 Execution Time:0.0005958080291748

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='82' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061917304992676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061917304992676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030684471130371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010879039764404

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010879039764404

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.004796028137207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010879039764404

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 799 
 Execution Time:0.0011389255523682

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 918 
 Execution Time:0.00071597099304199

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 918  and `patient_registration_id` = 799 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018939971923828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018939971923828

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005648136138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005648136138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005648136138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005648136138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005648136138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087594985961914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005648136138916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087594985961914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029518604278564

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_registration where  patient_registration_id= '782' and  office_id= '1' 
 Execution Time:0.0019650459289551

select count(*) as cnt from patient_registration where  patient_registration_id= '782' and  office_id= '1' 
 Execution Time:0.0019650459289551

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=782  
 Execution Time:0.0068728923797607

select count(*) as cnt from patient_registration where  patient_registration_id= '782' and  office_id= '1' 
 Execution Time:0.0019650459289551

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=782  
 Execution Time:0.0068728923797607

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=782  
 Execution Time:0.00066709518432617

select count(*) as cnt from patient_registration where  patient_registration_id= '782' and  office_id= '1' 
 Execution Time:0.0019650459289551

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=782  
 Execution Time:0.0068728923797607

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=782  
 Execution Time:0.00066709518432617

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='782' and  office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00090193748474121

select count(*) as cnt from patient_appointment where  patient_registration_id = 782 and appointment_date= '2022-04-04' 
 Execution Time:0.00064516067504883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 794 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 912 
 Execution Time:0.00018715858459473

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 912  and `patient_registration_id` = 794 
 Execution Time:0.00046396255493164

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 794 
 Execution Time:0.0014538764953613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select * from examination where examination_id= '834' and   office_id= '1' 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 834 
 Execution Time:0.00084090232849121

select * from examination_chargesdetails where  examination_id= '834' 
 Execution Time:0.00085115432739258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070691108703613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070691108703613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015010833740234

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001828670501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00035190582275391

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.0004889965057373

select gender from patient_title where  patient_title_id = '7' and office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078487396240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078487396240234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078487396240234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016710758209229

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005638599395752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 257 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 919 
 Execution Time:0.00015902519226074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 919  and `patient_registration_id` = 257 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 257 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 919 
 Execution Time:0.00016307830810547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 919  and `patient_registration_id` = 257 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 795 
 Execution Time:0.00036287307739258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 913 
 Execution Time:0.00030612945556641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 913  and `patient_registration_id` = 795 
 Execution Time:0.00040197372436523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 795 
 Execution Time:0.0018448829650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 795 
 Execution Time:0.00023388862609863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 913 
 Execution Time:0.00018119812011719

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 913  and `patient_registration_id` = 795 
 Execution Time:0.00023603439331055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 795 
 Execution Time:0.0019550323486328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045394897460938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045394897460938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select * from examination where examination_id= '835' and   office_id= '1' 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 835 
 Execution Time:0.00031900405883789

select * from examination_chargesdetails where  examination_id= '835' 
 Execution Time:0.00025010108947754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037312507629395

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0027058124542236

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054216384887695

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051593780517578

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 920 
 Execution Time:0.00022387504577637

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 920  and `patient_registration_id` = 782 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.0002892017364502

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 920 
 Execution Time:0.00017714500427246

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 920  and `patient_registration_id` = 782 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 257 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 919 
 Execution Time:0.00018000602722168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 919  and `patient_registration_id` = 257 
 Execution Time:0.00043511390686035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 257 
 Execution Time:0.0012331008911133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from examination where examination_id= '840' and   office_id= '1' 
 Execution Time:0.0011229515075684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 840 
 Execution Time:0.00033211708068848

select * from examination_chargesdetails where  examination_id= '840' 
 Execution Time:0.00037598609924316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010089874267578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010089874267578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003821849822998

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00066518783569336

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013689994812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042915344238281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013689994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011789798736572

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011789798736572

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0021481513977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013258457183838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013258457183838

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082492828369141

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093317031860352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093317031860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093317031860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00093317031860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 800 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 921 
 Execution Time:0.00029301643371582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 921  and `patient_registration_id` = 800 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015740394592285

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015740394592285

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058197975158691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058197975158691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058197975158691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058197975158691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019159317016602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029778480529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058197975158691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019159317016602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014851093292236

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012409687042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012409687042236

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038695335388184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065922737121582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065922737121582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 920 
 Execution Time:0.00035309791564941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 920  and `patient_registration_id` = 782 
 Execution Time:0.00062799453735352

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 782 
 Execution Time:0.0018539428710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 920 
 Execution Time:0.00020194053649902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 920  and `patient_registration_id` = 782 
 Execution Time:0.00022697448730469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 782 
 Execution Time:0.0012669563293457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.010924816131592

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 920 
 Execution Time:0.00034999847412109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 920  and `patient_registration_id` = 782 
 Execution Time:0.00024199485778809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 782 
 Execution Time:0.0020499229431152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select * from examination where examination_id= '841' and   office_id= '1' 
 Execution Time:0.0030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015048980712891

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 841 
 Execution Time:0.0033729076385498

select * from examination_chargesdetails where  examination_id= '841' 
 Execution Time:0.0022361278533936

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028491020202637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075411796569824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075411796569824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065898895263672

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009760856628418

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='44' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046300888061523

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009758472442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009758472442627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009758472442627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004270076751709

SELECT *
FROM `examination`
WHERE `examination_id` = 841 
 Execution Time:0.00068807601928711

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00024509429931641

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00072097778320312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00029897689819336

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=841 
 Execution Time:0.0013148784637451

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=841 
 Execution Time:0.00056004524230957

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=841 
 Execution Time:0.00073814392089844

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=841 
 Execution Time:0.00027894973754883

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='841' and office_id='1' 
 Execution Time:0.001060962677002

select * from examination_chargesdetails where  examination_id= '841' 
 Execution Time:0.00024700164794922

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00031685829162598

SELECT *
FROM `examination`
WHERE `examination_id` = 841 
 Execution Time:0.00043201446533203

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00016689300537109

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00014305114746094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 782 
 Execution Time:0.00019407272338867

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00017213821411133

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=841 
 Execution Time:0.001121997833252

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=841 
 Execution Time:0.00046396255493164

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=841 
 Execution Time:0.00033903121948242

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=841 
 Execution Time:0.00021600723266602

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='841' and office_id='1' 
 Execution Time:0.0010459423065186

select * from examination_chargesdetails where  examination_id= '841' 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053715705871582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053715705871582

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00067710876464844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069284439086914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057291984558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 801 
 Execution Time:0.00024318695068359

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 922 
 Execution Time:0.00016117095947266

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 922  and `patient_registration_id` = 801 
 Execution Time:0.00015401840209961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 799 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 918 
 Execution Time:0.00018692016601562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 918  and `patient_registration_id` = 799 
 Execution Time:0.00040984153747559

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 799 
 Execution Time:0.0011110305786133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 799 
 Execution Time:0.00028109550476074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 918 
 Execution Time:0.00022006034851074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 918  and `patient_registration_id` = 799 
 Execution Time:0.00055503845214844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 799 
 Execution Time:0.0015420913696289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036308765411377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036308765411377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036308765411377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0036308765411377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 799 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 918 
 Execution Time:0.00020122528076172

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 918  and `patient_registration_id` = 799 
 Execution Time:0.00022387504577637

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 799 
 Execution Time:0.0012400150299072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from examination where examination_id= '839' and   office_id= '1' 
 Execution Time:0.00066089630126953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 839 
 Execution Time:0.0006098747253418

select * from examination_chargesdetails where  examination_id= '839' 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064992904663086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064992904663086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064611434936523

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037503242492676

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081896781921387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081896781921387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019240379333496

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00094413757324219

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00094413757324219

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014078617095947

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019359588623047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087094306945801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087094306945801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0044679641723633

select count(*) as cnt from patient_title where  patient_title_id = '8' and office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from patient_title where  patient_title_id = '8' and office_id= '1' 
 Execution Time:0.00078392028808594

select gender from patient_title where  patient_title_id = '8' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020678043365479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020678043365479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020678043365479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020678043365479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037200450897217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020678043365479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037200450897217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041279792785645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004457950592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037169456481934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020678043365479

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036649703979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037200450897217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041279792785645

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097990036010742

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089192390441895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089192390441895

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020503997802734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014615058898926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014615058898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014615058898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011181831359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014615058898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011181831359863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014615058898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011181831359863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014615058898926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011181831359863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010879039764404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010879039764404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010879039764404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025300979614258

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00027084350585938

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=759  
 Execution Time:0.0016858577728271

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00027084350585938

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=759  
 Execution Time:0.0016858577728271

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=759  
 Execution Time:0.0010108947753906

select count(*) as cnt from patient_registration where  patient_registration_id= '759' and  office_id= '1' 
 Execution Time:0.00027084350585938

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=759  
 Execution Time:0.0016858577728271

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=759  
 Execution Time:0.0010108947753906

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='759' and  office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082993507385254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082993507385254

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022900104522705

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 789 
 Execution Time:0.00024104118347168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 905 
 Execution Time:0.0053360462188721

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 905  and `patient_registration_id` = 789 
 Execution Time:0.00051593780517578

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 789 
 Execution Time:0.001168966293335

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from examination where examination_id= '825' and   office_id= '1' 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 825 
 Execution Time:0.00059914588928223

select * from examination_chargesdetails where  examination_id= '825' 
 Execution Time:0.00080299377441406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028586387634277

select * from investigation where  investigation_id=2  and office_id= 1 and status=1 
 Execution Time:0.00044488906860352

select * from investigation where  investigation_id=5  and office_id= 1 and status=1 
 Execution Time:0.00086092948913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 789 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 905 
 Execution Time:0.00022006034851074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 905  and `patient_registration_id` = 789 
 Execution Time:0.00037598609924316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 789 
 Execution Time:0.0011329650878906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014169216156006

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014169216156006

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045418739318848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058794021606445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058794021606445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select * from examination where examination_id= '825' and   office_id= '1' 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 825 
 Execution Time:0.00082683563232422

select * from examination_chargesdetails where  examination_id= '825' 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002565860748291

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002565860748291

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024929046630859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002565860748291

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024929046630859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 801 
 Execution Time:0.0027329921722412

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 922 
 Execution Time:0.0029439926147461

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 922  and `patient_registration_id` = 801 
 Execution Time:0.0007469654083252

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 801 
 Execution Time:0.0034089088439941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079989433288574

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079989433288574

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from examination where examination_id= '843' and   office_id= '1' 
 Execution Time:0.0010480880737305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 843 
 Execution Time:0.00031900405883789

select * from examination_chargesdetails where  examination_id= '843' 
 Execution Time:0.00032997131347656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072813034057617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072813034057617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097990036010742

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 806 
 Execution Time:0.00063991546630859

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 927 
 Execution Time:0.00053095817565918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 927  and `patient_registration_id` = 806 
 Execution Time:0.00046396255493164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072789192199707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072789192199707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024294853210449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 800 
 Execution Time:0.0022461414337158

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 921 
 Execution Time:0.0047359466552734

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 921  and `patient_registration_id` = 800 
 Execution Time:0.00035691261291504

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 800 
 Execution Time:0.0016160011291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from examination where examination_id= '842' and   office_id= '1' 
 Execution Time:0.00066709518432617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 842 
 Execution Time:0.00017189979553223

select * from examination_chargesdetails where  examination_id= '842' 
 Execution Time:0.00013613700866699

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025510787963867

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00036501884460449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 807 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 928 
 Execution Time:0.00024199485778809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 928  and `patient_registration_id` = 807 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 807 
 Execution Time:0.00047183036804199

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 928 
 Execution Time:0.00030088424682617

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 928  and `patient_registration_id` = 807 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053691864013672

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 800 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 921 
 Execution Time:0.00023913383483887

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 921  and `patient_registration_id` = 800 
 Execution Time:0.00039100646972656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 800 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select * from examination where examination_id= '842' and   office_id= '1' 
 Execution Time:0.00098514556884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 842 
 Execution Time:0.00025296211242676

select * from examination_chargesdetails where  examination_id= '842' 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034594535827637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 806 
 Execution Time:0.00022315979003906

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 927 
 Execution Time:0.00017905235290527

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 927  and `patient_registration_id` = 806 
 Execution Time:0.00027608871459961

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 806 
 Execution Time:0.0010619163513184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select * from examination where examination_id= '844' and   office_id= '1' 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 844 
 Execution Time:0.00023198127746582

select * from examination_chargesdetails where  examination_id= '844' 
 Execution Time:0.00031208992004395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064420700073242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064420700073242

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031781196594238

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006401538848877

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060606002807617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 807 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 928 
 Execution Time:0.00016999244689941

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 928  and `patient_registration_id` = 807 
 Execution Time:0.00013208389282227

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 807 
 Execution Time:0.0011029243469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select * from examination where examination_id= '845' and   office_id= '1' 
 Execution Time:0.00060892105102539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 845 
 Execution Time:0.00028610229492188

select * from examination_chargesdetails where  examination_id= '845' 
 Execution Time:0.0005040168762207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040411949157715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040411949157715

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025010108947754

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021891593933105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021891593933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021891593933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021891593933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021891593933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00089287757873535

select count(*) as cnt from patient_registration where  patient_registration_id= '801' and  office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_registration where  patient_registration_id= '801' and  office_id= '1' 
 Execution Time:0.00037693977355957

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=801  
 Execution Time:0.0046679973602295

select count(*) as cnt from patient_registration where  patient_registration_id= '801' and  office_id= '1' 
 Execution Time:0.00037693977355957

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=801  
 Execution Time:0.0046679973602295

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=801  
 Execution Time:0.0008549690246582

select count(*) as cnt from patient_registration where  patient_registration_id= '801' and  office_id= '1' 
 Execution Time:0.00037693977355957

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=801  
 Execution Time:0.0046679973602295

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=801  
 Execution Time:0.0008549690246582

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='801' and  office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033712387084961

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.0025930404663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 793 
 Execution Time:0.00044894218444824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 911 
 Execution Time:0.00044512748718262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 911  and `patient_registration_id` = 793 
 Execution Time:0.00048208236694336

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 793 
 Execution Time:0.0017640590667725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select * from examination where examination_id= '833' and   office_id= '1' 
 Execution Time:0.001410961151123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 833 
 Execution Time:0.00026512145996094

select * from examination_chargesdetails where  examination_id= '833' 
 Execution Time:0.00028705596923828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023519992828369

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023519992828369

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028071403503418

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0042479038238525

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0042479038238525

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034949779510498

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0012857913970947

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 798 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 916 
 Execution Time:0.0003049373626709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 916  and `patient_registration_id` = 798 
 Execution Time:0.00027894973754883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 798 
 Execution Time:0.0018417835235596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 798 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 916 
 Execution Time:0.00026798248291016

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 916  and `patient_registration_id` = 798 
 Execution Time:0.00022411346435547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 798 
 Execution Time:0.0017900466918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select * from examination where examination_id= '838' and   office_id= '1' 
 Execution Time:0.00066685676574707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 838 
 Execution Time:0.00025606155395508

select * from examination_chargesdetails where  examination_id= '838' 
 Execution Time:0.0001988410949707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081300735473633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081300735473633

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033283233642578

select count(*) as cnt from patient_registration where  patient_registration_id= '800' and  office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '800' and  office_id= '1' 
 Execution Time:0.00044393539428711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=800  
 Execution Time:0.0025260448455811

select count(*) as cnt from patient_registration where  patient_registration_id= '800' and  office_id= '1' 
 Execution Time:0.00044393539428711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=800  
 Execution Time:0.0025260448455811

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=800  
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_registration where  patient_registration_id= '800' and  office_id= '1' 
 Execution Time:0.00044393539428711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=800  
 Execution Time:0.0025260448455811

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=800  
 Execution Time:0.00054597854614258

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='800' and  office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029630661010742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034780502319336

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015289783477783

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015289783477783

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0009620189666748

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015289783477783

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0009620189666748

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0018210411071777

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='86' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081992149353027

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='86' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081992149353027

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='86' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081992149353027

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select user_id,name from  user where user_type=6 
 Execution Time:0.00034999847412109

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='86' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081992149353027

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select user_id,name from  user where user_type=6 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028610229492188

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00093793869018555

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00093793869018555

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='87' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00096297264099121

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='87' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00096297264099121

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='87' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00096297264099121

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select user_id,name from  user where user_type=6 
 Execution Time:0.00028395652770996

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='87' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00096297264099121

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select user_id,name from  user where user_type=6 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037884712219238

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011818408966064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020980834960938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014550685882568

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014550685882568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014550685882568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0014550685882568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014989376068115

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 805 
 Execution Time:0.00091099739074707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 926 
 Execution Time:0.0005640983581543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 926  and `patient_registration_id` = 805 
 Execution Time:0.0021350383758545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010969638824463

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010969638824463

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042009353637695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028901100158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00063085556030273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 270 
 Execution Time:0.00040483474731445

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 270  and `patient_registration_id` = 186 
 Execution Time:0.0030920505523682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029299259185791

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029299259185791

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00046110153198242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 270 
 Execution Time:0.00041103363037109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 270  and `patient_registration_id` = 186 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 270 
 Execution Time:0.0002739429473877

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 270  and `patient_registration_id` = 186 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030016899108887


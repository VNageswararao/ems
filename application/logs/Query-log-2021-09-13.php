select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022029876708984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019440650939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017480850219727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022029876708984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013198852539062

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013198852539062

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031068325042725

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069594383239746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079083442687988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079083442687988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038504600524902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026988983154297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096487998962402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028231143951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012691020965576

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_registration where  patient_registration_id= '228' and  office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from patient_registration where  patient_registration_id= '228' and  office_id= '1' 
 Execution Time:0.00037813186645508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='228' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022778511047363

select count(*) as cnt from patient_registration where  patient_registration_id= '228' and  office_id= '1' 
 Execution Time:0.00037813186645508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='228' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022778511047363

select fname,lname,mrdno from patient_registration where  patient_registration_id='228' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_registration where  patient_registration_id= '296' and  office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from patient_registration where  patient_registration_id= '296' and  office_id= '1' 
 Execution Time:0.00050711631774902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='296' and  doctors_registration.office_id= '1' 
 Execution Time:0.00089478492736816

select count(*) as cnt from patient_registration where  patient_registration_id= '296' and  office_id= '1' 
 Execution Time:0.00050711631774902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='296' and  doctors_registration.office_id= '1' 
 Execution Time:0.00089478492736816

select fname,lname,mrdno from patient_registration where  patient_registration_id='296' and  office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023341178894043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023341178894043

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005958080291748

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005958080291748

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046014785766602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060892105102539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select count(*) as cnt from patient_registration where  patient_registration_id= '177' and  office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_registration where  patient_registration_id= '177' and  office_id= '1' 
 Execution Time:0.00051689147949219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='177' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085592269897461

select count(*) as cnt from patient_registration where  patient_registration_id= '177' and  office_id= '1' 
 Execution Time:0.00051689147949219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='177' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085592269897461

select fname,lname,mrdno from patient_registration where  patient_registration_id='177' and  office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018906593322754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069189071655273

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069189071655273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00059986114501953

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025081634521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025081634521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025081634521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025081634521484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002448558807373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069880485534668

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069880485534668

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088286399841309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041294097900391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053286552429199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019097328186035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028181076049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036716461181641

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020217895507812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020217895507812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020217895507812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020217895507812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003359317779541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00050902366638184

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054407119750977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00025820732116699

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055718421936035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055718421936035

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00057792663574219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='287' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014560222625732

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00057792663574219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='287' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014560222625732

select fname,lname,mrdno from patient_registration where  patient_registration_id='287' and  office_id= '1' 
 Execution Time:0.001835823059082

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002899169921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038909912109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033211708068848

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025415420532227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032782554626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050616264343262

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094723701477051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030319690704346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030319690704346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030319690704346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030319690704346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030319690704346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012528896331787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030319690704346

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012528896331787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011239051818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011239051818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0040268898010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011239051818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0040268898010254

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013649463653564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014159679412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00038313865661621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='287' and  doctors_registration.office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00038313865661621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='287' and  doctors_registration.office_id= '1' 
 Execution Time:0.00055289268493652

select fname,lname,mrdno from patient_registration where  patient_registration_id='287' and  office_id= '1' 
 Execution Time:0.00015902519226074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017101049423218

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017101049423218

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081515312194824

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031685829162598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047683715820312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047683715820312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029611587524414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010578632354736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096321105957031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049090385437012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033903121948242

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00071907043457031

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00071907043457031

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003669261932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053000450134277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053000450134277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045108795166016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035595893859863

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017094612121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051116943359375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051116943359375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068116188049316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045394897460938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043678283691406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043678283691406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00031709671020508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00031709671020508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049400329589844

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00014805793762207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009160041809082

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009160041809082

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00029420852661133

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026416778564453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018149137496948

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018149137496948

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018149137496948

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060510635375977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018149137496948

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060510635375977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018149137496948

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060510635375977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018149137496948

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060510635375977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072503089904785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062918663024902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057101249694824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00034689903259277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='287' and  doctors_registration.office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from patient_registration where  patient_registration_id= '287' and  office_id= '1' 
 Execution Time:0.00034689903259277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='287' and  doctors_registration.office_id= '1' 
 Execution Time:0.00067806243896484

select fname,lname,mrdno from patient_registration where  patient_registration_id='287' and  office_id= '1' 
 Execution Time:0.00023412704467773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012969970703125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012969970703125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051307678222656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053691864013672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019171237945557

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019171237945557

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0032899379730225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018191337585449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048112869262695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select count(*) as cnt from patient_registration where  patient_registration_id= '312' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '312' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='312' and  doctors_registration.office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from patient_registration where  patient_registration_id= '312' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='312' and  doctors_registration.office_id= '1' 
 Execution Time:0.00056195259094238

select fname,lname,mrdno from patient_registration where  patient_registration_id='312' and  office_id= '1' 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00039887428283691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00096011161804199

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00039887428283691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00096011161804199

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069212913513184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069212913513184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00059318542480469

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0026330947875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00044107437133789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00087285041809082

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00044107437133789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00087285041809082

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00057816505432129

select count(*) as cnt from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00040602684020996

select * from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00040602684020996

select * from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00041007995605469

select * from billing_detail where  billing_master_id= '47' 
 Execution Time:0.00049996376037598

select count(*) as cnt from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00040602684020996

select * from billing_master where  billing_master_id= '47' and  office_id= '1' 
 Execution Time:0.00041007995605469

select * from billing_detail where  billing_master_id= '47' 
 Execution Time:0.00049996376037598

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00034499168395996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0008399486541748

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00034499168395996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0008399486541748

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00070309638977051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011179447174072

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00070309638977051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011179447174072

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00027680397033691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031208992004395

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select count(*) as cnt from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00066399574279785

select * from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00066399574279785

select * from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00036096572875977

select * from billing_detail where  billing_master_id= '46' 
 Execution Time:0.00060510635375977

select count(*) as cnt from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00066399574279785

select * from billing_master where  billing_master_id= '46' and  office_id= '1' 
 Execution Time:0.00036096572875977

select * from billing_detail where  billing_master_id= '46' 
 Execution Time:0.00060510635375977

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00073409080505371

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00034093856811523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079703330993652

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00034093856811523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079703330993652

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00018405914306641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00024104118347168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011429786682129

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00024104118347168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011429786682129

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024080276489258

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00042319297790527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00011396408081055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023748874664307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013561248779297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023748874664307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023422241210938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058412551879883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017499923706055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071096420288086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027029514312744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032711029052734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050878524780273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050020217895508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050020217895508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050020217895508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050020217895508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038814544677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072789192199707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072789192199707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030183792114258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002899169921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019121170043945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00076007843017578

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00077295303344727

select count(*) as cnt from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00045204162597656

select * from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00045204162597656

select * from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00033998489379883

select * from billing_detail where  billing_master_id= '48' 
 Execution Time:0.00062108039855957

select count(*) as cnt from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00045204162597656

select * from billing_master where  billing_master_id= '48' and  office_id= '1' 
 Execution Time:0.00033998489379883

select * from billing_detail where  billing_master_id= '48' 
 Execution Time:0.00062108039855957

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00080204010009766

select count(*) as cnt from patient_registration where  patient_registration_id= '205' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='205' and  doctors_registration.office_id= '1' 
 Execution Time:0.00080204010009766

select fname,lname,mrdno from patient_registration where  patient_registration_id='205' and  office_id= '1' 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020718574523926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020718574523926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020718574523926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020718574523926

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004432201385498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select count(*) as cnt from patient_registration where  patient_registration_id= '223' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '223' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='223' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_registration where  patient_registration_id= '223' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='223' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063800811767578

select fname,lname,mrdno from patient_registration where  patient_registration_id='223' and  office_id= '1' 
 Execution Time:0.00018215179443359

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060319900512695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060319900512695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020549297332764

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020549297332764

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012431144714355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045204162597656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061202049255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003593921661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003593921661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003593921661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003593921661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003593921661377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040810108184814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0041320323944092

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038130283355713

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034148693084717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040810108184814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045480728149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041601657867432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041601657867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041601657867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037331581115723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041601657867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037331581115723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041601657867432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037331581115723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048010349273682

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00307297706604

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00032806396484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00032806396484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00072503089904785

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.00018501281738281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088310241699219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088310241699219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005028247833252

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00054693222045898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012271404266357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038981437683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006861686706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006861686706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006861686706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006861686706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006861686706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00041913986206055

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035982131958008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035982131958008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035982131958008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035982131958008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035982131958008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035982131958008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046181678771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068306922912598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074005126953125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042486190795898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032806396484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041699409484863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063204765319824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00052094459533691

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00024318695068359

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00111985206604

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005648136138916

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005648136138916

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031571388244629

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031571388244629

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027668476104736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063896179199219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020511150360107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063896179199219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020511150360107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063896179199219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020511150360107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063896179199219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020511150360107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003605842590332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031421184539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031421184539795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031421184539795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031421184539795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031421184539795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031421184539795

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049810409545898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038719177246094

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038719177246094

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036883354187012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065321922302246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065321922302246

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065321922302246

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0065321922302246

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013802051544189

select count(*) as cnt from patient_registration where  patient_registration_id= '223' and  office_id= '1' 
 Execution Time:0.0061109066009521

select count(*) as cnt from patient_registration where  patient_registration_id= '223' and  office_id= '1' 
 Execution Time:0.0061109066009521

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='223' and  doctors_registration.office_id= '1' 
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_registration where  patient_registration_id= '223' and  office_id= '1' 
 Execution Time:0.0061109066009521

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='223' and  doctors_registration.office_id= '1' 
 Execution Time:0.00089502334594727

select fname,lname,mrdno from patient_registration where  patient_registration_id='223' and  office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014159679412842

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014159679412842

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013930797576904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020194053649902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00069808959960938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011568069458008

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00069808959960938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011568069458008

select fname,lname,mrdno from patient_registration where  patient_registration_id='325' and  office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015420913696289

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015420913696289

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056560039520264

select * from investigation where  investigation_id=12  and office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005958080291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005958080291748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0031979084014893

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select * from office where  office_id= '1' 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00041389465332031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091719627380371

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00041389465332031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091719627380371

select fname,lname,mrdno from patient_registration where  patient_registration_id='325' and  office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select * from investigation where  investigation_id=12  and office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from patient_registration where  patient_registration_id= '33' and  office_id= '1' 
 Execution Time:0.0028810501098633

select count(*) as cnt from patient_registration where  patient_registration_id= '33' and  office_id= '1' 
 Execution Time:0.0028810501098633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='33' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014848709106445

select count(*) as cnt from patient_registration where  patient_registration_id= '33' and  office_id= '1' 
 Execution Time:0.0028810501098633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='33' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014848709106445

select fname,lname,mrdno from patient_registration where  patient_registration_id='33' and  office_id= '1' 
 Execution Time:0.0041770935058594

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0046350955963135

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0046350955963135

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0049228668212891

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00052905082702637

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00052905082702637

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00032210350036621

select * from billing_detail where  billing_master_id= '51' 
 Execution Time:0.00040888786315918

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00052905082702637

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00032210350036621

select * from billing_detail where  billing_master_id= '51' 
 Execution Time:0.00040888786315918

select * from investigation where  investigation_id=12  and office_id= 1 and status=1 
 Execution Time:0.00026607513427734

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.0011858940124512

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.0011858940124512

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028588771820068

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.0011858940124512

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028588771820068

select fname,lname,mrdno from patient_registration where  patient_registration_id='325' and  office_id= '1' 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0011520385742188

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0011520385742188

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00068211555480957

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00068211555480957

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00068211555480957

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00039100646972656

select * from billing_detail where  billing_master_id= '51' 
 Execution Time:0.00029921531677246

select count(*) as cnt from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00068211555480957

select * from billing_master where  billing_master_id= '51' and  office_id= '1' 
 Execution Time:0.00039100646972656

select * from billing_detail where  billing_master_id= '51' 
 Execution Time:0.00029921531677246

select * from investigation where  investigation_id=12  and office_id= 1 and status=1 
 Execution Time:0.00028181076049805

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00046086311340332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010309219360352

select count(*) as cnt from patient_registration where  patient_registration_id= '325' and  office_id= '1' 
 Execution Time:0.00046086311340332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010309219360352

select fname,lname,mrdno from patient_registration where  patient_registration_id='325' and  office_id= '1' 
 Execution Time:0.00094199180603027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011661052703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0016000270843506

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0016000270843506

select * from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0016000270843506

select * from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.00040102005004883

select * from billing_detail where  billing_master_id= '49' 
 Execution Time:0.00047397613525391

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0016000270843506

select * from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.00040102005004883

select * from billing_detail where  billing_master_id= '49' 
 Execution Time:0.00047397613525391

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00065398216247559

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00053501129150391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00069785118103027

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00053501129150391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00069785118103027

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018310546875

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0004279613494873

select * from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0004279613494873

select * from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.00033402442932129

select * from billing_detail where  billing_master_id= '49' 
 Execution Time:0.00037717819213867

select count(*) as cnt from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.0004279613494873

select * from billing_master where  billing_master_id= '49' and  office_id= '1' 
 Execution Time:0.00033402442932129

select * from billing_detail where  billing_master_id= '49' 
 Execution Time:0.00037717819213867

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00061917304992676

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00036001205444336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084900856018066

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00036001205444336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084900856018066

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056195259094238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select * from office where  office_id= '1' 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045239925384521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045239925384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045239925384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026428699493408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045239925384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026428699493408

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045540332794189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078299045562744

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037481784820557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045239925384521

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026428699493408

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045540332794189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039448738098145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041985511779785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045468807220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086116790771484

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00072503089904785

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092911720275879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092911720275879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035398006439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035398006439209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035398006439209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035398006439209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035398006439209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003587007522583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034949779510498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019619464874268

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035398006439209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039939880371094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003587007522583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039620399475098

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001828670501709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049209594726562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048685073852539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032379627227783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039758682250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002180814743042

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032379627227783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039989948272705

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007319450378418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007319450378418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036170482635498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036170482635498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020759105682373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036368370056152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036170482635498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020759105682373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017228126525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079202651977539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select * from office where  office_id= '1' 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054216384887695

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00068402290344238

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0012881755828857

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0012881755828857

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00057697296142578

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.008901834487915

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.008901834487915

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036096572875977


select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0019721984863281

select count(*) as cnt from opdcharge where  name = 'NEW CONSULTATION' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from opdcharge where  name = 'NEW CONSULTATION' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  name = 'NEW CONSULTATION FREE' and office_id= '1' 
 Execution Time:0.00064182281494141

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0025367736816406

select count(*) as cnt from investigation where  name = 'FITNESS CERTIFICATE(inclusive of Dr.Consultation)' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from investigation where  name = 'POSTERIOR SUBTENON TRIAMCINOLONE(MINI OT STERILE PROCEDURE' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from investigation where  name = 'EYE LID/CORNEAL INJURIES(OT PROCEEDURE) SUTURES' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from investigation where  name = 'EYE LID/CORNEAL INJURIES(OT PROCEEDURE) WITH OUT STURES' and office_id= '1' 
 Execution Time:0.0013279914855957

select count(*) as cnt from investigation where  name = 'CHALAZION -I&amp;C(INCISION &amp; CURETTAGE)' and office_id= '1' 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022459030151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022459030151367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022459030151367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022459030151367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013787746429443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022459030151367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013787746429443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025179386138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020310878753662

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026991367340088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022459030151367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013787746429443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019478797912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046920776367188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046920776367188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022270679473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022270679473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027391910552979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021889209747314

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022270679473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021109580993652

select count(*) as cnt from complaints where  name = 'Irritation' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from complaints where  name = 'Watering' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from complaints where  name = 'Discharge' and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from complaints where  name = 'Pain' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from complaints where  name = 'Redness' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from complaints where  name = 'Swelling' and office_id= '1' 
 Execution Time:0.0027449131011963

select count(*) as cnt from complaints where  name = 'Itching' and office_id= '1' 
 Execution Time:0.00066709518432617

select count(*) as cnt from complaints where  name = 'Blurring of vision distance' and office_id= '1' 
 Execution Time:0.003101110458374

select count(*) as cnt from complaints where  name = 'Blurring of vision near' and office_id= '1' 
 Execution Time:0.00069284439086914

select count(*) as cnt from complaints where  name = 'Photophobia' and office_id= '1' 
 Execution Time:0.002424955368042

select count(*) as cnt from complaints where  name = 'Pricking Sensation' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from complaints where  name = 'Headache' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from complaints where  name = 'Burning sensation' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from complaints where  name = 'Double vision' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from complaints where  name = 'FB Sensation' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from complaints where  name = 'Floaters' and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from complaints where  name = 'Sudden loss of vision' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from complaints where  name = 'Flashing of light' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from complaints where  name = 'Color halos' and office_id= '1' 
 Execution Time:0.0014870166778564

select count(*) as cnt from complaints where  name = 'Misty vision' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from complaints where  name = 'Dry eye' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from complaints where  name = 'Dandruff in eye lashes' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from complaints where  name = 'Twitting' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from complaints where  name = 'Injury' and office_id= '1' 
 Execution Time:0.0015749931335449

select count(*) as cnt from medical_history where  name = 'Diabetic mellitus' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from medical_history where  name = 'Hypertension' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from medical_history where  name = 'Asthma' and office_id= '1' 
 Execution Time:0.00071096420288086

select count(*) as cnt from medical_history where  name = 'Thyroid' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from medical_history where  name = 'Arthritis' and office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from medical_history where  name = 'Cardiac' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from medical_history where  name = 'Skin Allergy' and office_id= '1' 
 Execution Time:0.0037980079650879

select count(*) as cnt from medical_history where  name = 'Seizure' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from medical_history where  name = 'Wheezing' and office_id= '1' 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093793869018555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093793869018555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093793869018555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00016498565673828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081300735473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045895576477051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081300735473633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006098747253418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006098747253418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088906288146973

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088906288146973

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094389915466309

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094389915466309

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075817108154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075817108154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047183036804199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075817108154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003026008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003026008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095915794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001244068145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001244068145752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053286552429199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011610984802246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011610984802246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011610984802246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002938985824585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011610984802246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002938985824585

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077598094940186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011610984802246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002938985824585

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077598094940186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011610984802246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011360645294189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002938985824585

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0077598094940186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026719570159912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042581558227539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042581558227539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0124831199646

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0124831199646

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0058689117431641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020151138305664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020151138305664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020151138305664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020151138305664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020151138305664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020151138305664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054717063903809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017781972885132

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017781972885132

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029292106628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017781972885132

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029292106628418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022609233856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017781972885132

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029292106628418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022609233856201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043678283691406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017781972885132

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029292106628418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022609233856201

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011546850204468

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011546850204468

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011546850204468

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011546850204468

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011546850204468

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089001655578613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052511692047119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011546850204468

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089001655578613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016000270843506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016000270843506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016000270843506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016000270843506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023701190948486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016000270843506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023701190948486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076291561126709

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038931369781494

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016000270843506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023701190948486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075984001159668

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075984001159668

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035650730133057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090789794921875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00090789794921875

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010800361633301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010800361633301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010800361633301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010800361633301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077605247497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077605247497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020384788513184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012151956558228

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077779293060303

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028629302978516

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032589435577393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032589435577393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026102066040039

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010998249053955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032589435577393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058460235595703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058460235595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053880214691162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058460235595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053880214691162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058460235595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053880214691162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038127899169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058460235595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053880214691162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038127899169922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036859512329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035159587860107

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039160251617432

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0056021213531494

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0070509910583496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0058460235595703

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053880214691162

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032551288604736

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038127899169922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036859512329102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018539428710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027310848236084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018539428710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 11 
 Execution Time:0.00018787384033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026631355285645

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 9 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 10 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023050308227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00077486038208008

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00077486038208008

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044760704040527

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00077486038208008

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044760704040527

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.0010421276092529

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.010186910629272

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.010186910629272

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0034239292144775

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0034239292144775

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='9' and  doctors_registration.office_id= '1' 
 Execution Time:0.010500907897949

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='9' and  doctors_registration.office_id= '1' 
 Execution Time:0.010500907897949

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='9' and  office_id= '1' 
 Execution Time:0.0014078617095947

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052118301391602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052118301391602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010449886322021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027918815612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027918815612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027918815612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027918815612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027918815612793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select count(*) as cnt from source where  name = 'STAFF REFERRAL' and office_id= '1' 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047087669372559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095915794372559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095915794372559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061607360839844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035278797149658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035278797149658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035278797149658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003828763961792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035278797149658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003828763961792

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035278797149658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003828763961792

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038020610809326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051920413970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035278797149658

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003828763961792

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038020610809326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002612829208374

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0040109157562256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045514106750488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00083112716674805

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00083112716674805

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0028657913208008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024118423461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024118423461914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072383880615234

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0025539398193359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022609233856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022609233856201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022609233856201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022609233856201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022609233856201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022609233856201

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028979778289795

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 7 
 Execution Time:0.00055980682373047

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 8 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010380744934082

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0046830177307129

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0046830177307129

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0024728775024414

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056195259094238

SELECT *
FROM `examination`
WHERE `examination_id` = 5 
 Execution Time:0.00076889991760254

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00024700164794922

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.002918004989624

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 7 
 Execution Time:0.0018999576568604

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0011959075927734

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=5 
 Execution Time:0.00078701972961426

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=5 
 Execution Time:0.00088596343994141

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=5 
 Execution Time:0.0008089542388916

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=5 
 Execution Time:0.01488184928894

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='5' and office_id='1' 
 Execution Time:0.00082492828369141

select * from examination_chargesdetails where  examination_id= '5' 
 Execution Time:0.002697229385376

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.007957935333252

SELECT *
FROM `examination`
WHERE `examination_id` = 5 
 Execution Time:0.0011730194091797

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0010049343109131

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00048995018005371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 7 
 Execution Time:0.00043821334838867

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00051307678222656

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=5 
 Execution Time:0.00058507919311523

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=5 
 Execution Time:0.001032829284668

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=5 
 Execution Time:0.00054502487182617

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=5 
 Execution Time:0.0019850730895996

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='5' and office_id='1' 
 Execution Time:0.00064897537231445

select * from examination_chargesdetails where  examination_id= '5' 
 Execution Time:0.00085711479187012

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051283836364746

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 11 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 12 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023469924926758

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0093059539794922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0093059539794922

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077986717224121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077986717224121

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038011074066162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038011074066162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029571056365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0053660869598389

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038609504699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038011074066162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0003659725189209

SELECT *
FROM `examination`
WHERE `examination_id` = 6 
 Execution Time:0.00068211555480957

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029087066650391

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 11 
 Execution Time:0.00016403198242188

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0001528263092041

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=6 
 Execution Time:0.00058197975158691

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=6 
 Execution Time:0.00055599212646484

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=6 
 Execution Time:0.00053215026855469

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=6 
 Execution Time:0.00051999092102051

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='6' and office_id='1' 
 Execution Time:0.00069284439086914

select * from examination_chargesdetails where  examination_id= '6' 
 Execution Time:0.0001988410949707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034785270690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007789134979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.022310972213745

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030848979949951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007789134979248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013940334320068

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0013940334320068

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036909580230713

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036909580230713

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036909580230713

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 12 
 Execution Time:0.0022881031036377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 13 
 Execution Time:0.0038728713989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038890838623047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037000179290771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033090114593506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033090114593506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040359497070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033090114593506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040359497070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033090114593506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040359497070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078179836273193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033090114593506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040359497070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078179836273193

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047171115875244

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037858486175537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031230449676514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033090114593506

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040359497070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038208961486816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078179836273193

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from patient_title where  name = 'Selvi' and office_id= '1' 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00075101852416992

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00075101852416992

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0010190010070801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034568309783936

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034568309783936

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008549690246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008549690246582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011391639709473

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008549690246582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063896179199219

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013420581817627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013420581817627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013420581817627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025010108947754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017850399017334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017850399017334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017850399017334

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 13 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 14 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 13 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 14 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 13 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 14 
 Execution Time:0.00037217140197754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 13 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 14 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010221004486084

select count(*) as cnt from patient_title where  name = 'Miss' and office_id= '1' 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_title where  name = 'Others' and office_id= '1' 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0034101009368896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 16 
 Execution Time:0.00063490867614746

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 17 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 9 
 Execution Time:0.0005340576171875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 10 
 Execution Time:0.00043320655822754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076198577880859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 9 
 Execution Time:0.00032377243041992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 10 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select * from examination where examination_id= '9' and   office_id= '1' 
 Execution Time:0.00074195861816406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 9 
 Execution Time:0.0010371208190918

select * from examination_chargesdetails where  examination_id= '9' 
 Execution Time:0.00086688995361328

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021448135375977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021448135375977

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026893615722656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091886520385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 4 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 5 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 12 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 13 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0035970211029053

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 15 
 Execution Time:0.00046992301940918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 16 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0068690776824951

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0068690776824951

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.0020298957824707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00039410591125488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0052380561828613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0052380561828613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0052380561828613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00044608116149902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00030779838562012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00041604042053223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047588348388672

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0047018527984619

SELECT *
FROM `examination`
WHERE `examination_id` = 12 
 Execution Time:0.0036590099334717

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0004880428314209

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0021119117736816

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.0038659572601318

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0038168430328369

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=12 
 Execution Time:0.0015130043029785

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=12 
 Execution Time:0.0010960102081299

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=12 
 Execution Time:0.0010659694671631

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=12 
 Execution Time:0.0010068416595459

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='12' and office_id='1' 
 Execution Time:0.0013041496276855

select * from examination_chargesdetails where  examination_id= '12' 
 Execution Time:0.0009160041809082

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00091099739074707

SELECT *
FROM `examination`
WHERE `examination_id` = 12 
 Execution Time:0.0010008811950684

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00049901008605957

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00049519538879395

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0005190372467041

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=12 
 Execution Time:0.0006561279296875

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=12 
 Execution Time:0.0006101131439209

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=12 
 Execution Time:0.00061392784118652

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=12 
 Execution Time:0.00045394897460938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='12' and office_id='1' 
 Execution Time:0.00061202049255371

select * from examination_chargesdetails where  examination_id= '12' 
 Execution Time:0.00025582313537598

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00077700614929199

SELECT *
FROM `examination`
WHERE `examination_id` = 12 
 Execution Time:0.00077414512634277

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00030899047851562

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00023508071899414

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00019598007202148

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=12 
 Execution Time:0.00041294097900391

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=12 
 Execution Time:0.00032186508178711

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=12 
 Execution Time:0.00031900405883789

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=12 
 Execution Time:0.00026202201843262

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='12' and office_id='1' 
 Execution Time:0.00030112266540527

select * from examination_chargesdetails where  examination_id= '12' 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014820098876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014820098876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014820098876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014820098876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018858909606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014820098876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018858909606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088481903076172

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013852119445801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018751621246338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014820098876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018858909606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056982040405273

SELECT *
FROM `examination`
WHERE `examination_id` = 12 
 Execution Time:0.00055480003356934

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00055289268493652

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00039505958557129

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=12 
 Execution Time:0.00026893615722656

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=12 
 Execution Time:0.00023007392883301

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=12 
 Execution Time:0.0002140998840332

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=12 
 Execution Time:0.00030899047851562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='12' and office_id='1' 
 Execution Time:0.00025796890258789

select * from examination_chargesdetails where  examination_id= '12' 
 Execution Time:0.00020098686218262

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00053000450134277

SELECT *
FROM `examination`
WHERE `examination_id` = 4 
 Execution Time:0.00087094306945801

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00063014030456543

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00044703483581543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00031518936157227

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=4 
 Execution Time:0.00062298774719238

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=4 
 Execution Time:0.00040888786315918

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=4 
 Execution Time:0.00053501129150391

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=4 
 Execution Time:0.00049591064453125

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='4' and office_id='1' 
 Execution Time:0.00051093101501465

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009620189666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009620189666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009620189666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 15 
 Execution Time:0.00044703483581543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 16 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 15 
 Execution Time:0.00038886070251465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 16 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093412399291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 15 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 16 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00089001655578613

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00089001655578613

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00052690505981445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 15 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007622241973877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 8 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 9 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054693222045898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059080123901367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059080123901367

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013911724090576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013911724090576

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013911724090576

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013911724090576

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.0002751350402832

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 18 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015709400177002

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015709400177002

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093793869018555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093793869018555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089478492736816

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093793869018555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 18 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 19 
 Execution Time:0.0003821849822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 18 
 Execution Time:0.00023889541625977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 19 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '17' and   office_id= '1' 
 Execution Time:0.0057649612426758

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 17 
 Execution Time:0.0045950412750244

select * from examination_chargesdetails where  examination_id= '17' 
 Execution Time:0.0019679069519043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003119945526123

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003119945526123

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055813789367676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010099411010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013539791107178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012490749359131

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080180168151855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080513954162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010099411010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001478910446167

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001478910446167

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001478910446167

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 15 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0011579990386963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0015230178833008

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0011970996856689

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014610290527344

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014610290527344

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033330917358398

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001471996307373

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005180835723877

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00068402290344238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00028014183044434

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00062799453735352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00040698051452637

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00058078765869141

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00052499771118164

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00076794624328613

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00020503997802734

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00079607963562012

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00017213821411133

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004429817199707

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00068092346191406

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00039911270141602

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00030016899108887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00024914741516113

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00036215782165527

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00052380561828613

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00026512145996094

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00030684471130371

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00041317939758301

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00018119812011719

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0002591609954834

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00090599060058594

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0008389949798584

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00044703483581543

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00036191940307617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00030994415283203

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.0008549690246582

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00063705444335938

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00047588348388672

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00071501731872559

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00046300888061523

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00028085708618164

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00055408477783203

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00066089630126953

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022482872009277

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00019717216491699

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00026893615722656

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00041103363037109

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00062704086303711

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00032186508178711

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00032591819763184

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00039076805114746

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00019192695617676

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.000640869140625

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00082492828369141

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029611587524414

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00024509429931641

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00036215782165527

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00060915946960449

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00042104721069336

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00043296813964844

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00030803680419922

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00045013427734375

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0009310245513916

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00065898895263672

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0028049945831299

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00034999847412109

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00016498565673828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00028610229492188

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00063991546630859

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00035595893859863

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00045609474182129

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00046205520629883

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.0003819465637207

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00036096572875977

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0007021427154541

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0005650520324707

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00037598609924316

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00023579597473145

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00021004676818848

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00024509429931641

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.0001370906829834

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00017499923706055

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00051498413085938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00019192695617676

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00017809867858887

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00030207633972168

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0003972053527832

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00016117095947266

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00014996528625488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00015902519226074

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00014710426330566

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00023889541625977

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00016999244689941

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00016093254089355

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00013399124145508

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00018000602722168

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005340576171875

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00049901008605957

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00018811225891113

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00015497207641602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00019192695617676

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00015401840209961

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00025200843811035

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00016093254089355

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00021195411682129

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00018811225891113

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00022006034851074

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00010800361633301

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00055885314941406

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00062084197998047

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00028085708618164

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0001988410949707

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00021100044250488

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00021004676818848

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00044798851013184

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00022006034851074

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00017189979553223

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00043702125549316

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00056195259094238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00037288665771484

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00027012825012207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00069689750671387

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00034308433532715

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00053882598876953

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00056791305541992

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00021791458129883

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0011188983917236

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0038669109344482

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0030231475830078

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0028741359710693

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00083589553833008

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00051307678222656

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00065994262695312

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.001086950302124

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.0006260871887207

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00067591667175293

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00025010108947754

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00029706954956055

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0003819465637207

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00014710426330566

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00014901161193848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00015997886657715

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00010585784912109

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.0002131462097168

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00013613700866699

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00015592575073242

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00012493133544922

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00051403045654297

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0002748966217041

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00035405158996582

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00070285797119141

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00019097328186035

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0001530647277832

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00015902519226074

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00012588500976562

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00041890144348145

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.0002448558807373

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00025820732116699

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.0002448558807373

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00032615661621094

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00022292137145996

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00051689147949219

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0007331371307373

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029182434082031

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.001446008682251

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00019001960754395

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00019502639770508

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00038886070251465

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00020503997802734

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00024104118347168

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00019121170043945

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00022196769714355

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00052785873413086

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00059223175048828

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00024604797363281

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00018405914306641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00019192695617676

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00014805793762207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00032496452331543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.0002138614654541

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00025296211242676

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00017809867858887

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00028204917907715

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00012111663818359

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004570484161377

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00068116188049316

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022697448730469

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00083708763122559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00023388862609863

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00038313865661621

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00037717819213867

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00032401084899902

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00027298927307129

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00033402442932129

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00016498565673828

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00053715705871582

SELECT *
FROM `examination`
WHERE `examination_id` = 17 
 Execution Time:0.00064611434936523

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00044107437133789

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0005028247833252

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 18 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00049495697021484

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=17 
 Execution Time:0.00075507164001465

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=17 
 Execution Time:0.00061178207397461

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=17 
 Execution Time:0.00052905082702637

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=17 
 Execution Time:0.00061702728271484

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='17' and office_id='1' 
 Execution Time:0.00063705444335938

select * from examination_chargesdetails where  examination_id= '17' 
 Execution Time:0.00033688545227051

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00045204162597656

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.00072598457336426

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00027704238891602

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00020503997802734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00022602081298828

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.0003969669342041

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.0002751350402832

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.00027108192443848

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.00027990341186523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00035214424133301

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00015497207641602

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00039196014404297

SELECT *
FROM `examination`
WHERE `examination_id` = 15 
 Execution Time:0.00049805641174316

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00017094612121582

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00013995170593262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 8 
 Execution Time:0.00015091896057129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00011992454528809

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=15 
 Execution Time:0.00023794174194336

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=15 
 Execution Time:0.00016903877258301

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=15 
 Execution Time:0.00013899803161621

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=15 
 Execution Time:0.00014090538024902

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='15' and office_id='1' 
 Execution Time:0.00018596649169922

select * from examination_chargesdetails where  examination_id= '15' 
 Execution Time:8.4161758422852E-5

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004889965057373

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.00060606002807617

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00031399726867676

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 14 
 Execution Time:0.0002448558807373

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00019001960754395

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00044393539428711

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.0002748966217041

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00027894973754883

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.0003211498260498

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00034999847412109

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00016021728515625

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00035691261291504

SELECT *
FROM `examination`
WHERE `examination_id` = 4 
 Execution Time:0.0004730224609375

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00017499923706055

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00013899803161621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.0001671314239502

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00014305114746094

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=4 
 Execution Time:0.00026082992553711

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=4 
 Execution Time:0.00015783309936523

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=4 
 Execution Time:0.00015997886657715

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=4 
 Execution Time:0.00015020370483398

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='4' and office_id='1' 
 Execution Time:0.00020503997802734

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00073504447937012

SELECT *
FROM `examination`
WHERE `examination_id` = 6 
 Execution Time:0.0013828277587891

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00039196014404297

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0003511905670166

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 11 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00027108192443848

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=6 
 Execution Time:0.00054311752319336

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=6 
 Execution Time:0.00039911270141602

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=6 
 Execution Time:0.00041508674621582

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=6 
 Execution Time:0.00039887428283691

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='6' and office_id='1' 
 Execution Time:0.00044417381286621

select * from examination_chargesdetails where  examination_id= '6' 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.0034139156341553

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 11 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select * from examination where examination_id= '4' and   office_id= '1' 
 Execution Time:0.0016021728515625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038950443267822

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 4 
 Execution Time:0.0019471645355225

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00097298622131348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015561580657959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018439292907715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018439292907715

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00032782554626465

SELECT *
FROM `examination`
WHERE `examination_id` = 6 
 Execution Time:0.00049710273742676

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00021791458129883

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00016498565673828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 11 
 Execution Time:0.00018596649169922

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00016283988952637

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=6 
 Execution Time:0.00025010108947754

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=6 
 Execution Time:0.00015807151794434

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=6 
 Execution Time:0.00020790100097656

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=6 
 Execution Time:0.00017595291137695

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='6' and office_id='1' 
 Execution Time:0.00024199485778809

select * from examination_chargesdetails where  examination_id= '6' 
 Execution Time:0.0001530647277832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002047061920166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.0008549690246582

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.0008549690246582

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0024268627166748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020480155944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037000179290771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037000179290771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024712085723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037000179290771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024712085723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037000179290771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024712085723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030090808868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037000179290771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024712085723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030090808868408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059409141540527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036911964416504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037000179290771

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024712085723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022261142730713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030090808868408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029029846191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017402172088623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020160675048828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00010013580322266

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-02-14' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0041968822479248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0068099498748779

select * from office where  office_id= '1' 
 Execution Time:0.001535177230835

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='18' and  office_id= '1' 
 Execution Time:0.0031590461730957

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='18' and  office_id= '1' 
 Execution Time:0.0024709701538086

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047016143798828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019598007202148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047016143798828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014901161193848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00051593780517578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00066709518432617

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00051593780517578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00066709518432617

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00017094612121582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 11 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select * from examination where examination_id= '4' and   office_id= '1' 
 Execution Time:0.00086212158203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 4 
 Execution Time:0.00046515464782715

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00055503845214844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070714950561523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070714950561523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081801414489746

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00046801567077637

SELECT *
FROM `examination`
WHERE `examination_id` = 4 
 Execution Time:0.0004580020904541

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00019192695617676

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00033211708068848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.00017404556274414

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00012588500976562

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=4 
 Execution Time:0.00026392936706543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=4 
 Execution Time:0.00042104721069336

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=4 
 Execution Time:0.00016403198242188

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=4 
 Execution Time:0.00048208236694336

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='4' and office_id='1' 
 Execution Time:0.00031185150146484

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00016903877258301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 11 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select * from examination where examination_id= '4' and   office_id= '1' 
 Execution Time:0.00092911720275879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 4 
 Execution Time:0.0002901554107666

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00037193298339844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 10 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 11 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026068687438965

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026068687438965

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040910243988037

select * from examination where examination_id= '4' and   office_id= '1' 
 Execution Time:0.005018949508667

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020649433135986

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 4 
 Execution Time:0.0014009475708008

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00044512748718262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015008449554443

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003108024597168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 13 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 14 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select * from examination where examination_id= '7' and   office_id= '1' 
 Execution Time:0.00081396102905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 7 
 Execution Time:0.00047612190246582

select * from examination_chargesdetails where  examination_id= '7' 
 Execution Time:0.00033020973205566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00093317031860352

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00093317031860352

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0026390552520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056791305541992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056791305541992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069403648376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069403648376465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00064301490783691

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-14' and  '2022-02-14' and  billing_master.office_id= 1        
 Execution Time:0.00064301490783691

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-14' and '2022-02-14' and  patient_registration.office_id= 1      
 Execution Time:0.0017390251159668

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073814392089844

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073814392089844

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from appointment_type where  name = 'REVIEW CONSULTATION' and office_id= '1' 
 Execution Time:0.00084018707275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  name = 'REVIEW CONSULTATION' and office_id= '1' 
 Execution Time:0.0013139247894287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010411739349365

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048995018005371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016829967498779

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045084953308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051021575927734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045084953308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038480758666992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038368701934814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038480758666992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038368701934814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015161037445068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002065896987915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038480758666992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038368701934814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022280216217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001572847366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001572847366333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001572847366333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001572847366333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018210411071777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001572847366333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018210411071777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015699863433838

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001572847366333

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018210411071777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018830299377441

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00065779685974121

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00065779685974121

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0006558895111084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00020408630371094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001070499420166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00020408630371094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0063309669494629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0063309669494629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0063309669494629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033888816833496

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 176 
 Execution Time:0.00042510032653809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 223 
 Execution Time:0.0011289119720459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028719902038574

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028719902038574

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068116188049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026228427886963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068116188049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026228427886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040278434753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068116188049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026228427886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040278434753418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014421939849854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068116188049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026228427886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040278434753418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014421939849854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025618076324463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021638870239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022528171539307

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068116188049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026228427886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040278434753418

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014421939849854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031390190124512

select count(*) as cnt from ophthalmic_history where  name = 'H/O CATARACT SURGERY' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from ophthalmic_history where  name = 'H/ O USING SPECTACLES' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from ophthalmic_history where  name = 'H/ O USING CLS' and office_id= '1' 
 Execution Time:0.0035610198974609

select count(*) as cnt from dialysis where  name = 'TROPICAMIDE' and office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from dialysis where  name = 'T PLAIN' and office_id= '1' 
 Execution Time:0.0012321472167969

select count(*) as cnt from dialysis where  name = 'CYCLOPENTOLATE' and office_id= '1' 
 Execution Time:0.0058720111846924

select count(*) as cnt from dialysis where  name = 'ATROPINE' and office_id= '1' 
 Execution Time:0.00093603134155273

select count(*) as cnt from ophthalmic_history where  name = 'H/O LASER' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from ophthalmic_history where  name = 'H/O INJECTION' and office_id= '1' 
 Execution Time:0.011641025543213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032615661621094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019311904907227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032615661621094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select count(*) as cnt from ophthalmic_history where  name = 'H/O LASIK' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00055599212646484

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='176' and  office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from ophthalmic_history where  name = 'H/O VITRECTOMY' and office_id= '1' 
 Execution Time:0.0033080577850342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041580200195312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00043320655822754

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00043320655822754

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from ophthalmic_history where  name = 'H/O OCULOPLASTY' and office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00055289268493652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from ophthalmic_history where  name = 'H/O GLAUCOMA' and office_id= '1' 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select count(*) as cnt from ophthalmic_history where  name = 'H/O TRABECULOTECTOMY' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from ophthalmic_history where  name = 'H/O IRIDIODECTOMY' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from ophthalmic_history where  name = 'H/O CORNEAL TRANSPLANTATION' and office_id= '1' 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 178 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 225 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029993057250977

select count(*) as cnt from ophthalmic_history where  name = 'H/O DCR' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from ophthalmic_history where  name = 'H/O DT' and office_id= '1' 
 Execution Time:0.00049901008605957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 178 
 Execution Time:0.00034284591674805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 225 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034284591674805

select * from office where  office_id= '1' 
 Execution Time:0.00053310394287109


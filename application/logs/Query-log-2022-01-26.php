select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024359226226807

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024359226226807

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024359226226807

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024919509887695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.0007021427154541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0010330677032471

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.010901927947998

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.0021979808807373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026500225067139

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026500225067139

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027749538421631

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027749538421631

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002640962600708

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002640962600708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002640962600708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002424955368042

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024409294128418

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00038814544677734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00038814544677734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051689147949219

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00016689300537109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056099891662598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00037384033203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00077605247497559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00035715103149414

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00037693977355957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011279582977295

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011279582977295

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093388557434082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002316951751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00029683113098145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0010039806365967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00063800811767578

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.0002589225769043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061702728271484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061702728271484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0023930072784424

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0023930072784424

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00027894973754883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0013389587402344

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00034904479980469

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.000244140625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00033688545227051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00038313865661621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00085210800170898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00039911270141602

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055813789367676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055813789367676

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038313865661621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088310241699219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088310241699219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00055980682373047

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00055980682373047

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025641918182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025641918182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025641918182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00053620338439941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0010559558868408

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.0018961429595947

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.0016238689422607

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013539791107178

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013539791107178

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015361309051514

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015361309051514

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0014631748199463

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0014631748199463

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00029778480529785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064587593078613

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064587593078613

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0015780925750732

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0015780925750732

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00037217140197754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0010499954223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00037789344787598

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00060415267944336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098109245300293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098109245300293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033688545227051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00080299377441406

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00080299377441406

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0012161731719971

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00055313110351562

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00034880638122559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047612190246582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074982643127441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00047016143798828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00081205368041992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00040102005004883

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00032687187194824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023508071899414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00058388710021973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00089478492736816

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00075697898864746

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00042390823364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00046706199645996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072216987609863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072216987609863

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027799606323242

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00071477890014648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00028705596923828

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00020289421081543

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.0002448558807373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.011100053787231

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.011100053787231

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00073814392089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00075292587280273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006568431854248

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006568431854248

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.0013298988342285

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00024294853210449

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018060207366943

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018060207366943

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018060207366943

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00095295906066895

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00095295906066895

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00062894821166992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00040912628173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00034213066101074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012040138244629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012109279632568

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012040138244629

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 141 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 177 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0012211799621582

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0012211799621582

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012261867523193

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012261867523193

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.00152587890625

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011899471282959

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013589859008789

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013589859008789

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012509822845459

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012509822845459

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0010340213775635

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.00073790550231934

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.00073790550231934

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.00086402893066406

select examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.00086402893066406

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0014121532440186

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0014121532440186

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00043797492980957

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0014078617095947

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0014078617095947

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0014150142669678

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0018520355224609

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0018520355224609

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010221004486084

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010221004486084

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015218257904053

select patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where date(examination_treatmentplan.created_date)='2022-01-26' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015218257904053

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00059008598327637


select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0024938583374023

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010411739349365

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.0023989677429199

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00033712387084961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.011319875717163

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00066399574279785

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from lens_master where lens_master_id!='12' and   code = '0' and name = 'KBF RX COMPND' and office_id= '1' 
 Execution Time:0.00051093101501465

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF RX COMPND', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '550', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '12' 
 Execution Time:0.0027289390563965

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.0006248950958252

select * from lens_master where    lens_master_id = '11' and office_id= '1' 
 Execution Time:0.00023317337036133

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from lens_master where lens_master_id!='11' and   code = '0' and name = 'TOMMIGO SV HI CYL HMC' and office_id= '1' 
 Execution Time:0.00058913230895996

UPDATE `lens_master` SET `code` = '0', `name` = 'TOMMIGO SV HI CYL HMC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '1400', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '11' 
 Execution Time:0.0028409957885742

select count(*) as cnt from lens_master where lens_master_id='10'   and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from lens_master where lens_master_id='10'   and office_id= '1' 
 Execution Time:0.00047802925109863

select * from lens_master where    lens_master_id = '10' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0021989345550537

select count(*) as cnt from lens_master where lens_master_id!='10' and   code = '0' and name = 'TOMMIGO SV HMC' and office_id= '1' 
 Execution Time:0.00051498413085938

UPDATE `lens_master` SET `code` = '0', `name` = 'TOMMIGO SV HMC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '700', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '10' 
 Execution Time:0.0048730373382568

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.00027585029602051

select * from lens_master where    lens_master_id = '9' and office_id= '1' 
 Execution Time:0.0001828670501709

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from lens_master where lens_master_id!='9' and   code = '0' and name = 'SV-HMC' and office_id= '1' 
 Execution Time:0.0005028247833252

UPDATE `lens_master` SET `code` = '0', `name` = 'SV-HMC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '480', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '9' 
 Execution Time:0.0068039894104004

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00040602684020996

select * from lens_master where    lens_master_id = '8' and office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from lens_master where lens_master_id!='8' and   code = '0' and name = 'SV-HC' and office_id= '1' 
 Execution Time:0.00041985511779785

UPDATE `lens_master` SET `code` = '0', `name` = 'SV-HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '250', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '8' 
 Execution Time:0.0095069408416748

select count(*) as cnt from lens_master where lens_master_id='7'   and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from lens_master where lens_master_id='7'   and office_id= '1' 
 Execution Time:0.00026798248291016

select * from lens_master where    lens_master_id = '7' and office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044083595275879

select count(*) as cnt from lens_master where lens_master_id!='7' and   code = '0' and name = 'TOMMIGO KBF-RX-HMC' and office_id= '1' 
 Execution Time:0.00041985511779785

UPDATE `lens_master` SET `code` = '0', `name` = 'TOMMIGO KBF-RX-HMC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '1690', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '7' 
 Execution Time:0.0051090717315674

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00040388107299805

select * from lens_master where    lens_master_id = '6' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from lens_master where lens_master_id!='6' and   code = '0' and name = 'KBF-HMC NORMAL' and office_id= '1' 
 Execution Time:0.00065183639526367

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF-HMC NORMAL', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '650', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '6' 
 Execution Time:0.0029170513153076

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00035309791564941

select * from lens_master where    lens_master_id = '5' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00075411796569824

select count(*) as cnt from lens_master where lens_master_id!='5' and   code = '0' and name = 'KBF COMPND' and office_id= '1' 
 Execution Time:0.00040292739868164

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF COMPND', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '480', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '5' 
 Execution Time:0.002547025680542

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011918544769287

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044393539428711

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011918544769287

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011918544769287

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0024781227111816

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011918544769287

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0024781227111816

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00045013427734375

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00022387504577637

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00041389465332031

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00020384788513184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048303604125977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055313110351562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032186508178711

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00034403800964355

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00017690658569336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00032591819763184

select * from lens_master where    lens_master_id = '8' and office_id= '1' 
 Execution Time:0.00017499923706055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0019779205322266

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060796737670898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057697296142578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043797492980957

select count(*) as cnt from customer where   code = '06' or  (name = 'VALSALA P'  and mobile='9142198202'  and office_id= '1') 
 Execution Time:0.00029492378234863

select count(*) as cnt from customer where   code = '07' or  (name = 'VALSALA P'  and mobile='9142198202'  and office_id= '1') 
 Execution Time:0.00042986869812012

select count(*) as cnt from customer where   code = '07' or  (name = 'VALSALA P'  and mobile='9142198202'  and office_id= '1') 
 Execution Time:0.00042986869812012

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('07', 'VALSALA P', '2', '9142198202', '', '', '42810', '', '', '+0.50', '+2.25', '+0.50', '+2.25', '', '', '', '', '', '', '', '', '6/6', 'N6', '6/6', 'N6', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0026938915252686

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047397613525391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057888031005859

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00034213066101074

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00022602081298828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select count(*) as cnt from lens_master where lens_master_id='4'   and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from lens_master where lens_master_id='4'   and office_id= '1' 
 Execution Time:0.00032591819763184

select * from lens_master where    lens_master_id = '4' and office_id= '1' 
 Execution Time:0.00017189979553223

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from lens_master where lens_master_id!='4' and   code = '0' and name = 'KBF-HC' and office_id= '1' 
 Execution Time:0.00048494338989258

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF-HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '280', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '4' 
 Execution Time:0.0024189949035645

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.0003199577331543

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00022315979003906

select count(*) as cnt from lens_master where lens_master_id!='12' and   code = '0' and name = 'KBF RX COMPND' and office_id= '1' 
 Execution Time:0.00031900405883789

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF RX COMPND', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '550', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '12' 
 Execution Time:0.0001838207244873

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.00052213668823242

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.00052213668823242

select * from lens_master where    lens_master_id = '11' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from lens_master where lens_master_id='10'   and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from lens_master where lens_master_id='10'   and office_id= '1' 
 Execution Time:0.00041294097900391

select * from lens_master where    lens_master_id = '10' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.00030708312988281

select * from lens_master where    lens_master_id = '9' and office_id= '1' 
 Execution Time:0.00018692016601562

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00029897689819336

select * from lens_master where    lens_master_id = '8' and office_id= '1' 
 Execution Time:0.00017786026000977

select count(*) as cnt from lens_master where lens_master_id='7'   and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from lens_master where lens_master_id='7'   and office_id= '1' 
 Execution Time:0.00040006637573242

select * from lens_master where    lens_master_id = '7' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00042200088500977

select * from lens_master where    lens_master_id = '6' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00033092498779297

select * from lens_master where    lens_master_id = '5' and office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.0022439956665039

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.0022439956665039

select * from lens_master where    lens_master_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from lens_master where lens_master_id!='1' and   code = '0' and name = 'PROGRESSIVE HC' and office_id= '1' 
 Execution Time:0.00047397613525391

UPDATE `lens_master` SET `code` = '0', `name` = 'PROGRESSIVE HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '1500', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '1' 
 Execution Time:0.010640859603882

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.0002748966217041

select * from lens_master where    lens_master_id = '3' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from lens_master where lens_master_id!='3' and   code = '0' and name = 'PROGRESSIVE RX HC' and office_id= '1' 
 Execution Time:0.00042891502380371

UPDATE `lens_master` SET `code` = '0', `name` = 'PROGRESSIVE RX HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '1700', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '3' 
 Execution Time:0.002263069152832

select count(*) as cnt from lens_master where lens_master_id='4'   and office_id= '1' 
 Execution Time:0.00037980079650879

select count(*) as cnt from lens_master where lens_master_id='4'   and office_id= '1' 
 Execution Time:0.00037980079650879

select * from lens_master where    lens_master_id = '4' and office_id= '1' 
 Execution Time:0.0002131462097168

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00034499168395996

select * from lens_master where    lens_master_id = '5' and office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from lens_master where lens_master_id!='5' and   code = '0' and name = 'KBF COMPND' and office_id= '1' 
 Execution Time:0.00076198577880859

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF COMPND', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '480', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '5' 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select count(*) as cnt from customer where   code = '07' or  (name = 'KRISHNAN'  and mobile='6235478951'  and office_id= '1') 
 Execution Time:0.00054597854614258

select count(*) as cnt from customer where   code = '08' or  (name = 'KRISHNAN'  and mobile='6235478951'  and office_id= '1') 
 Execution Time:0.00043988227844238

select count(*) as cnt from customer where   code = '08' or  (name = 'KRISHNAN'  and mobile='6235478951'  and office_id= '1') 
 Execution Time:0.00043988227844238

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('08', 'KRISHNAN', '1', '6235478951', '', '', '526', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0050780773162842

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046706199645996

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00051689147949219

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00021195411682129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00047397613525391

select * from lens_master where    lens_master_id = '6' and office_id= '1' 
 Execution Time:0.00033211708068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063800811767578

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00054597854614258

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00017189979553223

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select count(*) as cnt from customer where customer_id='9'  and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from customer where customer_id='9'  and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from customer where customer_id='9'  and office_id= '1' 
 Execution Time:0.00036501884460449

DELETE FROM `customer`
WHERE `customer_id` = '9' 
 Execution Time:0.0023870468139648

select count(*) as cnt from customer where customer_id='10'  and office_id= '1' 
 Execution Time:0.00052499771118164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from customer where   code = '2' or  (name = 'BHARATHAN C A'  and mobile='9605516756'  and office_id= '1') 
 Execution Time:0.00046205520629883

select count(*) as cnt from customer where   code = '2' or  (name = 'BHARATHAN C A'  and mobile='9605516756'  and office_id= '1') 
 Execution Time:0.00046205520629883

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('2', 'BHARATHAN C A', '1', '9605516756', '', '', '42708', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0019779205322266

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054597854614258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057792663574219

select count(*) as cnt  from sales_master where   sales_id='8' and office_id= '1' 
 Execution Time:0.000885009765625

select * from office where  office_id= '1' 
 Execution Time:0.00043892860412598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051498413085938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055313110351562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from customer where   code = '09' or  (name = 'SUKUMARAN E R'  and mobile='9288143080'  and office_id= '1') 
 Execution Time:0.00048208236694336

select count(*) as cnt from customer where   code = '09' or  (name = 'SUKUMARAN E R'  and mobile='9288143080'  and office_id= '1') 
 Execution Time:0.00048208236694336

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('09', 'SUKUMARAN E R', '1', '9288143080', '', '', '42711', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0022420883178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006248950958252

select count(*) as cnt from customer where   code = '10' or  (name = 'SUJATHA  P'  and mobile='1254896780'  and office_id= '1') 
 Execution Time:0.00046706199645996

select count(*) as cnt from customer where   code = '10' or  (name = 'SUJATHA  P'  and mobile='1254896780'  and office_id= '1') 
 Execution Time:0.00046706199645996

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('10', 'SUJATHA  P', '2', '1254896780', '', '', '529', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0031859874725342

select count(*) as cnt from customer where customer_id='13'  and office_id= '1' 
 Execution Time:0.00037622451782227

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from customer where customer_id='13'  and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from customer where    customer_id!='13' and    code = '10'  and   name = 'BHASKARAN' and mobile='9495097689'  and office_id= '1' 
 Execution Time:0.00057792663574219

UPDATE `customer` SET `code` = '10', `name` = 'BHASKARAN', `gender` = '1', `mobile` = '9495097689', `alter_mobile` = '', `email_id` = '', `mrd` = '530', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '13' 
 Execution Time:0.0058271884918213

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from customer where   code = '11' or  (name = 'RUGMINI V'  and mobile='9321564789'  and office_id= '1') 
 Execution Time:0.00048685073852539

select count(*) as cnt from customer where   code = '11' or  (name = 'RUGMINI V'  and mobile='9321564789'  and office_id= '1') 
 Execution Time:0.00048685073852539

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('11', 'RUGMINI V', '2', '9321564789', '', '', '531', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0054600238800049

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063490867614746

select count(*) as cnt from customer where   code = '12' or  (name = 'SHEELAVATHI'  and mobile='9497060450'  and office_id= '1') 
 Execution Time:0.00046801567077637

select count(*) as cnt from customer where   code = '12' or  (name = 'SHEELAVATHI'  and mobile='9497060450'  and office_id= '1') 
 Execution Time:0.00046801567077637

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('12', 'SHEELAVATHI', '2', '9497060450', '', '', '532', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00679612159729

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042581558227539

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048303604125977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033712387084961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046896934509277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040602684020996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049591064453125

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00058913230895996

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.0003199577331543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00060606002807617

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0012989044189453

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from customer where   code = '13' or  (name = 'NIVEDITHA E V'  and mobile='6321456879'  and office_id= '1') 
 Execution Time:0.0004119873046875

select count(*) as cnt from customer where   code = '13' or  (name = 'NIVEDITHA E V'  and mobile='6321456879'  and office_id= '1') 
 Execution Time:0.0004119873046875

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('13', 'NIVEDITHA E V', '2', '6321456879', '', '', '533', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0037059783935547

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003511905670166

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060296058654785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037693977355957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00091099739074707

select count(*) as cnt  from sales_master where   sales_id='5' and office_id= '1' 
 Execution Time:0.00042200088500977

select * from office where  office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from customer where customer_id='6'  and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00081992149353027

select * from office where  office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt  from sales_master where   sales_id='13' and office_id= '1' 
 Execution Time:0.00055599212646484

select * from office where  office_id= '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056290626525879

select * from office where  office_id= '1' 
 Execution Time:0.00083589553833008

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062108039855957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005638599395752

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00076603889465332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063920021057129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051307678222656


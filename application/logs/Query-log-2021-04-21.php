select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0024750232696533

select count(*) as cnt from customer where   code = '572' or  (name = 'REMAVATHI P V'  and mobile='9074151145'  and office_id= '1') 
 Execution Time:0.00095796585083008

select count(*) as cnt from customer where   code = '572' or  (name = 'REMAVATHI P V'  and mobile='9074151145'  and office_id= '1') 
 Execution Time:0.00095796585083008

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('572', 'REMAVATHI P V', '2', '9074151145', '', '', '7860', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079989433288574

select count(*) as cnt  from sales_master where   sales_id='548' and office_id= '1' 
 Execution Time:0.00085616111755371

select * from office where  office_id= '1' 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005950927734375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063300132751465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054788589477539

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061511993408203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061511993408203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061511993408203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0023179054260254

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061511993408203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0023179054260254

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from item_master where   code = '243' or  (name = 'EYEQUE-5007-EW' ) and office_id= '1' 
 Execution Time:0.00087904930114746

select count(*) as cnt from item_master where   code = '243' or  (name = 'EYEQUE-5007-EW' ) and office_id= '1' 
 Execution Time:0.00087904930114746

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('243', 'EYEQUE-5007-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00068092346191406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00068092346191406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00060200691223145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00068092346191406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00060200691223145

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00205397605896

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00068092346191406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00060200691223145

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00205397605896

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from item_master where   code = '244' or  (name = 'EYEQUE-5013-EW' ) and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from item_master where   code = '244' or  (name = 'EYEQUE-5013-EW' ) and office_id= '1' 
 Execution Time:0.00072598457336426

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('244', 'EYEQUE-5013-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00041604042053223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016188621520996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016188621520996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016188621520996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from item_master where   code = '245' or  (name = 'EYEQUE-5011-EW' ) and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from item_master where   code = '245' or  (name = 'EYEQUE-5011-EW' ) and office_id= '1' 
 Execution Time:0.00046586990356445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('245', 'EYEQUE-5011-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00027894973754883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007169246673584

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007169246673584

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007169246673584

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026798248291016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00070905685424805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007169246673584

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026798248291016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from item_master where   code = '246' or  (name = 'EYEQUE-5001-EW' ) and office_id= '1' 
 Execution Time:0.00086808204650879

select count(*) as cnt from item_master where   code = '246' or  (name = 'EYEQUE-5001-EW' ) and office_id= '1' 
 Execution Time:0.00086808204650879

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('246', 'EYEQUE-5001-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00025415420532227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from item_master where   code = '246' or  (name = 'EYEQUE-5002-EW' ) and office_id= '1' 
 Execution Time:0.00052714347839355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038981437683105

select count(*) as cnt from item_master where   code = '247' or  (name = 'EYEQUE-5002-EW' ) and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from item_master where   code = '247' or  (name = 'EYEQUE-5002-EW' ) and office_id= '1' 
 Execution Time:0.00050997734069824

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('247', 'EYEQUE-5002-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00026702880859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042009353637695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057888031005859

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042009353637695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057888031005859

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042009353637695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057888031005859

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00038790702819824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042009353637695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057888031005859

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from item_master where   code = '248' or  (name = 'GENOX EYEWEAR-EW' ) and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from item_master where   code = '248' or  (name = 'GENOX EYEWEAR-EW' ) and office_id= '1' 
 Execution Time:0.00053596496582031

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('248', 'GENOX EYEWEAR-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00031495094299316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027203559875488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027203559875488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from item_master where   code = '249' or  (name = 'TIMHORTONS-EW' ) and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from item_master where   code = '249' or  (name = 'TIMHORTONS-EW' ) and office_id= '1' 
 Execution Time:0.00067901611328125

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('249', 'TIMHORTONS-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00038695335388184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from item_master where   code = '250' or  (name = 'NMACKS-EW' ) and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from item_master where   code = '250' or  (name = 'NMACKS-EW' ) and office_id= '1' 
 Execution Time:0.00055098533630371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('250', 'NMACKS-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027370452880859

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052881240844727

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052881240844727

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052881240844727

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052881240844727

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from item_master where   code = '251' or  (name = 'COLORDRIVE-EW' ) and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from item_master where   code = '251' or  (name = 'COLORDRIVE-EW' ) and office_id= '1' 
 Execution Time:0.00051999092102051

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('251', 'COLORDRIVE-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0002598762512207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041103363037109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041103363037109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041103363037109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027298927307129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041103363037109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from item_master where   code = '252' or  (name = 'RESEARCH-EW' ) and office_id= '1' 
 Execution Time:0.00059318542480469

select count(*) as cnt from item_master where   code = '252' or  (name = 'RESEARCH-EW' ) and office_id= '1' 
 Execution Time:0.00059318542480469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('252', 'RESEARCH-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00039315223693848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029611587524414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029611587524414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029611587524414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023698806762695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029611587524414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from item_master where   code = '253' or  (name = 'CRISP-EW' ) and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from item_master where   code = '253' or  (name = 'CRISP-EW' ) and office_id= '1' 
 Execution Time:0.00048995018005371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('253', 'CRISP-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00027179718017578

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029921531677246

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029921531677246

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020813941955566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029921531677246

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from item_master where   code = '254' or  (name = 'WHITE-EW' ) and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from item_master where   code = '254' or  (name = 'WHITE-EW' ) and office_id= '1' 
 Execution Time:0.00074195861816406

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('254', 'WHITE-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00041079521179199

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from item_master where   code = '255' or  (name = 'FLASHY-EW' ) and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from item_master where   code = '255' or  (name = 'FLASHY-EW' ) and office_id= '1' 
 Execution Time:0.00054502487182617

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('255', 'FLASHY-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00035691261291504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015902519226074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015902519226074

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015902519226074

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from item_master where   code = '256' or  (name = 'ANGERMI-EW' ) and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from item_master where   code = '256' or  (name = 'ANGERMI-EW' ) and office_id= '1' 
 Execution Time:0.00055599212646484

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('256', 'ANGERMI-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00038003921508789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026297569274902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026297569274902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036001205444336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026297569274902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034880638122559

select count(*) as cnt from item_master where   code = '257' or  (name = 'RESPLANE-EW' ) and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from item_master where   code = '257' or  (name = 'RESPLANE-EW' ) and office_id= '1' 
 Execution Time:0.00046086311340332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('257', 'RESPLANE-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00037598609924316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050997734069824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050997734069824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050997734069824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050997734069824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00061702728271484

select count(*) as cnt from item_master where   code = '258' or  (name = 'HAPPINESS-EW' ) and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from item_master where   code = '258' or  (name = 'HAPPINESS-EW' ) and office_id= '1' 
 Execution Time:0.00071501731872559

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('258', 'HAPPINESS-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00050902366638184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066280364990234

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046300888061523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066280364990234

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046300888061523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0003199577331543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066280364990234

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046300888061523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0003199577331543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025486946105957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066280364990234

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046300888061523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0003199577331543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from item_master where   code = '259' or  (name = 'TOM HARDY-EW' ) and office_id= '1' 
 Execution Time:0.00070691108703613

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from item_master where   code = '259' or  (name = 'TOM HARDY-EW' ) and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt  from sales_master where   sales_id='550' and office_id= '1' 
 Execution Time:0.00092792510986328

select * from office where  office_id= '1' 
 Execution Time:0.00051307678222656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

select count(*) as cnt  from sales_master where   sales_id='463' and office_id= '1' 
 Execution Time:0.00044393539428711

select * from office where  office_id= '1' 
 Execution Time:0.00060391426086426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058817863464355

select count(*) as cnt from customer where   code = '573' or  (name = 'RAMLA P'  and mobile='9747236894'  and office_id= '1') 
 Execution Time:0.0008389949798584

select count(*) as cnt from customer where   code = '573' or  (name = 'RAMLA P'  and mobile='9747236894'  and office_id= '1') 
 Execution Time:0.0008389949798584

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('573', 'RAMLA P', '2', '9747236894', '', '', '21383', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00075984001159668

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from item_master where   code = '259' or  (name = 'TIMBUK 2-EW' ) and office_id= '1' 
 Execution Time:0.0011420249938965

select count(*) as cnt from item_master where   code = '259' or  (name = 'TIMBUK 2-EW' ) and office_id= '1' 
 Execution Time:0.0011420249938965

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('259', 'TIMBUK 2-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00049304962158203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048303604125977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048303604125977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014114379882812

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048303604125977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014114379882812

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048303604125977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014114379882812

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033378601074219

select count(*) as cnt from item_master where   code = '260' or  (name = 'GALAXY-EW' ) and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from item_master where   code = '260' or  (name = 'GALAXY-EW' ) and office_id= '1' 
 Execution Time:0.00060200691223145

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('260', 'GALAXY-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0004270076751709

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from item_master where   code = '260' or  (name = 'SAIE-EW' ) and office_id= '1' 
 Execution Time:0.0004570484161377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039887428283691

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039887428283691

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024604797363281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039887428283691

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024604797363281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039887428283691

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024604797363281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from item_master where   code = '261' or  (name = 'SAIE-EW' ) and office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from item_master where   code = '261' or  (name = 'SAIE-EW' ) and office_id= '1' 
 Execution Time:0.00065398216247559

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('261', 'SAIE-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00041604042053223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00070500373840332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00070500373840332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00070500373840332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021600723266602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028300285339355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00070500373840332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021600723266602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from item_master where   code = '262' or  (name = 'FANG-EW' ) and office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from item_master where   code = '262' or  (name = 'FANG-EW' ) and office_id= '1' 
 Execution Time:0.00050616264343262

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('262', 'FANG-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004270076751709

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027298927307129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from item_master where   code = '263' or  (name = 'HOORAY-EW' ) and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from item_master where   code = '263' or  (name = 'HOORAY-EW' ) and office_id= '1' 
 Execution Time:0.0005190372467041

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('263', 'HOORAY-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00035190582275391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049901008605957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029993057250977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029993057250977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029993057250977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from item_master where   code = '264' or  (name = 'CATER-EW' ) and office_id= '1' 
 Execution Time:0.00057077407836914

select count(*) as cnt from item_master where   code = '264' or  (name = 'CATER-EW' ) and office_id= '1' 
 Execution Time:0.00057077407836914

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('264', 'CATER-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00040912628173828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065183639526367

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065183639526367

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065183639526367

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0006248950958252

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065183639526367

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from item_master where   code = '265' or  (name = 'CHAIRMAN-EW' ) and office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from item_master where   code = '265' or  (name = 'CHAIRMAN-EW' ) and office_id= '1' 
 Execution Time:0.00058102607727051

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('265', 'CHAIRMAN-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00047016143798828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057482719421387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073981285095215

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057482719421387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073981285095215

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057482719421387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073981285095215

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0003209114074707

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057482719421387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073981285095215

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028777122497559

select count(*) as cnt from item_master where   code = '266' or  (name = 'HUMMER-EW' ) and office_id= '1' 
 Execution Time:0.00060486793518066

select count(*) as cnt from item_master where   code = '266' or  (name = 'HUMMER-EW' ) and office_id= '1' 
 Execution Time:0.00060486793518066

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('266', 'HUMMER-EW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00037503242492676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021815299987793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017881393432617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065898895263672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065898895263672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022411346435547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065898895263672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022411346435547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00037693977355957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065898895263672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022411346435547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt  from sales_master where   sales_id='533' and office_id= '1' 
 Execution Time:0.00130295753479

select * from office where  office_id= '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058889389038086

select count(*) as cnt from customer where   code = '574' or  (name = 'PUSHPAVALLI'  and mobile='9388200215'  and office_id= '1') 
 Execution Time:0.0010149478912354

select count(*) as cnt from customer where   code = '574' or  (name = 'PUSHPAVALLI'  and mobile='9388200215'  and office_id= '1') 
 Execution Time:0.0010149478912354

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('574', 'PUSHPAVALLI', '2', '9388200215', '', '', '44233', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00041007995605469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078487396240234

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0033490657806396

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00078606605529785

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044012069702148

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0059859752655029

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0012869834899902

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00037384033203125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0054290294647217

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0011870861053467

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00039005279541016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041818618774414

select count(*) as cnt from customer where   code = '575' or  (name = 'VASUDEVAN.K'  and mobile='6238258524'  and office_id= '1') 
 Execution Time:0.00076985359191895

select count(*) as cnt from customer where   code = '575' or  (name = 'VASUDEVAN.K'  and mobile='6238258524'  and office_id= '1') 
 Execution Time:0.00076985359191895

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('575', 'VASUDEVAN.K', '1', '6238258524', '', '', '44239', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056791305541992

select count(*) as cnt from customer where   code = '576' or  (name = 'MURALEEDHARAN'  and mobile='9495536131'  and office_id= '1') 
 Execution Time:0.0014169216156006

select count(*) as cnt from customer where   code = '576' or  (name = 'MURALEEDHARAN'  and mobile='9495536131'  and office_id= '1') 
 Execution Time:0.0014169216156006

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('576', 'MURALEEDHARAN', '1', '9495536131', '', '', '44243', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00051212310791016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060486793518066

select count(*) as cnt from customer where   code = '577' or  (name = 'ANILA RANJITH'  and mobile='8893327270'  and office_id= '1') 
 Execution Time:0.00095605850219727

select count(*) as cnt from customer where   code = '577' or  (name = 'ANILA RANJITH'  and mobile='8893327270'  and office_id= '1') 
 Execution Time:0.00095605850219727

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('577', 'ANILA RANJITH', '2', '8893327270', '', '', '44132', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00047898292541504

select count(*) as cnt  from sales_master where   sales_id='170' and office_id= '1' 
 Execution Time:0.00039505958557129

select * from office where  office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt  from sales_master where   sales_id='557' and office_id= '1' 
 Execution Time:0.00062894821166992

select * from office where  office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt  from sales_master where   sales_id='526' and office_id= '1' 
 Execution Time:0.00065994262695312

select * from office where  office_id= '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072097778320312

select count(*) as cnt from customer where   code = '578' or  (name = 'DHANSH P V'  and mobile='9497467458'  and office_id= '1') 
 Execution Time:0.001295804977417

select count(*) as cnt from customer where   code = '578' or  (name = 'DHANSH P V'  and mobile='9497467458'  and office_id= '1') 
 Execution Time:0.001295804977417

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('578', 'DHANSH P V', '1', '9497467458', '', '', '2503', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0004420280456543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065398216247559

select count(*) as cnt from customer where   code = '579' or  (name = 'MANIKANDAN T M'  and mobile='9497841319'  and office_id= '1') 
 Execution Time:0.0018770694732666

select count(*) as cnt from customer where   code = '579' or  (name = 'MANIKANDAN T M'  and mobile='9497841319'  and office_id= '1') 
 Execution Time:0.0018770694732666

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('579', 'MANIKANDAN T M', '1', '9497841319', '', '', '42081', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051712989807129

select count(*) as cnt from customer where   code = '580' or  (name = 'YESODHA M'  and mobile='9605671852'  and office_id= '1') 
 Execution Time:0.00074291229248047

select count(*) as cnt from customer where   code = '580' or  (name = 'YESODHA M'  and mobile='9605671852'  and office_id= '1') 
 Execution Time:0.00074291229248047

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('580', 'YESODHA M', '2', '9605671852', '', '', '44250', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060582160949707

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0047979354858398

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.001270055770874

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0038130283355713

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0012669563293457

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004880428314209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046110153198242

select count(*) as cnt from customer where   code = '581' or  (name = 'GEETHA.K'  and mobile='9847640663'  and office_id= '1') 
 Execution Time:0.0028269290924072

select count(*) as cnt from customer where   code = '581' or  (name = 'GEETHA.K'  and mobile='9847640663'  and office_id= '1') 
 Execution Time:0.0028269290924072

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('581', 'GEETHA.K', '2', '9847640663', '', '', '44253', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.003835916519165

select count(*) as cnt from customer where   code = '582' or  (name = 'HEMAJA P V'  and mobile='9387421704'  and office_id= '1') 
 Execution Time:0.0011730194091797

select count(*) as cnt from customer where   code = '582' or  (name = 'HEMAJA P V'  and mobile='9387421704'  and office_id= '1') 
 Execution Time:0.0011730194091797

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('582', 'HEMAJA P V', '2', '9387421704', '', '', '44256', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00053811073303223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010819435119629

select count(*) as cnt from customer where   code = '583' or  (name = 'SUVARNINI P I'  and mobile='9895861864'  and office_id= '1') 
 Execution Time:0.0013370513916016

select count(*) as cnt from customer where   code = '583' or  (name = 'SUVARNINI P I'  and mobile='9895861864'  and office_id= '1') 
 Execution Time:0.0052440166473389

select count(*) as cnt from customer where   code = '583' or  (name = 'SUVARNINI P I'  and mobile='9895861864'  and office_id= '1') 
 Execution Time:0.0015528202056885

select count(*) as cnt from customer where   code = '583' or  (name = 'SUVARNINI P I'  and mobile='1512'  and office_id= '1') 
 Execution Time:0.00091099739074707

select count(*) as cnt from customer where   code = '583' or  (name = 'SUVARNINI P I'  and mobile='1512'  and office_id= '1') 
 Execution Time:0.00091099739074707

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('583', 'SUVARNINI P I', '2', '1512', '', '', '12514', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065088272094727

select count(*) as cnt from customer where   code = '584' or  (name = 'ANJALI P V'  and mobile='9846955205'  and office_id= '1') 
 Execution Time:0.00093483924865723

select count(*) as cnt from customer where   code = '584' or  (name = 'ANJALI P V'  and mobile='9846955205'  and office_id= '1') 
 Execution Time:0.00093483924865723

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('584', 'ANJALI P V', '2', '9846955205', '', '', '42378', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0008080005645752

select count(*) as cnt  from sales_master where   sales_id='508' and office_id= '1' 
 Execution Time:0.00049495697021484

select * from office where  office_id= '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055599212646484

select count(*) as cnt  from sales_master where   sales_id='563' and office_id= '1' 
 Execution Time:0.0007169246673584

select * from office where  office_id= '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053811073303223

select count(*) as cnt  from sales_master where   sales_id='565' and office_id= '1' 
 Execution Time:0.00079107284545898

select * from office where  office_id= '1' 
 Execution Time:0.00058293342590332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048708915710449

select count(*) as cnt  from sales_master where   sales_id='554' and office_id= '1' 
 Execution Time:0.00046515464782715

select * from office where  office_id= '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007331371307373

select count(*) as cnt  from sales_master where   sales_id='524' and office_id= '1' 
 Execution Time:0.00031399726867676

select * from office where  office_id= '1' 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056004524230957

select count(*) as cnt  from sales_master where   sales_id='567' and office_id= '1' 
 Execution Time:0.00096702575683594

select * from office where  office_id= '1' 
 Execution Time:0.00075507164001465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00070095062255859

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.003587007522583

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00070309638977051

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00061392784118652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060510635375977

select count(*) as cnt from customer where   code = '585' or  (name = 'ANITHA'  and mobile='8547266702'  and office_id= '1') 
 Execution Time:0.0015060901641846

select count(*) as cnt from customer where   code = '585' or  (name = 'ANITHA'  and mobile='8547266702'  and office_id= '1') 
 Execution Time:0.0015060901641846

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('585', 'ANITHA', '2', '8547266702', '', '', '44261', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00067710876464844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00086092948913574

select count(*) as cnt  from sales_master where   sales_id='562' and office_id= '1' 
 Execution Time:0.0011260509490967

select * from office where  office_id= '1' 
 Execution Time:0.00066304206848145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054192543029785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0014009475708008

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00057482719421387

select * from office where  office_id= '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005340576171875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040602684020996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066709518432617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0012290477752686


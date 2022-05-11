select * from office where  office_id= '1' 
 Execution Time:0.0024590492248535

select * from office where  office_id= '1' 
 Execution Time:0.0011520385742188

select * from office where  office_id= '1' 
 Execution Time:0.001183032989502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0021049976348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0021049976348877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0021049976348877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030303001403809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0016820430755615

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0021049976348877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030303001403809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0017271041870117

select count(*) as cnt from company where   code = '1' and name = 'PEF' and office_id= '1' 
 Execution Time:0.00061488151550293

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'PEF', '', '1', '1', '1') 
 Execution Time:0.0055840015411377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004429817199707

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019407272338867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058078765869141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058078765869141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058078765869141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058078765869141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from item_master where   code = '1' or  (name = 'D&amp;K PLUS' ) and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from item_master where   code = '1' or  (name = 'D&amp;K PLUS' ) and office_id= '1' 
 Execution Time:0.00047612190246582

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'D&amp;K PLUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052981376647949

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032186508178711

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from item_master where   code = '2' or  (name = 'GLOBUS' ) and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from item_master where   code = '2' or  (name = 'GLOBUS' ) and office_id= '1' 
 Execution Time:0.00033116340637207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', 'GLOBUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0038690567016602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028586387634277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028586387634277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028586387634277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015783309936523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028586387634277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from item_master where   code = '3' or  (name = 'BIGBOSS' ) and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from item_master where   code = '3' or  (name = 'BIGBOSS' ) and office_id= '1' 
 Execution Time:0.00034093856811523

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', 'BIGBOSS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0082838535308838

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from item_master where   code = '4' or  (name = 'MORANGIE' ) and office_id= '1' 
 Execution Time:0.00040411949157715

select count(*) as cnt from item_master where   code = '4' or  (name = 'MORANGIE' ) and office_id= '1' 
 Execution Time:0.00040411949157715

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('4', 'MORANGIE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0022759437561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034379959106445

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034379959106445

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034379959106445

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034379959106445

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004417896270752

select count(*) as cnt from item_master where   code = '5' or  (name = 'BLUEBERRY' ) and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from item_master where   code = '5' or  (name = 'BLUEBERRY' ) and office_id= '1' 
 Execution Time:0.00042104721069336

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('5', 'BLUEBERRY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049769878387451

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from item_master where   code = '6' or  (name = 'GOLDSTAR' ) and office_id= '1' 
 Execution Time:0.00043320655822754

select count(*) as cnt from item_master where   code = '6' or  (name = 'GOLDSTAR' ) and office_id= '1' 
 Execution Time:0.00043320655822754

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('6', 'GOLDSTAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0066330432891846

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027108192443848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from item_master where   code = '7' or  (name = 'ROAR' ) and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from item_master where   code = '7' or  (name = 'ROAR' ) and office_id= '1' 
 Execution Time:0.00038385391235352

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('7', 'ROAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051209926605225

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from item_master where   code = '8' or  (name = 'CLEVER BR' ) and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '8' or  (name = 'CLEVER BR' ) and office_id= '1' 
 Execution Time:0.0003819465637207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('8', 'CLEVER BR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00217604637146

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from item_master where   code = '9' or  (name = 'KADIYAM' ) and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from item_master where   code = '9' or  (name = 'KADIYAM' ) and office_id= '1' 
 Execution Time:0.0003211498260498

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('9', 'KADIYAM', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0043458938598633

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041913986206055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041913986206055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026416778564453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041913986206055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026416778564453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041913986206055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026416778564453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from item_master where   code = '10' or  (name = 'SIZZLER' ) and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from item_master where   code = '10' or  (name = 'SIZZLER' ) and office_id= '1' 
 Execution Time:0.00043106079101562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('10', 'SIZZLER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051889419555664

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042486190795898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042486190795898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025701522827148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042486190795898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025701522827148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042486190795898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025701522827148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from item_master where   code = '11' or  (name = 'SIZZLER' ) and office_id= '1' 
 Execution Time:0.00034689903259277

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010180473327637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010180473327637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0011439323425293

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010180473327637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0011439323425293

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0004889965057373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010180473327637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0011439323425293

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034713745117188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037288665771484

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037288665771484

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037288665771484

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037288665771484

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052690505981445

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052690505981445

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001981258392334

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052690505981445

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001981258392334

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027108192443848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052690505981445

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001981258392334

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from item_master where   code = '11' or  (name = 'THOUGHT' ) and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from item_master where   code = '11' or  (name = 'THOUGHT' ) and office_id= '1' 
 Execution Time:0.00039505958557129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('11', 'THOUGHT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0078539848327637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001368522644043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001368522644043

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001368522644043

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from item_master where   code = '12' or  (name = 'SKY PREMIUM' ) and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from item_master where   code = '12' or  (name = 'SKY PREMIUM' ) and office_id= '1' 
 Execution Time:0.00031089782714844

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12', 'SKY PREMIUM', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0034677982330322

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024700164794922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024700164794922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024700164794922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from item_master where   code = '13' or  (name = 'AZZUOO' ) and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from item_master where   code = '13' or  (name = 'AZZUOO' ) and office_id= '1' 
 Execution Time:0.00037217140197754

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('13', 'AZZUOO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005836009979248

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049304962158203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049114227294922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049304962158203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049114227294922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.001101016998291

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049304962158203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049114227294922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.001101016998291

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0038959980010986

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049304962158203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049114227294922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.001101016998291

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00029301643371582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027108192443848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027108192443848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027108192443848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021696090698242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027108192443848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00096583366394043

select count(*) as cnt from item_master where   code = '14' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.0025980472564697

select count(*) as cnt from item_master where   code = '14' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.0025980472564697

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('14', 'SPECSI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050919055938721

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00023794174194336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00023794174194336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00023794174194336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032615661621094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00023794174194336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from item_master where   code = '15' or  (name = 'ACCOMPANY' ) and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from item_master where   code = '15' or  (name = 'ACCOMPANY' ) and office_id= '1' 
 Execution Time:0.00052499771118164

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('15', 'ACCOMPANY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0029680728912354

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00019693374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00019693374633789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012612342834473

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00019693374633789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012612342834473

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00019693374633789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012612342834473

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from item_master where   code = '16' or  (name = 'HIGH BELIEVE' ) and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from item_master where   code = '16' or  (name = 'HIGH BELIEVE' ) and office_id= '1' 
 Execution Time:0.00029611587524414

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('16', 'HIGH BELIEVE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0089659690856934

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050783157348633

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050783157348633

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050783157348633

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026607513427734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050783157348633

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from item_master where   code = '17' or  (name = 'D G LENS BR' ) and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from item_master where   code = '17' or  (name = 'D G LENS BR' ) and office_id= '1' 
 Execution Time:0.00034594535827637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('17', 'D G LENS BR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0029928684234619

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from item_master where   code = '18' or  (name = 'RUDY BOYS' ) and office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from item_master where   code = '18' or  (name = 'RUDY BOYS' ) and office_id= '1' 
 Execution Time:0.00045609474182129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('18', 'RUDY BOYS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0017390251159668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00076603889465332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046801567077637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00076603889465332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00076603889465332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030112266540527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00076603889465332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from item_master where   code = '19' or  (name = 'JIMONIKI' ) and office_id= '1' 
 Execution Time:0.0011298656463623

select count(*) as cnt from item_master where   code = '19' or  (name = 'JIMONIKI' ) and office_id= '1' 
 Execution Time:0.0011298656463623

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('19', 'JIMONIKI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0083880424499512

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from item_master where   code = '20' or  (name = 'SIXTEEN' ) and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from item_master where   code = '20' or  (name = 'SIXTEEN' ) and office_id= '1' 
 Execution Time:0.00039505958557129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('20', 'SIXTEEN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0089991092681885

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037479400634766

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037479400634766

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018787384033203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037479400634766

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018787384033203

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037479400634766

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018787384033203

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from item_master where   code = '21' or  (name = 'PRINCESSDIANA' ) and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from item_master where   code = '21' or  (name = 'PRINCESSDIANA' ) and office_id= '1' 
 Execution Time:0.00049495697021484

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('21', 'PRINCESSDIANA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0033659934997559

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036287307739258

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036287307739258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026607513427734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036287307739258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026607513427734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034284591674805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036287307739258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026607513427734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from item_master where   code = '22' or  (name = 'POWERFULL' ) and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from item_master where   code = '22' or  (name = 'POWERFULL' ) and office_id= '1' 
 Execution Time:0.00038814544677734

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('22', 'POWERFULL', '1', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056190490722656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023484230041504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from item_master where   code = '23' or  (name = 'SPARKLE' ) and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from item_master where   code = '23' or  (name = 'SPARKLE' ) and office_id= '1' 
 Execution Time:0.00028705596923828

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('23', 'SPARKLE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046660900115967

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037884712219238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037884712219238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018191337585449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037884712219238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018191337585449

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028586387634277

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037884712219238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018191337585449

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from item_master where   code = '24' or  (name = 'GOLDSTAR' ) and office_id= '1' 
 Execution Time:0.00034403800964355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026488304138184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026488304138184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026488304138184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from item_master where   code = '24' or  (name = 'CLINERS' ) and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from item_master where   code = '24' or  (name = 'CLINERS' ) and office_id= '1' 
 Execution Time:0.00037384033203125

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('24', 'CLINERS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020248889923096

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from item_master where   code = '25' or  (name = '9151/3' ) and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from item_master where   code = '25' or  (name = '9151/3' ) and office_id= '1' 
 Execution Time:0.0003659725189209

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('25', '9151/3', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025808811187744

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025081634521484

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025081634521484

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025081634521484

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from item_master where   code = '26' or  (name = 'EYEQUE' ) and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from item_master where   code = '26' or  (name = 'EYEQUE' ) and office_id= '1' 
 Execution Time:0.00034499168395996

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('26', 'EYEQUE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0033621788024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003819465637207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016117095947266

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016117095947266

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00042009353637695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016117095947266

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from item_master where   code = '27' or  (name = 'GOLD STAR' ) and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from item_master where   code = '27' or  (name = 'GOLD STAR' ) and office_id= '1' 
 Execution Time:0.00037789344787598

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('27', 'GOLD STAR', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0099999904632568

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026679039001465

select count(*) as cnt from item_master where   code = '28' or  (name = 'CROCK' ) and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from item_master where   code = '28' or  (name = 'CROCK' ) and office_id= '1' 
 Execution Time:0.00035309791564941

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('28', 'CROCK', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.005702018737793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015687942504883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015687942504883

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015687942504883

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from item_master where   code = '29' or  (name = 'HAPPINESS' ) and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from item_master where   code = '29' or  (name = 'HAPPINESS' ) and office_id= '1' 
 Execution Time:0.00041294097900391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('29', 'HAPPINESS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0022199153900146

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from item_master where   code = '30' or  (name = 'AUDIO' ) and office_id= '1' 
 Execution Time:0.00055384635925293

select count(*) as cnt from item_master where   code = '30' or  (name = 'AUDIO' ) and office_id= '1' 
 Execution Time:0.00055384635925293

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('30', 'AUDIO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056989192962646

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from item_master where   code = '31' or  (name = 'LONGTIME' ) and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from item_master where   code = '31' or  (name = 'LONGTIME' ) and office_id= '1' 
 Execution Time:0.00039291381835938

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('31', 'LONGTIME', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019979476928711

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021982192993164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from item_master where   code = '32' or  (name = 'POLO' ) and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from item_master where   code = '32' or  (name = 'POLO' ) and office_id= '1' 
 Execution Time:0.00049686431884766

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('32', 'POLO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0016920566558838

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032615661621094

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032615661621094

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032615661621094

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032615661621094

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from item_master where   code = '33' or  (name = 'OMEGA' ) and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from item_master where   code = '33' or  (name = 'OMEGA' ) and office_id= '1' 
 Execution Time:0.00034403800964355

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('33', 'OMEGA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.019367933273315

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022315979003906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022315979003906

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022315979003906

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0025458335876465

select count(*) as cnt from item_master where   code = '34' or  (name = 'TRIUMPH' ) and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from item_master where   code = '34' or  (name = 'TRIUMPH' ) and office_id= '1' 
 Execution Time:0.00040698051452637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('34', 'TRIUMPH', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050959587097168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037717819213867

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037717819213867

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037717819213867

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001370906829834

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037717819213867

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001370906829834

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from item_master where   code = '35' or  (name = 'ENTERPRISES' ) and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from item_master where   code = '35' or  (name = 'ENTERPRISES' ) and office_id= '1' 
 Execution Time:0.00034284591674805

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('35', 'ENTERPRISES', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044820308685303

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034189224243164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034189224243164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023818016052246

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034189224243164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023818016052246

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034189224243164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023818016052246

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031280517578125

select count(*) as cnt from item_master where   code = '36' or  (name = 'SINCERI' ) and office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from item_master where   code = '36' or  (name = 'SINCERI' ) and office_id= '1' 
 Execution Time:0.0006248950958252

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('36', 'SINCERI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023670196533203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029516220092773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029516220092773

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019121170043945

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029516220092773

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019121170043945

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029516220092773

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019121170043945

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from item_master where   code = '37' or  (name = 'HAPPY' ) and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from item_master where   code = '37' or  (name = 'HAPPY' ) and office_id= '1' 
 Execution Time:0.00038790702819824

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('37', 'HAPPY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0048611164093018

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017905235290527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017905235290527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017285346984863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017905235290527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from item_master where   code = '38' or  (name = 'GOLDEN' ) and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from item_master where   code = '38' or  (name = 'GOLDEN' ) and office_id= '1' 
 Execution Time:0.00049304962158203

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('38', 'GOLDEN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0061161518096924

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012016296386719

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from item_master where   code = '39' or  (name = 'D&amp;K ULTRATHIN' ) and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from item_master where   code = '39' or  (name = 'D&amp;K ULTRATHIN' ) and office_id= '1' 
 Execution Time:0.00040102005004883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('39', 'D&amp;K ULTRATHIN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049090385437012

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001521110534668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001521110534668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00011801719665527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001521110534668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from item_master where   code = '40' or  (name = 'RE-I' ) and office_id= '1' 
 Execution Time:0.00042819976806641

select count(*) as cnt from item_master where   code = '40' or  (name = 'RE-I' ) and office_id= '1' 
 Execution Time:0.00042819976806641

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('40', 'RE-I', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052459239959717

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '40' or  (name = 'TOMHARDY' ) and office_id= '1' 
 Execution Time:0.00052595138549805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022792816162109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022792816162109

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022792816162109

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from item_master where   code = '41' or  (name = 'TOMHARDY' ) and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from item_master where   code = '41' or  (name = 'TOMHARDY' ) and office_id= '1' 
 Execution Time:0.00043392181396484

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('41', 'TOMHARDY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0016639232635498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030398368835449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016021728515625

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016021728515625

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002288818359375

select count(*) as cnt from item_master where   code = '42' or  (name = 'SARKAR' ) and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from item_master where   code = '42' or  (name = 'SARKAR' ) and office_id= '1' 
 Execution Time:0.00041007995605469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('42', 'SARKAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044658184051514

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018310546875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018310546875

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from item_master where   code = '43' or  (name = 'TOD-GAR' ) and office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from item_master where   code = '43' or  (name = 'TOD-GAR' ) and office_id= '1' 
 Execution Time:0.00043892860412598

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('43', 'TOD-GAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051541328430176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from item_master where   code = '44' or  (name = 'FLOURISH' ) and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from item_master where   code = '44' or  (name = 'FLOURISH' ) and office_id= '1' 
 Execution Time:0.00029206275939941

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('44', 'FLOURISH', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048160552978516

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038313865661621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023388862609863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023388862609863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020217895507812

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023388862609863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from item_master where   code = '45' or  (name = 'GREENART' ) and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from item_master where   code = '45' or  (name = 'GREENART' ) and office_id= '1' 
 Execution Time:0.00039792060852051

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('45', 'GREENART', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046119689941406

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016117095947266

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016117095947266

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016117095947266

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from item_master where   code = '46' or  (name = 'CARAMEL' ) and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from item_master where   code = '46' or  (name = 'CARAMEL' ) and office_id= '1' 
 Execution Time:0.00029397010803223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('46', 'CARAMEL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044279098510742

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from item_master where   code = '47' or  (name = 'CIVITAS' ) and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from item_master where   code = '47' or  (name = 'CIVITAS' ) and office_id= '1' 
 Execution Time:0.0004889965057373

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('47', 'CIVITAS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0084691047668457

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from item_master where   code = '48' or  (name = 'HONEST' ) and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from item_master where   code = '48' or  (name = 'HONEST' ) and office_id= '1' 
 Execution Time:0.00041699409484863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('48', 'HONEST', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.011398077011108

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041794776916504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040793418884277

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041794776916504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041794776916504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025796890258789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041794776916504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025796890258789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from item_master where   code = '49' or  (name = 'CAPTAIN' ) and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from item_master where   code = '49' or  (name = 'CAPTAIN' ) and office_id= '1' 
 Execution Time:0.00040912628173828

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('49', 'CAPTAIN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051372051239014

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021505355834961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020384788513184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021505355834961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020384788513184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023293495178223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021505355834961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020384788513184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from item_master where   code = '50' or  (name = 'RAYTER' ) and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from item_master where   code = '50' or  (name = 'RAYTER' ) and office_id= '1' 
 Execution Time:0.00041890144348145

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('50', 'RAYTER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056710243225098

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023913383483887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from item_master where   code = '51' or  (name = 'FLOWER' ) and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from item_master where   code = '51' or  (name = 'FLOWER' ) and office_id= '1' 
 Execution Time:0.00046205520629883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('51', 'FLOWER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047380924224854

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045013427734375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045013427734375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019288063049316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045013427734375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019288063049316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045013427734375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019288063049316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from item_master where   code = '52' or  (name = 'LENIN VICTORY' ) and office_id= '1' 
 Execution Time:0.0054290294647217

select count(*) as cnt from item_master where   code = '52' or  (name = 'LENIN VICTORY' ) and office_id= '1' 
 Execution Time:0.0054290294647217

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('52', 'LENIN VICTORY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0032310485839844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from item_master where   code = '53' or  (name = 'LINZOLOUIS' ) and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from item_master where   code = '53' or  (name = 'LINZOLOUIS' ) and office_id= '1' 
 Execution Time:0.00049591064453125

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('53', 'LINZOLOUIS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0059590339660645

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040912628173828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027990341186523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040912628173828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027990341186523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040912628173828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027990341186523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019717216491699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040912628173828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027990341186523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from item_master where   code = '54' or  (name = 'PACEX' ) and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from item_master where   code = '54' or  (name = 'PACEX' ) and office_id= '1' 
 Execution Time:0.00029706954956055

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('54', 'PACEX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0024900436401367

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '55' or  (name = 'EXPLENDOR' ) and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from item_master where   code = '55' or  (name = 'EXPLENDOR' ) and office_id= '1' 
 Execution Time:0.00045299530029297

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('55', 'EXPLENDOR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019800662994385

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044584274291992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044584274291992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016212463378906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044584274291992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016212463378906

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044584274291992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016212463378906

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from item_master where   code = '56' or  (name = 'RAJVEER' ) and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from item_master where   code = '56' or  (name = 'RAJVEER' ) and office_id= '1' 
 Execution Time:0.00043392181396484

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('56', 'RAJVEER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0024969577789307

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048494338989258

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048494338989258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016617774963379

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048494338989258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016617774963379

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048494338989258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016617774963379

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from item_master where   code = '57' or  (name = 'KO 001' ) and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from item_master where   code = '57' or  (name = 'KO 001' ) and office_id= '1' 
 Execution Time:0.00042891502380371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('57', 'KO 001', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0066030025482178

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from item_master where   code = '58' or  (name = 'HESH' ) and office_id= '1' 
 Execution Time:0.00030922889709473

select count(*) as cnt from item_master where   code = '58' or  (name = 'HESH' ) and office_id= '1' 
 Execution Time:0.00030922889709473

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('58', 'HESH', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023148059844971

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027704238891602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027704238891602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001988410949707

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027704238891602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from item_master where   code = '59' or  (name = 'EDUCATE' ) and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from item_master where   code = '59' or  (name = 'EDUCATE' ) and office_id= '1' 
 Execution Time:0.00028800964355469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('59', 'EDUCATE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044221878051758

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031089782714844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002138614654541

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from item_master where   code = '60' or  (name = 'CENTRESPOT' ) and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from item_master where   code = '60' or  (name = 'CENTRESPOT' ) and office_id= '1' 
 Execution Time:0.00041604042053223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('60', 'CENTRESPOT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020668506622314

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033879280090332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033879280090332

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033879280090332

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033879280090332

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from item_master where   code = '61' or  (name = 'DEVSTOMY' ) and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from item_master where   code = '61' or  (name = 'DEVSTOMY' ) and office_id= '1' 
 Execution Time:0.00034594535827637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('61', 'DEVSTOMY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0081930160522461

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from item_master where   code = '62' or  (name = 'PRINCE' ) and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from item_master where   code = '62' or  (name = 'PRINCE' ) and office_id= '1' 
 Execution Time:0.00052905082702637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('62', 'PRINCE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002079963684082

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00050091743469238

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00050091743469238

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00050091743469238

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from item_master where   code = '63' or  (name = 'CALLARDO' ) and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from item_master where   code = '63' or  (name = 'CALLARDO' ) and office_id= '1' 
 Execution Time:0.00041699409484863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('63', 'CALLARDO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027098655700684

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025391578674316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025391578674316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021815299987793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025391578674316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0012190341949463

select count(*) as cnt from item_master where   code = '64' or  (name = 'CARLE SLIM' ) and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from item_master where   code = '64' or  (name = 'CARLE SLIM' ) and office_id= '1' 
 Execution Time:0.00042605400085449

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('64', 'CARLE SLIM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026099681854248

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from item_master where   code = '64' or  (name = 'EIBACH' ) and office_id= '1' 
 Execution Time:0.00040602684020996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from item_master where   code = '65' or  (name = 'EIBACH' ) and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from item_master where   code = '65' or  (name = 'EIBACH' ) and office_id= '1' 
 Execution Time:0.00040006637573242

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('65', 'EIBACH', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0026788711547852

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019192695617676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033879280090332

select count(*) as cnt from item_master where   code = '66' or  (name = 'JADES' ) and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '66' or  (name = 'JADES' ) and office_id= '1' 
 Execution Time:0.0003819465637207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('66', 'JADES', '1', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0038058757781982

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from item_master where   code = '66' or  (name = 'JHONNY MILLER' ) and office_id= '1' 
 Execution Time:0.00071096420288086

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026822090148926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026822090148926

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018715858459473

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026822090148926

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018715858459473

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026822090148926

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018715858459473

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select count(*) as cnt from item_master where   code = '67' or  (name = 'JHONNY MILLER' ) and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from item_master where   code = '67' or  (name = 'JHONNY MILLER' ) and office_id= '1' 
 Execution Time:0.00037002563476562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('67', 'JHONNY MILLER', '2', '0', '1', '', '1', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0057611465454102

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from item_master where   code = '68' or  (name = 'VINCILEO' ) and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from item_master where   code = '68' or  (name = 'VINCILEO' ) and office_id= '1' 
 Execution Time:0.00034999847412109

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('68', 'VINCILEO', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0054080486297607

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from item_master where   code = '69' or  (name = 'BELUTTI' ) and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from item_master where   code = '69' or  (name = 'BELUTTI' ) and office_id= '1' 
 Execution Time:0.0004420280456543

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('69', 'BELUTTI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00347900390625

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0028519630432129

select count(*) as cnt from item_master where   code = '69' or  (name = 'MALI' ) and office_id= '1' 
 Execution Time:0.00048398971557617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046586990356445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046586990356445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026607513427734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046586990356445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026607513427734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023317337036133

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046586990356445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026607513427734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from item_master where   code = '70' or  (name = 'MALI' ) and office_id= '1' 
 Execution Time:0.00052881240844727

select count(*) as cnt from item_master where   code = '70' or  (name = 'MALI' ) and office_id= '1' 
 Execution Time:0.00052881240844727

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('70', 'MALI', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0026359558105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from item_master where   code = '71' or  (name = 'ASME' ) and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from item_master where   code = '71' or  (name = 'ASME' ) and office_id= '1' 
 Execution Time:0.00047397613525391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('71', 'ASME', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.010984897613525

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024509429931641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024509429931641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from item_master where   code = '72' or  (name = 'Ddas' ) and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from item_master where   code = '72' or  (name = 'Ddas' ) and office_id= '1' 
 Execution Time:0.00034785270690918

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('72', 'Ddas', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0053350925445557

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043797492980957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027203559875488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026583671569824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027203559875488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from item_master where   code = '73' or  (name = 'BASSBARITONE' ) and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from item_master where   code = '73' or  (name = 'BASSBARITONE' ) and office_id= '1' 
 Execution Time:0.00046586990356445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('73', 'BASSBARITONE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0079419612884521

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from item_master where   code = '73' or  (name = 'ROCK MAN' ) and office_id= '1' 
 Execution Time:0.00029611587524414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from item_master where   code = '74' or  (name = 'ROCK MAN' ) and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from item_master where   code = '74' or  (name = 'ROCK MAN' ) and office_id= '1' 
 Execution Time:0.00038003921508789

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('74', 'ROCK MAN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047760009765625

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012683868408203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032281875610352

select count(*) as cnt from item_master where   code = '75' or  (name = 'NEW SMART' ) and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from item_master where   code = '75' or  (name = 'NEW SMART' ) and office_id= '1' 
 Execution Time:0.00045204162597656

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('75', 'NEW SMART', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0058560371398926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048398971557617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048398971557617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048398971557617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048398971557617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '76' or  (name = 'VT' ) and office_id= '1' 
 Execution Time:0.0038809776306152

select count(*) as cnt from item_master where   code = '76' or  (name = 'VT' ) and office_id= '1' 
 Execution Time:0.0038809776306152

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('76', 'VT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051507949829102

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041580200195312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041580200195312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021100044250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041580200195312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021100044250488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017714500427246

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041580200195312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021100044250488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from item_master where   code = '77' or  (name = 'MAKEV' ) and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from item_master where   code = '77' or  (name = 'MAKEV' ) and office_id= '1' 
 Execution Time:0.00041604042053223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('77', 'MAKEV', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0061588287353516

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from item_master where   code = '78' or  (name = 'BLUECROSS' ) and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from item_master where   code = '78' or  (name = 'BLUECROSS' ) and office_id= '1' 
 Execution Time:0.00046586990356445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('78', 'BLUECROSS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020060539245605

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from item_master where   code = '79' or  (name = 'MONEXLUXURY' ) and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from item_master where   code = '79' or  (name = 'MONEXLUXURY' ) and office_id= '1' 
 Execution Time:0.00043392181396484

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('79', 'MONEXLUXURY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023200511932373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045084953308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from item_master where   code = '80' or  (name = 'FIFASHERI' ) and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from item_master where   code = '80' or  (name = 'FIFASHERI' ) and office_id= '1' 
 Execution Time:0.00048398971557617

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('80', 'FIFASHERI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046360492706299

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from item_master where   code = '81' or  (name = 'KANGAROO' ) and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from item_master where   code = '81' or  (name = 'KANGAROO' ) and office_id= '1' 
 Execution Time:0.00053286552429199

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('81', 'KANGAROO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026071071624756

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048518180847168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048518180847168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048518180847168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048518180847168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select count(*) as cnt from item_master where   code = '82' or  (name = 'GENIUS' ) and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from item_master where   code = '82' or  (name = 'GENIUS' ) and office_id= '1' 
 Execution Time:0.00034904479980469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('82', 'GENIUS', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.00565505027771

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047993659973145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036501884460449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025415420532227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025415420532227

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025415420532227

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018715858459473

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00049519538879395

select count(*) as cnt from item_master where   code = '83' or  (name = 'VINARDE' ) and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from item_master where   code = '83' or  (name = 'VINARDE' ) and office_id= '1' 
 Execution Time:0.00038790702819824

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('83', 'VINARDE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0059599876403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from item_master where   code = '84' or  (name = 'AIRDATA' ) and office_id= '1' 
 Execution Time:0.00066113471984863

select count(*) as cnt from item_master where   code = '84' or  (name = 'AIRDATA' ) and office_id= '1' 
 Execution Time:0.00066113471984863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('84', 'AIRDATA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005141019821167

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from item_master where   code = '85' or  (name = 'DRYKAR' ) and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from item_master where   code = '85' or  (name = 'DRYKAR' ) and office_id= '1' 
 Execution Time:0.00054502487182617

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('85', 'DRYKAR', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0048840045928955

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029301643371582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select count(*) as cnt from item_master where   code = '86' or  (name = 'SEVENSTAR' ) and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from item_master where   code = '86' or  (name = 'SEVENSTAR' ) and office_id= '1' 
 Execution Time:0.00047397613525391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('86', 'SEVENSTAR', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0049839019775391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026583671569824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026583671569824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020194053649902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026583671569824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020194053649902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026583671569824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020194053649902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from item_master where   code = '87' or  (name = 'SCORPY' ) and office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from item_master where   code = '87' or  (name = 'SCORPY' ) and office_id= '1' 
 Execution Time:0.00035715103149414

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('87', 'SCORPY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048441886901855

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039982795715332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039982795715332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039982795715332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020408630371094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039982795715332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001990795135498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044012069702148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044012069702148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044012069702148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044012069702148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from item_master where   code = '88' or  (name = 'SEVENSTAR-2' ) and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from item_master where   code = '88' or  (name = 'SEVENSTAR-2' ) and office_id= '1' 
 Execution Time:0.00035905838012695

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('88', 'SEVENSTAR-2', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0024609565734863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030016899108887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from item_master where   code = '89' or  (name = 'VYBOR' ) and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from item_master where   code = '89' or  (name = 'VYBOR' ) and office_id= '1' 
 Execution Time:0.00038695335388184

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('89', 'VYBOR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0017228126525879

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001378059387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001378059387207

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from item_master where   code = '90' or  (name = 'VIKVSRA' ) and office_id= '1' 
 Execution Time:0.00044083595275879

select count(*) as cnt from item_master where   code = '90' or  (name = 'VIKVSRA' ) and office_id= '1' 
 Execution Time:0.00044083595275879

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('90', 'VIKVSRA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050320625305176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from item_master where   code = '91' or  (name = 'REDFOX' ) and office_id= '1' 
 Execution Time:0.00061178207397461

select count(*) as cnt from item_master where   code = '91' or  (name = 'REDFOX' ) and office_id= '1' 
 Execution Time:0.00061178207397461

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('91', 'REDFOX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052299499511719

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036716461181641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036716461181641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031304359436035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036716461181641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031304359436035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018787384033203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036716461181641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031304359436035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from item_master where   code = '92' or  (name = 'SPORT' ) and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from item_master where   code = '92' or  (name = 'SPORT' ) and office_id= '1' 
 Execution Time:0.00032806396484375

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('92', 'SPORT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023350715637207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022482872009277

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022482872009277

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022482872009277

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013589859008789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022482872009277

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013589859008789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from item_master where   code = '93' or  (name = 'COPS' ) and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from item_master where   code = '93' or  (name = 'COPS' ) and office_id= '1' 
 Execution Time:0.00042200088500977

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('93', 'COPS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0011520385742188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042390823364258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042390823364258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020718574523926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042390823364258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020718574523926

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015783309936523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042390823364258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020718574523926

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from item_master where   code = '94' or  (name = 'FACTUAL' ) and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from item_master where   code = '94' or  (name = 'FACTUAL' ) and office_id= '1' 
 Execution Time:0.00040793418884277

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('94', 'FACTUAL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048420429229736

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '95' or  (name = 'TOM HARDY' ) and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from item_master where   code = '95' or  (name = 'TOM HARDY' ) and office_id= '1' 
 Execution Time:0.0005040168762207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('95', 'TOM HARDY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019779205322266

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021696090698242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021696090698242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019216537475586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021696090698242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00051522254943848

select count(*) as cnt from item_master where   code = '96' or  (name = 'VIV HERO' ) and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from item_master where   code = '96' or  (name = 'VIV HERO' ) and office_id= '1' 
 Execution Time:0.00036191940307617

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('96', 'VIV HERO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0016720294952393

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029182434082031

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029182434082031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029182434082031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022315979003906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029182434082031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '97' or  (name = 'COLOR FRY' ) and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from item_master where   code = '97' or  (name = 'COLOR FRY' ) and office_id= '1' 
 Execution Time:0.00042986869812012

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('97', 'COLOR FRY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023159980773926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021910667419434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021910667419434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015521049499512

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021910667419434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015521049499512

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016880035400391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021910667419434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015521049499512

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from item_master where   code = '98' or  (name = 'COMBAT' ) and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from item_master where   code = '98' or  (name = 'COMBAT' ) and office_id= '1' 
 Execution Time:0.00034999847412109

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('98', 'COMBAT', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.016707181930542

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031304359436035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031304359436035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002129077911377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031304359436035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032877922058105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032877922058105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032877922058105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032877922058105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from item_master where   code = '99' or  (name = 'DISTANCE' ) and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from item_master where   code = '99' or  (name = 'DISTANCE' ) and office_id= '1' 
 Execution Time:0.00031304359436035

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('99', 'DISTANCE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0062410831451416

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034880638122559

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034880638122559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034880638122559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034880638122559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001671314239502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001671314239502

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001671314239502

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from item_master where   code = '100' or  (name = 'COTAHASH' ) and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from item_master where   code = '100' or  (name = 'COTAHASH' ) and office_id= '1' 
 Execution Time:0.00032711029052734

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('100', 'COTAHASH', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050420761108398

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025606155395508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025606155395508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025606155395508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025606155395508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from item_master where   code = '101' or  (name = 'CITRON' ) and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from item_master where   code = '101' or  (name = 'CITRON' ) and office_id= '1' 
 Execution Time:0.00044608116149902

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('101', 'CITRON', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0028328895568848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031280517578125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020289421081543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031280517578125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020289421081543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031280517578125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020289421081543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001370906829834

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031280517578125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020289421081543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001370906829834

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.012673854827881

select count(*) as cnt from item_master where   code = '102' or  (name = 'BANRAYS' ) and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from item_master where   code = '102' or  (name = 'BANRAYS' ) and office_id= '1' 
 Execution Time:0.00030803680419922

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('102', 'BANRAYS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056869983673096

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023412704467773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023412704467773

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023412704467773

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023412704467773

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from item_master where   code = '103' or  (name = 'PURES' ) and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from item_master where   code = '103' or  (name = 'PURES' ) and office_id= '1' 
 Execution Time:0.00036787986755371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('103', 'PURES', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0068199634552002

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from item_master where   code = '104' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from item_master where   code = '104' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.00040507316589355

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('104', 'LAMY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0051860809326172

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044488906860352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030183792114258

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044488906860352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030183792114258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019383430480957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044488906860352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030183792114258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019383430480957

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044488906860352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030183792114258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019383430480957

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '105' or  (name = 'NINTEENDREAM' ) and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from item_master where   code = '105' or  (name = 'NINTEENDREAM' ) and office_id= '1' 
 Execution Time:0.00039887428283691

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('105', 'NINTEENDREAM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049829483032227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025677680969238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025677680969238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019288063049316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025677680969238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019288063049316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025677680969238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001978874206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019288063049316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from item_master where   code = '106' or  (name = 'TOO LOOK' ) and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from item_master where   code = '106' or  (name = 'TOO LOOK' ) and office_id= '1' 
 Execution Time:0.00036811828613281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('106', 'TOO LOOK', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026819705963135

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055480003356934

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043416023254395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055480003356934

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055480003356934

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021982192993164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055480003356934

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043416023254395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from item_master where   code = '107' or  (name = 'DOUINVE' ) and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from item_master where   code = '107' or  (name = 'DOUINVE' ) and office_id= '1' 
 Execution Time:0.00038290023803711

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('107', 'DOUINVE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048110485076904

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002448558807373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002448558807373

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002448558807373

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002448558807373

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.000244140625

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from item_master where   code = '108' or  (name = 'CIGAR' ) and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from item_master where   code = '108' or  (name = 'CIGAR' ) and office_id= '1' 
 Execution Time:0.00044488906860352

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('108', 'CIGAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.011419057846069

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from item_master where   code = '109' or  (name = 'D&amp;K DELUX' ) and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from item_master where   code = '109' or  (name = 'D&amp;K DELUX' ) and office_id= '1' 
 Execution Time:0.00035500526428223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('109', 'D&amp;K DELUX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050220489501953

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020408630371094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020408630371094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020408630371094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020408630371094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from item_master where   code = '110' or  (name = 'RADIANCE' ) and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from item_master where   code = '110' or  (name = 'RADIANCE' ) and office_id= '1' 
 Execution Time:0.0003969669342041

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('110', 'RADIANCE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0038659572601318

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003049373626709

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from item_master where   code = '111' or  (name = 'POSITIVE BR 500' ) and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from item_master where   code = '111' or  (name = 'POSITIVE BR 500' ) and office_id= '1' 
 Execution Time:0.00033307075500488

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('111', 'POSITIVE BR 500', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0045340061187744

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041007995605469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041007995605469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017619132995605

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041007995605469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017619132995605

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041007995605469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017619132995605

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from item_master where   code = '112' or  (name = 'TOP-8' ) and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from item_master where   code = '112' or  (name = 'TOP-8' ) and office_id= '1' 
 Execution Time:0.00030303001403809

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('112', 'TOP-8', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.004828929901123

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016880035400391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from item_master where   code = '113' or  (name = 'NESS' ) and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '113' or  (name = 'NESS' ) and office_id= '1' 
 Execution Time:0.00036001205444336

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('113', 'NESS', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0048179626464844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003669261932373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003669261932373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017213821411133

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003669261932373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017213821411133

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003669261932373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017213821411133

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032877922058105

select count(*) as cnt from item_master where   code = '114' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00033211708068848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040602684020996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040602684020996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017309188842773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040602684020996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017309188842773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00029802322387695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040602684020996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017309188842773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from item_master where   code = '114' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00049304962158203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018787384033203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018787384033203

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018787384033203

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '114' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00038695335388184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from item_master where   code = '114' or  (name = 'BABY-BEE' ) and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from item_master where   code = '114' or  (name = 'BABY-BEE' ) and office_id= '1' 
 Execution Time:0.00041604042053223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('114', 'BABY-BEE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002734899520874

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from item_master where   code = '115' or  (name = 'POSITIVE BR 600' ) and office_id= '1' 
 Execution Time:0.00047111511230469

select count(*) as cnt from item_master where   code = '115' or  (name = 'POSITIVE BR 600' ) and office_id= '1' 
 Execution Time:0.00047111511230469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('115', 'POSITIVE BR 600', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0053620338439941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from item_master where   code = '116' or  (name = 'AURA' ) and office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from item_master where   code = '116' or  (name = 'AURA' ) and office_id= '1' 
 Execution Time:0.00053906440734863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('116', 'AURA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0028021335601807

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030279159545898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030279159545898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030279159545898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030279159545898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00037813186645508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030612945556641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030612945556641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030612945556641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030612945556641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003662109375

select count(*) as cnt from item_master where   code = '117' or  (name = 'TIDE CHUG' ) and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from item_master where   code = '117' or  (name = 'TIDE CHUG' ) and office_id= '1' 
 Execution Time:0.0004420280456543

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('117', 'TIDE CHUG', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.004863977432251

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034213066101074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from item_master where   code = '118' or  (name = 'WING COMMANDER' ) and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from item_master where   code = '118' or  (name = 'WING COMMANDER' ) and office_id= '1' 
 Execution Time:0.00033402442932129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('118', 'WING COMMANDER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044138431549072

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020098686218262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020098686218262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from item_master where   code = '119' or  (name = 'KNIGHT HORSE' ) and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from item_master where   code = '119' or  (name = 'KNIGHT HORSE' ) and office_id= '1' 
 Execution Time:0.00036811828613281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('119', 'KNIGHT HORSE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0068390369415283

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024294853210449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024294853210449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017189979553223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024294853210449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017189979553223

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024294853210449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017189979553223

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001220703125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056695938110352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056695938110352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027585029602051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056695938110352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027585029602051

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056695938110352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027585029602051

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00077104568481445

select count(*) as cnt from item_master where   code = '120' or  (name = 'GYS 3001' ) and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from item_master where   code = '120' or  (name = 'GYS 3001' ) and office_id= '1' 
 Execution Time:0.00046396255493164

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('120', 'GYS 3001', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020420551300049

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021982192993164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021982192993164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021982192993164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021982192993164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001220703125

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from item_master where   code = '121' or  (name = 'GYS 3003' ) and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '121' or  (name = 'GYS 3003' ) and office_id= '1' 
 Execution Time:0.0003819465637207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('121', 'GYS 3003', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046730041503906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from item_master where   code = '122' or  (name = 'RAJVEER MTL' ) and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from item_master where   code = '122' or  (name = 'RAJVEER MTL' ) and office_id= '1' 
 Execution Time:0.00046300888061523

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('122', 'RAJVEER MTL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.010380029678345

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027608871459961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027608871459961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021481513977051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027608871459961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from item_master where   code = '123' or  (name = 'SIGNATURE' ) and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from item_master where   code = '123' or  (name = 'SIGNATURE' ) and office_id= '1' 
 Execution Time:0.00038814544677734

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('123', 'SIGNATURE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048658847808838

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from item_master where   code = '124' or  (name = 'BLUE BLAST' ) and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from item_master where   code = '124' or  (name = 'BLUE BLAST' ) and office_id= '1' 
 Execution Time:0.00044798851013184

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('124', 'BLUE BLAST', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002471923828125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013089179992676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013089179992676

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025606155395508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013089179992676

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from item_master where   code = '125' or  (name = 'RAJVEER' ) and office_id= '1' 
 Execution Time:0.00035595893859863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041389465332031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041389465332031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041389465332031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041389465332031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from item_master where   code = '125' or  (name = 'RAJVEER' ) and office_id= '1' 
 Execution Time:0.00041508674621582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021195411682129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021195411682129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014305114746094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021195411682129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014305114746094

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021195411682129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014305114746094

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002281665802002

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002281665802002

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002281665802002

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from item_master where   code = '125' or  (name = 'RAJVEER' ) and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from item_master where   code = '125' or  (name = 'FRILL' ) and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from item_master where   code = '125' or  (name = 'FRILL' ) and office_id= '1' 
 Execution Time:0.0003659725189209

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('125', 'FRILL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0064358711242676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012993812561035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012993812561035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from item_master where   code = '126' or  (name = 'POSITIVE 650' ) and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from item_master where   code = '126' or  (name = 'POSITIVE 650' ) and office_id= '1' 
 Execution Time:0.00038695335388184

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('126', 'POSITIVE 650', '2', '0', '1', '', '1', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0060858726501465

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020623207092285

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020623207092285

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021982192993164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020623207092285

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '127' or  (name = 'CORAL-EEF' ) and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from item_master where   code = '127' or  (name = 'CORAL-EEF' ) and office_id= '1' 
 Execution Time:0.00041007995605469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('127', 'CORAL-EEF', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020928382873535

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001378059387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001378059387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001378059387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from item_master where   code = '128' or  (name = 'S-FLEX' ) and office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from item_master where   code = '128' or  (name = 'S-FLEX' ) and office_id= '1' 
 Execution Time:0.00052690505981445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('128', 'S-FLEX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0057580471038818

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from item_master where   code = '129' or  (name = 'CURL SIDE' ) and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from item_master where   code = '129' or  (name = 'CURL SIDE' ) and office_id= '1' 
 Execution Time:0.00043296813964844

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('129', 'CURL SIDE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049269199371338

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019407272338867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019407272338867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019407272338867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from item_master where   code = '130' or  (name = 'STATE' ) and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from item_master where   code = '130' or  (name = 'STATE' ) and office_id= '1' 
 Execution Time:0.00047612190246582

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('130', 'STATE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023610591888428

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048995018005371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048995018005371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017309188842773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048995018005371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017309188842773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048995018005371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017309188842773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030112266540527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018715858459473

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018715858459473

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018715858459473

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from item_master where   code = '131' or  (name = 'CALABRIA' ) and office_id= '1' 
 Execution Time:0.00041818618774414

select count(*) as cnt from item_master where   code = '131' or  (name = 'CALABRIA' ) and office_id= '1' 
 Execution Time:0.00041818618774414

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('131', 'CALABRIA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.007544994354248

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028419494628906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028419494628906

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023484230041504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028419494628906

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023484230041504

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028419494628906

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023484230041504

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027990341186523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from item_master where   code = '132' or  (name = 'JENNIFER LOPEZ' ) and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from item_master where   code = '132' or  (name = 'JENNIFER LOPEZ' ) and office_id= '1' 
 Execution Time:0.00041103363037109

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('132', 'JENNIFER LOPEZ', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0077159404754639

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from item_master where   code = '133' or  (name = 'TR 2266' ) and office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from item_master where   code = '133' or  (name = 'TR 2266' ) and office_id= '1' 
 Execution Time:0.00046801567077637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('133', 'TR 2266', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025460720062256

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026917457580566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from item_master where   code = '134' or  (name = 'TR 2230' ) and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from item_master where   code = '134' or  (name = 'TR 2230' ) and office_id= '1' 
 Execution Time:0.00048017501831055

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('134', 'TR 2230', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0038919448852539

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038003921508789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031709671020508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031709671020508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021815299987793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031709671020508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021815299987793

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031709671020508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021815299987793

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from item_master where   code = '135' or  (name = 'SINCE' ) and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from item_master where   code = '135' or  (name = 'SINCE' ) and office_id= '1' 
 Execution Time:0.00042009353637695

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('135', 'SINCE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0041189193725586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023007392883301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023007392883301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023007392883301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002448558807373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021791458129883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from item_master where   code = '136' or  (name = 'COOPLEY' ) and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from item_master where   code = '136' or  (name = 'COOPLEY' ) and office_id= '1' 
 Execution Time:0.00062298774719238

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('136', 'COOPLEY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052430629730225

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028204917907715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028204917907715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021195411682129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028204917907715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021195411682129

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028204917907715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021195411682129

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from item_master where   code = '137' or  (name = 'MRD' ) and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from item_master where   code = '137' or  (name = 'MRD' ) and office_id= '1' 
 Execution Time:0.00044012069702148

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('137', 'MRD', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0016219615936279

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031805038452148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040483474731445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040483474731445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040483474731445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040483474731445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from item_master where   code = '138' or  (name = 'SMALL KID' ) and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from item_master where   code = '138' or  (name = 'SMALL KID' ) and office_id= '1' 
 Execution Time:0.00052905082702637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('138', 'SMALL KID', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047030448913574

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034618377685547

select count(*) as cnt from item_master where   code = '139' or  (name = 'ALBERT' ) and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from item_master where   code = '139' or  (name = 'ALBERT' ) and office_id= '1' 
 Execution Time:0.00038790702819824

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('139', 'ALBERT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051660537719727

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from item_master where   code = '140' or  (name = 'SPAINI' ) and office_id= '1' 
 Execution Time:0.0024008750915527

select count(*) as cnt from item_master where   code = '140' or  (name = 'SPAINI' ) and office_id= '1' 
 Execution Time:0.0024008750915527

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('140', 'SPAINI', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.012139081954956

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0035591125488281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018501281738281

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026583671569824

select count(*) as cnt from item_master where   code = '141' or  (name = 'RICKY' ) and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '141' or  (name = 'RICKY' ) and office_id= '1' 
 Execution Time:0.00033998489379883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('141', 'RICKY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0028619766235352

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from item_master where   code = '142' or  (name = 'LIGHT BR' ) and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from item_master where   code = '142' or  (name = 'LIGHT BR' ) and office_id= '1' 
 Execution Time:0.00040483474731445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('142', 'LIGHT BR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047941207885742

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042891502380371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030684471130371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042891502380371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030684471130371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042891502380371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030684471130371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042891502380371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030684471130371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044918060302734

select count(*) as cnt from item_master where   code = '143' or  (name = 'MENU' ) and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from item_master where   code = '143' or  (name = 'MENU' ) and office_id= '1' 
 Execution Time:0.0004580020904541

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('143', 'MENU', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0025579929351807

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013518333435059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013518333435059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019383430480957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013518333435059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from item_master where   code = '144' or  (name = 'AIR LITE' ) and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from item_master where   code = '144' or  (name = 'AIR LITE' ) and office_id= '1' 
 Execution Time:0.00042605400085449

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('144', 'AIR LITE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046079158782959

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047492980957031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047492980957031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027012825012207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047492980957031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027012825012207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022411346435547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047492980957031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027012825012207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from item_master where   code = '145' or  (name = 'EYE Q' ) and office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from item_master where   code = '145' or  (name = 'EYE Q' ) and office_id= '1' 
 Execution Time:0.00042915344238281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('145', 'EYE Q', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050919055938721

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from item_master where   code = '146' or  (name = 'ARGENTINA PLUS' ) and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from item_master where   code = '146' or  (name = 'ARGENTINA PLUS' ) and office_id= '1' 
 Execution Time:0.0005040168762207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('146', 'ARGENTINA PLUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0076780319213867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014519691467285

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from item_master where   code = '147' or  (name = 'CRITIC' ) and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from item_master where   code = '147' or  (name = 'CRITIC' ) and office_id= '1' 
 Execution Time:0.00033092498779297

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('147', 'CRITIC', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056090354919434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039291381835938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039291381835938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039291381835938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039291381835938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017380714416504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048208236694336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048208236694336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048208236694336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048208236694336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from item_master where   code = '148' or  (name = 'XPERT' ) and office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from item_master where   code = '148' or  (name = 'XPERT' ) and office_id= '1' 
 Execution Time:0.00039982795715332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('148', 'XPERT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050270557403564

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004420280456543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004420280456543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014114379882812

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004420280456543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014114379882812

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004420280456543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002129077911377

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014114379882812

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from item_master where   code = '149' or  (name = 'DEVS' ) and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from item_master where   code = '149' or  (name = 'DEVS' ) and office_id= '1' 
 Execution Time:0.00051212310791016

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('149', 'DEVS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0028901100158691

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032496452331543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002129077911377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002129077911377

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002129077911377

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from item_master where   code = '150' or  (name = 'SAM' ) and office_id= '1' 
 Execution Time:0.0003662109375

select count(*) as cnt from item_master where   code = '150' or  (name = 'SAM' ) and office_id= '1' 
 Execution Time:0.0003662109375

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('150', 'SAM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0057370662689209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002439022064209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002439022064209

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015091896057129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002439022064209

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015091896057129

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032401084899902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002439022064209

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015091896057129

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from item_master where   code = '151' or  (name = 'RAJVEER 380' ) and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from item_master where   code = '151' or  (name = 'RAJVEER 380' ) and office_id= '1' 
 Execution Time:0.0005500316619873

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('151', 'RAJVEER 380', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0077569484710693

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034785270690918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028514862060547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028514862060547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028514862060547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028514862060547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052094459533691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052094459533691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017714500427246

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052094459533691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017714500427246

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017595291137695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052094459533691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017714500427246

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from item_master where   code = '152' or  (name = 'SPECSI KID CAMP' ) and office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from item_master where   code = '152' or  (name = 'SPECSI KID CAMP' ) and office_id= '1' 
 Execution Time:0.00035381317138672

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('152', 'SPECSI KID CAMP', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.004951000213623

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from item_master where   code = '153' or  (name = 'MILLENIUM' ) and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from item_master where   code = '153' or  (name = 'MILLENIUM' ) and office_id= '1' 
 Execution Time:0.00059604644775391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('153', 'MILLENIUM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0037751197814941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027585029602051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027585029602051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027585029602051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027585029602051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from item_master where   code = '154' or  (name = 'LEXIN' ) and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from item_master where   code = '154' or  (name = 'LEXIN' ) and office_id= '1' 
 Execution Time:0.00041794776916504

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('154', 'LEXIN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0045158863067627

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from item_master where   code = '155' or  (name = 'SMALL BEAR' ) and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from item_master where   code = '155' or  (name = 'SMALL BEAR' ) and office_id= '1' 
 Execution Time:0.00041699409484863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('155', 'SMALL BEAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0018730163574219

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from item_master where   code = '156' or  (name = 'CHOCOLATE' ) and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from item_master where   code = '156' or  (name = 'CHOCOLATE' ) and office_id= '1' 
 Execution Time:0.00041604042053223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('156', 'CHOCOLATE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002810001373291

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040507316589355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040507316589355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040507316589355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026392936706543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040507316589355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from item_master where   code = '157' or  (name = 'AVENGERS' ) and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from item_master where   code = '157' or  (name = 'AVENGERS' ) and office_id= '1' 
 Execution Time:0.00046992301940918

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('157', 'AVENGERS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0036709308624268

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041985511779785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066494941711426

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041985511779785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066494941711426

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00061392784118652

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041985511779785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066494941711426

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00061392784118652

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0019149780273438

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041985511779785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066494941711426

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00061392784118652

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from item_master where   code = '158' or  (name = 'NIGHT VISION' ) and office_id= '1' 
 Execution Time:0.0003201961517334

select count(*) as cnt from item_master where   code = '158' or  (name = 'NIGHT VISION' ) and office_id= '1' 
 Execution Time:0.0003201961517334

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('158', 'NIGHT VISION', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0067660808563232

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037121772766113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037121772766113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001530647277832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037121772766113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001530647277832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037121772766113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001530647277832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012397766113281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026178359985352

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026178359985352

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026178359985352

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026178359985352

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from item_master where   code = '159' or  (name = 'STRADA' ) and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from item_master where   code = '159' or  (name = 'STRADA' ) and office_id= '1' 
 Execution Time:0.00068402290344238

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('159', 'STRADA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0054781436920166

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051593780517578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051593780517578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026297569274902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051593780517578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026297569274902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051593780517578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026297569274902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from item_master where   code = '160' or  (name = 'PUNK GLASS' ) and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from item_master where   code = '160' or  (name = 'PUNK GLASS' ) and office_id= '1' 
 Execution Time:0.00038909912109375

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('160', 'PUNK GLASS', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.002223014831543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053095817565918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038886070251465

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053095817565918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025320053100586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053095817565918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025320053100586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053095817565918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025320053100586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select count(*) as cnt from item_master where   code = '161' or  (name = 'PRECISE' ) and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from item_master where   code = '161' or  (name = 'PRECISE' ) and office_id= '1' 
 Execution Time:0.0005490779876709

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('161', 'PRECISE', '2', '0', '1', '', '1', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0075850486755371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021791458129883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021791458129883

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021791458129883

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from item_master where   code = '162' or  (name = 'LERNY JOHN' ) and office_id= '1' 
 Execution Time:0.000885009765625

select count(*) as cnt from item_master where   code = '162' or  (name = 'LERNY JOHN' ) and office_id= '1' 
 Execution Time:0.000885009765625

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('162', 'LERNY JOHN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0061500072479248

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from item_master where   code = '163' or  (name = 'EAGLE ROCK' ) and office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from item_master where   code = '163' or  (name = 'EAGLE ROCK' ) and office_id= '1' 
 Execution Time:0.00036120414733887

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('163', 'EAGLE ROCK', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0090129375457764

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002598762512207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020718574523926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from item_master where   code = '164' or  (name = 'SOLO' ) and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from item_master where   code = '164' or  (name = 'SOLO' ) and office_id= '1' 
 Execution Time:0.00043296813964844

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('164', 'SOLO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0092988014221191

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035905838012695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023889541625977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from item_master where   code = '165' or  (name = 'METALIC' ) and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '165' or  (name = 'METALIC' ) and office_id= '1' 
 Execution Time:0.00033998489379883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('165', 'METALIC', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044469833374023

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.013947010040283

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.013947010040283

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.013947010040283

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.013947010040283

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from item_master where   code = '166' or  (name = 'GARFIELD' ) and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from item_master where   code = '166' or  (name = 'GARFIELD' ) and office_id= '1' 
 Execution Time:0.00041484832763672

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('166', 'GARFIELD', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052242279052734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from item_master where   code = '167' or  (name = 'FIFILUANG GING' ) and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from item_master where   code = '167' or  (name = 'FIFILUANG GING' ) and office_id= '1' 
 Execution Time:0.00046014785766602

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('167', 'FIFILUANG GING', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026578903198242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052809715270996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052809715270996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052809715270996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030303001403809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026106834411621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052809715270996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030303001403809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select count(*) as cnt from item_master where   code = '168' or  (name = 'PITT&amp;MITT' ) and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from item_master where   code = '168' or  (name = 'PITT&amp;MITT' ) and office_id= '1' 
 Execution Time:0.00033402442932129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('168', 'PITT&amp;MITT', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0040678977966309

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043582916259766

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043582916259766

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043582916259766

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016880035400391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043582916259766

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016880035400391

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from item_master where   code = '169' or  (name = 'STAR LINE' ) and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from item_master where   code = '169' or  (name = 'STAR LINE' ) and office_id= '1' 
 Execution Time:0.0003960132598877

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('169', 'STAR LINE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.010103940963745

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025105476379395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025105476379395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025105476379395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025105476379395

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029420852661133

select count(*) as cnt from item_master where   code = '170' or  (name = 'TIMEX' ) and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from item_master where   code = '170' or  (name = 'TIMEX' ) and office_id= '1' 
 Execution Time:0.00038599967956543

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('170', 'TIMEX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0067570209503174

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014781951904297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from item_master where   code = '171' or  (name = 'AZZARO' ) and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from item_master where   code = '171' or  (name = 'AZZARO' ) and office_id= '1' 
 Execution Time:0.00036191940307617

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('171', 'AZZARO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0060429573059082

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024795532226562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024795532226562

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027894973754883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024795532226562

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037598609924316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019288063049316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from item_master where   code = '172' or  (name = 'GUY LAROCHE' ) and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from item_master where   code = '172' or  (name = 'GUY LAROCHE' ) and office_id= '1' 
 Execution Time:0.00037717819213867

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('172', 'GUY LAROCHE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052480697631836

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018095970153809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046515464782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from item_master where   code = '173' or  (name = 'FEATHER' ) and office_id= '1' 
 Execution Time:0.00055217742919922

select count(*) as cnt from item_master where   code = '173' or  (name = 'FEATHER' ) and office_id= '1' 
 Execution Time:0.00055217742919922

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('173', 'FEATHER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0071589946746826

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029110908508301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029110908508301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029110908508301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016283988952637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029110908508301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from item_master where   code = '174' or  (name = 'RAYBAN' ) and office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from item_master where   code = '174' or  (name = 'RAYBAN' ) and office_id= '1' 
 Execution Time:0.00036716461181641

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('174', 'RAYBAN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00502610206604

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0036098957061768

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0036098957061768

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0003058910369873

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0036098957061768

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0003058910369873

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025200843811035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0036098957061768

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0003058910369873

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00049281120300293

select count(*) as cnt from item_master where   code = '175' or  (name = 'HOO' ) and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from item_master where   code = '175' or  (name = 'HOO' ) and office_id= '1' 
 Execution Time:0.00039482116699219

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('175', 'HOO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0030179023742676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052905082702637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052905082702637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018882751464844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052905082702637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018882751464844

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052905082702637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018882751464844

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from item_master where   code = '176' or  (name = 'VOGUE' ) and office_id= '1' 
 Execution Time:0.00080180168151855

select count(*) as cnt from item_master where   code = '176' or  (name = 'VOGUE' ) and office_id= '1' 
 Execution Time:0.00080180168151855

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('176', 'VOGUE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00508713722229

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002741813659668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002741813659668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002741813659668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024890899658203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from item_master where   code = '177' or  (name = 'GOTTI' ) and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from item_master where   code = '177' or  (name = 'GOTTI' ) and office_id= '1' 
 Execution Time:0.00034809112548828

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('177', 'GOTTI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0069291591644287

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002439022064209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002439022064209

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002439022064209

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from item_master where   code = '178' or  (name = 'CARRERA' ) and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from item_master where   code = '178' or  (name = 'CARRERA' ) and office_id= '1' 
 Execution Time:0.00038313865661621

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('178', 'CARRERA', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0022258758544922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040793418884277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from item_master where   code = '179' or  (name = 'MISTY' ) and office_id= '1' 
 Execution Time:0.00052618980407715

select count(*) as cnt from item_master where   code = '179' or  (name = 'MISTY' ) and office_id= '1' 
 Execution Time:0.00052618980407715

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('179', 'MISTY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0022721290588379

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002288818359375

select count(*) as cnt from item_master where   code = '180' or  (name = 'NIKE' ) and office_id= '1' 
 Execution Time:0.00047683715820312

select count(*) as cnt from item_master where   code = '180' or  (name = 'NIKE' ) and office_id= '1' 
 Execution Time:0.00047683715820312

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('180', 'NIKE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.007422924041748

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from item_master where   code = '180' or  (name = 'MAGIC BOY' ) and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from item_master where   code = '180' or  (name = 'MAGIC BOY' ) and office_id= '1' 
 Execution Time:0.0006251335144043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00056290626525879

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00056290626525879

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00029897689819336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00056290626525879

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from item_master where   code = '181' or  (name = 'MAGIC BOY' ) and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from item_master where   code = '181' or  (name = 'MAGIC BOY' ) and office_id= '1' 
 Execution Time:0.00063896179199219

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('181', 'MAGIC BOY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025160312652588

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046396255493164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046396255493164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015783309936523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046396255493164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015783309936523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046396255493164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015783309936523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from item_master where   code = '182' or  (name = 'FASHION' ) and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from item_master where   code = '182' or  (name = 'FASHION' ) and office_id= '1' 
 Execution Time:0.00041794776916504

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('182', 'FASHION', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048720836639404

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001220703125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001220703125

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from item_master where   code = '183' or  (name = 'JUNGLE BOOK' ) and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from item_master where   code = '183' or  (name = 'JUNGLE BOOK' ) and office_id= '1' 
 Execution Time:0.00041103363037109

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('183', 'JUNGLE BOOK', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.011577844619751

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028491020202637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002288818359375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002288818359375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028491020202637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002288818359375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '184' or  (name = 'BABY' ) and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from item_master where   code = '184' or  (name = 'BABY' ) and office_id= '1' 
 Execution Time:0.00043106079101562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('184', 'BABY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0021917819976807

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0006248950958252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0006248950958252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021696090698242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0006248950958252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021696090698242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0006248950958252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021696090698242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from item_master where   code = '185' or  (name = 'CHASE' ) and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from item_master where   code = '185' or  (name = 'CHASE' ) and office_id= '1' 
 Execution Time:0.00046086311340332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('185', 'CHASE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0061700344085693

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from item_master where   code = '186' or  (name = 'ROAR' ) and office_id= '1' 
 Execution Time:0.00044608116149902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014901161193848

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047779083251953

select count(*) as cnt from item_master where   code = '186' or  (name = 'ROAR' ) and office_id= '1' 
 Execution Time:0.00048089027404785

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001528263092041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001528263092041

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001528263092041

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt from item_master where   code = '186' or  (name = 'ACTIVE TIME' ) and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from item_master where   code = '186' or  (name = 'ACTIVE TIME' ) and office_id= '1' 
 Execution Time:0.00059294700622559

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('186', 'ACTIVE TIME', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023140907287598

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057220458984375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057220458984375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057220458984375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020980834960938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057220458984375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from item_master where   code = '187' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00055480003356934

select count(*) as cnt from frame_classification where type='1' and  code = '1' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from frame_classification where type='1' and  code = '1' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00051188468933105

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '1', 'NONE', '', '1', '1', '1') 
 Execution Time:0.002608060836792

select count(*) as cnt from frame_classification where type='2' and  code = '1' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from frame_classification where type='2' and  code = '1' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00036001205444336

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '1', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0045671463012695

select count(*) as cnt from frame_classification where type='4' and  code = '1' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00055885314941406

select count(*) as cnt from frame_classification where type='4' and  code = '1' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00055885314941406

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('4', '1', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0023939609527588

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from supplier where   code = '01' or  (name = 'OLD_STOCK_SUPPLIER'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00028109550476074

select count(*) as cnt from supplier where   code = '01' or  (name = 'OLD_STOCK_SUPPLIER'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00028109550476074

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('01', 'OLD_STOCK_SUPPLIER', '1', '1234567898', '', '', '', '', '', '', '1', '', '2', '1', '1', '1') 
 Execution Time:0.008120059967041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029993057250977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023388862609863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023388862609863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047206878662109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023388862609863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from item_master where item_id='1'  and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from item_master where    item_id!='1' and    code = '1'  and   name = 'D AND K PLUS'   and office_id= '1' 
 Execution Time:0.00050497055053711

UPDATE `item_master` SET `code` = '1', `name` = 'D AND K PLUS', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '1' 
 Execution Time:0.0047168731689453

select count(*) as cnt from item_master where    item_id!='1' and    code = '1'  and   name = 'D AND K PLUS'   and office_id= '1' 
 Execution Time:0.00042510032653809

UPDATE `item_master` SET `code` = '1', `name` = 'D AND K PLUS', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '1' 
 Execution Time:0.00026202201843262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051498413085938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00083708763122559

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051498413085938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00083708763122559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019693374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051498413085938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00083708763122559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019693374633789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035190582275391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051498413085938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00083708763122559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019693374633789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0024890899658203

select count(*) as cnt from item_master where item_id='39'  and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from item_master where    item_id!='39' and    code = '39'  and   name = 'DANDK ULTRATHIN'   and office_id= '1' 
 Execution Time:0.00058794021606445

UPDATE `item_master` SET `code` = '39', `name` = 'DANDK ULTRATHIN', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '39' 
 Execution Time:0.0039689540863037

select count(*) as cnt from item_master where item_id='109'  and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from item_master where    item_id!='109' and    code = '109'  and   name = 'DANDK DELUX'   and office_id= '1' 
 Execution Time:0.00049495697021484

UPDATE `item_master` SET `code` = '109', `name` = 'DANDK DELUX', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '109' 
 Execution Time:0.0022709369659424

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from item_master where item_id='168'  and office_id= '1' 
 Execution Time:0.0010159015655518

select count(*) as cnt from item_master where    item_id!='168' and    code = '168'  and   name = 'PITTANDMITT'   and office_id= '1' 
 Execution Time:0.00057005882263184

UPDATE `item_master` SET `code` = '168', `name` = 'PITTANDMITT', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '', `sgst` = '', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '168' 
 Execution Time:0.0048768520355225

select count(*) as cnt from item_master where item_id='1'  and office_id= '1' 
 Execution Time:0.00032520294189453

select count(*) as cnt from item_master where    item_id!='1' and    code = '1'  and   name = 'DANDK PLUS'   and office_id= '1' 
 Execution Time:0.00038003921508789

UPDATE `item_master` SET `code` = '1', `name` = 'DANDK PLUS', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '1' 
 Execution Time:0.0061712265014648

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054383277893066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048017501831055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054383277893066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048017501831055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054383277893066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048017501831055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036096572875977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054383277893066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048017501831055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00050711631774902


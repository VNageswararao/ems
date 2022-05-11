select * from office where  office_id= '1' 
 Execution Time:0.0023059844970703

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00069808959960938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.002997875213623

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00069808959960938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.002997875213623

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00067305564880371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00069808959960938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.002997875213623

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00067305564880371

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0018861293792725

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00069808959960938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.002997875213623

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00067305564880371

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0018510818481445

select count(*) as cnt from company where   code = '1' and name = 'KANHANGAD EYE FOUNDATION' and office_id= '1' 
 Execution Time:0.00052404403686523

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'KANHANGAD EYE FOUNDATION', '', '1', '1', '1') 
 Execution Time:0.0097818374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046110153198242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035595893859863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046110153198242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035595893859863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046110153198242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035595893859863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046110153198242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035595893859863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031590461730957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053811073303223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043988227844238

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053811073303223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043988227844238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053811073303223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043988227844238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053811073303223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043988227844238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from item_master where   code = '1' or  (name = 'VOGUE' ) and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from item_master where   code = '1' or  (name = 'VOGUE' ) and office_id= '1' 
 Execution Time:0.00041294097900391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'VOGUE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0018150806427002

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040221214294434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025105476379395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025105476379395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040221214294434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025105476379395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018978118896484

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019192695617676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019192695617676

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019192695617676

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from item_master where   code = '2' or  (name = 'CARRERA' ) and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from item_master where   code = '2' or  (name = 'CARRERA' ) and office_id= '1' 
 Execution Time:0.00027894973754883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', 'CARRERA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047838687896729

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040984153747559

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065803527832031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056290626525879

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065803527832031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056290626525879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028181076049805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065803527832031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056290626525879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028181076049805

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028800964355469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00065803527832031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056290626525879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028181076049805

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from item_master where   code = '3' or  (name = 'RAYBAN' ) and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from item_master where   code = '3' or  (name = 'RAYBAN' ) and office_id= '1' 
 Execution Time:0.0004889965057373

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', 'RAYBAN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0030629634857178

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00048518180847168

select count(*) as cnt from item_master where   code = '4' or  (name = 'AZZARO' ) and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from item_master where   code = '4' or  (name = 'AZZARO' ) and office_id= '1' 
 Execution Time:0.00042414665222168

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('4', 'AZZARO', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0083279609680176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016880035400391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016880035400391

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016880035400391

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from item_master where   code = '5' or  (name = 'OAKLEY' ) and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from item_master where   code = '5' or  (name = 'OAKLEY' ) and office_id= '1' 
 Execution Time:0.00052189826965332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('5', 'OAKLEY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0051238536834717

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034117698669434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034117698669434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034117698669434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025010108947754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034117698669434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from item_master where   code = '6' or  (name = 'GOTTI' ) and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from item_master where   code = '6' or  (name = 'GOTTI' ) and office_id= '1' 
 Execution Time:0.0003509521484375

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('6', 'GOTTI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0058929920196533

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021696090698242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020098686218262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from item_master where   code = '7' or  (name = 'CHARMANT' ) and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from item_master where   code = '7' or  (name = 'CHARMANT' ) and office_id= '1' 
 Execution Time:0.00038409233093262

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('7', 'CHARMANT', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.005075216293335

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from item_master where   code = '7' or  (name = 'WALNUT' ) and office_id= '1' 
 Execution Time:0.00031709671020508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032281875610352

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032281875610352

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032281875610352

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020790100097656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041484832763672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032281875610352

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041079521179199

select count(*) as cnt from item_master where   code = '8' or  (name = 'WALNUT' ) and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from item_master where   code = '8' or  (name = 'WALNUT' ) and office_id= '1' 
 Execution Time:0.0004279613494873

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('8', 'WALNUT', '1', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0041790008544922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026917457580566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026917457580566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026917457580566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023984909057617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056910514831543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028896331787109

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002601146697998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028896331787109

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from item_master where   code = '9' or  (name = 'MOLESKINE' ) and office_id= '1' 
 Execution Time:0.00038480758666992

select count(*) as cnt from item_master where   code = '9' or  (name = 'MOLESKINE' ) and office_id= '1' 
 Execution Time:0.00038480758666992

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('9', 'MOLESKINE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0058829784393311

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022578239440918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022578239440918

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019192695617676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022578239440918

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from item_master where   code = '10' or  (name = 'OROMA' ) and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '10' or  (name = 'OROMA' ) and office_id= '1' 
 Execution Time:0.00033998489379883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('10', 'OROMA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026330947875977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027012825012207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027012825012207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027012825012207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017976760864258

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027012825012207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017976760864258

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from item_master where   code = '11' or  (name = 'RE-EYE' ) and office_id= '1' 
 Execution Time:0.00047111511230469

select count(*) as cnt from item_master where   code = '11' or  (name = 'RE-EYE' ) and office_id= '1' 
 Execution Time:0.00047111511230469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('11', 'RE-EYE', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.004688024520874

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023007392883301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004432201385498

select count(*) as cnt from item_master where   code = '12' or  (name = 'SUN FIRE' ) and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from item_master where   code = '12' or  (name = 'SUN FIRE' ) and office_id= '1' 
 Execution Time:0.00032901763916016

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12', 'SUN FIRE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0022599697113037

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031614303588867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from item_master where   code = '13' or  (name = 'FIRST STREET' ) and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from item_master where   code = '13' or  (name = 'FIRST STREET' ) and office_id= '1' 
 Execution Time:0.00047802925109863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('13', 'FIRST STREET', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0077550411224365

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
 Execution Time:0.00020599365234375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039291381835938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020599365234375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039291381835938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020599365234375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from item_master where   code = '14' or  (name = 'SMALLISION' ) and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from item_master where   code = '14' or  (name = 'SMALLISION' ) and office_id= '1' 
 Execution Time:0.00049209594726562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('14', 'SMALLISION', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056631565093994

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.002025842666626

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.002025842666626

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.002025842666626

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.002025842666626

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030517578125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038409233093262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from item_master where   code = '15' or  (name = 'IMPTUS EYEWEAR' ) and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from item_master where   code = '15' or  (name = 'IMPTUS EYEWEAR' ) and office_id= '1' 
 Execution Time:0.00051999092102051

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('15', 'IMPTUS EYEWEAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.004669189453125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017905235290527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017905235290527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017905235290527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017213821411133

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021481513977051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021481513977051

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036501884460449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021481513977051

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from item_master where   code = '16' or  (name = 'MORANGIE' ) and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from item_master where   code = '16' or  (name = 'MORANGIE' ) and office_id= '1' 
 Execution Time:0.00031805038452148

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('16', 'MORANGIE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019159317016602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043487548828125

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043487548828125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043487548828125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043487548828125

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022101402282715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from item_master where   code = '17' or  (name = 'COOPER PLUS' ) and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from item_master where   code = '17' or  (name = 'COOPER PLUS' ) and office_id= '1' 
 Execution Time:0.0003669261932373

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('17', 'COOPER PLUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0079090595245361

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041079521179199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041079521179199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041079521179199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041079521179199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from item_master where   code = '18' or  (name = 'TOM HARDY' ) and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from item_master where   code = '18' or  (name = 'TOM HARDY' ) and office_id= '1' 
 Execution Time:0.00037789344787598

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('18', 'TOM HARDY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049629211425781

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049090385437012

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026607513427734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from item_master where   code = '19' or  (name = 'MARABOOS' ) and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from item_master where   code = '19' or  (name = 'MARABOOS' ) and office_id= '1' 
 Execution Time:0.00040102005004883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('19', 'MARABOOS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0068380832672119

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032615661621094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from item_master where   code = '20' or  (name = 'MAGIC BOSS' ) and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from item_master where   code = '20' or  (name = 'MAGIC BOSS' ) and office_id= '1' 
 Execution Time:0.00036501884460449

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('20', 'MAGIC BOSS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0063040256500244

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024318695068359

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024318695068359

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024318695068359

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024318695068359

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from item_master where   code = '21' or  (name = 'SUNFIRE' ) and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from item_master where   code = '21' or  (name = 'SUNFIRE' ) and office_id= '1' 
 Execution Time:0.00045490264892578

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('21', 'SUNFIRE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0021400451660156

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from item_master where   code = '22' or  (name = 'OXSIVER' ) and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from item_master where   code = '22' or  (name = 'OXSIVER' ) and office_id= '1' 
 Execution Time:0.00035405158996582

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('22', 'OXSIVER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.011270999908447

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041317939758301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041317939758301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041317939758301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022387504577637

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021100044250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041317939758301

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022387504577637

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from item_master where   code = '23' or  (name = 'VEVYL' ) and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '23' or  (name = 'VEVYL' ) and office_id= '1' 
 Execution Time:0.00033998489379883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('23', 'VEVYL', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0043530464172363

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from item_master where   code = '23' or  (name = 'VEVYL' ) and office_id= '1' 
 Execution Time:0.00036811828613281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039505958557129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from item_master where   code = '24' or  (name = 'AXIS' ) and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from item_master where   code = '24' or  (name = 'AXIS' ) and office_id= '1' 
 Execution Time:0.00040698051452637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('24', 'AXIS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049130916595459

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017976760864258

select count(*) as cnt from item_master where   code = '25' or  (name = 'CHOY' ) and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from item_master where   code = '25' or  (name = 'CHOY' ) and office_id= '1' 
 Execution Time:0.00037598609924316

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('25', 'CHOY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0045201778411865

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041413307189941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028181076049805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from item_master where   code = '26' or  (name = 'VOICE' ) and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from item_master where   code = '26' or  (name = 'VOICE' ) and office_id= '1' 
 Execution Time:0.00045394897460938

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('26', 'VOICE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052270889282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022411346435547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022411346435547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022315979003906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038290023803711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022411346435547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from item_master where   code = '27' or  (name = 'CENTER CLUB' ) and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from item_master where   code = '27' or  (name = 'CENTER CLUB' ) and office_id= '1' 
 Execution Time:0.00040888786315918

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('27', 'CENTER CLUB', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0057048797607422

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032806396484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032806396484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032806396484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032806396484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from item_master where   code = '28' or  (name = 'ANTVSOE' ) and office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from item_master where   code = '28' or  (name = 'ANTVSOE' ) and office_id= '1' 
 Execution Time:0.00039982795715332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('28', 'ANTVSOE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046319961547852

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021719932556152

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021719932556152

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015878677368164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021719932556152

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from item_master where   code = '29' or  (name = 'EXCELLENT' ) and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from item_master where   code = '29' or  (name = 'EXCELLENT' ) and office_id= '1' 
 Execution Time:0.00043296813964844

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('29', 'EXCELLENT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0081682205200195

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0046839714050293

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016429424285889

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0046839714050293

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016429424285889

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005190372467041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0046839714050293

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016429424285889

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005190372467041

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026297569274902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0046839714050293

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016429424285889

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005190372467041

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '30' or  (name = 'YOURNURE' ) and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from item_master where   code = '30' or  (name = 'YOURNURE' ) and office_id= '1' 
 Execution Time:0.00040197372436523

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('30', 'YOURNURE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.004457950592041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00044107437133789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from item_master where   code = '31' or  (name = 'EYEQUE' ) and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from item_master where   code = '31' or  (name = 'EYEQUE' ) and office_id= '1' 
 Execution Time:0.00042605400085449

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('31', 'EYEQUE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046238899230957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028085708618164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028085708618164

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016999244689941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029587745666504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028085708618164

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from item_master where   code = '32' or  (name = 'AURA' ) and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from item_master where   code = '32' or  (name = 'AURA' ) and office_id= '1' 
 Execution Time:0.00047588348388672

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('32', 'AURA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0029048919677734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034904479980469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034904479980469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034904479980469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034904479980469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0015690326690674

select count(*) as cnt from item_master where   code = '33' or  (name = 'RESEARCH' ) and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from item_master where   code = '33' or  (name = 'RESEARCH' ) and office_id= '1' 
 Execution Time:0.00049495697021484

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('33', 'RESEARCH', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0018601417541504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037002563476562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from item_master where   code = '34' or  (name = 'STRUTERN' ) and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from item_master where   code = '34' or  (name = 'STRUTERN' ) and office_id= '1' 
 Execution Time:0.00035691261291504

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('34', 'STRUTERN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0080180168151855

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051116943359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051116943359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051116943359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051116943359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from item_master where   code = '35' or  (name = 'FREEDOM' ) and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from item_master where   code = '35' or  (name = 'FREEDOM' ) and office_id= '1' 
 Execution Time:0.0003359317779541

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('35', 'FREEDOM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047099590301514

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002281665802002

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from item_master where   code = '36' or  (name = 'KNIGHT HORSE' ) and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from item_master where   code = '36' or  (name = 'KNIGHT HORSE' ) and office_id= '1' 
 Execution Time:0.00042986869812012

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('36', 'KNIGHT HORSE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.007896900177002

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028610229492188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033402442932129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028610229492188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016212463378906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016212463378906

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00081491470336914

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016212463378906

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00081491470336914

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from item_master where   code = '37' or  (name = 'SMALL -I' ) and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from item_master where   code = '37' or  (name = 'SMALL -I' ) and office_id= '1' 
 Execution Time:0.00051188468933105

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('37', 'SMALL -I', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023231506347656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from item_master where   code = '38' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from item_master where   code = '38' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.00042295455932617

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('38', 'LAMY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0079448223114014

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049209594726562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049209594726562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049209594726562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012683868408203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049209594726562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from item_master where   code = '39' or  (name = 'SPECSI KIDS' ) and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from item_master where   code = '39' or  (name = 'SPECSI KIDS' ) and office_id= '1' 
 Execution Time:0.00035810470581055

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('39', 'SPECSI KIDS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018310546875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021505355834961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018310546875

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from item_master where   code = '40' or  (name = 'EIBACH' ) and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from item_master where   code = '40' or  (name = 'EIBACH' ) and office_id= '1' 
 Execution Time:0.00040102005004883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('40', 'EIBACH', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0024669170379639

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from item_master where   code = '41' or  (name = 'GOLDEN' ) and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from item_master where   code = '41' or  (name = 'GOLDEN' ) and office_id= '1' 
 Execution Time:0.00049304962158203

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('41', 'GOLDEN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0032460689544678

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from item_master where   code = '42' or  (name = 'VENUS' ) and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from item_master where   code = '42' or  (name = 'VENUS' ) and office_id= '1' 
 Execution Time:0.00045895576477051

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('42', 'VENUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.01167106628418

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082707405090332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0029671192169189

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082707405090332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0029671192169189

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0014159679412842

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082707405090332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0029671192169189

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0014159679412842

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082707405090332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0029671192169189

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0014159679412842

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from item_master where   code = '43' or  (name = 'UIM' ) and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from item_master where   code = '43' or  (name = 'UIM' ) and office_id= '1' 
 Execution Time:0.00037217140197754

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('43', 'UIM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0069928169250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031399726867676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017976760864258

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from item_master where   code = '44' or  (name = 'SPARKLE' ) and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from item_master where   code = '44' or  (name = 'SPARKLE' ) and office_id= '1' 
 Execution Time:0.00030899047851562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('44', 'SPARKLE', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0051159858703613

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029397010803223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018882751464844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029397010803223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018882751464844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029397010803223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018882751464844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012707710266113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029397010803223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018882751464844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from item_master where   code = '45' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00041818618774414

select count(*) as cnt from item_master where   code = '45' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00041818618774414

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('45', 'SPECSI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027310848236084

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015902519226074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from item_master where   code = '46' or  (name = 'SPECSI' ) and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from item_master where   code = '46' or  (name = 'ADIDAS' ) and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from item_master where   code = '46' or  (name = 'ADIDAS' ) and office_id= '1' 
 Execution Time:0.00041604042053223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('46', 'ADIDAS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050139427185059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029206275939941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027799606323242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027799606323242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027799606323242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from item_master where   code = '47' or  (name = 'JOHNNY MILLER' ) and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from item_master where   code = '47' or  (name = 'JOHNNY MILLER' ) and office_id= '1' 
 Execution Time:0.00029706954956055

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('47', 'JOHNNY MILLER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050661563873291

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021791458129883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038981437683105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from item_master where   code = '48' or  (name = 'CAADY' ) and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from item_master where   code = '48' or  (name = 'CAADY' ) and office_id= '1' 
 Execution Time:0.00038290023803711

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('48', 'CAADY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027420520782471

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036120414733887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045990943908691

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036120414733887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045990943908691

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036120414733887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045990943908691

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028586387634277

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036120414733887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045990943908691

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from item_master where   code = '49' or  (name = 'RECORDS' ) and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from item_master where   code = '49' or  (name = 'RECORDS' ) and office_id= '1' 
 Execution Time:0.00031495094299316

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('49', 'RECORDS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0045340061187744

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026512145996094

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from item_master where   code = '50' or  (name = 'BLSY' ) and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '50' or  (name = 'BLSY' ) and office_id= '1' 
 Execution Time:0.00031399726867676

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('50', 'BLSY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002795934677124

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053691864013672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053691864013672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053691864013672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024509429931641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021004676818848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053691864013672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024509429931641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from item_master where   code = '51' or  (name = 'CRAFT' ) and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from item_master where   code = '51' or  (name = 'CRAFT' ) and office_id= '1' 
 Execution Time:0.00048589706420898

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('51', 'CRAFT', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0021119117736816

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014281272888184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from item_master where   code = '51' or  (name = 'KORE' ) and office_id= '1' 
 Execution Time:0.00036811828613281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from item_master where   code = '52' or  (name = 'KORE' ) and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from item_master where   code = '52' or  (name = 'KORE' ) and office_id= '1' 
 Execution Time:0.00039505958557129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('52', 'KORE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002457857131958

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025510787963867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025510787963867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025510787963867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020885467529297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from item_master where   code = '53' or  (name = 'PAGE 4' ) and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from item_master where   code = '53' or  (name = 'PAGE 4' ) and office_id= '1' 
 Execution Time:0.00035905838012695

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('53', 'PAGE 4', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047910213470459

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025820732116699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025820732116699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025820732116699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021100044250488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from item_master where   code = '54' or  (name = 'CORAL REEF' ) and office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from item_master where   code = '54' or  (name = 'CORAL REEF' ) and office_id= '1' 
 Execution Time:0.00041913986206055

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('54', 'CORAL REEF', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0057070255279541

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043392181396484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043392181396484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016880035400391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043392181396484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016880035400391

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043392181396484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016880035400391

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019407272338867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019407272338867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019407272338867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from item_master where   code = '55' or  (name = 'K &amp; D' ) and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from item_master where   code = '55' or  (name = 'K &amp; D' ) and office_id= '1' 
 Execution Time:0.00043201446533203

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('55', 'K &amp; D', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0050640106201172

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from item_master where   code = '56' or  (name = 'ROAR' ) and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from item_master where   code = '56' or  (name = 'ROAR' ) and office_id= '1' 
 Execution Time:0.00033211708068848

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('56', 'ROAR', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0050320625305176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022506713867188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from item_master where   code = '57' or  (name = 'CALABRIA' ) and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from item_master where   code = '57' or  (name = 'CALABRIA' ) and office_id= '1' 
 Execution Time:0.00052499771118164

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('57', 'CALABRIA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0062520503997803

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035405158996582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020503997802734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036311149597168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016093254089355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from item_master where   code = '58' or  (name = 'EYE MUSIC' ) and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from item_master where   code = '58' or  (name = 'EYE MUSIC' ) and office_id= '1' 
 Execution Time:0.0004580020904541

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('58', 'EYE MUSIC', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023112297058105

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023221969604492

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023221969604492

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023221969604492

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from item_master where   code = '59' or  (name = 'CANNA' ) and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from item_master where   code = '59' or  (name = 'CANNA' ) and office_id= '1' 
 Execution Time:0.00042200088500977

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('59', 'CANNA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025489330291748

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from item_master where   code = '60' or  (name = 'DESERVE' ) and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from item_master where   code = '60' or  (name = 'DESERVE' ) and office_id= '1' 
 Execution Time:0.0003960132598877

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('60', 'DESERVE', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0046169757843018

select count(*) as cnt from item_master where item_id='60'  and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from item_master where    item_id!='60' and    code = '60'  and   name = 'DESERVE'   and office_id= '1' 
 Execution Time:0.00051999092102051

UPDATE `item_master` SET `code` = '60', `name` = 'DESERVE', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '', `sgst` = '', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '60' 
 Execution Time:0.00032401084899902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013518333435059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013518333435059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013518333435059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from item_master where   code = '61' or  (name = 'NEWSMART' ) and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from item_master where   code = '61' or  (name = 'NEWSMART' ) and office_id= '1' 
 Execution Time:0.00031805038452148

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('61', 'NEWSMART', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0053219795227051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034809112548828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034809112548828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014591217041016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034809112548828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014591217041016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034809112548828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014591217041016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from item_master where   code = '62' or  (name = 'PITTMITT FUSION' ) and office_id= '1' 
 Execution Time:0.00027823448181152

select count(*) as cnt from item_master where   code = '62' or  (name = 'PITTMITT FUSION' ) and office_id= '1' 
 Execution Time:0.00027823448181152

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('62', 'PITTMITT FUSION', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0054168701171875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028014183044434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028014183044434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019621849060059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028014183044434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019621849060059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028014183044434

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019621849060059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from item_master where   code = '63' or  (name = 'PITTMITT FLEXIBLE' ) and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from item_master where   code = '63' or  (name = 'PITTMITT FLEXIBLE' ) and office_id= '1' 
 Execution Time:0.00034594535827637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('63', 'PITTMITT FLEXIBLE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0034599304199219

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017881393432617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017881393432617

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017881393432617

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012016296386719

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00069093704223633

select count(*) as cnt from item_master where   code = '64' or  (name = 'PACEX' ) and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from item_master where   code = '64' or  (name = 'PACEX' ) and office_id= '1' 
 Execution Time:0.00039887428283691

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('64', 'PACEX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.017803907394409

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from item_master where   code = '65' or  (name = 'PITTMITT ECOFRIENDLY' ) and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from item_master where   code = '65' or  (name = 'PITTMITT ECOFRIENDLY' ) and office_id= '1' 
 Execution Time:0.00049209594726562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('65', 'PITTMITT ECOFRIENDLY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026819705963135

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023794174194336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023794174194336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017786026000977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023794174194336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from item_master where   code = '66' or  (name = 'PITTMITT AIRY' ) and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from item_master where   code = '66' or  (name = 'PITTMITT AIRY' ) and office_id= '1' 
 Execution Time:0.00038504600524902

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('66', 'PITTMITT AIRY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0091512203216553

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036883354187012

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019502639770508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019502639770508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038385391235352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019502639770508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015902519226074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056004524230957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035691261291504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056004524230957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056004524230957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056004524230957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017499923706055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043082237243652

select count(*) as cnt from item_master where   code = '67' or  (name = 'TEEN PLUS' ) and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from item_master where   code = '67' or  (name = 'TEEN PLUS' ) and office_id= '1' 
 Execution Time:0.00040483474731445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('67', 'TEEN PLUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0093159675598145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '68' or  (name = 'PITTMITT TIKFIT' ) and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from item_master where   code = '68' or  (name = 'PITTMITT TIKFIT' ) and office_id= '1' 
 Execution Time:0.00034213066101074

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('68', 'PITTMITT TIKFIT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025050640106201

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015997886657715

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037980079650879

select count(*) as cnt from item_master where   code = '69' or  (name = 'ROTINO' ) and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from item_master where   code = '69' or  (name = 'ROTINO' ) and office_id= '1' 
 Execution Time:0.00029611587524414

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('69', 'ROTINO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0021378993988037

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032305717468262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020217895507812

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from item_master where   code = '70' or  (name = 'FLOWER' ) and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '70' or  (name = 'FLOWER' ) and office_id= '1' 
 Execution Time:0.00031399726867676

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('70', 'FLOWER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0055181980133057

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019097328186035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from item_master where   code = '71' or  (name = 'MEOW' ) and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from item_master where   code = '71' or  (name = 'MEOW' ) and office_id= '1' 
 Execution Time:0.00037312507629395

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('71', 'MEOW', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0054619312286377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00022983551025391

select count(*) as cnt from item_master where   code = '72' or  (name = 'PITTMITT-BLUEBLOCK' ) and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from item_master where   code = '72' or  (name = 'PITTMITT-BLUEBLOCK' ) and office_id= '1' 
 Execution Time:0.00040388107299805

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('72', 'PITTMITT-BLUEBLOCK', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0031530857086182

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034594535827637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025010108947754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.001492977142334

select count(*) as cnt from item_master where   code = '73' or  (name = 'JACKBABY' ) and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from item_master where   code = '73' or  (name = 'JACKBABY' ) and office_id= '1' 
 Execution Time:0.00036787986755371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('73', 'JACKBABY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0067920684814453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003352165222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003352165222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003352165222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00071406364440918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003352165222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from item_master where   code = '74' or  (name = 'SMALL I' ) and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from item_master where   code = '74' or  (name = 'SMALL I' ) and office_id= '1' 
 Execution Time:0.00043296813964844

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('74', 'SMALL I', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0037600994110107

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014209747314453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from item_master where   code = '75' or  (name = 'EYE 5' ) and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from item_master where   code = '75' or  (name = 'EYE 5' ) and office_id= '1' 
 Execution Time:0.00038003921508789

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('75', 'EYE 5', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0070469379425049

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019311904907227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019311904907227

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019311904907227

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from item_master where   code = '76' or  (name = 'GUY LAROCHE' ) and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from item_master where   code = '76' or  (name = 'GUY LAROCHE' ) and office_id= '1' 
 Execution Time:0.00039100646972656

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('76', 'GUY LAROCHE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019748210906982

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0015349388122559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016701221466064

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0015349388122559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016701221466064

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00081515312194824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0015349388122559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016701221466064

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00081515312194824

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0036790370941162

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0015349388122559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016701221466064

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00081515312194824

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0036790370941162

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from item_master where   code = '77' or  (name = 'SPARTAN' ) and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from item_master where   code = '77' or  (name = 'SPARTAN' ) and office_id= '1' 
 Execution Time:0.00037384033203125

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('77', 'SPARTAN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023870468139648

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077199935913086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045609474182129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077199935913086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045609474182129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077199935913086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045609474182129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025582313537598

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077199935913086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045609474182129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from item_master where   code = '78' or  (name = 'SILLOTTI' ) and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from item_master where   code = '78' or  (name = 'SILLOTTI' ) and office_id= '1' 
 Execution Time:0.00053191184997559

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('78', 'SILLOTTI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0081698894500732

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002899169921875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002899169921875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021219253540039

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002899169921875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from item_master where   code = '79' or  (name = 'BLUE CROSS' ) and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from item_master where   code = '79' or  (name = 'BLUE CROSS' ) and office_id= '1' 
 Execution Time:0.00052905082702637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('79', 'BLUE CROSS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005483865737915

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from item_master where   code = '80' or  (name = 'MAGIC SPOT' ) and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from item_master where   code = '80' or  (name = 'MAGIC SPOT' ) and office_id= '1' 
 Execution Time:0.0004580020904541

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('80', 'MAGIC SPOT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047249794006348

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023412704467773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023412704467773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035715103149414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023412704467773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from item_master where   code = '81' or  (name = 'CORA' ) and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from item_master where   code = '81' or  (name = 'CORA' ) and office_id= '1' 
 Execution Time:0.00033116340637207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('81', 'CORA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020599365234375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043702125549316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029206275939941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029206275939941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025105476379395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029206275939941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040984153747559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018906593322754

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select count(*) as cnt from item_master where   code = '82' or  (name = 'CLARISH' ) and office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from item_master where   code = '82' or  (name = 'CLARISH' ) and office_id= '1' 
 Execution Time:0.00047183036804199

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('82', 'CLARISH', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0044717788696289

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029397010803223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0028648376464844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0030639171600342

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0028648376464844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0030639171600342

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0027937889099121

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0028648376464844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0030639171600342

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0027937889099121

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0038268566131592

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0028648376464844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0030639171600342

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0027937889099121

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0038268566131592

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from item_master where   code = '83' or  (name = 'SCORPLUS' ) and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from item_master where   code = '83' or  (name = 'SCORPLUS' ) and office_id= '1' 
 Execution Time:0.00038313865661621

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('83', 'SCORPLUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052762031555176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027203559875488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from item_master where   code = '84' or  (name = 'POLES' ) and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from item_master where   code = '84' or  (name = 'POLES' ) and office_id= '1' 
 Execution Time:0.00036096572875977

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('84', 'POLES', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0068027973175049

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0068027973175049

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005488395690918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0068027973175049

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005488395690918

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0020389556884766

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0068027973175049

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005488395690918

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from item_master where   code = '85' or  (name = 'MILY' ) and office_id= '1' 
 Execution Time:0.00045323371887207

select count(*) as cnt from item_master where   code = '85' or  (name = 'MILY' ) and office_id= '1' 
 Execution Time:0.00045323371887207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('85', 'MILY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049059391021729

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027704238891602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027704238891602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027704238891602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031113624572754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031113624572754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031113624572754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031113624572754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '86' or  (name = 'CARAMEL' ) and office_id= '1' 
 Execution Time:0.00042915344238281

select count(*) as cnt from item_master where   code = '86' or  (name = 'CARAMEL' ) and office_id= '1' 
 Execution Time:0.00042915344238281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('86', 'CARAMEL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023279190063477

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052499771118164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045299530029297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052499771118164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045299530029297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052499771118164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045299530029297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052499771118164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045299530029297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026893615722656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from item_master where   code = '87' or  (name = 'TOD-GAR' ) and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from item_master where   code = '87' or  (name = 'TOD-GAR' ) and office_id= '1' 
 Execution Time:0.00035214424133301

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('87', 'TOD-GAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0057830810546875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036907196044922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002589225769043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002589225769043

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002589225769043

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00313401222229

select count(*) as cnt from item_master where   code = '88' or  (name = 'HIGH-BELIVE' ) and office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from item_master where   code = '88' or  (name = 'HIGH-BELIVE' ) and office_id= '1' 
 Execution Time:0.0009300708770752

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('88', 'HIGH-BELIVE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.012418031692505

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023007392883301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023007392883301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031781196594238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023007392883301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from item_master where   code = '89' or  (name = 'EXCETM' ) and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from item_master where   code = '89' or  (name = 'EXCETM' ) and office_id= '1' 
 Execution Time:0.00044798851013184

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('89', 'EXCETM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0054199695587158

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022983551025391

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023889541625977

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from item_master where   code = '90' or  (name = 'BENEDICT' ) and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from item_master where   code = '90' or  (name = 'BENEDICT' ) and office_id= '1' 
 Execution Time:0.00058698654174805

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('90', 'BENEDICT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0055179595947266

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022506713867188

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021100044250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014114379882812

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025510787963867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025510787963867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00037598609924316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025510787963867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00037598609924316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025510787963867

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00037598609924316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from item_master where   code = '91' or  (name = 'DGLENS' ) and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from item_master where   code = '91' or  (name = 'DGLENS' ) and office_id= '1' 
 Execution Time:0.00040602684020996

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('91', 'DGLENS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046689510345459

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019621849060059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019621849060059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032305717468262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019621849060059

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from item_master where   code = '92' or  (name = 'PANACHE' ) and office_id= '1' 
 Execution Time:0.00053620338439941

select count(*) as cnt from item_master where   code = '92' or  (name = 'PANACHE' ) and office_id= '1' 
 Execution Time:0.00053620338439941

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('92', 'PANACHE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002277135848999

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011131763458252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013470649719238

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011131763458252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013470649719238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027012825012207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011131763458252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013470649719238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027012825012207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023579597473145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0011131763458252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013470649719238

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027012825012207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from item_master where   code = '93' or  (name = 'CIVILAS' ) and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from item_master where   code = '93' or  (name = 'CIVILAS' ) and office_id= '1' 
 Execution Time:0.00031304359436035

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('93', 'CIVILAS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048830509185791

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024700164794922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024700164794922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024700164794922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from item_master where   code = '94' or  (name = 'TIDE CHUG' ) and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '94' or  (name = 'TIDE CHUG' ) and office_id= '1' 
 Execution Time:0.00031399726867676

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('94', 'TIDE CHUG', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0060069561004639

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from item_master where   code = '95' or  (name = 'SCENIC' ) and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from item_master where   code = '95' or  (name = 'SCENIC' ) and office_id= '1' 
 Execution Time:0.00053501129150391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('95', 'SCENIC', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025150775909424

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019192695617676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019192695617676

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019192695617676

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from item_master where   code = '96' or  (name = 'DEEL' ) and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from item_master where   code = '96' or  (name = 'DEEL' ) and office_id= '1' 
 Execution Time:0.00043606758117676

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('96', 'DEEL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0022711753845215

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select count(*) as cnt from item_master where   code = '97' or  (name = 'ONE HERO' ) and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from item_master where   code = '97' or  (name = 'ONE HERO' ) and office_id= '1' 
 Execution Time:0.00045585632324219

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('97', 'ONE HERO', '2', '0', '1', '', '1', '', '', '', '', '1', '1', '1') 
 Execution Time:0.002251148223877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from item_master where   code = '98' or  (name = 'POSITIVE' ) and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from item_master where   code = '98' or  (name = 'POSITIVE' ) and office_id= '1' 
 Execution Time:0.00044393539428711

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('98', 'POSITIVE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026359558105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005490779876709

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005490779876709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0012938976287842

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0005490779876709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0012938976287842

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from item_master where   code = '99' or  (name = 'CLEVER' ) and office_id= '1' 
 Execution Time:0.0003662109375

select count(*) as cnt from item_master where   code = '99' or  (name = 'CLEVER' ) and office_id= '1' 
 Execution Time:0.0003662109375

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('99', 'CLEVER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027408599853516

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001227855682373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003821849822998

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001227855682373

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020408630371094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from item_master where   code = '100' or  (name = 'BANRAYS' ) and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from item_master where   code = '100' or  (name = 'BANRAYS' ) and office_id= '1' 
 Execution Time:0.00030708312988281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('100', 'BANRAYS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0064940452575684

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013279914855957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013279914855957

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from item_master where   code = '101' or  (name = 'AOBENMA' ) and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from item_master where   code = '101' or  (name = 'AOBENMA' ) and office_id= '1' 
 Execution Time:0.00035309791564941

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('101', 'AOBENMA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047459602355957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039386749267578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018310546875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018310546875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018310546875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from item_master where   code = '102' or  (name = 'MARCO JONES' ) and office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from item_master where   code = '102' or  (name = 'MARCO JONES' ) and office_id= '1' 
 Execution Time:0.00076603889465332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('102', 'MARCO JONES', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026750564575195

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049400329589844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00097203254699707

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049400329589844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00097203254699707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049400329589844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00097203254699707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0032010078430176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049400329589844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00097203254699707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0032010078430176

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from item_master where   code = '103' or  (name = 'SIXTEEN' ) and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from item_master where   code = '103' or  (name = 'SIXTEEN' ) and office_id= '1' 
 Execution Time:0.00048995018005371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('103', 'SIXTEEN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002701997756958

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039815902709961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from item_master where   code = '104' or  (name = 'DIGITAL' ) and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from item_master where   code = '104' or  (name = 'DIGITAL' ) and office_id= '1' 
 Execution Time:0.0004279613494873

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('104', 'DIGITAL', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0042331218719482

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013399124145508

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from item_master where   code = '105' or  (name = 'MAXX' ) and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from item_master where   code = '105' or  (name = 'MAXX' ) and office_id= '1' 
 Execution Time:0.00037813186645508

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('105', 'MAXX', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.010021924972534

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003209114074707

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003209114074707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from item_master where   code = '106' or  (name = 'SIZLER' ) and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from item_master where   code = '106' or  (name = 'SIZLER' ) and office_id= '1' 
 Execution Time:0.00044608116149902

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('106', 'SIZLER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025179386138916

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039005279541016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039005279541016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039005279541016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039005279541016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from item_master where   code = '107' or  (name = 'AFO GOLD' ) and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from item_master where   code = '107' or  (name = 'AFO GOLD' ) and office_id= '1' 
 Execution Time:0.00036501884460449

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('107', 'AFO GOLD', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0025219917297363

select count(*) as cnt from item_master where   code = '107' or  (name = 'AFO GOLD' ) and office_id= '1' 
 Execution Time:0.00037503242492676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018811225891113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018811225891113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029206275939941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018811225891113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from item_master where   code = '108' or  (name = 'SINCERI' ) and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from item_master where   code = '108' or  (name = 'SINCERI' ) and office_id= '1' 
 Execution Time:0.00036811828613281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('108', 'SINCERI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051121711730957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020289421081543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from item_master where   code = '109' or  (name = 'WENT' ) and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from item_master where   code = '109' or  (name = 'WENT' ) and office_id= '1' 
 Execution Time:0.0003659725189209

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('109', 'WENT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0057051181793213

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from item_master where   code = '109' or  (name = 'METALIC' ) and office_id= '1' 
 Execution Time:0.00030899047851562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022315979003906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022315979003906

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022315979003906

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022315979003906

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014090538024902

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014281272888184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014305114746094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014305114746094

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014305114746094

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from item_master where   code = '110' or  (name = 'METALIC' ) and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from item_master where   code = '110' or  (name = 'METALIC' ) and office_id= '1' 
 Execution Time:0.00037908554077148

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('110', 'METALIC', '2', '0', '1', '', '2', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026030540466309

select count(*) as cnt from item_master where item_id='109'  and office_id= '1' 
 Execution Time:0.0003969669342041

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017189979553223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017189979553223

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017189979553223

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from item_master where   code = '111' or  (name = 'LEVIN VICTORY' ) and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from item_master where   code = '111' or  (name = 'LEVIN VICTORY' ) and office_id= '1' 
 Execution Time:0.00048613548278809

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('111', 'LEVIN VICTORY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0075139999389648

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040411949157715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040411949157715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040411949157715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040411949157715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014710426330566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050020217895508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050020217895508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023913383483887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050020217895508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023913383483887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017809867858887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050020217895508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023913383483887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019502639770508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016283988952637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016283988952637

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015616416931152

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016283988952637

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054717063903809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042605400085449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054717063903809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054717063903809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054717063903809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00079894065856934

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003662109375

select count(*) as cnt from item_master where   code = '112' or  (name = 'SH7' ) and office_id= '1' 
 Execution Time:0.0028297901153564

select count(*) as cnt from item_master where   code = '112' or  (name = 'SH7' ) and office_id= '1' 
 Execution Time:0.0028297901153564

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('112', 'SH7', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0071878433227539

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043606758117676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019598007202148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select count(*) as cnt from item_master where item_id='107'  and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from item_master where   code = '113' or  (name = 'FOREVER18' ) and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from item_master where   code = '113' or  (name = 'FOREVER18' ) and office_id= '1' 
 Execution Time:0.00039100646972656

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('113', 'FOREVER18', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049450397491455

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005490779876709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036096572875977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005490779876709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023913383483887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005490779876709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023913383483887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017809867858887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005490779876709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023913383483887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from item_master where   code = '114' or  (name = 'TOP 8' ) and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from item_master where   code = '114' or  (name = 'TOP 8' ) and office_id= '1' 
 Execution Time:0.00033783912658691

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('114', 'TOP 8', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044150352478027

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0013680458068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039315223693848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0013680458068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039315223693848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025105476379395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0013680458068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039315223693848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025105476379395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020790100097656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0013680458068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039315223693848

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025105476379395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from item_master where   code = '115' or  (name = 'TOP6' ) and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from item_master where   code = '115' or  (name = 'TOP6' ) and office_id= '1' 
 Execution Time:0.00046491622924805

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('115', 'TOP6', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0061619281768799

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025415420532227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from item_master where   code = '116' or  (name = 'SIGNATURE' ) and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from item_master where   code = '116' or  (name = 'SIGNATURE' ) and office_id= '1' 
 Execution Time:0.0004420280456543

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('116', 'SIGNATURE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0059199333190918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035905838012695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035905838012695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002291202545166

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035905838012695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002291202545166

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050497055053711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035905838012695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002291202545166

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from item_master where   code = '117' or  (name = 'IC' ) and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from item_master where   code = '117' or  (name = 'IC' ) and office_id= '1' 
 Execution Time:0.00051498413085938

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('117', 'IC', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0020928382873535

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from item_master where   code = '118' or  (name = 'IZARRAS' ) and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from item_master where   code = '118' or  (name = 'IZARRAS' ) and office_id= '1' 
 Execution Time:0.00039196014404297

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('118', 'IZARRAS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056130886077881

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013589859008789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013589859008789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016903877258301

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016903877258301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016903877258301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021696090698242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021696090698242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021696090698242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021696090698242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013995170593262

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from item_master where   code = '119' or  (name = 'COMET' ) and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from item_master where   code = '119' or  (name = 'COMET' ) and office_id= '1' 
 Execution Time:0.00050711631774902

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('119', 'COMET', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0082519054412842

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024580955505371

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003812313079834

select count(*) as cnt from item_master where   code = '120' or  (name = 'CALVIN' ) and office_id= '1' 
 Execution Time:0.0033960342407227

select count(*) as cnt from item_master where   code = '120' or  (name = 'CALVIN' ) and office_id= '1' 
 Execution Time:0.0033960342407227

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('120', 'CALVIN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.021580934524536

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0029191970825195

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0029191970825195

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0012681484222412

select count(*) as cnt from item_master where   code = '121' or  (name = 'RADIANCE' ) and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from item_master where   code = '121' or  (name = 'RADIANCE' ) and office_id= '1' 
 Execution Time:0.00038886070251465

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('121', 'RADIANCE', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0047919750213623

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from item_master where   code = '122' or  (name = 'LIBERTY' ) and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from item_master where   code = '122' or  (name = 'LIBERTY' ) and office_id= '1' 
 Execution Time:0.00042986869812012

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('122', 'LIBERTY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.014326095581055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021100044250488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021100044250488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024580955505371

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021100044250488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from item_master where   code = '123' or  (name = 'X PLUS' ) and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from item_master where   code = '123' or  (name = 'X PLUS' ) and office_id= '1' 
 Execution Time:0.00033307075500488

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('123', 'X PLUS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0034260749816895

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056600570678711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056600570678711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056600570678711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002140998840332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00056600570678711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040888786315918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023508071899414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from item_master where   code = '124' or  (name = 'BIG B' ) and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from item_master where   code = '124' or  (name = 'BIG B' ) and office_id= '1' 
 Execution Time:0.00059390068054199

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('124', 'BIG B', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051579475402832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002448558807373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002448558807373

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002448558807373

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from item_master where   code = '125' or  (name = 'XPERT' ) and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from item_master where   code = '125' or  (name = 'XPERT' ) and office_id= '1' 
 Execution Time:0.00043511390686035

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('125', 'XPERT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048918724060059

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021791458129883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021791458129883

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038409233093262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028896331787109

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021791458129883

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from item_master where   code = '126' or  (name = 'HARMONY' ) and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from item_master where   code = '126' or  (name = 'HARMONY' ) and office_id= '1' 
 Execution Time:0.00043201446533203

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('126', 'HARMONY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026819705963135

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031185150146484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001981258392334

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031185150146484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001981258392334

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031185150146484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001981258392334

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031185150146484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001981258392334

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013494491577148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from item_master where   code = '127' or  (name = 'AISHA' ) and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from item_master where   code = '127' or  (name = 'AISHA' ) and office_id= '1' 
 Execution Time:0.00037598609924316

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('127', 'AISHA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0030810832977295

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013899803161621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from item_master where   code = '128' or  (name = 'SUDDENLY' ) and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from item_master where   code = '128' or  (name = 'SUDDENLY' ) and office_id= '1' 
 Execution Time:0.00034999847412109

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('128', 'SUDDENLY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047891139984131

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from item_master where   code = '129' or  (name = 'FIFA SHERI' ) and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from item_master where   code = '129' or  (name = 'FIFA SHERI' ) and office_id= '1' 
 Execution Time:0.00045299530029297

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('129', 'FIFA SHERI', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.012892961502075

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00011992454528809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014495849609375

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039076805114746

select count(*) as cnt from item_master where   code = '130' or  (name = 'COMBAT' ) and office_id= '1' 
 Execution Time:0.00045680999755859

select count(*) as cnt from item_master where   code = '130' or  (name = 'COMBAT' ) and office_id= '1' 
 Execution Time:0.00045680999755859

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('130', 'COMBAT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.009052038192749

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0082080364227295

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0082080364227295

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0082080364227295

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026798248291016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00042104721069336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0082080364227295

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047087669372559

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026798248291016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from item_master where   code = '131' or  (name = 'SARAS' ) and office_id= '1' 
 Execution Time:0.00061988830566406

select count(*) as cnt from item_master where   code = '131' or  (name = 'SARAS' ) and office_id= '1' 
 Execution Time:0.00061988830566406

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('131', 'SARAS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019271373748779

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013017654418945

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023508071899414

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013303756713867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from item_master where   code = '132' or  (name = 'HEART ROBBER' ) and office_id= '1' 
 Execution Time:0.00044083595275879

select count(*) as cnt from item_master where   code = '132' or  (name = 'HEART ROBBER' ) and office_id= '1' 
 Execution Time:0.00044083595275879

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('132', 'HEART ROBBER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0044651031494141

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054001808166504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054001808166504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026822090148926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054001808166504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026822090148926

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054001808166504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026822090148926

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from item_master where   code = '133' or  (name = 'LERNY JOHN' ) and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '133' or  (name = 'LERNY JOHN' ) and office_id= '1' 
 Execution Time:0.00036001205444336

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('133', 'LERNY JOHN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049681663513184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021481513977051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021481513977051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021481513977051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021481513977051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016999244689941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from item_master where   code = '134' or  (name = 'MISTY' ) and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from item_master where   code = '134' or  (name = 'MISTY' ) and office_id= '1' 
 Execution Time:0.0003359317779541

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('134', 'MISTY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0064921379089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.004478931427002

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.004478931427002

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020813941955566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.004478931427002

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020813941955566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.004478931427002

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032997131347656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020813941955566

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from item_master where   code = '135' or  (name = 'NESS' ) and office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from item_master where   code = '135' or  (name = 'NESS' ) and office_id= '1' 
 Execution Time:0.00036883354187012

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('135', 'NESS', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.00229811668396

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059795379638672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059795379638672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020313262939453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059795379638672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020313262939453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059795379638672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020313262939453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from item_master where   code = '136' or  (name = 'MODELA' ) and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from item_master where   code = '136' or  (name = 'MODELA' ) and office_id= '1' 
 Execution Time:0.00041007995605469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('136', 'MODELA', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0056130886077881

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027799606323242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016307830810547

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from item_master where   code = '137' or  (name = 'BLUE BELL' ) and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from item_master where   code = '137' or  (name = 'BLUE BELL' ) and office_id= '1' 
 Execution Time:0.00044488906860352

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('137', 'BLUE BELL', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0084390640258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032782554626465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002601146697998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032782554626465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002601146697998

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017118453979492

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032782554626465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002601146697998

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017118453979492

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017786026000977

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032782554626465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002601146697998

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017118453979492

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from item_master where   code = '138' or  (name = 'ETC' ) and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from item_master where   code = '138' or  (name = 'ETC' ) and office_id= '1' 
 Execution Time:0.00044393539428711

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('138', 'ETC', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0088520050048828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from item_master where   code = '139' or  (name = 'VALENTINE RUDY' ) and office_id= '1' 
 Execution Time:0.00046420097351074

select count(*) as cnt from item_master where   code = '139' or  (name = 'VALENTINE RUDY' ) and office_id= '1' 
 Execution Time:0.00046420097351074

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('139', 'VALENTINE RUDY', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.010939836502075

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054597854614258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052189826965332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054597854614258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054597854614258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00039005279541016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054597854614258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052189826965332

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022697448730469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from item_master where   code = '140' or  (name = 'REDART' ) and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from item_master where   code = '140' or  (name = 'REDART' ) and office_id= '1' 
 Execution Time:0.00047588348388672

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('140', 'REDART', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023291110992432

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018620491027832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018620491027832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017189979553223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018620491027832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from item_master where   code = '141' or  (name = 'NATIONAL GEOGRAPHIC' ) and office_id= '1' 
 Execution Time:0.00047516822814941

select count(*) as cnt from item_master where   code = '141' or  (name = 'NATIONAL GEOGRAPHIC' ) and office_id= '1' 
 Execution Time:0.00047516822814941

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('141', 'NATIONAL GEOGRAPHIC', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0024540424346924

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038313865661621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0010030269622803

select count(*) as cnt from item_master where   code = '142' or  (name = 'CORAL SPORTS' ) and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from item_master where   code = '142' or  (name = 'CORAL SPORTS' ) and office_id= '1' 
 Execution Time:0.00051999092102051

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('142', 'CORAL SPORTS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0058739185333252

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037312507629395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from item_master where   code = '143' or  (name = 'TV' ) and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from item_master where   code = '143' or  (name = 'TV' ) and office_id= '1' 
 Execution Time:0.00044584274291992

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('143', 'TV', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023019313812256

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from item_master where   code = '144' or  (name = 'EYE PLAYER' ) and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from item_master where   code = '144' or  (name = 'EYE PLAYER' ) and office_id= '1' 
 Execution Time:0.00061202049255371

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('144', 'EYE PLAYER', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0019969940185547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003659725189209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028014183044434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028014183044434

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003659725189209

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028014183044434

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from item_master where   code = '145' or  (name = 'EXPLENDOR' ) and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from item_master where   code = '145' or  (name = 'EXPLENDOR' ) and office_id= '1' 
 Execution Time:0.0005640983581543

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('145', 'EXPLENDOR', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0024080276489258

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037407875061035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002598762512207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from item_master where   code = '146' or  (name = 'JADES' ) and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from item_master where   code = '146' or  (name = 'JADES' ) and office_id= '1' 
 Execution Time:0.00031709671020508

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('146', 'JADES', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0047800540924072

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051379203796387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051379203796387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051379203796387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051379203796387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from item_master where   code = '147' or  (name = 'NEW SMART' ) and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from item_master where   code = '147' or  (name = 'NEW SMART' ) and office_id= '1' 
 Execution Time:0.00046491622924805

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('147', 'NEW SMART', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027608871459961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037217140197754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037217140197754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037217140197754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037217140197754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013613700866699

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where   code = '148' or  (name = 'PRINCE' ) and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from item_master where   code = '148' or  (name = 'PRINCE' ) and office_id= '1' 
 Execution Time:0.00041508674621582

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('148', 'PRINCE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.001924991607666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037980079650879

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037980079650879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029706954956055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037980079650879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029706954956055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037980079650879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029706954956055

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002439022064209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057792663574219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057792663574219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002448558807373

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057792663574219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002448558807373

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057792663574219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044894218444824

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002448558807373

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from item_master where   code = '149' or  (name = 'ENSURE' ) and office_id= '1' 
 Execution Time:0.00043082237243652

select count(*) as cnt from item_master where   code = '149' or  (name = 'ENSURE' ) and office_id= '1' 
 Execution Time:0.00043082237243652

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('149', 'ENSURE', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0026881694793701

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026202201843262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026202201843262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026202201843262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026202201843262

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from item_master where   code = '150' or  (name = 'GENIUS' ) and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from item_master where   code = '150' or  (name = 'GENIUS' ) and office_id= '1' 
 Execution Time:0.00039196014404297

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('150', 'GENIUS', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0022881031036377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0010440349578857

select count(*) as cnt from item_master where   code = '151' or  (name = 'SPECTEX' ) and office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from item_master where   code = '151' or  (name = 'SPECTEX' ) and office_id= '1' 
 Execution Time:0.00053215026855469

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('151', 'SPECTEX', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0025150775909424

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035500526428223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017094612121582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from item_master where   code = '152' or  (name = 'LAZZARA' ) and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from item_master where   code = '152' or  (name = 'LAZZARA' ) and office_id= '1' 
 Execution Time:0.00040006637573242

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('152', 'LAZZARA', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0015919208526611

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018310546875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018310546875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028705596923828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018310546875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select count(*) as cnt from item_master where   code = '153' or  (name = 'LAKE' ) and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from item_master where   code = '153' or  (name = 'LAKE' ) and office_id= '1' 
 Execution Time:0.00040888786315918

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('153', 'LAKE', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0023319721221924

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041913986206055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022292137145996

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022292137145996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022292137145996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014710426330566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022292137145996

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012922286987305

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from item_master where   code = '154' or  (name = 'SPCNCOR' ) and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from item_master where   code = '154' or  (name = 'SPCNCOR' ) and office_id= '1' 
 Execution Time:0.00043010711669922

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('154', 'SPCNCOR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051591396331787

select count(*) as cnt from item_master where   code = '154' or  (name = 'SPCNCOR' ) and office_id= '1' 
 Execution Time:0.00040102005004883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047588348388672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034880638122559

select count(*) as cnt from item_master where   code = '155' or  (name = 'SNOW' ) and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from item_master where   code = '155' or  (name = 'SNOW' ) and office_id= '1' 
 Execution Time:0.00048017501831055

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('155', 'SNOW', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0022149085998535

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015091896057129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015091896057129

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00067687034606934

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028109550476074

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015091896057129

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00064682960510254

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from item_master where   code = '156' or  (name = 'CAPTION' ) and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from item_master where   code = '156' or  (name = 'CAPTION' ) and office_id= '1' 
 Execution Time:0.00034594535827637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('156', 'CAPTION', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0020120143890381

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053501129150391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035285949707031

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053501129150391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026416778564453

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053501129150391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026416778564453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00053501129150391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026416778564453

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from item_master where   code = '157' or  (name = 'JANK' ) and office_id= '1' 
 Execution Time:0.00057816505432129

select count(*) as cnt from item_master where   code = '157' or  (name = 'JANK' ) and office_id= '1' 
 Execution Time:0.00057816505432129

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('157', 'JANK', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049910545349121

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00091385841369629

select count(*) as cnt from item_master where   code = '158' or  (name = 'X MAN' ) and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from item_master where   code = '158' or  (name = 'X MAN' ) and office_id= '1' 
 Execution Time:0.00038313865661621

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('158', 'X MAN', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0053009986877441

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00038695335388184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00038695335388184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030088424682617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022411346435547

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00038695335388184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from item_master where   code = '159' or  (name = 'FASHION' ) and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from item_master where   code = '159' or  (name = 'FASHION' ) and office_id= '1' 
 Execution Time:0.00048112869262695

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('159', 'FASHION', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047519207000732

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002892017364502

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from item_master where   code = '160' or  (name = 'GRAVINY' ) and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from item_master where   code = '160' or  (name = 'GRAVINY' ) and office_id= '1' 
 Execution Time:0.00038886070251465

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('160', 'GRAVINY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052149295806885

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046610832214355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046610832214355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from item_master where   code = '161' or  (name = 'BIGBOSE' ) and office_id= '1' 
 Execution Time:0.0039989948272705

select count(*) as cnt from item_master where   code = '161' or  (name = 'BIGBOSE' ) and office_id= '1' 
 Execution Time:0.0039989948272705

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('161', 'BIGBOSE', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0056710243225098

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034213066101074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001680850982666

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from item_master where   code = '162' or  (name = 'TR90' ) and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from item_master where   code = '162' or  (name = 'TR90' ) and office_id= '1' 
 Execution Time:0.00049901008605957

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('162', 'TR90', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0022971630096436

select count(*) as cnt from item_master where   code = '162' or  (name = 'TR90' ) and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from item_master where   code = '162' or  (name = 'TR90' ) and office_id= '1' 
 Execution Time:0.0039668083190918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051784515380859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002901554107666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051784515380859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002901554107666

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051784515380859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002901554107666

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017714500427246

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00051784515380859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002901554107666

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015711784362793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016403198242188

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from item_master where   code = '163' or  (name = 'HOO' ) and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from item_master where   code = '163' or  (name = 'HOO' ) and office_id= '1' 
 Execution Time:0.00047707557678223

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('163', 'HOO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0065121650695801

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033211708068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033211708068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001521110534668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033211708068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001521110534668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033211708068848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023698806762695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001521110534668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from item_master where   code = '164' or  (name = 'CYRNO' ) and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from item_master where   code = '164' or  (name = 'CYRNO' ) and office_id= '1' 
 Execution Time:0.00041699409484863

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('164', 'CYRNO', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0046629905700684

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033307075500488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020694732666016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020694732666016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020408630371094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020694732666016

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from item_master where   code = '165' or  (name = 'REGALIS' ) and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from item_master where   code = '165' or  (name = 'REGALIS' ) and office_id= '1' 
 Execution Time:0.00033903121948242

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('165', 'REGALIS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005925178527832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00079989433288574

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00079989433288574

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00079989433288574

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00079989433288574

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023198127746582

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from item_master where   code = '166' or  (name = 'TITANIUM' ) and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from item_master where   code = '166' or  (name = 'TITANIUM' ) and office_id= '1' 
 Execution Time:0.00048613548278809

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('166', 'TITANIUM', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0059900283813477

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023603439331055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from item_master where   code = '167' or  (name = 'CIVITAS' ) and office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from item_master where   code = '167' or  (name = 'CIVITAS' ) and office_id= '1' 
 Execution Time:0.00057101249694824

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('167', 'CIVITAS', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0027859210968018

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018620491027832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017690658569336

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from item_master where   code = '168' or  (name = 'SCORPY' ) and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from item_master where   code = '168' or  (name = 'SCORPY' ) and office_id= '1' 
 Execution Time:0.0004270076751709

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('168', 'SCORPY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047590732574463

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025510787963867

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025510787963867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033807754516602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025510787963867

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from item_master where   code = '169' or  (name = 'QUEEN' ) and office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from item_master where   code = '169' or  (name = 'QUEEN' ) and office_id= '1' 
 Execution Time:0.00048184394836426

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('169', 'QUEEN', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049290657043457

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018501281738281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018501281738281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018501281738281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018501281738281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from item_master where   code = '170' or  (name = 'INTIME' ) and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from item_master where   code = '170' or  (name = 'INTIME' ) and office_id= '1' 
 Execution Time:0.00040483474731445

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('170', 'INTIME', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0025560855865479

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00013113021850586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from item_master where   code = '171' or  (name = 'SKYFO' ) and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from item_master where   code = '171' or  (name = 'SKYFO' ) and office_id= '1' 
 Execution Time:0.00047588348388672

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('171', 'SKYFO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0027430057525635

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026607513427734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014877319335938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026607513427734

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014686584472656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014877319335938

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from item_master where   code = '172' or  (name = 'AQUA' ) and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from item_master where   code = '172' or  (name = 'AQUA' ) and office_id= '1' 
 Execution Time:0.00046706199645996

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('172', 'AQUA', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0045309066772461

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045514106750488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045514106750488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045514106750488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045514106750488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from item_master where   code = '173' or  (name = 'BLUBLAST' ) and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from item_master where   code = '173' or  (name = 'BLUBLAST' ) and office_id= '1' 
 Execution Time:0.00039291381835938

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('173', 'BLUBLAST', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0022459030151367

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020980834960938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020980834960938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014281272888184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020980834960938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014281272888184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013995170593262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020980834960938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014281272888184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from item_master where   code = '174' or  (name = 'INDEPENDENT' ) and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from item_master where   code = '174' or  (name = 'INDEPENDENT' ) and office_id= '1' 
 Execution Time:0.00055193901062012

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('174', 'INDEPENDENT', '2', '0', '1', '', '1', '1', '', '', '', '1', '1', '1') 
 Execution Time:0.0056419372558594

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003359317779541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003359317779541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003359317779541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003359317779541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025486946105957

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022196769714355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003352165222168

select count(*) as cnt from item_master where   code = '175' or  (name = 'SEVEN STAR' ) and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from item_master where   code = '175' or  (name = 'SEVEN STAR' ) and office_id= '1' 
 Execution Time:0.00047898292541504

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('175', 'SEVEN STAR', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0048019886016846

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030088424682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023293495178223

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from item_master where   code = '176' or  (name = 'ROXY' ) and office_id= '1' 
 Execution Time:0.00049018859863281

select count(*) as cnt from item_master where   code = '176' or  (name = 'ROXY' ) and office_id= '1' 
 Execution Time:0.00049018859863281

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('176', 'ROXY', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047018527984619

select count(*) as cnt from frame_classification where type='1' and  code = '1' and name = 'SHELL' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from frame_classification where type='1' and  code = '1' and name = 'SHELL' and office_id= '1' 
 Execution Time:0.00030303001403809

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '1', 'SHELL', '', '1', '1', '1') 
 Execution Time:0.0022788047790527

select count(*) as cnt from frame_classification where type='1' and  code = '2' and name = 'SHELL SUPRA' and office_id= '1' 
 Execution Time:0.00060820579528809

select count(*) as cnt from frame_classification where type='1' and  code = '2' and name = 'SHELL SUPRA' and office_id= '1' 
 Execution Time:0.00060820579528809

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '2', 'SHELL SUPRA', '', '1', '1', '1') 
 Execution Time:0.0047860145568848

select count(*) as cnt from frame_classification where type='1' and  code = '3' and name = 'METAL SUPRA' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from frame_classification where type='1' and  code = '3' and name = 'METAL SUPRA' and office_id= '1' 
 Execution Time:0.0005190372467041

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '3', 'METAL SUPRA', '', '1', '1', '1') 
 Execution Time:0.0022590160369873

select count(*) as cnt from frame_classification where type='1' and  code = '4' and name = 'SUPRA' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from frame_classification where type='1' and  code = '4' and name = 'SUPRA' and office_id= '1' 
 Execution Time:0.00034213066101074

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '4', 'SUPRA', '', '1', '1', '1') 
 Execution Time:0.0067870616912842

select * from office where  office_id= '1' 
 Execution Time:0.0021531581878662

select * from office where  office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from frame_classification where type='1' and  code = '5' and name = 'RIMLESS' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from frame_classification where type='1' and  code = '5' and name = 'RIMLESS' and office_id= '1' 
 Execution Time:0.00031709671020508

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '5', 'RIMLESS', '', '1', '1', '1') 
 Execution Time:0.0048470497131348

select count(*) as cnt from frame_classification where type='1' and  code = '6' and name = 'METAL FULL' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from frame_classification where type='1' and  code = '6' and name = 'METAL FULL' and office_id= '1' 
 Execution Time:0.00051212310791016

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '6', 'METAL FULL', '', '1', '1', '1') 
 Execution Time:0.0048589706420898

select count(*) as cnt from frame_classification where type='1' and  code = '7' and name = 'METAL' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from frame_classification where type='1' and  code = '7' and name = 'METAL' and office_id= '1' 
 Execution Time:0.00052905082702637

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '7', 'METAL', '', '1', '1', '1') 
 Execution Time:0.0088150501251221

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079607963562012

select count(*) as cnt from supplier where   code = '01' or  (name = 'OLD_STOCK_SUPPLIER'  and mobile='9000200457'  and office_id= '1') 
 Execution Time:0.00044012069702148

select count(*) as cnt from supplier where   code = '01' or  (name = 'OLD_STOCK_SUPPLIER'  and mobile='9000200457'  and office_id= '1') 
 Execution Time:0.00044012069702148

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('01', 'OLD_STOCK_SUPPLIER', '1', '9000200457', '', '', '', '', '', '', '1', '', '2', '1', '1', '1') 
 Execution Time:0.0019350051879883

select count(*) as cnt from frame_classification where type='2' and  code = '01' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from frame_classification where type='2' and  code = '01' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00033807754516602

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '01', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0024888515472412

select count(*) as cnt from frame_classification where type='4' and  code = '01' and name = 'NONE' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from frame_classification where type='4' and  code = '01' and name = 'NONE' and office_id= '1' 
 Execution Time:0.0003969669342041

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('4', '01', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0040349960327148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0049879550933838

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0049879550933838

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020384788513184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0049879550933838

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020384788513184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0004119873046875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0049879550933838

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020384788513184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from item_master where item_id='55'  and office_id= '1' 
 Execution Time:0.0006721019744873

select count(*) as cnt from item_master where    item_id!='55' and    code = '55'  and   name = 'K AND D'   and office_id= '1' 
 Execution Time:0.00044417381286621

UPDATE `item_master` SET `code` = '55', `name` = 'K AND D', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '55' 
 Execution Time:0.0066940784454346

select * from office where  office_id= '1' 
 Execution Time:0.00055289268493652

select * from office where  office_id= '1' 
 Execution Time:0.0005340576171875


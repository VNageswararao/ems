select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0022480487823486

select count(*) as cnt  from sales_master where   sales_id='4' and office_id= '1' 
 Execution Time:0.00052499771118164

select * from office where  office_id= '1' 
 Execution Time:0.0021200180053711

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043010711669922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015807151794434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015807151794434

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002291202545166

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044417381286621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043010711669922

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015807151794434

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from item_master where item_id='186'  and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from item_master where item_id='37'  and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from item_master where item_id='27'  and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from item_master where item_id='45'  and office_id= '1' 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042390823364258

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00047898292541504

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00044512748718262

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036787986755371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036787986755371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036787986755371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00036787986755371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018596649169922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select count(*) as cnt from lens_master where   code = '0' and name = 'TOMMIGO KBF-RX-HMC' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from lens_master where   code = '0' and name = 'TOMMIGO KBF-RX-HMC' and office_id= '1' 
 Execution Time:0.00042390823364258

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'TOMMIGO KBF-RX-HMC', '1', '2', '2021-03-13', '1690', '', '1', '1', '1') 
 Execution Time:0.004953145980835

select count(*) as cnt from lens_master where   code = '0' and name = 'SV-HC' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from lens_master where   code = '0' and name = 'SV-HC' and office_id= '1' 
 Execution Time:0.00039505958557129

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'SV-HC', '1', '2', '2021-03-13', '250', '', '1', '1', '1') 
 Execution Time:0.0025360584259033

select count(*) as cnt from lens_master where   code = '0' and name = 'SV-HMC' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from lens_master where   code = '0' and name = 'SV-HMC' and office_id= '1' 
 Execution Time:0.00033211708068848

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'SV-HMC', '1', '2', '2021-03-13', '480', '', '1', '1', '1') 
 Execution Time:0.0026600360870361

select count(*) as cnt from lens_master where   code = '0' and name = 'TOMMIGO SV HMC' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from lens_master where   code = '0' and name = 'TOMMIGO SV HMC' and office_id= '1' 
 Execution Time:0.00057291984558105

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'TOMMIGO SV HMC', '1', '2', '2021-03-13', '700', '', '1', '1', '1') 
 Execution Time:0.0049419403076172

select count(*) as cnt from lens_master where   code = '0' and name = 'TOMMIGO SV HI CYL HMC' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from lens_master where   code = '0' and name = 'TOMMIGO SV HI CYL HMC' and office_id= '1' 
 Execution Time:0.00032401084899902

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'TOMMIGO SV HI CYL HMC', '1', '2', '2021-03-13', '1400', '', '1', '1', '1') 
 Execution Time:0.0071191787719727

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF RX COMPND' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF RX COMPND' and office_id= '1' 
 Execution Time:0.00039792060852051

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'KBF RX COMPND', '1', '2', '2021-03-13', '550', '', '1', '1', '1') 
 Execution Time:0.0022258758544922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059199333190918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010290145874023

select count(*) as cnt from customer where   code = '05' or  (name = 'KRISHNAN'  and mobile='6452402142'  and office_id= '1') 
 Execution Time:0.00049185752868652

select count(*) as cnt from customer where   code = '06' or  (name = 'KRISHNAN'  and mobile='6452402142'  and office_id= '1') 
 Execution Time:0.0003960132598877

select count(*) as cnt from customer where   code = '06' or  (name = 'KRISHNAN'  and mobile='6452402142'  and office_id= '1') 
 Execution Time:0.0003960132598877

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('06', 'KRISHNAN', '1', '6452402142', '', '', '14582', '', '', '+2.50', '+2.75', '+2.75', '+2.75', '', '', '', '', '', '', '', '', '6/6', '', '6/6', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0035848617553711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from customer where customer_id='7'  and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from customer where customer_id='7'  and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from customer where customer_id='7'  and office_id= '1' 
 Execution Time:0.00038003921508789

DELETE FROM `customer`
WHERE `customer_id` = '7' 
 Execution Time:0.0019731521606445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053119659423828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0012478828430176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058293342590332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058293342590332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017881393432617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058293342590332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017881393432617

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00099802017211914

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058293342590332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003058910369873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017881393432617

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select count(*) as cnt from item_master where item_id='6'  and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from item_master where    item_id!='6' and    code = '6'  and   name = 'GOLDSTAR'   and office_id= '1' 
 Execution Time:0.00052714347839355

UPDATE `item_master` SET `code` = '6', `name` = 'GOLDSTAR', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '2', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '6' 
 Execution Time:0.0025308132171631

select count(*) as cnt from item_master where item_id='27'  and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from item_master where    item_id!='27' and    code = '27'  and   name = 'GOLD STAR'   and office_id= '1' 
 Execution Time:0.00044894218444824

UPDATE `item_master` SET `code` = '27', `name` = 'GOLD STAR', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '2', `tax` = '1', `cgst` = '', `sgst` = '', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '27' 
 Execution Time:0.0038559436798096

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040912628173828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027918815612793

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027918815612793

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0033259391784668

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027918815612793

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0033259391784668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027918815612793

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0033259391784668

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from item_master where item_id='186'  and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from item_master where item_id='177'  and office_id= '1' 
 Execution Time:0.00032901763916016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038504600524902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034785270690918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038504600524902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014281272888184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038504600524902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014281272888184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038504600524902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034785270690918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014281272888184

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from supplier where supplier_id='1'  and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from supplier where supplier_id='1'  and office_id= '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044512748718262

select count(*) as cnt from supplier where   code = '002' or  (name = 'KOOK'  and mobile='9744754388'  and office_id= '1') 
 Execution Time:0.00039386749267578

select count(*) as cnt from supplier where   code = '002' or  (name = 'KOOK'  and mobile='9744754388'  and office_id= '1') 
 Execution Time:0.00039386749267578

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('002', 'KOOK', '1', '9744754388', '', '', 'FFHJATGJHYH', '', '', '', '1', '', '2', '1', '1', '1') 
 Execution Time:0.0025320053100586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005028247833252

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005028247833252

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026988983154297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005028247833252

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026988983154297

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00045084953308105

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00049591064453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005028247833252

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026988983154297

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select count(*) as cnt from item_master where   code = '187' or  (name = 'KOOKIEEES' ) and office_id= '1' 
 Execution Time:0.0007321834564209

select count(*) as cnt from item_master where   code = '187' or  (name = 'KOOKIEEES' ) and office_id= '1' 
 Execution Time:0.0007321834564209

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('187', 'KOOKIEEES', '2', '0', '1', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0047030448913574

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066900253295898

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.029654979705811

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.029654979705811

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.029654979705811

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00054001808166504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.029654979705811

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019216537475586

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select count(*) as cnt from item_master where item_id='109'  and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from item_master where    item_id!='109' and    code = '109'  and   name = 'D&amp;K DELUX'   and office_id= '1' 
 Execution Time:0.00081706047058105

UPDATE `item_master` SET `code` = '109', `name` = 'D&amp;K DELUX', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '109' 
 Execution Time:0.0055840015411377

select count(*) as cnt from item_master where item_id='39'  and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from item_master where    item_id!='39' and    code = '39'  and   name = 'D&amp;K ULTRATHIN'   and office_id= '1' 
 Execution Time:0.0004279613494873

UPDATE `item_master` SET `code` = '39', `name` = 'D&amp;K ULTRATHIN', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '39' 
 Execution Time:0.0051169395446777

select count(*) as cnt from item_master where item_id='1'  and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from item_master where    item_id!='1' and    code = '1'  and   name = 'D&amp;K PLUS'   and office_id= '1' 
 Execution Time:0.00059700012207031

UPDATE `item_master` SET `code` = '1', `name` = 'D&amp;K PLUS', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '1' 
 Execution Time:0.0023050308227539

select count(*) as cnt from item_master where item_id='168'  and office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from item_master where    item_id!='168' and    code = '168'  and   name = 'PITT &amp; MITT'   and office_id= '1' 
 Execution Time:0.00058102607727051

UPDATE `item_master` SET `code` = '168', `name` = 'PITT &amp; MITT', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '', `sgst` = '', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '168' 
 Execution Time:0.0045938491821289

select count(*) as cnt from item_master where item_id='174'  and office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from item_master where    item_id!='174' and    code = '174'  and   name = 'RAY BAN'   and office_id= '1' 
 Execution Time:0.00049901008605957

UPDATE `item_master` SET `code` = '174', `name` = 'RAY BAN', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '174' 
 Execution Time:0.0022919178009033

select count(*) as cnt from item_master where item_id='94'  and office_id= '1' 
 Execution Time:0.00024604797363281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059294700622559

select count(*) as cnt from customer where   code = '06' or  (name = 'DAMODHARA PODUVAL'  and mobile='9605760521'  and office_id= '1') 
 Execution Time:0.00059700012207031

select count(*) as cnt from customer where   code = '06' or  (name = 'DAMODHARA PODUVAL'  and mobile='9605760521'  and office_id= '1') 
 Execution Time:0.00059700012207031

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('06', 'DAMODHARA PODUVAL', '1', '9605760521', '', '', '22323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0027339458465576

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059986114501953

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051093101501465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049018859863281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011680126190186

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00045013427734375

select * from lens_master where    lens_master_id = '8' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.0005650520324707

select * from lens_master where    lens_master_id = '9' and office_id= '1' 
 Execution Time:0.00032186508178711


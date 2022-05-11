select * from office where  office_id= '1' 
 Execution Time:0.0024459362030029

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0024430751800537

select count(*) as cnt from customer where   code = '15268' or  (name = 'THAMBAYI'  and mobile='9633726478'  and office_id= '1') 
 Execution Time:0.00054311752319336

select count(*) as cnt from customer where   code = '15268' or  (name = 'THAMBAYI'  and mobile='9633726478'  and office_id= '1') 
 Execution Time:0.00054311752319336

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15268', 'THAMBAYI', '2', '9633726478', '', '', '15268', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.005079984664917

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003669261932373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052499771118164

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068211555480957

select count(*) as cnt from customer where   code = '15510' or  (name = 'SARFRAZ'  and mobile='8848235536'  and office_id= '1') 
 Execution Time:0.00045108795166016

select count(*) as cnt from customer where   code = '15510' or  (name = 'SARFRAZ'  and mobile='8848235536'  and office_id= '1') 
 Execution Time:0.00045108795166016

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15510', 'SARFRAZ', '1', '8848235536', '', '', '15510', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0020709037780762

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005650520324707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061702728271484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004880428314209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055694580078125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034618377685547

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00063610076904297

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00050997734069824

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020885467529297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from customer where   code = '15506' or  (name = 'RAJEEVAN'  and mobile='9656693309'  and office_id= '1') 
 Execution Time:0.00037503242492676

select count(*) as cnt from customer where   code = '15506' or  (name = 'RAJEEVAN'  and mobile='9656693309'  and office_id= '1') 
 Execution Time:0.00037503242492676

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15506', 'RAJEEVAN', '1', '9656693309', '', '', '15506', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0080528259277344

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003349781036377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from supplier where   code = '016' or  (name = 'FASHION EYE STYLE'  and mobile='9349253908'  and office_id= '1') 
 Execution Time:0.00041103363037109

select count(*) as cnt from supplier where   code = '016' or  (name = 'FASHION EYE STYLE'  and mobile='9349253908'  and office_id= '1') 
 Execution Time:0.00041103363037109

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('016', 'FASHION EYE STYLE', '1', '9349253908', '', '', '', '', '', '', '1', '', '2', '1', '1', '1') 
 Execution Time:0.0049149990081787

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057315826416016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057315826416016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002439022064209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057315826416016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002439022064209

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0013031959533691

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057315826416016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002439022064209

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0013031959533691

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from frame_classification where type='1' and  code = '8' and name = 'SAFETY GLASS' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from frame_classification where type='1' and  code = '8' and name = 'SAFETY GLASS' and office_id= '1' 
 Execution Time:0.00054407119750977

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '8', 'SAFETY GLASS', '', '1', '1', '1') 
 Execution Time:0.0056331157684326

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from customer where   code = '15508' or  (name = 'JANARDHANAN'  and mobile='9497457036'  and office_id= '1') 
 Execution Time:0.00049495697021484

select count(*) as cnt from customer where   code = '15508' or  (name = 'JANARDHANAN'  and mobile='9497457036'  and office_id= '1') 
 Execution Time:0.00049495697021484

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15508', 'JANARDHANAN', '1', '9497457036', '', '', '15508', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0070362091064453

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046491622924805

select count(*) as cnt from classification where type='1' and  code = '3' or name = 'SAFETY GLASS' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from classification where type='1' and  code = '3' or name = 'SAFETY GLASS' and office_id= '1' 
 Execution Time:0.00040698051452637

INSERT INTO `classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '3', 'SAFETY GLASS', '', '1', '1', '1') 
 Execution Time:0.010615110397339

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015592575073242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015592575073242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00050902366638184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028800964355469

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015592575073242

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from item_master where   code = '177' or  (name = 'SAFETY GLASS' ) and office_id= '1' 
 Execution Time:0.00063014030456543

select count(*) as cnt from item_master where   code = '177' or  (name = 'SAFETY GLASS' ) and office_id= '1' 
 Execution Time:0.00063014030456543

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('177', 'SAFETY GLASS', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005169153213501

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043392181396484

select count(*) as cnt  from sales_master where   sales_id='14' and office_id= '1' 
 Execution Time:0.00074195861816406

select * from office where  office_id= '1' 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007021427154541

select count(*) as cnt from customer where   code = '15517' or  (name = 'SUJITHRA'  and mobile='7558862859'  and office_id= '1') 
 Execution Time:0.0004119873046875

select count(*) as cnt from customer where   code = '15517' or  (name = 'SUJITHRA'  and mobile='7558862859'  and office_id= '1') 
 Execution Time:0.0004119873046875

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15517', 'SUJITHRA', '2', '7558862859', '', '', '15517', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0021820068359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057792663574219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00090980529785156

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082492828369141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079798698425293

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082492828369141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079798698425293

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082492828369141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079798698425293

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0025119781494141

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00082492828369141

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079798698425293

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024199485778809

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0025119781494141

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00067806243896484

select count(*) as cnt from customer where   code = '0015' or  (name = 'AMITHA'  and mobile='9446682224'  and office_id= '1') 
 Execution Time:0.00054001808166504

select count(*) as cnt from customer where   code = '0015' or  (name = 'AMITHA'  and mobile='9446682224'  and office_id= '1') 
 Execution Time:0.00054001808166504

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0015', 'AMITHA', '2', '9446682224', '', '', '15525', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0024459362030029

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00084209442138672

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00057196617126465

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00036907196044922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00061392784118652

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00059986114501953

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00027990341186523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021910667419434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00073385238647461

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00064706802368164

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.000244140625

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023388862609863

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00052905082702637

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00064992904663086

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00015592575073242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0001678466796875

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00059914588928223

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00055599212646484

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00024199485778809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031113624572754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0004889965057373

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00044488906860352

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00019598007202148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00016999244689941

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00066304206848145

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00054192543029785

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00041890144348145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003662109375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042080879211426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048398971557617

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0006711483001709

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00049686431884766

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0002439022064209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from office where  office_id= '1' 
 Execution Time:0.00054788589477539

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055623054504395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001671314239502

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001671314239502

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0010149478912354

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001671314239502

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from item_master where item_id='177'  and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from item_master where item_id='176'  and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from item_master where item_id='174'  and office_id= '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039005279541016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00061798095703125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051999092102051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00061798095703125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023293495178223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00061798095703125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023293495178223

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035619735717773

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00061798095703125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051999092102051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023293495178223

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00034618377685547

select count(*) as cnt from item_master where   code = '178' or  (name = 'testproduct' ) and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from item_master where   code = '178' or  (name = 'testproduct' ) and office_id= '1' 
 Execution Time:0.00051593780517578

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('178', 'testproduct', '2', '0', '1', '', '2', '2', '9', '9', 'testing purpose only', '1', '1', '1') 
 Execution Time:0.0047521591186523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00081896781921387

select * from office where  office_id= '1' 
 Execution Time:0.00051712989807129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00085091590881348

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006251335144043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051212310791016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048518180847168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789


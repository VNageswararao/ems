select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0021510124206543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059795379638672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050997734069824

select count(*) as cnt from customer where   code = '022' or  (name = 'ANJU K V'  and mobile='7902627687'  and office_id= '1') 
 Execution Time:0.00046396255493164

select count(*) as cnt from customer where   code = '022' or  (name = 'ANJU K V'  and mobile='7902627687'  and office_id= '1') 
 Execution Time:0.00046396255493164

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('022', 'ANJU K V', '2', '7902627687', '', '', '42767', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0018839836120605

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.0022869110107422

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00024795532226562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from lens_master where   code = '0' and name = 'ZEISS1.50 SVDURAVISION BP' and office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from lens_master where   code = '0' and name = 'ZEISS1.50 SVDURAVISION BP' and office_id= '1' 
 Execution Time:0.00047087669372559

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'ZEISS1.50 SVDURAVISION BP', '1', '2', '2021-03-19', '2900', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0037581920623779

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006558895111084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004570484161377

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00055813789367676

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00032401084899902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00041508674621582

select * from lens_master where    lens_master_id = '14' and office_id= '1' 
 Execution Time:0.00033378601074219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056219100952148

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00034499168395996

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00018906593322754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00035309791564941

select * from lens_master where    lens_master_id = '14' and office_id= '1' 
 Execution Time:0.00020384788513184

select count(*) as cnt from lens_master where lens_master_id!='14' and   code = '0' and name = 'ZEISS 1.50 SV DV BLUE PROTECT' and office_id= '1' 
 Execution Time:0.00071191787719727

UPDATE `lens_master` SET `code` = '0', `name` = 'ZEISS 1.50 SV DV BLUE PROTECT', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-19', `purchase_amount` = '2900', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '14' 
 Execution Time:0.0022878646850586

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00053286552429199

select * from lens_master where    lens_master_id = '13' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00042581558227539

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00042581558227539

select * from lens_master where    lens_master_id = '13' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.00024819374084473

select * from lens_master where    lens_master_id = '11' and office_id= '1' 
 Execution Time:0.00016093254089355

select count(*) as cnt from lens_master where lens_master_id='10'   and office_id= '1' 
 Execution Time:0.00024580955505371

select count(*) as cnt from lens_master where lens_master_id='10'   and office_id= '1' 
 Execution Time:0.00024580955505371

DELETE FROM `lens_master`
WHERE `lens_master_id` = '10' 
 Execution Time:0.0057418346405029

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from lens_master where lens_master_id='9'   and office_id= '1' 
 Execution Time:0.00055408477783203

select * from lens_master where    lens_master_id = '9' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from lens_master where lens_master_id='11'   and office_id= '1' 
 Execution Time:0.0003199577331543

DELETE FROM `lens_master`
WHERE `lens_master_id` = '11' 
 Execution Time:0.0022859573364258

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from lens_master where lens_master_id='8'   and office_id= '1' 
 Execution Time:0.00044608116149902

select * from lens_master where    lens_master_id = '8' and office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from lens_master where lens_master_id!='8' and   code = '0' and name = 'SV-HC' and office_id= '1' 
 Execution Time:0.00052499771118164

UPDATE `lens_master` SET `code` = '0', `name` = 'SV-HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '280', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '8' 
 Execution Time:0.0024669170379639

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00063514709472656

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00063514709472656

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from lens_master where lens_master_id!='12' and   code = '0' and name = 'KBF RX COMPND' and office_id= '1' 
 Execution Time:0.0012538433074951

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF RX COMPND', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '550', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '12' 
 Execution Time:0.0002741813659668

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00037884712219238

select * from lens_master where    lens_master_id = '14' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00049114227294922

select * from lens_master where    lens_master_id = '13' and office_id= '1' 
 Execution Time:0.00019502639770508

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00034189224243164

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from lens_master where lens_master_id='14'   and office_id= '1' 
 Execution Time:0.00036907196044922

select * from lens_master where    lens_master_id = '14' and office_id= '1' 
 Execution Time:0.0002138614654541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00082302093505859

select count(*) as cnt from lens_master where lens_master_id!='14' and   code = '0' and name = 'SETO 1.56 HMC' and office_id= '1' 
 Execution Time:0.00035190582275391

UPDATE `lens_master` SET `code` = '0', `name` = 'SETO 1.56 HMC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-19', `purchase_amount` = '810', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '14' 
 Execution Time:0.0079030990600586

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from lens_master where lens_master_id='13'   and office_id= '1' 
 Execution Time:0.00032305717468262

select * from lens_master where    lens_master_id = '13' and office_id= '1' 
 Execution Time:0.00018906593322754

select count(*) as cnt from customer where   code = '023' or  (name = 'BALAN P'  and mobile='9446723395'  and office_id= '1') 
 Execution Time:0.00054001808166504

select count(*) as cnt from customer where   code = '023' or  (name = 'BALAN P'  and mobile='9446723395'  and office_id= '1') 
 Execution Time:0.00054001808166504

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('023', 'BALAN P', '1', '9446723395', '', '', '18060', '', '', '-1.25', '', '', '', '', '', '-1.25', '', '', '', '90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0044400691986084

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO 1.56(-6.00 -4.00) HMC' and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO 1.56(-6.00 -4.00) HMC' and office_id= '1' 
 Execution Time:0.00033092498779297

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'SETO 1.56(-6.00 -4.00) HMC', '1', '2', '', '1350', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0028789043426514

select count(*) as cnt from lens_master where lens_master_id='15'   and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from lens_master where lens_master_id='15'   and office_id= '1' 
 Execution Time:0.00042295455932617

select * from lens_master where    lens_master_id = '15' and office_id= '1' 
 Execution Time:0.00024914741516113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO LUSTRAA ASPH BLUE BLK HD' and office_id= '1' 
 Execution Time:0.00083303451538086

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO LUSTRAA ASPH BLUE BLK HD' and office_id= '1' 
 Execution Time:0.00083303451538086

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'SETO LUSTRAA ASPH BLUE BLK HD', '1', '2', '', '1800', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0067150592803955

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063085556030273

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY FSV HVP' and office_id= '1' 
 Execution Time:0.00069093704223633

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY FSV HVP' and office_id= '1' 
 Execution Time:0.00069093704223633

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLFY FSV HVP', '1', '2', '2021-03-19', '1950', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0023329257965088

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY FSV BC' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY FSV BC' and office_id= '1' 
 Execution Time:0.00039196014404297

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLFY FSV BC', '1', '2', '2021-03-19', '2670', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0021309852600098

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY DGT HC' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY DGT HC' and office_id= '1' 
 Execution Time:0.00037193298339844

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLFY DGT HC', '1', '2', '2021-03-19', '2800', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0022218227386475

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY DGT HVP' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY DGT HVP' and office_id= '1' 
 Execution Time:0.00031304359436035

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLFY DGT HVP', '1', '2', '2021-02-19', '4600', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0048069953918457

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY DGT HVP BC' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLFY DGT HVP BC' and office_id= '1' 
 Execution Time:0.00030899047851562

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLFY DGT HVP BC', '1', '2', '2021-03-19', '5100', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0050370693206787

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLIFY COMFY HC' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLIFY COMFY HC' and office_id= '1' 
 Execution Time:0.00030612945556641

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLIFY COMFY HC', '1', '2', '2021-03-19', '4000', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.029489040374756

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLIFY COMFY HVP' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLIFY COMFY HVP' and office_id= '1' 
 Execution Time:0.00040984153747559

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLIFY COMFY HVP', '1', '2', '2021-03-19', '5800', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.008126974105835

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLIFY COMFY HVP BC' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from lens_master where   code = '0' and name = 'STELLIFY COMFY HVP BC' and office_id= '1' 
 Execution Time:0.00027608871459961

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'STELLIFY COMFY HVP BC', '1', '2', '2021-03-19', '6300', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0065739154815674

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA THINMAX 1.5 BLUMAX ULTRA' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA THINMAX 1.5 BLUMAX ULTRA' and office_id= '1' 
 Execution Time:0.00029397010803223

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA THINMAX 1.5 BLUMAX ULTRA', '1', '2', '2021-03-19', '1420', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0059940814971924

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA THINMAX 1.56A BLUEMAX' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA THINMAX 1.56A BLUEMAX' and office_id= '1' 
 Execution Time:0.00035214424133301

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA THINMAX 1.56A BLUEMAX', '1', '2', '2021-03-19', '2250', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0050928592681885

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA THINMAX TRNSITION SIGNTRE' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA THINMAX TRNSITION SIGNTRE' and office_id= '1' 
 Execution Time:0.00030803680419922

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA THINMAX TRNSITION SIGNTRE', '1', '2', '2021-03-19', '5990', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0048220157623291

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.0003659725189209

select * from lens_master where    lens_master_id = '3' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.00032496452331543

select * from lens_master where    lens_master_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from lens_master where lens_master_id='27'   and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from lens_master where lens_master_id='27'   and office_id= '1' 
 Execution Time:0.00038695335388184

select * from lens_master where    lens_master_id = '27' and office_id= '1' 
 Execution Time:0.0002288818359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00089693069458008

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00075602531433105

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0006709098815918

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00026893615722656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028204917907715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from customer where   code = '024' or  (name = 'RASEENA BEEVI'  and mobile='94474858235'  and office_id= '1') 
 Execution Time:0.00057315826416016

select count(*) as cnt from customer where   code = '024' or  (name = 'RASEENA BEEVI'  and mobile='94474858235'  and office_id= '1') 
 Execution Time:0.00057315826416016

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('024', 'RASEENA BEEVI', '2', '94474858235', '', '', '7927', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0027580261230469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041818618774414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045418739318848

select count(*) as cnt  from sales_master where   sales_id='25' and office_id= '1' 
 Execution Time:0.00034999847412109

select * from office where  office_id= '1' 
 Execution Time:0.00043988227844238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00060105323791504

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0005500316619873

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029492378234863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051498413085938

select count(*) as cnt  from sales_master where   sales_id='25' and office_id= '1' 
 Execution Time:0.00039410591125488

select * from office where  office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from customer where   code = '025' or  (name = 'SINDHU'  and mobile='9526046518'  and office_id= '1') 
 Execution Time:0.00058794021606445

select count(*) as cnt from customer where   code = '025' or  (name = 'SINDHU'  and mobile='9526046518'  and office_id= '1') 
 Execution Time:0.00058794021606445

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('025', 'SINDHU', '2', '9526046518', '', '', '42273', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0047140121459961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from customer where   code = '026' or  (name = 'RAVI'  and mobile=''  and office_id= '1') 
 Execution Time:0.00041508674621582

select count(*) as cnt from customer where   code = '026' or  (name = 'RAVI'  and mobile=''  and office_id= '1') 
 Execution Time:0.00041508674621582

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('026', 'RAVI', '1', '', '', '', '543', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0049209594726562

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00043892860412598

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00028681755065918

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA PLUS 3.0 BLUMAX CRIZAL UV' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA PLUS 3.0 BLUMAX CRIZAL UV' and office_id= '1' 
 Execution Time:0.00063395500183105

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA PLUS 3.0 BLUMAX CRIZAL UV', '1', '2', '', '11980', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0020530223846436

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062298774719238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041890144348145

select count(*) as cnt from customer where   code = '027' or  (name = 'NARAYANAN O'  and mobile='9446440534'  and office_id= '1') 
 Execution Time:0.00048995018005371

select count(*) as cnt from customer where   code = '027' or  (name = 'NARAYANAN O'  and mobile='9446440534'  and office_id= '1') 
 Execution Time:0.00048995018005371

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('027', 'NARAYANAN O', '1', '9446440534', '', '', '42099', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0027649402618408

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from customer where   code = '028' or  (name = 'VANAJA KP'  and mobile='9446269634'  and office_id= '1') 
 Execution Time:0.00036907196044922

select count(*) as cnt from customer where   code = '028' or  (name = 'VANAJA KP'  and mobile='9446269634'  and office_id= '1') 
 Execution Time:0.00036907196044922

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('028', 'VANAJA KP', '2', '9446269634', '', '', '9964', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.005234956741333

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042295455932617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from customer where   code = '029' or  (name = 'USHA ARAVINDH'  and mobile='9747096977'  and office_id= '1') 
 Execution Time:0.00054192543029785

select count(*) as cnt from customer where   code = '029' or  (name = 'USHA ARAVINDH'  and mobile='9747096977'  and office_id= '1') 
 Execution Time:0.00054192543029785

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('029', 'USHA ARAVINDH', '2', '9747096977', '', '', '427752', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0025827884674072

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from customer where   code = '030' or  (name = 'RAJEEVAN P V'  and mobile='940024937'  and office_id= '1') 
 Execution Time:0.00056600570678711

select count(*) as cnt from customer where   code = '030' or  (name = 'RAJEEVAN P V'  and mobile='940024937'  and office_id= '1') 
 Execution Time:0.00056600570678711

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('030', 'RAJEEVAN P V', '1', '940024937', '', '', '42855', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0085539817810059

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054502487182617

select count(*) as cnt from customer where   code = '031' or  (name = 'JAYACHANDRAN'  and mobile='9495345618'  and office_id= '1') 
 Execution Time:0.00040102005004883

select count(*) as cnt from customer where   code = '031' or  (name = 'JAYACHANDRAN'  and mobile='9495345618'  and office_id= '1') 
 Execution Time:0.00040102005004883

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('031', 'JAYACHANDRAN', '2', '9495345618', '', '', '2626', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0023488998413086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003969669342041

select count(*) as cnt from customer where   code = '032' or  (name = 'RENUKA'  and mobile='6238408196'  and office_id= '1') 
 Execution Time:0.00032281875610352

select count(*) as cnt from customer where   code = '032' or  (name = 'RENUKA'  and mobile='6238408196'  and office_id= '1') 
 Execution Time:0.00032281875610352

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('032', 'RENUKA', '2', '6238408196', '', '', '42777', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0058820247650146

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057005882263184

select count(*) as cnt  from sales_master where   sales_id='34' and office_id= '1' 
 Execution Time:0.00034904479980469

select * from office where  office_id= '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from customer where   code = '033' or  (name = 'RADHA KRISHNAN P'  and mobile='9496304499'  and office_id= '1') 
 Execution Time:0.00077295303344727

select count(*) as cnt from customer where   code = '033' or  (name = 'RADHA KRISHNAN P'  and mobile='9496304499'  and office_id= '1') 
 Execution Time:0.00077295303344727

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('033', 'RADHA KRISHNAN P', '1', '9496304499', '', '', '42982', 'KUNNARU', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0030498504638672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from customer where   code = '034' or  (name = 'ANIL KUMAR M'  and mobile='9447438494'  and office_id= '1') 
 Execution Time:0.00040507316589355

select count(*) as cnt from customer where   code = '034' or  (name = 'ANIL KUMAR M'  and mobile='9447438494'  and office_id= '1') 
 Execution Time:0.00040507316589355

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('034', 'ANIL KUMAR M', '1', '9447438494', '', '', '42991', 'VELLUR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0025479793548584

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

select count(*) as cnt from customer where   code = '035' or  (name = 'MINI K'  and mobile='9447851322'  and office_id= '1') 
 Execution Time:0.00055599212646484

select count(*) as cnt from customer where   code = '035' or  (name = 'MINI K'  and mobile='9447851322'  and office_id= '1') 
 Execution Time:0.00055599212646484

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('035', 'MINI K', '2', '9447851322', '', '', '42993', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0051391124725342

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00099086761474609

select count(*) as cnt from customer where   code = '035' or  (name = 'RADHAKRISHNAN'  and mobile='9400463049'  and office_id= '1') 
 Execution Time:0.00098896026611328

select count(*) as cnt from customer where   code = '036' or  (name = 'RADHAKRISHNAN'  and mobile='9400463049'  and office_id= '1') 
 Execution Time:0.00049304962158203

select count(*) as cnt from customer where   code = '036' or  (name = 'RADHAKRISHNAN'  and mobile='9400463049'  and office_id= '1') 
 Execution Time:0.00049304962158203

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('036', 'RADHAKRISHNAN', '1', '9400463049', '', '', '42998', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0021488666534424

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006859302520752

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from customer where   code = '036' or  (name = 'JAYASREE P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00041794776916504

select count(*) as cnt from customer where   code = '036' or  (name = 'JAYASREE P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048017501831055

select count(*) as cnt from customer where   code = '036' or  (name = 'JAYASREE P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00034189224243164

select count(*) as cnt from customer where   code = '036' or  (name = 'JAYASREE  P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00057697296142578

select count(*) as cnt from customer where   code = '036' or  (name = 'JAYASREE  P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00030398368835449

select count(*) as cnt from customer where   code = '037' or  (name = 'JAYASREE  P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00043797492980957

select count(*) as cnt from customer where   code = '037' or  (name = 'JAYASREE  P'  and mobile='9207436866'  and office_id= '1') 
 Execution Time:0.00043797492980957

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('037', 'JAYASREE  P', '2', '9207436866', '', '', '42778', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.004953145980835

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from customer where   code = '036' or  (name = 'SURENDHRAN'  and mobile='9447716132'  and office_id= '1') 
 Execution Time:0.00037598609924316

select count(*) as cnt from customer where   code = '037' or  (name = 'SURENDHRAN'  and mobile='9447716132'  and office_id= '1') 
 Execution Time:0.00041484832763672

select count(*) as cnt from customer where customer_id='38'  and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from customer where customer_id='38'  and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from customer where customer_id='38'  and office_id= '1' 
 Execution Time:0.0003509521484375

DELETE FROM `customer`
WHERE `customer_id` = '38' 
 Execution Time:0.0077090263366699

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select count(*) as cnt from customer where   code = '036' or  (name = 'SURENDHARAN'  and mobile='9447716132'  and office_id= '1') 
 Execution Time:0.00048518180847168

select count(*) as cnt from customer where   code = '036' or  (name = 'SURENDHARAN'  and mobile='9447716132'  and office_id= '1') 
 Execution Time:0.00048518180847168

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('036', 'SURENDHARAN', '1', '9447716132', '', '', '19919', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.022073984146118

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059390068054199

select count(*) as cnt from customer where   code = '038' or  (name = 'SARASWATHI P'  and mobile='7403245043'  and office_id= '1') 
 Execution Time:0.00038003921508789

select count(*) as cnt from customer where   code = '038' or  (name = 'SARASWATHI P'  and mobile='7403245043'  and office_id= '1') 
 Execution Time:0.00038003921508789

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('038', 'SARASWATHI P', '2', '7403245043', '', '', '42785', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.002396821975708

select count(*) as cnt from customer where customer_id='41'  and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from customer where customer_id='41'  and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from customer where    customer_id!='41' and    code = '038'  and   name = 'ABDUL RASHEED' and mobile='8606210400'  and office_id= '1' 
 Execution Time:0.00048995018005371

UPDATE `customer` SET `code` = '038', `name` = 'ABDUL RASHEED', `gender` = '1', `mobile` = '8606210400', `alter_mobile` = '', `email_id` = '', `mrd` = '42989', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '41' 
 Execution Time:0.0023980140686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005347728729248

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00053906440734863

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00052404403686523

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00031805038452148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041794776916504

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00068902969360352

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00041794776916504

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00015497207641602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031518936157227

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00036311149597168

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00018811225891113

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA TRENDFREE BLUMAX CRIZALUV' and office_id= '1' 
 Execution Time:0.00075793266296387

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA TRENDFREE BLUMAX CRIZALUV' and office_id= '1' 
 Execution Time:0.00075793266296387

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA TRENDFREE BLUMAX CRIZALUV', '1', '2', '2021-03-19', '7330', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0053508281707764

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049996376037598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011489391326904

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0017120838165283

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00072503089904785

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0005500316619873

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024986267089844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select count(*) as cnt  from sales_master where   sales_id='40' and office_id= '1' 
 Execution Time:0.00036716461181641

select * from office where  office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt  from sales_master where   sales_id='39' and office_id= '1' 
 Execution Time:0.0003969669342041

select * from office where  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt  from sales_master where   sales_id='38' and office_id= '1' 
 Execution Time:0.00034785270690918

select * from office where  office_id= '1' 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027608871459961

select count(*) as cnt from customer where   code = '039' or  (name = 'SARASWATHI'  and mobile='7403245043'  and office_id= '1') 
 Execution Time:0.00045609474182129

select count(*) as cnt from customer where   code = '039' or  (name = 'SARASWATHI'  and mobile='7403245043'  and office_id= '1') 
 Execution Time:0.00045609474182129

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('039', 'SARASWATHI', '2', '7403245043', '', '', '42785', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0054309368133545

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004570484161377

select count(*) as cnt  from sales_master where   sales_id='42' and office_id= '1' 
 Execution Time:0.00035285949707031

select * from office where  office_id= '1' 
 Execution Time:0.0003960132598877

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065898895263672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005488395690918

select count(*) as cnt from customer where   code = '040' or  (name = 'MADHU V K'  and mobile='9747755272'  and office_id= '1') 
 Execution Time:0.00038981437683105

select count(*) as cnt from customer where   code = '040' or  (name = 'MADHU V K'  and mobile='9747755272'  and office_id= '1') 
 Execution Time:0.00038981437683105

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('040', 'MADHU V K', '1', '9747755272', '', '', '43002', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0023219585418701

select count(*) as cnt from customer where customer_id='43'  and office_id= '1' 
 Execution Time:0.00045680999755859

select count(*) as cnt from customer where customer_id='43'  and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from customer where customer_id='43'  and office_id= '1' 
 Execution Time:0.00043487548828125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066709518432617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from customer where   code = '042' or  (name = 'RAJAN KV'  and mobile='9400058474'  and office_id= '1') 
 Execution Time:0.0005037784576416

select count(*) as cnt from customer where   code = '042' or  (name = 'RAJAN KV'  and mobile='9400058474'  and office_id= '1') 
 Execution Time:0.0005037784576416

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('042', 'RAJAN KV', '1', '9400058474', '', '', '41173', 'PRINCIPAL GOVT.HSS KUNHIMANGALAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.03181004524231

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065279006958008

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001007080078125

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00083613395690918

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00058412551879883

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026488304138184

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0009000301361084

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00073719024658203

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00053000450134277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026822090148926

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049495697021484

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0010449886322021

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00077509880065918

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063204765319824

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0004880428314209

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00038003921508789

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00020289421081543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00014495849609375

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00072884559631348

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0006561279296875

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030398368835449

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0005040168762207

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00039482116699219

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00017619132995605

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032615661621094

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00065398216247559

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00074315071105957

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00016498565673828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031685829162598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066494941711426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054097175598145

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00058984756469727

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00044393539428711

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00019311904907227

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00015401840209961

select count(*) as cnt  from sales_master where   sales_id='38' and office_id= '1' 
 Execution Time:0.0003058910369873

select * from office where  office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from customer where   code = '043' or  (name = 'SHOBITH KUMAR'  and mobile='7403245043'  and office_id= '1') 
 Execution Time:0.00052404403686523

select count(*) as cnt from customer where   code = '043' or  (name = 'SHOBITH KUMAR'  and mobile='7403245043'  and office_id= '1') 
 Execution Time:0.00052404403686523

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('043', 'SHOBITH KUMAR', '1', '7403245043', '', '', '34002', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.013633966445923

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004730224609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049304962158203

select count(*) as cnt  from sales_master where   sales_id='45' and office_id= '1' 
 Execution Time:0.00045180320739746

select * from office where  office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt  from sales_master where   sales_id='39' and office_id= '1' 
 Execution Time:0.00040006637573242

select * from office where  office_id= '1' 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030398368835449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from customer where   code = '044' or  (name = 'DIPNA'  and mobile='9447847859'  and office_id= '1') 
 Execution Time:0.00046300888061523

select count(*) as cnt from customer where   code = '044' or  (name = 'DIPNA'  and mobile='9447847859'  and office_id= '1') 
 Execution Time:0.00046300888061523

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('044', 'DIPNA', '1', '9447847859', '', '', '42793', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0051939487457275

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from customer where   code = '045' or  (name = 'ASHA MANSI'  and mobile='8289841938'  and office_id= '1') 
 Execution Time:0.00031113624572754

select count(*) as cnt from customer where   code = '045' or  (name = 'ASHA MANSI'  and mobile='8289841938'  and office_id= '1') 
 Execution Time:0.00031113624572754

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('045', 'ASHA MANSI', '2', '8289841938', '', '', '42800', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0069029331207275

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from customer where   code = '046' or  (name = 'SREEDHARAN'  and mobile='9400015434'  and office_id= '1') 
 Execution Time:0.00034284591674805

select count(*) as cnt from customer where   code = '046' or  (name = 'SREEDHARAN'  and mobile='9400015434'  and office_id= '1') 
 Execution Time:0.00034284591674805

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('046', 'SREEDHARAN', '1', '9400015434', '', '', '553', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0022120475769043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from customer where   code = '047' or  (name = 'RAMACHANDRAN'  and mobile='9497837180'  and office_id= '1') 
 Execution Time:0.0004270076751709

select count(*) as cnt from customer where   code = '047' or  (name = 'RAMACHANDRAN'  and mobile='9497837180'  and office_id= '1') 
 Execution Time:0.0004270076751709

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('047', 'RAMACHANDRAN', '1', '9497837180', '', '', '42772', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.003046989440918

select count(*) as cnt from customer where customer_id='49'  and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from customer where customer_id='49'  and office_id= '1' 
 Execution Time:0.0003349781036377

DELETE FROM `customer`
WHERE `customer_id` = '49' 
 Execution Time:0.0087318420410156

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from customer where   code = '047' or  (name = 'VALSALA'  and mobile='9142198202'  and office_id= '1') 
 Execution Time:0.00043392181396484

select count(*) as cnt from customer where   code = '047' or  (name = 'VALSALA'  and mobile='9142198202'  and office_id= '1') 
 Execution Time:0.00043392181396484

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('047', 'VALSALA', '2', '9142198202', '', '', '42810', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0027379989624023

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072193145751953

select count(*) as cnt from customer where   code = '048' or  (name = 'SISILY JOSEP'  and mobile='9961582697'  and office_id= '1') 
 Execution Time:0.00039887428283691

select count(*) as cnt from customer where   code = '048' or  (name = 'SISILY JOSEP'  and mobile='9961582697'  and office_id= '1') 
 Execution Time:0.00039887428283691

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('048', 'SISILY JOSEP', '2', '9961582697', '', '', '39516', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0018460750579834

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0074460506439209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044918060302734

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.0005040168762207

select * from office where  office_id= '1' 
 Execution Time:0.00042200088500977

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00063395500183105

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00022602081298828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055289268493652

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00058197975158691

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00055503845214844

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00024509429931641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from customer where   code = '049' or  (name = 'LEKHA E'  and mobile='7560946115'  and office_id= '1') 
 Execution Time:0.00059199333190918

select count(*) as cnt from customer where   code = '049' or  (name = 'LEKHA E'  and mobile='7560946115'  and office_id= '1') 
 Execution Time:0.00059199333190918

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('049', 'LEKHA E', '2', '7560946115', '', '', '27323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.003122091293335

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039291381835938

select count(*) as cnt  from sales_master where   sales_id='27' and office_id= '1' 
 Execution Time:0.00038599967956543

select * from office where  office_id= '1' 
 Execution Time:0.00031089782714844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063705444335938

select count(*) as cnt  from sales_master where   sales_id='38' and office_id= '1' 
 Execution Time:0.00045299530029297

select * from office where  office_id= '1' 
 Execution Time:0.00056600570678711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035977363586426

select count(*) as cnt  from sales_master where   sales_id='39' and office_id= '1' 
 Execution Time:0.00028800964355469

select * from office where  office_id= '1' 
 Execution Time:0.0002138614654541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049805641174316

select count(*) as cnt  from sales_master where   sales_id='42' and office_id= '1' 
 Execution Time:0.00049281120300293

select * from office where  office_id= '1' 
 Execution Time:0.00056910514831543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0032320022583008

select count(*) as cnt from customer where   code = '050' or  (name = 'RAHMATH M'  and mobile='7992056379'  and office_id= '1') 
 Execution Time:0.00043797492980957

select count(*) as cnt from customer where   code = '050' or  (name = 'RAHMATH M'  and mobile='7992056379'  and office_id= '1') 
 Execution Time:0.00043797492980957

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('050', 'RAHMATH M', '2', '7992056379', '', '', '42818', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0022649765014648

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00098896026611328

select count(*) as cnt from customer where   code = '051' or  (name = 'SABERA JUSTIN'  and mobile=''  and office_id= '1') 
 Execution Time:0.0004420280456543

select count(*) as cnt from customer where   code = '051' or  (name = 'SABERA JUSTIN'  and mobile=''  and office_id= '1') 
 Execution Time:0.0004420280456543

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('051', 'SABERA JUSTIN', '2', '', '', '', '42831', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0024511814117432

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036120414733887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002899169921875

select count(*) as cnt from customer where   code = '052' or  (name = 'SREERAG'  and mobile='8078558287'  and office_id= '1') 
 Execution Time:0.00032401084899902

select count(*) as cnt from customer where   code = '052' or  (name = 'SREERAG'  and mobile='8078558287'  and office_id= '1') 
 Execution Time:0.00032401084899902

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('052', 'SREERAG', '1', '8078558287', '', '', '42694', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.004702091217041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004580020904541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from customer where   code = '053' or  (name = 'RAJESH'  and mobile='9447851861'  and office_id= '1') 
 Execution Time:0.0004279613494873

select count(*) as cnt from customer where   code = '053' or  (name = 'RAJESH'  and mobile='9447851861'  and office_id= '1') 
 Execution Time:0.0004279613494873

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('053', 'RAJESH', '1', '9447851861', '', '', '563', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0026099681854248

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from customer where   code = '054' or  (name = 'BALAKRISHNAN'  and mobile='9846359058'  and office_id= '1') 
 Execution Time:0.0005040168762207

select count(*) as cnt from customer where   code = '054' or  (name = 'BALAKRISHNAN'  and mobile='9846359058'  and office_id= '1') 
 Execution Time:0.0005040168762207

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('054', 'BALAKRISHNAN', '1', '9846359058', '', '', '27628', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0020029544830322

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056910514831543

select count(*) as cnt from customer where   code = '055' or  (name = 'PREETHA J'  and mobile='9846738625'  and office_id= '1') 
 Execution Time:0.00052809715270996

select count(*) as cnt from customer where   code = '055' or  (name = 'PREETHA J'  and mobile='9846738625'  and office_id= '1') 
 Execution Time:0.00052809715270996

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('055', 'PREETHA J', '2', '9846738625', '', '', '42838', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0049450397491455

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043606758117676

select count(*) as cnt from customer where   code = '056' or  (name = 'ARAVINDAKSHAN AP'  and mobile='9744106156'  and office_id= '1') 
 Execution Time:0.00040698051452637

select count(*) as cnt from customer where   code = '056' or  (name = 'ARAVINDAKSHAN AP'  and mobile='9744106156'  and office_id= '1') 
 Execution Time:0.00040698051452637

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('056', 'ARAVINDAKSHAN AP', '1', '9744106156', '', '', '42840', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0026960372924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066208839416504

select count(*) as cnt from customer where   code = '057' or  (name = 'MUHAMMED ALI'  and mobile='8086377829'  and office_id= '1') 
 Execution Time:0.00042510032653809

select count(*) as cnt from customer where   code = '057' or  (name = 'MUHAMMED ALI'  and mobile='8086377829'  and office_id= '1') 
 Execution Time:0.00042510032653809

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('057', 'MUHAMMED ALI', '1', '8086377829', '', '', '41908', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028669834136963

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from customer where   code = '058' or  (name = 'KRISHNAN K'  and mobile='9746395090'  and office_id= '1') 
 Execution Time:0.00038003921508789

select count(*) as cnt from customer where   code = '058' or  (name = 'KRISHNAN K'  and mobile='9746395090'  and office_id= '1') 
 Execution Time:0.00038003921508789

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('058', 'KRISHNAN K', '1', '9746395090', '', '', '38557', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0029900074005127

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from customer where   code = '059' or  (name = 'SANTHA P V'  and mobile='40645'  and office_id= '1') 
 Execution Time:0.00038003921508789

select count(*) as cnt from customer where   code = '059' or  (name = 'SANTHA P V'  and mobile='40645'  and office_id= '1') 
 Execution Time:0.00038003921508789

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('059', 'SANTHA P V', '2', '40645', '', '', '8594035657', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0023818016052246

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from customer where   code = '060' or  (name = 'RAMADEVI'  and mobile='944626934'  and office_id= '1') 
 Execution Time:0.00046610832214355

select count(*) as cnt from customer where   code = '060' or  (name = 'RAMADEVI'  and mobile='944626934'  and office_id= '1') 
 Execution Time:0.00046610832214355

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('060', 'RAMADEVI', '2', '944626934', '', '', '11426', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0046818256378174

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from customer where   code = '061' or  (name = 'SOUMYA E'  and mobile='8390805163'  and office_id= '1') 
 Execution Time:0.00036001205444336

select count(*) as cnt from customer where   code = '061' or  (name = 'SOUMYA E'  and mobile='8390805163'  and office_id= '1') 
 Execution Time:0.00036001205444336

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('061', 'SOUMYA E', '2', '8390805163', '', '', '22342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0025231838226318

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043988227844238

select count(*) as cnt from customer where   code = '062' or  (name = 'NISHA'  and mobile='9048032331'  and office_id= '1') 
 Execution Time:0.00047516822814941

select count(*) as cnt from customer where   code = '062' or  (name = 'NISHA'  and mobile='9048032331'  and office_id= '1') 
 Execution Time:0.00047516822814941

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('062', 'NISHA', '2', '9048032331', '', '', '43011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0051181316375732

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select count(*) as cnt from customer where customer_id='65'  and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from customer where customer_id='65'  and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from customer where    customer_id!='65' and    code = '062'  and   name = 'NISHA M' and mobile='9048032331'  and office_id= '1' 
 Execution Time:0.00040602684020996

UPDATE `customer` SET `code` = '062', `name` = 'NISHA M', `gender` = '2', `mobile` = '9048032331', `alter_mobile` = '', `email_id` = '', `mrd` = '43011', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '65' 
 Execution Time:0.0026059150695801

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027799606323242

select count(*) as cnt from customer where   code = '063' or  (name = 'SREEPRIYA'  and mobile='7025192230'  and office_id= '1') 
 Execution Time:0.00059008598327637

select count(*) as cnt from customer where   code = '063' or  (name = 'SREEPRIYA'  and mobile='7025192230'  and office_id= '1') 
 Execution Time:0.00059008598327637

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('063', 'SREEPRIYA', '2', '7025192230', '', '', '42494', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0053348541259766

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061416625976562

select count(*) as cnt from customer where   code = '064' or  (name = 'AMALNATH A P'  and mobile='9947819106'  and office_id= '1') 
 Execution Time:0.00052905082702637

select count(*) as cnt from customer where   code = '064' or  (name = 'AMALNATH A P'  and mobile='9947819106'  and office_id= '1') 
 Execution Time:0.00052905082702637

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('064', 'AMALNATH A P', '1', '9947819106', '', '', '42870', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0033111572265625

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000640869140625

select count(*) as cnt from customer where   code = '065' or  (name = 'MANJU A V'  and mobile='9744736820'  and office_id= '1') 
 Execution Time:0.00050187110900879

select count(*) as cnt from customer where   code = '065' or  (name = 'MANJU A V'  and mobile='9744736820'  and office_id= '1') 
 Execution Time:0.00050187110900879

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('065', 'MANJU A V', '1', '9744736820', '', '', '42867', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0046989917755127

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055503845214844

select count(*) as cnt from customer where   code = '066' or  (name = 'RAIHANATH'  and mobile='9544607576'  and office_id= '1') 
 Execution Time:0.00048017501831055

select count(*) as cnt from customer where   code = '066' or  (name = 'RAIHANATH'  and mobile='9544607576'  and office_id= '1') 
 Execution Time:0.00048017501831055

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('066', 'RAIHANATH', '2', '9544607576', '', '', '42873', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0059168338775635

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034809112548828

select count(*) as cnt from customer where   code = '067' or  (name = 'RAJESH T P'  and mobile='9745695280'  and office_id= '1') 
 Execution Time:0.00037598609924316

select count(*) as cnt from customer where   code = '067' or  (name = 'RAJESH T P'  and mobile='9745695280'  and office_id= '1') 
 Execution Time:0.00037598609924316

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('067', 'RAJESH T P', '1', '9745695280', '', '', '42876', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0025670528411865

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052189826965332

select count(*) as cnt from customer where   code = '068' or  (name = 'AMRITHA C K'  and mobile='6238090598'  and office_id= '1') 
 Execution Time:0.00047087669372559

select count(*) as cnt from customer where   code = '068' or  (name = 'AMRITHA C K'  and mobile='6238090598'  and office_id= '1') 
 Execution Time:0.00047087669372559

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('068', 'AMRITHA C K', '1', '6238090598', '', '', '34333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0047957897186279

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from customer where   code = '069' or  (name = 'SHARMILA V K'  and mobile='9495910300'  and office_id= '1') 
 Execution Time:0.00081205368041992

select count(*) as cnt from customer where   code = '069' or  (name = 'SHARMILA V K'  and mobile='9495910300'  and office_id= '1') 
 Execution Time:0.00081205368041992

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('069', 'SHARMILA V K', '2', '9495910300', '', '', '42881', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0038161277770996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from customer where   code = '070' or  (name = 'BAZIMA A N'  and mobile='9495377374'  and office_id= '1') 
 Execution Time:0.00041794776916504

select count(*) as cnt from customer where   code = '070' or  (name = 'BAZIMA A N'  and mobile='9495377374'  and office_id= '1') 
 Execution Time:0.00041794776916504

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('070', 'BAZIMA A N', '2', '9495377374', '', '', '42882', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0045540332794189

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005791187286377

select count(*) as cnt from customer where   code = '071' or  (name = 'REJI RAVI'  and mobile='6238427005'  and office_id= '1') 
 Execution Time:0.00045919418334961

select count(*) as cnt from customer where   code = '071' or  (name = 'REJI RAVI'  and mobile='6238427005'  and office_id= '1') 
 Execution Time:0.00045919418334961

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('071', 'REJI RAVI', '2', '6238427005', '', '', '19830', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0021188259124756

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select count(*) as cnt from customer where   code = '072' or  (name = 'VENOGOPAL/SHEEJA'  and mobile='6238091098'  and office_id= '1') 
 Execution Time:0.00039100646972656

select count(*) as cnt from customer where   code = '072' or  (name = 'VENOGOPAL/SHEEJA'  and mobile='6238091098'  and office_id= '1') 
 Execution Time:0.00039100646972656

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('072', 'VENOGOPAL/SHEEJA', '1', '6238091098', '', '', '590', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0024950504302979

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.0003199577331543

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00018692016601562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from tax_master where   tax_id='2' and office_id= '1' 
 Execution Time:0.00063204765319824

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from lens_master where   code = '0' and name = 'PROGRESSIVE VERSO ADVANCE HMC' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from lens_master where   code = '0' and name = 'PROGRESSIVE VERSO ADVANCE HMC' and office_id= '1' 
 Execution Time:0.00049805641174316

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'PROGRESSIVE VERSO ADVANCE HMC', '1', '2', '2021-03-19', '2500', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0025241374969482

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from customer where   code = '073' or  (name = 'DEVANANDA C'  and mobile='8606372746'  and office_id= '1') 
 Execution Time:0.00034189224243164

select count(*) as cnt from customer where   code = '073' or  (name = 'DEVANANDA C'  and mobile='8606372746'  and office_id= '1') 
 Execution Time:0.00034189224243164

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('073', 'DEVANANDA C', '2', '8606372746', '', '', '42592', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0058789253234863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00092411041259766

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00060796737670898

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00026988983154297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00079703330993652

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00074982643127441

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00018405914306641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00014305114746094

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

select count(*) as cnt from customer where   code = '074' or  (name = 'KHADEEJA'  and mobile=''  and office_id= '1') 
 Execution Time:0.00052022933959961

select count(*) as cnt from customer where   code = '074' or  (name = 'KHADEEJA'  and mobile=''  and office_id= '1') 
 Execution Time:0.00052022933959961

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('074', 'KHADEEJA', '2', '', '', '', '42885', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0054171085357666

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061416625976562

select count(*) as cnt from customer where   code = '075' or  (name = 'MUHAMMED SANIY'  and mobile='7511112875'  and office_id= '1') 
 Execution Time:0.00042295455932617

select count(*) as cnt from customer where   code = '075' or  (name = 'MUHAMMED SANIY'  and mobile='7511112875'  and office_id= '1') 
 Execution Time:0.00042295455932617

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('075', 'MUHAMMED SANIY', '2', '7511112875', '', '', '42787', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.002392053604126

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from customer where   code = '076' or  (name = 'NALINI T'  and mobile='7012426462'  and office_id= '1') 
 Execution Time:0.00034379959106445

select count(*) as cnt from customer where   code = '076' or  (name = 'NALINI T'  and mobile='7012426462'  and office_id= '1') 
 Execution Time:0.00034379959106445

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('076', 'NALINI T', '2', '7012426462', '', '', '7232', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0076580047607422

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036215782165527

select count(*) as cnt from customer where   code = '078' or  (name = 'HARIKRISHNAN K C'  and mobile='90734389318'  and office_id= '1') 
 Execution Time:0.00059294700622559

select count(*) as cnt from customer where   code = '078' or  (name = 'HARIKRISHNAN K C'  and mobile='90734389318'  and office_id= '1') 
 Execution Time:0.00059294700622559

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('078', 'HARIKRISHNAN K C', '1', '90734389318', '', '', '30050', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0062620639801025

select count(*) as cnt from customer where customer_id='80'  and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from customer where customer_id='80'  and office_id= '1' 
 Execution Time:0.00046110153198242

DELETE FROM `customer`
WHERE `customer_id` = '80' 
 Execution Time:0.0024411678314209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select count(*) as cnt from customer where   code = '077' or  (name = 'SANTHA C V'  and mobile='9562810633'  and office_id= '1') 
 Execution Time:0.002918004989624

select count(*) as cnt from customer where   code = '077' or  (name = 'SANTHA C V'  and mobile='9562810633'  and office_id= '1') 
 Execution Time:0.002918004989624

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('077', 'SANTHA C V', '2', '9562810633', '', '', '42899', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.007098913192749

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from customer where   code = '078' or  (name = 'KARUNAKARAN'  and mobile='9847525655'  and office_id= '1') 
 Execution Time:0.00063800811767578

select count(*) as cnt from customer where   code = '078' or  (name = 'KARUNAKARAN'  and mobile='9847525655'  and office_id= '1') 
 Execution Time:0.00063800811767578

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('078', 'KARUNAKARAN', '1', '9847525655', '', '', '16116', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0027990341186523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063180923461914

select count(*) as cnt  from sales_master where   sales_id='80' and office_id= '1' 
 Execution Time:0.0006411075592041

select * from office where  office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from customer where customer_id='82'  and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from customer where   code = '079' or  (name = 'DR.RATHEESH'  and mobile='9447089619'  and office_id= '1') 
 Execution Time:0.00060296058654785

select count(*) as cnt from customer where   code = '079' or  (name = 'DR.RATHEESH'  and mobile='9447089619'  and office_id= '1') 
 Execution Time:0.00060296058654785

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('079', 'DR.RATHEESH', '1', '9447089619', '', '', '42905', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0022687911987305

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054502487182617

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00031590461730957

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00026702880859375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA TRENDFREE SATIN' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA TRENDFREE SATIN' and office_id= '1' 
 Execution Time:0.00041699409484863

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA TRENDFREE SATIN', '1', '2', '2021-03-19', '5200', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.017925977706909

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045180320739746

select count(*) as cnt from customer where   code = '080' or  (name = 'RAJALAKSHMI'  and mobile='9496297338'  and office_id= '1') 
 Execution Time:0.0003972053527832

select count(*) as cnt from customer where   code = '080' or  (name = 'RAJALAKSHMI'  and mobile='9496297338'  and office_id= '1') 
 Execution Time:0.0003972053527832

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('080', 'RAJALAKSHMI', '2', '9496297338', '', '', '42900', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0059881210327148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027799606323242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010759830474854

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055694580078125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from customer where   code = '081' or  (name = 'RITHU SANDHYA'  and mobile='9847504233'  and office_id= '1') 
 Execution Time:0.00064206123352051

select count(*) as cnt from customer where   code = '081' or  (name = 'RITHU SANDHYA'  and mobile='9847504233'  and office_id= '1') 
 Execution Time:0.00064206123352051

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('081', 'RITHU SANDHYA', '2', '9847504233', '', '', '42907', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0019679069519043

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00034189224243164

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00025415420532227

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00048208236694336

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00021600723266602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from lens_master where   code = '0' and name = 'OMEGA SV HMC' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from lens_master where   code = '0' and name = 'OMEGA SV HMC' and office_id= '1' 
 Execution Time:0.00069403648376465

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'OMEGA SV HMC', '1', '2', '', '700', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0020809173583984

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from customer where   code = '082' or  (name = 'SANDEEP M'  and mobile='9495706493'  and office_id= '1') 
 Execution Time:0.00046706199645996

select count(*) as cnt from customer where   code = '082' or  (name = 'SANDEEP M'  and mobile='9495706493'  and office_id= '1') 
 Execution Time:0.00046706199645996

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('082', 'SANDEEP M', '1', '9495706493', '', '', '40713', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028839111328125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from customer where   code = '083' or  (name = 'ROHIT ABRAHAM'  and mobile='9496718259'  and office_id= '1') 
 Execution Time:0.00061798095703125

select count(*) as cnt from customer where   code = '083' or  (name = 'ROHIT ABRAHAM'  and mobile='9496718259'  and office_id= '1') 
 Execution Time:0.00061798095703125

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('083', 'ROHIT ABRAHAM', '1', '9496718259', '', '', '42912', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028839111328125

select count(*) as cnt from customer where customer_id='87'  and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from customer where    customer_id!='87' and    code = '083'  and   name = 'SOUMINI MV' and mobile='9562784323'  and office_id= '1' 
 Execution Time:0.00051712989807129

UPDATE `customer` SET `code` = '083', `name` = 'SOUMINI MV', `gender` = '2', `mobile` = '9562784323', `alter_mobile` = '', `email_id` = '', `mrd` = '14877', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '87' 
 Execution Time:0.0051300525665283

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061917304992676

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048398971557617

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0011799335479736

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00061821937561035

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026392936706543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from customer where   code = '084' or  (name = 'THANKAMANI'  and mobile='9495426913'  and office_id= '1') 
 Execution Time:0.00042009353637695

select count(*) as cnt from customer where   code = '084' or  (name = 'THANKAMANI'  and mobile='9495426913'  and office_id= '1') 
 Execution Time:0.00042009353637695

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('084', 'THANKAMANI', '2', '9495426913', '', '', '42914', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0047059059143066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048089027404785

select count(*) as cnt from customer where   code = '085' or  (name = 'SONIYA RAJESH'  and mobile='9895436575'  and office_id= '1') 
 Execution Time:0.00039005279541016

select count(*) as cnt from customer where   code = '085' or  (name = 'SONIYA RAJESH'  and mobile='9895436575'  and office_id= '1') 
 Execution Time:0.00039005279541016

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('085', 'SONIYA RAJESH', '2', '9895436575', '', '', '16234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0022130012512207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060892105102539


select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0021181106567383

select count(*) as cnt from customer where   code = '1114' or  (name = 'SURGERY GLASS'  and mobile='12365'  and office_id= '1') 
 Execution Time:0.0011990070343018

select count(*) as cnt from customer where   code = '1114' or  (name = 'SURGERY GLASS'  and mobile='12365'  and office_id= '1') 
 Execution Time:0.0011990070343018

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1114', 'SURGERY GLASS', '1', '12365', '', '', '1114', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00087308883666992

select count(*) as cnt  from sales_master where   sales_id='1028' and office_id= '1' 
 Execution Time:0.00049805641174316

select * from office where  office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt  from sales_master where   sales_id='1034' and office_id= '1' 
 Execution Time:0.00034809112548828

select * from office where  office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from customer where   code = '1115' or  (name = 'RAJEEVN.KV'  and mobile='9495416591'  and office_id= '1') 
 Execution Time:0.0016779899597168

select count(*) as cnt from customer where   code = '1115' or  (name = 'RAJEEVN.KV'  and mobile='9495416591'  and office_id= '1') 
 Execution Time:0.0016779899597168

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1115', 'RAJEEVN.KV', '1', '9495416591', '', '', '1115', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007331371307373

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.0011839866638184

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.0021071434020996

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0035150051116943

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00045084953308105

select count(*) as cnt from lens_master where   code = '0' and name = 'PRO ARRIV PHOTO GRAY 1.56' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from lens_master where   code = '0' and name = 'PRO ARRIV PHOTO GRAY 1.56' and office_id= '1' 
 Execution Time:0.00050687789916992

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'PRO ARRIV PHOTO GRAY 1.56', '1', '2', '', '2250', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.00026702880859375

select count(*) as cnt from lens_master where lens_master_id='106'   and office_id= '1' 
 Execution Time:0.00067400932312012

select count(*) as cnt from lens_master where lens_master_id='106'   and office_id= '1' 
 Execution Time:0.00067400932312012

select * from lens_master where    lens_master_id = '106' and office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from lens_master where lens_master_id!='106' and   code = '0' and name = 'PRO ARRIV PHOTO GRAY HC 1.56' and office_id= '1' 
 Execution Time:0.00070309638977051

UPDATE `lens_master` SET `code` = '0', `name` = 'PRO ARRIV PHOTO GRAY HC 1.56', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '', `purchase_amount` = '2250', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '106' 
 Execution Time:0.00037693977355957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004270076751709

select count(*) as cnt from customer where   code = '1116' or  (name = 'ANIL KUMAR.V M'  and mobile='9961161146'  and office_id= '1') 
 Execution Time:0.00092387199401855

select count(*) as cnt from customer where   code = '1116' or  (name = 'ANIL KUMAR.V M'  and mobile='9961161146'  and office_id= '1') 
 Execution Time:0.00092387199401855

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1116', 'ANIL KUMAR.V M', '1', '9961161146', '', '', '29811', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00035881996154785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066781044006348

select count(*) as cnt  from sales_master where   sales_id='1079' and office_id= '1' 
 Execution Time:0.0013871192932129

select * from office where  office_id= '1' 
 Execution Time:0.00074291229248047

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00076603889465332

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.0006859302520752

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00025606155395508

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from lens_master where lens_master_id='89'   and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from lens_master where lens_master_id='89'   and office_id= '1' 
 Execution Time:0.00032305717468262

select * from lens_master where    lens_master_id = '89' and office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from lens_master where lens_master_id!='89' and   code = '0' and name = 'IRIS RX BLUE BLK 1.56 TEXUS' and office_id= '1' 
 Execution Time:0.00053095817565918

UPDATE `lens_master` SET `code` = '0', `name` = 'IRIS RX BLUE BLK 1.56 TEXUS', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '', `purchase_amount` = '2980', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '89' 
 Execution Time:0.00035500526428223

select count(*) as cnt from lens_master where lens_master_id='100'   and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from lens_master where lens_master_id='100'   and office_id= '1' 
 Execution Time:0.00040888786315918

select * from lens_master where    lens_master_id = '100' and office_id= '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007779598236084

select count(*) as cnt from customer where   code = '1117' or  (name = 'VIJAYAN P'  and mobile='9447498304'  and office_id= '1') 
 Execution Time:0.0011520385742188

select count(*) as cnt from customer where   code = '1117' or  (name = 'VIJAYAN P'  and mobile='9447498304'  and office_id= '1') 
 Execution Time:0.0011520385742188

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1117', 'VIJAYAN P', '1', '9447498304', '', '', '31496', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from customer where   code = '1118' or  (name = 'MICHELLE TREESA JEEVAN'  and mobile='7025540039'  and office_id= '1') 
 Execution Time:0.0011420249938965

select count(*) as cnt from customer where   code = '1118' or  (name = 'MICHELLE TREESA JEEVAN'  and mobile='7025540039'  and office_id= '1') 
 Execution Time:0.0011420249938965

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1118', 'MICHELLE TREESA JEEVAN', '2', '7025540039', '', '', '45467', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063300132751465

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0090909004211426

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.001147985458374

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042200088500977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055909156799316

select count(*) as cnt  from sales_master where   sales_id='891' and office_id= '1' 
 Execution Time:0.0010850429534912

select * from office where  office_id= '1' 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064802169799805

select count(*) as cnt  from sales_master where   sales_id='858' and office_id= '1' 
 Execution Time:0.00067877769470215

select * from office where  office_id= '1' 
 Execution Time:0.00055909156799316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065398216247559

select count(*) as cnt from customer where   code = '1119' or  (name = 'JONATH SHAJI'  and mobile='9072034275'  and office_id= '1') 
 Execution Time:0.001140832901001

select count(*) as cnt from customer where   code = '1119' or  (name = 'JONATH SHAJI'  and mobile='9072034275'  and office_id= '1') 
 Execution Time:0.001140832901001

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1119', 'JONATH SHAJI', '1', '9072034275', '', '', '23956', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00037217140197754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063300132751465

select count(*) as cnt from customer where   code = '1120' or  (name = 'SUSHEELA K P'  and mobile='9744754675'  and office_id= '1') 
 Execution Time:0.0013809204101562

select count(*) as cnt from customer where   code = '1120' or  (name = 'SUSHEELA K P'  and mobile='9744754675'  and office_id= '1') 
 Execution Time:0.0013809204101562

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1120', 'SUSHEELA K P', '2', '9744754675', '', '', '45623', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00043511390686035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013139247894287

select count(*) as cnt  from sales_master where   sales_id='994' and office_id= '1' 
 Execution Time:0.0006558895111084

select * from office where  office_id= '1' 
 Execution Time:0.00055503845214844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063610076904297

select count(*) as cnt from customer where   code = '1121' or  (name = 'BADARUDHEEN'  and mobile='7558871654'  and office_id= '1') 
 Execution Time:0.0012309551239014

select count(*) as cnt from customer where   code = '1121' or  (name = 'BADARUDHEEN'  and mobile='7558871654'  and office_id= '1') 
 Execution Time:0.0012309551239014

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1121', 'BADARUDHEEN', '1', '7558871654', '', '', '6652', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00037980079650879

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066685676574707

select count(*) as cnt from customer where   code = '1122' or  (name = 'SHIRAZ RASHEED'  and mobile='8138045277'  and office_id= '1') 
 Execution Time:0.0011379718780518

select count(*) as cnt from customer where   code = '1122' or  (name = 'SHIRAZ RASHEED'  and mobile='8138045277'  and office_id= '1') 
 Execution Time:0.0011379718780518

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1122', 'SHIRAZ RASHEED', '1', '8138045277', '', '', '45622', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00028204917907715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000823974609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from customer where   code = '1123' or  (name = 'ARAVINDAKSHAN'  and mobile='9847663004'  and office_id= '1') 
 Execution Time:0.0016231536865234

select count(*) as cnt from customer where   code = '1123' or  (name = 'ARAVINDAKSHAN'  and mobile='9847663004'  and office_id= '1') 
 Execution Time:0.0016231536865234

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1123', 'ARAVINDAKSHAN', '1', '9847663004', '', '', '1487', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00061392784118652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042915344238281

select count(*) as cnt from customer where   code = '1124' or  (name = 'FAZAN ISMAIL'  and mobile='9947861128'  and office_id= '1') 
 Execution Time:0.0017688274383545

select count(*) as cnt from customer where   code = '1124' or  (name = 'FAZAN ISMAIL'  and mobile='9947861128'  and office_id= '1') 
 Execution Time:0.0017688274383545

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1124', 'FAZAN ISMAIL', '1', '9947861128', '', '', '12154', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0005340576171875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038003921508789

select count(*) as cnt  from sales_master where   sales_id='924' and office_id= '1' 
 Execution Time:0.00038695335388184

select * from office where  office_id= '1' 
 Execution Time:0.00041985511779785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051498413085938

select count(*) as cnt  from sales_master where   sales_id='944' and office_id= '1' 
 Execution Time:0.00063085556030273

select * from office where  office_id= '1' 
 Execution Time:0.00037884712219238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050711631774902

select count(*) as cnt  from sales_master where   sales_id='1026' and office_id= '1' 
 Execution Time:0.00098991394042969

select * from office where  office_id= '1' 
 Execution Time:0.00065517425537109

select count(*) as cnt from customer where   code = '1125' or  (name = 'SREEJA'  and mobile='07306806282'  and office_id= '1') 
 Execution Time:0.0016078948974609

select count(*) as cnt from customer where   code = '1125' or  (name = 'SREEJA'  and mobile='07306806282'  and office_id= '1') 
 Execution Time:0.0016078948974609

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1125', 'SREEJA', '2', '07306806282', '', '', '1125', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0004432201385498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from customer where   code = '1126' or  (name = 'CHANDRIKA M P'  and mobile='9961564686'  and office_id= '1') 
 Execution Time:0.0011649131774902

select count(*) as cnt from customer where   code = '1126' or  (name = 'CHANDRIKA M P'  and mobile='9961564686'  and office_id= '1') 
 Execution Time:0.0011649131774902

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1126', 'CHANDRIKA M P', '2', '9961564686', '', '', '45626', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00045299530029297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010509490966797

select count(*) as cnt  from sales_master where   sales_id='1093' and office_id= '1' 
 Execution Time:0.00071597099304199

select * from office where  office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from customer where   code = '1127' or  (name = 'SREEJA'  and mobile='12457'  and office_id= '1') 
 Execution Time:0.001054048538208

select count(*) as cnt from customer where   code = '1127' or  (name = 'SREEJA'  and mobile='12457'  and office_id= '1') 
 Execution Time:0.001054048538208

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1127', 'SREEJA', '2', '12457', '', '', '2254', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00083684921264648

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013141632080078

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046706199645996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046706199645996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018692016601562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046706199645996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018692016601562

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0015180110931396

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00046706199645996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018692016601562

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0015180110931396

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034499168395996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014400482177734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00076794624328613

select count(*) as cnt from item_master where   code = '267' or  (name = 'READING GLASS-300' ) and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from item_master where   code = '267' or  (name = 'READING GLASS-300' ) and office_id= '1' 
 Execution Time:0.00046086311340332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('267', 'READING GLASS-300', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051522254943848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016918182373047

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0069160461425781

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0010421276092529

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040483474731445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042915344238281

select count(*) as cnt  from sales_master where   sales_id='940' and office_id= '1' 
 Execution Time:0.0013298988342285

select * from office where  office_id= '1' 
 Execution Time:0.00044012069702148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073814392089844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075697898864746

select count(*) as cnt from customer where   code = '1128' or  (name = 'PREMAN'  and mobile='98547'  and office_id= '1') 
 Execution Time:0.0011820793151855

select count(*) as cnt from customer where   code = '1128' or  (name = 'PREMAN'  and mobile='98547'  and office_id= '1') 
 Execution Time:0.0011820793151855

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1128', 'PREMAN', '1', '98547', '', '', '1241', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063610076904297

select count(*) as cnt  from sales_master where   sales_id='1135' and office_id= '1' 
 Execution Time:0.00030207633972168

select * from office where  office_id= '1' 
 Execution Time:0.00035619735717773

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0022530555725098

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00092887878417969

select count(*) as cnt from customer where   code = '1129' or  (name = 'AMRITHA'  and mobile='7558056949'  and office_id= '1') 
 Execution Time:0.0012118816375732

select count(*) as cnt from customer where   code = '1129' or  (name = 'AMRITHA'  and mobile='7558056949'  and office_id= '1') 
 Execution Time:0.0012118816375732

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1129', 'AMRITHA', '2', '7558056949', '', '', '43708', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013339519500732

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016200542449951


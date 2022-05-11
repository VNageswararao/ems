select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00058317184448242

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00044107437133789

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0011558532714844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00098800659179688

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00043797492980957

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00028395652770996

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00017714500427246

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from customer where   code = '123421' or  (name = 'optical'  and mobile='9000200470'  and office_id= '1') 
 Execution Time:0.0024797916412354

select count(*) as cnt from customer where   code = '123421' or  (name = 'optical'  and mobile='9000200470'  and office_id= '1') 
 Execution Time:0.0024797916412354

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('123421', 'optical', '1', '9000200470', '', '', '', '', '+0.25', '0', '+1.5', '', '+2.5', '0', '+1.5', '', '110', '0', '', '', '6/6', '0', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0088820457458496

select * from office where  office_id= '1' 
 Execution Time:0.0015459060668945

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00080108642578125

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00080108642578125

UPDATE `office` SET `logo` = '', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0022799968719482

select * from office where  office_id= '1' 
 Execution Time:0.00052213668823242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000457763671875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000457763671875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020790100097656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000457763671875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020790100097656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000457763671875

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020790100097656

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058698654174805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057315826416016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042819976806641

select count(*) as cnt from customer where   code = '5896' or  (name = 'ganesh'  and mobile='9000250025'  and office_id= '1') 
 Execution Time:0.00066304206848145

select count(*) as cnt from customer where   code = '5896' or  (name = 'ganesh'  and mobile='9000250025'  and office_id= '1') 
 Execution Time:0.00066304206848145

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('5896', 'ganesh', '1', '9000250025', '', '', '', '', '-0.25', '', '', '', '-1.5', '', '', '', '110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0094208717346191

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

select count(*) as cnt  from sales_master where   sales_id='22' and office_id= '1' 
 Execution Time:0.00031208992004395

select * from office where  office_id= '1' 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058197975158691

select count(*) as cnt  from sales_master where   sales_id='17' and office_id= '1' 
 Execution Time:0.00024008750915527

select * from office where  office_id= '1' 
 Execution Time:0.00036811828613281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050997734069824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00057196617126465

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00026082992553711

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00030183792114258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026488304138184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00064706802368164

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00037789344787598

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00024986267089844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026297569274902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010330677032471

select * from office where  office_id= '1' 
 Execution Time:0.00091695785522461

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00062918663024902

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00040698051452637

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select * from office where  office_id= '1' 
 Execution Time:0.0006871223449707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002138614654541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002138614654541

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002138614654541

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from item_master where   code = '125' or  (name = 'flower' ) and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from item_master where   code = '125' or  (name = 'flower' ) and office_id= '1' 
 Execution Time:0.00055193901062012

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('125', 'flower', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0018260478973389

select count(*) as cnt from lens_classification where type='1' and  code = '123569' or name = 'cr39' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from lens_classification where type='1' and  code = '123569' or name = 'cr39' and office_id= '1' 
 Execution Time:0.0005040168762207

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '123569', 'cr39', '', '1', '1', '1') 
 Execution Time:0.004878044128418

select count(*) as cnt from lens_master where   code = '123569' and name = 'cr39' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from lens_master where   code = '123569' and name = 'cr39' and office_id= '1' 
 Execution Time:0.00042986869812012

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('123569', 'cr39', '10', '8', '2021-01-19', '300', '', '1', '1', '1') 
 Execution Time:0.0097329616546631

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066304206848145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029921531677246

select count(*) as cnt from customer where   code = '123456' or  (name = 'raghu'  and mobile='9000200450'  and office_id= '1') 
 Execution Time:0.0014758110046387

select count(*) as cnt from customer where   code = '123456' or  (name = 'raghu'  and mobile='9000200450'  and office_id= '1') 
 Execution Time:0.0014758110046387

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('123456', 'raghu', '1', '9000200450', '', '', '', '', '+0.25', '', '', '', '+1.5', '', '', '', '110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.019166946411133

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007929801940918

select count(*) as cnt  from sales_master where   sales_id='23' and office_id= '1' 
 Execution Time:0.00074386596679688

select * from office where  office_id= '1' 
 Execution Time:0.00026798248291016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

select * from office where  office_id= '1' 
 Execution Time:0.00042891502380371

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0007779598236084

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00057482719421387

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00017595291137695

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00082898139953613

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00066089630126953

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032401084899902

select * from office where  office_id= '1' 
 Execution Time:0.00065803527832031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0016748905181885

select count(*) as cnt  from sales_master where   sales_id='23' and office_id= '1' 
 Execution Time:0.00046706199645996

select * from office where  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from customer where customer_id='18'  and office_id= '1' 
 Execution Time:0.002047061920166

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042009353637695

select * from office where  office_id= '1' 
 Execution Time:0.00065398216247559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023412704467773

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023412704467773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0015981197357178

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023412704467773

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0015981197357178

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061297416687012

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00050187110900879

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00033998489379883

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00018215179443359

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00047993659973145

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00021600723266602

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00020194053649902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00085806846618652

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00034403800964355

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00017690658569336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025296211242676


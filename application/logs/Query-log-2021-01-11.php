select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0024609565734863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00067615509033203

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from customer where   code = '1254' or  (name = 'a1'  and mobile='1234567672'  and office_id= '1') 
 Execution Time:0.0007479190826416

select count(*) as cnt from customer where   code = '1254' or  (name = 'a1'  and mobile='1234567672'  and office_id= '1') 
 Execution Time:0.0007479190826416

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1254', 'a1', '1', '1234567672', '', '', '', '', '+2.3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0031380653381348

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.0002899169921875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select count(*) as cnt  from sales_master where   sales_id='17' and office_id= '1' 
 Execution Time:0.00023698806762695

select * from office where  office_id= '1' 
 Execution Time:0.0014560222625732

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043392181396484

select count(*) as cnt from supplier where   code = '12345' or  (name = 'lens'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00049614906311035

select count(*) as cnt from supplier where   code = '12345' or  (name = 'lens'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00049614906311035

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('12345', 'lens', '1', '1234567898', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.01172399520874

select count(*) as cnt from lens_classification where type='1' and  code = '02' or name = 'bifocal' and office_id= '1' 
 Execution Time:0.00066280364990234

select count(*) as cnt from lens_classification where type='1' and  code = '02' or name = 'bifocal' and office_id= '1' 
 Execution Time:0.00066280364990234

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '02', 'bifocal', '', '1', '1', '1') 
 Execution Time:0.0058629512786865

select count(*) as cnt from lens_classification where type='1' and  code = '03' or name = 'prograsive' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from lens_classification where type='1' and  code = '03' or name = 'prograsive' and office_id= '1' 
 Execution Time:0.00053691864013672

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '03', 'prograsive', '', '1', '1', '1') 
 Execution Time:0.0042209625244141

select count(*) as cnt from lens_classification where type='2' and  code = '03' or name = 'hmc' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from lens_classification where type='2' and  code = '03' or name = 'hmc' and office_id= '1' 
 Execution Time:0.00033998489379883

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '03', 'hmc', '', '1', '1', '1') 
 Execution Time:0.015339136123657

select count(*) as cnt from lens_classification where type='2' and  code = '04' or name = 'bluecut' and office_id= '1' 
 Execution Time:0.00098109245300293

select count(*) as cnt from lens_classification where type='2' and  code = '04' or name = 'bluecut' and office_id= '1' 
 Execution Time:0.00098109245300293

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '04', 'bluecut', '', '1', '1', '1') 
 Execution Time:0.0092558860778809

select count(*) as cnt from lens_master where   code = '04' and name = 'plastic' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from lens_master where   code = '04' and name = 'plastic' and office_id= '1' 
 Execution Time:0.00037908554077148

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('04', 'plastic', '6', '8', '2021-01-11', '200', '', '1', '1', '1') 
 Execution Time:0.01330304145813

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025010108947754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037884712219238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055313110351562

select count(*) as cnt  from sales_master where   sales_id='11' and office_id= '1' 
 Execution Time:0.00029897689819336

select * from office where  office_id= '1' 
 Execution Time:0.0003352165222168

select count(*) as cnt from customer where customer_id='11'  and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt  from sales_master where   sales_id='18' and office_id= '1' 
 Execution Time:0.00052285194396973

select * from office where  office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt  from sales_master where   sales_id='17' and office_id= '1' 
 Execution Time:0.00023889541625977

select * from office where  office_id= '1' 
 Execution Time:0.00016880035400391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050091743469238

select count(*) as cnt from customer where customer_id='11'  and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt  from sales_master where   sales_id='18' and office_id= '1' 
 Execution Time:0.0036671161651611

select * from office where  office_id= '1' 
 Execution Time:0.010586977005005

select * from office where  office_id= '1' 
 Execution Time:0.00087904930114746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018405914306641

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003211498260498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from customer where   code = '2589' or  (name = 'yuga'  and mobile='9962317535'  and office_id= '1') 
 Execution Time:0.00053191184997559

select count(*) as cnt from customer where   code = '2589' or  (name = 'yuga'  and mobile='9962317535'  and office_id= '1') 
 Execution Time:0.00053191184997559

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('2589', 'yuga', '1', '9962317535', '', '', '', '', '+0.25', '', '', '', '+1.5', '', '', '', '110', '', '', '', '6/6', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0023529529571533

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064992904663086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035619735717773

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00130295753479

select count(*) as cnt  from sales_master where   sales_id='19' and office_id= '1' 
 Execution Time:0.00041604042053223

select * from office where  office_id= '1' 
 Execution Time:0.0011630058288574

select count(*) as cnt from customer where customer_id='12'  and office_id= '1' 
 Execution Time:0.00070405006408691

select * from office where  office_id= '1' 
 Execution Time:0.00048708915710449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050806999206543

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001828670501709

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0010550022125244

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from item_master where item_id='16'  and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from item_master where item_id='15'  and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from item_master where item_id='14'  and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from item_master where item_id='12'  and office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from item_master where item_id='11'  and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from item_master where item_id='7'  and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from item_master where item_id='6'  and office_id= '1' 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0015149116516113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031185150146484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031304359436035

select count(*) as cnt  from sales_master where   sales_id='19' and office_id= '1' 
 Execution Time:0.00044798851013184

select * from office where  office_id= '1' 
 Execution Time:0.0011379718780518

select count(*) as cnt  from sales_master where   sales_id='11' and office_id= '1' 
 Execution Time:0.00050497055053711

select * from office where  office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from customer where customer_id='5'  and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt  from sales_master where   sales_id='13' and office_id= '1' 
 Execution Time:0.00054502487182617

select * from office where  office_id= '1' 
 Execution Time:0.0004730224609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078201293945312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from item_master where item_id='15'  and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from item_master where    item_id!='15' and    code = '123456789'  and   name = 'BLUE CUT22'   and office_id= '1' 
 Execution Time:0.00054192543029785

UPDATE `item_master` SET `code` = '123456789', `name` = 'BLUE CUT22', `category_id` = '2', `brand_id` = '0', `company_id` = '5', `hsn_code` = '', `gst_type` = '1', `tax` = '11', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '15' 
 Execution Time:0.0045030117034912


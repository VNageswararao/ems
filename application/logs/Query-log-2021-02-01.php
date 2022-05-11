select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0023908615112305

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0023908615112305

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0023908615112305

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0023908615112305

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020003318786621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00055384635925293

select count(*) as cnt from item_master where   code = '23432' or  (name = 'king' ) and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from item_master where   code = '23432' or  (name = 'king' ) and office_id= '1' 
 Execution Time:0.00064396858215332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('23432', 'king', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0021169185638428

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from item_master where   code = '456766' or  (name = 'kingtree' ) and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from item_master where   code = '456766' or  (name = 'kingtree' ) and office_id= '1' 
 Execution Time:0.00037813186645508

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('456766', 'kingtree', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0030219554901123

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from customer where   code = '23222' or  (name = 'kkr'  and mobile='7026346140'  and office_id= '1') 
 Execution Time:0.00052404403686523

select count(*) as cnt from customer where   code = '23222' or  (name = 'kkr'  and mobile='7026346140'  and office_id= '1') 
 Execution Time:0.00052404403686523

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('23222', 'kkr', '1', '7026346140', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0054850578308105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073599815368652

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0004270076751709

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0001988410949707

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00012588500976562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040602684020996

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00039792060852051

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00021696090698242

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0002288818359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00040793418884277

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00027990341186523

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00014805793762207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021505355834961

select * from office where  office_id= '1' 
 Execution Time:0.0024311542510986

select * from office where  office_id= '1' 
 Execution Time:0.0004119873046875

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00066494941711426

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00057792663574219

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from office where  office_id= '1' 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010631084442139

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010631084442139

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010631084442139

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010631084442139

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018215179443359

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0006098747253418

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00031614303588867

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.001068115234375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006251335144043


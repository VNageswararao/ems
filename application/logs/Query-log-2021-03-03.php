select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0028529167175293

select count(*) as cnt from supplier where   code = '001' or  (name = 'VISION CARE'  and mobile='9567588388'  and office_id= '1') 
 Execution Time:0.0006251335144043

select count(*) as cnt from supplier where   code = '001' or  (name = 'VISION CARE'  and mobile='9567588388'  and office_id= '1') 
 Execution Time:0.0006251335144043

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('001', 'VISION CARE', '1', '9567588388', '8129999548', '', '', '', '', '', '1', '', '0', '1', '1', '1') 
 Execution Time:0.0051651000976562

select count(*) as cnt from supplier where   code = '002' or  (name = 'IMAGE RX LENS'  and mobile='8891058778'  and office_id= '1') 
 Execution Time:0.00078892707824707

select count(*) as cnt from supplier where   code = '002' or  (name = 'IMAGE RX LENS'  and mobile='8891058778'  and office_id= '1') 
 Execution Time:0.00078892707824707

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('002', 'IMAGE RX LENS', '1', '8891058778', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.0030372142791748

select count(*) as cnt from supplier where   code = '003' or  (name = 'GKB RX LENS PVT LTD'  and mobile='4954040004'  and office_id= '1') 
 Execution Time:0.0004889965057373

select count(*) as cnt from supplier where   code = '003' or  (name = 'GKB RX LENS PVT LTD'  and mobile='4954040004'  and office_id= '1') 
 Execution Time:0.0004889965057373

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('003', 'GKB RX LENS PVT LTD', '1', '4954040004', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.0027580261230469

select count(*) as cnt from supplier where   code = '004' or  (name = 'ISSA AGENCIES'  and mobile='9847519996'  and office_id= '1') 
 Execution Time:0.00046205520629883

select count(*) as cnt from supplier where   code = '004' or  (name = 'ISSA AGENCIES'  and mobile='9847519996'  and office_id= '1') 
 Execution Time:0.00046205520629883

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('004', 'ISSA AGENCIES', '1', '9847519996', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.0025410652160645

select count(*) as cnt from supplier where   code = '005' or  (name = 'C&amp;C OPHTHALMIC'  and mobile='4972700699'  and office_id= '1') 
 Execution Time:0.00034809112548828

select count(*) as cnt from supplier where   code = '005' or  (name = 'C&amp;C OPHTHALMIC'  and mobile='4972700699'  and office_id= '1') 
 Execution Time:0.00034809112548828

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('005', 'C&amp;C OPHTHALMIC', '1', '4972700699', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.0060880184173584

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053691864013672

select * from office where  office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from staff where staff_id='4'  and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from staff where staff_id='4'  and office_id= '1' 
 Execution Time:0.00046491622924805

DELETE FROM `staff`
WHERE `staff_id` = '4' 
 Execution Time:0.0026469230651855

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064802169799805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078392028808594

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064802169799805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078392028808594

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00063586235046387

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064802169799805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078392028808594

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00063586235046387

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0032050609588623

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00064802169799805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078392028808594

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00063586235046387

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0032050609588623

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt  from sales_master where   sales_id='11' and office_id= '1' 
 Execution Time:0.00031805038452148

select * from office where  office_id= '1' 
 Execution Time:0.00034809112548828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030994415283203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024509429931641

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030994415283203

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017595291137695

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078916549682617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00070691108703613

select count(*) as cnt  from sales_master where   sales_id='6' and office_id= '1' 
 Execution Time:0.0008690357208252

select * from office where  office_id= '1' 
 Execution Time:0.00072598457336426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

select count(*) as cnt from customer where   code = '15473' or  (name = 'BEEFATHIMA'  and mobile='8848824208'  and office_id= '1') 
 Execution Time:0.00058794021606445

select count(*) as cnt from customer where   code = '15473' or  (name = 'BEEFATHIMA'  and mobile='8848824208'  and office_id= '1') 
 Execution Time:0.00058794021606445

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15473', 'BEEFATHIMA', '2', '8848824208', '', '', '15473', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0047621726989746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058698654174805

select * from office where  office_id= '1' 
 Execution Time:0.00063490867614746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004730224609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005650520324707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00074005126953125

select count(*) as cnt from customer where   code = '15386' or  (name = 'MADHAVI'  and mobile='8289819054'  and office_id= '1') 
 Execution Time:0.00052595138549805

select count(*) as cnt from customer where   code = '15386' or  (name = 'MADHAVI'  and mobile='8289819054'  and office_id= '1') 
 Execution Time:0.00052595138549805

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('15386', 'MADHAVI', '2', '8289819054', '', '', '15386', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.015743970870972

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007469654083252

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00062417984008789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00062417984008789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00062417984008789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0011069774627686

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00062417984008789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001978874206543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0011069774627686

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select * from office where  office_id= '1' 
 Execution Time:0.00044703483581543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00081014633178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040292739868164

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00081014633178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00081014633178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036382675170898

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00081014633178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040292739868164

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017404556274414

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select * from office where  office_id= '1' 
 Execution Time:0.00044608116149902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079011917114258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013048648834229

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00067591667175293

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00061202049255371

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021505355834961

select count(*) as cnt  from sales_master where   sales_id='10' and office_id= '1' 
 Execution Time:0.00052785873413086

select * from office where  office_id= '1' 
 Execution Time:0.0013179779052734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011250972747803

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00066399574279785

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00065493583679199

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029897689819336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073814392089844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004420280456543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032782554626465

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003809928894043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00095510482788086

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003809928894043

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00066494941711426

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00083684921264648

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0036499500274658

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00062680244445801

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00066304206848145

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00025391578674316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022315979003906

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0004889965057373

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00037908554077148

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00017595291137695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00015115737915039

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00072789192199707

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00045490264892578

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00025081634521484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025606155395508

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00064301490783691

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00054287910461426

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00022983551025391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020194053649902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053596496582031

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00078487396240234

select * from office where  office_id= '1' 
 Execution Time:0.00081181526184082

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00047612190246582

select * from office where  office_id= '1' 
 Execution Time:0.00034308433532715

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00088810920715332

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00083804130554199

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00068306922912598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059890747070312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047111511230469


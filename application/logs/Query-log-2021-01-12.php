select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0022029876708984

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036096572875977

select * from office where  office_id= '1' 
 Execution Time:0.0028791427612305

select * from office where  office_id= '1' 
 Execution Time:0.00053906440734863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022792816162109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022792816162109

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037193298339844

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022792816162109

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from item_master where   code = '123' or  (name = 'SKY' ) and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from item_master where   code = '12315' or  (name = 'SKY1' ) and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from item_master where   code = '12315' or  (name = 'SKY1' ) and office_id= '1' 
 Execution Time:0.00032711029052734

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12315', 'SKY1', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049169063568115

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from supplier where   code = '343' or  (name = 'ROSHAN OPTICAL'  and mobile='1234567892'  and office_id= '1') 
 Execution Time:0.00049686431884766

select count(*) as cnt from supplier where   code = '343' or  (name = 'ROSHAN OPTICAL'  and mobile='1234567892'  and office_id= '1') 
 Execution Time:0.00049686431884766

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('343', 'ROSHAN OPTICAL', '1', '1234567892', '', '', '', '', '', '', '1', '765746465654554', '2', '1', '1', '1') 
 Execution Time:0.0067939758300781

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0008399486541748

select count(*) as cnt from customer where   code = '9098' or  (name = 'RAJA'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00058984756469727

select count(*) as cnt from customer where   code = '9098' or  (name = 'RAJA'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00058984756469727

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('9098', 'RAJA', '1', '1234567898', '', '', '', '', '-0.25', '', '', '', '-50', '', '', '', '110', '', '', '', '6/6', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.005897045135498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039815902709961

select count(*) as cnt  from sales_master where   sales_id='20' and office_id= '1' 
 Execution Time:0.00041508674621582

select * from office where  office_id= '1' 
 Execution Time:0.00026082992553711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029110908508301

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058817863464355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058817863464355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058817863464355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025701522827148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058817863464355

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025701522827148

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001046895980835

select count(*) as cnt  from sales_master where   sales_id='20' and office_id= '1' 
 Execution Time:0.00067901611328125

select * from office where  office_id= '1' 
 Execution Time:0.00059604644775391


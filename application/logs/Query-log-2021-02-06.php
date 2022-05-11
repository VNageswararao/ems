select * from office where  office_id= '1' 
 Execution Time:0.0026998519897461

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036215782165527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036215782165527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036215782165527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036215782165527

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020909309387207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047421455383301

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048518180847168

select count(*) as cnt from supplier where   code = '12345685' or  (name = 'balaji'  and mobile='1236569825'  and office_id= '1') 
 Execution Time:0.00031900405883789

select count(*) as cnt from supplier where   code = '12345685' or  (name = 'balaji'  and mobile='1236569825'  and office_id= '1') 
 Execution Time:0.00031900405883789

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('12345685', 'balaji', '1', '1236569825', '', '', '', '', '', '', '1', '', '2', '1', '1', '1') 
 Execution Time:0.0031712055206299

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021481513977051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021481513977051

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021481513977051

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from tax_master where   tax_id='12' and office_id= '1' 
 Execution Time:0.00028586387634277

select count(*) as cnt from item_master where   code = '52' or  (name = 'net' ) and office_id= '1' 
 Execution Time:0.0026800632476807

select count(*) as cnt from item_master where   code = '52' or  (name = 'net' ) and office_id= '1' 
 Execution Time:0.0026800632476807

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('52', 'net', '2', '0', '7', '', '1', '12', '9', '9', '', '1', '1', '1') 
 Execution Time:0.0067391395568848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select count(*) as cnt from customer where   code = '5464654654' or  (name = 'anitha'  and mobile='4567891233'  and office_id= '1') 
 Execution Time:0.00040984153747559

select count(*) as cnt from customer where   code = '5464654654' or  (name = 'anitha'  and mobile='4567891233'  and office_id= '1') 
 Execution Time:0.00040984153747559

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('5464654654', 'anitha', '2', '4567891233', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.002532958984375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00050806999206543

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00023412704467773

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00015592575073242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064992904663086

select count(*) as cnt  from sales_master where   sales_id='43' and office_id= '1' 
 Execution Time:0.00035810470581055

select * from office where  office_id= '1' 
 Execution Time:0.00032711029052734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005030632019043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001035213470459

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011351108551025


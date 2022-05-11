select * from office where  office_id= '1' 
 Execution Time:0.0012960433959961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013949871063232

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013949871063232

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013949871063232

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0016741752624512

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013949871063232

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017809867858887

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0016741752624512

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00076103210449219

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00033307075500488

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00024008750915527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0020380020141602

select count(*) as cnt from customer where   code = '111000' or  (name = 'rajan'  and mobile='9000255158'  and office_id= '1') 
 Execution Time:0.006328821182251

select count(*) as cnt from customer where   code = '111000' or  (name = 'rajan'  and mobile='9000255158'  and office_id= '1') 
 Execution Time:0.006328821182251

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('111000', 'rajan', '1', '9000255158', '', '', '', '', '+2', '', '', '', '+2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.037154912948608

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043487548828125

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00066804885864258

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00031590461730957

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00014615058898926

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007779598236084

select count(*) as cnt from supplier where   code = '7867' or  (name = 'chamanthi opticals'  and mobile='1234567890'  and office_id= '1') 
 Execution Time:0.00058984756469727

select count(*) as cnt from supplier where   code = '7867' or  (name = 'chamanthi opticals'  and mobile='1234567890'  and office_id= '1') 
 Execution Time:0.00058984756469727

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('7867', 'chamanthi opticals', '1', '1234567890', '', '', '', '', '', '', '1', '', '2', '1', '1', '1') 
 Execution Time:0.0017340183258057

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063610076904297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063610076904297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063610076904297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028395652770996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063610076904297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028395652770996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.0037298202514648

select count(*) as cnt from item_master where   code = '4567' or  (name = 'star blue' ) and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from item_master where   code = '4567' or  (name = 'star blue' ) and office_id= '1' 
 Execution Time:0.00069808959960938

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('4567', 'star blue', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051479339599609

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047612190246582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055599212646484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

select * from office where  office_id= '1' 
 Execution Time:0.0047979354858398

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00074100494384766

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060200691223145

select count(*) as cnt  from sales_master where   sales_id='29' and office_id= '1' 
 Execution Time:0.00036501884460449

select * from office where  office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from customer where customer_id='20'  and office_id= '1' 
 Execution Time:0.00060391426086426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041890144348145

select * from office where  office_id= '1' 
 Execution Time:0.00082015991210938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059890747070312

select count(*) as cnt  from sales_master where   sales_id='19' and office_id= '1' 
 Execution Time:0.00053310394287109

select * from office where  office_id= '1' 
 Execution Time:0.00045204162597656

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00057315826416016

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00021219253540039

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024604797363281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005040168762207

select count(*) as cnt  from sales_master where   sales_id='14' and office_id= '1' 
 Execution Time:0.00034499168395996

select * from office where  office_id= '1' 
 Execution Time:0.00048685073852539

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073003768920898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073003768920898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018692016601562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073003768920898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018692016601562

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073003768920898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018692016601562

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select count(*) as cnt from item_master where   code = '258' or  (name = 'book' ) and office_id= '1' 
 Execution Time:0.00052618980407715

select count(*) as cnt from item_master where   code = '258' or  (name = 'book' ) and office_id= '1' 
 Execution Time:0.00052618980407715

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('258', 'book', '58', '0', '5', '', '2', '11', '', '', '', '1', '1', '1') 
 Execution Time:0.004953145980835

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00047993659973145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0014941692352295

select count(*) as cnt  from sales_master where   sales_id='11' and office_id= '1' 
 Execution Time:0.00041103363037109

select * from office where  office_id= '1' 
 Execution Time:0.00032711029052734

select * from office where  office_id= '1' 
 Execution Time:0.00055599212646484

select * from office where  office_id= '1' 
 Execution Time:0.00044989585876465

select * from office where  office_id= '1' 
 Execution Time:0.00047707557678223

select * from office where  office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00040602684020996

UPDATE `office` SET `company_name` = 'Mnopticals', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'sd', `printable_company_name` = 'Mnoptical', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'a@gmail.com', `declaration` = 'ges', `printable_company_address` = '4025 Oak Avenue,\r\nMelbourne,\r\nFlorida 32940,\r\nUSA', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0085930824279785

select * from office where  office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0002741813659668

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0002741813659668

UPDATE `office` SET `company_name` = 'Mnopticals', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'sd', `printable_company_name` = 'Mnoptical', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'a@gmail.com', `declaration` = 'test', `printable_company_address` = '4025 Oak Avenue,\r\nMelbourne,\r\nFlorida 32940,\r\nUSA', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0020020008087158

select * from office where  office_id= '1' 
 Execution Time:0.00061988830566406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00031208992004395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010941028594971

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010941028594971

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010941028594971

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0011239051818848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010941028594971

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018000602722168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0011239051818848

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00084614753723145

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00022792816162109

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00038003921508789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021910667419434


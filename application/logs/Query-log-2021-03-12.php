select * from office where  office_id= '1' 
 Execution Time:0.0012989044189453

select * from office where  office_id= '1' 
 Execution Time:0.0011310577392578

select * from office where  office_id= '1' 
 Execution Time:0.00056600570678711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0026538372039795

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056791305541992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045609474182129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033187866210938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011930465698242

select * from office where  office_id= '1' 
 Execution Time:0.001101016998291

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00048303604125977

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00071215629577637

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00023198127746582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061511993408203

select * from office where  office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from lens_classification where type='1' and  code = '01' or name = 'NONE' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from lens_classification where type='1' and  code = '01' or name = 'NONE' and office_id= '1' 
 Execution Time:0.00038385391235352

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '01', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0032858848571777

select count(*) as cnt from lens_classification where type='2' and  code = '01' or name = 'NONE' and office_id= '1' 
 Execution Time:0.0006110668182373

select count(*) as cnt from lens_classification where type='2' and  code = '010' or name = 'NONE' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from lens_classification where type='2' and  code = '010' or name = 'NONE' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from lens_classification where type='2' and  code = '001' or name = 'none' and office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from lens_classification where type='2' and  code = '001' or name = 'none' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from lens_classification where type='2' and  code = '001' or name = 'COATING' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from lens_classification where type='2' and  code = '001' or name = 'COATING' and office_id= '1' 
 Execution Time:0.0003809928894043

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '001', 'COATING', '', '1', '1', '1') 
 Execution Time:0.0047979354858398

select count(*) as cnt from lens_master where   code = '01' and name = 'PROGRESSIVE HC' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from lens_master where   code = '01' and name = 'PROGRESSIVE HC' and office_id= '1' 
 Execution Time:0.00048589706420898

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('01', 'PROGRESSIVE HC', '1', '2', '2021-03-12', '1500', '', '1', '1', '1') 
 Execution Time:0.0051369667053223

select * from office where  office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00036311149597168

UPDATE `office` SET `company_name` = 'THE PAYYANUR EYE FOUNDATION', `license_no` = '130220012000040', `company_mobile` = '8078922031', `company_phone` = '8078922031', `email_id` = 'payyanureyefoundation@gmail.com', `address` = 'THE PAYYANUR EYE FOUNDATION MUKUNDA HOSPITAL BUILDING  PAYYANUR 670307', `printable_company_name` = 'THE PAYYANUR EYE FOUNDATION', `printable_company_phone` = '8078922031', `printable_company_mobile` = '8078922031', `printable_emailid` = 'payyanureyefoundation@gmail.com', `declaration` = '1.Ordered Glasses have to be collected within 30 days from the date of order\r\n2.No claim will be entertained after this period.\r\n3.ADVANCE AMOUNT is not refundable.', `gstin_no` = '32AAUFP1292K2ZS', `printable_company_address` = 'THE PAYYANUR EYE FOUNDATION MUKUNDA HOSPITAL BUILDING  PAYYANUR 670307', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0053369998931885

select count(*) as cnt from lens_master where   code = '02' and name = 'PROGRESSIVE RX HC' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from lens_master where   code = '02' and name = 'PROGRESSIVE RX HC' and office_id= '1' 
 Execution Time:0.00035405158996582

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('02', 'PROGRESSIVE RX HC', '1', '2', '2021-03-12', '1700', '', '1', '1', '1') 
 Execution Time:0.0044598579406738

select count(*) as cnt from lens_master where lens_master_id='2'   and office_id= '1' 
 Execution Time:0.00028419494628906

select count(*) as cnt from lens_master where lens_master_id='2'   and office_id= '1' 
 Execution Time:0.00028419494628906

DELETE FROM `lens_master`
WHERE `lens_master_id` = '2' 
 Execution Time:0.0046470165252686

select count(*) as cnt from lens_master where   code = '01' and name = 'PROGRESSIVE RX HC' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from lens_master where   code = '01' and name = 'PROGRESSIVE RX HC' and office_id= '1' 
 Execution Time:0.00058913230895996

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('01', 'PROGRESSIVE RX HC', '1', '2', '2021-03-12', '1700', '', '1', '1', '1') 
 Execution Time:0.004796028137207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037720203399658

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from customer where   code = '1' or  (name = 'TRAIL'  and mobile='9999999999'  and office_id= '1') 
 Execution Time:0.0005180835723877

select count(*) as cnt from customer where   code = '1' or  (name = 'TRAIL'  and mobile='9999999999'  and office_id= '1') 
 Execution Time:0.0005180835723877

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1', 'TRAIL', '1', '9999999999', '9999999999', '', '99999', 'PAYYANUR EYE FOUNDATION', '', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0031919479370117

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046420097351074

select * from office where  office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00061798095703125

UPDATE `office` SET `company_name` = 'THE PAYYANUR EYE FOUNDATION', `license_no` = '130220012000040', `company_mobile` = '8078922031', `company_phone` = '04985202031', `email_id` = 'payyanureyefoundation@gmail.com', `address` = 'THE PAYYANUR EYE FOUNDATION MUKUNDA HOSPITAL BUILDING  PAYYANUR 670307', `printable_company_name` = 'THE PAYYANUR EYE FOUNDATION', `printable_company_phone` = '04985202031', `printable_company_mobile` = '8078922031', `printable_emailid` = 'payyanureyefoundation@gmail.com', `declaration` = '1.Ordered Glasses have to be collected within 30 days from the date of order\r\n2.No claim will be entertained after this period.\r\n3.ADVANCE AMOUNT is not refundable.', `gstin_no` = '32AAUFP1292K2ZS', `printable_company_address` = 'THE PAYYANUR EYE FOUNDATION MUKUNDA HOSPITAL BUILDING  PAYYANUR 670307', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0028989315032959

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00043296813964844

UPDATE `office` SET `company_name` = 'THE PAYYANUR EYE FOUNDATION', `license_no` = '130220012000040', `company_mobile` = '8078922031', `company_phone` = '04985202031', `email_id` = 'payyanureyefoundation@gmail.com', `address` = 'THE PAYYANUR EYE FOUNDATION MUKUNDA HOSPITAL BUILDING  PAYYANUR 670307', `printable_company_name` = 'THE PAYYANUR EYE FOUNDATION', `printable_company_phone` = '04985202031', `printable_company_mobile` = '8078922031', `printable_emailid` = 'payyanureyefoundation@gmail.com', `declaration` = '1.Ordered Glasses have to be collected within 30 days from the date of order\r\n2.No claim will be entertained after this period.\r\n3.ADVANCE AMOUNT is not refundable.', `gstin_no` = '32AAUFP1292K2ZS', `printable_company_address` = 'THE PAYYANUR EYE FOUNDATION MUKUNDA HOSPITAL BUILDING  PAYYANUR 670307', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.00039410591125488

select * from lens_master where    lens_master_id = '3' and office_id= '1' 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003659725189209

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054097175598145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054097175598145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022602081298828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016021728515625

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054097175598145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022602081298828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016021728515625

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0023550987243652

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054097175598145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022602081298828

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016021728515625

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0023550987243652

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00081801414489746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037980079650879

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from customer where   code = '00000' or  (name = 'TRAIL'  and mobile='9999999991'  and office_id= '1') 
 Execution Time:0.00042390823364258

select count(*) as cnt from customer where   code = '00000' or  (name = 'TRAIL'  and mobile='9999999991'  and office_id= '1') 
 Execution Time:0.00042390823364258

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('00000', 'TRAIL', '1', '9999999991', '', '', '00000', 'PAYYANUR', '', 'PLANO', '', 'PLANO', '', '', '', '', '', '', '', '', '', '6/6', '', '6/6', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.005126953125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from customer where customer_id='2'  and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from customer where customer_id='2'  and office_id= '1' 
 Execution Time:0.00029802322387695

DELETE FROM `customer`
WHERE `customer_id` = '2' 
 Execution Time:0.0064558982849121

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040411949157715

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051498413085938

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077009201049805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077009201049805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021910667419434

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077009201049805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021910667419434

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00048208236694336

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00077009201049805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037908554077148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021910667419434

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from staff where  code = '1' or name = 'FARZEEN' or mobile = '04985202031' and office_id= '1' 
 Execution Time:0.00043892860412598

select count(*) as cnt from staff where  code = '1' or name = 'FARZEEN' or mobile = '04985202031' and office_id= '1' 
 Execution Time:0.00043892860412598

INSERT INTO `staff` (`code`, `name`, `mobile`, `email`, `address`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'FARZEEN', '04985202031', '', 'PAYYANUR', '', '1', '1', '1') 
 Execution Time:0.0029170513153076

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058507919311523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078415870666504

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00054287910461426

select * from office where  office_id= '1' 
 Execution Time:0.00056791305541992

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00033998489379883

select * from office where  office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00043916702270508

select * from office where  office_id= '1' 
 Execution Time:0.00048089027404785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049495697021484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048089027404785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034117698669434

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00045204162597656

select * from office where  office_id= '1' 
 Execution Time:0.00034809112548828

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0004429817199707

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00057196617126465

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00022983551025391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select count(*) as cnt from staff where  code = '2' or name = 'LATHEESH' or mobile = '04985202031' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from staff where  code = '2' or name = 'LATHEESH' or mobile = '04985202031' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from staff where  code = '2' or name = 'LATHEESH' or mobile = '0000000000' and office_id= '1' 
 Execution Time:0.00061488151550293

select count(*) as cnt from staff where  code = '2' or name = 'LATHEESH' or mobile = '0000000000' and office_id= '1' 
 Execution Time:0.00061488151550293

INSERT INTO `staff` (`code`, `name`, `mobile`, `email`, `address`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', 'LATHEESH', '0000000000', '', 'PAYYANUR', '', '1', '1', '1') 
 Execution Time:0.0021500587463379

select count(*) as cnt from staff where  code = '2' or name = 'SHINE' or mobile = '1111111111' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from staff where  code = '3' or name = 'SHINE' or mobile = '1111111111' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from staff where  code = '3' or name = 'SHINE' or mobile = '1111111111' and office_id= '1' 
 Execution Time:0.00040984153747559

INSERT INTO `staff` (`code`, `name`, `mobile`, `email`, `address`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', 'SHINE', '1111111111', '', 'PAYYANUR', '', '1', '1', '1') 
 Execution Time:0.0055651664733887

select count(*) as cnt from staff where staff_id!='2'  and  code = '2' and name = 'LATHEESH' and mobile = '2222222222' and office_id= '1' 
 Execution Time:0.0005340576171875

UPDATE `staff` SET `code` = '2', `name` = 'LATHEESH', `mobile` = '2222222222', `email` = '', `address` = 'PAYYANUR', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `staff_id` = '2' 
 Execution Time:0.0026199817657471

select count(*) as cnt from staff where staff_id!='1'  and  code = '1' and name = 'FARZEEN' and mobile = '1111111111' and office_id= '1' 
 Execution Time:0.00037598609924316

UPDATE `staff` SET `code` = '1', `name` = 'FARZEEN', `mobile` = '1111111111', `email` = '', `address` = 'PAYYANUR', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `staff_id` = '1' 
 Execution Time:0.0089790821075439

select count(*) as cnt from staff where staff_id!='3'  and  code = '3' and name = 'SHINE' and mobile = '3333333333' and office_id= '1' 
 Execution Time:0.00031805038452148

UPDATE `staff` SET `code` = '3', `name` = 'SHINE', `mobile` = '3333333333', `email` = '', `address` = 'PAYYANUR', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `staff_id` = '3' 
 Execution Time:0.0029149055480957

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00067496299743652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00067496299743652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00067496299743652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00067496299743652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016593933105469

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select count(*) as cnt from item_master where item_id='186'  and office_id= '1' 
 Execution Time:0.00075387954711914

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036907196044922

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00036120414733887

select * from office where  office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00035595893859863

select * from office where  office_id= '1' 
 Execution Time:0.00052094459533691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072193145751953

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038599967956543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059390068054199

select * from office where  office_id= '1' 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051093101501465

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00036001205444336

select * from office where  office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00026488304138184

select * from office where  office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.0023980140686035

select * from office where  office_id= '1' 
 Execution Time:0.0013999938964844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064396858215332

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00029397010803223

select * from office where  office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00087118148803711

select * from office where  office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00033998489379883

select * from office where  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00050187110900879

select * from office where  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.0003349781036377

select * from office where  office_id= '1' 
 Execution Time:0.00020909309387207

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00036501884460449

select * from office where  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.0005490779876709

select * from office where  office_id= '1' 
 Execution Time:0.00033283233642578

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00030803680419922

select * from office where  office_id= '1' 
 Execution Time:0.0002448558807373

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from customer where    customer_id!='1' and    code = '1'  and   name = 'TRAIL' and mobile='0000000000'  and office_id= '1' 
 Execution Time:0.00037193298339844

UPDATE `customer` SET `code` = '1', `name` = 'TRAIL', `gender` = '1', `mobile` = '0000000000', `alter_mobile` = '0000000000', `email_id` = '', `mrd` = '99999', `address` = 'PAYYANUR EYE FOUNDATION', `description` = '', `resph1` = '0.00', `resph2` = '', `resph3` = '0.00', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1' 
 Execution Time:0.0049409866333008

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from customer where    customer_id!='1' and    code = '1'  and   name = 'TRAIL' and mobile='0000000000'  and office_id= '1' 
 Execution Time:0.00038290023803711

UPDATE `customer` SET `code` = '1', `name` = 'TRAIL', `gender` = '1', `mobile` = '0000000000', `alter_mobile` = '0000000000', `email_id` = '', `mrd` = '99999', `address` = 'PAYYANUR EYE FOUNDATION', `description` = '', `resph1` = '0.00', `resph2` = '', `resph3` = '0.00', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1' 
 Execution Time:0.00035786628723145

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00039792060852051

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00039505958557129

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052118301391602

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00049686431884766

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00046586990356445

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00016689300537109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037693977355957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053095817565918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049185752868652

select * from office where  office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.0002598762512207

select * from office where  office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00049400329589844

select * from office where  office_id= '1' 
 Execution Time:0.00063395500183105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039315223693848

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00028085708618164

select * from office where  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00045084953308105

select * from office where  office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.0005190372467041

select * from office where  office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00041794776916504

select * from office where  office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00049686431884766

select * from office where  office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00026988983154297

select * from office where  office_id= '1' 
 Execution Time:0.00022196769714355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004880428314209

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00036907196044922

select * from office where  office_id= '1' 
 Execution Time:0.00021505355834961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040793418884277

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00032281875610352

select * from office where  office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00039792060852051

select * from office where  office_id= '1' 
 Execution Time:0.00021815299987793

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00035405158996582

select * from office where  office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00024914741516113

select * from office where  office_id= '1' 
 Execution Time:0.00018215179443359

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00082588195800781

select * from office where  office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00097393989562988

select * from office where  office_id= '1' 
 Execution Time:0.00099015235900879

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00031495094299316

select * from office where  office_id= '1' 
 Execution Time:0.00037980079650879

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00033402442932129

select * from office where  office_id= '1' 
 Execution Time:0.00021600723266602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049400329589844

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00057005882263184

select * from office where  office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036001205444336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006258487701416

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045585632324219

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00077915191650391

select * from office where  office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.00040888786315918

select * from lens_master where    lens_master_id = '1' and office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from lens_master where lens_master_id='3'   and office_id= '1' 
 Execution Time:0.00031304359436035

select * from lens_master where    lens_master_id = '3' and office_id= '1' 
 Execution Time:0.0012388229370117

select count(*) as cnt from lens_master where lens_master_id!='3' and   code = '0' and name = 'PROGRESSIVE RX HC' and office_id= '1' 
 Execution Time:0.00030016899108887

UPDATE `lens_master` SET `code` = '0', `name` = 'PROGRESSIVE RX HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '1700', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '3' 
 Execution Time:0.0024659633636475

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from lens_master where lens_master_id='1'   and office_id= '1' 
 Execution Time:0.00046610832214355

select * from lens_master where    lens_master_id = '1' and office_id= '1' 
 Execution Time:0.00020503997802734

select count(*) as cnt from lens_master where lens_master_id!='1' and   code = '0' and name = 'PROGRESSIVE HC' and office_id= '1' 
 Execution Time:0.00048708915710449

UPDATE `lens_master` SET `code` = '0', `name` = 'PROGRESSIVE HC', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-12', `purchase_amount` = '1500', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '1' 
 Execution Time:0.0051250457763672

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF-HC' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF-HC' and office_id= '1' 
 Execution Time:0.00031304359436035

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'KBF-HC', '1', '2', '2021-03-12', '280', '', '1', '1', '1') 
 Execution Time:0.0045549869537354

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF COMPND' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF COMPND' and office_id= '1' 
 Execution Time:0.00051307678222656

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'KBF COMPND', '1', '2', '2021-03-12', '480', '', '1', '1', '1') 
 Execution Time:0.0053949356079102

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from lens_master where lens_master_id='5'   and office_id= '1' 
 Execution Time:0.00039792060852051

select * from lens_master where    lens_master_id = '5' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from lens_master where lens_master_id='4'   and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from lens_master where lens_master_id='4'   and office_id= '1' 
 Execution Time:0.00039792060852051

select * from lens_master where    lens_master_id = '4' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF-HMC NORMAL' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF-HMC NORMAL' and office_id= '1' 
 Execution Time:0.00045204162597656

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('0', 'KBF-HMC NORMAL', '1', '2', '2021-03-12', '650', '', '1', '1', '1') 
 Execution Time:0.0046079158782959

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00038719177246094

select count(*) as cnt from lens_master where lens_master_id='6'   and office_id= '1' 
 Execution Time:0.00038719177246094

select * from lens_master where    lens_master_id = '6' and office_id= '1' 
 Execution Time:0.00032305717468262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058484077453613

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.00064802169799805

select * from office where  office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from customer where   code = '02' or  (name = 'THAMBAYI K'  and mobile='1234567890'  and office_id= '1') 
 Execution Time:0.00028395652770996

select count(*) as cnt from customer where   code = '02' or  (name = 'THAMBAYI K'  and mobile='1234567890'  and office_id= '1') 
 Execution Time:0.00028395652770996

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('02', 'THAMBAYI K', '2', '1234567890', '', '', '38854', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0026891231536865

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062298774719238

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00050902366638184

select * from office where  office_id= '1' 
 Execution Time:0.00029683113098145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select count(*) as cnt  from sales_master where   sales_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select * from office where  office_id= '1' 
 Execution Time:0.0011270046234131

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00037097930908203

select * from office where  office_id= '1' 
 Execution Time:0.00042819976806641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from customer where   code = '03' or  (name = 'USHA'  and mobile='9874563210'  and office_id= '1') 
 Execution Time:0.00085186958312988

select count(*) as cnt from customer where   code = '03' or  (name = 'USHA'  and mobile='9874563210'  and office_id= '1') 
 Execution Time:0.00085186958312988

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('03', 'USHA', '2', '9874563210', '', '', '3570', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0062839984893799

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004730224609375

select count(*) as cnt  from sales_master where   sales_id='3' and office_id= '1' 
 Execution Time:0.00028800964355469

select * from office where  office_id= '1' 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061416625976562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058889389038086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0009160041809082

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014185905456543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from item_master where item_id='186'  and office_id= '1' 
 Execution Time:0.00045204162597656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from supplier where supplier_id='1'  and office_id= '1' 
 Execution Time:0.00052905082702637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042295455932617

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00028681755065918

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from customer where    customer_id!='1' and    code = '1'  and   name = 'TRAIL' and mobile='1234569877'  and office_id= '1' 
 Execution Time:0.00039911270141602

UPDATE `customer` SET `code` = '1', `name` = 'TRAIL', `gender` = '1', `mobile` = '1234569877', `alter_mobile` = '', `email_id` = '', `mrd` = '14879', `address` = 'PAYYANUR EYE FOUNDATION', `description` = '', `resph1` = '0.00', `resph2` = '', `resph3` = '0.00', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1' 
 Execution Time:0.0055620670318604

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054597854614258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062990188598633

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00037097930908203

select * from office where  office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt  from sales_master where   sales_id='3' and office_id= '1' 
 Execution Time:0.00043201446533203

select * from office where  office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.0002899169921875

select * from office where  office_id= '1' 
 Execution Time:0.00022983551025391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029706954956055

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00047993659973145

select * from office where  office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt  from sales_master where   sales_id='3' and office_id= '1' 
 Execution Time:0.00029206275939941

select * from office where  office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.0005490779876709

select * from office where  office_id= '1' 
 Execution Time:0.0002739429473877

select count(*) as cnt  from sales_master where   sales_id='3' and office_id= '1' 
 Execution Time:0.0004580020904541

select * from office where  office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00039005279541016

select * from office where  office_id= '1' 
 Execution Time:0.00023579597473145

select count(*) as cnt  from sales_master where   sales_id='3' and office_id= '1' 
 Execution Time:0.00035285949707031

select * from office where  office_id= '1' 
 Execution Time:0.00030994415283203

select * from office where  office_id= '1' 
 Execution Time:0.00048685073852539

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060296058654785

select count(*) as cnt from customer where   code = '02' or  (name = 'MINI KV'  and mobile='1236547890'  and office_id= '1') 
 Execution Time:0.00034499168395996

select count(*) as cnt from customer where   code = '03' or  (name = 'MINI KV'  and mobile='1236547890'  and office_id= '1') 
 Execution Time:0.00034594535827637

select count(*) as cnt from customer where   code = '04' or  (name = 'MINI KV'  and mobile='1236547890'  and office_id= '1') 
 Execution Time:0.00038599967956543

select count(*) as cnt from customer where   code = '04' or  (name = 'MINI KV'  and mobile='1236547890'  and office_id= '1') 
 Execution Time:0.00038599967956543

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('04', 'MINI KV', '2', '1236547890', '', '', '525', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0051219463348389

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052285194396973

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0012710094451904

select * from office where  office_id= '1' 
 Execution Time:0.00066399574279785

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0078799724578857

select count(*) as cnt from customer where   code = '05' or  (name = 'SURGERY OT GLASS'  and mobile='04985202031'  and office_id= '1') 
 Execution Time:0.00035905838012695

select count(*) as cnt from customer where   code = '05' or  (name = 'SURGERY OT GLASS'  and mobile='04985202031'  and office_id= '1') 
 Execution Time:0.00035905838012695

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('05', 'SURGERY OT GLASS', '1', '04985202031', '', '', '05', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0083398818969727

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select count(*) as cnt  from sales_master where   sales_id='5' and office_id= '1' 
 Execution Time:0.00075483322143555

select * from office where  office_id= '1' 
 Execution Time:0.00035691261291504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005180835723877

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select count(*) as cnt  from sales_master where   sales_id='4' and office_id= '1' 
 Execution Time:0.00070381164550781

select * from office where  office_id= '1' 
 Execution Time:0.00051116943359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001215934753418

select count(*) as cnt  from sales_master where   sales_id='2' and office_id= '1' 
 Execution Time:0.00054478645324707

select * from office where  office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt  from sales_master where   sales_id='4' and office_id= '1' 
 Execution Time:0.00052094459533691

select * from office where  office_id= '1' 
 Execution Time:0.00035190582275391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011398792266846

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065803527832031

select count(*) as cnt  from sales_master where   sales_id='4' and office_id= '1' 
 Execution Time:0.00033712387084961

select * from office where  office_id= '1' 
 Execution Time:0.00044584274291992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060701370239258

select count(*) as cnt  from sales_master where   sales_id='4' and office_id= '1' 
 Execution Time:0.00063800811767578

select * from office where  office_id= '1' 
 Execution Time:0.00041580200195312

select count(*) as cnt from customer where customer_id='5'  and office_id= '1' 
 Execution Time:0.00040984153747559


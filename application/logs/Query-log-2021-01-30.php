select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037891864776611

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037891864776611

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037891864776611

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00189208984375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037891864776611

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00189208984375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0015890598297119

select * from office where  office_id= '1' 
 Execution Time:0.002249002456665

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0048778057098389

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0048778057098389

UPDATE `office` SET `logo` = '', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0046300888061523

select * from office where  office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00067687034606934

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00067687034606934

UPDATE `office` SET `company_name` = 'Mnopticals', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'sd', `printable_company_name` = 'Mnoptical', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'a@gmail.com', `declaration` = 'test', `printable_company_address` = '4025 Oak Avenue,\r\nMelbourne,\r\nFlorida 32940,\r\nUSA', `logo` = 'optical2.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0091168880462646

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0008091926574707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0008091926574707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031280517578125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0008091926574707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031280517578125

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0008091926574707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00031280517578125

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from item_master where   code = '2589' or  (name = 'LOFTY BLUE' ) and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from item_master where   code = '2589' or  (name = 'LOFTY BLUE' ) and office_id= '1' 
 Execution Time:0.00058293342590332

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('2589', 'LOFTY BLUE', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019919872283936

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037693977355957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037598609924316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010871887207031

select * from office where  office_id= '1' 
 Execution Time:0.00072789192199707

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00040698051452637

UPDATE `office` SET `company_name` = 'Mnopticals', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'sd', `printable_company_name` = 'eyec', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'a@gmail.com', `declaration` = 'test', `printable_company_address` = '4025 Oak Avenue,\r\nMelbourne,\r\nFlorida 32940,\r\nUSA', `logo` = 'optical2.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.010249853134155

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00099897384643555

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00053882598876953

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00079607963562012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033378601074219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039911270141602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.002108097076416

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041794776916504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019383430480957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019383430480957

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019383430480957

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602


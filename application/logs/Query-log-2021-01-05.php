select count(*) as cnt from frame_classification where type='3' and  code = '001' and name = '0121' and office_id= '1' 
 Execution Time:0.00074076652526855

select count(*) as cnt from frame_classification where type='3' and  code = '001' and name = '0121' and office_id= '1' 
 Execution Time:0.00074076652526855

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', '001', '0121', '', '1', '1', '1') 
 Execution Time:0.005842924118042

select * from office where  office_id= '1' 
 Execution Time:0.0014040470123291

select * from office where  office_id= '1' 
 Execution Time:0.00082993507385254

select * from office where  office_id= '1' 
 Execution Time:0.00049209594726562

select * from office where  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00035595893859863

UPDATE `office` SET `logo` = '', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.010967969894409

select * from office where  office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00054502487182617

UPDATE `office` SET `company_name` = 'Mnopticals', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'sd', `printable_company_name` = 'Mnoptical', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'a@gmail.com', `printable_company_address` = 'sf', `logo` = 'optical.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.007375955581665

select * from office where  office_id= '1' 
 Execution Time:0.00049495697021484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0020709037780762

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0020709037780762

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0020709037780762

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0020709037780762

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00020503997802734

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select count(*) as cnt from item_master where   code = '012' or  (name = 'DIO' ) and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from item_master where   code = '012' or  (name = 'DIO' ) and office_id= '1' 
 Execution Time:0.00056600570678711

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('012', 'DIO', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0093069076538086

select count(*) as cnt from item_master where   code = '1' or  (name = 'AZORES' ) and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from item_master where   code = '1' or  (name = 'AZORES' ) and office_id= '1' 
 Execution Time:0.00029087066650391

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'AZORES', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0041718482971191

select count(*) as cnt from item_master where   code = '123' or  (name = 'XENAOX' ) and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from item_master where   code = '123' or  (name = 'XENAOX' ) and office_id= '1' 
 Execution Time:0.00043106079101562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('123', 'XENAOX', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0059661865234375

select count(*) as cnt from item_master where   code = '1' or  (name = 'CHILL' ) and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from item_master where   code = '1' or  (name = 'CHILL' ) and office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from item_master where   code = '123456' or  (name = 'CHILL' ) and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from item_master where   code = '123456' or  (name = 'CHILL' ) and office_id= '1' 
 Execution Time:0.00033307075500488

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('123456', 'CHILL', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.003709077835083

select count(*) as cnt from item_master where   code = '89' or  (name = 'LIVING' ) and office_id= '1' 
 Execution Time:0.00060915946960449

select count(*) as cnt from item_master where   code = '89' or  (name = 'LIVING' ) and office_id= '1' 
 Execution Time:0.00060915946960449

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('89', 'LIVING', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0065891742706299

select count(*) as cnt from item_master where   code = '345' or  (name = 'STORES' ) and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from item_master where   code = '345' or  (name = 'STORES' ) and office_id= '1' 
 Execution Time:0.00064802169799805

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('345', 'STORES', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0051920413970947

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029110908508301

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029110908508301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050210952758789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00029110908508301

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071477890014648

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071477890014648

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071477890014648

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071477890014648

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from item_master where   code = '2345' or  (name = 'STAR' ) and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from item_master where   code = '2345' or  (name = 'STAR' ) and office_id= '1' 
 Execution Time:0.00030994415283203

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('2345', 'STAR', '2', '0', '5', '', '0', '', '', '', '', '1', '1', '1') 
 Execution Time:0.0034289360046387

select * from office where  office_id= '1' 
 Execution Time:0.0010550022125244

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053596496582031

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068092346191406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078511238098145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078511238098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078511238098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030112266540527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00078511238098145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030112266540527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022292137145996

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055


select * from office where  office_id= '1' 
 Execution Time:0.0078418254852295

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00044107437133789

UPDATE `office` SET `logo` = '', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0025169849395752

select * from office where  office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00047707557678223

UPDATE `office` SET `company_name` = 'ARUL EYE CARE', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'sd', `printable_company_name` = 'ARUL EYE CARE', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'ARULEYECARE@GMAIL.COM', `declaration` = 'test', `printable_company_address` = 'ARUL EYE CARE \r\nGANDHI ROAD\r\nSALEM', `logo` = 'optical3.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0066149234771729

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.001431941986084

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.001431941986084

UPDATE `office` SET `company_name` = 'ARUL EYE CARE', `license_no` = '5565653565', `company_mobile` = '9790222556', `company_phone` = '9790222556', `email_id` = 'a@gmail.com', `address` = 'ARUL EYE CARE \r\nGANDHI ROAD\r\nSALEM', `printable_company_name` = 'ARUL EYE CARE', `printable_company_phone` = '9790222556', `printable_company_mobile` = '9790222556', `printable_emailid` = 'ARULEYECARE@GMAIL.COM', `declaration` = 'test', `printable_company_address` = 'ARUL EYE CARE \r\nGANDHI ROAD\r\nSALEM', `logo` = 'optical4.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.010784149169922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030112266540527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044107437133789

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030112266540527

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from item_master where   code = '12367567' or  (name = 'MARK' ) and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from item_master where   code = '12367567' or  (name = 'MARK' ) and office_id= '1' 
 Execution Time:0.00033998489379883

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12367567', 'MARK', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0019302368164062

select count(*) as cnt from frame_classification where type='1' and  code = '76567' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from frame_classification where type='1' and  code = '76567' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00038003921508789

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '76567', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0059010982513428

select count(*) as cnt from frame_classification where type='2' and  code = '234234' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from frame_classification where type='2' and  code = '234234' and name = 'NONE' and office_id= '1' 
 Execution Time:0.00031900405883789

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '234234', 'NONE', '', '1', '1', '1') 
 Execution Time:0.0067479610443115

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059819221496582

select count(*) as cnt from supplier where   code = '997869' or  (name = 'ROSHAN OPTICALS'  and mobile='21344314234'  and office_id= '1') 
 Execution Time:0.00052499771118164

select count(*) as cnt from supplier where   code = '997869' or  (name = 'ROSHAN OPTICALS'  and mobile='21344314234'  and office_id= '1') 
 Execution Time:0.00052499771118164

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('997869', 'ROSHAN OPTICALS', '1', '21344314234', '', '', '', '', '', '', '1', '354353543543543534', '2', '1', '1', '1') 
 Execution Time:0.025439977645874

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072288513183594

select count(*) as cnt from customer where   code = '2321312' or  (name = 'PRABHU'  and mobile='1234567891'  and office_id= '1') 
 Execution Time:0.00059294700622559

select count(*) as cnt from customer where   code = '2321312' or  (name = 'PRABHU'  and mobile='1234567891'  and office_id= '1') 
 Execution Time:0.00059294700622559

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('2321312', 'PRABHU', '1', '1234567891', '1234567897', '', '', '', '+0.25', '', '', '', '-2.5', '', '', '', '110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0024189949035645

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00024795532226562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048685073852539

select count(*) as cnt  from sales_master where   sales_id='36' and office_id= '1' 
 Execution Time:0.00039815902709961

select * from office where  office_id= '1' 
 Execution Time:0.00028395652770996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064492225646973

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034284591674805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040912628173828

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00051593780517578

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00071406364440918

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00018119812011719

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00016307830810547

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00079488754272461

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0004889965057373

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00041508674621582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00081396102905273

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00046992301940918

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00027298927307129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from office where  office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from classification where type='1' and  code = '345345' or name = 'CONTACT LENS' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from classification where type='1' and  code = '345345' or name = 'CONTACT LENS' and office_id= '1' 
 Execution Time:0.00058293342590332

INSERT INTO `classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '345345', 'CONTACT LENS', '', '1', '1', '1') 
 Execution Time:0.0046260356903076

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063991546630859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063991546630859

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063991546630859

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00032496452331543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063991546630859

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00032496452331543

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.000640869140625

select count(*) as cnt from item_master where   code = '34534543' or  (name = 'ARCDIA' ) and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from item_master where   code = '34534543' or  (name = 'ARCDIA' ) and office_id= '1' 
 Execution Time:0.00038814544677734

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('34534543', 'ARCDIA', '2', '0', '5', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049729347229004

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0044300556182861

select count(*) as cnt from customer where   code = '234234' or  (name = 'RAFIEEK'  and mobile='12345678901'  and office_id= '1') 
 Execution Time:0.00052189826965332

select count(*) as cnt from customer where   code = '234234' or  (name = 'RAFIEEK'  and mobile='12345678901'  and office_id= '1') 
 Execution Time:0.00052189826965332

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('234234', 'RAFIEEK', '1', '12345678901', '', '', '', '', '-0.50', '', '-0.75', '', '-0.25', '', '-2.5', '', '110', '', '10', '', '6/6', '', '6/6', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0025618076324463

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030803680419922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048589706420898

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030803680419922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003969669342041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00084400177001953

select count(*) as cnt from lens_classification where type='1' and  code = '54654' or name = 'WTKBF' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from lens_classification where type='1' and  code = '54654' or name = 'WTKBF' and office_id= '1' 
 Execution Time:0.00048112869262695

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '54654', 'WTKBF', '', '1', '1', '1') 
 Execution Time:0.0081140995025635

select count(*) as cnt from lens_master where   code = '24323423' and name = 'WTKBF' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from lens_master where   code = '24323423' and name = 'WTKBF' and office_id= '1' 
 Execution Time:0.00036811828613281

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('24323423', 'WTKBF', '11', '2', '2021-02-05', '350', '', '1', '1', '1') 
 Execution Time:0.0052728652954102

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046086311340332

select count(*) as cnt from lens_master where   code = '54654' and name = 'WTKBF' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from lens_master where   code = '54654' and name = 'WTKBF' and office_id= '1' 
 Execution Time:0.0003058910369873

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('54654', 'WTKBF', '11', '9', '2021-02-05', '350', '', '1', '1', '1') 
 Execution Time:0.0027298927307129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047111511230469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048208236694336

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0024130344390869

select count(*) as cnt from supplier where   code = '34234' or  (name = 'YUGANDHAR'  and mobile='9000200345'  and office_id= '1') 
 Execution Time:0.00065994262695312

select count(*) as cnt from supplier where   code = '34234' or  (name = 'YUGANDHAR'  and mobile='9000200345'  and office_id= '1') 
 Execution Time:0.00065994262695312

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('34234', 'YUGANDHAR', '1', '9000200345', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.005465030670166

select count(*) as cnt from lens_master where   code = '345435' and name = 'WTKBF' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from lens_master where   code = '345435' and name = 'WTKBF' and office_id= '1' 
 Execution Time:0.0003819465637207

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('345435', 'WTKBF', '11', '5', '2021-02-05', '250', '', '1', '1', '1') 
 Execution Time:0.0025069713592529

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054788589477539

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000823974609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004570484161377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064206123352051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025200843811035

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050091743469238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042200088500977

select count(*) as cnt  from sales_master where   sales_id='38' and office_id= '1' 
 Execution Time:0.00033402442932129

select * from office where  office_id= '1' 
 Execution Time:0.00056195259094238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038313865661621

select count(*) as cnt  from sales_master where   sales_id='38' and office_id= '1' 
 Execution Time:0.00047588348388672

select * from office where  office_id= '1' 
 Execution Time:0.011194944381714

select count(*) as cnt from customer where customer_id='24'  and office_id= '1' 
 Execution Time:0.0004417896270752

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00066089630126953

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00035190582275391

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00018405914306641

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0039219856262207

select count(*) as cnt from company where   code = '12345' and name = 'EYEWORID INTERNATIONAL' and office_id= '1' 
 Execution Time:0.00047206878662109

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('12345', 'EYEWORID INTERNATIONAL', '', '1', '1', '1') 
 Execution Time:0.0029270648956299

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from supplier where   code = '88888' or  (name = 'EYEWORLD INTERNATIONAL'  and mobile='9047133344'  and office_id= '1') 
 Execution Time:0.00074982643127441

select count(*) as cnt from supplier where   code = '88888' or  (name = 'EYEWORLD INTERNATIONAL'  and mobile='9047133344'  and office_id= '1') 
 Execution Time:0.00074982643127441

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('88888', 'EYEWORLD INTERNATIONAL', '1', '9047133344', '', '', '', '', '', '', '1', '33AAGFE9594H1Z2', '2', '1', '1', '1') 
 Execution Time:0.008213996887207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00033307075500488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00033307075500488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.0032210350036621

select count(*) as cnt from item_master where   code = '12345' or  (name = 'SPECSI JR' ) and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from item_master where   code = '12345' or  (name = 'SPECSI JR' ) and office_id= '1' 
 Execution Time:0.00045990943908691

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12345', 'SPECSI JR', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.015817880630493

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from item_master where   code = '12345' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from item_master where   code = '12345655' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.0010190010070801

select count(*) as cnt from item_master where   code = '12345655' or  (name = 'LAMY' ) and office_id= '1' 
 Execution Time:0.0010190010070801

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12345655', 'LAMY', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052831172943115

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.0021178722381592

select count(*) as cnt from item_master where   code = '123456785' or  (name = 'MISTY' ) and office_id= '1' 
 Execution Time:0.0005347728729248

select count(*) as cnt from item_master where   code = '123456785' or  (name = 'MISTY' ) and office_id= '1' 
 Execution Time:0.0005347728729248

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('123456785', 'MISTY', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005666971206665

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from item_master where   code = '123456892' or  (name = 'EYEQUE' ) and office_id= '1' 
 Execution Time:0.0011861324310303

select count(*) as cnt from item_master where   code = '123456892' or  (name = 'EYEQUE' ) and office_id= '1' 
 Execution Time:0.0011861324310303

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('123456892', 'EYEQUE', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0064918994903564

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '55698456' or  (name = 'CENTER CLUB' ) and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from item_master where   code = '55698456' or  (name = 'CENTER CLUB' ) and office_id= '1' 
 Execution Time:0.00067901611328125

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('55698456', 'CENTER CLUB', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0023400783538818

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from item_master where   code = '1' or  (name = 'HONEST' ) and office_id= '1' 
 Execution Time:0.00041818618774414

select count(*) as cnt from item_master where   code = '12' or  (name = 'HONEST' ) and office_id= '1' 
 Execution Time:0.00064420700073242

select count(*) as cnt from item_master where   code = '12' or  (name = 'HONEST' ) and office_id= '1' 
 Execution Time:0.00064420700073242

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('12', 'HONEST', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051670074462891

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00052690505981445

select count(*) as cnt from item_master where   code = '123' or  (name = 'TOM STYLE' ) and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from item_master where   code = '1234' or  (name = 'TOM STYLE' ) and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from item_master where   code = '1234' or  (name = 'TOM STYLE' ) and office_id= '1' 
 Execution Time:0.00072598457336426

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('1234', 'TOM STYLE', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005403995513916

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00036382675170898

select count(*) as cnt from item_master where   code = '258963' or  (name = 'VOYAGE' ) and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from item_master where   code = '258963' or  (name = 'VOYAGE' ) and office_id= '1' 
 Execution Time:0.00038695335388184

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('258963', 'VOYAGE', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.005206823348999

select count(*) as cnt from lens_master where   code = '2300' and name = 'BIFOCAL' and office_id= '1' 
 Execution Time:0.0060040950775146

select count(*) as cnt from lens_master where   code = '2300' and name = 'BIFOCAL' and office_id= '1' 
 Execution Time:0.0060040950775146

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('2300', 'BIFOCAL', '6', '9', '2021-02-05', '900', '', '1', '1', '1') 
 Execution Time:0.025031089782715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from supplier where   code = '1234569' or  (name = 'ESSILOR'  and mobile='9791858681'  and office_id= '1') 
 Execution Time:0.00044608116149902

select count(*) as cnt from supplier where   code = '1234569' or  (name = 'ESSILOR'  and mobile='9791858681'  and office_id= '1') 
 Execution Time:0.00044608116149902

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('1234569', 'ESSILOR', '1', '9791858681', '', '', '', '', '', '', '1', '', '1', '1', '1', '1') 
 Execution Time:0.0078790187835693

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from customer where   code = '123456' or  (name = 'SIVA'  and mobile='1234567893'  and office_id= '1') 
 Execution Time:0.00033712387084961

select count(*) as cnt from customer where   code = '1234568998' or  (name = 'SIVA'  and mobile='1234567893'  and office_id= '1') 
 Execution Time:0.0004279613494873

select count(*) as cnt from customer where   code = '1234568998' or  (name = 'SIVA'  and mobile='1234567893'  and office_id= '1') 
 Execution Time:0.0004279613494873

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1234568998', 'SIVA', '1', '1234567893', '', '', '', '', '0-50', '', '', '', '0.75', '', '', '', '180', '', '', '', '6/6', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0061509609222412

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061702728271484

select count(*) as cnt  from sales_master where   sales_id='39' and office_id= '1' 
 Execution Time:0.00047111511230469

select * from office where  office_id= '1' 
 Execution Time:0.00034809112548828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055313110351562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005040168762207

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0039980411529541

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00067782402038574

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00044608116149902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069499015808105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075101852416992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068497657775879

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068497657775879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024294853210449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068497657775879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024294853210449

select * from company where    office_id= '1' and status=1 
 Execution Time:0.002216100692749

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068497657775879

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024294853210449

select * from company where    office_id= '1' and status=1 
 Execution Time:0.002216100692749

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select * from office where  office_id= '1' 
 Execution Time:0.00068402290344238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005030632019043

select * from office where  office_id= '1' 
 Execution Time:0.00061416625976562

select count(*) as cnt from classification where classification_id='62' and  type='1'  and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from classification where classification_id='62' and  type='1'  and office_id= '1' 
 Execution Time:0.00034284591674805

DELETE FROM `classification`
WHERE `classification_id` = '62' 
 Execution Time:0.0051031112670898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060200691223145

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060200691223145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00034809112548828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060200691223145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00034809112548828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060200691223145

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00034809112548828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from item_master where   code = '3131' or  (name = 'test' ) and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from item_master where   code = '3131' or  (name = 'test' ) and office_id= '1' 
 Execution Time:0.0003058910369873

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('3131', 'test', '2', '0', '6', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.002230167388916

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00089597702026367

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00058913230895996

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0002448558807373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026488304138184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050806999206543

select count(*) as cnt from customer where   code = '1321321' or  (name = 'yugandhar1'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00063610076904297

select count(*) as cnt from customer where   code = '1321321' or  (name = 'yugandhar1'  and mobile='1234567898'  and office_id= '1') 
 Execution Time:0.00063610076904297

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1321321', 'yugandhar1', '1', '1234567898', '', '', '', '', '-0.25', '', '', '', '-0.75', '', '', '', '110', '', '', '', '6/6', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0054240226745605

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041604042053223

select count(*) as cnt  from sales_master where   sales_id='40' and office_id= '1' 
 Execution Time:0.00041294097900391

select * from office where  office_id= '1' 
 Execution Time:0.00049877166748047

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00068902969360352

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00038599967956543

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00024890899658203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00021004676818848

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00028300285339355

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select count(*) as cnt from company where   code = '12345821' and name = 'PRABHU' and office_id= '1' 
 Execution Time:0.00032496452331543

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('12345821', 'PRABHU', '', '1', '1', '1') 
 Execution Time:0.0054581165313721

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055909156799316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055909156799316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030803680419922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055909156799316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030803680419922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055909156799316

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00030803680419922

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from tax_master where   tax_id='11' and office_id= '1' 
 Execution Time:0.0010840892791748

select count(*) as cnt from item_master where   code = '1234589' or  (name = 'AONE' ) and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from item_master where   code = '1234589' or  (name = 'AONE' ) and office_id= '1' 
 Execution Time:0.00069808959960938

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('1234589', 'AONE', '2', '0', '7', '', '1', '11', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0060131549835205

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075602531433105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from supplier where   code = '12345692' or  (name = 'YUGANDHAR'  and mobile='1234567891'  and office_id= '1') 
 Execution Time:0.0007319450378418

select count(*) as cnt from supplier where   code = '12345692' or  (name = 'YUGANDHAR'  and mobile='1234567891'  and office_id= '1') 
 Execution Time:0.0007319450378418

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('12345692', 'YUGANDHAR', '1', '1234567891', '9000200470', 'ARULEYECARE@GMAIL.COM', 'KP', '', 'GUNA', '9000547987', '1', '123Z2341996', '2', '1', '1', '1') 
 Execution Time:0.0031781196594238

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060915946960449

select count(*) as cnt from customer where   code = '123450' or  (name = 'VASU'  and mobile='9000200498'  and office_id= '1') 
 Execution Time:0.00059604644775391

select count(*) as cnt from customer where   code = '123450' or  (name = 'VASU'  and mobile='9000200498'  and office_id= '1') 
 Execution Time:0.00059604644775391

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('123450', 'VASU', '1', '9000200498', '', '', '', '', '0-50', '', '0.50', '', '0-75', '', '0-75', '', '170', '', '180', '', '6/6', '', '6/6', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0020229816436768

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select count(*) as cnt  from sales_master where   sales_id='41' and office_id= '1' 
 Execution Time:0.00065493583679199

select * from office where  office_id= '1' 
 Execution Time:0.00045299530029297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072813034057617

select * from office where  office_id= '1' 
 Execution Time:0.0021929740905762

select * from office where  office_id= '1' 
 Execution Time:0.00053715705871582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058102607727051

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058102607727051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058102607727051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058102607727051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002140998840332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069594383239746

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032806396484375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001378059387207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

select count(*) as cnt  from sales_master where   sales_id='41' and office_id= '1' 
 Execution Time:0.00038290023803711

select * from office where  office_id= '1' 
 Execution Time:0.00045108795166016

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053000450134277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044107437133789


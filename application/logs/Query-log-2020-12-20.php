select count(*) as cnt from company where   code = '1' and name = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '1', '', '1', '1', '1') 
 Execution Time:0.0030069351196289

select count(*) as cnt from company where company_id='3'  and office_id= '1' 
 Execution Time:0.0005800724029541

DELETE FROM `company`
WHERE `company_id` = '3' 
 Execution Time:0.011073112487793

select count(*) as cnt from frame_classification where type='1' and  code = '001' and name = 'type' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from frame_classification where type='1' and  code = '001' and name = 'type' and office_id= '1' 
 Execution Time:0.00038599967956543

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '001', 'type', 'des', '1', '1', '1') 
 Execution Time:0.0057039260864258

select count(*) as cnt from frame_classification where frame_id!='1' and  type='1' and  code = '001' and name = 'typee' and office_id= '1' 
 Execution Time:0.00022315979003906

UPDATE `frame_classification` SET `type` = '1', `code` = '001', `name` = 'typee', `description` = 'des', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `frame_id` = '1' 
 Execution Time:0.0076069831848145

select count(*) as cnt from frame_classification where frame_id='1' and  type='1'  and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from frame_classification where frame_id='1' and  type='1'  and office_id= '1' 
 Execution Time:0.00050997734069824

DELETE FROM `frame_classification`
WHERE `frame_id` = '1' 
 Execution Time:0.0089020729064941

select count(*) as cnt from frame_classification where type='1' and  code = '1' and name = '12' and office_id= '1' 
 Execution Time:0.0022499561309814

select count(*) as cnt from frame_classification where type='1' and  code = '1' and name = '12' and office_id= '1' 
 Execution Time:0.0022499561309814

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '1', '12', '12', '1', '1', '1') 
 Execution Time:0.0062048435211182

select count(*) as cnt from frame_classification where type='2' and  code = '0012' and name = 'red' and office_id= '1' 
 Execution Time:0.00052213668823242

select count(*) as cnt from frame_classification where type='2' and  code = '0012' and name = 'red' and office_id= '1' 
 Execution Time:0.00052213668823242

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '0012', 'red', 'dfd', '1', '1', '1') 
 Execution Time:0.0071089267730713

select count(*) as cnt from frame_classification where frame_id!='3' and  type='2' and  code = '0012' and name = 'red1' and office_id= '1' 
 Execution Time:0.00040817260742188

UPDATE `frame_classification` SET `type` = '2', `code` = '0012', `name` = 'red1', `description` = 'dfd', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `frame_id` = '3' 
 Execution Time:0.010235071182251

select count(*) as cnt from frame_classification where frame_id='3' and  type='2'  and office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from frame_classification where frame_id='3' and  type='2'  and office_id= '1' 
 Execution Time:0.00020813941955566

DELETE FROM `frame_classification`
WHERE `frame_id` = '3' 
 Execution Time:0.0055651664733887

select count(*) as cnt from frame_classification where type='3' and  code = '001' and name = 'model' and office_id= '1' 
 Execution Time:0.0014359951019287

select count(*) as cnt from frame_classification where type='3' and  code = '001' and name = 'model' and office_id= '1' 
 Execution Time:0.0014359951019287

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', '001', 'model', 'd', '1', '1', '1') 
 Execution Time:0.0029559135437012

select count(*) as cnt from frame_classification where frame_id!='4' and  type='3' and  code = '0011' and name = 'model' and office_id= '1' 
 Execution Time:0.00037407875061035

UPDATE `frame_classification` SET `type` = '3', `code` = '0011', `name` = 'model', `description` = 'd', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `frame_id` = '4' 
 Execution Time:0.0068569183349609

select count(*) as cnt from frame_classification where frame_id='4' and  type='3'  and office_id= '1' 
 Execution Time:0.00021910667419434

select count(*) as cnt from frame_classification where frame_id='4' and  type='3'  and office_id= '1' 
 Execution Time:0.00021910667419434

DELETE FROM `frame_classification`
WHERE `frame_id` = '4' 
 Execution Time:0.0097701549530029

select count(*) as cnt from classification where classification_id!='54' and  type='1' and  code = '65777' and name = 'jdhjfsfsfdf' and office_id= '1' 
 Execution Time:0.00072503089904785

UPDATE `classification` SET `type` = '1', `code` = '65777', `name` = 'jdhjfsfsfdf', `description` = 'jhgfjhdfdfff', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '54' 
 Execution Time:0.00019288063049316

select count(*) as cnt from frame_classification where type='3' and  code = '001' and name = 'Sgg' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from frame_classification where type='3' and  code = '001' and name = 'Sgg' and office_id= '1' 
 Execution Time:0.00020194053649902

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', '001', 'Sgg', '', '1', '1', '1') 
 Execution Time:0.0063049793243408

select count(*) as cnt from frame_classification where frame_id='5' and  type='3'  and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from frame_classification where frame_id='5' and  type='3'  and office_id= '1' 
 Execution Time:0.00041294097900391

DELETE FROM `frame_classification`
WHERE `frame_id` = '5' 
 Execution Time:0.0042390823364258

select count(*) as cnt from company where   code = '3' and name = 'Gsg' and office_id= '1' 
 Execution Time:0.0020859241485596

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', 'Gsg', '', '1', '1', '1') 
 Execution Time:0.0080289840698242

select count(*) as cnt from company where company_id!='4' and    code = '3' and name = 'Gsg' and office_id= '1' 
 Execution Time:0.00066304206848145

UPDATE `company` SET `code` = '3', `name` = 'Gsg', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `company_id` = '4' 
 Execution Time:0.00024700164794922

select count(*) as cnt from company where company_id='4'  and office_id= '1' 
 Execution Time:0.00059390068054199

DELETE FROM `company`
WHERE `company_id` = '4' 
 Execution Time:0.0024759769439697

select count(*) as cnt from frame_classification where type='4' and  code = '001' and name = 'size' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from frame_classification where type='4' and  code = '001' and name = 'size' and office_id= '1' 
 Execution Time:0.00030803680419922

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('4', '001', 'size', 'sd', '1', '1', '1') 
 Execution Time:0.011393070220947

select count(*) as cnt from frame_classification where frame_id!='6' and  type='4' and  code = '001' and name = 'size1' and office_id= '1' 
 Execution Time:0.00038695335388184

UPDATE `frame_classification` SET `type` = '4', `code` = '001', `name` = 'size1', `description` = 'sd', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `frame_id` = '6' 
 Execution Time:0.0021240711212158

select count(*) as cnt from frame_classification where frame_id='6' and  type='4'  and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from frame_classification where frame_id='6' and  type='4'  and office_id= '1' 
 Execution Time:0.00037503242492676

DELETE FROM `frame_classification`
WHERE `frame_id` = '6' 
 Execution Time:0.0020709037780762

select count(*) as cnt from customer where   code = '001' or  (name = 'anu'  and mobile='9790222556'  and office_id= '1') 
 Execution Time:0.00033187866210938

select count(*) as cnt from customer where   code = '001' or  (name = 'anu'  and mobile='9790222556'  and office_id= '1') 
 Execution Time:0.00049805641174316

select count(*) as cnt from customer where   code = '001' or  (name = 'anu'  and mobile='9790222556'  and office_id= '1') 
 Execution Time:0.00032281875610352

select count(*) as cnt from customer where   code = '001' or  (name = 'anu'  and mobile='9790222556'  and office_id= '1') 
 Execution Time:0.00032281875610352

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('001', 'anu', '1', '9790222556', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0032548904418945

select count(*) as cnt from customer where      code = '1' or (customer_id!='001' and name = 'anu' and mobile='2147483647'  and office_id= '1') 
 Execution Time:0.0011160373687744

UPDATE `customer` SET `code` = '001', `name` = 'anu', `gender` = '1', `mobile` = '2147483647', `alter_mobile` = '', `email_id` = '', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1' 
 Execution Time:0.0040919780731201

select count(*) as cnt from customer where      code = '1' or (customer_id!='001' and name = 'anu' and mobile='2147483647'  and office_id= '1') 
 Execution Time:0.00044894218444824

UPDATE `customer` SET `code` = '001', `name` = 'anu', `gender` = '1', `mobile` = '2147483647', `alter_mobile` = '', `email_id` = '', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '666', `pdre` = '', `le` = '77878', `segment` = '88', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1' 
 Execution Time:0.0033390522003174

select count(*) as cnt from customer where      code = '1' or (customer_id!='001' and name = 'anu' and mobile='2147483647'  and office_id= '1') 
 Execution Time:0.00025701522827148

UPDATE `customer` SET `code` = '001', `name` = 'anu', `gender` = '1', `mobile` = '2147483647', `alter_mobile` = '', `email_id` = '', `address` = '', `description` = '', `resph1` = '44', `resph2` = '', `resph3` = '', `resph4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1' 
 Execution Time:0.002100944519043

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from customer where customer_id='1'  and office_id= '1' 
 Execution Time:0.00029516220092773

DELETE FROM `customer`
WHERE `customer_id` = '1' 
 Execution Time:0.013231992721558


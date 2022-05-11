
select count(*) as cnt from classification where type='1' and  code = '65777' and name = 'jdhjf' and office_id= '1' 
 Execution Time:0.00030207633972168

INSERT INTO `classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '65777', 'jdhjf', 'jhgfjh', '1', '1', '1') 
 Execution Time:0.0024969577789307

select count(*) as cnt from classification where type='1' and  code = '1' and name = '1ss' and office_id= '1' 
 Execution Time:0.00036406517028809

INSERT INTO `classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '1', '1ss', 'sdsd', '1', '1', '1') 
 Execution Time:0.006605863571167

select count(*) as cnt from classification where classification_id='55' and  type='1'  and office_id= '1' 
 Execution Time:0.00034880638122559

DELETE FROM `classification`
WHERE `classification_id` = '55' 
 Execution Time:0.0074079036712646

select count(*) as cnt from classification where classification_id!='54' and  type='1' and  code = '65777' and name = 'jdhjfsfsfdf' and office_id= '1' 
 Execution Time:0.00069999694824219

UPDATE `classification` SET `type` = '1', `code` = '65777', `name` = 'jdhjfsfsfdf', `description` = 'jhgfjhdfdfff', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '54' 
 Execution Time:0.0021238327026367

select count(*) as cnt from company where   code = '1' and name = 'sd' and office_id= '1' 
 Execution Time:0.00050497055053711

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', 'sd', 'sd', '1', '1', '1') 
 Execution Time:0.0026819705963135

select count(*) as cnt from company where company_id!='1' and    code = '1' and name = 'sd' and office_id= '1' 
 Execution Time:0.00026392936706543

UPDATE `company` SET `code` = '1', `name` = 'sd', `description` = 'sd', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `company_id` = '1' 
 Execution Time:0.00014901161193848

select count(*) as cnt from company where company_id!='1' and    code = '11' and name = '122' and office_id= '1' 
 Execution Time:0.00034809112548828

UPDATE `company` SET `code` = '11', `name` = '122', `description` = '', `status` = 0, `login_id` = '1', `office_id` = '1'
WHERE `company_id` = '1' 
 Execution Time:0.010146856307983

select count(*) as cnt from company where company_id='1'  and office_id= '1' 
 Execution Time:0.00048017501831055

DELETE FROM `company`
WHERE `company_id` = '1' 
 Execution Time:0.0090370178222656

select count(*) as cnt from company where   code = '21' and name = '1212' and office_id= '1' 
 Execution Time:0.00023198127746582

INSERT INTO `company` (`code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('21', '1212', '', '1', '1', '1') 
 Execution Time:0.0058639049530029

select count(*) as cnt from company where company_id!='2' and    code = '21' and name = '1212' and office_id= '1' 
 Execution Time:0.00045680999755859

UPDATE `company` SET `code` = '21', `name` = '1212', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `company_id` = '2' 
 Execution Time:0.0001528263092041

select count(*) as cnt from company where company_id!='2' and    code = '21' and name = '12122' and office_id= '1' 
 Execution Time:0.00043106079101562

UPDATE `company` SET `code` = '21', `name` = '12122', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `company_id` = '2' 
 Execution Time:0.0086150169372559

select count(*) as cnt from company where company_id='2'  and office_id= '1' 
 Execution Time:0.00029802322387695

DELETE FROM `company`
WHERE `company_id` = '2' 
 Execution Time:0.0053889751434326


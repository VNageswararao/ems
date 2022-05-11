select count(*) as cnt from lens_classification where type='1' and  code = '001' and name = 'e' and office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from lens_classification where type='1' and  code = '001' and name = 'e' and office_id= '1' 
 Execution Time:0.00048208236694336

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '001', 'e', '', '1', '1', '1') 
 Execution Time:0.002701997756958

select count(*) as cnt from lens_classification where lens_classification_id!='1' and  type='1' and  code = '001' and name = 'e' and office_id= '1' 
 Execution Time:0.00042605400085449

UPDATE `lens_classification` SET `type` = '1', `code` = '001', `name` = 'e', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_classification_id` = '1' 
 Execution Time:0.00022721290588379

select count(*) as cnt from lens_classification where lens_classification_id!='1' and  type='1' and  code = '001' and name = 'e12' and office_id= '1' 
 Execution Time:0.00058698654174805

UPDATE `lens_classification` SET `type` = '1', `code` = '001', `name` = 'e12', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_classification_id` = '1' 
 Execution Time:0.0023550987243652

select count(*) as cnt from lens_classification where lens_classification_id='1' and  type='1'  and office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from lens_classification where lens_classification_id='1' and  type='1'  and office_id= '1' 
 Execution Time:0.00067806243896484

DELETE FROM `lens_classification`
WHERE `lens_classification_id` = '1' 
 Execution Time:0.0042190551757812

select count(*) as cnt from frame_classification where type='2' and  code = '001' and name = 'e' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from frame_classification where type='2' and  code = '001' and name = 'e' and office_id= '1' 
 Execution Time:0.00058794021606445

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '001', 'e', 's', '1', '1', '1') 
 Execution Time:0.0073249340057373

select count(*) as cnt from lens_classification where type='2' and  code = '001' and name = 'ca' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from lens_classification where type='2' and  code = '001' and name = 'ca' and office_id= '1' 
 Execution Time:0.00022506713867188

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('2', '001', 'ca', '', '1', '1', '1') 
 Execution Time:0.0058021545410156

select count(*) as cnt from lens_classification where type='1' and  code = '001' and name = 'ca' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from lens_classification where type='1' and  code = '001' and name = 'ca' and office_id= '1' 
 Execution Time:0.00030112266540527

INSERT INTO `lens_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('1', '001', 'ca', '', '1', '1', '1') 
 Execution Time:0.0060381889343262

select count(*) as cnt from lens_classification where type='2' and  code = '001' and name = 'ca' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from lens_master where   code = '001' and name = 'lens' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from lens_master where   code = '001' and name = 'lens' and office_id= '1' 
 Execution Time:0.0004429817199707

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `status`, `login_id`, `office_id`) VALUES ('001', 'lens', '3', '2', '', '1', '', 0, '1', '1') 
 Execution Time:0.0054481029510498


select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0017111301422119

select count(*) as cnt from frame_classification where frame_id!='7' and  type='2' and  code = '001' and name = 'yellow' and office_id= '1' 
 Execution Time:0.00043296813964844

UPDATE `frame_classification` SET `type` = '2', `code` = '001', `name` = 'yellow', `description` = 's', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `frame_id` = '7' 
 Execution Time:0.0053470134735107

select count(*) as cnt from frame_classification where type='3' and  code = '002' and name = 'model2' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from frame_classification where type='3' and  code = '002' and name = 'model2' and office_id= '1' 
 Execution Time:0.00045204162597656

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('3', '002', 'model2', '', '1', '1', '1') 
 Execution Time:0.0052919387817383

select count(*) as cnt from frame_classification where type='4' and  code = '003' and name = 'size1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from frame_classification where type='4' and  code = '003' and name = 'size1' and office_id= '1' 
 Execution Time:0.00036311149597168

INSERT INTO `frame_classification` (`type`, `code`, `name`, `description`, `status`, `login_id`, `office_id`) VALUES ('4', '003', 'size1', '', '1', '1', '1') 
 Execution Time:0.0029377937316895


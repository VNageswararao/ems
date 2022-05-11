select * from office where  office_id= '1' 
 Execution Time:0.0026888847351074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.003432035446167

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.0013699531555176

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00017809867858887

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00056910514831543

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from lens_master where lens_master_id!='12' and   code = '0' and name = 'KBF RX COMPND' and office_id= '1' 
 Execution Time:0.00046110153198242

UPDATE `lens_master` SET `code` = '0', `name` = 'KBF RX COMPND', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-13', `purchase_amount` = '550', `description` = '', `gst_type` = '0', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '12' 
 Execution Time:0.002432107925415

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00058889389038086

select count(*) as cnt from lens_master where lens_master_id='12'   and office_id= '1' 
 Execution Time:0.00058889389038086

select * from lens_master where    lens_master_id = '12' and office_id= '1' 
 Execution Time:0.0002589225769043


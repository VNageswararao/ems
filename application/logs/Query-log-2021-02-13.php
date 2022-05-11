select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00078105926513672

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00046491622924805

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0013670921325684

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0020840167999268

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00093889236450195

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0031218528747559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004880428314209

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00067615509033203

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00030112266540527

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00018787384033203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010781288146973

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select count(*) as cnt from classification where classification_id!='59' and  type='1' and  code = '003' and name = 'opticallens' and office_id= '1' 
 Execution Time:0.00057291984558105

UPDATE `classification` SET `type` = '1', `code` = '003', `name` = 'opticallens', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '59' 
 Execution Time:0.00030994415283203

select count(*) as cnt from classification where classification_id!='59' and  type='1' and  code = '003' and name = 'opticallens' and office_id= '1' 
 Execution Time:0.00043702125549316

UPDATE `classification` SET `type` = '1', `code` = '003', `name` = 'opticallens', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '59' 
 Execution Time:0.00016593933105469

select count(*) as cnt from classification where classification_id!='58' and  type='1' and  code = '003' and name = 'OTHER' and office_id= '1' 
 Execution Time:0.00044393539428711

UPDATE `classification` SET `type` = '1', `code` = '003', `name` = 'OTHER', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '58' 
 Execution Time:0.00033283233642578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039410591125488

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt  from sales_master where   sales_id='11' and office_id= '1' 
 Execution Time:0.00048208236694336

select * from office where  office_id= '1' 
 Execution Time:0.00026702880859375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044393539428711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044608116149902

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00090599060058594

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00035786628723145

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00031304359436035

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00016999244689941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063085556030273

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063085556030273

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027680397033691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063085556030273

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027680397033691

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063085556030273

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00027680397033691

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057506561279297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029706954956055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057506561279297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029706954956055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057506561279297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029706954956055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057506561279297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029706954956055

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020003318786621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023818016052246

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023818016052246

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019693374633789

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023818016052246

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019693374633789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017189979553223

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037789344787598

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00023818016052246

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019693374633789

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018000602722168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039792060852051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032806396484375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033307075500488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039792060852051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001518726348877

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001828670501709

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030708312988281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030708312988281

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015497207641602

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030994415283203

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048112869262695

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00041913986206055

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048112869262695

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018811225891113

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select count(*) as cnt from item_master where item_id='37'  and office_id= '1' 
 Execution Time:0.00063681602478027

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051403045654297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051403045654297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021719932556152

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051403045654297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021719932556152

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030899047851562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051403045654297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021719932556152

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from item_master where item_id='37'  and office_id= '1' 
 Execution Time:0.00024914741516113

select count(*) as cnt from item_master where    item_id!='37' and    code = '36'  and   name = 'net'   and office_id= '1' 
 Execution Time:0.00064778327941895

UPDATE `item_master` SET `code` = '36', `name` = 'net', `category_id` = '2', `brand_id` = '0', `company_id` = '7', `hsn_code` = '', `gst_type` = '1', `tax` = '12', `cgst` = '9', `sgst` = '9', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '37' 
 Execution Time:0.00023984909057617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047802925109863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056099891662598

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047802925109863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056099891662598

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047802925109863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056099891662598

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00047802925109863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056099891662598

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0009000301361084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066685676574707

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0009000301361084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0009000301361084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00061488151550293

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0009000301361084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066685676574707

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023102760314941

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select * from office where  office_id= '1' 
 Execution Time:0.00053596496582031

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026082992553711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026082992553711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001678466796875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026082992553711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001678466796875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00026082992553711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001678466796875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046086311340332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062108039855957

select * from office where  office_id= '1' 
 Execution Time:0.00092101097106934

select count(*) as cnt from classification where classification_id!='59' and  type='1' and  code = '003' and name = 'opticallens' and office_id= '1' 
 Execution Time:0.00064206123352051

UPDATE `classification` SET `type` = '1', `code` = '003', `name` = 'opticallens', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '59' 
 Execution Time:0.00026583671569824

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00088000297546387

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00059199333190918

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050115585327148

select * from office where  office_id= '1' 
 Execution Time:0.0003969669342041

select * from office where  office_id= '1' 
 Execution Time:0.00060486793518066

select count(*) as cnt from classification where classification_id!='59' and  type='1' and  code = '003' and name = 'opticallens' and office_id= '1' 
 Execution Time:0.0003960132598877

UPDATE `classification` SET `type` = '1', `code` = '003', `name` = 'opticallens', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '59' 
 Execution Time:0.00029397010803223

select count(*) as cnt from classification where classification_id!='59' and  type='1' and  code = '003' and name = 'opticallens' and office_id= '1' 
 Execution Time:0.00040292739868164

UPDATE `classification` SET `type` = '1', `code` = '003', `name` = 'opticallens', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `classification_id` = '59' 
 Execution Time:0.0002288818359375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040006637573242

select count(*) as cnt from customer where customer_id='0'  and office_id= '1' 
 Execution Time:0.0002598762512207

select count(*) as cnt from customer where customer_id='4'  and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt  from sales_master where   sales_id='11' and office_id= '1' 
 Execution Time:0.00032997131347656

select * from office where  office_id= '1' 
 Execution Time:0.00042414665222168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0005791187286377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032186508178711

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030207633972168

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00021886825561523

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00057721138000488


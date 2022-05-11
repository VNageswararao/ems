select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0023798942565918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0026030540466309

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063419342041016

select * from office where  office_id= '1' 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011069774627686

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from supplier where supplier_id='2'  and office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from supplier where supplier_id='2'  and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from supplier where supplier_id='2'  and office_id= '1' 
 Execution Time:0.00029516220092773

DELETE FROM `supplier`
WHERE `supplier_id` = '2' 
 Execution Time:0.0025200843811035

select count(*) as cnt from supplier where supplier_id='1'  and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from supplier where   code = '02' or  (name = 'FASHION OPTICALS'  and mobile='9072792277'  and office_id= '1') 
 Execution Time:0.00043416023254395

select count(*) as cnt from supplier where   code = '02' or  (name = 'FASHION OPTICALS'  and mobile='9072792277'  and office_id= '1') 
 Execution Time:0.00043416023254395

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('02', 'FASHION OPTICALS', '1', '9072792277', '', '', 'KALLEPURAM CHAMBERS JEW STREET,ERNAKULAM KOCHI - 682035', '', 'FASHION OPTICALS', '9072792277', '1', '32AABFF1041M1ZV', '2', '1', '1', '1') 
 Execution Time:0.0046799182891846

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017118453979492

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017118453979492

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0022439956665039

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00052309036254883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026917457580566

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017118453979492

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0022439956665039

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from item_master where item_id='183'  and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from item_master where item_id='187'  and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from item_master where    item_id!='187' and    code = '187'  and   name = 'KOOKIEEES'   and office_id= '1' 
 Execution Time:0.00066804885864258

UPDATE `item_master` SET `code` = '187', `name` = 'KOOKIEEES', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '187' 
 Execution Time:0.012962102890015

select count(*) as cnt from item_master where   code = '188' or  (name = 'KILLER DRAMA-FO' ) and office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from item_master where   code = '188' or  (name = 'KILLER DRAMA-FO' ) and office_id= '1' 
 Execution Time:0.00078392028808594

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('188', 'KILLER DRAMA-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0040051937103271

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from item_master where   code = '188' or  (name = 'UNFLA PPABLE-FO' ) and office_id= '1' 
 Execution Time:0.00050997734069824

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033020973205566

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037813186645508

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015401840209961

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from item_master where item_id='188'  and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from item_master where item_id='187'  and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from item_master where   code = '189' or  (name = 'UNFLA PPABLE-FO' ) and office_id= '1' 
 Execution Time:0.00052118301391602

select count(*) as cnt from item_master where   code = '189' or  (name = 'UNFLA PPABLE-FO' ) and office_id= '1' 
 Execution Time:0.00052118301391602

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('189', 'UNFLA PPABLE-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0046558380126953

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001838207244873

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001838207244873

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00031805038452148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00037097930908203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001838207244873

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004580020904541

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045490264892578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045490264892578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045490264892578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022387504577637

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035786628723145

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00045490264892578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022387504577637

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00018191337585449

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00052189826965332

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00052189826965332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033307075500488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00042414665222168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00052189826965332

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from item_master where   code = '190' or  (name = 'CONNECT-FO' ) and office_id= '1' 
 Execution Time:0.00070714950561523

select count(*) as cnt from item_master where   code = '190' or  (name = 'CONNECT-FO' ) and office_id= '1' 
 Execution Time:0.00070714950561523

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('190', 'CONNECT-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.014676094055176

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039911270141602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039911270141602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039911270141602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00043606758117676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038886070251465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039911270141602

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00022602081298828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00040006637573242

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059390068054199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045895576477051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059390068054199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059390068054199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025296211242676

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00059390068054199

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045895576477051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00026106834411621

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select count(*) as cnt from item_master where item_id='185'  and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from item_master where   code = '191' or  (name = 'POSO MTL SUPRA-FO' ) and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from item_master where   code = '191' or  (name = 'POSO MTL SUPRA-FO' ) and office_id= '1' 
 Execution Time:0.0005650520324707

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('191', 'POSO MTL SUPRA-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0070569515228271

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024986267089844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035309791564941

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033688545227051

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00016498565673828

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from item_master where   code = '192' or  (name = 'HARTT' ) and office_id= '1' 
 Execution Time:0.00051617622375488

select count(*) as cnt from item_master where   code = '192' or  (name = 'HARTT' ) and office_id= '1' 
 Execution Time:0.00051617622375488

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('192', 'HARTT', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0068478584289551

select count(*) as cnt from item_master where item_id='192'  and office_id= '1' 
 Execution Time:0.001723051071167

select count(*) as cnt from item_master where    item_id!='192' and    code = '192'  and   name = 'HARTT-FO'   and office_id= '1' 
 Execution Time:0.00058102607727051

UPDATE `item_master` SET `code` = '192', `name` = 'HARTT-FO', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '192' 
 Execution Time:0.0045669078826904

select count(*) as cnt from item_master where    item_id!='192' and    code = '192'  and   name = 'HARTT-FO'   and office_id= '1' 
 Execution Time:0.00050187110900879

UPDATE `item_master` SET `code` = '192', `name` = 'HARTT-FO', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '192' 
 Execution Time:0.00047397613525391

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from item_master where   code = '192' or  (name = 'ALEOPAT PLUS-FO' ) and office_id= '1' 
 Execution Time:0.0007171630859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018119812011719

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018119812011719

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00018119812011719

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from item_master where   code = '193' or  (name = 'ALEOPAT PLUS-FO' ) and office_id= '1' 
 Execution Time:0.00077605247497559

select count(*) as cnt from item_master where   code = '193' or  (name = 'ALEOPAT PLUS-FO' ) and office_id= '1' 
 Execution Time:0.00077605247497559

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('193', 'ALEOPAT PLUS-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0070991516113281

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00060486793518066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00060486793518066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00060486793518066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026512145996094

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00060486793518066

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001990795135498

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00051093101501465

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033283233642578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033283233642578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033283233642578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00033283233642578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00025701522827148

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00012898445129395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from item_master where   code = '194' or  (name = 'COIN MASTER BABY-FO' ) and office_id= '1' 
 Execution Time:0.0015621185302734

select count(*) as cnt from item_master where   code = '194' or  (name = 'COIN MASTER BABY-FO' ) and office_id= '1' 
 Execution Time:0.0015621185302734

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('194', 'COIN MASTER BABY-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.010987997055054

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066089630126953

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066089630126953

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066089630126953

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002901554107666

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00066089630126953

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00019001960754395

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '195' or  (name = 'THINKING-FO' ) and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from item_master where   code = '195' or  (name = 'THINKING-FO' ) and office_id= '1' 
 Execution Time:0.00060200691223145

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('195', 'THINKING-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0033700466156006

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00071501731872559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037641525268555

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00071501731872559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037641525268555

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025391578674316

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00071501731872559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037641525268555

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025391578674316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00037002563476562

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00071501731872559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0037641525268555

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00025391578674316

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from item_master where   code = '196' or  (name = 'DRYER' ) and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from item_master where   code = '196' or  (name = 'DRYER' ) and office_id= '1' 
 Execution Time:0.00059986114501953

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('196', 'DRYER', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0063889026641846

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0016238689422607

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0016238689422607

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0016238689422607

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0016238689422607

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0002751350402832

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00032281875610352

select count(*) as cnt from item_master where   code = '197' or  (name = 'PACEX HIGH QUALITY-FO' ) and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from item_master where   code = '197' or  (name = 'PACEX HIGH QUALITY-FO' ) and office_id= '1' 
 Execution Time:0.0003819465637207

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('197', 'PACEX HIGH QUALITY-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0054430961608887

select count(*) as cnt from item_master where item_id='196'  and office_id= '1' 
 Execution Time:0.00023818016052246

select count(*) as cnt from item_master where    item_id!='196' and    code = '196'  and   name = 'DRYER-FO'   and office_id= '1' 
 Execution Time:0.00055599212646484

UPDATE `item_master` SET `code` = '196', `name` = 'DRYER-FO', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '196' 
 Execution Time:0.0026071071624756

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054287910461426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075912475585938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054287910461426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075912475585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054287910461426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075912475585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00054287910461426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075912475585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014996528625488

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from item_master where   code = '198' or  (name = 'THE CHASMA SHELL' ) and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from item_master where   code = '198' or  (name = 'THE CHASMA SHELL' ) and office_id= '1' 
 Execution Time:0.00043106079101562

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('198', 'THE CHASMA SHELL', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0086970329284668

select count(*) as cnt from item_master where item_id='198'  and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from item_master where    item_id!='198' and    code = '198'  and   name = 'THE CHASMA SHELL-FO'   and office_id= '1' 
 Execution Time:0.00037193298339844

UPDATE `item_master` SET `code` = '198', `name` = 'THE CHASMA SHELL-FO', `category_id` = '2', `brand_id` = '0', `company_id` = '1', `hsn_code` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `description` = '', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `item_id` = '198' 
 Execution Time:0.0039551258087158

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00035405158996582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022387504577637

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001380443572998

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from item_master where   code = '199' or  (name = 'CHIC DIAR SACHI-FO' ) and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from item_master where   code = '199' or  (name = 'CHIC DIAR SACHI-FO' ) and office_id= '1' 
 Execution Time:0.0004119873046875

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('199', 'CHIC DIAR SACHI-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0025978088378906

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001678466796875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001678466796875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002129077911377

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00038790702819824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.0001678466796875

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from item_master where   code = '200' or  (name = 'SELINE-FO' ) and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from item_master where   code = '200' or  (name = 'SELINE-FO' ) and office_id= '1' 
 Execution Time:0.00043606758117676

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('200', 'SELINE-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0047399997711182

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027084350585938

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014805793762207

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from item_master where   code = '201' or  (name = 'SUNRISE VIRAT-FO' ) and office_id= '1' 
 Execution Time:0.00065112113952637

select count(*) as cnt from item_master where   code = '201' or  (name = 'SUNRISE VIRAT-FO' ) and office_id= '1' 
 Execution Time:0.00065112113952637

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('201', 'SUNRISE VIRAT-FO', '1', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0049090385437012

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024080276489258

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024080276489258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024080276489258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018310546875

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0003819465637207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024080276489258

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00017285346984863

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00018310546875

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from item_master where   code = '202' or  (name = 'AONE-FO' ) and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from item_master where   code = '202' or  (name = 'AONE-FO' ) and office_id= '1' 
 Execution Time:0.0004429817199707

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('202', 'AONE-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0052611827850342

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014019012451172

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014019012451172

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020503997802734

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00032496452331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030303001403809

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00014019012451172

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from item_master where   code = '203' or  (name = 'EYE FAN-FO' ) and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from item_master where   code = '203' or  (name = 'EYE FAN-FO' ) and office_id= '1' 
 Execution Time:0.00046896934509277

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('203', 'EYE FAN-FO', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0061390399932861

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0028619766235352


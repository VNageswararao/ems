select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0023519992828369

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052714347839355

select count(*) as cnt from customer where   code = '086' or  (name = 'MANOJ KUMAR'  and mobile='9605245434'  and office_id= '1') 
 Execution Time:0.00060391426086426

select count(*) as cnt from customer where   code = '086' or  (name = 'MANOJ KUMAR'  and mobile='9605245434'  and office_id= '1') 
 Execution Time:0.00060391426086426

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('086', 'MANOJ KUMAR', '1', '9605245434', '', '', '19560', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0052850246429443

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047683715820312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from customer where   code = '087' or  (name = 'KRISHNAN.K'  and mobile='9526297864'  and office_id= '1') 
 Execution Time:0.00053501129150391

select count(*) as cnt from customer where   code = '087' or  (name = 'KRISHNAN.K'  and mobile='9526297864'  and office_id= '1') 
 Execution Time:0.00053501129150391

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('087', 'KRISHNAN.K', '1', '9526297864', '', '', '28798', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.014904975891113

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049591064453125

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00059390068054199

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00024199485778809

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00058579444885254

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF RX PG HC' and office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from lens_master where   code = '0' and name = 'KBF RX PG HC' and office_id= '1' 
 Execution Time:0.00037288665771484

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'KBF RX PG HC', '1', '2', '', '1690', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0051090717315674

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

select count(*) as cnt  from sales_master where   sales_id='89' and office_id= '1' 
 Execution Time:0.00036501884460449

select * from office where  office_id= '1' 
 Execution Time:0.0010750293731689

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from supplier where   code = '04' or  (name = 'LULU OPTICAL CENTRE'  and mobile='9447264407'  and office_id= '1') 
 Execution Time:0.0005640983581543

select count(*) as cnt from supplier where   code = '04' or  (name = 'LULU OPTICAL CENTRE'  and mobile='9447264407'  and office_id= '1') 
 Execution Time:0.0005640983581543

INSERT INTO `supplier` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `address`, `description`, `contact_person_name`, `contact_person_mobile`, `gstin_type`, `gst_no`, `category_id`, `status`, `login_id`, `office_id`) VALUES ('04', 'LULU OPTICAL CENTRE', '1', '9447264407', '', '', 'RUBY SHOPPING COMPLEX OLD BUS STAND PAYYANUR', '', '', '', '1', '32AFAPA3350A1ZN', '2', '1', '1', '1') 
 Execution Time:0.0027709007263184

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057816505432129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057816505432129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015616416931152

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057816505432129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015616416931152

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0020449161529541

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00057816505432129

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031018257141113

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00015616416931152

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from item_master where   code = '204' or  (name = 'REALITY FULL FRAME' ) and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from item_master where   code = '204' or  (name = 'REALITY FULL FRAME' ) and office_id= '1' 
 Execution Time:0.00046014785766602

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('204', 'REALITY FULL FRAME', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0086090564727783

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045490264892578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00074601173400879

select count(*) as cnt from customer where   code = '088' or  (name = 'ROHIT ABRAHAM'  and mobile='9496718259'  and office_id= '1') 
 Execution Time:0.0004889965057373

select count(*) as cnt from customer where   code = '088' or  (name = 'ROHIT ABRAHAM'  and mobile='9496718259'  and office_id= '1') 
 Execution Time:0.0004889965057373

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('088', 'ROHIT ABRAHAM', '1', '9496718259', '', '', '42912', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0066671371459961

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066614151000977

select count(*) as cnt from customer where   code = '089' or  (name = 'RAJANI VP'  and mobile='9400650719'  and office_id= '1') 
 Execution Time:0.00047397613525391

select count(*) as cnt from customer where   code = '089' or  (name = 'RAJANI VP'  and mobile='9400650719'  and office_id= '1') 
 Execution Time:0.00047397613525391

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('089', 'RAJANI VP', '2', '9400650719', '', '', '42925', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0052509307861328

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0038959980010986

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055885314941406

select count(*) as cnt from customer where   code = '090' or  (name = 'SAROJINI P'  and mobile='8281074011'  and office_id= '1') 
 Execution Time:0.00045299530029297

select count(*) as cnt from customer where   code = '090' or  (name = 'SAROJINI P'  and mobile='8281074011'  and office_id= '1') 
 Execution Time:0.00045299530029297

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('090', 'SAROJINI P', '2', '8281074011', '', '', '40581', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0061020851135254

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046110153198242

select count(*) as cnt from customer where   code = '091' or  (name = 'VIPIN K M'  and mobile='7034279285'  and office_id= '1') 
 Execution Time:0.00050091743469238

select count(*) as cnt from customer where   code = '091' or  (name = 'VIPIN K M'  and mobile='7034279285'  and office_id= '1') 
 Execution Time:0.00050091743469238

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('091', 'VIPIN K M', '1', '7034279285', '', '', '43029', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0047130584716797

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00031781196594238

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00023794174194336

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA FINO SUNLITE PG SATIN' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from lens_master where   code = '0' and name = 'NOVA FINO SUNLITE PG SATIN' and office_id= '1' 
 Execution Time:0.00042510032653809

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'NOVA FINO SUNLITE PG SATIN', '1', '2', '2021-03-20', '2280', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0049700736999512

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from customer where   code = '092' or  (name = 'LIJA N E'  and mobile='9744317377'  and office_id= '1') 
 Execution Time:0.00037813186645508

select count(*) as cnt from customer where   code = '092' or  (name = 'LIJA N E'  and mobile='9744317377'  and office_id= '1') 
 Execution Time:0.00037813186645508

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('092', 'LIJA N E', '2', '9744317377', '', '', '330041', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028221607208252

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051403045654297

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0011069774627686

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00069808959960938

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00030899047851562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024104118347168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from customer where   code = '093' or  (name = 'RAJITH A'  and mobile='8089582541'  and office_id= '1') 
 Execution Time:0.00062680244445801

select count(*) as cnt from customer where   code = '093' or  (name = 'RAJITH A'  and mobile='8089582541'  and office_id= '1') 
 Execution Time:0.00062680244445801

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('093', 'RAJITH A', '1', '8089582541', '', '', '42928', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0048389434814453

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from customer where   code = '094' or  (name = 'KUNHIKRISHNAN E P V'  and mobile='9846687128'  and office_id= '1') 
 Execution Time:0.00056695938110352

select count(*) as cnt from customer where   code = '094' or  (name = 'KUNHIKRISHNAN E P V'  and mobile='9846687128'  and office_id= '1') 
 Execution Time:0.00056695938110352

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('094', 'KUNHIKRISHNAN E P V', '1', '9846687128', '', '', '2665', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028810501098633

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00084090232849121

select count(*) as cnt  from sales_master where   sales_id='95' and office_id= '1' 
 Execution Time:0.0004880428314209

select * from office where  office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from customer where   code = '095' or  (name = 'HARITHA C I'  and mobile='9495458741'  and office_id= '1') 
 Execution Time:0.00056004524230957

select count(*) as cnt from customer where   code = '095' or  (name = 'HARITHA C I'  and mobile='9495458741'  and office_id= '1') 
 Execution Time:0.00056004524230957

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('095', 'HARITHA C I', '2', '9495458741', '', '', '42937', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0049679279327393

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from customer where   code = '096' or  (name = 'DAMODHARAN P'  and mobile='9747403655'  and office_id= '1') 
 Execution Time:0.00038504600524902

select count(*) as cnt from customer where   code = '096' or  (name = 'DAMODHARAN P'  and mobile='9747403655'  and office_id= '1') 
 Execution Time:0.00038504600524902

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('096', 'DAMODHARAN P', '1', '9747403655', '', '', '42901', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0059161186218262

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039219856262207

select count(*) as cnt from customer where   code = '097' or  (name = 'DEVAYANI K'  and mobile='9605871903'  and office_id= '1') 
 Execution Time:0.00068902969360352

select count(*) as cnt from customer where   code = '097' or  (name = 'DEVAYANI K'  and mobile='9605871903'  and office_id= '1') 
 Execution Time:0.00068902969360352

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('097', 'DEVAYANI K', '2', '9605871903', '', '', '41799', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0035510063171387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046014785766602

select count(*) as cnt from customer where   code = '098' or  (name = 'KARTHIYAYANI M'  and mobile='9745527490'  and office_id= '1') 
 Execution Time:0.00043916702270508

select count(*) as cnt from customer where   code = '098' or  (name = 'KARTHIYAYANI M'  and mobile='9745527490'  and office_id= '1') 
 Execution Time:0.00043916702270508

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('098', 'KARTHIYAYANI M', '2', '9745527490', '', '', '41947', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0077199935913086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007328987121582

select count(*) as cnt from customer where   code = '099' or  (name = 'BALAMANI C C'  and mobile='8547171562'  and office_id= '1') 
 Execution Time:0.0059781074523926

select count(*) as cnt from customer where   code = '099' or  (name = 'BALAMANI C C'  and mobile='8547171562'  and office_id= '1') 
 Execution Time:0.0059781074523926

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('099', 'BALAMANI C C', '2', '8547171562', '', '', '42945', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.004810094833374

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0015418529510498

select count(*) as cnt from customer where   code = '100' or  (name = 'UMADEVI'  and mobile='9072183506'  and office_id= '1') 
 Execution Time:0.00059199333190918

select count(*) as cnt from customer where   code = '100' or  (name = 'UMADEVI'  and mobile='9072183506'  and office_id= '1') 
 Execution Time:0.00059199333190918

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('100', 'UMADEVI', '2', '9072183506', '', '', '42955', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0029611587524414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060296058654785

select count(*) as cnt from customer where   code = '101' or  (name = 'INDIRA K'  and mobile='9947767782'  and office_id= '1') 
 Execution Time:0.00046706199645996

select count(*) as cnt from customer where   code = '101' or  (name = 'INDIRA K'  and mobile='9947767782'  and office_id= '1') 
 Execution Time:0.00046706199645996

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('101', 'INDIRA K', '2', '9947767782', '', '', '42984', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0039889812469482

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042080879211426

select count(*) as cnt from customer where customer_id='105'  and office_id= '1' 
 Execution Time:0.00031113624572754

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064992904663086

select count(*) as cnt from customer where   code = '102' or  (name = 'VALLI'  and mobile='9496755157'  and office_id= '1') 
 Execution Time:0.0004880428314209

select count(*) as cnt from customer where   code = '102' or  (name = 'VALLI'  and mobile='9496755157'  and office_id= '1') 
 Execution Time:0.0004880428314209

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('102', 'VALLI', '2', '9496755157', '', '', '20602', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0075621604919434

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030612945556641

select count(*) as cnt from customer where   code = '103' or  (name = 'VEENA E V'  and mobile='42959'  and office_id= '1') 
 Execution Time:0.00048494338989258

select count(*) as cnt from customer where   code = '103' or  (name = 'VEENA E V'  and mobile='42959'  and office_id= '1') 
 Execution Time:0.00048494338989258

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('103', 'VEENA E V', '2', '42959', '', '', '42959', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0024149417877197

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031089782714844

select count(*) as cnt from customer where   code = '104' or  (name = 'KANNAN'  and mobile='9744322323'  and office_id= '1') 
 Execution Time:0.00040602684020996

select count(*) as cnt from customer where   code = '104' or  (name = 'KANNAN'  and mobile='9744322323'  and office_id= '1') 
 Execution Time:0.00040602684020996

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('104', 'KANNAN', '1', '9744322323', '', '', '42692', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0034489631652832

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055313110351562

select count(*) as cnt from customer where   code = '105' or  (name = 'BALAMANI'  and mobile='9744269475'  and office_id= '1') 
 Execution Time:0.00041794776916504

select count(*) as cnt from customer where   code = '105' or  (name = 'BALAMANI'  and mobile='9744269475'  and office_id= '1') 
 Execution Time:0.00041794776916504

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('105', 'BALAMANI', '2', '9744269475', '', '', '42969', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0057530403137207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00070595741271973

select count(*) as cnt from customer where   code = '106' or  (name = 'LEELA K V'  and mobile='9562618254'  and office_id= '1') 
 Execution Time:0.00048017501831055

select count(*) as cnt from customer where   code = '106' or  (name = 'LEELA K V'  and mobile='9562618254'  and office_id= '1') 
 Execution Time:0.00048017501831055

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('106', 'LEELA K V', '2', '9562618254', '', '', '637', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028491020202637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from customer where   code = '107' or  (name = 'RAGHAVAN K'  and mobile='9746376069'  and office_id= '1') 
 Execution Time:0.00041604042053223

select count(*) as cnt from customer where   code = '107' or  (name = 'RAGHAVAN K'  and mobile='9746376069'  and office_id= '1') 
 Execution Time:0.00041604042053223

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('107', 'RAGHAVAN K', '1', '9746376069', '', '', '39176', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0048291683197021

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select count(*) as cnt from customer where   code = '108' or  (name = 'INDIRA P'  and mobile='9562850856'  and office_id= '1') 
 Execution Time:0.00052380561828613

select count(*) as cnt from customer where   code = '108' or  (name = 'INDIRA P'  and mobile='9562850856'  and office_id= '1') 
 Execution Time:0.00052380561828613

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('108', 'INDIRA P', '2', '9562850856', '', '', '43037', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0091691017150879

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043010711669922

select count(*) as cnt from customer where   code = '109' or  (name = 'PADMAVATHI'  and mobile='9564879564'  and office_id= '1') 
 Execution Time:0.00071287155151367

select count(*) as cnt from customer where   code = '109' or  (name = 'PADMAVATHI'  and mobile='9564879564'  and office_id= '1') 
 Execution Time:0.00071287155151367

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('109', 'PADMAVATHI', '2', '9564879564', '', '', '41887', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0032439231872559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063586235046387

select count(*) as cnt from customer where   code = '110' or  (name = 'KRISHNAN T V'  and mobile='9995417067'  and office_id= '1') 
 Execution Time:0.00055503845214844

select count(*) as cnt from customer where   code = '110' or  (name = 'KRISHNAN T V'  and mobile='9995417067'  and office_id= '1') 
 Execution Time:0.00055503845214844

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('110', 'KRISHNAN T V', '1', '9995417067', '', '', '43035', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028350353240967

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046014785766602

select count(*) as cnt from customer where   code = '111' or  (name = 'YESHODA'  and mobile='9526162804'  and office_id= '1') 
 Execution Time:0.00036096572875977

select count(*) as cnt from customer where   code = '111' or  (name = 'YESHODA'  and mobile='9526162804'  and office_id= '1') 
 Execution Time:0.00036096572875977

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('111', 'YESHODA', '2', '9526162804', '', '', '41949', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0026848316192627

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042200088500977

select count(*) as cnt from customer where   code = '112' or  (name = 'SUKUMARAN K'  and mobile='9526047289'  and office_id= '1') 
 Execution Time:0.00075483322143555

select count(*) as cnt from customer where   code = '112' or  (name = 'SUKUMARAN K'  and mobile='9526047289'  and office_id= '1') 
 Execution Time:0.00075483322143555

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('112', 'SUKUMARAN K', '1', '9526047289', '', '', '42803', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0030200481414795

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00086498260498047

select count(*) as cnt from customer where   code = '113' or  (name = 'NANDANAN P V'  and mobile='9072468241'  and office_id= '1') 
 Execution Time:0.00050806999206543

select count(*) as cnt from customer where   code = '113' or  (name = 'NANDANAN P V'  and mobile='9072468241'  and office_id= '1') 
 Execution Time:0.00050806999206543

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('113', 'NANDANAN P V', '1', '9072468241', '', '', '25202', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0037679672241211

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050115585327148

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004730224609375

select count(*) as cnt from customer where   code = '114' or  (name = 'FRANSISKA'  and mobile='9072710906'  and office_id= '1') 
 Execution Time:0.00042295455932617

select count(*) as cnt from customer where   code = '114' or  (name = 'FRANSISKA'  and mobile='9072710906'  and office_id= '1') 
 Execution Time:0.00042295455932617

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('114', 'FRANSISKA', '2', '9072710906', '', '', '646', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0023460388183594

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058913230895996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from customer where   code = '115' or  (name = 'RADHAKRISHNAN'  and mobile='9400463049'  and office_id= '1') 
 Execution Time:0.00044107437133789

select count(*) as cnt from customer where   code = '115' or  (name = 'RADHAKRISHNAN'  and mobile='9400463049'  and office_id= '1') 
 Execution Time:0.00044107437133789

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('115', 'RADHAKRISHNAN', '1', '9400463049', '', '', '42998', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0069389343261719

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039219856262207

select count(*) as cnt  from sales_master where   sales_id='112' and office_id= '1' 
 Execution Time:0.00026798248291016

select * from office where  office_id= '1' 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040817260742188

select count(*) as cnt from customer where   code = '116' or  (name = 'BHAVANI P'  and mobile='9447054953'  and office_id= '1') 
 Execution Time:0.00043988227844238

select count(*) as cnt from customer where   code = '116' or  (name = 'BHAVANI P'  and mobile='9447054953'  and office_id= '1') 
 Execution Time:0.00043988227844238

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('116', 'BHAVANI P', '2', '9447054953', '', '', '43001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0052289962768555

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043201446533203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from customer where   code = '117' or  (name = 'JAMEELA P K'  and mobile='04985222404'  and office_id= '1') 
 Execution Time:0.0003960132598877

select count(*) as cnt from customer where   code = '117' or  (name = 'JAMEELA P K'  and mobile='04985222404'  and office_id= '1') 
 Execution Time:0.0003960132598877

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('117', 'JAMEELA P K', '2', '04985222404', '', '', '930', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0091521739959717

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036406517028809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036811828613281

select count(*) as cnt from customer where   code = '118' or  (name = 'GEETHA V'  and mobile='9544767583'  and office_id= '1') 
 Execution Time:0.00046801567077637

select count(*) as cnt from customer where   code = '118' or  (name = 'GEETHA V'  and mobile='9544767583'  and office_id= '1') 
 Execution Time:0.00046801567077637

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('118', 'GEETHA V', '2', '9544767583', '', '', '43023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0024330615997314

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005500316619873

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069689750671387

select count(*) as cnt from customer where   code = '119' or  (name = 'VALSALA'  and mobile='9846112925'  and office_id= '1') 
 Execution Time:0.00052595138549805

select count(*) as cnt from customer where   code = '119' or  (name = 'VALSALA'  and mobile='9846112925'  and office_id= '1') 
 Execution Time:0.00052595138549805

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('119', 'VALSALA', '2', '9846112925', '', '', '43022', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0042960643768311

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from customer where   code = '120' or  (name = 'SHAREEFA MUSTHAFA'  and mobile='9995834090'  and office_id= '1') 
 Execution Time:0.00048518180847168

select count(*) as cnt from customer where   code = '120' or  (name = 'SHAREEFA MUSTHAFA'  and mobile='9995834090'  and office_id= '1') 
 Execution Time:0.00048518180847168

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('120', 'SHAREEFA MUSTHAFA', '2', '9995834090', '', '', '43017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0059950351715088

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from customer where   code = '0121' or  (name = 'DHANALEKHA.PV'  and mobile='9495755911'  and office_id= '1') 
 Execution Time:0.00081515312194824

select count(*) as cnt from customer where   code = '0121' or  (name = 'DHANALEKHA.PV'  and mobile='9495755911'  and office_id= '1') 
 Execution Time:0.00081515312194824

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0121', 'DHANALEKHA.PV', '2', '9495755911', '', '', '43043', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0020921230316162

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069689750671387

select count(*) as cnt from customer where   code = '0122' or  (name = 'SHEEBA.P'  and mobile='7025549477'  and office_id= '1') 
 Execution Time:0.00076103210449219

select count(*) as cnt from customer where   code = '0122' or  (name = 'SHEEBA.P'  and mobile='7025549477'  and office_id= '1') 
 Execution Time:0.00076103210449219

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0122', 'SHEEBA.P', '2', '7025549477', '', '', '43046', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0070829391479492

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00088906288146973

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0011401176452637

select count(*) as cnt from customer where   code = '123' or  (name = 'SAJNA K'  and mobile='9656802644'  and office_id= '1') 
 Execution Time:0.00059103965759277

select count(*) as cnt from customer where   code = '123' or  (name = 'SAJNA K'  and mobile='9656802644'  and office_id= '1') 
 Execution Time:0.00059103965759277

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('123', 'SAJNA K', '2', '9656802644', '', '', '41292', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0041778087615967

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069785118103027

select count(*) as cnt from customer where   code = '124' or  (name = 'CHINJU'  and mobile='9497730030'  and office_id= '1') 
 Execution Time:0.00063204765319824

select count(*) as cnt from customer where   code = '124' or  (name = 'CHINJU'  and mobile='9497730030'  and office_id= '1') 
 Execution Time:0.00063204765319824

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('124', 'CHINJU', '2', '9497730030', '', '', '43050', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0077919960021973

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00056791305541992

select count(*) as cnt from customer where   code = '125' or  (name = 'LALITHA P V'  and mobile='8086343283'  and office_id= '1') 
 Execution Time:0.00078797340393066

select count(*) as cnt from customer where   code = '125' or  (name = 'LALITHA P V'  and mobile='8086343283'  and office_id= '1') 
 Execution Time:0.00078797340393066

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('125', 'LALITHA P V', '2', '8086343283', '', '', '43049', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0076091289520264

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061392784118652

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.001054048538208

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00054693222045898

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00034308433532715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032687187194824

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037884712219238

select count(*) as cnt  from sales_master where   sales_id='26' and office_id= '1' 
 Execution Time:0.00037097930908203

select * from office where  office_id= '1' 
 Execution Time:0.0011060237884521

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059890747070312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065898895263672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065112113952637

select count(*) as cnt from customer where customer_id='20'  and office_id= '1' 
 Execution Time:0.00035905838012695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058603286743164

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.00098109245300293

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00055193901062012

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00020813941955566

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00020909309387207


select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0025398731231689

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00076198577880859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049281120300293

select count(*) as cnt  from sales_master where   sales_id='294' and office_id= '1' 
 Execution Time:0.00033116340637207

select * from office where  office_id= '1' 
 Execution Time:0.0025689601898193

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050497055053711

select count(*) as cnt  from sales_master where   sales_id='236' and office_id= '1' 
 Execution Time:0.00049304962158203

select * from office where  office_id= '1' 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040316581726074

select count(*) as cnt  from sales_master where   sales_id='238' and office_id= '1' 
 Execution Time:0.00032401084899902

select * from office where  office_id= '1' 
 Execution Time:0.00035381317138672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034904479980469

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005650520324707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066995620727539

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005650520324707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066995620727539

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023317337036133

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005650520324707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066995620727539

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023317337036133

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0021939277648926

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.0005650520324707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066995620727539

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00023317337036133

select * from company where    office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from item_master where   code = '230' or  (name = 'SPEX-LU' ) and office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from item_master where   code = '230' or  (name = 'SPEX-LU' ) and office_id= '1' 
 Execution Time:0.00044989585876465

INSERT INTO `item_master` (`code`, `name`, `category_id`, `brand_id`, `company_id`, `hsn_code`, `gst_type`, `tax`, `cgst`, `sgst`, `description`, `status`, `login_id`, `office_id`) VALUES ('230', 'SPEX-LU', '2', '0', '1', '', '1', '1', '6', '6', '', '1', '1', '1') 
 Execution Time:0.0051119327545166

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058698654174805

select count(*) as cnt from customer where   code = '0301' or  (name = 'ASSAINAR'  and mobile='9744175105'  and office_id= '1') 
 Execution Time:0.00095796585083008

select count(*) as cnt from customer where   code = '0301' or  (name = 'ASSAINAR'  and mobile='9744175105'  and office_id= '1') 
 Execution Time:0.00095796585083008

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0301', 'ASSAINAR', '1', '9744175105', '', '', '0301', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0062429904937744

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071907043457031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075101852416992

select count(*) as cnt from customer where   code = '302' or  (name = 'JAYACHANDRAN PV'  and mobile='9495776982'  and office_id= '1') 
 Execution Time:0.0007929801940918

select count(*) as cnt from customer where   code = '302' or  (name = 'JAYACHANDRAN PV'  and mobile='9495776982'  and office_id= '1') 
 Execution Time:0.0007929801940918

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('302', 'JAYACHANDRAN PV', '1', '9495776982', '', '', '43536', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0027379989624023

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006721019744873

select count(*) as cnt from customer where   code = '303' or  (name = 'GOKUL KRISHNAN'  and mobile='7306741153'  and office_id= '1') 
 Execution Time:0.00048589706420898

select count(*) as cnt from customer where   code = '303' or  (name = 'GOKUL KRISHNAN'  and mobile='7306741153'  and office_id= '1') 
 Execution Time:0.00048589706420898

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('303', 'GOKUL KRISHNAN', '1', '7306741153', '', '', '43546', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0061111450195312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062894821166992

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041794776916504

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00052809715270996

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00016999244689941

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from lens_master where lens_master_id='25'   and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from lens_master where lens_master_id='25'   and office_id= '1' 
 Execution Time:0.00049901008605957

select * from lens_master where    lens_master_id = '25' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from lens_master where lens_master_id!='25' and   code = '0' and name = 'NOVATHINMAX 1.5 BLUMAXULTRA' and office_id= '1' 
 Execution Time:0.00038504600524902

UPDATE `lens_master` SET `code` = '0', `name` = 'NOVATHINMAX 1.5 BLUMAXULTRA', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-19', `purchase_amount` = '1420', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '25' 
 Execution Time:0.0046918392181396

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037288665771484

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00041007995605469

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00020480155944824

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from lens_master where lens_master_id='25'   and office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from lens_master where lens_master_id='25'   and office_id= '1' 
 Execution Time:0.00044417381286621

select * from lens_master where    lens_master_id = '25' and office_id= '1' 
 Execution Time:0.00029683113098145

select count(*) as cnt from lens_master where lens_master_id!='25' and   code = '0' and name = 'NOVA THINMAX 1.5 BLUMAX ULTRA' and office_id= '1' 
 Execution Time:0.00044083595275879

UPDATE `lens_master` SET `code` = '0', `name` = 'NOVA THINMAX 1.5 BLUMAX ULTRA', `lens_type_id` = '1', `lens_coating_id` = '2', `purchase_date` = '2021-03-19', `purchase_amount` = '1420', `description` = '', `gst_type` = '1', `tax` = '1', `cgst` = '6', `sgst` = '6', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `lens_master_id` = '25' 
 Execution Time:0.005897045135498

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004580020904541

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0017809867858887

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00051689147949219

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0001521110534668

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033998489379883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from customer where   code = '304' or  (name = 'KUNHIRAMAN V K'  and mobile='9496401439'  and office_id= '1') 
 Execution Time:0.00058817863464355

select count(*) as cnt from customer where   code = '304' or  (name = 'KUNHIRAMAN V K'  and mobile='9496401439'  and office_id= '1') 
 Execution Time:0.00058817863464355

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('304', 'KUNHIRAMAN V K', '1', '9496401439', '', '', '1036', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0080211162567139

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046992301940918

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0020930767059326

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00053000450134277

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.0002748966217041

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022101402282715

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0009148120880127

select count(*) as cnt from customer where   code = '305' or  (name = 'NIRMALA'  and mobile='9400763143'  and office_id= '1') 
 Execution Time:0.0008549690246582

select count(*) as cnt from customer where   code = '305' or  (name = 'NIRMALA'  and mobile='9400763143'  and office_id= '1') 
 Execution Time:0.0008549690246582

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('305', 'NIRMALA', '2', '9400763143', '', '', '43550', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.002659797668457

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048398971557617

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0019888877868652

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00067996978759766

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042319297790527

select count(*) as cnt  from sales_master where   sales_id='274' and office_id= '1' 
 Execution Time:0.00047397613525391

select * from office where  office_id= '1' 
 Execution Time:0.00068211555480957

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0018041133880615

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00045108795166016

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00014805793762207

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031590461730957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00044512748718262

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00017309188842773

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from lens_master where   code = '0' and name = 'HOYA AMPLITUDE PLUS 1.50 HC' and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from lens_master where   code = '0' and name = 'HOYA AMPLITUDE PLUS 1.50 HC' and office_id= '1' 
 Execution Time:0.00046586990356445

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'HOYA AMPLITUDE PLUS 1.50 HC', '1', '2', '2021-04-02', '5100', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0052077770233154

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from customer where   code = '306' or  (name = 'SATHYAN T'  and mobile='9446225501'  and office_id= '1') 
 Execution Time:0.00049209594726562

select count(*) as cnt from customer where   code = '306' or  (name = 'SATHYAN T'  and mobile='9446225501'  and office_id= '1') 
 Execution Time:0.00049209594726562

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('306', 'SATHYAN T', '1', '9446225501', '', '', '43585', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0031139850616455

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from customer where   code = '307' or  (name = 'SANTHOSH K M'  and mobile='9562733677'  and office_id= '1') 
 Execution Time:0.00073409080505371

select count(*) as cnt from customer where   code = '307' or  (name = 'SANTHOSH K M'  and mobile='9562733677'  and office_id= '1') 
 Execution Time:0.00073409080505371

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('307', 'SANTHOSH K M', '2', '9562733677', '', '', '43560', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0051472187042236

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from customer where   code = '308' or  (name = 'VIMALA C V'  and mobile='9497696570'  and office_id= '1') 
 Execution Time:0.00060486793518066

select count(*) as cnt from customer where   code = '308' or  (name = 'VIMALA C V'  and mobile='9497696570'  and office_id= '1') 
 Execution Time:0.00060486793518066

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('308', 'VIMALA C V', '2', '9497696570', '', '', '18639', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0046730041503906

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040197372436523

select count(*) as cnt from customer where   code = '309' or  (name = 'LAKSHMANAN A'  and mobile='9495082408'  and office_id= '1') 
 Execution Time:0.0010991096496582

select count(*) as cnt from customer where   code = '309' or  (name = 'LAKSHMANAN A'  and mobile='9495082408'  and office_id= '1') 
 Execution Time:0.0010991096496582

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('309', 'LAKSHMANAN A', '1', '9495082408', '', '', '15835', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0026178359985352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.036611080169678

select count(*) as cnt from customer where   code = '310' or  (name = 'MANOJ KUMAR'  and mobile='9961383636'  and office_id= '1') 
 Execution Time:0.00076699256896973

select count(*) as cnt from customer where   code = '310' or  (name = 'MANOJ KUMAR'  and mobile='9961383636'  and office_id= '1') 
 Execution Time:0.00076699256896973

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('310', 'MANOJ KUMAR', '1', '9961383636', '', '', '43563', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0093319416046143

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from customer where   code = '311' or  (name = 'MURALEEDHARAN K M'  and mobile='9447803198'  and office_id= '1') 
 Execution Time:0.0009610652923584

select count(*) as cnt from customer where   code = '311' or  (name = 'MURALEEDHARAN K M'  and mobile='9447803198'  and office_id= '1') 
 Execution Time:0.0009610652923584

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('311', 'MURALEEDHARAN K M', '1', '9447803198', '', '', '43556', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0050311088562012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00033092498779297

select count(*) as cnt  from sales_master where   sales_id='273' and office_id= '1' 
 Execution Time:0.00058913230895996

select * from office where  office_id= '1' 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from customer where   code = '312' or  (name = 'ROHINI K V'  and mobile='9633604395'  and office_id= '1') 
 Execution Time:0.00080585479736328

select count(*) as cnt from customer where   code = '312' or  (name = 'ROHINI K V'  and mobile='9633604395'  and office_id= '1') 
 Execution Time:0.00080585479736328

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('312', 'ROHINI K V', '2', '9633604395', '', '', '43566', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0020008087158203

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041389465332031

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00029397010803223

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00015902519226074

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from lens_master where lens_master_id='39'   and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from lens_master where lens_master_id='39'   and office_id= '1' 
 Execution Time:0.00071501731872559

select * from lens_master where    lens_master_id = '39' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from lens_master where   code = '06' and name = 'ZEISS PRO LIGHTD DURAVISION BC' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from lens_master where   code = '06' and name = 'ZEISS PRO LIGHTD DURAVISION BC' and office_id= '1' 
 Execution Time:0.00035810470581055

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('06', 'ZEISS PRO LIGHTD DURAVISION BC', '1', '2', '', '8700', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0078887939453125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053811073303223

select count(*) as cnt from customer where   code = '0313' or  (name = 'JAYACHANDRAN. C V'  and mobile='9447703902'  and office_id= '1') 
 Execution Time:0.0032241344451904

select count(*) as cnt from customer where   code = '0313' or  (name = 'JAYACHANDRAN. C V'  and mobile='9447703902'  and office_id= '1') 
 Execution Time:0.0032241344451904

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0313', 'JAYACHANDRAN. C V', '1', '9447703902', '', '', '43566', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0060391426086426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005180835723877

select count(*) as cnt  from sales_master where   sales_id='185' and office_id= '1' 
 Execution Time:0.00044989585876465

select * from office where  office_id= '1' 
 Execution Time:0.00030183792114258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036287307739258

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from customer where   code = '314' or  (name = 'K V NARAYANAN'  and mobile='9447686012'  and office_id= '1') 
 Execution Time:0.00088906288146973

select count(*) as cnt from customer where   code = '314' or  (name = 'K V NARAYANAN'  and mobile='9447686012'  and office_id= '1') 
 Execution Time:0.00088906288146973

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('314', 'K V NARAYANAN', '1', '9447686012', '', '', '35860', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0031390190124512

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046110153198242

select count(*) as cnt from customer where   code = '315' or  (name = 'PRAMOD C'  and mobile='9495410742'  and office_id= '1') 
 Execution Time:0.00045108795166016

select count(*) as cnt from customer where   code = '315' or  (name = 'PRAMOD C'  and mobile='9495410742'  and office_id= '1') 
 Execution Time:0.00045108795166016

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('315', 'PRAMOD C', '1', '9495410742', '', '', '22520', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0020248889923096

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00032305717468262

select count(*) as cnt from customer where   code = '316' or  (name = 'NARAYANI K'  and mobile='9447685420'  and office_id= '1') 
 Execution Time:0.00053000450134277

select count(*) as cnt from customer where   code = '316' or  (name = 'NARAYANI K'  and mobile='9447685420'  and office_id= '1') 
 Execution Time:0.00053000450134277

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('316', 'NARAYANI K', '2', '9447685420', '', '', '28725', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0085570812225342

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031280517578125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001662015914917

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005800724029541

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045394897460938

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0032780170440674

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00073790550231934

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00033903121948242

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00027704238891602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041508674621582

select count(*) as cnt  from sales_master where   sales_id='247' and office_id= '1' 
 Execution Time:0.00049090385437012

select * from office where  office_id= '1' 
 Execution Time:0.00063300132751465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053215026855469

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0031991004943848

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0008690357208252

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00029993057250977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044798851013184

select count(*) as cnt  from sales_master where   sales_id='209' and office_id= '1' 
 Execution Time:0.00036096572875977

select * from office where  office_id= '1' 
 Execution Time:0.00055503845214844

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063395500183105

select count(*) as cnt  from sales_master where   sales_id='232' and office_id= '1' 
 Execution Time:0.00028491020202637

select * from office where  office_id= '1' 
 Execution Time:0.00062990188598633

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055909156799316

select count(*) as cnt  from sales_master where   sales_id='267' and office_id= '1' 
 Execution Time:0.00031900405883789

select * from office where  office_id= '1' 
 Execution Time:0.00062799453735352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00060296058654785

select count(*) as cnt  from sales_master where   sales_id='269' and office_id= '1' 
 Execution Time:0.00035786628723145

select * from office where  office_id= '1' 
 Execution Time:0.00034594535827637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00067591667175293

select count(*) as cnt from customer where   code = '0317' or  (name = 'KRISHNAN.KTV'  and mobile='9400241483'  and office_id= '1') 
 Execution Time:0.00059199333190918

select count(*) as cnt from customer where   code = '0317' or  (name = 'KRISHNAN.KTV'  and mobile='9400241483'  and office_id= '1') 
 Execution Time:0.00059199333190918

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0317', 'KRISHNAN.KTV', '1', '9400241483', '', '', '8220', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0067188739776611

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043416023254395

select count(*) as cnt  from sales_master where   sales_id='300' and office_id= '1' 
 Execution Time:0.00053286552429199

select * from office where  office_id= '1' 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040197372436523

select count(*) as cnt from customer where   code = '0317' or  (name = 'SUMI.N M'  and mobile='9446054671'  and office_id= '1') 
 Execution Time:0.00064301490783691

select count(*) as cnt from customer where   code = '318' or  (name = 'SUMI.N M'  and mobile='9446054671'  and office_id= '1') 
 Execution Time:0.00078988075256348

select count(*) as cnt from customer where   code = '318' or  (name = 'SUMI.N M'  and mobile='9446054671'  and office_id= '1') 
 Execution Time:0.00078988075256348

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('318', 'SUMI.N M', '2', '9446054671', '', '', '43576', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.007943868637085

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047397613525391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037407875061035

select count(*) as cnt  from sales_master where   sales_id='168' and office_id= '1' 
 Execution Time:0.00059294700622559

select * from office where  office_id= '1' 
 Execution Time:0.0004730224609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from customer where   code = '319' or  (name = 'JANAKI K'  and mobile='9497054389'  and office_id= '1') 
 Execution Time:0.0007319450378418

select count(*) as cnt from customer where   code = '319' or  (name = 'JANAKI K'  and mobile='9497054389'  and office_id= '1') 
 Execution Time:0.0007319450378418

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('319', 'JANAKI K', '2', '9497054389', '', '', '7030', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0057659149169922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00030899047851562

select count(*) as cnt  from sales_master where   sales_id='297' and office_id= '1' 
 Execution Time:0.00050783157348633

select * from office where  office_id= '1' 
 Execution Time:0.0003049373626709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046896934509277

select count(*) as cnt  from sales_master where   sales_id='224' and office_id= '1' 
 Execution Time:0.0010831356048584

select * from office where  office_id= '1' 
 Execution Time:0.00031900405883789

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045514106750488

select count(*) as cnt  from sales_master where   sales_id='274' and office_id= '1' 
 Execution Time:0.0003359317779541

select * from office where  office_id= '1' 
 Execution Time:0.00035285949707031

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00035190582275391

select count(*) as cnt  from sales_master where   sales_id='217' and office_id= '1' 
 Execution Time:0.00097894668579102

select * from office where  office_id= '1' 
 Execution Time:0.00063395500183105

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from customer where   code = '320' or  (name = 'PRABHA T V'  and mobile='9446089811'  and office_id= '1') 
 Execution Time:0.00095415115356445

select count(*) as cnt from customer where   code = '320' or  (name = 'PRABHA T V'  and mobile='9446089811'  and office_id= '1') 
 Execution Time:0.00095415115356445

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('320', 'PRABHA T V', '2', '9446089811', '', '', '17673', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0070490837097168

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055193901062012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00026106834411621

select count(*) as cnt  from sales_master where   sales_id='184' and office_id= '1' 
 Execution Time:0.0003659725189209

select * from office where  office_id= '1' 
 Execution Time:0.00044703483581543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063800811767578

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006251335144043

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005340576171875

select count(*) as cnt from customer where   code = '321' or  (name = 'ASHINA N A'  and mobile='9207359813'  and office_id= '1') 
 Execution Time:0.0012409687042236

select count(*) as cnt from customer where   code = '321' or  (name = 'ASHINA N A'  and mobile='9207359813'  and office_id= '1') 
 Execution Time:0.0012409687042236

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('321', 'ASHINA N A', '2', '9207359813', '', '', '20719', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0028700828552246

select count(*) as cnt from customer where   code = '321' or  (name = 'ASHINA N A'  and mobile='9207359813'  and office_id= '1') 
 Execution Time:0.00088810920715332

select count(*) as cnt from customer where customer_id='324'  and office_id= '1' 
 Execution Time:0.00044584274291992

select count(*) as cnt from customer where customer_id='324'  and office_id= '1' 
 Execution Time:0.00044584274291992

DELETE FROM `customer`
WHERE `customer_id` = '324' 
 Execution Time:0.0023000240325928

select count(*) as cnt from customer where customer_id='324'  and office_id= '1' 
 Execution Time:0.00047707557678223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007171630859375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063586235046387

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010890960693359

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055503845214844

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0021779537200928

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0006258487701416

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00022006034851074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00047898292541504

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005791187286377

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007328987121582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058293342590332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039410591125488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039410591125488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046682357788086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00046014785766602

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004889965057373

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039196014404297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038504600524902

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00031185150146484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039100646972656

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049281120300293

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043392181396484

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043606758117676

select count(*) as cnt  from sales_master where   sales_id='280' and office_id= '1' 
 Execution Time:0.00047802925109863

select * from office where  office_id= '1' 
 Execution Time:0.0010659694671631

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043082237243652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066614151000977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055694580078125

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045299530029297

select count(*) as cnt  from sales_master where   sales_id='280' and office_id= '1' 
 Execution Time:0.00057196617126465

select * from office where  office_id= '1' 
 Execution Time:0.00027894973754883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00080394744873047

select count(*) as cnt from customer where   code = '0321' or  (name = 'ABDUL SATHAR'  and mobile='9746677403'  and office_id= '1') 
 Execution Time:0.00065898895263672

select count(*) as cnt from customer where   code = '0321' or  (name = 'ABDUL SATHAR'  and mobile='9746677403'  and office_id= '1') 
 Execution Time:0.00065898895263672

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('0321', 'ABDUL SATHAR', '1', '9746677403', '', '', '37582', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0021929740905762

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.000823974609375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066494941711426

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00081300735473633

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0020980834960938

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00067996978759766

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029301643371582

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00034999847412109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0013089179992676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061607360839844


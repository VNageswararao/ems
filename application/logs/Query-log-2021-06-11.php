select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0025639533996582

select count(*) as cnt  from sales_master where   sales_id='1066' and office_id= '1' 
 Execution Time:0.00084304809570312

select * from office where  office_id= '1' 
 Execution Time:0.0021791458129883

select count(*) as cnt  from sales_master where   sales_id='893' and office_id= '1' 
 Execution Time:0.0069751739501953

select * from office where  office_id= '1' 
 Execution Time:0.00069785118103027

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071406364440918

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079083442687988

select count(*) as cnt from customer where   code = '1097' or  (name = 'prasanna kumari'  and mobile='9447366100'  and office_id= '1') 
 Execution Time:0.0012331008911133

select count(*) as cnt from customer where   code = '1097' or  (name = 'prasanna kumari'  and mobile='9447366100'  and office_id= '1') 
 Execution Time:0.0012331008911133

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1097', 'prasanna kumari', '2', '9447366100', '', '', '45571', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052189826965332

select count(*) as cnt  from sales_master where   sales_id='830' and office_id= '1' 
 Execution Time:0.00068902969360352

select * from office where  office_id= '1' 
 Execution Time:0.0004429817199707

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059008598327637

select count(*) as cnt  from sales_master where   sales_id='1057' and office_id= '1' 
 Execution Time:0.0028629302978516

select * from office where  office_id= '1' 
 Execution Time:0.00040388107299805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052595138549805

select count(*) as cnt  from sales_master where   sales_id='1072' and office_id= '1' 
 Execution Time:0.00064992904663086

select * from office where  office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt  from sales_master where   sales_id='968' and office_id= '1' 
 Execution Time:0.00074005126953125

select * from office where  office_id= '1' 
 Execution Time:0.00049018859863281

select count(*) as cnt from customer where   code = '1098' or  (name = 'NARAYANI T P'  and mobile='9656709059'  and office_id= '1') 
 Execution Time:0.0011069774627686

select count(*) as cnt from customer where   code = '1098' or  (name = 'NARAYANI T P'  and mobile='9656709059'  and office_id= '1') 
 Execution Time:0.0011069774627686

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1098', 'NARAYANI T P', '2', '9656709059', '', '', '45170', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00045084953308105

select count(*) as cnt from customer where customer_id='1109'  and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from customer where customer_id='1109'  and office_id= '1' 
 Execution Time:0.00032615661621094

DELETE FROM `customer`
WHERE `customer_id` = '1109' 
 Execution Time:0.00022506713867188

select count(*) as cnt from customer where customer_id='1108'  and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from customer where customer_id='1108'  and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from customer where    customer_id!='1108' and    code = '1097'  and   name = 'PRASANNA KUMARI' and mobile='9447366100'  and office_id= '1' 
 Execution Time:0.0012860298156738

UPDATE `customer` SET `code` = '1097', `name` = 'PRASANNA KUMARI', `gender` = '2', `mobile` = '9447366100', `alter_mobile` = '', `email_id` = '', `mrd` = '45571', `address` = '', `description` = '', `resph1` = '', `resph2` = '', `resph3` = '', `resph4` = '', `recyl1` = '', `recyl2` = '', `recyl3` = '', `recyl4` = '', `reaxis1` = '', `reaxis2` = '', `reaxis3` = '', `reaxis4` = '', `reva1` = '', `reva2` = '', `reva3` = '', `reva4` = '', `material` = '', `cr` = '', `usage` = '', `type` = '', `ipd` = '', `pdre` = '', `le` = '', `segment` = '', `lle` = '', `prestype` = '1', `status` = '1', `login_id` = '1', `office_id` = '1'
WHERE `customer_id` = '1108' 
 Execution Time:0.00049185752868652

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0006859302520752

select count(*) as cnt  from sales_master where   sales_id='1002' and office_id= '1' 
 Execution Time:0.00075602531433105

select * from office where  office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt  from sales_master where   sales_id='1016' and office_id= '1' 
 Execution Time:0.00030398368835449

select * from office where  office_id= '1' 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058794021606445

select count(*) as cnt from customer where   code = '1098' or  (name = 'PADMINI K P'  and mobile='9847010747'  and office_id= '1') 
 Execution Time:0.0044529438018799

select count(*) as cnt from customer where   code = '1098' or  (name = 'PADMINI K P'  and mobile='9847010747'  and office_id= '1') 
 Execution Time:0.0044529438018799

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1098', 'PADMINI K P', '2', '9847010747', '', '', '45570', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00055885314941406

select count(*) as cnt from customer where   code = '1098' or  (name = 'PADMINI K P'  and mobile='9847010747'  and office_id= '1') 
 Execution Time:0.0014369487762451

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select count(*) as cnt from customer where   code = '1099' or  (name = 'SURENDRAN C'  and mobile='9048955529'  and office_id= '1') 
 Execution Time:0.0010828971862793

select count(*) as cnt from customer where   code = '1099' or  (name = 'SURENDRAN C'  and mobile='9048955529'  and office_id= '1') 
 Execution Time:0.0010828971862793

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1099', 'SURENDRAN C', '1', '9048955529', '', '', '45554', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050806999206543

select count(*) as cnt  from sales_master where   sales_id='998' and office_id= '1' 
 Execution Time:0.00037503242492676

select * from office where  office_id= '1' 
 Execution Time:0.00096678733825684

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051188468933105

select count(*) as cnt  from sales_master where   sales_id='699' and office_id= '1' 
 Execution Time:0.00054502487182617

select * from office where  office_id= '1' 
 Execution Time:0.00096511840820312

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069999694824219

select count(*) as cnt  from sales_master where   sales_id='1077' and office_id= '1' 
 Execution Time:0.00047898292541504

select * from office where  office_id= '1' 
 Execution Time:0.00036215782165527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00082206726074219

select count(*) as cnt  from sales_master where   sales_id='994' and office_id= '1' 
 Execution Time:0.00078105926513672

select * from office where  office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from customer where   code = '1100' or  (name = 'PRINCE V P'  and mobile='9745339229'  and office_id= '1') 
 Execution Time:0.0014810562133789

select count(*) as cnt from customer where   code = '1100' or  (name = 'PRINCE V P'  and mobile='9745339229'  and office_id= '1') 
 Execution Time:0.0014810562133789

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1100', 'PRINCE V P', '1', '9745339229', '', '', '45585', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00070405006408691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00088787078857422

select count(*) as cnt  from sales_master where   sales_id='1072' and office_id= '1' 
 Execution Time:0.00040102005004883

select * from office where  office_id= '1' 
 Execution Time:0.00040102005004883

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0007328987121582

select count(*) as cnt  from sales_master where   sales_id='1039' and office_id= '1' 
 Execution Time:0.00035691261291504

select * from office where  office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt  from sales_master where   sales_id='948' and office_id= '1' 
 Execution Time:0.00065803527832031

select * from office where  office_id= '1' 
 Execution Time:0.00045299530029297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065088272094727

select count(*) as cnt  from sales_master where   sales_id='1076' and office_id= '1' 
 Execution Time:0.00088214874267578

select * from office where  office_id= '1' 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00040912628173828

select count(*) as cnt from customer where   code = '1101' or  (name = 'NANDHINI A T'  and mobile='9747489871'  and office_id= '1') 
 Execution Time:0.0011360645294189

select count(*) as cnt from customer where   code = '1101' or  (name = 'NANDHINI A T'  and mobile='9747489871'  and office_id= '1') 
 Execution Time:0.0011360645294189

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1101', 'NANDHINI A T', '2', '9747489871', '', '', '45579', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00034093856811523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048089027404785

select count(*) as cnt  from sales_master where   sales_id='1066' and office_id= '1' 
 Execution Time:0.0031859874725342

select * from office where  office_id= '1' 
 Execution Time:0.0015280246734619

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00049805641174316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075006484985352

select count(*) as cnt  from sales_master where   sales_id='711' and office_id= '1' 
 Execution Time:0.00076389312744141

select * from office where  office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt  from sales_master where   sales_id='712' and office_id= '1' 
 Execution Time:0.00064206123352051

select * from office where  office_id= '1' 
 Execution Time:0.00040197372436523

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00070095062255859

select count(*) as cnt from customer where   code = '1102' or  (name = 'BINDHU E'  and mobile='9744882666'  and office_id= '1') 
 Execution Time:0.0011498928070068

select count(*) as cnt from customer where   code = '1102' or  (name = 'BINDHU E'  and mobile='9744882666'  and office_id= '1') 
 Execution Time:0.0011498928070068

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1102', 'BINDHU E', '2', '9744882666', '', '', '45593', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00029706954956055

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065207481384277

select count(*) as cnt  from sales_master where   sales_id='999' and office_id= '1' 
 Execution Time:0.0005040168762207

select * from office where  office_id= '1' 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071597099304199

select count(*) as cnt from customer where   code = '1103' or  (name = 'SREEJU K S'  and mobile='7909210947'  and office_id= '1') 
 Execution Time:0.0010440349578857

select count(*) as cnt from customer where   code = '1103' or  (name = 'SREEJU K S'  and mobile='7909210947'  and office_id= '1') 
 Execution Time:0.0010440349578857

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1103', 'SREEJU K S', '1', '7909210947', '', '', '44731', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00034689903259277

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073504447937012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00038695335388184

select count(*) as cnt  from sales_master where   sales_id='983' and office_id= '1' 
 Execution Time:0.00028300285339355

select * from office where  office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from customer where   code = '1104' or  (name = 'SRUTHI DHANUSH'  and mobile='9847346364'  and office_id= '1') 
 Execution Time:0.0016469955444336

select count(*) as cnt from customer where   code = '1104' or  (name = 'SRUTHI DHANUSH'  and mobile='9847346364'  and office_id= '1') 
 Execution Time:0.0016469955444336

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1104', 'SRUTHI DHANUSH', '2', '9847346364', '', '', '1104', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00054812431335449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071096420288086

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064897537231445

select count(*) as cnt  from sales_master where   sales_id='1109' and office_id= '1' 
 Execution Time:0.00029516220092773

select * from office where  office_id= '1' 
 Execution Time:0.00022697448730469

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003049373626709

select count(*) as cnt from customer where   code = '1105' or  (name = 'VASUMATHI P P'  and mobile='9895904679'  and office_id= '1') 
 Execution Time:0.0059788227081299

select count(*) as cnt from customer where   code = '1105' or  (name = 'VASUMATHI P P'  and mobile='9895904679'  and office_id= '1') 
 Execution Time:0.0059788227081299

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1105', 'VASUMATHI P P', '2', '9895904679', '', '', '27675', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0004270076751709

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069308280944824

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00055480003356934

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.0001671314239502

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00076389312744141

select count(*) as cnt from lens_master where   code = '0' and name = 'HOYA BIFOCALS HC' and office_id= '1' 
 Execution Time:0.00081896781921387

select count(*) as cnt from lens_master where   code = '0' and name = 'HOYA BIFOCALS HC' and office_id= '1' 
 Execution Time:0.00081896781921387

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'HOYA BIFOCALS HC', '1', '2', '2021-06-11', '2400', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.00030112266540527

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063490867614746

select count(*) as cnt from customer where   code = '1106' or  (name = 'SUNANDA.K V'  and mobile='8075755769'  and office_id= '1') 
 Execution Time:0.0010008811950684

select count(*) as cnt from customer where   code = '1106' or  (name = 'SUNANDA.K V'  and mobile='8075755769'  and office_id= '1') 
 Execution Time:0.0010008811950684

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1106', 'SUNANDA.K V', '2', '8075755769', '', '', '45596', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00040316581726074

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from customer where   code = '1107' or  (name = 'SHYAMALA K'  and mobile='9645232484'  and office_id= '1') 
 Execution Time:0.0016939640045166

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00059795379638672

select count(*) as cnt  from sales_master where   sales_id='923' and office_id= '1' 
 Execution Time:0.00052094459533691

select * from office where  office_id= '1' 
 Execution Time:0.0002739429473877

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00082898139953613

select count(*) as cnt from customer where   code = '1107' or  (name = 'SHAHUL HAMEED'  and mobile='9744362481'  and office_id= '1') 
 Execution Time:0.0049209594726562

select count(*) as cnt from customer where   code = '1107' or  (name = 'SHAHUL HAMEED1'  and mobile='9744362481'  and office_id= '1') 
 Execution Time:0.0010199546813965

select count(*) as cnt from customer where   code = '1107' or  (name = 'SHAHUL HAMEED1'  and mobile='9744362481'  and office_id= '1') 
 Execution Time:0.0010199546813965

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1107', 'SHAHUL HAMEED1', '1', '9744362481', '', '', '45544', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00040698051452637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058197975158691

select count(*) as cnt  from sales_master where   sales_id='1094' and office_id= '1' 
 Execution Time:0.00063705444335938

select * from office where  office_id= '1' 
 Execution Time:0.00036382675170898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00051307678222656

select count(*) as cnt  from sales_master where   sales_id='827' and office_id= '1' 
 Execution Time:0.0048880577087402

select * from office where  office_id= '1' 
 Execution Time:0.0008399486541748

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.001147985458374

select count(*) as cnt  from sales_master where   sales_id='968' and office_id= '1' 
 Execution Time:0.00059080123901367

select * from office where  office_id= '1' 
 Execution Time:0.00041103363037109

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00061798095703125

select count(*) as cnt  from sales_master where   sales_id='1081' and office_id= '1' 
 Execution Time:0.00039291381835938

select * from office where  office_id= '1' 
 Execution Time:0.00049901008605957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00080299377441406

select count(*) as cnt  from sales_master where   sales_id='1062' and office_id= '1' 
 Execution Time:0.00040888786315918

select * from office where  office_id= '1' 
 Execution Time:0.00029397010803223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00045299530029297

select count(*) as cnt  from sales_master where   sales_id='1062' and office_id= '1' 
 Execution Time:0.00039219856262207

select * from office where  office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt  from sales_master where   sales_id='1064' and office_id= '1' 
 Execution Time:0.00024104118347168

select * from office where  office_id= '1' 
 Execution Time:0.00031495094299316

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from customer where   code = '1108' or  (name = 'VINEETHA V'  and mobile='9895132794'  and office_id= '1') 
 Execution Time:0.0010559558868408

select count(*) as cnt from customer where   code = '1108' or  (name = 'VINEETHA V'  and mobile='9895132794'  and office_id= '1') 
 Execution Time:0.0010559558868408

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1108', 'VINEETHA V', '2', '9895132794', '', '', '45601', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00050187110900879

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004880428314209

select count(*) as cnt  from sales_master where   sales_id='933' and office_id= '1' 
 Execution Time:0.00072193145751953

select * from office where  office_id= '1' 
 Execution Time:0.00041604042053223

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00043797492980957

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010340213775635

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063800811767578

select count(*) as cnt from customer where   code = '1109' or  (name = 'BABY K'  and mobile='9946155756'  and office_id= '1') 
 Execution Time:0.0021510124206543

select count(*) as cnt from customer where   code = '1109' or  (name = 'BABY K'  and mobile='9946155756'  and office_id= '1') 
 Execution Time:0.0021510124206543

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1109', 'BABY K', '2', '9946155756', '', '', '45605', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00059294700622559

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066900253295898

select count(*) as cnt  from sales_master where   sales_id='1059' and office_id= '1' 
 Execution Time:0.0020670890808105

select * from office where  office_id= '1' 
 Execution Time:0.00077009201049805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00087618827819824

select count(*) as cnt from customer where   code = '1110' or  (name = 'GANGADHARAN.A V'  and mobile='9747130850'  and office_id= '1') 
 Execution Time:0.001309871673584

select count(*) as cnt from customer where   code = '1110' or  (name = 'GANGADHARAN.A V'  and mobile='9747130850'  and office_id= '1') 
 Execution Time:0.001309871673584

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1110', 'GANGADHARAN.A V', '1', '9747130850', '', '', '45607', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00042605400085449

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00074195861816406

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079512596130371

select count(*) as cnt  from sales_master where   sales_id='1027' and office_id= '1' 
 Execution Time:0.00064396858215332

select * from office where  office_id= '1' 
 Execution Time:0.00041699409484863

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select count(*) as cnt from customer where   code = '1111' or  (name = 'SHEENA NATHAN'  and mobile='9495317731'  and office_id= '1') 
 Execution Time:0.0011179447174072

select count(*) as cnt from customer where   code = '1111' or  (name = 'SHEENA NATHAN'  and mobile='9495317731'  and office_id= '1') 
 Execution Time:0.0011179447174072

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1111', 'SHEENA NATHAN', '2', '9495317731', '', '', '45608', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00039982795715332

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00063395500183105

select count(*) as cnt  from sales_master where   sales_id='1002' and office_id= '1' 
 Execution Time:0.00028395652770996

select * from office where  office_id= '1' 
 Execution Time:0.00036096572875977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00080084800720215

select count(*) as cnt from customer where   code = '1112' or  (name = 'ZAYAN SHABEER'  and mobile='9446338285'  and office_id= '1') 
 Execution Time:0.0010919570922852

select count(*) as cnt from customer where   code = '1112' or  (name = 'ZAYAN SHABEER'  and mobile='9446338285'  and office_id= '1') 
 Execution Time:0.0010919570922852

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1112', 'ZAYAN SHABEER', '1', '9446338285', '', '', '45609', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00046491622924805

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00062298774719238

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00044488906860352

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.0001981258392334

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO LUSTRAA ASPH BLUE BLOCK HD HI CYL' and office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO LUSTRAA ASPH BLUE BLOCK HD HI CYL' and office_id= '1' 
 Execution Time:0.00077509880065918

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'SETO LUSTRAA ASPH BLUE BLOCK HD HI CYL', '1', '2', '', '2200', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.0003662109375

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054287910461426

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00082087516784668

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00020003318786621

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO FD+BLUE BLK BLUE COAT' and office_id= '1' 
 Execution Time:0.00067877769470215

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO FD+BLUE BLK BLUE COAT' and office_id= '1' 
 Execution Time:0.00067877769470215

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'SETO FD+BLUE BLK BLUE COAT', '1', '2', '', '1600', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.00032281875610352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00067400932312012

select count(*) as cnt from customer where   code = '1113' or  (name = 'MANOJ CHANDRAN'  and mobile='9947789947'  and office_id= '1') 
 Execution Time:0.0017199516296387

select count(*) as cnt from customer where   code = '1113' or  (name = 'MANOJ CHANDRAN'  and mobile='9947789947'  and office_id= '1') 
 Execution Time:0.0017199516296387

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('1113', 'MANOJ CHANDRAN', '1', '9947789947', '', '', '45611', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0044610500335693

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00068879127502441

select count(*) as cnt  from sales_master where   sales_id='945' and office_id= '1' 
 Execution Time:0.00091004371643066

select * from office where  office_id= '1' 
 Execution Time:0.00044989585876465

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00071501731872559

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0058379173278809

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00079607963562012

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00032591819763184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00048398971557617

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029611587524414

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0012781620025635

select * from office where  office_id= '1' 
 Execution Time:0.00031089782714844

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058913230895996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054502487182617

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058913230895996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054502487182617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024104118347168

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058913230895996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054502487182617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024104118347168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034093856811523

SELECT max(code) as last_code_number
FROM `item_master`
WHERE `office_id` = '1' 
 Execution Time:0.00058913230895996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00054502487182617

select * from classification where    office_id= '1' and status=1 and type=2 
 Execution Time:0.00024104118347168

select * from company where    office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.010101795196533

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.0013449192047119

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00046801567077637

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00044393539428711


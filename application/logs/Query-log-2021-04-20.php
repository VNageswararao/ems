select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0022740364074707

select count(*) as cnt  from sales_master where   sales_id='474' and office_id= '1' 
 Execution Time:0.00059413909912109

select * from office where  office_id= '1' 
 Execution Time:0.0021181106567383

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00081515312194824

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0038390159606934

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00090909004211426

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00043106079101562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004119873046875

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00055980682373047

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00058579444885254

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0038840770721436

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00072717666625977

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00025105476379395

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00029277801513672

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00039100646972656

select count(*) as cnt  from sales_master where   sales_id='522' and office_id= '1' 
 Execution Time:0.0008699893951416

select * from office where  office_id= '1' 
 Execution Time:0.00043392181396484

select lens_classification_id,name from lens_classification where type=1 and  status = 1 and office_id= '1' 
 Execution Time:0.00074195861816406

select lens_classification_id,name from lens_classification where type=2 and  status = 1 and office_id= '1' 
 Execution Time:0.00025010108947754

select * from tax_master where    office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select count(*) as cnt from tax_master where   tax_id='1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO FD+ASP MR-7 CLEAR 1.67 SHMC' and office_id= '1' 
 Execution Time:0.00072193145751953

select count(*) as cnt from lens_master where   code = '0' and name = 'SETO FD+ASP MR-7 CLEAR 1.67 SHMC' and office_id= '1' 
 Execution Time:0.00072193145751953

INSERT INTO `lens_master` (`code`, `name`, `lens_type_id`, `lens_coating_id`, `purchase_date`, `purchase_amount`, `description`, `gst_type`, `tax`, `cgst`, `sgst`, `status`, `login_id`, `office_id`) VALUES ('0', 'SETO FD+ASP MR-7 CLEAR 1.67 SHMC', '1', '2', '', '4000', '', '1', '1', '6', '6', '1', '1', '1') 
 Execution Time:0.00033092498779297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0044419765472412

select count(*) as cnt from customer where   code = '560' or  (name = 'NIRUPAMA. T K'  and mobile='9400512427'  and office_id= '1') 
 Execution Time:0.00090384483337402

select count(*) as cnt from customer where   code = '560' or  (name = 'NIRUPAMA. T K'  and mobile='9400512427'  and office_id= '1') 
 Execution Time:0.00090384483337402

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('560', 'NIRUPAMA. T K', '2', '9400512427', '', '', '44118', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00042510032653809

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066184997558594

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from customer where   code = '561' or  (name = 'MATHEW.P M'  and mobile='9497261067'  and office_id= '1') 
 Execution Time:0.001284122467041

select count(*) as cnt from customer where   code = '561' or  (name = 'MATHEW.P M'  and mobile='9497261067'  and office_id= '1') 
 Execution Time:0.001284122467041

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('561', 'MATHEW.P M', '1', '9497261067', '', '', '44175', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00051403045654297

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from customer where   code = '562' or  (name = 'VASANTHA P V'  and mobile='9496240573'  and office_id= '1') 
 Execution Time:0.0010650157928467

select count(*) as cnt from customer where   code = '562' or  (name = 'VASANTHA P V'  and mobile='9496240573'  and office_id= '1') 
 Execution Time:0.0010650157928467

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('562', 'VASANTHA P V', '2', '9496240573', '', '', '44075', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0022320747375488

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010240077972412

select count(*) as cnt from customer where   code = '563' or  (name = 'PADMANABHAN T V'  and mobile='54545'  and office_id= '1') 
 Execution Time:0.0012850761413574

select count(*) as cnt from customer where   code = '563' or  (name = 'PADMANABHAN T V'  and mobile='54545'  and office_id= '1') 
 Execution Time:0.0012850761413574

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('563', 'PADMANABHAN T V', '1', '54545', '', '', '44213', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00052809715270996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00076794624328613

select count(*) as cnt from customer where   code = '564' or  (name = 'KARTHIYANI K V'  and mobile='9895933119'  and office_id= '1') 
 Execution Time:0.00079798698425293

select count(*) as cnt from customer where   code = '564' or  (name = 'KARTHIYANI K V'  and mobile='9895933119'  and office_id= '1') 
 Execution Time:0.00079798698425293

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('564', 'KARTHIYANI K V', '2', '9895933119', '', '', '44158', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00029802322387695

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0004279613494873

select count(*) as cnt  from sales_master where   sales_id='536' and office_id= '1' 
 Execution Time:0.00064897537231445

select * from office where  office_id= '1' 
 Execution Time:0.00066614151000977

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0041539669036865

select count(*) as cnt from customer where   code = '565' or  (name = 'JEESON'  and mobile='9497926725'  and office_id= '1') 
 Execution Time:0.001356840133667

select count(*) as cnt from customer where   code = '565' or  (name = 'JEESON'  and mobile='9497926725'  and office_id= '1') 
 Execution Time:0.001356840133667

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('565', 'JEESON', '1', '9497926725', '', '', '44209', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00044798851013184

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00080394744873047

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00065898895263672

select count(*) as cnt from customer where   code = '566' or  (name = 'REENA K'  and mobile='9495615634'  and office_id= '1') 
 Execution Time:0.0011069774627686

select count(*) as cnt from customer where   code = '566' or  (name = 'REENA K'  and mobile='9495615634'  and office_id= '1') 
 Execution Time:0.0011069774627686

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('566', 'REENA K', '2', '9495615634', '', '', '44219', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00037503242492676

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00064301490783691

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00079107284545898

select count(*) as cnt  from sales_master where   sales_id='547' and office_id= '1' 
 Execution Time:0.00069403648376465

select * from office where  office_id= '1' 
 Execution Time:0.00068902969360352

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00052118301391602

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.018999099731445

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00096487998962402

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00034403800964355

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00024700164794922

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0019879341125488

select count(*) as cnt  from sales_master where   sales_id='542' and office_id= '1' 
 Execution Time:0.00045394897460938

select * from office where  office_id= '1' 
 Execution Time:0.00084185600280762

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0032060146331787

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00065517425537109

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00018501281738281

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00037884712219238

select count(*) as cnt from customer where   code = '567' or  (name = 'PUSHPALATHA P'  and mobile='8129450620'  and office_id= '1') 
 Execution Time:0.0010890960693359

select count(*) as cnt from customer where   code = '567' or  (name = 'PUSHPALATHA P'  and mobile='8129450620'  and office_id= '1') 
 Execution Time:0.0010890960693359

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('567', 'PUSHPALATHA P', '2', '8129450620', '', '', '44222', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0008089542388916

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00073003768920898

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00075316429138184

select count(*) as cnt  from sales_master where   sales_id='528' and office_id= '1' 
 Execution Time:0.00045394897460938

select * from office where  office_id= '1' 
 Execution Time:0.0006558895111084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from customer where   code = '568' or  (name = 'KARTHIYANI E'  and mobile='9746605951'  and office_id= '1') 
 Execution Time:0.0011630058288574

select count(*) as cnt from customer where   code = '568' or  (name = 'KARTHIYANI E'  and mobile='9746605951'  and office_id= '1') 
 Execution Time:0.0011630058288574

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('568', 'KARTHIYANI E', '2', '9746605951', '', '', '44224', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00051784515380859

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0010018348693848

select count(*) as cnt from customer where   code = '569' or  (name = 'SURESH BABU P'  and mobile='9847441255'  and office_id= '1') 
 Execution Time:0.001086950302124

select count(*) as cnt from customer where   code = '569' or  (name = 'SURESH BABU P'  and mobile='9847441255'  and office_id= '1') 
 Execution Time:0.001086950302124

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('569', 'SURESH BABU P', '1', '9847441255', '', '', '20673', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00052809715270996

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00076007843017578

select count(*) as cnt  from sales_master where   sales_id='529' and office_id= '1' 
 Execution Time:0.00079107284545898

select * from office where  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from customer where   code = '570' or  (name = 'HEMARAJ.C'  and mobile='9997789759'  and office_id= '1') 
 Execution Time:0.0013630390167236

select count(*) as cnt from customer where   code = '570' or  (name = 'HEMARAJ.C'  and mobile='9997789759'  and office_id= '1') 
 Execution Time:0.0013630390167236

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('570', 'HEMARAJ.C', '1', '9997789759', '', '', '28226', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.00058484077453613

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00082302093505859

select count(*) as cnt  from sales_master where   sales_id='522' and office_id= '1' 
 Execution Time:0.00075006484985352

select * from office where  office_id= '1' 
 Execution Time:0.00049209594726562

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0028140544891357

select count(*) as cnt from customer where   code = '571' or  (name = 'INDIRA.M V'  and mobile='9061403838'  and office_id= '1') 
 Execution Time:0.0010108947753906

select count(*) as cnt from customer where   code = '571' or  (name = 'INDIRA.M V'  and mobile='9061403838'  and office_id= '1') 
 Execution Time:0.0010108947753906

INSERT INTO `customer` (`code`, `name`, `gender`, `mobile`, `alter_mobile`, `email_id`, `mrd`, `address`, `description`, `resph1`, `resph2`, `resph3`, `resph4`, `recyl1`, `recyl2`, `recyl3`, `recyl4`, `reaxis1`, `reaxis2`, `reaxis3`, `reaxis4`, `reva1`, `reva2`, `reva3`, `reva4`, `material`, `cr`, `usage`, `type`, `ipd`, `pdre`, `le`, `segment`, `lle`, `prestype`, `status`, `login_id`, `office_id`) VALUES ('571', 'INDIRA.M V', '2', '9061403838', '', '', '44228', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '1', '1') 
 Execution Time:0.0005338191986084

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00069999694824219

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00098085403442383

select *  from customer where  status=1 and  office_id= '1' 
 Execution Time:0.0034849643707275

select item_id,name  from item_master where  status=1 and  office_id= '1' 
 Execution Time:0.00087094306945801

select modeofpay_id,name  from modeofpay where  status=1 and   office_id= '1' 
 Execution Time:0.00036883354187012

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0003199577331543

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.0005500316619873


<html>
    <body>
        <style>
            .tabledivideleft
            {
                width: 30%;
                line-height: 25px;
                font-weight: bold;
            }
             .tabledivideright
            {
                width: 70%;
                line-height: 25px;
            }
        </style>
       
             <table  width="100%" style="line-height:22px;" >
                <tr>
                    
                    <td style="width:10%;">
                            <?=$logo?>
                        </td>
                    <td  style="text-align:center;width:90%" valign="middle">
                        <h3><?=$company_name?></h3>
                        <p><?=$company_address?>   </p>
                        <p>T:<?=$company_land_phone?>|Mob:<?=$company_mobile?></p>
                        <p>E:<?=$company_email?><br/><b>GSTIN NO:<?=$gstin_no?></b></p>
                    </td>
<!--                 <td style="text-align:center;font-weight:bold;width:20%"><p style="width:20%">&nbsp;</p>
                    <barcode type="QR" code="" class="barcode" size="1.0" error="M" />
                    </td>  -->
                </tr>
            </table>
       
       <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border-top: 1px solid black;border-bottom: 1px solid black">
                <tr>
                    
           <td style="width:27%;line-height:10px;text-align:center;font-weight:bold;">
                    <h4>&nbsp;Vision Certificate</h4>
                   </td>
                    
                </tr>
        </table>

        <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border: 1px solid black"> 
                <tr>
                    <td style="line-height:15px;text-align: left;width:15%;">MRD No</td>
                    <td style="line-height:15px;text-align: left;width:45%">: <strong><?=$mrdno?></strong></td> 
                    <td style="line-height:15px;text-align: center;width:17%;">Contact Number</td>
                    <td style="line-height:15px;text-align: left;width:23%;font-size: 12px">: <?=$mobileno?>  </td>
                </tr>
         
                <tr>
                    <td style="line-height:15px;text-align: left;width:15%;">Patient Name</td>
                    <td style="line-height:15px;text-align: left;width:45%">: <strong><?=$titlename;  ?> <?=$fname;  ?> <?=$lname;  ?>  Age/Sex: <?php if($ageyy) echo $ageyy.'Y'; ?>  <?php if($agemm) echo $agemm.'M'; ?> / <?=$gender;  ?></strong></td> 
                    <td style="line-height:15px;text-align: center;width:17%;">Patient Address</td>
                    <td style="line-height:15px;text-align: left;width:23%;font-size: 12px">: <?=$address?> </td>
                </tr>
         </table>
              <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border:  1px solid black"> 
                  <tr>
                    <td style="line-height:15px;text-align: left;width:15%;">Consultant</td>
                    <td colspan="3" style="line-height:15px;text-align: left;width:85%">: Dr: <?=$doctorname;  ?></td> 
                </tr>
               </table>
               <br/> 

 <table  width="100%" style="line-height:45px;margin-top:0px;font-size: 13;border:  1px solid black"> 
                    <tr>
                       <th align="left" style="width:50%">#</th>
                       <th align="left" style="width:25%">Right Eye</th>
                       <th align="left" style="width:25%">Left Eye</th>
                   </tr>
                   <tr>
                       <td align="left"><b>Distant Vision:</b></td>
                       <td align="left"></td>
                       <td align="center"></td>
                   </tr>
                   <tr>
                       <td align="left">Without Glasses</td>
                       <td align="left"><?=$vis1;  ?></td>
                       <td align="left"><?=$vis6;  ?></td>
                   </tr>
                   <tr>
                       <td align="left">With Glasses</td>
                       <td align="left"><?=$vis4;  ?></td>
                       <td align="left"><?=$vis9;  ?></td>
                   </tr>

                    <tr>
                       <td align="left"><b>Near Vision:</b></td>
                       <td align="left"></td>
                       <td align="left"></td>
                   </tr>
                   <tr>
                       <td align="left">Without Glasses</td>
                       <td align="left"><?=$vis2;  ?></td>
                       <td align="left"><?=$vis7;  ?></td>
                   </tr>
                   <tr>
                       <td align="left">With Glasses</td>
                       <td align="left"><?=$vis5;  ?></td>
                       <td align="left"><?=$vis10;  ?></td>
                   </tr>

                    <tr>
                       <td align="left">Colour Vision</td>
                       <td align="left"><?=$pre5;  ?></td>
                       <td align="left"><?=$pre11;  ?></td>
                   </tr>

                   <tr>
                       <td align="left"><b>Confrontation:<b></td>
                       <td align="left"></td>
                       <td align="left"></td>
                   </tr>

                   <tr>
                       <td align="left">Fields</td>
                       <td align="left"><?=$Fieldr;  ?></td>
                       <td align="left"><?=$Fieldl;  ?></td>
                   </tr>

                   <tr>
                       <td align="left">Fundus</td>
                       <td align="left"><?=$Fundusr;  ?></td>
                       <td align="left"><?=$Fundusr;  ?></td>
                   </tr>
               </table>
               

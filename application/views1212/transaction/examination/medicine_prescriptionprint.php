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
                    <h4>&nbsp;Medicine Prescription Bill</h4>
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
                    <td colspan="3" style="line-height:15px;text-align: left;width:85%">:  <?=$doctorname;  ?></td> 
                </tr>
               </table>
                <table border="1"   style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border-left: none;
  border-right: none;width:100%;">
                    <thead>
                         <tr style="border:0.6px solid black;background: #f5f5f5;">
                             <th style="width:8%;">SL NO</th>
                             <th style="width:25%;">Drug Name</th>
                             <th style="width:25%;">Instruction</th>
                             <th style="width:5%;">Days</th>
                             <th style="width:5%;">Qty</th>
                            
                             <th style="width:5%;">Eye</th>
                         </tr>
                     </thead>
                    <tbody>
               <?php
                if($medicinedetails)
                {
                    $sl=1;
                    foreach($medicinedetails as $data)
                    {
                    ?>
                        <tr>
                            <td><?php echo $sl; ?></td>
                            <td><?php echo $data->drugname; ?></td>
                            <td><?php echo $data->instruction; ?></td>
                            <td><?php echo $data->nodays; ?></td>
                            <td><?php echo $data->qty; ?></td>
                          
                            <td><?php echo $data->med_eye; ?></td>
                        </tr>

                    <?php 
                        $sl++;
                    }
                }
               ?>
           </tbody></table>
           <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> 
          <table    style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border-left: none;
  border-right: none;width:100%;">
      <tr>
          <td style="width:60%"></td>
          <td style="width: 40%;float: right;">
              <p><b>Signature  <?=$doctorname;  ?></b></p>
          </td>
      </tr>
  </table>
             
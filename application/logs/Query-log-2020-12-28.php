select count(*) as cnt from customer where customer_id='4'  and office_id= '1' 
 Execution Time:0.00053596496582031

select * from office where  office_id= '1' 
 Execution Time:0.00091314315795898

select count(*) as cnt from customer where customer_id='3'  and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt  from purchase_order where   purchase_order_id='12' and office_id= '1' 
 Execution Time:0.00025510787963867

DELETE FROM `purchase_order`
WHERE `purchase_order_id` = '12' 
 Execution Time:0.004951000213623

DELETE FROM `purchaseorder_details`
WHERE `purchase_order_id` = '12' 
 Execution Time:0.0069758892059326

DELETE FROM `purchase_order_framedetails`
WHERE `purchase_order_id` = '12' 
 Execution Time:0.00023889541625977

select count(*) as cnt  from purchase_order where   purchase_order_id='11' and office_id= '1' 
 Execution Time:0.00041890144348145

DELETE FROM `purchase_order`
WHERE `purchase_order_id` = '11' 
 Execution Time:0.0025780200958252

DELETE FROM `purchaseorder_details`
WHERE `purchase_order_id` = '11' 
 Execution Time:0.016372919082642

DELETE FROM `purchase_order_framedetails`
WHERE `purchase_order_id` = '11' 
 Execution Time:0.015882968902588

select count(*) as cnt from customer where customer_id='4'  and office_id= '1' 
 Execution Time:0.00041294097900391

select * from classification where    office_id= '1' and status=1 and type=1 
 Execution Time:0.00066113471984863


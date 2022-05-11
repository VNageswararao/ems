<?php
/**
 * Description of Classification_model
 *
 * @author Prabhu @10/01/2021
 */
class Dashboard_model extends CI_Model{
 public function __construct()
  {
    parent::__construct();
  }
  public function getsalesamount($var_array)
  {
      $sql = "select sum(netamount) as amount  from sales_master where    office_id= ? and sales_date=CURDATE()";
      $result_row=$this->db->query($sql, $var_array); 
      $res= $result_row->result_array ();
      return $res;
  }
  public function getpendingduebill($var_array)
  {
      $sql = "select count(*) as cnt  from sales_master where    office_id= ? and status=1";
      $result_row=$this->db->query($sql, $var_array); 
      $res= $result_row->result_array ();
      return $res;
  }
  public function gettotalitem($var_array)
  {
      $sql = "select count(*) as cnt  from item_master where    office_id= ?";
      $result_row=$this->db->query($sql, $var_array); 
      $res= $result_row->result_array ();
      return $res;
  }
  public function gettotalcustomer($var_array)
  {
      $sql = "select count(*) as cnt  from customer where    office_id= ?";
      $result_row=$this->db->query($sql, $var_array); 
      $res= $result_row->result_array ();
      return $res;
  }
}
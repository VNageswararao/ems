<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_report extends CI_Controller {
  private $msg;
  private $error;
  private $error_message;
  private $randval;
  public function __construct() {
        parent::__construct();
        if (!isset($this->session->optical_login))
         {
          redirect('login');
         }
        
        $this->load->model('Sales_report_model');
        $this->load->model('Purchase_order_model');
        $this->load->model('Common_model');
    }
  public function index()
  {
    $data['title']='Optical::Sales Entry Report';
    $data['activecls']='Sales_entry_report';
    $office_id=$this->session->office_id;
    $var_array=array($office_id);
    $data['getcustomer']=$this->Common_model->getcustomerdata($var_array);
    $data['getitem']=$this->Common_model->getitemdata($var_array);
    $data['getmodeofpay']=$this->Common_model->GetModeofpayData($var_array);
    $data['getcategory']=$this->Common_model->getcategory($var_array);
    $data['getlens']=$this->Common_model->getlensmaster($var_array);
    $data['getstaff']=$this->Common_model->GetStaffData($var_array);
    $content=$this->load->view('reports/sales_report',$data,true);
    $this->load->view('includes/layout',['content'=>$content]);
  }

    public function getsummary()
    {
      $this->form_validation->set_rules('sum_fromdate', 'From Date', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('sum_todate', 'To Date', 'trim|required|min_length[1]|max_length[20]');
      if($this->form_validation->run() == TRUE)
      {
        $sum_fromdate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('sum_fromdate')))));
        $sum_todate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('sum_todate')))));
        $sum_customer=trim(htmlentities($this->input->post('sum_customer')));
        $sum_modeofpay=trim(htmlentities($this->input->post('sum_modeofpay')));
        $staff=trim(htmlentities($this->input->post('staff')));
        $status=trim(htmlentities($this->input->post('status')));
        $getresult=$this->Sales_report_model->getsummaryreportmodel($sum_fromdate,$sum_todate,$sum_customer,$sum_modeofpay,$this->session->userdata('office_id'),$staff,$status);
      if($getresult)
      {
        $staffcond='';
        $cus='';
        if($sum_customer)
    {
      $cus= ' and sales_master.customer_id='.$sum_customer;
    }
       if($staff)
      {
        $staffcond= ' and  staff.staff_id='.$staff;
      }
      $stacond='';
       if($status)
      {
        $stacond= ' and sales_master.status='.$status;
      }
       $dte=" and sales_date >= '$sum_fromdate' AND sales_date <= '$sum_todate'";
      if($status==2)
      {
        $dte= " and payment_details.payment_date>= '$sum_fromdate' AND payment_details.payment_date <='$sum_todate'";
      }
       $advancecashamount=$this->db->query("select sum(payment_details.advanced_amount) as advanced_amount from sales_master inner join payment_details on sales_master.sales_id=payment_details.sales_id  inner join modeofpay on payment_details.mode_id=modeofpay.modeofpay_id
        left join staff on sales_master.staff_id=staff.staff_id  where payment_date >= '$sum_fromdate' AND payment_date <= '$sum_todate' and  modeofpay.name='CASH' $staffcond  $stacond  $cus")->row();

     



       $advancecardamount=$this->db->query("select sum(payment_details.advanced_amount) as advanced_amount  from payment_details inner join modeofpay on payment_details.mode_id=modeofpay.modeofpay_id inner join sales_master on payment_details.sales_id=sales_master.sales_id left join staff on sales_master.staff_id=staff.staff_id  where 1=1  and   modeofpay.name='CARD' $staffcond  $stacond  $dte  $cus")->row();

       $advancecreditamount=$this->db->query("select sum(payment_details.advanced_amount) as advanced_amount  from payment_details inner join modeofpay on payment_details.mode_id=modeofpay.modeofpay_id inner join sales_master on payment_details.sales_id=sales_master.sales_id left join staff on sales_master.staff_id=staff.staff_id  where payment_date >= '$sum_fromdate' AND payment_date <= '$sum_todate' and   modeofpay.name='CREDIT' $staffcond  $stacond  $cus")->row();

        $html='<div class="row">
                  <div class="col-md-4">
                      <div class="alert alert-success mb-2" role="alert">
                       <h4 style="text-align:center;font-weight:bold;">CASH:'.number_format((float)$advancecashamount->advanced_amount
            ,2,'.', '').'</h4>
                       </div>
                  </div>

                  <div class="col-md-4">
                      <div class="alert alert-danger  mb-2" role="alert">
                       <h4 style="text-align:center;font-weight:bold;">CARD:'.number_format((float)$advancecardamount->advanced_amount
            ,2,'.', '').'</h4>
                       </div>
                  </div>

                  <div class="col-md-4">
                      <div class="alert alert-info  mb-2" role="alert">
                       <h4 style="text-align:center;font-weight:bold;">CREDIT:'.number_format((float)$advancecreditamount->advanced_amount
            ,2,'.', '').'</h4>
                       </div>
                  </div>
        </div><table class="table table-striped table-bordered dataex-html5-selectors" id="example_sum">
            <thead>
                    <tr>
                         <th>SL NO</th>
                         <th>Staff</th>
                         <th>Customer Name</th>
                         <th>Date</th>
                         <th>Invoice No</th>
                         <th>User Name</th>
                         <th>Modeofpay</th>
                         <th>Total Qty</th>
                         <th>Discount Amount</th>
                         <th>Advanced Amount</th>
                         <th>Balanced Amount</th>
                         <th>Net Amount</th>
                         <th>Status</th>
                     </tr>
                     </thead>
                   <tbody>';
        $sl=1;
        $sumnetamount='0.00';
        $sumadamount='0.00';
        $sumbalamount='0.00';
        foreach ($getresult as $data) {
           $sales_id= $data['sales_id'];
          $advanceamount=$this->db->query("select sum(payment_details.advanced_amount) as advanced_amount  from payment_details inner join modeofpay on payment_details.mode_id=modeofpay.modeofpay_id inner join sales_master on payment_details.sales_id=sales_master.sales_id left join staff on sales_master.staff_id=staff.staff_id  where  payment_details.sales_id=$sales_id and payment_date >= '$sum_fromdate' AND payment_date <= '$sum_todate' and   modeofpay.name='CASH' $staffcond  $stacond $cus")->row();
          $bal=$data['netamount']-$advanceamount->advanced_amount;
          $clr='';
          // if($data['status']=='Inprogress')
          // {
          //    $clr='';
          //   $clr="style='background:green;color:#fff;";
          // }
          // else
          // {
          //    $clr='';
          //   $clr="style='background:red;color:#fff;";
          // }
            $html.='<tr '.$clr.'>
                  <td>'.$sl.'</td>
                  <td>'.$data['staffname'].'</td>
                  <td>'.$data['cusname'].'</td>
                  <td>'.$data['sales_date'].'</td>
                  <td>'.$data['invoice_number'].'</td>
                  <td>'.$data['username'].'</td>
                  <td>'.$data['mode'].'</td>
                  <td>'.$data['total_qty'].'</td>
                  <td>'.number_format((float)$data['discount_amount']
            ,2,'.', '').'</td>
                  <td>'.number_format((float)$advanceamount->advanced_amount
            ,2,'.', '').'</td>
                  <td>'.number_format((float)$bal
            ,2,'.', '').'</td>
                  <td>'.number_format((float)$data['netamount']
            ,2,'.', '').'</td>
                  <td>'.$data['status'].'</td>
                </tr>';
                $sl++;
                $sumnetamount+=$data['netamount'];
                $sumadamount+=$advanceamount->advanced_amount;
                $sumbalamount+=$bal;
        }
              $html.='
                  
                  <tr>
                    <th>'.$sl.'</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total</th>
                    <th>'.number_format((float)$sumadamount
            ,2,'.', '').'</th>
                    <th>'.number_format((float)$sumbalamount
            ,2,'.', '').'</th>
                    <th>'.number_format((float)$sumnetamount
            ,2,'.', '').'</th>
                    <th></th>
                  </tr>
                  </tbody>
                  </table>';
        

              $this->msg='success';
              $this->error='';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message,
                  'getdata' => $html
                ));
                  exit;
          }
          else
          {
              $this->msg='';
              $this->error='No Data Found';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message
                ));
                  exit;
          }
        
      }
      else
      {
            $this->msg='';
            $this->error='';
            $this->error_message = $this->form_validation->error_array();
                echo json_encode(array(
              'msg'           => $this->msg,
              'error'         => $this->error,
              'error_message' => $this->error_message
            ));
              exit;
      }
  }

   public function getdetailed()
    {
      $this->form_validation->set_rules('det_fromdate', 'From Date', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('det_todate', 'To Date', 'trim|required|min_length[1]|max_length[20]');
      $this->form_validation->set_rules('det_item', 'Item', 'trim|min_length[1]|max_length[20]|numeric');
      $this->form_validation->set_rules('det_lens', 'Lens', 'trim|min_length[1]|max_length[20]|numeric');
      if($this->form_validation->run() == TRUE)
      {
        $det_fromdate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('det_fromdate')))));
        $det_todate=trim(htmlentities(date('Y-m-d',strtotime($this->input->post('det_todate')))));
        $det_customer=trim(htmlentities($this->input->post('det_customer')));
        $det_modeofpay=trim(htmlentities($this->input->post('det_modeofpay')));
        $det_item=trim(htmlentities($this->input->post('det_item')));
        $det_lens=trim(htmlentities($this->input->post('det_lens')));
     $getresult=$this->Sales_report_model->getdetailedreportmodel($det_fromdate,$det_todate,$det_customer,$det_modeofpay,$this->session->userdata('office_id'),$det_item,$det_lens);
      if($getresult)
      {
        $html='<table class="table table-striped table-bordered dataex-html5-selectors" id="example_det">
            <thead>
                    <tr>
                         <th>SL NO</th>
                         <th>Customer Name</th>
                         <th>Date</th>
                         <th>Invoice No</th>
                         <th>Item Code</th>
                         <th>Item Name</th>
                         <th>Quantity</th>
                         <th>Rate</th>
                         <th>Total</th>
                         <th>Item Type</th>
                         <th>Frame Type</th>
                         <th>Frame Color</th>
                         <th>Frame Size</th>
                         <th>Frame Model</th>
                         <th>Lens Type</th>
                         <th>Lens Coating</th>
                     </tr>
                     </thead>
                   <tbody>';
        $sl=1;
        $sumnetamount='0.00';
        foreach ($getresult as $data) {
            if($data['product_type']==0)
            {
              $protype="Frame";
              $frametype_array=array($data['frame_type'],$this->session->userdata('office_id'));
              $frame_type=$this->Common_model->GetframeclassficationData($frametype_array);
              $frame_type=$frame_type[0]['name'];
              $framecolor_array=array($data['frame_color'],$this->session->userdata('office_id'));
              $frame_color=$this->Common_model->GetframeclassficationData($framecolor_array);
              $frame_color=$frame_color[0]['name'];
              $framesize_array=array($data['frame_size'],$this->session->userdata('office_id'));
              $frame_size=$this->Common_model->GetframeclassficationData($framesize_array);
              $frame_size=$frame_size[0]['name'];
              $getresultlenscoating='';
              $getresultlenstype='';
              $itemcode=$data['itemcode'];
              $itemname=$data['itemname'];
              $framemodel=$data['frame_model'];
            }
            else if($data['product_type']==1)
            {
              $frame_type='';
              $frame_color='';
              $frame_size='';
              $framemodel='';
              $protype="Lens";
              $lens_array=array($data['stock_id'],$this->session->userdata('office_id'));
              $getresultlenstype=$this->Common_model->GetLenstypeData($lens_array);
              $getresultlenstype=$getresultlenstype[0]['lenstype'];
              $getresultlenscoating=$this->Common_model->GetLenscoatingData($lens_array);
              $getresultlenscoating=$getresultlenscoating[0]['lenscoating'];
              $getresultlens=$this->Common_model->GetLensData($lens_array);
              $itemcode=$getresultlens[0]['code'];
              $itemname=$getresultlens[0]['name'];
            }
            else
            {
             $protype="Other"; 
            }
          
            $html.='<tr>
                  <td>'.$sl.'</td>
                  <td>'.$data['cusname'].'</td>
                  <td>'.$data['sales_date'].'</td>
                  <td>'.$data['invoice_number'].'</td>
                  <td>'.$itemcode.'</td>
                  <td>'.$itemname.'</td>
                  <td>'.$data['quantity'].'</td>
                  <td>'.$data['rate'].'</td>
                  <td>'.number_format((float)$data['total_amount'] ,2,'.', '').'</td>
                  <td>'.$protype.'</td>
                  <td>'.$frame_type.'</td>
                  <td>'.$frame_color.'</td>
                  <td>'.$frame_size.'</td>
                  <td>'.$framemodel.'</td>
                  <td>'.$getresultlenstype.'</td>
                  <td>'.$getresultlenscoating.'</td>
                </tr>';
                $sl++;
                $sumnetamount+=$data['total_amount'];
        }
              $html.='
                  
                  <tr>
                    <th>'.$sl.'</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    
                    <th>Total</th>
                    <th>'.number_format((float)$sumnetamount ,2,'.', '').'</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </tbody>
                  </table>';
        

              $this->msg='success';
              $this->error='';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message,
                  'getdata' => $html
                ));
                  exit;
          }
          else
          {
              $this->msg='';
              $this->error='No Data Found';
              $this->error_message ='';
                    echo json_encode(array(
                  'msg'           => $this->msg,
                  'error'         => $this->error,
                  'error_message' => $this->error_message
                ));
                  exit;
          }
        
      }
      else
      {
            $this->msg='';
            $this->error='';
            $this->error_message = $this->form_validation->error_array();
                echo json_encode(array(
              'msg'           => $this->msg,
              'error'         => $this->error,
              'error_message' => $this->error_message
            ));
              exit;
      }
  }
}

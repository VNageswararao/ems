<?php 
$path=base_url('template1/');
?>      
 <div class="content-body">
             <!-- Justified With Top Border start -->
                 <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Billing</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Add Bill</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">View/Edit/Delete</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                            <form id="classification" action="#" method="post"> 
                             
                                <div class="row">
                                 
                                      <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Select Search: <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="print" id="print">
                                                        <option value="1">MRD Number</option>
                                                        <option value="2">Phone number</option>
                                                        <option value="3">Address Search</option>
                                                        <option value="4">Barcode</option>
                                                    </select>
                                            </div>
                                         </div>
                                          <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Search: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  id="search" name="search" >
                                            </div>
                                         </div>
                                         <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Date: <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control"  id="search" name="search" >
                                            </div>
                                         </div>
                                         <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Time: <span class="text-danger">*</span></label>
                                                <input type="time" class="form-control"  id="search" name="search" >
                                            </div>
                                         </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="text-danger" style="font-weight: bold;">Patient Name:ANISH  Age:12 Male</h3>
                                        </div>

                                        <div class="col-md-6">
                                            <h3 class="text-danger" style="font-weight: bold;float: right;">MRD NO:30434</h3>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                         <div id="accordion" class="accordion" style="cursor: pointer;">
                                            <div class="card mb-0" style="border: 1px solid black;">
                                                <div class="collapsed" data-toggle="collapse" href="#collapseOne" style="background: #28d094;text-align: center;color: #fff;">
                                                    <a class="card-title">Pateint History</a>
                                                </div>
                                                <div id="collapseOne" class="card-body collapse" data-parent="#accordion">

                                                      <div class="row">

                                                        <div class="table-responsive">
                                                        
                                                            <table class="table table-border">
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Bill No</th>
                                                                    <th>Doctor Name</th>
                                                                    <th>Date</th>
                                                                    <th>Reason</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>1232</td>
                                                                        <td class="align-middle border-top-0">Dr. Phil Gray</td>
                                                                        <td class="align-middle border-top-0">
                                                                            <i class="la la-calendar-check-o text-warning"></i> 15/10/18
                                                                        </td>
                                                                        <td class="align-middle border-top-0">
                                                                            <i class="la la-circle text-danger"></i> Hospital Visit
                                                                        </td>
                                                                       
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>1233</td>
                                                                        <td class="align-middle border-top-0">Dr. Phil Gray</td>
                                                                        <td class="align-middle border-top-0">
                                                                            <i class="la la-calendar-check-o text-warning"></i> 15/10/18
                                                                        </td>
                                                                        <td class="align-middle border-top-0">
                                                                            <i class="la la-circle text-danger"></i> Hospital Visit
                                                                        </td>
                                                                       
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                         <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Charge Type: <span class="text-danger">*</span></label>
                                                    <select class="form-control select2" name="panel" id="panel">
                                                        <option value="1">OPD</option>
                                                        <option value="2">IP</option>
                                                        <option value="3">XXX</option>
                                                        <option value="4">XXX</option>
                                                    </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Select Particular: <span class="text-danger">*</span></label>
                                                    <select class="form-control select2-diacritics" name="print" id="print">
                                                        <option value="1">ParticularA/100rs</option>
                                                        <option value="2">ParticularB/125rs</option>
                                                    </select>
                                            </div>
                                         </div>

                                          <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Insurance Company Name: <span class="text-danger">*</span></label>
                                                    <select class="form-control select2-diacritics" name="print" id="print">
                                                       <option value="1">Select Insurance Company Name</option>
                                                    </select>
                                            </div>
                                         </div>
                                          <div class="col-sm-2 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Select Doctor Name: <span class="text-danger">*</span></label>
                                                    <select class="form-control select2-diacritics" name="doctor" id="doctor">
                                                       <option value="1">Select Doctor  Name</option>
                                                    </select>
                                            </div>
                                         </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                            <div class="table-responsive">
                                                <table class="table table-border table-hover">
                                                    <thead style="background:aquamarine;">
                                                    <tr>
                                                        <th>Delete</th>
                                                        <th>Particulars</th>
                                                        <th>Qty</th>
                                                        <th>Dis Amt</th>
                                                        <th>Dis Per</th>
                                                        <th>Total Amt</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#"  class="input_column">
                                                                <button class="btn btn-danger btnDelete btn-sm">
                                                                   <i class="la la-trash"></i>
                                                                </button>
                                                                </a>
                                                           </td>
                                                           <td>Testing Particulars</td>
                                                           <td><input type="number" class="form-control grid" name=""></td>
                                                           <td><input type="number" class="form-control grid" name=""></td>
                                                           <td><input type="number" class="form-control grid" name=""></td>
                                                           <td><input type="number" class="form-control grid" name="" readonly value="1500.00" style="font-weight: bold;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <label for="lastname">Bill Amount: <span class="text-danger">*</span></label>
                                                       <input type="text" readonly name="billamount" class="form-control">
                                             </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                    <label for="lastname">Advanced Amount: </label>
                                                    <input type="text" name="billamount" class="form-control">
                                             </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="lastname">Modeofpay: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="modeofpay_id" id="modeofpay_id">
                                                   <option value="">Select Modeofpay</option>
                                                    <option value="7">CASH</option>
                                                    <option value="8">CARD</option>
                                                    <option value="9">CREDIT</option>
                                                </select>
                                             </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                    <label for="lastname"><b>Grand Total: </b></label>
                                                    <input type="text" name="billamount" class="form-control" readonly style="color: black;font-weight: bold;font-size: 19px;" value="1500.00">
                                             </div>
                                        </div>
                                    </div>
                                </div>
                               
                            

                               

                                <div class="card-footer ml-auto">
                                    <button type="button" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" onclick="classification('1');">Submit</button>
                                     <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onclick="this.form.reset();">Reset</button>
                                </div>
                            </form>
                                            </div>
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                                 <div class="card-body collapse show">
                                             
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Justified With Top Border end -->
            </div>

          <script type="text/javascript">
      
          </script>

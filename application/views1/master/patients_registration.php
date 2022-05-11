<?php 
$path=base_url('template1/');
?>      
   
<style type="text/css">
    #profile-container {
    overflow: hidden;
}
#profile-container img {
    width: 150px;
    height: 140px;
}
#imageUpload {
    display: none;
}
</style>  
 <div class="content-body" style="margin-top: -1%;">
             <!-- Justified With Top Border start -->
                 <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Patients Registration</h4>
                                </div>
                                <div class="card-content" style="margin-top: -32px;">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Add Patients Registration</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Follow-up patient</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">View/Edit/Delete</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                            <form id="classification" action="#" method="post"> 
                                <div class="row">
                                    <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2">
                                                    <div class="form-group">
                                                        <label for="lastname">Title: <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="title" id="title">
                                                            <option value="1">M/s</option>
                                                        </select>
                                                    </div>
                                                 </div>

                                                  <div class="col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label for="lastname">First Name: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"  id="fname" name="fname" >
                                                    </div>
                                                 </div>

                                                  <div class="col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <label for="lastname">Last Name: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"  id="lname" name="lname" >
                                                    </div>
                                                 </div>

                                                 <div class="col-sm-3 col-md-2">
                                                    <div class="form-group">
                                                        <label for="lastname">Gender: <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="gender" id="gender">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Transgender</option>
                                                        </select>
                                                    </div>
                                                 </div>

                                                

                                                  <div class="col-sm-3 col-md-2">
                                                    <div class="form-group">
                                                        <label for="lastname">Age: <span class="text-danger">*</span></label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"  id="name" name="name" placeholder="YY">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control"  id="name" name="name" placeholder="MM">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                 </div>

                                                  <div class="col-sm-3 col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname">Date Of Birth: <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" placeholder="Name" id="name" name="name" >
                                                    </div>
                                                 </div>

                                                 <div class="col-sm-3 col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname">City: <span class="text-danger">*</span></label>
                                                        <select class="form-control select2" name="city" id="city">
                                                            <option value="">Select city</option>
                                                        </select>
                                                    </div>
                                                 </div>

                                                 

                                                 <div class="col-sm-3 col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname">Mobile No: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"  id="name" name="name" >
                                                    </div>
                                                 </div>

                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div id="profile-container" >
                                            <img style="border:1px solid black;" id="profileImage" src="<?=$path?>app-assets/images/icons/temp.jpg">
                                        </div>
                                        <input id="imageUpload" type="file" name="logo" placeholder="Photo" capture="" accept="image/*">
                                        <input type="hidden" value="temp.jpg" name="picture">
                                    </div>
                                </div>


                                <div class="row">
                                         <div class="col-sm-3 col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Address: </label>
                                                <textarea class="form-control" name="address" id="address"></textarea>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Source: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  id="name" name="name" >
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Occupation: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  id="name" name="name" >
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Referral name: <span class="text-danger">*</span></label>
                                                <select class="form-control select2" name="referal" id="referal">
                                                    <option value="">Select Referral name</option>
                                                </select>
                                            </div>
                                         </div>
                                </div>


                                  <div class="row">
                                        

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">OPD Insurance Name: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="opd" id="opd">
                                                    <option value="1">Select OPD Panel Name</option>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Patient Category: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value="1">Select Category</option>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Emergency: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value="1">Select Appointment</option>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Select Doctor: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value="1">Select Doctor</option>
                                                </select>
                                            </div>
                                         </div>

                                         <div class="col-sm-2 col-md-2">
                                            <div class="form-group">
                                                <label for="lastname">Select print: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="print" id="print">
                                                    <option value="1">A4</option>
                                                    <option value="1">A4 landscape</option>
                                                    <option value="1">A5</option>
                                                    <option value="1">A5 landscape</option>
                                                </select>
                                            </div>
                                         </div>

                                          <div class="col-sm-3 col-md-2">
                                                <div class="form-group">
                                                    <label for="lastname">Appointment Type: <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="category" id="category">
                                                        <option value="1">General/25rs</option>
                                                    </select>
                                                </div>
                                             </div>

                                          <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <label for="lastname">Description: </label>
                                                <textarea class="form-control" name="address" id="address"></textarea>
                                            </div>
                                         </div>

                                           

                                               <div class="col-sm-3 col-md-2">
                                                <div class="form-group">
                                                    <label for="lastname">Appointment Date: </label>
                                                    <input type="date" class="form-control" name="address" id="address"/>
                                                </div>
                                             </div>

                                             <div class="col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="lastname">Appointment Time: </label>
                                                    <input type="time" class="form-control" name="address" id="address"/>
                                                </div>
                                             </div>

                                             <div class="col-md-3">
                                      <div class="form-group mt-1">
                                        <label for="switcheryColor2" class="card-title ml-1">De-Active</label>
                                          <input type="checkbox" value="1" id="switcheryColor2" class="switchery" name="status" data-color="info" checked />
                                          <label for="switcheryColor2" class="card-title ml-1">Active</label>
                                        </div>
                                    </div>
                                </div>
                               
                            

                               

                                <div class="card-footer ml-auto">
                                    <button type="button" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" onclick="classification('1');">Submit</button>
                                     <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onclick="this.form.reset();">Reset</button>
                                </div>
                            </form>
                                            </div>

                                             <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
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

                                                          <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Select Doctor: <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="category" id="category">
                                                                    <option value="1">Select Doctor</option>
                                                                </select>
                                                            </div>
                                                         </div>

                                                          <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Patient Category: <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="category" id="category">
                                                                    <option value="1">Select Category</option>
                                                                </select>
                                                            </div>
                                                         </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Charges Category: <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="category" id="category">
                                                                    <option value="1">General/25rs</option>
                                                                </select>
                                                            </div>
                                                         </div>

                                                         <div class="col-sm-3 col-md-2">
                                                        <div class="form-group">
                                                            <label for="lastname">Emergency: <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="category" id="category">
                                                                <option value="1">Select Appointment</option>
                                                            </select>
                                                        </div>
                                                     </div>

                                                      <div class="col-sm-3 col-md-2">
                                                        <div class="form-group">
                                                            <label for="lastname">Source: <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control"  id="name" name="name" >
                                                        </div>
                                                     </div>
                                                        <div class="col-sm-3 col-md-2">
                                                            <div class="form-group">
                                                                <label for="lastname">Reffral Name: <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control"  id="name" name="name" >
                                                            </div>
                                                         </div>

                                                          <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Description: </label>
                                                                <textarea class="form-control" name="address" id="address"></textarea>
                                                            </div>
                                                         </div>

                                                    </div>
                                                    <div class="row">
                                                         <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Appointment Date: </label>
                                                                <input type="date" class="form-control" name="address" id="address"/>
                                                            </div>
                                                         </div>

                                                         <div class="col-sm-3 col-md-3">
                                                            <div class="form-group">
                                                                <label for="lastname">Appointment Time: </label>
                                                                <input type="time" class="form-control" name="address" id="address"/>
                                                            </div>
                                                         </div>
                                                    </div>
                                                      <div class="row">
                                                                <div class="col-md-6">
                                                                    <h3 class="text-danger" style="font-weight: bold;">Patient Name:ANISH  </h3>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <h3 class="text-danger" style="font-weight: bold;float: right;">MRD NO:30434</h3>
                                                                </div>
                                                            </div>
                                                    <div class="row">

                                                        <div class="table-responsive">
                                                        
                                                            <table class="table table-border">
                                                                <tr><td colspan="4" style="background: #20a576;color:#fff;text-align: center;font-weight: bold;">Last Appointment List</td></tr>
                                                                <tr>
                                                                    <th>Sl No</th>
                                                                    <th>Doctor Name</th>
                                                                    <th>Date</th>
                                                                    <th>Reason</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
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

                                            <div class="card-footer ml-auto">
                                                <button type="button" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" onclick="classification('1');">Submit</button>
                                                 <button type="button" class="btn btn-info btn-min-width btn-glow mr-1 mb-1" onclick="this.form.reset();">Reset</button>
                                            </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                                   <div class="table-responsive">
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
    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>

         


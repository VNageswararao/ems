<?php 
$path=base_url('template1/modern-admin/');
$profile_pic='';
?>  
<style type="text/css">
  #profile-container {
   width: 100%;
    overflow: hidden;
  
}
#imageUpload
{
    /*display: none;*/
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
   width: 100%;
    overflow: hidden;
   
}

#profile-container img {
   width: 100%;
  
}


</style>    
 <div class="content-body">
             <!-- Justified With Top Border start -->
                 <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Profile</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Profile</a>
                                            </li>
                                          
                                            
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                               <form enctype="multipart/form-data" method="post" id="profilesave">
                                                 <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
                                <div class="row">
                                    <div class="col-md-3">
                                         <div class="form-group">
                                            <label for="firstname">Company Name: <span class="text-danger">*</span></label>
                                           <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" value="<?php if(isset($getofficedata[0]['company_name'])) print $getofficedata[0]['company_name']; ?>">
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">License No: </label>
                                           <input type="text" name="license_no" id="license_no" value="<?php if(isset($getofficedata[0]['license_no'])) print $getofficedata[0]['license_no']; ?>" class="form-control" placeholder="License No">
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Company Mobile: <span class="text-danger">*</span></label>
                                           <input type="text" name="company_mobile" value="<?php if(isset($getofficedata[0]['company_mobile'])) print $getofficedata[0]['company_mobile']; ?>" id="company_mobile" class="form-control" placeholder="Company Mobile">
                                        </div>
                                    </div>

                                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">GSTIN NO: <span class="text-danger">*</span></label>
                                           <input type="text" name="gstin_no" value="<?php if(isset($getofficedata[0]['gstin_no'])) print $getofficedata[0]['gstin_no']; ?>" id="gstin_no" class="form-control" placeholder="GSTIN NO">
                                        </div>
                                    </div>
                                   
                                </div>
                                  <div class="row">
                                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Company  Phone:</label>
                                           <input type="text" name="company_phone" value="<?php if(isset($getofficedata[0]['company_phone'])) print $getofficedata[0]['company_phone']; ?>" id="company_phone" class="form-control" placeholder="Company  Phone">
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Company Email ID: </label>
                                           <input type="text" name="email_id" value="<?php if(isset($getofficedata[0]['email_id'])) print $getofficedata[0]['email_id']; ?>" id="email_id" class="form-control" placeholder="Company Email ID">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="symptoms">Company Address:</label>
                                            <textarea cols="3" rows="3" id="address" name="address" class="form-control" placeholder="Address"><?php if(isset($getofficedata[0]['address'])) print $getofficedata[0]['address']; ?></textarea>
                                        </div>
                                    </div>
                                
                                   
                                </div>
                                <hr/>

                                  <div class="row">
                                    <div class="col-md-3">
                                         <div class="form-group">
                                            <label for="firstname">Printable Company Name: <span class="text-danger">*</span></label>
                                           <input type="text" name="printable_company_name" value="<?php if(isset($getofficedata[0]['printable_company_name'])) print $getofficedata[0]['printable_company_name']; ?>" id="printable_company_name" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Printable Company  Phone:<span class="text-danger">*</span></label>
                                           <input type="text" name="printable_company_phone" value="<?php if(isset($getofficedata[0]['printable_company_phone'])) print $getofficedata[0]['printable_company_phone']; ?>" id="printable_company_phone" class="form-control" placeholder="Company  Phone">
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Printable Company Mobile: <span class="text-danger">*</span></label>
                                           <input type="text" name="printable_company_mobile" value="<?php if(isset($getofficedata[0]['printable_company_mobile'])) print $getofficedata[0]['printable_company_mobile']; ?>" id="printable_company_mobile" class="form-control" placeholder="Company Mobile">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                         <div class="form-group">
                                            <label for="firstname">Printable Email ID: <span class="text-danger">*</span></label>
                                           <input type="text" name="printable_emailid" value="<?php if(isset($getofficedata[0]['printable_emailid'])) print $getofficedata[0]['printable_emailid']; ?>" id="printable_emailid" class="form-control" placeholder="Printable Company Email ID">
                                        </div>
                                    </div>
                                   
                                </div>

                                  <div class="row">
                                     <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="firstname">Declarations:<span class="text-danger">*</span></label>
                                           <textarea cols="3" rows="3" id="declaration"  name="declaration" class="form-control" placeholder="Declaration"><?php if(isset($getofficedata[0]['declaration'])) print $getofficedata[0]['declaration']; ?></textarea>
                                        </div>
                                    </div>
                                      <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="firstname">Printable Company  Address:<span class="text-danger">*</span></label>
                                           <textarea cols="3" rows="3" id="printable_company_address"  name="printable_company_address" class="form-control" placeholder="Printable Company Address"><?php if(isset($getofficedata[0]['printable_company_address'])) print $getofficedata[0]['printable_company_address']; ?></textarea>
                                        </div>
                                    </div>
                                     <div class="col-md-2">
                                         <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                         <label>Logo</span></label>
                        <input style="display: none;"  id="imageUpload" type="file" name="logo" capture>
                      </div>


                    </div>
                    <div class="row">
                                   
                                                     
                              <?php if(isset($getofficedata[0]['logo']))
                              {
                                $img=$getofficedata[0]['logo'];
                            ?>
                            <div id="profile-container" style="float: right;">
                        <image style="border:1px solid black;" id="profileImage" src="<?php if($getofficedata[0]['logo']){echo base_url("images/profile/$img");}else{ echo base_url("template1/modern-admin/app-assets/images/download.png"); }?>" />
                                    </div>
                            <input type="hidden" value="<?=$img?>" name="profile_pic">
                            <?php
                              }
                              else {
                            ?>
                             <div id="profile-container" style="float: right;">
                                        <image style="border:1px solid black;width: 100%;" id="profileImage" src=<?php echo base_url() ?>template1/modern-admin/app-assets/images/download.png />
                                    </div>
                                    <?php } ?>

                    </div>
                    <?php
                              if($img)
                              {
                            ?>
                            <br/>
                    <div><button type="button" class="btn btn-primary btn-sm"><span onclick="removelogo(<?php if(isset($getofficedata[0]['office_id'])) print $getofficedata[0]['office_id']; ?>)">Removed Logo</span></button></div>
                    <?php } ?>
                  </div>

           
          </div>
                                    </div>
                                   
                                </div>
                              
                                <div class="card-footer ml-auto">
                                    <button type="button" class="btn btn-success btn-min-width btn-glow mr-1 mb-1" onclick="saveprofile();">Submit</button>
                                    
                                </div>
                            </form>
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
     $("#imageUpload").change(function(){
     // alert("df");
    var file_size = $(this)[0].files[0].size;
  if(file_size>1000000) {
    alert("File size is greater than 1MB");
    $(this).val('');
  }
});

//      $("#profileImage").click(function(e) {
//     $("#imageUpload").click();
// });
</script>

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
          
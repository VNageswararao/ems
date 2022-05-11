<?php 
$path=base_url('template1/modern-admin/');
?>      
 <div class="content-body">
             <!-- Justified With Top Border start -->
                 <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <input type="hidden" id="preopform" value="0">
                                <h4 class="card-title">Counseling</h4>
                                </div>
                                <form id="updatestatus_form" method="post">
                                <div id="updatestatus_data"></div>
                                  
                               </form> 
                               <div id="com_data"></div>
                                 <input type="hidden" name="csrf_test_name" id="csrf_test_name"  value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="edit_data"></div>

                               
                                        <ul class="nav nav-pills nav-pill-toolbar nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="active2-pill1" data-toggle="pill" href="#active21"
                                        aria-expanded="true"><l id="tab_tit">Surgical<l></a>
                                            </li>
                                            <li class="nav-item">
                                               <a class="nav-link" id="link2-pill1" data-toggle="pill" href="#link21" aria-expanded="false">Laser</a>
                                            </li>

                                            <li class="nav-item">
                                               <a class="nav-link" id="link3-pill1" data-toggle="pill" href="#link31" aria-expanded="false">Injection</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="link4-pill1" data-toggle="pill" href="#link41" aria-expanded="false">Investigation</a>
                                            </li>
                                        </ul>
 
                              

                                        <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="active21" aria-labelledby="active2-pill1"
                                      aria-expanded="true">


                             <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="surbaseIcon-tab11" data-toggle="tab" aria-controls="surtabIcon11"
                                      href="#surtabIcon11" aria-expanded="true"> Open</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="surbaseIcon-tab12" data-toggle="tab" aria-controls="surtabIcon12" href="#surtabIcon12"
                                      aria-expanded="false">Pending</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="surbaseIcon-tab13" data-toggle="tab" aria-controls="surtabIcon13" href="#surtabIcon13"
                                      aria-expanded="false">Completed</a>
                                  </li>
                                   <li class="nav-item">
                                    <a class="nav-link" id="surbaseIcon-tab14" data-toggle="tab" aria-controls="surtabIcon14" href="#surtabIcon14"
                                      aria-expanded="false">Cancelled</a>
                                  </li>
                            </ul>

                             <div class="tab-content px-1 pt-1">
                                  <div role="tabpanel" class="tab-pane active" id="surtabIcon11" aria-expanded="true"
                                    aria-labelledby="surbaseIcon-tab11">
                                       
                                         <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="sur_open_date" id="sur_open_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button onclick="gettreatmentplan(2,1)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="sur_open_data"></div>
                                            </div>

                                  </div>
                                  <div class="tab-pane" id="surtabIcon12" aria-labelledby="surbaseIcon-tab12">

                                       <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="sur_pending_date" id="sur_pending_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                              <button  class="btn btn-icon btn-warning mr-1 mb-1" onclick="gettreatmentplan(2,2)" type="button"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="sur_pending_data"></div>
                                            </div>

                                  </div>
                                  <div class="tab-pane" id="surtabIcon13" aria-labelledby="surbaseIcon-tab13">
                                        <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="sur_completed_date" id="sur_completed_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                              <button  class="btn btn-icon btn-warning mr-1 mb-1" onclick="gettreatmentplan(2,3)" type="button"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="sur_completed_data"></div>
                                            </div>
                                  </div>
                                  <div class="tab-pane" id="surtabIcon14" aria-labelledby="surbaseIcon-tab14">
                                        <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="sur_cancel_date" id="sur_cancel_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button onclick="gettreatmentplan(2,4)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="sur_cancel_data"></div>
                                            </div>
                                  </div>
                            </div>

















                                               
                                                

                                            </div>

                                            <!-- 2 nd tab -->

                   <div class="tab-pane" id="link21" role="tabpanel" aria-labelledby="link2-pill1" aria-expanded="false">

                              <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="lasbaseIcon-tab11" data-toggle="tab" aria-controls="lastabIcon11"
                                      href="#lastabIcon11" aria-expanded="true"> Open</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="lasbaseIcon-tab12" data-toggle="tab" aria-controls="lastabIcon12" href="#lastabIcon12"
                                      aria-expanded="false">Pending</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="lasbaseIcon-tab13" data-toggle="tab" aria-controls="lastabIcon13" href="#lastabIcon13"
                                      aria-expanded="false">Completed</a>
                                  </li>
                                   <li class="nav-item">
                                    <a class="nav-link" id="lasbaseIcon-tab14" data-toggle="tab" aria-controls="lastabIcon14" href="#lastabIcon14"
                                      aria-expanded="false">Cancelled</a>
                                  </li>
                            </ul>

                             <div class="tab-content px-1 pt-1">
                                  <div role="tabpanel" class="tab-pane active" id="lastabIcon11" aria-expanded="true"
                                    aria-labelledby="lasbaseIcon-tab11">
                                       
                                         <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="las_open_date" id="las_open_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(3,1)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="las_open_data"></div>
                                            </div>

                                  </div>
                                  <div class="tab-pane" id="lastabIcon12" aria-labelledby="lasbaseIcon-tab12">

                                       <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="las_pending_date" id="las_pending_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(3,2)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="las_pending_data"></div>
                                            </div>

                                  </div>
                                      <div class="tab-pane" id="lastabIcon13" aria-labelledby="lasbaseIcon-tab13">
                                           <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="las_completed_date" id="las_completed_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(3,3)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="las_completed_data"></div>
                                            </div>
                                      </div>
                                      <div class="tab-pane" id="lastabIcon14" aria-labelledby="lasbaseIcon-tab14">
                                       <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="las_cancel_date" id="las_cancel_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(3,4)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="las_cancel_data"></div>
                                            </div>
                                      </div>
                            </div>


                   </div>

                      <!-- 3rd nd tab -->
                     <div class="tab-pane" id="link31" role="tabpanel" aria-labelledby="link3-pill1" aria-expanded="false">

                             <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="injbaseIcon-tab11" data-toggle="tab" aria-controls="injtabIcon11"
                                      href="#lastabIcon11" aria-expanded="true"> Open</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="injbaseIcon-tab12" data-toggle="tab" aria-controls="injtabIcon12" href="#injtabIcon12"
                                      aria-expanded="false">Pending</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="injbaseIcon-tab13" data-toggle="tab" aria-controls="injtabIcon13" href="#injtabIcon13"
                                      aria-expanded="false">Completed</a>
                                  </li>
                                   <li class="nav-item">
                                    <a class="nav-link" id="injbaseIcon-tab14" data-toggle="tab" aria-controls="injtabIcon14" href="#injtabIcon14"
                                      aria-expanded="false">Cancelled</a>
                                  </li>
                            </ul>

                             <div class="tab-content px-1 pt-1">
                                  <div role="tabpanel" class="tab-pane active" id="injtabIcon11" aria-expanded="true"
                                    aria-labelledby="injbaseIcon-tab11">
                                       
                                         <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="inj_open_date" id="inj_open_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(4,1)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="inj_open_data"></div>
                                            </div>

                                  </div>
                                  <div class="tab-pane" id="injtabIcon12" aria-labelledby="injbaseIcon-tab12">

                                       <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="inj_pending_date" id="inj_pending_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(4,2)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="inj_pending_data"></div>
                                            </div>

                                  </div>
                                      <div class="tab-pane" id="injtabIcon13" aria-labelledby="injbaseIcon-tab13">
                                           <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="inj_completed_date" id="inj_completed_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(4,3)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="inj_completed_data"></div>
                                            </div>
                                      </div>
                                      <div class="tab-pane" id="injtabIcon14" aria-labelledby="injbaseIcon-tab14">
                                       <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="inj_cancel_date" id="inj_cancel_date" class="form-control search_date">
                                            </div>
                                         
                                            <div class="col-md-2">
                                                <button  class="btn btn-icon btn-warning mr-1 mb-1" type="button" onclick="gettreatmentplan(4,4)"><i class="la la-search"></i></button>
                                            </div>
                                             
                                            </div>

                                             <div class="row">
                                                 <div class="col-md-12" id="inj_cancel_data"></div>
                                            </div>
                                      </div>
                            </div>

                     </div>

                     <!-- 4th nd tab -->
                        <div class="tab-pane" id="link41" role="tabpanel" aria-labelledby="link4-pill1" aria-expanded="false">

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
          $(document ).ready(function() {
    cd = (new Date()).toISOString().split('T')[0];
        $('.search_date').val(cd);
    });

          function showmodal() {
              $('#modaldiv_modal').modal('show');
         }
csrf=$('#csrf_test_name').val();

function updatestatus(val,flag)
{
    if(val>0)
    {
         $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Counseling/updatestatus',
            dataType: "json",
            data: {flag: flag,getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                 $('#updatestatus_data').html(data.msg);
                 $('#div_modal').modal('show');
                 $('.modal-title').html('Update Counseling Status');
                 getparticularstreatmentplan($('#trchargetype_id').val());
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    }
}

function getparticularstreatmentplan(val)
{
    <?php
$path=base_url('template1/');
?>
   



    if(val>0)
    {
         $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Counseling/getparticulars',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#update_procedure').html(data.msg);
                $(".select2").select2();
                cd = (new Date()).toISOString().split('T')[0];
                $('.treatmentplan_date').val(cd);
               
                selpar=$('#selpart').val();
                var mf = [];
                var array = $('#selpart').val().split(",");
                $.each(array,function(i){
                      let arrayas = [array[i]];
                  // alert(array[i]);
                   mf.push(array[i]);
                });
              
// alert(mf);
                var scriptTag = document.createElement("script");
                scriptTag.src = "<?php echo $path; ?>app-assets/js/scripts/ui/jquery-ui/buttons-selects.min.js";
                document.getElementsByTagName("head")[0].appendChild(scriptTag);
                if(selpar){
                  
                $("#update_procedure").val(mf).select2();
                }

              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    }
}

function getparticularstreatmentplann(val)
{
    <?php
$path=base_url('template1/');
?>
   



    if(val>0)
    {
         $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Counseling/getparticulars',
            dataType: "json",
            data: {getid: val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#particular_type').html(data.msg);
                $(".select2").select2();
               
               
               
                var mf = [];
                var array = $('#selpart').val().split(",");
                $.each(array,function(i){
                      let arrayas = [array[i]];
                  // alert(array[i]);
                   mf.push(array[i]);
                });
              
// alert(mf);
               
                if(selpar){
                  
                $("#particular_type").val(mf).select2();
                }

              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    }
}


function getdataval(val)
{
    $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Counseling/getdataval',
            dataType: "json",
            data: {csrf_test_name:$('#csrf_test_name').val(),surgery_id:val,chargeid:$('#trchargetype_id').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#particular_type').html(data.msg);
                $(".select2").select2();
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    
}

function submitpreop()
{
    $("#overlay").fadeIn(300);
     $.ajax({
            type: "POST",
            url: 'Counseling/savepreop',
            dataType: "json",
            data:$('#preoperative_form').serialize(),
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                Swal.fire({title:"success",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
                $('#preopform').val(1);
                $('#savep').click();
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
    
}
function getnewmodal()
{
    $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Counseling/comnewfunction',
            dataType: "json",
            data: {chargeid:$('#trchargetype_id').val(),csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                 $('#com_data').html(data.msg);
                 $('#div_modalcom').modal('show');
                 $('.modal-titles').html('New Preoperative Appointment');
                 cd = (new Date()).toISOString().split('T')[0];
                $('.treatmentplan_date').val(cd);
                $('#paitent_name').val($('#pat_hidname').val());
                $('#prefered_phone').val($('#pat_hidmbl').val());
                $('#prepaitent_name').val($('#pat_hidname').val());
                $('#mrdno').val($('#pat_hidmrd').val());
                $('#preprefered_phone').val($('#pat_hidmbl').val());
                $('#pretreamentplan_id').val($('#treamentplan_id').val());
                $('#patidval_pre').val($('#patidval').val());
                 getparticularstreatmentplann($('#trchargetype_id').val());
                 $(".select2").select2();
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
}
$(document).ready(function(){
    gettreatmentplan(2,1);
  $('#updatestatus_form').submit(function(e){
            e.preventDefault(); 
            if($('#preopform').val()==0)
            {
                if($('#status').val()==2)
                {
                    getnewmodal();
                    return false;
                }
           }
          
        var data;
        data = new FormData(this);
      
       $.ajax({
        url:'Counseling/saveupdatestatus',
        type:"post",
        dataType: "json",
        data:data,
        processData:false,
        contentType:false,
        cache:false,
        async:false,
        success: function(data){

             $("#overlay").fadeOut(300);
             if(data.error=='<p>You did not select a file to upload.</p>')
             {
               Swal.fire({title:"Warning!",text:"You did not select a file to upload.",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
               return false;
             }
               if(data.msg != ''){
               Swal.fire({title:"",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
                location.reload();
               
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        
      });
        });
    });
      


    function gettreatmentplan(val,flag)
   {
    //flag=1 (open) flag=2(pending) flag=3 (completed) flag=4(cancel)
    if(val==2)
    {
        if(flag==1)
        {
            idname='sur_open';
        }
        else if(flag==2)
        {
            idname='sur_pending';
        }
        else if(flag==3)
        {
            idname='sur_completed';
        }
        else if(flag==4)
        {
            idname='sur_cancel';
        }
        
    }
    else if(val==3)
    {
        if(flag==1)
        {
            idname='las_open';
        }
        else if(flag==2)
        {
            idname='las_pending';
        }
        else if(flag==3)
        {
            idname='las_completed';
        }
        else if(flag==4)
        {
            idname='las_cancel';
        }
    }
     else if(val==4)
    {
        if(flag==1)
        {
            idname='inj_open';
        }
        else if(flag==2)
        {
            idname='inj_pending';
        }
        else if(flag==3)
        {
            idname='inj_completed';
        }
        else if(flag==4)
        {
            idname='inj_cancel';
        }
    }
        $("#overlay").fadeIn(300);
        $('#'+idname+'_data').html('');
         $.ajax({
            type: "POST",
            url: 'Counseling/gettreatmentplan',
            dataType: "json",
            data: {flag:flag,csrf_test_name:csrf,chargetype_id:val,surgical_date:$('#'+idname+'_date').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != '')
              {
                      $('#'+idname+'_data').html(data.msg);
                      $('#'+idname+'_datatable').DataTable({
                           dom: 'Bfrtip',
                           buttons: [
                            'pdfHtml5'
                          ],
                         
                           "lengthMenu": [[1000,10,25, 50, 100, 1000], [1000,10,25, 50, 100, 1000]]
                        });
              } else if(data.error != '')
              {
                 $('#'+idname+'_data').html('No Data Found');
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) 
                {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }

        });
   }

   function deletedata(val,flag)
{
    if(val>0)
    {
          Swal.fire({title:"Are you sure?",
            text:"You won't be able to revert this!",
            type:"warning",
            showCancelButton:!0,
            confirmButtonColor:"#3085d6",
            cancelButtonColor:"#d33",
            confirmButtonText:"Yes, Delete it!",
            confirmButtonClass:"btn btn-warning",
            cancelButtonClass:"btn btn-danger ml-1",
            buttonsStyling:!1}).then((function(t){
              if(t.value)
                {
             $("#overlay").fadeIn(300);
                   $.ajax({
            type: "POST",
            url: 'Counseling/deletedata',
            dataType: "json",
            data: {getid: val,csrf_test_name:csrf},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
               Swal.fire({title:"Deleted",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
           location.reload();
               
              } else if(data.error != ''){
                Swal.fire({title:"Warning!",text:""+data.error+"",type:"warning",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
               return false;
              } else if(data.error_message) 
              {
                var error = data.error_message;
                var err_str = '';
                for (var key in error) {
                  err_str += error[key] +'\n';
                }
                Swal.fire({title:"Info!",text:""+err_str+"",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                 return false;
              }
                
            },
            error: function (error) {
                Swal.fire({title:"Info!",text:"Network Busy",type:"info",confirmButtonClass:"btn btn-primary",buttonsStyling:!1});
                $("#overlay").fadeOut(300);  
            }
        });
               
                }
                })) 
    }
}




          </script>



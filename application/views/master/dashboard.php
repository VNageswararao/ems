<div class="content-body">
   <div id="modaldiv_modal" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-sm">
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Print Settings</h4>
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                  <table class="table table-bordered table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Names</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="chkcomplaints" id="chkcomplaints"  value="1"></td>
                                                              <td>Complaints</td>
                                                          </tr>
                                                           <tr>
                                                              <td><input type="checkbox" class="check_class" name="chkophthalmic " id="chkophthalmic"  value="1"></td>
                                                              <td>Ophthalmic History</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="chkmedical" id="chkmedical" checked value="1"></td>
                                                              <td>Medical History</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="chkeyepart" id="chkeyepart"  value="1"></td>
                                                              <td>EYE Particulars</td>
                                                          </tr>
                                                          <tr class="pricss">
                                                              <td><input type="checkbox" class="check_class" name="addmediciness" id="addmediciness"  value="1"></td>
                                                              <td>Medicine</td>
                                                          </tr>
                                                           <tr class="pricss">
                                                              <td><input type="checkbox" class="check_class" name="investigationchk" id="investigationchk"  value="1"></td>
                                                              <td>Investigation</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="preliminary_ex" id="preliminary_ex"  value="1"></td>
                                                              <td>Preliminary Examination</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="vsisonreadings" id="vsisonreadings"  value="1"></td>
                                                              <td>Vision Readings</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="curspec" id="curspec" checked value="1"></td>
                                                              <td>Current Spectacle Prescription</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="objectchk" id="objectchk"  value="1"></td>
                                                              <td>Objective Refraction</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="arkkchk" id="arkkchk"  value="1"></td>
                                                              <td> AR Kerotometry</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="manchk" id="manchk"  value="1"></td>
                                                              <td>Manual Kerotometry</td>
                                                          </tr>
                                                           <tr>
                                                              <td><input type="checkbox" class="check_class" name="specchk" id="specchk"  value="1"></td>
                                                              <td>Spectacle Correction</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="conlchk" id="conlchk"  value="1"></td>
                                                              <td> Contact Lens Correction</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" class="check_class" name="pmtchk" id="pmtchk"  value="1"></td>
                                                              <td>PMT Correction</td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                                  </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
        <button id="save" class="btn btn-primary btn-sm" type="button" onclick="printsubmit();"><i class="fas fa-plus-square"></i>Submit</button>
            <button type="button" id="mclose" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php if($this->session->userdata('user_type')==1){ ?>
<div class="row">
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-danger">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$today_patient?></h3>
          <span>Today's Patients</span>
        </div>
        <div class="align-self-center">
          <i class="icon-users text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-success">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$today_collection?></h3>
          <span>Today's Collection</span>
        </div>
        <div class="align-self-center">
          <i class="la la-credit-card text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-amber">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$total_doctors?></h3>
          <span>Total  Doctors</span>
        </div>
        <div class="align-self-center">
          <i class="la la-stethoscope text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-12">
<div class="card bg-gradient-directional-info">
  <div class="card-content">
    <div class="card-body">
      <div class="media d-flex">
        <div class="media-body text-white text-left">
          <h3 class="text-white"><?=$total_patient?></h3>
          <span>Total Patients</span>
        </div>
        <div class="align-self-center">
          <i class="icon-users text-white font-large-2 float-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?php } elseif ($this->session->userdata('user_type')==3 || $this->session->userdata('user_type')==2) { ?>
<style type="text/css">
  a:not([href]):not([tabindex]) {
    color: blue;
    text-decoration: underline;
}
</style>
   <div class="card-content card">
      <div class="card-body">
          <ul class="nav nav-tabs">
              <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
              <li class="nav-item">
                  <a class="nav-link active" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">View</a>
              </li>
             
               <li class="nav-item">
                  <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Inprogress</a>
              </li>
               <li class="nav-item">
                  <a class="nav-link" id="base-tab4" data-toggle="tab" aria-controls="tab4" href="#tab4" aria-expanded="false">Completed</a>
              </li>
              <?php if($this->session->userdata('user_type')==2){ ?>
               <li class="nav-item">
                  <a class="nav-link" id="base-tab5" data-toggle="tab" aria-controls="tab5" href="#tab5" aria-expanded="false">All Patients</a>
              </li>
            <?php } ?>
          
          </ul>

              <div class="tab-content px-1 pt-1">
                 <div role="tabpanel" class="tab-pane active" id="tab2" aria-expanded="true" aria-labelledby="base-tab2">
                     <div class="tab-pane active" id="tab2" aria-labelledby="base-tab2">
                             <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <input style="height: 43px;" type="date" name="search_date" id="search_date" class="form-control search_date">
                                </div>
                                <div class="col-md-2">
                                    <button onclick="getpateintdetails(<?php echo $this->session->userdata('user_type'); ?>)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                </div>
                                <div class="col-md-2">
                                  <button style="padding: 4px 9px;float: right;" class="btn btn-icon btn-info mr-1 mb-1" type="button"><i class="la la-cog" onclick="showmodal()"></i></button>
                                </div>
                            </div>
                               <div class="table-responsive" id="p_date">
                                </div>
                      </div>
                </div>


                 <div role="tabpanel" class="tab-pane" id="tab3" aria-expanded="true" aria-labelledby="base-tab3">
                     <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                             <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <input style="height: 43px;" type="date" name="search_date" id="insearch_date" class="form-control search_date">
                                </div>
                                <div class="col-md-4">
                                    <button onclick="getsaveddetails(<?php echo $this->session->userdata('user_type'); ?>,0)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                </div>
                            </div>
                               <div class="table-responsive" id="inprogress">
                                </div>
                      </div>
                </div>

                  <div role="tabpanel" class="tab-pane" id="tab4" aria-expanded="true" aria-labelledby="base-tab4">
                     <div class="tab-pane" id="tab4" aria-labelledby="base-tab4">
                             <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <input style="height: 43px;" type="date" name="search_date" id="prosearch_date" class="form-control search_date">
                                </div>
                                
                                <div class="col-md-2">
                                    <button onclick="getsaveddetails(<?php echo $this->session->userdata('user_type'); ?>,1)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                </div>
                                 <div class="col-md-2">
                                  <button style="padding: 4px 9px;float: right;" class="btn btn-icon btn-info mr-1 mb-1" type="button"><i class="la la-cog" onclick="showmodal()"></i></button>
                                </div>
                            </div>
                               <div class="table-responsive" id="progress">
                                </div>
                      </div>
                </div>


                 <div role="tabpanel" class="tab-pane" id="tab5" aria-expanded="true" aria-labelledby="base-tab5">
                     <div class="tab-pane" id="tab5" aria-labelledby="base-tab5">
                             <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <input style="height: 43px;" type="date" name="allsearch_date" id="allsearch_date" class="form-control search_date">
                                </div>
                                <div class="col-md-4">
                                    <button onclick="getpateintdetailst()"  class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                </div>
                            </div>
                               <div class="table-responsive" id="allpatient">
                                </div>
                      </div>
                </div>

             </div>


           


        </div>
      </div>


      <script type="text/javascript">
      $(document ).ready(function() {
    cd = (new Date()).toISOString().split('T')[0];
    $('.search_date').val(cd);
    getpateintdetails(<?php echo $this->session->userdata('user_type'); ?>);
});
function getpateintdetails(val) 
{
  if(val==3)
  {
    urld='Patients_registration/getpatientdetails1';
  }
  else if(val==2)
  {
     urld='<?php echo base_url() ?>transaction/Examination/getsavedexamionation';
  }
     $("#overlay").fadeIn(300);
     $.fn.dataTable.ext.errMode = 'none';
     $.ajax({
            type: "POST",
            url: urld,
            dataType: "json",
            data: {sdate:$('#search_date').val(),utype:val,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#p_date').html(data.msg);
                  var table = $('#tableid').DataTable( {
       
        buttons: [  ],
       
        dom: 'Blfrtip',
        columnDefs: [ {
               
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
        }]
    } );
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


function getsaveddetails(val,typed) 
{
   urld='<?php echo base_url() ?>transaction/Examination/getsavedexamionationex';
  if(typed==0)
  {
     dd=$('#insearch_date').val();
     dsdd='inprogress';
      dsd1d='tablein';
  }
  else
  {
     dd=$('#prosearch_date').val();
     dsdd='progress';
      dsd1d='tablepro';
  }
     $("#overlay").fadeIn(300);
     $.fn.dataTable.ext.errMode = 'none';
     $.ajax({
            type: "POST",
            url: urld,
            dataType: "json",
            data: {sdate:dd,utype:val,typecond:typed,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){

                $('#'+dsdd).html(data.msg);
                  var table = $('#'+dsd1d).DataTable( {
       
        buttons: [  ],
       
        dom: 'Blfrtip',
        columnDefs: [ {
               
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
        }]
    } );
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

 function printdata(printpatient_registration_id){

         $('<form target="_blank"  method="post" action="<?php echo base_url() ?>master/Patients_registration/print_appointment/"><input name="printpatient_registration_id" value="'+printpatient_registration_id+'"/><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

    }

    function printdataexamination(printpatient_registration_id,pat_app_id,sel=0,actionflag=0){
      //actionflag=0.fresh optho ,1.optho,2:doctor

         $('<form   method="post" action="<?php echo base_url() ?>transaction/Examination/"><input name="printpatient_registration_id" value="'+printpatient_registration_id+'"/><input name="pat_app_id" value="'+pat_app_id+'"/><input name="doc_examination_id" id="doc_examination_id" value="'+sel+'"/><input name="actionflag" id="actionflag" value="'+actionflag+'"/><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

    }

    function examinationprint(examinationid,sel=0)
{
    if(sel==1)
    {
         $(".check_class").attr("checked", false);
         $("#specchk").attr("checked", true);
    }
    else
    {
        $(".check_class").attr("checked", true);
    }

   $('<form target="_blank"  method="post" action="<?php echo base_url(); ?>/transaction/Examination/examinationprint"><input name="examinationid" value="'+examinationid+'"/><input name="chkcomplaintsout" value="'+$('#chkcomplaints').is(':checked')+'"><input name="chkopthalmicsout" value="'+$('#chkophthalmic').is(':checked')+'"><input name="chkmedicalout" value="'+$('#chkmedical').is(':checked')+'"><input name="chkeyepartout" value="'+$('#chkeyepart').is(':checked')+'"><input name="addmedicinessout" value="'+$('#addmediciness').is(':checked')+'"><input name="investigationchkout" value="'+$('#investigationchk').is(':checked')+'"><input name="preliminary_exout" value="'+$('#preliminary_ex').is(':checked')+'"><input name="vsisonreadingsout" value="'+$('#vsisonreadings').is(':checked')+'"><input name="curspecout" value="'+$('#curspec').is(':checked')+'"><input name="objectchkout" value="'+$('#objectchk').is(':checked')+'"><input name="arkkchkout" value="'+$('#arkkchk').is(':checked')+'"><input name="manchkout" value="'+$('#manchk').is(':checked')+'"><input name="specchkout" value="'+$('#specchk').is(':checked')+'"><input name="conlchkout" value="'+$('#conlchk').is(':checked')+'"><input name="pmtchkout" value="'+$('#pmtchk').is(':checked')+'"><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

}
 function printsubmit()
   {
      Swal.fire({title:"",text:"Saved data",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
      $('#mclose').click();
   }
    function showmodal() {
              $('#modaldiv_modal').modal('show');
         }
</script>

<?php  } elseif ($this->session->userdata('user_type')==8){ ?>

   <div class="card-content card">
      <div class="card-body">
        <div id="invest_data"></div>
          <ul class="nav nav-tabs">
              <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
              <li class="nav-item">
                  <a class="nav-link active" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">View Investigation</a>
              </li>
          </ul>

          <div class="tab-content px-1 pt-1">
                 <div role="tabpanel" class="tab-pane active" id="tab2" aria-expanded="true" aria-labelledby="base-tab2">
                     <div class="tab-pane active" id="tab2" aria-labelledby="base-tab2">
                             <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <input style="height: 43px;" type="date" name="search_date" id="search_date" class="form-control search_date">
                                </div>
                                <div class="col-md-2">
                                    <button onclick="getpateintdetails(<?php echo $this->session->userdata('user_type'); ?>)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                </div>
                              
                            </div>
                               <div class="table-responsive" id="p_date">
                                </div>
                      </div>
                </div>

               
             </div>


          </div>
        </div>
        <script type="text/javascript">
            $(document ).ready(function() {
    cd = (new Date()).toISOString().split('T')[0];
    $('.search_date').val(cd);
     getallinvestigation(<?php echo $this->session->userdata('user_type'); ?>);
});


  function getallinvestigation(val) 
{
  
     $("#overlay").fadeIn(300);
     $.fn.dataTable.ext.errMode = 'none';
     $.ajax({
            type: "POST",
            url: 'Common_controller/getallinvestigation',
            dataType: "json",
            data: {sdate:$('#search_date').val(),csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#p_date').html(data.msg);
                  var table = $('#tableid').DataTable({
                      buttons: [  ],
                      dom: 'Blfrtip',
                      columnDefs: [{
                             lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
                         }]
                 });
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


function addinvest(dte,patid)
{
    if(patid>0)
    {
         $("#overlay").fadeIn(300);
         $.ajax({
            type: "POST",
            url: 'Common_controller/addinvest',
            dataType: "json",
            data: {dte: $('#'+dte).val(),patid: patid,csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                 $('#invest_data').html(data.msg);
                 $('#div_modal').modal('show');
                 $('.modal-title').html('Investigation Details');
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
        </script>

<?php } ?>
<script type="text/javascript">
  function getpateintdetailst() 
{
    $('#allpatient').html('');
     $("#overlay").fadeIn(300);
     $.fn.dataTable.ext.errMode = 'none';
     $.ajax({
            type: "POST",
            url: 'Patients_registration/getpatientdetailsall',
            dataType: "json",
            data: {sdate:$('#allsearch_date').val(),csrf_test_name:$('#csrf_test_name').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
                $('#allpatient').html(data.msg);
                  var table = $('#tableidall').DataTable( {
       
        buttons: [  ],
       
        dom: 'Blfrtip',
       "lengthMenu": [[5,10,25, 50, 100, 1000], [5,10,25, 50, 100, 1000]]
    } );
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
</script>
</div>

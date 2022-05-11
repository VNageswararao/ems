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
                                <h4 class="card-title">Case History</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="edit_data"></div>
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">View Details</a>
                                            </li>
                                           
                                            
                                        </ul>
 <input type="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
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
                                                              <td><input type="checkbox" name="chkcomplaints" id="chkcomplaints" checked value="1"></td>
                                                              <td>Complaints</td>
                                                          </tr>
                                                           <tr>
                                                              <td><input type="checkbox" name="chkophthalmic " id="chkophthalmic" checked value="1"></td>
                                                              <td>Ophthalmic History</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="chkmedical" id="chkmedical" checked value="1"></td>
                                                              <td>Medical History</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="chkeyepart" id="chkeyepart" checked value="1"></td>
                                                              <td>EYE Particulars</td>
                                                          </tr>
                                                          <tr class="pricss">
                                                              <td><input type="checkbox" name="addmediciness" id="addmediciness" checked value="1"></td>
                                                              <td>Medicine</td>
                                                          </tr>
                                                           <tr class="pricss">
                                                              <td><input type="checkbox" name="investigationchk" id="investigationchk" checked value="1"></td>
                                                              <td>Investigation</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="preliminary_ex" id="preliminary_ex" checked value="1"></td>
                                                              <td>Preliminary Examination</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="vsisonreadings" id="vsisonreadings" checked value="1"></td>
                                                              <td>Vision Readings</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="curspec" id="curspec" checked value="1"></td>
                                                              <td>Current Spectacle Prescription</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="objectchk" id="objectchk" checked value="1"></td>
                                                              <td>Objective Refraction</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="arkkchk" id="arkkchk" checked value="1"></td>
                                                              <td> AR Kerotometry</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="manchk" id="manchk" checked value="1"></td>
                                                              <td>Manual Kerotometry</td>
                                                          </tr>
                                                           <tr>
                                                              <td><input type="checkbox" name="specchk" id="specchk" checked value="1"></td>
                                                              <td>Spectacle Correction</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="conlchk" id="conlchk" checked value="1"></td>
                                                              <td> Contact Lens Correction</td>
                                                          </tr>
                                                          <tr>
                                                              <td><input type="checkbox" name="pmtchk" id="pmtchk" checked value="1"></td>
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

                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                               
                                                 <div class="row">
                                          <div class="col-md-3"></div>
                                            <div class="col-md-4">
                                                <input style="height: 43px;" type="date" name="search_date" id="search_date" class="form-control search_date">
                                            </div>
                                         
                                           <div class="col-md-2">
                                                <button onclick="getexaminationdata(<?php echo $this->session->userdata('user_type'); ?>)" class="btn btn-icon btn-warning mr-1 mb-1" type="button"><i class="la la-search"></i></button>
                                            </div>
                                            <div class="col-md-2" >
                                                <button style="padding: 4px 9px;float: right;"  class="btn btn-icon btn-info mr-1 mb-1" type="button"><i class="la la-cog" onclick="showmodal()"></i></button>
                                              </div>
                                            </div>

                                             <div class="row">
                                              <div class="col-md-12" id="examination_data"></div>
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
          $(document ).ready(function() {
    cd = (new Date()).toISOString().split('T')[0];
    $('.search_date').val(cd);
    
});

          function showmodal() {
              $('#modaldiv_modal').modal('show');
         }

csrf=$('#csrf_test_name').val();
         function getexaminationdata(typeuser)
   {
        $("#overlay").fadeIn(300);
        $('#examination_data').html('');
         $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>transaction/examination/getexaminationdatafromdashboard',
            dataType: "json",
            data: {typeuser:typeuser,csrf_test_name:csrf,examination_date:$('#search_date').val()},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != '')
              {
                      $('#examination_data').html(data.dataexam);
                      $('#ex_datatable').DataTable({
                           dom: 'Bfrtip',
                           buttons: [
                            'pdfHtml5'
                          ],
                         
                           "lengthMenu": [[1000,10,25, 50, 100, 1000], [1000,10,25, 50, 100, 1000]]
                        });
              } else if(data.error != '')
              {
                 $('#examination_data').html('No Data Found');
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

   function deletedata(val)
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
            url: '<?php echo base_url(); ?>transaction/examination/deletedata',
            dataType: "json",
            data: {getid: val,csrf_test_name:csrf},
            success: function(data){
                $("#overlay").fadeOut(300);
               if(data.msg != ''){
               Swal.fire({title:"Deleted",text:""+data.msg+"",type:"success",confirmButtonClass:"btn btn-success",buttonsStyling:!1});
            getexaminationdata(<?php echo $this->session->userdata('user_type'); ?>)
               
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

function examinationprint(examinationid)
{
   $('<form target="_blank"  method="post" action="<?php echo base_url(); ?>transaction/Examination/examinationprint"><input name="examinationid" value="'+examinationid+'"/><input name="chkcomplaintsout" value="'+$('#chkcomplaints').is(':checked')+'"><input name="chkopthalmicsout" value="'+$('#chkophthalmic').is(':checked')+'"><input name="chkmedicalout" value="'+$('#chkmedical').is(':checked')+'"><input name="chkeyepartout" value="'+$('#chkeyepart').is(':checked')+'"><input name="addmedicinessout" value="'+$('#addmediciness').is(':checked')+'"><input name="investigationchkout" value="'+$('#investigationchk').is(':checked')+'"><input name="preliminary_exout" value="'+$('#preliminary_ex').is(':checked')+'"><input name="vsisonreadingsout" value="'+$('#vsisonreadings').is(':checked')+'"><input name="curspecout" value="'+$('#curspec').is(':checked')+'"><input name="objectchkout" value="'+$('#objectchk').is(':checked')+'"><input name="arkkchkout" value="'+$('#arkkchk').is(':checked')+'"><input name="manchkout" value="'+$('#manchk').is(':checked')+'"><input name="specchkout" value="'+$('#specchk').is(':checked')+'"><input name="conlchkout" value="'+$('#conlchk').is(':checked')+'"><input name="pmtchkout" value="'+$('#pmtchk').is(':checked')+'"><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

}

function printdataexamination(printpatient_registration_id,pat_app_id,sel=0,actionflag=0){
      //actionflag=0.fresh optho ,1.optho,2:doctor

         $('<form   method="post" action="<?php echo base_url(); ?>transaction/Examination/"><input name="printpatient_registration_id" value="'+printpatient_registration_id+'"/><input name="pat_app_id" value="'+pat_app_id+'"/><input name="doc_examination_id" id="doc_examination_id" value="'+sel+'"/><input name="actionflag" id="actionflag" value="'+actionflag+'"/><input name="csrf_test_name" value="'+$('#csrf_test_name').val()+'"></form>').appendTo('body').submit().remove();

    }



          </script>

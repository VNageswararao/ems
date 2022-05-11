<style type="text/css">
    table .btn {
    padding: 0.35rem 0.4rem;
}
.btn.btn-icon i {
    font-size: 1.4rem;
}
.select2-container--classic .select2-results__options .select2-results__option[aria-selected=true], .select2-container--default .select2-results__options .select2-results__option[aria-selected=true] {
    background-color: #1e9ff2 !important;
    color: #fff !important;
}
  .grid_table{
        height: 30px;
        width: 80px;
}
.exceldes
{
 font-size: 25px;   
}
 .grid_tablewindow{
        width: 100%;
        height: 30px;
    }
    .lookuphead{
           background: #1e9ff2;
           color: #fff;
    }
    .form-control{
        height: 30px;
    }
    #overlay{   
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.6);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
.is-hide{
  display:none;
}
#tableid
{
    width: 100%;
}

 </style> 



<!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="#"><img class="brand-logo" alt="modern admin logo" src="<?=  base_url();?>/template1/app-assets/images/logo/logo.png">
                            <h3 class="brand-text">EMR</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li style="display:none;"  class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"></a>
                            <ul class="mega-dropdown-menu dropdown-menu row p-1">
                             
                                <li class="col-md-5 px-2" >
                                    <h6 class="font-weight-bold font-medium-2 ml-1">Admin Panel</h6>
                                    <ul class="row mt-2">
                                        <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3" href="<?php echo base_url(); ?>transaction/Sales" ><i class="la la-shopping-cart font-large-1 mr-0"></i>
                                                <p class="font-medium-2 mt-25 mb-0">Sales</p>
                                            </a></li>
                                        <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3" href="<?php echo base_url(); ?>transaction/Purchase_entry" ><i class="la la-tree font-large-1 mr-0"></i>
                                                <p class="font-medium-2 mt-25 mb-0">Purchase</p>
                                            </a></li>
                                        <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3 mt-75 mt-xl-0" href="" target="_blank"><i class="ft-book font-large-1 mr-0"></i>
                                                <p class="font-medium-2 mt-25 mb-0">GST</p>
                                            </a></li>
                                        <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0" href="" target="_blank"><i class="ft-layers font-large-1 mr-0"></i>
                                                <p class="font-medium-2 mt-25 mb-50">Item Master</p>
                                            </a></li>
                                        <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0" href="" target="_blank"><i class="ft-users font-large-1 mr-0"></i>
                                                <p class="font-medium-2 mt-25 mb-50">Customers</p>
                                            </a></li>
                                        <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0" href="" target="_blank"><i class="ft-user-plus font-large-1 mr-0"></i>
                                                <p class="font-medium-2 mt-25 mb-50">Suppliers</p>
                                            </a></li>
                                    </ul>
                                </li>
                              
                            </ul>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav float-right">
                      
                        <li style="display: none;" class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li style="display: none;" class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?=$path?>app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="<?=$path?>app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?=  base_url();?>/public/app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="<?=$path?>app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?=strtoupper($this->session->userdata('username'));?></span><span class="avatar avatar-online"><img src="<?=  base_url();?>/template1/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a class="dropdown-item" href="#">

                                <div ></div><a class="dropdown-item" href="<?php echo base_url(); ?>/Login/logout"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
    

    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li <?php if($activecls=='Dashboard') { ?> class="active"  <?php  } ?>><a href="<?php echo base_url(); ?>master/Dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard Hospital">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Professional">Professional</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Professional"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title" data-i18n="Appointment">Master</span></a>
                    <ul class="menu-content">
                        <li <?php if($activecls=='Profile') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Profile"><i></i><span>Profile</span></a>
                        </li>
                        <li <?php if($activecls=='Modeofpay') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Modeofpay"><i></i><span>Mode Of Pay</span></a>
                        </li>
                        <li <?php if($activecls=='Patient_title') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Patient_title"><i></i><span>Patient Title</span></a>
                        </li>
                        <li <?php if($activecls=='Category') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Category"><i></i><span>Patient Category</span></a>
                        </li>
                        <li <?php if($activecls=='Charge_type') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Charge_type"><i></i><span>Charge Type</span></a>
                        </li>
                        <li <?php if($activecls=='Insurance_company') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Insurance_company"><i></i><span>Insurance Company</span></a>
                        </li>
                        <li <?php if($activecls=='Department') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Department"><i></i><span>Department</span></a>
                        </li>
                        <li <?php if($activecls=='Investigation') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Investigation"><i></i><span>Investigation</span></a>
                        </li>
                        <li <?php if($activecls=='Ipdpanel') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Ipdpanel"><i></i><span>IPD Consultation Charge</span></a>
                        </li>
                        <li <?php if($activecls=='Opdpanel') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Opdpanel"><i></i><span>OPD Consultation Charge</span></a>
                        </li>
                        <li <?php if($activecls=='Laser') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Laser"><i></i><span>Laser</span></a>
                        </li>
                        <li <?php if($activecls=='Injection') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Injection"><i></i><span>Injection</span></a>
                        </li>
                        <li <?php if($activecls=='City') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/City"><i></i><span>City</span></a>
                        </li>
                        <li <?php if($activecls=='Appointment_type') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Appointment_type"><i></i><span>Appointment Type</span></a>
                        </li>
                        <li <?php if($activecls=='Referral_master') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Referral_master"><i></i><span>Referral Master</span></a>
                        </li>
                    </ul>
                </li>

                 <li class=" nav-item"><a href="#"><i class="la la-stethoscope"></i><span class="menu-title" data-i18n="Doctors">Doctors</span></a>
                    <ul class="menu-content">
                            <li <?php if($activecls=='Doctors_registration') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Doctors_registration"><i></i><span>Doctor Registration</span></a>
                        </li>
                    </ul>
                </li>

                  <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="Doctors">Patients</span></a>
                    <ul class="menu-content">
                            <li <?php if($activecls=='Patients_registration') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>master/Patients_registration"><i></i><span>Patients Registration</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="Doctors">Transaction</span></a>
                    <ul class="menu-content">
                            <li <?php if($activecls=='Billing') { ?> class="active"  <?php  } ?>><a class="menu-item" href="<?php echo base_url(); ?>transaction/Billing"><i></i><span>Billing</span></a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
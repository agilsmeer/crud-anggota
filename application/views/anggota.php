<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Koperasi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
    <br>
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Data Anggota
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Tambah Anggota</a></div>
                </h1>
            </div><br>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Nomor KTP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Foto</th>
                        <th>Alamat</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nomor KTP</label>
                            <div class="col-md-10">
                              <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" >
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-10">
                              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Foto</label>
                            <div class="col-md-10">
                              <input type="file" name="image_file" multiple="true" accept="image/*" id="image_file" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Alamat</label>
                            <div class="col-md-10">
                              <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nomor KTP</label>
                            <div class="col-md-10">
                              <input type="text" name="nik_edit" id="nik_edit" class="form-control" placeholder="NIK">
                              <input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                              <select name="jenis_kelamin_edit" id="jenis_kelamin_edit" class="form-control">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-10">
                              <input type="date" name="tanggal_lahir_edit" id="tanggal_lahir_edit" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Foto</label>
                            <div class="col-md-10">
                              <input type="file" name="image_file_edit" multiple="true" accept="image/*" id="image_file_edit" onchange="readURL(this);">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Alamat</label>
                            <div class="col-md-10">
                              <input type="text" name="alamat_edit" id="alamat_edit" class="form-control" placeholder="Alamat">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Edit</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Apakah anda yakin menghapus anggota ini?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Ya</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">

	$(document).ready(function(){
		show_anggota();	//call function show all anggota
		
		$('#mydata').dataTable();
		 
		//function show all anggota
		function show_anggota(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('anggota/data_anggota')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
                    const umur = birthDate => Math.floor((new Date() - new Date(birthDate).getTime()) / 3.15576e+10)
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                        '<td>'+data[i].nik+'</td>'+
		                        '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].jenis_kelamin+'</td>'+
                                '<td>'+data[i].tanggal_lahir+'</td>'+
                                '<td>'+umur(data[i].tanggal_lahir)+'</td>'+
                                '<td>'+data[i].image_file+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-nik="'+data[i].nik+'" data-nama="'+data[i].nama+'" data-jenis_kelamin="'+data[i].jenis_kelamin+'"  data-tanggal_lahir="'+data[i].tanggal_lahir+'" data-image_file="'+data[i].image_file+'" data-alamat="'+data[i].alamat+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save anggota
        $('#btn_save').on('click',function(){ 
            var id = $('#id').val();
            var nik = $('#nik').val();
            var nama = $('#nama').val();
            var jenis_kelamin = $('#jenis_kelamin').val();
            var tanggal_lahir = $('#tanggal_lahir').val();
            var image_file = $('#image_file').val();
            var alamat = $('#alamat').val();
            $.ajax({
                enctype: "multipart/form-data",
                type : "POST",
                url  : "<?php echo site_url('anggota/simpan')?>",
                dataType : "JSON",
                data : {id:id, nik:nik, nama:nama, jenis_kelamin:jenis_kelamin , tanggal_lahir:tanggal_lahir, image_file:image_file, alamat:alamat},
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="nik"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="jenis_kelamin"]').val("");
                    $('[name="tanggal_lahir"]').val("");
                    $('[name="image_file"]').html(data); 
                    $('[name="alamat"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_anggota();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var nik = $(this).data('nik');
            var nama = $(this).data('nama');
            var jenis_kelamin = $(this).data('jenis_kelamin');
            var tanggal_lahir = $(this).data('tanggal_lahir');
            var image_file = $(this).data('image_file');
            var alamat = $(this).data('alamat');
            
            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="nik_edit"]').val(nik);
            $('[name="nama_edit"]').val(nama);
            $('[name="jenis_kelamin_edit"]').val(jenis_kelamin);
            $('[name="tanggal_lahir_edit"]').val(tanggal_lahir);
            $('[name="image_file_edit"]').val(image_file);
            $('[name="alamat_edit"]').val(alamat);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var nik = $('#nik_edit').val();
            var nama = $('#nama_edit').val();
            var jenis_kelamin = $('#jenis_kelamin_edit').val();
            var tanggal_lahir = $('#tanggal_lahir_edit').val();
            var image_file = $('#image_file_edit').val();
            var alamat = $('#alamat_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('anggota/edit')?>",
                dataType : "JSON",
                data : {id:id, nik:nik, nama:nama, jenis_kelamin:jenis_kelamin , tanggal_lahir:tanggal_lahir, image_file:image_file, alamat:alamat},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="nik_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="jenis_kelamin_edit"]').val("");
                    $('[name="tanggal_lahir_edit"]').val("");
                    $('[name="image_file_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_anggota();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var id = $('#id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('anggota/hapus')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_anggota();
                }
            });
            return false;
        });

	});

</script>
</body>
</html>
<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/js-form.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#kode_barang").focus();

	$('#hapus').click(function(){
		$('#popup_hapus').css('display','block');
		$('#popup_hapus').show();
	});

	$('#close_hapus').click(function(){
		$('#popup_hapus').css('display','none');
		$('#popup_hapus').hide();
	});

	$('#batal_hapus').click(function(){
		$('#popup_hapus').css('display','none');
		$('#popup_hapus').hide();
	});

	$('#batal_ubah').click(function(){
		$('#popup_ubah').css('display','none');
		$('#popup_ubah').hide();
	});

	$("#tambah_barang").click(function(){
		$("#tambah_barang").fadeOut('slow');
		$("#table_barang").fadeOut('slow');
		$("#form_barang").fadeIn('slow');
	});

	$("#batal").click(function(){
		$("#tambah_barang").fadeIn('slow');
		$("#table_barang").fadeIn('slow');
		$("#form_barang").fadeOut('slow');
	});
});

function loading(){
	$('#popup_load').css('display','block');
	$('#popup_load').show();
}

function hapus_toas(){
	toastr.options = {
      "closeButton": true,
      "debug": false,
      "positionClass": "toast-bottom-right",
      "onclick": null,
      "showDuration": "5000",
      "hideDuration": "5000",
      "timeOut": "5000",
      "extendedTimeOut": "5000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr.success("Data Berhasil Dihapus!", "Terhapus");
}

function hapus_barang(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>barang_c/data_barang_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['nama_barang']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_data_barang(id)
{
		$('#popup_ubah').css('display','block');
		$('#popup_ubah').show();
	
		$.ajax({
			url : '<?php echo base_url(); ?>barang_c/data_barang_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_barang_modal').val(id);
				$('#kode_barang_modal').val(row['kode_barang']);
				$('#nama_barang_modal').val(row['nama_barang']);
			}
		});
}

function berhasil(){
	toastr.options = {
      "closeButton": true,
      "debug": false,
      "positionClass": "toast-bottom-right",
      "onclick": null,
      "showDuration": "5000",
      "hideDuration": "5000",
      "timeOut": "5000",
      "extendedTimeOut": "5000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr.success("Data Berhasil Disimpan!", "Berhasil");
}

function get_nama_satuan(){
	var a = $("#id_satuan :selected").text();
	$('#nama_satuan').val(a);
}

function get_nama_supplier(){
	var a = $("#id_supplier :selected").text();
	$('#nama_supplier').val(a);
}

function get_nama_kategori(){
	var a = $("#id_kategori :selected").text();
	$('#nama_kategori').val(a);
}

function tambah_data(){
	$("#tabel_data").hide(500);
	$("#tombol_tambah").hide(500);
	$("#data_input").show(500);
}

</script>

<div class="row" style="display: none;" id="data_input">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Form Input Barang</h3>
            <p class="text-muted m-b-30 font-13"> Input Data </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="<?php echo $url_simpan; ?>" method="post">
                    	
                    	<div class="form-group">
                            <label for="exampleInputEmail1">Kategori Barang</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <select name="kategori_barang" class="form-control" id="tipe_satuan">
									<option value="Panjang">Barang Jadi</option>
									<option value="Berat">Barang Setengah Jadi</option>
								</select>
                            </div>
                        </div>

                    	<div class="form-group">
                            <label for="exampleInputEmail1">Tipe Satuan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <select name="tipe_satuan" class="form-control" id="tipe_satuan">
									<option value="Panjang">Panjang</option>
									<option value="Berat">Berat</option>
									<option value="Volume">Volume</option>
									<option value="Luas">Luas</option>
								</select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputpwd1">Kode Barang</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Barang</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname">Nama Satuan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-tag"></i></div>
                                <select onchange="get_nama_satuan();" class="form-control select2" id="id_satuan" name="id_satuan" data-placeholder="Select..." required>
									
									<option value="">Tanpa Satuan</option>
									<?php 
										foreach ($lihat_satuan as $value){
									?>
										<option value="<?php echo $value->id_satuan; ?>"><?php echo $value->nama_satuan; ?></option>
									<?php	
										}
									?>
								</select>
								<input type="hidden" name="nama_satuan" id="nama_satuan">	
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Harga Jual</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" onkeyup="FormatCurrency(this);" class="form-control" id="harga_jual" name="harga_jual" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Harga Beli</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" onkeyup="FormatCurrency(this);" class="form-control" id="harga_beli" name="harga_beli" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname">Nama Supplier</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-tag"></i></div>
                                <select class="form-control select2" id="id_supplier" name="id_supplier" data-placeholder="Select..." onchange="get_nama_supplier();" required>
									
									<option value=""></option>
									<?php 
										foreach ($lihat_supplier as $value){
									?>
										<option value="<?php echo $value->id_supplier; ?>"><?php echo $value->nama_supplier; ?></option>
									<?php	
										}
									?>
								</select>
								<input type="hidden" name="nama_supplier" id="nama_supplier">	
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputuname">Kategori Barang</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-tag"></i></div>
                                <select class="form-control select2" id="id_kategori" name="id_kategori" data-placeholder="Select..." onchange="get_nama_kategori();" required>
									
									<option value=""></option>
									<?php 
										foreach ($lihat_kategori as $value){
									?>
										<option value="<?php echo $value->id_kategori; ?>"><?php echo $value->nama_kategori; ?></option>
									<?php	
										}
									?>
								</select>
								<input type="hidden" name="nama_kategori" id="nama_kategori">	
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Gambar Barang</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="file" class="form-control" id="userfiles" name="userfiles" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a href="<?php echo base_url(); ?>grub_kode_akuntansi_c"><button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Barang</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Data Barang</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
				<table id="myTable" class="table table-striped">
				<thead>
				<tr>
					<th style="text-align:center;"> No</th>
					<th style="text-align:center;"> Kode Barang</th>
					<th style="text-align:center;"> Nama Barang</th>
					<th style="text-align:center;"> Harga Jual</th>
					<th style="text-align:center;"> Harga Beli</th>
					<th style="text-align:center;"> Aksi </th>
				</tr>
				</thead>
				<tbody>
					<?php 
					$no = 0 ;
					foreach ($lihat_data as $value) {
						$no++;
					?>
				<tr>
					<td style="text-align:center; vertical-align:"><?php echo $no; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->kode_barang; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->nama_barang; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->harga_jual; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->harga_beli; ?></td>
					<td style="text-align:center; vertical-align: middle;">
						<a class="btn default btn-xs purple" id="ubah" onclick="ubah_data_barang(<?php echo $value->id_barang?>);"><i class="fa fa-edit"></i> Ubah </a>
						<a class="btn default btn-xs red" id="hapus" onclick="hapus_barang(<?php echo $value->id_barang?>);"><i class="fa fa-trash-o"></i> Hapus </a>
					</td>
				</tr>
					<?php 
						}
					?>
				</tbody>
				</table>
			</div>
				</div>
		</div>
	</div>
</div>



<script>
$(document).ready(function(){
	<?php
		if($this->session->flashdata('sukses')){
	?>
		berhasil();
	<?php 
		}elseif($this->session->flashdata('hapus')){
	?>
		hapus_toas();
	<?php
		}
	?>
});
</script>
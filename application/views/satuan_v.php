<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#kode_satuan").focus();

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

	$("#tambah_satuan").click(function(){
		$("#tambah_satuan").fadeOut('slow');
		$("#table_satuan").fadeOut('slow');
		$("#form_satuan").fadeIn('slow');
	});

	$("#batal").click(function(){
		$("#tambah_satuan").fadeIn('slow');
		$("#table_satuan").fadeIn('slow');
		$("#form_satuan").fadeOut('slow');
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

function hapus_satuan(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>satuan_c/data_satuan_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['nama_satuan']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_data_satuan(id)
{
		$('#popup_ubah').css('display','block');
		$('#popup_ubah').show();
	
		$.ajax({
			url : '<?php echo base_url(); ?>satuan_c/data_satuan_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_satuan_modal').val(id);
				$('#kode_satuan_modal').val(row['kode_satuan']);
				$('#nama_satuan_modal').val(row['nama_satuan']);
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

function tambah_data(){
	$("#tabel_data").hide(500);
	$("#tombol_tambah").hide(500);
	$("#data_input").show(500);
}

</script>
<div class="row" style="display: none;" id="data_input">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Form Input Satuan</h3>
            <p class="text-muted m-b-30 font-13"> Input Data </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="<?php echo $url_simpan; ?>" method="post">
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
                            <label for="exampleInputuname">Satuan Utama</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-tag"></i></div>
                                <select onchange="$('#kode_akun').val(this.value); $('#kode_akun').focus();" class="form-control select2" id="grup" name="satuan_utama" data-placeholder="Select..." required>
									
									<option value="">Baru</option>
									<?php foreach ($satuan_utama as $key => $value) {
										
									?>
									<option value="<?=$value->kode_satuan;?>"><?=$value->nama_satuan;?></option>
									<?php } ?>
								</select>	
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Kode Satuan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" class="form-control" id="kode_satuan" name="kode_satuan" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Satuan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" class="form-control" id="nama_satuan" name="nama_satuan" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Konversi</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" class="form-control" id="konversi" name="konversi" >
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



<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Satuan</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Data Satuan</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<table id="myTable" class="table table-striped">
					<thead>
					<tr>
						<th style="text-align:center;"> No</th>
						<th style="text-align:center;"> Kode Satuan</th>
						<th style="text-align:center;"> Nama Satuan</th>
						<th style="text-align:center;"> Konversi </th>
						<th style="text-align:center;"> Satuan Utama</th>
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
						<td style="text-align:center; vertical-align:"><?php echo $value->kode_satuan; ?></td>
						<td style="text-align:center; vertical-align:"><?php echo $value->nama_satuan; ?></td>
						<td style="text-align:center; vertical-align:"><?php echo $value->konversi; ?></td>
						<td style="text-align:center; vertical-align:"><?php echo $value->satuan_utama; ?></td>
						<td style="text-align:center; vertical-align: middle;">
							<button class="fcbtn btn btn-info btn-outline btn-1c "><span class="btn-label"><i class="fa fa-pencil"></i></span>Ubah</button>
							<button class="fcbtn btn btn-danger btn-outline btn-1c "><span class="btn-label"><i class="fa fa-trash-o"></i></span>Hapus</button>
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
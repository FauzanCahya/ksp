<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#kode_pelanggan").focus();

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

	$("#tambah_pelanggan").click(function(){
		$("#tambah_pelanggan").fadeOut('slow');
		$("#table_pelanggan").fadeOut('slow');
		$("#form_pelanggan").fadeIn('slow');
	});

	$("#batal").click(function(){
		$("#tambah_pelanggan").fadeIn('slow');
		$("#table_pelanggan").fadeIn('slow');
		$("#form_pelanggan").fadeOut('slow');
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

function hapus_pelanggan(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>pelanggan_c/data_pelanggan_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['nama_pelanggan']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_data_pelanggan(id)
{
		$('#popup_ubah').css('display','block');
		$('#popup_ubah').show();
	
		$.ajax({
			url : '<?php echo base_url(); ?>pelanggan_c/data_pelanggan_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_pelanggan_modal').val(id);
				$('#kode_pelanggan_modal').val(row['kode_pelanggan']);
				$('#nama_pelanggan_modal').val(row['nama_pelanggan']);
				$('#alamat_pelanggan_modal').val(row['alamat_pelanggan']);
				$('#telp_modal').val(row['telp']);
				$('#email_modal').val(row['email']);
				$('#npwp_modal').val(row['npwp']);
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
            <h3 class="box-title m-b-0">Form Input Pelanggan</h3>
            <p class="text-muted m-b-30 font-13"> Input Data </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="<?php echo $url_simpan; ?>" method="post">
                    	
                        <div class="form-group">
                            <label for="exampleInputpwd1">Kode Pelanggan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" class="form-control" id="kode_pelanggan" name="kode_pelanggan" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Pelanggan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Alamat Pelanggan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Telephone</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                <input type="text" class="form-control" id="telp" name="telp" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Email</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">NPWP</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-package"></i></div>
                                <input type="text" class="form-control" id="npwp" name="npwp" >
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

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Pelanggan</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Data Pelanggan</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<table id="myTable" class="table table-striped">
				<thead>
				<tr>
					<th style="text-align:center;"> No</th>
					<th style="text-align:center;"> Kode Pelanggan</th>
					<th style="text-align:center;"> Nama Pelanggan</th>
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
					<td style="text-align:center; vertical-align:"><?php echo $value->kode_pelanggan; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->nama_pelanggan; ?></td>
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
<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

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

	$("#tambah_grub_kode_akun").click(function(){
		$("#tabel_data").hide();
		$("#data_input").show();
	});

	$("#batal").click(function(){
		$("#form_grub_kode_akun").hide();
		$("#tambah_grub_kode_akun").show();
		$("#table_grub_kode_akun").show();
	});
});

function tambah_data(){
	$("#tabel_data").hide(500);
	$("#tombol_tambah").hide(500);
	$("#data_input").show(500);
}

function cancel_data(){
	$("#data_input").hide();
	$("#tabel_data").show(500);
	$("#tombol_tambah").show(500);
}

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

function hapus_grub_kode_akun(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>grub_kode_akuntansi_c/data_grub_kode_akun_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['NAMA_GRUP']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_data_grub_kode_akun(id)
{
		$('#popup_ubah').css('display','block');
		$('#popup_ubah').show();
	
		$.ajax({
			url : '<?php echo base_url(); ?>grub_kode_akuntansi_c/data_grub_kode_akun_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_kode_grub_modal').val(id);
				$('#grub_modal').val(row['GRUP']);
				$('#kode_grub_modal').val(row['KODE_GRUP']);
				$('#nama_grub_modal').val(row['NAMA_GRUP']);
				$('#unit_modal').val(row['UNIT']);
				$('#approve_modal').val(row['APPROVE']);
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

</script>



<div class="row" style="display: none;" id="data_input">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Form Input Grup Kode Akuntansi</h3>
            <p class="text-muted m-b-30 font-13"> Input Data </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="<?php echo $url_simpan; ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputuname">Tipe Akun</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-tag"></i></div>
                                <select class="form-control" name="grub" id="grub">
									<option value="Aktiva Lancar">Aktiva Lancar</option>
									<option value="Aktiva Tidak Lancar">Aktiva Tidak Lancar</option>
									<option value="Beban Usaha">Beban Usaha</option>
									<option value="Ekuitas">Ekuitas</option>
									<option value="Kewajiban Jangka Panjang">Kewajiban Jangka Panjang</option>
									<option value="Pendapatan / Beban Lain-lain">Pendapatan / Beban Lain-lain</option>
									<option value="Pendapatan Usaha">Pendapatan Usaha</option>
									<option value="Laba / Rugi Sebelum Pajak">Laba / Rugi Sebelum Pajak</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Group</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <input type="text" class="form-control" id="kode_grub" name="kode_grub" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Group</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <input type="text" class="form-control" id="nama_grub" name="nama_grub" >
                            </div>
                        </div>
                        <div class="form-group form-md-line-input" style="display: none;">
							<label class="col-md-2 control-label" for="form_control_1">Unit</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="unit" name="unit" value="1" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>
						<div class="form-group form-md-line-input" style="display: none;">
							<label class="col-md-2 control-label" for="form_control_1">Aprove</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="approve" name="approve" value="3" >
								<div class="form-control-focus">
								</div>
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

<button class="btn btn-success waves-effect waves-light" type="button" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Grup Kode Akun</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Data Kode Akun</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<table id="myTable" class="table table-striped">
							<thead>
							<tr>
								<th style="text-align:center;"> No</th>
								<th style="text-align:center;"> Tipe Akun</th>
								<th style="text-align:center;"> Kode Grup</th>
								<th style="text-align:center;"> Nama Grup</th>
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
								<td style="text-align:center; vertical-align:"><?php echo $value->GRUP; ?></td>
								<td style="text-align:center; vertical-align:"><?php echo $value->KODE_GRUP; ?></td>
								<td style="text-align:left; vertical-align:"><?php echo $value->NAMA_GRUP; ?></td>
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
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
            <h3 class="box-title m-b-0">Form Input Master Produksi</h3>
            <p class="text-muted m-b-30 font-13"> Input Data </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                    <form action="<?php echo $url_simpan; ?>" method="post">
                    	<div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">Kode</label>
                            <div class="col-3">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="kode" name="kode" >
	                                <div class="input-group-addon"><i class="ti-clipboard"></i></div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">Warna</label>
                            <div class="col-3">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="warna" name="warna" >
	                                <div class="input-group-addon"><i class="ti-palette"></i></div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">CT/PT</label>
                            <div class="col-2">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="ct_pt" name="ct_pt" >
	                                <div class="input-group-addon"><i class="ti-clipboard"></i></div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">Items</label>
                            <div class="col-6">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="nama_item" name="nama_item" >
	                                <div class="input-group-addon"><i class="ti-bag"></i></div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">Bahan HD</label>
                            <div class="col-2">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="bahan_hd" name="bahan_hd" >
	                                <div class="input-group-addon"><i class="ti-archive"></i></div>
	                            </div>
                            </div>
                        </div>
                       	<div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">Ukuran</label>
                            <div class="col-6">
                                <div class="input-group">
	                                <div class="input-group-addon">L</div>
	                                <input type="text" class="form-control" id="lebar" name="lebar" style="text-align: center;font-weight: bold;">
	                                 <div class="input-group-addon">Lip</div>
	                                <input type="text" class="form-control" id="lipatan" name="lipatan" style="text-align: center;font-weight: bold;">
	                                 <div class="input-group-addon">P</div>
	                                <input type="text" class="form-control" id="panjang" name="panjang" style="text-align: center;font-weight: bold;">
	                                 <div class="input-group-addon">T</div>
	                                <input type="text" class="form-control" id="tebal" name="tebal" style="text-align: center;font-weight: bold;">
                            	</div>
                        	</div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">BD</label>
                            <div class="col-2">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="bd" name="bd" >
	                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">QC Meter</label>
                            <div class="col-2">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="qc_meter" name="qc_meter" >
	                                <div class="input-group-addon">M</div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">Treat</label>
                            <div class="col-2">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="treat" name="treat" >
	                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">BS PROD</label>
                            <div class="col-1">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="bs_prod" name="bs_prod" >
	                                <div class="input-group-addon">%</div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">BS PRINTING</label>
                            <div class="col-1">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="bs_printing" name="bs_printing" >
	                                <div class="input-group-addon">%</div>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-1 col-form-label">BS POTONG</label>
                            <div class="col-1">
                                <div class="input-group">
	                                <input type="text" class="form-control" id="bs_potong" name="bs_potong" >
	                                <div class="input-group-addon">%</div>
	                            </div>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="simpan">Save</button>
                        <a href="<?php echo base_url(); ?>grub_kode_akuntansi_c"><button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button class="btn btn-success waves-effect waves-light" type="button" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Master Produksi</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Data Mass Produksi</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<table id="myTable" class="table table-striped">
							<thead>
							<tr>
								<th style="text-align:center;"> No</th>
								<th style="text-align:center;"> Kode</th>
								<th style="text-align:center;"> Warna</th>
								<th style="text-align:center;"> Items</th>
								<th style="text-align:center;"> Ukuran</th>
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
								<td style="text-align:center; vertical-align:"><?php echo $value->KODE; ?></td>
								<td style="text-align:center; vertical-align:"><?php echo $value->WARNA; ?></td>
								<td style="text-align:left; vertical-align:"><?php echo $value->NAMA_ITEM; ?></td>
								<td style="text-align:center; vertical-align:"><?php echo $value->LEBAR; ?> / <?php echo $value->LIPATAN; ?> x <?php echo $value->PANJANG; ?> x <?php echo $value->TEBAL; ?> x <?php echo $value->BD; ?></td>
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
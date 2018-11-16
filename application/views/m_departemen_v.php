<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#kode_depart").focus();

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

	$("#tambah_departemen").click(function(){
		$("#tambah_departemen").fadeOut('slow');
		$("#table_departemen").fadeOut('slow');
		$("#form_departemen").fadeIn('slow');
	});

	$('#batal').click(function(){
		$("#tambah_departemen").fadeIn('slow');
		$("#table_departemen").fadeIn('slow');
		$("#form_departemen").fadeOut('slow');
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

function hapus_depart(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>m_departemen_c/data_depart_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['nama_depart']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_data_depart(id)
{
		$('#popup_ubah').css('display','block');
		$('#popup_ubah').show();
	
		$.ajax({
			url : '<?php echo base_url(); ?>m_departemen_c/data_depart_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_depart_modal').val(id);
				$('#kode_depart_modal').val(row['kode_depart']);
				$('#nama_depart_modal').val(row['nama_depart']);
				$('#ass_nama_depart').val(row['ass_depart']);
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
            <h3 class="box-title m-b-0">Form Input Grup Kode Akuntansi</h3>
            <p class="text-muted m-b-30 font-13"> Input Data </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="<?php echo $url_simpan; ?>" method="post">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Departemen</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-home"></i></div>
                                <input type="text" class="form-control" id="kode_depart" name="kode_depart" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname">Nama Departemen</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-home"></i></div>
                                <select name="nama_depart" id="nama_depart" class="form-control">
									<option value="MNG_KEUANGAN">MNG_KEUANGAN</option>
									<option value="MNG_PLANT">MNG_PLANT</option>
									<option value="MNG_HRD_UMUM">MNG_HRD_UMUM</option>
								</select>	
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Akun</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-archive"></i></div>
                                <input type="text" class="form-control" id="ass_depart" name="ass_depart" >
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

<div class="row" id="form_departemen" style="display:none;">
	<div class="col-md-12">
		<!-- BEGIN SAMPLE FORM PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-green-haze">
					<i class="icon-settings font-green-haze"></i>
					<span class="caption-subject bold uppercase"> Form Departemen </span>
				</div>
				<div class="actions">
					<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
					<i class="icon-cloud-upload"></i>
					</a>
					<a class="btn btn-circle btn-icon-only green" href="javascript:;">
					<i class="icon-wrench"></i>
					</a>
					<a class="btn btn-circle btn-icon-only red" href="javascript:;">
					<i class="icon-trash"></i>
					</a>
					<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
					</a>
				</div>
			</div>
			<div class="portlet-body form">
				<form role="form" class="form-horizontal" method="post" action="<?php echo $url_simpan; ?>">
					<div class="form-body">
						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Kode Departemen</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kode_depart" name="kode_depart" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>
						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Nama Departemen</label>
							<div class="col-md-3">
								<select name="nama_depart" id="nama_depart" class="form-control">
									<option value="MNG_KEUANGAN">MNG_KEUANGAN</option>
									<option value="MNG_PLANT">MNG_PLANT</option>
									<option value="MNG_HRD_UMUM">MNG_HRD_UMUM</option>
								</select>
								<div class="form-control-focus">
								</div>
							</div>
						</div>
						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Asisten Departemen</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="ass_depart" name="ass_depart" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-2 col-md-10">
								<button type="submit" class="btn blue">Simpan</button>
								<button type="button" id="batal" class="btn red">Batal Dan Kembali</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Departemen</button>
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
					<th style="text-align:center;"> Kode Departemen</th>
					<th style="text-align:center;"> Nama Departemen</th>
					<th style="text-align:center;"> Nama Ass Departemen</th>
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
					<td style="text-align:center; vertical-align:"><?php echo $value->kode_depart; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->nama_depart; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->ass_depart; ?></td>
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
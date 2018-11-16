<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#kode_pegawai").focus();

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

	$("#tambah_pegawai").click(function(){
		$("#tambah_pegawai").fadeOut('slow');
		$("#table_pegawai").fadeOut('slow');
		$("#form_pegawai").fadeIn('slow');
	});

	$("#batal").click(function(){
		$("#tambah_pegawai").fadeIn('slow');
		$("#table_pegawai").fadeIn('slow');
		$("#form_pegawai").fadeOut('slow');
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

function hapus_pegawai(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>pegawai_c/data_pegawai_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['nama']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_data_pegawai(id)
{
		$('#table_pegawai').fadeOut('slow');
		$('#form_pegawai').fadeIn('slow');

		$.ajax({
			url : '<?php echo base_url(); ?>pegawai_c/data_pegawai_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_pegawai').val(id);
				$('#id_status').val(row['id_status']);
				$('#nik').val(row['nik']);
				$('#nama').val(row['nama']);
				$('#alamat').val(row['alamat']);
				$('#jenis_kelamin').val(row['jenis_kelamin']);
				$('#tempat_lahir').val(row['tempat_lahir']);
				$('#tanggal_lahir').val(row['tanggal_lahir']);
				$('#kota').val(row['kota']);
				$('#agama').val(row['agama']);
				$('#pendidikan').val(row['pendidikan']);
				$('#id_keluarga').val(row['id_status_keluarga']);
				$('#id_depart').val(row['id_depart']);
				$('#id_jabatan').val(row['id_jabatan']);
				$('#kode_gaji').val(row['kode_gaji']);
				$('#tgl_masuk').val(row['tgl_masuk']);
				$('#tgl_keluar').val(row['tgl_keluar']);
				$('#jamsostek').val(row['jamsostek']);
				$('#mutasi').val(row['mutasi']);
				$('#pengalaman_kerja').val(row['pengalaman_kerja']);
				$('#kursus').val(row['kursus']);
				$('#userfile').val(row['userfile']);
				$('#id_user').val(row['id_user']);
				$('#tipe_jadwal').val(row['tipe_jadwal']);
				$('#nama_bank').val(row['nama_bank']);
				$('#ket_depart').val(row['ket_depart']);
				$('#digaji').val(row['digaji']);
				$('#no_rekening').val(row['no_rekening']);
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
	$("#form_pegawai").show(500);
}

</script>

<div class="row" id="form_pegawai" style="display:none;">
	<div class="col-md-12">
		<!-- BEGIN SAMPLE FORM PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-green-haze">
					<i class="icon-settings font-green-haze"></i>
					<span class="caption-subject bold uppercase"> Form Pegawai </span>
				</div>
				
			</div>
			<div class="portlet-body form">
				<form role="form" class="form-horizontal" method="post" action="<?php echo $url_simpan; ?>" enctype="multipart/form-data">
					<div class="form-body">
						<input type="hidden" id="id_pegawai" name="id_pegawai">
						<div class="form-group">
							<label class="col-md-2 control-label" for="form_control_1">Status Pegawai</label>
							<div class="col-md-4">
								<select class="form-control input-large  input-sm" id="id_status" name="id_status" data-placeholder="Select...">
									<option value="aktiv">Aktif</option>
									<option value="tidak aktiv">Tidak Aktif</option>
								</select>	
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">NIK</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nik" name="nik" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>


						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Nama Pegawai</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nama" name="nama" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Alamat</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="alamat" name="alamat" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Jenis Kelamin</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Tempat Lahir</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Tanggal Lahir</label>
							<div class="col-md-3">
								<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">
									<input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" >
									<span class="input-group-btn">
									<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Kota</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="kota" name="kota" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Agama</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="agama" name="agama" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Pendidikan</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="pendidikan" name="pendidikan" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label" for="form_control_1">Status Keluarga</label>
							<div class="col-md-4">
								<select class="form-control input-large select2me input-sm" id="id_keluarga" name="id_keluarga" data-placeholder="Select..." id="nama_pegawai_tmp" name="nama_pegawai_tmp">
									<option value=""></option>
									<?php 
										foreach ($lihat_keluarga as $value){
									?>
										<option value="<?php echo $value->id_keluarga; ?>"><?php echo $value->status_keluarga; ?></option>
									<?php	
										}
									?>
								</select>	
							</div>
						</div>

							<div class="form-group">
							<label class="col-md-2 control-label" for="form_control_1">Departemen</label>
							<div class="col-md-4">
								<select class="form-control input-large select2me input-sm" id="id_depart" name="id_depart" data-placeholder="Select..." id="nama_pegawai_tmp" name="nama_pegawai_tmp">
									<option value=""></option>
									<?php 
										foreach ($lihat_departemen as $value){
									?>
										<option value="<?php echo $value->id_depart; ?>"><?php echo $value->nama_depart; ?></option>
									<?php	
										}
									?>
								</select>	
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label" for="form_control_1">Jabatan</label>
							<div class="col-md-4">
								<select class="form-control input-large select2me input-sm" id="id_jabatan" name="id_jabatan" data-placeholder="Select..." id="nama_pegawai_tmp" name="nama_pegawai_tmp">
									<option value=""></option>
									<?php 
										foreach ($lihat_jabatan as $value){
									?>
										<option value="<?php echo $value->id_jabatan; ?>"><?php echo $value->nama_jabatan; ?></option>
									<?php	
										}
									?>
								</select>	
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Kode Gaji</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="kode_gaji" name="kode_gaji" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Tanggal Masuk</label>
							<div class="col-md-3">
								<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">
									<input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" >
									<span class="input-group-btn">
									<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Tanggal Keluar</label>
							<div class="col-md-3">
								<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy">
									<input type="text" class="form-control" name="tgl_keluar" id="tgl_keluar" >
									<span class="input-group-btn">
									<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Jamsostek</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="jamsostek" name="jamsostek" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Mutasi</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="mutasi" name="mutasi" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Pengalaman Kerja</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Kursus</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="kursus" name="kursus" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group ">
							<label class="control-label col-md-2">Pilih Foto</label>
							<div class="col-md-9">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-preview thumbnail" style="width: 200px; height: 150px;">
									</div>
									<div>
										<span class="btn default btn-file">
										<span class="fileinput-new">
										Pilih Foto </span>
										<span class="fileinput-exists">
										Ganti </span>
										<input type="file" name="userfile" id="foto">
										</span>
										<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Hapus </a>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Tipe Jadwal</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="tipe_jadwal" name="tipe_jadwal" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Nama Bank</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nama_bank" name="nama_bank" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Ket Depart</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="ket_depart" name="ket_depart" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">Digaji</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="digaji" name="digaji" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>

						<div class="form-group form-md-line-input">
							<label class="col-md-2 control-label" for="form_control_1">No Rekening</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="no_rekening" name="no_rekening" >
								<div class="form-control-focus">
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-2 col-md-10">
								<button type="submit" class="btn btn-success">Simpan</button>
								<button type="button" id="batal" class="btn btn-danger">Batal Dan Kembali</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Pegawai</button>
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
					<th style="text-align:center;"> Nama</th>
					<th style="text-align:center;"> Alamat</th>
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
					<td style="text-align:center; vertical-align:"><?php echo $value->nama; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->alamat; ?></td>
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
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

	$("#tambah_kode_akun").click(function(){
		$("#tambah_kode_akun").hide();
		$("#table_kode_akun").hide();
		$("#form_kode_akun").show();
	});

	$("#batal").click(function(){
		$("#form_kode_akun").hide();
		$("#tambah_kode_akun").show();
		$("#table_kode_akun").show();
	});
});

function get_data_depart2(kode)
{
	// var kode = $('#nama_divisi_tmp').val();
	$.ajax({
		url: '<?php echo base_url(); ?>m_departemen_c/get_data_depart',
		type:'POST',
		dataType:'json',
		data:{kode:kode},
		async:false,
		success: function (res) {
			$("#nama_depart").val(res.nama_depart);
		}
	});
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

function hapus_divisi(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>kode_akuntansi_c/data_kode_akun_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['NAMA_AKUN']+'</b> ini ingin dihapus ?');
		}
	});
}

function ubah_kode_akun(id)
{
		$('#popup_ubah').css('display','block');
		$('#popup_ubah').show();
	
		$.ajax({
			url : '<?php echo base_url(); ?>kode_akuntansi_c/data_kode_akun_id',
			data : {id:id},
			type : "POST",
			dataType : "json",
			async : false,
			success : function(row){
				$('#id_akun_modal').val(id);
				$('#kode_akun_modal').val(row['KODE_AKUN']);
				$('#nama_akun_modal').val(row['NAMA_AKUN']);
				$('#tipe_modal').val(row['TIPE']);
				$('#grup_modal').val(row['KODE_GRUP']);

				$("#grup_modal").select2("destroy");

				$("#grup_modal").select2();
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
                            <label for="exampleInputuname">Group Kode Akun</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-tag"></i></div>
                                <select onchange="$('#kode_akun').val(this.value); $('#kode_akun').focus();" class="form-control select2" id="grup" name="grup" data-placeholder="Select..." required>
									<option value=""></option>
									<?php 
										foreach ($lihat_data_grup as $value){
									?>
										<option value="<?php echo $value->KODE_GRUP; ?>"><?php echo $value->KODE_GRUP; ?></option>
									<?php	
										}
									?>
								</select>	
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Akun</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <input type="text" class="form-control" id="kode_akun" name="kode_akun" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Akun</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <input type="text" class="form-control" id="nama_akun" name="nama_akun" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Nama Akun</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-bookmark-alt"></i></div>
                                <select class="form-control" name="tipe" id="tipe">
									<option value="D">Debet</option>
									<option value="K">Kredit</option>
								</select>
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

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Kode Akun</button>
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
								<th style="text-align:center;"> Grup Akun</th>
								<th style="text-align:center;"> Kode Akun</th>
								<th style="text-align:center;"> Nama Akun</th>
								<th style="text-align:center;"> Tipe</th>
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
								<td style="text-align:center; vertical-align:"><?php echo $value->KODE_GRUP; ?></td>
								<td style="text-align:center; vertical-align:"><?php echo $value->KODE_AKUN; ?></td>
								<td style="text-align:left; vertical-align:"><?php echo $value->NAMA_AKUN; ?></td>
								<td style="text-align:left; vertical-align:"><?php if($value->TIPE == "D"){ echo "Debet"; } else { echo "Kredit"; } ?></td>
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
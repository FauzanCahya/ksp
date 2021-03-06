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

	$('#id_hapus').val(id);
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

</script>


<a href="<?=base_url();?>jurnal_umum_c/add_new">
<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Jurnal Umum</button>
</a>
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
					<th style="text-align:center;"> No. Jurnal</th>
					<th style="text-align:center;"> Tgl Jurnal</th>
					<th style="text-align:center;"> Uraian</th>
					<th style="text-align:center;"> Nilai</th>
					<th style="text-align:center;"> User Input</th>
					<th style="text-align:center;"> Departemen</th>
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
					<td style="text-align:center; vertical-align:"><?php echo $value->NO_VOUCHER; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->TGL; ?></td>
					<td style="text-align:left; vertical-align:"><?php echo $value->KETERANGAN; ?></td>
					<td style="text-align:right; vertical-align:"><?php echo number_format($value->TOTAL); ?></td>
					<td style="text-align:left; vertical-align:"><?php echo $value->USER_INPUT; ?></td>
					<td style="text-align:left; vertical-align:"><?php echo $value->nama_divisi; ?></td>
					<td style="text-align:center; vertical-align: middle;">
						<a class="btn default btn-xs purple" id="ubah" href="<?=base_url();?>jurnal_umum_c/edit/<?=$value->ID;?>"><i class="fa fa-edit"></i> Ubah </a>
						<a class="btn default btn-xs red" id="hapus" onclick="hapus_divisi(<?php echo $value->ID?>);"><i class="fa fa-trash-o"></i> Hapus </a>
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
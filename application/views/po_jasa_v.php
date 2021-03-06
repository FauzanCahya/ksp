<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/js-form.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#no_spb").focus();

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

	$("#batal").click(function(){
		$('#kode_barang').val("");
		$('#nama_barang').val("");
		$("#kode_barang").focus();
		$('body,html').animate({
                scrollTop : 0 // Scroll to top of body
        }, 500);
	});

	$('#batal_ubah').click(function(){
		$('#popup_ubah').css('display','none');
		$('#popup_ubah').hide();
	});

	$("#tambah_permintaan_barang").click(function(){
		$("#tambah_permintaan_barang").fadeOut('slow');
		$("#table_permintaan_barang").fadeOut('slow');
		$("#form_permintaan_barang").fadeIn('slow');
		$("#tabel_total").fadeIn('slow');
	});

	$("#batal").click(function(){
		$("#tambah_permintaan_barang").fadeIn('slow');
		$("#table_permintaan_barang").fadeIn('slow');
		$("#form_permintaan_barang").fadeOut('slow');
		$("#tabel_total").fadeOut('slow');

		$("#no_spb").val('');
		$("#uraian").val('');
		$("#nama_produk_1").val('');
		$("#keterangan_1").val('');
		$("#kuantitas_1").val('');
		$("#satuan_1").val('');
		$("#harga_1").val('');
		$("#jumlah_1").val('');
		$("#subtotal_txt").val('');
	});
});

function hapus_permintaan(id)
{
	$('#popup_hapus').css('display','block');
	$('#popup_hapus').show();

		$.ajax({
		url : '<?php echo base_url(); ?>permintaan_barang_c/data_permintaan_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_hapus').val(id);
			$('#msg').html('Apakah <b>'+row['no_spb']+'</b> ini ingin dihapus ?');
		}
	});
}


function hapus_row_pertama()
{
	$('#nama_produk_1').val('');
	$('#id_produk_1').val('');
	$('#keterangan_1').val('');
	$('#kuantitas_1').val('');
	$('#satuan_1').val('');
	$('#harga_1').val('');
	$('#jumlah_1').val('');

	hitung_total_semua();
}

function ubah_data_permintaan(id)
{
	$("#tambah_permintaan_barang").fadeOut('slow');
	$("#table_permintaan_barang").fadeOut('slow');
	$("#form_permintaan_barang").fadeIn('slow');
	$("#tabel_total").fadeIn('slow');

	$.ajax({
		url : '<?php echo base_url(); ?>permintaan_barang_c/data_permintaan_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(row){
			$('#id_permintaan').val(id);
			$('#no_spb').val(row['no_spb']);
			$('#tanggal').val(row['tanggal']);
			$('#uraian').val(row['uraian']);

			ubah_detail(id);

		}
	});
}

function ubah_detail(id){
	$.ajax({
		url : '<?php echo base_url(); ?>permintaan_barang_c/data_permintaan_detail_id',
		data : {id:id},
		type : "POST",
		dataType : "json",
		async : false,
		success : function(result){
			var isi = '';
			var no = 0;
			$('#jml_tr').val(result.length);
			$.each(result,function(i,res){
                no++;
                isi += '<tr id="tr_'+no+'">'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="span12">'+
							'<div class="control-group">'+
								'<div class="controls">'+
									'<div class="input-append" style="width: 100%;">'+
										'<input value="'+res.nama_produk+'" readonly type="text" id="nama_produk_'+no+'" class="form-control"  name="nama_produk[]" required style="background:#FFF; width: 60%; font-size: 13px; float: left;">'+
										'<button onclick="show_pop_produk('+no+');" type="button" class="btn" style="width: 30%;">Cari</button>'+
										'<input type="hidden" id="id_produk_'+no+'" name="produk[]" readonly style="background:#FFF;" value="'+res.id_produk+'">'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input style="font-size: 10px; text-align:left;" type="text" class="form-control" value="'+res.keterangan+'" name="keterangan[]" id="keterangan_'+no+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input onkeyup="hitung_total('+no+');" style="font-size: 10px; text-align:center;" type="text" class="form-control" value="'+res.kuantitas+'" name="kuantitas[]" id="kuantitas_'+no+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input style="font-size: 10px; text-align:center;" type="text" class="form-control" value="'+res.satuan+'" name="satuan[]" id="satuan_'+no+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input style="font-size: 10px; text-align:right;" type="text" class="form-control" value="'+res.harga+'" name="harga[]" id="harga_'+no+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input style="font-size: 10px; text-align:right;" type="text" class="form-control" value="'+res.jumlah+'" name="jumlah[]" id="jumlah_'+no+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<button style="width: 100%;" onclick="hapus('+no+');" type="button" class="btn btn-danger"> Hapus </button>'+
						'</div>'+
					'</td>'+
				'</tr>';
            });

			$('#data_item').html(isi);
		}
	});

	hitung_total_semua();
}

function show_pop_produk(no){
	$('#popup_koang').remove();
	get_popup_produk();
    ajax_produk(no);
}

function get_popup_produk(){
    var base_url = '<?php echo base_url(); ?>';
    var $isi = '<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">'+
                                '<div class="modal-dialog modal-lg">'+
                                   '<div class="modal-content">'+
                                        '<div class="modal-header">'+
                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'+
                                            '<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>'+
                                        '</div>'+
                                        '<div class="modal-body">'+
                                            '<h4>Overflowing text to show scroll behavior</h4>'+
                                            '<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>'+
                   '<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>'+
                                        '</div>'+
                                        '<div class="modal-footer">'+
                                            '<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>'+
                                        '</div>'+
                                    '</div>'+
                                    
                                '</div>'+
                                
                            '</div>';
    $('body').append($isi);

    $('#pojok_koang').click(function(){
        $('#popup_koang').css('display','none');
        $('#popup_koang').hide();
    });

    $('#popup_koang').css('display','block');
    $('#popup_koang').show();
}

function ajax_produk(id_form){
    var keyword = $('#search_koang_pro').val();
    $.ajax({
        url : '<?php echo base_url(); ?>permintaan_barang_c/get_produk_popup',
        type : "POST",
        dataType : "json",
        data : {
            keyword : keyword,
        },
        success : function(result){
            var isine = '';
            var no = 0;
            var tipe_data = "";
            $.each(result,function(i,res){
                no++;

                isine += '<tr onclick="get_produk_detail(\'' +res.id_barang+ '\',\'' +id_form+ '\');" style="cursor:pointer;">'+
                            '<td text-align="center">'+no+'</td>'+
                            '<td text-align="center">'+res.kode_barang+'</td>'+
                            '<td text-align="left">'+res.nama_barang+'</td>'+
                            '<td text-align="left">'+res.stok+'</td>'+
                           
                        '</tr>';
            });

            if(result.length == 0){
            	isine = "<tr><td colspan='4' style='text-align:center'><b style='font-size: 15px;'> Data tidak tersedia </b></td></tr>";
            }

            $('#tes5 tbody').html(isine); 
            $('#search_koang_pro').off('keyup').keyup(function(){
                ajax_produk(id_form);
            });
        }
    });
}

function get_produk_detail(id, no_form){
	var id_produk = id;
    $.ajax({
		url : '<?php echo base_url(); ?>permintaan_barang_c/get_produk_detail',
		data : {id_barang:id},
		type : "GET",
		dataType : "json",
		success : function(result){
			$('#kuantitas_'+no_form).val('');
			$('#id_produk_'+no_form).val(result.id_barang);
			$('#nama_produk_'+no_form).val(result.nama_barang);
			$('#satuan_'+no_form).val(result.nama_satuan);
			$('#harga_'+no_form).val(NumberToMoney(result.harga_beli).split('.00').join(''));
			$('#jumlah_'+no_form).val(NumberToMoney(result.harga_beli*1).split('.00').join(''));

			$('#kuantitas_'+no_form).focus();

			// hitung_total(no_form);
			
			$('#search_koang_pro').val("");
		    $('#popup_koang').css('display','none');
		    $('#popup_koang').hide()
		}
	});
}

function tambah_data(){
	var jml_tr = $('#jml_tr').val();
	var i = parseFloat(jml_tr) + 1;

	var isi = 	'<tr id="tr_'+i+'">'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="span12">'+
							'<div class="control-group">'+
								'<div class="controls">'+
									'<div class="input-append" style="width: 100%;">'+
										'<input readonly type="text" id="nama_produk_'+i+'" class="form-control"  name="nama_produk[]" required style="background:#FFF; width: 60%; font-size: 13px; float: left;">'+
										'<button onclick="show_pop_produk('+i+');" type="button" class="btn" style="width: 30%;">Cari</button>'+
										'<input type="hidden" id="id_produk_'+i+'" name="produk[]" readonly style="background:#FFF;" value="0">'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input style="font-size: 10px; text-align:left;" type="text" class="form-control" value="" name="keterangan[]" id="keterangan_'+i+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input onkeyup="hitung_total('+i+');" style="font-size: 10px; text-align:center;" type="text" class="form-control" value="" name="kuantitas[]" id="kuantitas_'+i+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input style="font-size: 10px; text-align:center;" type="text" class="form-control" value="" name="satuan[]" id="satuan_'+i+'">'+
						'</div>'+
					'</td>'+
					// '<td align="center" style="vertical-align:middle;">'+
					// 	'<div class="controls">'+
					// 		'<input style="font-size: 10px; text-align:right;" type="text" class="form-control" value="" name="harga[]" id="harga_'+i+'">'+
					// 	'</div>'+
					// '</td>'+
					// '<td align="center" style="vertical-align:middle;">'+
					// 	'<div class="controls">'+
					// 		'<input style="font-size: 10px; text-align:right;" type="text" class="form-control" value="" name="jumlah[]" id="jumlah_'+i+'">'+
					// 	'</div>'+
					// '</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
						'</div>'+
					'</td>'+
				'</tr>';

	$('#data_item').append(isi);
	$('#jml_tr').val(i);

}

function hapus(i){
	$('#tr_'+i).remove();
}

function hitung_total(id){

	var kuantitas = $('#kuantitas_'+id).val();
	kuantitas = kuantitas.split(',').join('');

	if(kuantitas == ""){
		kuantitas = 0;
	}

	var harga = $('#harga_'+id).val();
	harga = harga.split(',').join('');

	if(harga == "" || harga== null){
		harga = 0;
	}

	var total = parseFloat(kuantitas) * parseFloat(harga);

	var pajak = 0;

	total = total + pajak;

	$('#jumlah_'+id).val(acc_format(total, "").split('.00').join('') );

	hitung_total_semua();
}

function hitung_total_semua(){
	var sum = 0;
	var pajak_prosen = 0
	$("input[name='jumlah[]']").each(function(idx, elm) {
		var tot = elm.value.split(',').join('');
		if(tot > 0){
    		sum += parseFloat(tot);
		}
    });

    $('#subtotal_txt').html('Rp. '+acc_format(sum, ""));
}

function acc_format(n, currency) {
	return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}

function simpan_add_produk(){
	var nama_produk = $('#nama_produk_add').val();
	var keterangan 	= $('#keterangan_add').val();
	var kuantitas   = $('#kuantitas').val();
	var satuan      = $('#satuan_add').val();
	var harga       = $('#harga_add').val();
	var jumlah      = $('#jumlah_add').val();

	if(nama_produk == ""){
		alert("Kode Produk Harus di isi.");
	} else if(keterangan == ""){
		alert("Nama Produk Harus di isi.");
	} else if(kuantitas == ""){
		alert("Satuan Produk Harus di isi.");
	} else if(satuan == ""){
		alert("Harga Produk Harus di isi.");
	}else if(harga == ""){
		alert("Harga Produk Harus di isi.");
	} else {
		$.ajax({
			url : '<?php echo base_url(); ?>permintaan_barang_c/simpan',
			data : {
				nama_produk:nama_produk,
				keterangan:keterangan,
				kuantitas:kuantitas,
				satuan:satuan,
				harga:harga,
				jumlah:jumlah,
			},
			type : "POST",
			dataType : "json",
		});
	}

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

function tambah_data_a(){
	$("#tabel_data").hide(500);
	$("#tombol_tambah").hide(500);
	$("#form_permintaan_barang").show(500);
	$("#tabel_total").show(500);
}

</script>

<style type="text/css">
	#data_item tr td input{
		font-size: 15px !important;
	}
</style>

<form role="form" action="<?php echo $url_simpan; ?>" method="post">
<input type="hidden" id="jml_tr" value="1">
<input type="hidden" id="id_permintaan" name="id_permintaan">

<div class="row" id="form_permintaan_barang" style="display: none;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Purchase Order Jasa</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-md-12">
								<div class="col-md-3">
									<label class="control-label"><b style="font-size:14px;">Tanggal</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="tanggal" id="tanggal" value="<?=date('d-m-Y');?>" readonly required>
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></span>
									</div>
								</div>

								<div class="col-md-6">
									<label class="control-label"><b style="font-size:14px;">Uraian</b></label>
									<div class="input-group" style="width: 100%; ">
										<input type="text" rows="1" id="uraian" name="uraian" class="form-control" required>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 15px; padding-bottom: 15px; margin-left:0px; margin-right:18px;">
							<div class="portlet-body flip-scroll col-md-12">
								<table class="table table-bordered table-striped table-condensed flip-content ">
									<thead class="flip-content">
										<tr>
											<th style="text-align: center;  width: 20%;">Produk / Item</th>
											<th style="text-align: center;  widows: 30%;">Keterangan</th>
											<th style="text-align: center; ">Kuantitas</th>
											<th style="text-align: center; ">Satuan</th>
											
											<th style="text-align: center; ">Aksi</th>
										</tr>
									</thead>
									<tbody id="data_item">
										<tr id="tr_1">
											<td align="center" style="vertical-align:middle;">
												<div class="span12">
													<div class="control-group">
														<div class="controls">
															
																<!-- <input readonly type="text" id="nama_produk_1" class="form-control"  name="nama_produk[]" required style="background:#FFF; width: 60%; font-size: 13px; float: left;">
																<button onclick="show_pop_produk(1);" type="button" class="btn" style="width: 30%;">Cari</button> -->
																<!-- <input type="hidden" id="id_produk_1" name="produk[]" readonly style="background:#FFF;"> -->


																<select class="form-control select2" id="grup" name="grup" data-placeholder="Select..." required>
																	<option value=""></option>

																	<?php 
																		$lihat_data_grup = $this->db->query("SELECT * FROM master_barang")->result();
																		foreach ($lihat_data_grup as $value){
																	?>
																		<option value="<?php echo $value->id_barang; ?>"><?php echo $value->nama_barang; ?></option>
																	<?php	
																		}
																	?>
																</select>
															
														</div>
													</div>
												</div>
											</td>
											<td align="center" style="vertical-align:middle;">
												<div class="controls">
													<input style="font-size: 10px; text-align:left;" type="text" class="form-control" value="" name="keterangan[]" id="keterangan_1">
												</div>
											</td>
											<td align="center" style="vertical-align:middle;">
												<div class="controls">
													<input onkeyup="hitung_total(1);" style="font-size: 10px; text-align:center;" type="text" class="form-control" value="" name="kuantitas[]" id="kuantitas_1">
												</div>
											</td>
											<td align="center" style="vertical-align:middle;">
												<div class="controls">
													<input style="font-size: 10px; text-align:center;" type="text" class="form-control" value="" name="satuan[]" id="satuan_1">
												</div>
											</td>
											
											<td align="center" style="vertical-align:middle;">
												<div class="controls">
													<button style="width: 100%;" onclick="hapus_row_pertama();" type="button" class="btn btn-danger"> Hapus </button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>

								<button type="button" onclick="tambah_data();" class="btn btn-warning"> Tambah Baris </button>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

<div class="row" id="tabel_total" style="display: none;">
    
    <div class="col-lg-12 col-md-12">
        <div class="well">
            <div class="row" style="padding-top: 15px;">
				<div class="col-md-12">
					<div class="col-md-3">
						<div style="margin-bottom: 15px;" class="span3">
							<h4 class="control-label" > Sub Total :</h4> 
						</div>
					</div>

					<div class="col-md-3">
						<div style="margin-bottom: 15px;" class="span4">
							<h4 id="subtotal_txt" class="control-label" > Rp. 0.00 </h4> 
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="padding-top: 35px; padding-bottom: 15px;">
				<div class="col-md-12">
					<div class="col-md-offset-2 col-md-10">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="button" id="batal" class="btn btn-danger" onclick="window.location = '<?php echo base_url(); ?>permintaan_barang_c'">Batal Dan Kembali</button>
					</div>
				</div>
			</div>
        </div>
    </div>
    
    <!-- /.col-lg-4 -->
</div>


</form>

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data_a();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Purchase</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Purchase Order Jasa</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
				<table id="myTable" class="table table-striped">
				<thead>
				<tr>
					<th style="text-align:center;"> No</th>
					<th style="text-align:center;"> No SPB</th>
					<th style="text-align:center;"> Uraian</th>
					<th style="text-align:center;"> Aksi </th>
				</tr>
				</thead>
				<tbody>
					<?php 
					$no = 0 ;
					foreach ($lihat_data as $value) {
						$no++;
					
				if($value->status == '1'){
				?>
				<tr style="background-color: #cccbce;">
				<?php	
				}else{
				?>
				<tr>
					<?php  } ?>
					<td style="text-align:center; vertical-align:"><?php echo $no; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->no_spb; ?></td>
					<td style="text-align:center; vertical-align:"><?php echo $value->uraian; ?></td>
					<td style="text-align:center; vertical-align: middle;">
						<button class="fcbtn btn btn-info btn-outline btn-1c "><span class="btn-label"><i class="fa fa-pencil"></i></span>Ubah</button>
						<button class="fcbtn btn btn-danger btn-outline btn-1c "><span class="btn-label"><i class="fa fa-trash-o"></i></span>Hapus</button>
						<button class="fcbtn btn btn-success btn-outline btn-1c "><span class="btn-label"><i class="fa fa-print"></i></span>Print</button>
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
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

function tb_bahan_baku(){
	var jml_tr = $('#jml_tr').val();
	var i = parseFloat(jml_tr) + 1;

	var isi = 	'<tr id="tr_'+i+'">'+
					'<td align="center" style="vertical-align:middle;">'+
						'<label>'+i+'</label>'+
					'</td>'+
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
							'<input onkeyup="hitung_total('+i+');" style="font-size: 10px; text-align:center;" type="text" class="form-control" value="" name="kuantitas[]" id="kuantitas_'+i+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input onkeyup="hitung_total('+i+');" style="font-size: 10px; text-align:center;" type="text" class="form-control" value="" name="kuantitas[]" id="kuantitas_'+i+'">'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<button style="width: 100%;" onclick="hapus('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
						'</div>'+
					'</td>'+
				'</tr>';

	$('#bahan_baku').append(isi);
	$('#jml_tr').val(i);

}

function hapus(i){
	$('#tr_'+i).remove();
	var jml_tr = $('#jml_tr').val();
	var i = parseFloat(jml_tr) - 1;
	$('#jml_tr').val(i);

}





function acc_format(n, currency) {
	return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
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

function ubah_uk_1(nama){
	$("#lb_1").html(nama);
	$("#lb_1_a").html(nama);
	$("#lb_1_b").html(nama);
}

function ubah_uk_2(nama){
	$("#lb_2").html(nama);
	$("#lb_2_a").html(nama);
	$("#lb_2_b").html(nama);
}

function ubah_uk_3(nama){
	$("#lb_3").html(nama);
	$("#lb_3_a").html(nama);
	$("#lb_3_b").html(nama);
}

function ubah_uk_4(nama){
	$("#lb_4").html(nama);
	$("#lb_4_a").html(nama);
	$("#lb_4_b").html(nama);
}

function ubah_uk_5(nama){
	$("#lb_5").html(nama);
	$("#lb_5_a").html(nama);
	$("#lb_5_b").html(nama);
}

</script>

<style type="text/css">
	#data_item tr td input{
		font-size: 15px !important;
	}
</style>

<form role="form" action="<?php echo $url_simpan; ?>" method="post">
<input type="hidden" id="jml_tr" value="0">
<input type="hidden" id="id_permintaan" name="id_permintaan">

<div class="row" id="form_permintaan_barang" style="display: none;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Perintah Kerja</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Ukuran Kecil</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="uk_1" id="uk_1" value="" onkeyup="ubah_uk_1(this.value);" required style="text-align: center;">
										<span class="input-group-btn"><button class="btn default" type="button">x</button></span>
										<input type="text" class="form-control" name="uk_2" id="uk_2" value="" onkeyup="ubah_uk_2(this.value);" required style="text-align: center;">
										<span class="input-group-btn"><button class="btn default" type="button">x</button></span>
										<input type="text" class="form-control" name="uk_3" id="uk_3" value="" onkeyup="ubah_uk_3(this.value);" required style="text-align: center;">
										<span class="input-group-btn"><button class="btn default" type="button">x</button></span>
										<input type="text" class="form-control" name="uk_4" id="uk_4" value="" onkeyup="ubah_uk_4(this.value);" required style="text-align: center;">
										<span class="input-group-btn"><button class="btn default" type="button">x</button></span>
										<input type="text" class="form-control" name="uk_5" id="uk_5" value="" onkeyup="ubah_uk_5(this.value);" required style="text-align: center;">
									</div>
								</div>
								<div class="col-md-4" >
									
								</div>
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Tanggal</b></label>
									<div class="input-group" style="width: 100%; ">
										<input type="text" class="form-control" name="tanggal" id="tanggal" value="<?=date('d-m-Y');?>" readonly required>
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></span>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Warna</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="warna" id="warna" value="" required>
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-drupal"></i></button></span>
									</div>
								</div>
								<div class="col-md-4" >
									
								</div>
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Isi</b></label>
									<div class="input-group" style="width: 100%; ">
										<input type="text" class="form-control" name="kuantitas" id="kuantitas" value="" required>
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-tachometer"></i></button></span>
										<select class="form-control" name="satuan">
											<option>Pilih Satuan</option>
											<option value="Bks">Bks</option>
										</select>
										<select class="form-control" name="satuan">
											<option>Pilih Master Satuan</option>
											<option value="Bks">Zak</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Uraian</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="uraian" id="uraian" value="" required>
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-qrcode"></i></button></span>
									</div>
								</div>
								<div class="col-md-4" >
									
								</div>
								<div class="col-md-4">
									
									<div class="input-group" style="width: 100%; ">
										<input type="text" class="form-control" name="kuantitas" id="kuantitas" value="" required>
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-tachometer"></i></button></span>
										<select class="form-control" name="satuan">
											<option>Pilih Satuan</option>
											<option value="Bks">Bks</option>
										</select>
										<select class="form-control" name="satuan">
											<option>Pilih Master Satuan</option>
											<option value="Bks">Zak</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 15px; padding-bottom: 15px; margin-left:0px; margin-right:18px;">
							<div class="portlet-body flip-scroll col-md-12">
								<table class="table table-bordered ">
									
									<tbody>
										<tr>
											<td style="width: 40%;border-bottom: none !important;">1.&nbsp;&nbsp;&nbsp;&nbsp;Ukuran Plastik <label id="lb_1"></label> / <label id="lb_2"></label> x <label id="lb_3"></label> x <label id="lb_4"></label> x bd <label id="lb_5"></label> = </td>
											<td style="width: 60%;" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;BERAT PERLEMBAR SEBELUM PLONG</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Standart</td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Naik + <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Turun - <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;">1,800</td>
											<td style="width: 20%;text-align: center;border-top: none;">1,854</td>
											<td style="width: 20%;text-align: center;border-top: none;">1,782</td>
										</tr>
										<tr>
											<td style="width: 40%;border-top: none !important;">&nbsp;&nbsp;&nbsp;&nbsp;Sering2 QC ditimbang 10 lembar dapat berat :</td>
											<td style="width: 20%;text-align: center;border-top: none;">18,00</td>
											<td style="width: 20%;text-align: center;border-top: none;">18,54</td>
											<td style="width: 20%;text-align: center;border-top: none;">17,82</td>
										</tr>


										<tr>
											<td style="width: 40%;border-bottom: none !important;">2.&nbsp;&nbsp;&nbsp;&nbsp;Ukuran Plastik <label id="lb_1_a"></label> / <label id="lb_2_a"></label> x <label id="lb_3_a"></label> x <label id="lb_4_a"></label> x bd <label id="lb_5_a"></label> = </td>
											<td style="width: 60%;" colspan="3"></td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"> &nbsp;&nbsp;&nbsp;&nbsp; Asumsi BS Plong +/- 10.17 % :</td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Standart</td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Naik + <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Turun - <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;">1,617</td>
											<td style="width: 20%;text-align: center;border-top: none;">1,665</td>
											<td style="width: 20%;text-align: center;border-top: none;">1,601</td>
										</tr>
										<tr>
											<td style="width: 40%;border-top: none !important;">Sering2 QC ditimbang 10 lembar dapat berat :</td>
											<td style="width: 20%;text-align: center;border-top: none;">16,17</td>
											<td style="width: 20%;text-align: center;border-top: none;">16,65</td>
											<td style="width: 20%;text-align: center;border-top: none;">16,01</td>
										</tr>


										<tr>
											<td style="width: 40%;border-bottom: none !important;">3.&nbsp;&nbsp;&nbsp;&nbsp;QC (Quality Control) Bagian Produksi</td>
											<td style="width: 60%;" colspan="3"></td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"> <label id="lb_1_b"></label> / <label id="lb_2_b"></label> x <input style="width: 10%;text-align: center;" type="text" name="form-control"> Mtr x <label id="lb_4_b"></label> x BD <label id="lb_5_b"></label> = </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Standart</td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Naik + <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Turun - <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;">1,617</td>
											<td style="width: 20%;text-align: center;border-top: none;">1,665</td>
											<td style="width: 20%;text-align: center;border-top: none;">1,601</td>
										</tr>

										<tr>
											<td style="width: 40%;border-bottom: none !important;">4.&nbsp;&nbsp;&nbsp;&nbsp;Pembungkus dengan PP Polos sederajat cetak 1 WARNA (SESUAI PERMINTAAN)</td>
											<td style="width: 60%;" colspan="3"></td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"> <input style="width: 10%;text-align: center;" type="text" name="bp_1"> x <input style="width: 10%;text-align: center;" type="text" name="bp_2"> x <input style="width: 10%;text-align: center;" type="text" name="bp_3"> x <input style="width: 10%;text-align: center;" type="text" name="bp_4"> . berat perlembar :  </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Standart</td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Naik + <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;">Turun - <input style="width: 30%;text-align: center;" type="text" name="form-control"> % </td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;">Laporkan ukuran kemasan setelah ukuran pas yang digunakan</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
											<td style="width: 20%;text-align: center;border-top: none;">gr</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;">Warna kemasan sesuaikan dengan proof yang telah disetujui</td>
											<td style="width: 20%;text-align: center;border-top: none;">2.21</td>
											<td style="width: 20%;text-align: center;border-top: none;">2.23</td>
											<td style="width: 20%;text-align: center;border-top: none;">2.19</td>
										</tr>

										<tr>
											<td style="width: 40%;border-bottom: none !important;" colspan="4">5.&nbsp;&nbsp;&nbsp;&nbsp;Berat per kali potong dgn settingan 24 ketuk x 2 lbr x 1 Susun = 48 lbr SETELAH PLONG berat</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"> </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;" colspan="3">Timbanglah dengan berat Bruto</td>
											
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;" colspan="3">Berat lebih/kurang mengurangi/menambah kresek 1 - 2 lbr</td>
											
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;">BERAT BRUTO = ISI KRESEK + 1 Lb KEMASAN</td>
											<td style="width: 20%;text-align: center;border-top: none;color: red;font-weight: bold;" colspan="3">74 gr/pack sampai 76fr/pack</td>
										</tr>


										<tr>
											<td style="width: 40%;border-bottom: none !important;" colspan="4">6.&nbsp;&nbsp;&nbsp;&nbsp;Berat BRUTTO per Zak isi 320 Bungkus + 70 gr berat zak, bila ditimbang ulang akan mendapatkan berat BRUTTO</td>
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"> </td>
											<td style="width: 20%;text-align: center;border-bottom: none !important;font-weight: bold;" colspan="3">BERAT BRUTTO ZAK MINIMAL S/D MAKSIMAL</td>
											
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;border-right: none;">Kg</td>
											<td style="width: 20%;text-align: center;border-top: none;border-right: none;border-left: none;"></td>
											<td style="width: 20%;text-align: center;border-top: none;border-left: none;">Kg</td>
											
										</tr>
										<tr>
											<td style="width: 40%;border-bottom: none !important;border-top: none !important;"></td>
											<td style="width: 20%;text-align: center;border-top: none;color: red;font-weight: bold;" colspan="3">24.3 Kg sampai 24.4 Kg per Zak</td>
										</tr>

										<tr>
											<td colspan="4" style="border-bottom: none;">7.&nbsp;&nbsp;&nbsp;&nbsp;Pisau Plong :</td>
										</tr>
										<tr>
											<td colspan="4" style="border-top: none;">Gunakan pisau plong <input style="width: 5%;text-align: center;font-weight: bold;" type="text" name="ps_plong"> cm , kedalaman Plong <input style="width: 5%;text-align: center;font-weight: bold;" type="text" name="kd_plong"> cm</td>
										</tr>

										<tr>
											<td colspan="4" style="font-weight: bold;">8.&nbsp;&nbsp;&nbsp;&nbsp;Penggunaan Bahan Baku :</td>
										</tr>

										<tr>
											<td colspan="4">
												<table class="table table-bordered">
													<thead>
														<tr>
															<td style="width: 10%;"></td>
															<td style="width: 40%;font-weight: bold;text-align: center;">Komposisi Bahan yang dipakai</td>
															<td style="width: 20%;font-weight: bold;text-align: center;">% dlm satuan</td>
															<td style="width: 20%;font-weight: bold;text-align: center;">Kg</td>
															<td style="width: 10%;font-weight: bold;text-align: center;"></td>
														</tr>

														<tbody id="bahan_baku">
															
														</tbody>

														<tr>
															<td colspan="5"><button type="button" class="btn btn-success" onclick="tb_bahan_baku();">Tambah Bahan Baku</button></td>
														</tr>
													</thead>
												</table>
											</td>
										</tr>
										
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


</form>

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data_a();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data Purchase</button>
</br>
</br>

<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Purchase Order Produksi</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
				<table id="myTable" class="table table-striped">
				<thead>
				<tr>
					<th style="text-align:center;"> No</th>
					<th style="text-align:center;"> No PK</th>
					<th style="text-align:center;"> Tanggal</th>
					<th style="text-align:center;"> Kuantitas</th>
					<th style="text-align:center;"> Aksi </th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td style="text-align: center;">1892</td>
						<td style="text-align: center;">04 - 10 - 2018</td>
						<td style="text-align: center;">320 Zak</td>
						<td style="text-align:center; vertical-align: middle;">
							<button class="fcbtn btn btn-info btn-outline btn-1c "><span class="btn-label"><i class="fa fa-pencil"></i></span>Ubah</button>
							<button class="fcbtn btn btn-danger btn-outline btn-1c "><span class="btn-label"><i class="fa fa-trash-o"></i></span>Hapus</button>
							<button class="fcbtn btn btn-success btn-outline btn-1c "><span class="btn-label"><i class="fa fa-print"></i></span>Print</button>
						</td>
					</tr>
					
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
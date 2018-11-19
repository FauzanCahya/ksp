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
										'<input type="text" id="nama_produk_'+i+'" class="form-control"  name="nama_produk[]" required style="background:#FFF; font-size: 23px; float: left;text-align:center;">'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</td>'+
					'<td align="center" style="vertical-align:middle;">'+
						'<div class="controls">'+
							'<input onkeyup="hitung_total('+i+');" style="font-size: 23px; text-align:center;" type="text" class="form-control" value="" name="kuantitas[]" id="kuantitas_'+i+'">'+
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

function hasil(nama){
	$("#hasil_roll").val(nama);
}

function hasil_bahan_baku(nama){

	var bs_awal = $('#bs').val();
	var susut_awal = $('#susut').val();

	var total =parseFloat( nama - bs_awal - susut_awal);



	$("#hasil_bahan").val(total);
}

function bs_fc(kali){

	var bs_awal = $('#bs').val();
	var susut_awal = $('#susut').val();
	var nama = $('#bahan_baku_awal').val();

	var total =parseFloat( nama - bs_awal - susut_awal);

	$("#hasil_bahan").val(total);

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
            <div class="panel-heading">Perintah Kerja Bungkus</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						

	                	

	                	<div class="row" >
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">NO PK</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="jenis" id="jenis" value="" required style="text-align: center;font-size: 23px;">
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-life-bouy"></i></button></span>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top:5px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Tgl PK</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="jenis" id="jenis" value="" required style="text-align: center;font-size: 23px;">
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-clock-o"></i></button></span>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top:5px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Merk</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="jenis" id="jenis" value="" required style="text-align: center;font-size: 23px;">
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-life-bouy"></i></button></span>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top:5px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Ukuran</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="jenis" id="jenis" value="" required style="text-align: center;font-size: 23px;">
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-life-bouy"></i></button></span>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top:5px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Warna</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="jenis" id="jenis" value="" required style="text-align: center;font-size: 23px;">
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-life-bouy"></i></button></span>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top:5px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<label class="control-label"><b style="font-size:14px;">Quantity</b></label>
									<div class="input-group" style="width: 100%;">
										<input type="text" class="form-control" name="jenis" id="jenis" value="" required style="text-align: center;font-size: 23px;">
										<span class="input-group-btn"><button class="btn default" type="button"><i class="fa fa-life-bouy"></i></button></span>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<hr>
							</div>
						</div>

						<div class="row" style="padding-top: 15px; padding-bottom: 15px; margin-left:0px; margin-right:18px;">
							<div class="portlet-body flip-scroll col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<td style="width: 10%;text-align: center;">No Roll</td>
											<td style="width: 26.6%;font-weight: bold;text-align: center;">Shift</td>
											<td style="width: 26.6%;font-weight: bold;text-align: center;">Hasil</td>
											<td style="width: 10%;font-weight: bold;text-align: center;"></td>
										</tr>

										<tbody id="bahan_baku">
											
										</tbody>

										<tr>
											<td colspan="5"><button type="button" class="btn btn-success" onclick="tb_bahan_baku();">Input Hasil</button></td>
										</tr>
									</thead>
								</table>
							</div>
						</div>

					</div>
				</div>
		</div>
	</div>
</div>


</form>

<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" onclick="tambah_data_a();" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Tambah Data PK Bungkus</button>
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
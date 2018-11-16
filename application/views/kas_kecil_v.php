
<a href="<?php echo base_url();?>pemasukan_kas_c/add_new">
<button class="btn btn-success waves-effect waves-light" type="button" id="tombol_tambah" id="tombol_tambah"><span class="btn-label"><i class="fa fa-plus-square"></i></span>Input Kas Kecil</button>
</a>
<br>
<br>


<div class="row" id="tabel_data">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Tabel Data Kode Akun</div>
	            <div class="panel-wrapper collapse in">
	                <div class="panel-body">
						<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th align="center"> No. KK </th>
							<th align="center"> Tanggal </th>
							<th align="center"> Untuk </th>
							<th align="center"> Nilai </th>
							<th align="center"> Status </th>
							<th align="center"> Aksi </th>
						</tr>						
					</thead>
					<tbody>
													
							<tr>								
								<td style="">  25/KK/2018 </td>
								<td style=""> 01-01-2018 </td>
								<td style=""> PT. Persada Raya </td>
								<td style="">5.000.000</td>
								<td style=""> 
									Terbayar
								</td>
								<td align="center">
									<button class="fcbtn btn btn-info btn-outline btn-1c "><span class="btn-label"><i class="fa fa-pencil"></i></span>Ubah</button>
									<button class="fcbtn btn btn-danger btn-outline btn-1c "><span class="btn-label"><i class="fa fa-trash-o"></i></span>Hapus</button>
								</td>
								
							</tr>
						
					</tbody>
				</table>
					</div>
				</div>
		</div>
	</div>
</div>




<script type="text/javascript">


function tambah_klik(){
	$('.opt_btn').hide();
	$('#view_data').hide();
	$('#add_data').fadeIn('slow');
}

function batal_klik(){
	$('#add_data').hide();
	$('.opt_btn').show();
	$('#view_data').fadeIn('slow');
}

function batal_edit_klik(){
	$('#edit_data').hide();
	$('#view_data').fadeIn('slow');
}

function hapus_klik(id){
	$('#dialog-btn').click(); 
	$('#id_hapus').val(id);
}
</script>
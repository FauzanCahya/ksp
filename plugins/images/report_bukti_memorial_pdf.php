<?PHP  
ob_start(); 
$base_url2 =  ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ?  "https" : "http");
$base_url2 .=  "://".$_SERVER['HTTP_HOST'];
$base_url2 .=  str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
?>
<style>
.gridth {
    background: #1793d1;
    vertical-align: middle;
    color : #FFF;
    text-align: center;
    height: 30px;
    font-size: 20px;
}
.gridtd {
    background: #FFFFF0;
    vertical-align: middle;
    font-size: 14px;
    height: 30px;
    padding-left: 5px;
    padding-right: 5px;
}
.grid {
    background: #FAEBD7;
    border-collapse: collapse;
}

.grid td, table th {
  border: 1px solid black;
}

.kolom_header{
    height: 20px;
}

.footer{
	position: absolute;
	bottom: 0;
}
</style>

<table style="width: 100%;border-collapse: collapse;">
	<tr>
		<td style="font-size: 12px; width: 50%;text-align: left;font-weight: bold;font-size: 16px;">PT PRIMA ELEKTRIK POWER</td>
		<td style="font-size: 12px; width: 28%;text-align: left;border-right: 1px solid black;"></td>
		<td style="font-size: 12px; width: 7%;text-align: left;border: 1px solid black;">Tipe</td>
		<td style="font-size: 12px; width: 15%;text-align: left;border: 1px solid black;">Bukti VII</td>
	</tr>
	<tr>
		<td style="font-size: 12px; width: 50%;text-align: left;">Sumangko Wringin Anom Gresik</td>
		<td style="font-size: 12px; width: 28%;text-align: left;border-right: 1px solid black;"></td>
		<td style="font-size: 12px; width: 7%;text-align: left;border: 1px solid black;">Tgl</td>
		<td style="font-size: 12px; width: 15%;text-align: left;border: 1px solid black;"><?=$dt->tanggal;?></td>
	</tr>
	<tr>
		<td style="font-size: 12px; width: 50%;text-align: left;">Jawa Timur - Indonesia</td>
		<td style="font-size: 12px; width: 28%;text-align: left;border-right: 1px solid black;"></td>
		<td style="font-size: 12px; width: 7%;text-align: left;border: 1px solid black;">No</td>
		<td style="font-size: 12px; width: 15%;text-align: left;border: 1px solid black;"><?php echo substr_replace($dt->no_bon, "", 6); ?></td>
	</tr>
</table>

<table align="center" style="margin-top: -10px;line-height: 0px;">
    <tr>
        <td align="center">
            <h4 style="text-decoration: underline;">
                BON PEMAKAIAN BARANG (BPB)
            </h4>
            <label><?=$dt->no_bon;?></label>
        </td>
    </tr>
</table>

<br>

<div style="width: 100%;padding-top: 5px;padding-bottom: 5px;padding-left:5px;border: 1px solid black;">
	<table style="width: 100%;">
		<tr>
			<td style="width: 50%;text-align:left;font-size: 13px;">DIVISI : <?=$dt->nama_divisi;?></td>
		</tr>
	</table>
</div>
<br>
<table style="width: 100%;height: 300px;">
	<tr>
		<th style="text-align: center; width: 5%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">No</th>
		<th style="text-align: center; width: 10%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">Kode Barang</th>
		<th style="text-align: center; width: 25%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">Nama Barang</th>
		<th style="text-align: center; width: 8%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">Jumlah</th>
		<th style="text-align: center; width: 8%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">Satuan</th>
		<th style="text-align: center; width: 20%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">Keterangan</th>
		<th style="text-align: center; width: 24%;padding: 5px 5px 5px 5px; border-top: 1px solid black; border-bottom: 1px solid black;border-right: none;border-left: none;">Reff No</th>
	</tr>
	
	<?php 
	$i = 0;
		foreach ($dt_det as $key => $value) {
			
			$i++;
	?>
	<tr>
		<td style="vertical-align: top; font-size: 11px; text-align: center;width: 5%;"><?php echo $i; ?></td>
		<td style="vertical-align: top; font-size: 11px; word-wrap: break-word; width: 10%;"><?=$value->kode_barang;?></td>
		<td style="vertical-align: top; font-size: 11px; word-wrap: break-word; width: 25%;"><?=$value->nama_produk;?></td>
		<td style="vertical-align: top; font-size: 11px; text-align: right; padding-right: 10px;width: 8%;"><?=$value->kuantitas;?></td>
		<td style="vertical-align: top; font-size: 11px;width: 8%;"><?=$value->satuan_barang;?></td>
		<td style="vertical-align: top; font-size: 11px; word-wrap: break-word; width: 20%;"><?=$value->keterangan;?></td>
		<td style="vertical-align: top; font-size: 11px; text-align: center;width: 24%;"><?=$value->reff_no;?></td>	
	</tr>
	<?php } ?>
</table>

<div class="footer">
	<table style="width: 100%;" align="center">
		<tr>
			<td style="width: 33%;text-align: center;">Menyetujui Gudang</td>
			<td style="width: 33%;text-align: center;">Yang Menyerahkan</td>
			<td style="width: 33%;text-align: center;">Yang Meminta</td>
		</tr>
		<tr>
			<td style="height: 50px;">&nbsp;</td>
			<td style="height: 50px;">&nbsp;</td>
			<td style="height: 50px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 33%;text-align: center;">(...................................)</td>
			<td style="width: 33%;text-align: center;">(...................................)</td>
			<td style="width: 33%;text-align: center;">(...................................)</td>
		</tr>
		<tr><td colspan="3">&nbsp;</td></tr>
		<tr>
			<td colspan="3" style="text-align: center;">
				Tembusan Kepada : 1.Accounting  2. Kabag yang Bersangkutan 3. Arsip 
			</td>
		</tr>
	</table>	
</div>

<?PHP
    $width_custom = 14;
    $height_custom = 8.50;
    
    $content = ob_get_clean();
    $width_in_inches = $width_custom;
    $height_in_inches = $height_custom;
    $width_in_mm = $width_in_inches * 21.4;
    $height_in_mm = $height_in_inches * 19.8;
    $html2pdf = new HTML2PDF('L','A5','en');
    $html2pdf->pdf->SetTitle('Bon Pemakain Barang');
    $html2pdf->WriteHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('Laporan Bon Pemakaian Barang.pdf');
?>
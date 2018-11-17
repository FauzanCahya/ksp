<script src="<?php echo base_url()?>js-devan/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

});

function klik_barang(id){
    $('#tutup_barang').click();
    var harga = id+'000';
    $tr =  '<tr>'+
            '    <td style="text-align: center; vertical-align:middle;">0000'+id+'</td>'+
            '    <td style="vertical-align:middle;">Barang '+id+'</td>'+
            '    <td style="text-align: right; vertical-align:middle;">'+NumberToMoney(harga)+'</td>'+
            '    <td align="center">'+
            '       <input class="form-control" type="text" name="qty[]" value="" style="width:125px;">'+
            '    </td>'+
            '    <td align="center">'+
            '       <button type="button" class="btn btn-danger waves-effect waves-light m-t-10" onclick="deleteRow(this);"><i class="fa fa-times"></i></button>'+
            '    </td>'+
            '</tr>';

    $('#tabel_tampung_barang tbody').append($tr);
}

function deleteRow(btn){
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}
</script>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Form Input Pesanan</h3>
            <p class="text-muted m-b-30 font-13"> &nbsp; </p>
            <form class="form" action="" method="post">
                <div class="form-group row">
                    <label for="tanggal" class="col-1 col-form-label">Tanggal</label>
                    <div class="col-3">
                        <div class="input-group">
                            <input type="text" class="form-control datepicker-autoclose" name="tanggal" id="tanggal" value="<?php echo date('d-m-Y'); ?>" readonly>
                            <span class="input-group-addon"><i class="icon-calender"></i></span> 
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_pesanan" class="col-1 col-form-label">Kode Pesanan</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="kode_pesanan" name="kode_pesanan" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="item" class="col-1 col-form-label">Item</label>
                    <div class="col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="item" value="" placeholder="Cari item..."  readonly>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#popup_barang">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-1 col-form-label">&nbsp;</label>
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table" id="tabel_tampung_barang">
                                <thead>
                                    <tr class="biru_popup">
                                        <th style="color: #fff; text-align: center;">Kode Barang</th>
                                        <th style="color: #fff; text-align: center;">Nama Barang</th>
                                        <th style="color: #fff; text-align: center;">Harga</th>
                                        <th style="color: #fff; text-align: center;">Qty</th>
                                        <th style="color: #fff; text-align: center;">#</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-1 col-form-label">Keterangan</label>
                    <div class="col-6">
                        <textarea rows="5" class="form-control" name="keterangan"></textarea>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="offset-sm-1 col-sm-11">
                        <button type="button" class="btn btn-info waves-effect waves-light m-t-10">Simpan</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-t-10">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="popup_barang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Barang</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="text" class="form-control" id="cari_barang" value="" placeholder="Cari...">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tabel_barang">
                                    <thead>
                                        <tr class="biru_popup">
                                            <th style="color: #fff; text-align: center;">No</th>
                                            <th style="color: #fff; text-align: center;">Kode Barang</th>
                                            <th style="color: #fff; text-align: center;">Nama Barang</th>
                                            <th style="color: #fff; text-align: center;">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 0;
                                        for($i=0; $i<10; $i++){
                                            $no++;
                                    ?>
                                        <tr style="cursor: pointer;" onclick="klik_barang(<?php echo $no; ?>);">
                                            <td style="text-align: center;"><?php echo $no; ?></td>
                                            <td style="text-align: center;">0000<?php echo $no; ?></td>
                                            <td>Barang <?php echo $no; ?></td>
                                            <td style="text-align: right;"><?php echo number_format($no.'000',0,',','.'); ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" id="tutup_barang" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
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
                            <table class="table">
                                <thead>
                                    <tr class="biru_popup">
                                        <th style="color: #fff; text-align: center;">No</th>
                                        <th style="color: #fff; text-align: center;">Tanggal</th>
                                        <th style="color: #fff; text-align: center;">Kode Pesanan</th>
                                        <th style="color: #fff; text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 0;
                                    for($i=0; $i<10; $i++){
                                        $no++;
                                ?>
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;"><?php echo $no; ?></td>
                                        <td style="text-align: center; vertical-align: middle;"><?php echo date('d-m-Y'); ?></td>
                                        <td style="vertical-align: middle;">PSN<?php echo $no; ?></td>
                                        <td align="center">
                                        	<button class="btn btn-success" type="button"><i class="fa fa-eye"></i></button>
                                        	<button class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
                                        	<button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i></button>
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
            </form>
        </div>
    </div>
</div>
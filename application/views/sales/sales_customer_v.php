<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
        	<!-- Nav tabs -->
            <ul class="nav customtab2 nav-tabs" role="tablist">
                <li role="presentation" class="nav-item"><a href="#home6" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Tabel Data</span></a></li>
                <li role="presentation" class="nav-item"><a href="#profile6" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Tambah Data</span></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="home6">
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
	                                            <th style="color: #fff; text-align: center;">Kode Customer</th>
	                                            <th style="color: #fff; text-align: center;">Nama Customer</th>
	                                            <th style="color: #fff; text-align: center;">Alamat</th>
	                                            <th style="color: #fff; text-align: center;">Telepon</th>
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
	                                            <td style="text-align: center; vertical-align: middle;">0000<?php echo $no; ?></td>
	                                            <td style="vertical-align: middle;">Customer <?php echo $no; ?></td>
	                                            <td style="vertical-align: middle;">Alamat <?php echo $no; ?></td>
	                                            <td style="text-align: center; vertical-align: middle;">Telepon <?php echo $no; ?></td>
	                                            <td align="center">
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
                <div role="tabpanel" class="tab-pane fade" id="profile6">
		            <form action="" method="post">
                    	<h3 class="box-title m-b-0">Form Input Customer</h3>
		            	<p class="text-muted m-b-30 font-13"> &nbsp; </p>
		                <div class="form-group row">
		                    <label for="kode_customer" class="col-1 col-form-label">Kode Customer</label>
		                    <div class="col-6">
		                        <input class="form-control" type="text" id="kode_customer" name="kode_customer" value="">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="nama" class="col-1 col-form-label">Nama Customer</label>
		                    <div class="col-6">
		                        <input class="form-control" type="text" id="nama" name="nama" value="">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="alamat" class="col-1 col-form-label">Alamat</label>
		                    <div class="col-6">
		                        <textarea rows="5" class="form-control" name="alamat"></textarea>
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="telepon" class="col-1 col-form-label">Telepon</label>
		                    <div class="col-6">
		                        <input class="form-control" type="text" id="telepon" name="telepon" value="">
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
    </div>
</div>
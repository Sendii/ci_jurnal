

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380" hidden></canvas>

    <h2>Tambah Produksi</h2>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            
							 <?= form_open('Produksi') ?>
							
                                <div class="form-group row">
                                    <label for="id_produksi" class="col-sm-2 col-form-label">ID Produksi</label> <br>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_produksi" name="id_produksi" value="<?= $id_produksi ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="waktu" class="col-sm-2 col-form-label">Tanggal</label> <br>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="waktu" name="waktu" value="<?= date('Y-m-d')?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_bahanbaku" class="col-sm-2 col-form-label">Nama Bahan Baku</label> <br>
                                    <div class="col-sm-8">
                                        <select name="nama_bahanbaku" id="nama_bahanbaku" class="form-control" required>
                                            <option value="">-</option>
                                            <?php foreach ($nama_bahanbaku as $key => $value) { ?>
                                            <option value="<?= $value->nama_bahanbaku?>"><?= $value->nama_bahanbaku?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
									
									<div class="form-group row">
                                    <label for="satuan_bb" class="col-sm-2 col-form-label">Satuan bahan baku</label> <br>
                                    <div class="col-sm-8">
                                        <select name="satuan_bb" id="satuan_bb" class="form-control" required>
                                            <option value="">-</option>
                                            <?php foreach ($satuan_bb as $key => $value) { ?>
                                            <option value="<?= $value->nama_bahanbaku?>"><?= $value->satuan_bb?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
									
									<div class="form-group row">
                                    <label for="qty_bb" class="col-sm-2 col-form-label">Quantity Bahan Baku</label> <br>
                                    <div class="col-sm-8">
                                        <select name="qty_bb" id="qty_bb" class="form-control" required>
                                            <option value="">-</option>
                                            <?php foreach ($qty_bb as $key => $value) { ?>
                                            <option value="<?= $value->qty_bb?>"><?= $value->nama_bahanbaku?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
									
									<div class="form-group row">
                                    <label for="harga_bb" class="col-sm-2 col-form-label">Haraga Bahan Baku</label> <br>
                                    <div class="col-sm-8">
                                        <select name="harga_bb" id="harga_bb" class="form-control" required>
                                            <option value="">-</option>
                                            <?php foreach ($harga_bb as $key => $value) { ?>
                                            <option value="<?= $value->harga_bb?>"><?= $value->harga_bb?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
									
								

								
                                <hr>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-info">Tambah</button>
                              
                                    
                                    </form>
                                <?php }?>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</main>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="<?= base_url('dashboard/dashboard.js') ?>"></script>
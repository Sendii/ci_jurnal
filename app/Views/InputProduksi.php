<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Biaya Produksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380" hidden></canvas>

      <?php
        if(isset($validation)){
          echo $validation->listErrors();
        }
      ?>
        <div class="row">
        <?= form_open('Produksi') ?>
                <div class="mb-3">
                    <label for="id_tc" class="form-label">ID</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('id_produksi') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('id_produksi')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="id_produksi" name="id_produksi" value="<?= set_value('id_produksi')?>" placeholder="Diisi dengan ID Produksi">
                </div>
				
				<div class="mb-3">
                    <label for="nama_bahanbaku" class="form-label">Nama Bahan Baku</label>
                    <select class="form-select" aria-label="Default select example" name="nama_karyawan">
                        <?php
                            foreach($bahanbaku as $row):
                              ?>
                                  <option value="<?=$row['nama_bahanbaku']?>"><?=$row['nama_bahanbaku']?></option>
                              <?php
                            endforeach;
                        ?>
                    </select>
                </div> 
				<div class="mb-3">
                    <label for="satuan" class="form-label">Harga Satuan Bahan Baku</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('satuan_bb') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('satuan_bb')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="satuan_bb" name="satuan_bb" value="<?= set_value('satuan_bb')?>" placeholder="Diisi dengan tanggal disetorkannya gaji">
                </div>
				<div class="mb-3">
                    <label for="qty_bb" class="form-label">Quantity Bahan Baku Utama</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('qty_bb') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('qty_bb')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="qty_bb" name="qty_bb" value="<?= set_value('qty_bb')?>" placeholder="Diisi dengan tanggal disetorkannya gaji">
                </div>
				<div class="mb-3">
                    <label for="harga_bb" class="form-label">Total Harga Bahan Baku</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('harga_bb') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('harga_bb')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="harga_bb" name="harga_bb" value="<?= set_value('harga_bb')?>" placeholder="Diisi dengan tanggal disetorkannya gaji">
                </div>
				
				 <div class="mb-3">
                    <label for="nama_bop" class="form-label">Nama Biaya Overhead Pabrik</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('nama_bop') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('nama_bop')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="nama_bop" name="nama_bop" value="<?= set_value('nama_bop')?>" placeholder="Diisi dengan tanggal disetorkannya gaji">
                </div>
				
				 <div class="mb-3">
                    <label for="laba" class="form-label">Laba yang diinginkan</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('laba') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('laba')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="laba" name="laba" value="<?= set_value('laba')?>" placeholder="Diisi dengan tanggal disetorkannya gaji">
                </div>
				 <div class="mb-3">
                    <label for="targetcost" class="form-label">Target Costing</label>
                    <?php
                        if(isset($validation)){
                            //untuk mengecek apakah ada error pada elemen field namakosan
                            if ( $validation->hasError('targetcost') )
                            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error: <?=$validation->getError('targetcost')?> </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            <?php
                            }
                        }
                    ?>
                    <input type="text" class="form-control" id="targetcost" name="targetcost" value="<?= set_value('targetcost')?>" placeholder="Diisi dengan tanggal disetorkannya gaji">
                </div>
                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

     
    </main>
  </div>
</div>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="<?= base_url('dashboard/dashboard.js') ?>"></script>
  
    <script>
		$(document).ready(function(){
			// Format mata uang.
			$('#besar').mask('0,000,000,000,000,000,000,000', {reverse: true});			
			
		})
	 </script> 
	 
	 <script>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	 <script type="text/javascript">
	 $(document).ready(function(){
		 $("#hargajual, #laba").keyup(function(){
			 var hargajual = $("#hargajual").val();
			 var laba      = $("#laba").val();
			 
			 var targetcost =( parseInt(hargajual)-(parseInt(hargajual) * parseInt(laba)/100));
			 $("#targetcost").val(targetcost);
		 });
	 });
	 </script>
	
	 </script>
      


  </body>
</html>


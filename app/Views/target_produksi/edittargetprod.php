<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Bahan Baku</h1>
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

      <?php
        if(isset($validation)){
          echo $validation->listErrors();
        }

        //dapatkan data dari database untuk tabel form_input
        foreach($target_produksi as $row):
            $id_target  = $row->id_target;
            $nama_produk = $row->nama_produk;
            $target_produksi  = $row->target_prduksi;
            $periode_target     = $row->periode_target;


        endforeach;
      ?>
        <div class="row">
        <?= form_open_multipart('target_produksi/edittargetproses') ?>
            <input type="hidden" id="id_target" name="id_target" value="<?= $id_target?>">
            
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <?php
                        //jika set value nama_suplier tidak kosong maka isi $nama_suplier diganti dengan isian dari user
                        if(strlen(set_value('nama_produk'))>0){
                          $nama_produk = set_value('nama_produk');
                        }
                
                    ?>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $nama_produk?>" placeholder="Diisi dengan nama produk">
                </div>

                <div class="mb-3">
                    <label for="target_produksi" class="form-label">Target Produksi</label>
                    <?php
                        //jika set value nama_cv tidak kosong maka isi $nama_cv diganti dengan isian dari user
                        if(strlen(set_value('target_produksi'))>0){
                          $satuan_bb = set_value('target_produksi');
                        }
                
                    ?>
                    <input type="text" class="form-control" id="target_produksi" name="target_produksi" value="<?= $target_produksi?>" placeholder="Diisi dengan target produksi">
                </div>

                <div class="mb-3">
                    <label for="periode_target" class="form-label">QTY </label>
                    <?php
                        //jika set value alamat_supplier tidak kosong maka isi $alamat_supplier diganti dengan isian dari user
                        if(strlen(set_value('periode_target'))>0){
                          $qty_bb = set_value('periode_target');
                        }
                
                    ?>
                    <input type="date" class="form-control" id="periode_target" name="periode_target" value="<?= $periode_target?>" placeholder="Diisi dengan periode target">
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
  </body>
</html>

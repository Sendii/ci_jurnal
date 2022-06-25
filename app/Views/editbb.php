
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Form Bahan Baku</h1>
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
        foreach($bahanbaku as $row):
            $id             = $row->id;
            $kode_bb    = $row->kode_bb;
            $nama_bb    = $row->nama_bb;
            $harga_bb   = $row->harga_bb;
           
        endforeach;
      ?>
        <div class="row">
        <?= form_open_multipart('bahanbaku/editbbproses') ?>
            <input type="hidden" id="id" name="id" value="<?= $id?>">
            <div class="mb-3">
                    <label for="kode_bb" class="form-label">Kode Bahan Baku</label>
                    <?php
                        //jika set value kode_produk tidak kosong maka isi $kode_produk diganti dengan isian dari user
                        if(strlen(set_value('kode_bb'))>0){
                          $kode_bb = set_value('kode_bb');
                        }
                    ?>
                    <input type="text" class="form-control" id="kode_bb" name="kode_bb" value="<?= $kode_bb?>" >
                </div>
                <div class="mb-3">
                    <label for="nama_bb" class="form-label">Nama Bahan Baku</label>
                    <?php
                        //jika set value nama_produk tidak kosong maka isi $kode_produk diganti dengan isian dari user
                        if(strlen(set_value('nama_bb'))>0){
                          $kode_bb = set_value('nama_bb');
                        }
                    ?>
                    <input type="text" class="form-control" id="nama_bb" name="nama_bb" value="<?=$nama_bb?>" >
                </div>
                <div class="mb-3">
                    <label for="harga_bb" class="form-label"> Harga Bahan Baku</label>
                    <?php
                        //jika set value kode_kategori tidak kosong maka isi $kode_produk diganti dengan isian dari user
                        if(strlen(set_value('harga_bb'))>0){
                          $kode_bb = set_value('harga_bb');
                        }
                    ?>
                     <input type="text" class="form-control" id="harga_bb" name="harga_bb" value="<?=$harga_bb?>" >
                    </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
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

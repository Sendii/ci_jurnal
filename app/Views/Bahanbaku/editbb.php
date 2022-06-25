
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Form Produk</h1>
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
        foreach($aset as $row):
            $id             = $row->id;
            $kode_aset    = $row->kode_aset;
            $nama_aset    = $row->nama_aset;
            $jenis_aset          = $row->jenis_aset;
           
        endforeach;
      ?>
        <div class="row">
        <?= form_open_multipart('aset/editasetproses') ?>
            <input type="hidden" id="id" name="id" value="<?= $id?>">
            <div class="mb-3">
                    <label for="kode_aset" class="form-label">Kode Aset</label>
                    <?php
                        //jika set value kode_produk tidak kosong maka isi $kode_produk diganti dengan isian dari user
                        if(strlen(set_value('kode_aset'))>0){
                          $kode_aset = set_value('kode_aset');
                        }
                    ?>
                    <input type="text" class="form-control" id="kode_aset" name="kode_aset" value="<?= $kode_aset?>" >
                </div>
                <div class="mb-3">
                    <label for="nama_aset" class="form-label">Nama Aset</label>
                    <?php
                        //jika set value nama_produk tidak kosong maka isi $kode_produk diganti dengan isian dari user
                        if(strlen(set_value('nama_aset'))>0){
                          $kode_aset = set_value('nama_aset');
                        }
                    ?>
                    <input type="text" class="form-control" id="nama_aset" name="nama_aset" value="<?=$nama_aset?>" >
                </div>
                <div class="mb-3">
                    <label for="jenis_aset" class="form-label">jenis_aset</label>
                    <?php
                        //jika set value kode_kategori tidak kosong maka isi $kode_produk diganti dengan isian dari user
                        if(strlen(set_value('jenis_aset'))>0){
                          $kode_aset = set_value('jenis_aset');
                        }
                    ?>
                     <input type="text" class="form-control" id="jenis_aset" name="jenis_aset" value="<?=$jenis_aset?>" >
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

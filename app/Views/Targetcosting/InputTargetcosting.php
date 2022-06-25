<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Target Costing</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= site_url('home') ?>">Home</a></li>
          <li class="breadcrumb-item active">Tambah Target Costing</li>
      </ol>
  </div>
</div>
</section>
<div class="container-fluid">
  <div class="card card-info shadow mb-4">
    <div class="card-header py-3">
      <h6 class=" card-title font-weight-bold">Target Costing</h6>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
      </button>
  </div>
</div>
<div class="card-body">
   <form action="<?= base_url('Targetcosting/index')?>" method="post">
    <div class="mb-3">
        <label for="id_tc" class="form-label">ID Targetcosting</label>
        <input type="text" class="form-control" id="id_tc" name="id_tc" value="<?= isset
        ($_SESSION['id_tc']) ? $_SESSION['id_tc'] : '';?>" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <select class="form-select" name="produksi_id" required>
            <option value="">Pilih Nama Produk</option>
            <?php foreach($produk as $row): ?>
                <option value="<?=$row->id_produksi?>"><?=$row->produk?></option>
            <?php endforeach; ?>  
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Harga Produk</label>
        <span style="color: red;display: block;font-size: 15px;margin-top: -10px;">*terisi otomatis ketika memilih produk</span>
        <input type="text" class="form-control" name="harga_produk" readonly placeholder="Harga Produk">
    </div>
    <div class="mb-3">
        <label for="hargajual">Harga Jual yang Diperkirakan</label>
        <?php
        if(isset($validation)){
         //untuk mengecek apakah ada error pada elemen field namakosan
            if ( $validation->hasError('hargajual') )
            { //untuk mendapatkan label error yang diset bisa menggunakan getError(namfield)
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error: <?=$validation->getError('hargajual')?> </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
        }
        ?>
        <input type="text" class="form-control" id="hargajual" name="hargajual" value="<?= set_value('hargajual')?>" placeholder="Diisi dengan perkiraan harga jual">
    </div>

    <div class="mb-3">
        <label for="laba">Laba yang diinginkan (%)</label>
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
                        <input type="number" class="form-control" id="laba" name="laba" value="<?= set_value('laba')?>" placeholder="Diisi dengan kisaran laba yang diinginkan" min="1" max="100">
                    </div>
                    <div class="mb-3">
                        <label for="targetcost">Target Costing</label>
                        <span style="color: red;display: block;font-size: 15px;margin-top: -10px;">*terisi otomatis ketika sudah mengisi harga jual dan laba. </span>
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
                        <input type="text" class="form-control" id="targetcost" name="targetcost" value="<?= set_value('targetcost')?>" placeholder="Diisi dengan Target Costing" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-secondary btn-sm" href="<?=site_url('Targetcosting/ListTargetcosting')?>" role="button"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button class="btn btn-sm btn-success" type="submit" ><i class="fas fa-paper-plane"></i> Simpan</button>
                </div>
            </div>
        </div>



    </div>
</form>
<script>
    $(document).ready(function() {
        $('body').on('change', '[name="produksi_id"]', function() {
            let val = $(this).find(':selected').val()
            console.log(val)
            $.ajax({
                type: 'POST',
                url: '/Targetcosting/index',
                data: {
                    produksi_id: val
                },
                beforeSend: function() {

                },
                success: function(data) {
                    let produksi = JSON.parse(data)[0]
                    console.log(produksi)
                    $('[name=harga_produk]').val(produksi.total_harga)
                },
                error: function(data) {
                    console.log(data)
                }
            });
        })
    })
    
</script>
<?= $this->endSection() ?>


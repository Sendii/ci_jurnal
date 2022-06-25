<?=$this->extend('layout/default')?>
<!-- Content Wrapper. Contains page content -->

<?= $this->section('content')?>
<title>Home || Puri Utami</title>
<?$this->endSection()?>

<?= $this->section('content')?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Laporan</a></li>
          <li class="breadcrumb-item active">Harga Pokok Produk</li>
        </ol>
      </div><!-- /.col -->
      <div class="col-sm-12">
        <h1 class="m-0 text-center">Harga Pokok Produk</h1>
        <?php if (isset($_GET['year']) && isset($_GET['month']) ): ?>
        <h5 class="text-center"><?= 'Periode bulan '. bulanIndo($_GET['month']).' tahun '.$_GET['year'] ?></h5>
      <?php endif ?>

    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="row">
        <div class="col-12">
          <?php if (!isset($_GET['year']) && !isset($_GET['month']) ): ?>
          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">COA</h3> -->


              <div class="col">
                <form action="<?= base_url('harga_pokok_produk')?>" method="get">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <select name="year" class="form-control">
                      <option value="">Pilih Tahun</option>
                      <?php 
                      foreach ($year as $y) { ?>
                        <option value="<?= $y ?>" <?= isset($_GET['year']) && $y == $_GET['year'] ? "selected" : "" ?> ><?= $y ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bulan</label>
                    <select name="month" class="form-control">
                      <option value="">Pilih Bulan</option>
                      <?php 
                      foreach ($month as $key => $v) { ?>
                        <option value="<?= $key ?>" <?= isset($_GET['month']) && $key == $_GET['month'] ? "selected" : "" ?>><?= $v ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Cari</button>
                </form>


              </div>
            </div> 



          </div>
        <?php endif ?>
        <!-- /.card-header -->
        <?php if (isset($_GET['year']) && isset($_GET['month']) ): ?>
        <div class="card">
          <div class="card-body">
            <button class="btn btn-primary btn-sm my-2" id="btnLaporan">Print Laporan</button>
            <div class="row mb-3">
              <div class="col-md-12">
                <h5>Biaya Bahan Baku : 
                  <span class="float-right"><?= rupiah($bb->total_bb) ?></span>
                </h5>
                <h5>Biaya Tenaga Kerja : 
                  <span class="float-right"><?= rupiah($bop->total_bop) ?></span>
                </h5>
                <h5>Biaya Overhead Tetap : 
                  <span class="float-right"><?= rupiah($btkl->total_btkl) ?></span>
                </h5>
              </div>
              
            </div>
            <div style="background-color: #f5f5f5;">
              <h5>Harga Pokok Produksi : <span class="float-right"><b><?= rupiah($total_biaya) ?></b></span></h5>
            </div>
          </div>
        </div>
      <?php endif ?>




      <!-- /col -->
    </div>
    <!-- /col -->
  </section>
  <?=$this->endSection()?>
  <?=$this->Section('script')?>
  <script>
    $('#btnLaporan').click(function(){
      $(this).hide()
      window.print()
    })      
    window.addEventListener('afterprint', (event) => {
      $('#btnLaporan').show()
    });
  </script>
  <?=$this->endSection()?>
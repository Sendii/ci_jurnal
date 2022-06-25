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
          <li class="breadcrumb-item active">Jurnal Umum</li>
        </ol>
      </div><!-- /.col -->
      <div class="col-sm-12">
        <h1 class="m-0 text-center">Jurnal Umum</h1>
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
                <form action="<?= base_url('jurnalumum')?>" method="get">
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
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Transaksi</th>
                  <th>Tanggal</th>
                  <th>Reff</th>
                  <th>Debit</th>
                  <th>Kredit</th>
                </tr>
              </thead>
              <tbody id="data-tables">

                <?php 
                $no = 1;
                $totalDebit = 0;
                $totalKredit = 0;
                foreach ($list as $key => $value) { ?>
                  <?php
                  if ($value->posisi_d_c == 'd') {
                    $totalDebit += $value->nominal;
                  }
                  if ($value->posisi_d_c == 'k') {
                    $totalKredit += $value->nominal;
                  }
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->posisi_d_c == 'k' ? str_repeat('&nbsp;', 10).$value->nama_akun : $value->nama_akun ?></td>
                    <td><?= $value->tgl_jurnal ?></td>
                    <td><?= $value->kode_akun ?></td>
                    <td><?= $value->posisi_d_c == 'd' ? rupiah($value->nominal) : '-' ?></td>
                    <td><?= $value->posisi_d_c == 'k' ? rupiah($value->nominal) : '-' ?></td>
                  </tr>                  
                <?php } ?>
                <tr>
                  <td colspan="4">Total</td>
                  <td><?= rupiah($totalDebit) ?></td>
                  <td><?= rupiah($totalKredit) ?></td>
                </tr>

              </tbody>
            </table>            
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
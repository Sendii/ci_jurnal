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
          <li class="breadcrumb-item active">Buku Besar</li>

        </ol>
      </div><!-- /.col -->
      <div class="col-sm-12">
        <h1 class="m-0 text-center">Buku Besar</h1>
        <?php if (isset($_GET['year']) && isset($_GET['month']) && isset($_GET['akun']) ): ?>
        <h5 class="text-center"><?= 'Periode bulan '. bulanIndo($_GET['month']).' tahun '.$_GET['year']. ' akun '.$_GET['akun'] ?></h5>
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
          <?php if (!isset($_GET['year']) && !isset($_GET['month']) && !isset($_GET['akun']) ): ?>
          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">COA</h3> -->


              <div class="col">


                <form action="<?= base_url('bukubesar')?>" method="get">
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

                  <div class="form-group">
                    <label for="exampleInputEmail1">Akun</label>
                    <select name="akun" class="form-control">
                      <option value="">Pilih Akun</option>
                      <?php 
                      foreach ($akuns as $key => $v) { ?>
                        <option value="<?= $v->kode_akun ?>" <?= isset($_GET['akun']) && $v->kode_akun == $_GET['akun'] ? "selected" : "" ?>><?= $v->nama_akun ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Cari</button>
                </form>


              </div>
            </div> 
          <?php endif ?>


        </div>
        <!-- /.card-header -->
        <?php if (isset($_GET['year']) && isset($_GET['month']) && isset($_GET['akun']) ): ?>
        <div class="card">
          <div class="card-body">
            <button class="btn btn-primary btn-sm my-2" id="btnLaporan">Print Laporan</button>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th rowspan="2">#</th>
                  <th rowspan="2">Tanggal</th>
                  <th rowspan="2">Keterangan</th>
                  <th rowspan="2">Ref</th>
                  <th rowspan="2">Debit</th>
                  <th rowspan="2">Kredit</th>
                  <th colspan="2" style="text-align: center;">Saldo</th>
                </tr>
                <tr>
                  <th>Debit</th>
                  <th>Kredit</th>
                </tr>
              </thead>
              <tbody id="data-tables">

                <?php
                $no = 1;
                $saldoAwal = 0;
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= date('Y-m-d') ?></td>
                  <td>Saldo Awal</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><?= rupiah($saldoAwal) ?></td>
                  <td></td>
                </tr>
                <?php 
                foreach ($list as $key => $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->tgl_jurnal ?></td>
                    <td><?= $value->nama_akun ?></td>
                    <td><?= $value->kode_akun ?></td>
                    <td><?= $value->posisi_d_c == 'd' ? rupiah($value->nominal) : '-' ?></td>
                    <td><?= $value->posisi_d_c == 'k' ? rupiah($value->nominal) : '-' ?></td>
                    <td>
                      <?php
                      if ($value->posisi_d_c == 'd') {
                        $saldoAwal += $value->nominal;
                      }
                      if ($value->posisi_d_c == 'k') {
                        $saldoAwal -= $value->nominal;
                      }
                      ?>
                      <?= rupiah($saldoAwal) ?></td>
                      <td>-</td>
                    </tr>
                  <?php } ?>

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

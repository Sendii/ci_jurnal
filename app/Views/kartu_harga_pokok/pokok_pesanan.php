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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kartu Harga Pokok Pesanan</li>
          </ol>
      </div><!-- /.col -->
      <div class="col-sm-12">
        <h1 class="m-0 text-center">Kartu Harga Pokok Pesanan</h1>

    </div>
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <!-- <div class="col-md-6"> -->
                <div class="col-xs-4">
                    <button class="btn btn-primary btn-sm mb-2" style="width: 10%" id="btnLaporan">Print Laporan</button>
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <!-- form start -->
                        <form action="<?= base_url('Produksi/simpan')?>" method="post">  
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <h5>No Produksi : <?= $pesanan->id_produksi ?></h5>
                                        <h5>Produk : <?= $pesanan->produk ?></h5>
                                        <h5>Tanggal : <?= $pesanan->tanggal ?></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Jumlah Pesanan : <?= $pesanan->q_bp ?></h5>
                                        <!-- <h5>Harga : <?= rupiah($pesanan->total) ?></h5> -->
                                        <h5>Total : <?= rupiah($pesanan->total_harga) ?></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="5">Biaya Bahan Baku</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Bahan</th>
                                                    <th>Unit</th>
                                                    <th>Qty</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($bahan_baku as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $value->nama_bahanbaku ?></td>
                                                        <td><?= $value->satuan_bb ?></td>
                                                        <td><?= $value->qty ?></td>
                                                        <td><?= rupiah($value->harga_bb) ?></td>
                                                        <td><?= rupiah($value->total) ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="5">Biaya Overhead Pabrik</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama BOP</th>
                                                    <th>Unit</th>
                                                    <th>Qty</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($bop as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $value->nama_bop ?? $value->nama_overhead ?></td>
                                                        <td><?= $value->satuan_bb_bop ?? $value->satuan_bb_overhead  ?></td>
                                                        <td><?= $value->qty ?></td>
                                                        <td><?= is_null($value->harga_bb) ? rupiah($value->harga_overhead) : rupiah($value->harga_bb) ?></td>
                                                        <td><?= rupiah($value->total) ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="5">Biaya Tenaga Kerja</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama BTKL</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah Hari</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($btk as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $value->nama_karyawan ?></td>
                                                        <td><?= rupiah($value->nominal) ?></td>
                                                        <td><?= $value->jumlah_hari ?></td>
                                                        <td><?= rupiah($value->total) ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="background-color: #f5f5f5;">
                                        <h5>Jumlah total BBB : <span class="float-right"><?= rupiah($totalBb) ?></span></h5>
                                    </div>
                                    <div style="background-color: #f3f0f0;">
                                        <h5>Jumlah total BOP : <span class="float-right"><?= rupiah($totalBop) ?></span></h5>
                                    </div>
                                    <div style="background-color: #f5f5f5;">
                                        <h5>Jumlah total BTKL : <span class="float-right"><?= rupiah($totalBtkl) ?></span></h5>
                                    </div>
                                    <div style="background-color: #98b5d9;">
                                        <h5>Total Keseluruhan: <b><span class="float-right"><?= rupiah($totalKeseluruhan) ?></span></b></h5>
                                    </div>                            
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </tbody>
                </table>
            </div>




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
          // var restore = document.getElementsByClassName('card-secondary')[0].innerHTML
          // document.body.innerHTML = restore

          // window.document.write('Kartu Harga Pokok Pesanan');
          // window.document.write(restore);
          // console.log(window.print())
          
      })      
        window.addEventListener('afterprint', (event) => {
          $('#btnLaporan').show()
      });
  </script>
  <?=$this->endSection()?>
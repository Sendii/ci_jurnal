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
          <div class="col-sm-6">
            <h1 class="m-0">Biaya Produksi</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Biaya Produksi</li>
            </ol>
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
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">COA</h3> -->
                

              <div class="col">
                 
                   
                    <a href="<?= base_url('Produksi/add')?>" class="btn btn-primary" id="tmbh">Tambah Data</a>
                 
               
              </div>
            </div> 



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
              <th>#</th>
              <th>kode produksi</th>
              <th>tanggal produksi</th>
			  <th>produk</th>
			  <th>jumlah</th>
              <th>biaya produksi</th>
              <!-- <th class="text-center">aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach ($list as $key => $value) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->id_produksi ?></td>
                <td><?= $value->tanggal ?></td>
				<td><?= $value->produk ?></td>
                <td><?= $value->q_bp ?></td>
                <td><?= rupiah ($value->total)?></td>
								
                <!-- <td class="text-center">
                  <button class="btn btn-sm btn-default" data-id="<?= $value->id_produksi?>" data-target="#detail" data-toggle="modal">Detail</button>
                </td> -->
              </tr>
            <?php } ?>
          </tbody>
          </table>
              </div>



              
              <!-- /col -->
          </div>
              <!-- /col -->
          </section>
          <?= view('produksi/detail')?>
          <?=$this->endSection()?>
          
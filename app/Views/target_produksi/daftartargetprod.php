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
            <h1 class="m-0">Target Produksi</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Target Produksi</li>
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
                 
                   
                    <a href="<?= base_url('target_produksi') ?>" class="btn btn-primary" id="tmbh">Tambah Data Target Produksi</a>
                 
               
              </div>
            </div> 



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
              <th>#id target</th>
              <th>Nama Produk</th>
              <th>Target Produksi</th>
              <th>Periode Target</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                <?php
                    foreach($target_produksi as $row):
                        ?>
                            <tr>
                                <td><?= $row['id_target'];?></td>
                                <td><?= $row['nama_produk'];?></td>
                                <td><?= $row['target_produksi'];?></td>
                                <td><?= $row['periode_target'];?></td>
                                                         
                                <td>
                                  <a class="btn btn-info" href="<?= base_url('target_produksi/edittargetproses/'.$row['id_target']) ?>" role="button">
                                    <span data-feather="edit"></span>Ubah
                                  </a>

                                </td>
                            </tr>
                        <?php
                    endforeach;    
                ?>
          </tbody>
                </table>
              </div>



              
              <!-- /col -->
          </div>
              <!-- /col -->
          </section>
          <?=$this->endSection()?>
          
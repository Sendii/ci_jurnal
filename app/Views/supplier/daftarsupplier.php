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
            <h1 class="m-0">Supplier</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Supplier</li>
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
                 
                   
                    <a href="<?= base_url('supplier') ?>" class="btn btn-primary" id="tmbh">Tambah Data Supplier</a>
                 
               
              </div>
            </div> 

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
            <th>#Id supplier</th>
              <th>Tanggal</th>
              <th>Nama Supplier</th>
              <th>Nama Toko</th>
              <th>Alamat supplier</th>
              <th>No telp supplier</th>
              <th>KTP</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                <?php
                    foreach($supplier as $row):
                        ?>
                            <tr>
                                <td><?= $row['id_supplier'];?></td>
                                <td><?= $row['tanggal'];?></td>
                                <td><?= $row['nama_suplier'];?></td>
                                <td><?= $row['nama_cv'];?></td>
                                <td><?= $row['alamat_supplier'];?></td>
                                <td><?= $row['no_telp_supplier'];?></td>
                                <td>
                                  <a href="<?php echo base_url('images/upload/'.$row['ktp']) ?>" target="_blank">
                                  <img src="<?php echo base_url('images/upload/'.$row['ktp']) ?>" class="img-thumbnail" width="100">
                                  </a>
                                </td>
                                <td>
                                <a class="btn btn-success btn-sm" href="<?= base_url('supplier/editsupplier/'.$row['id_supplier']) ?>" role="button">
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





          
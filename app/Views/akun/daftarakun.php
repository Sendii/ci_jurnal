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
            <h1 class="m-0">COA</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">COA</li>
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
                 
                   
                    <a href="<?= base_url('akun') ?>" class="btn btn-primary" id="tmbh">Tambah Data COA</a>
                 
               
              </div>
            </div> 



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
              <th>#id</th>
              <th>kode akun</th>
              <th>nama akun</th>
              <th>Header Akun</th>
              <th>Posisi Debet/Kredit</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                <?php
                    foreach($akun as $row):
                        ?>
                            <tr>
                                <td><?= $row['id'];?></td>
                                <td><?= $row['kode_akun'];?></td>
                                <td><?= $row['nama_akun'];?></td>
                                <td><?= $row['header_akun'];?></td>
                                <td><?= $row['posisi_d_c'];?></td>
                                <td>
                                  <a class="btn btn-info" href="<?= base_url('akun/editakun/'.$row['id']) ?>" role="button">
                                    <span data-feather="edit"></span>Ubah
                                  </a>
                                  <!-- <a onclick="deleteConfirm('<?php echo base_url('akun/deleteakun/'.$row['id']) ?>')" class="btn btn-danger btn-sm" href="#" role="button">
                                    <span data-feather="trash-2"></span>Hapus
                                  </a> -->
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
          
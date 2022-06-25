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
            <h1 class="m-0">Biaya Overhead Pabrik</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BOP</li>
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
                 
                   
                    <a href="<?= base_url('bop') ?>" class="btn btn-sm btn-primary" id="tmbh">Tambah Data BOP</a>
                 
               
              </div>
            </div> 



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
            <th>#Id BOP</th>
              <th>Nama BOP</th>
              <th>Satuan BOP</th>
              <th>Qty BOP</th>
              <th>Harga BOP</th>
              <th>Total BOP</th>
              
              <!-- <th>Metode penggunaan</th> -->
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                <?php
                    foreach($bop as $row):
                        ?>
                            <tr>
                                <td><?= $row['id_bop'];?></td>
                                <td><?= $row['nama_bop'];?></td>
                                <td><?= $row['satuan_bop'];?></td>
                                <td><?= $row['qty_bop'];?></td>
                                <td><?= rupiah($row['harga_bop']);?></td>
                                <td><?= rupiah($row['total_bop']);?></td>
                              
                                <!-- metode_penggunaan -->
                                <td>
                                  <a class="btn btn-sm btn-info" href="<?= base_url('bop/editbop/'.$row['id_bop']) ?>" role="button">
                                  <i class="fas fa-edit"></i>Ubah
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
          
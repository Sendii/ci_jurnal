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
            <h1 class="m-0">Bahan Baku</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bahan Baku</li>
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
                 
                   
                  
                 
               
              </div>
            </div> 



              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
            <th>#Id bahan baku</th>
              <th>Nama bahan baku</th>
              <th>Satuan bahan baku</th>
              <th>Qty bahan baku</th>
              <th>Harga bahan baku</th>
              <th>Jenis bahan baku</th>
             
              <!-- <th>Metode penggunaan</th> -->
              
            </tr>
          </thead>
          <tbody>
                <?php
                    foreach($bahan_baku as $row):
                        ?>
                            <tr>
                                <td><?= $row['id_bahanbaku'];?></td>
                                <td><?= $row['nama_bahanbaku'];?></td>
                                <td><?= $row['satuan_bb'];?></td>
                                <td><?= $row['qty_bb'];?></td>
                                <td><?= rupiah($row['harga_bb']);?></td>
                                <td><?= $row['jenis_bb'];?></td>
                               
                                <!-- metode_penggunaan -->
                                
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
          
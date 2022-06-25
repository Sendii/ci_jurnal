<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>Target Costing || UMKM Puri Utami</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Target Costing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Target Costing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="section">
        <div class="container-fluid">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= site_url('Targetcosting/index') ?>" class="btn btn-sm btn-primary" id="tmbh"><i class="fas fa-plus"></i> Tambah Data </a>
            </div>
            </div>
                <!-- Default box -->
            <div class="card shadow mb-4">
                <div class="card-header">
                <?php if(session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">x</button>
                           <i class="fas fa-check-circle"></i>
                            <?=session()->getFlashdata('success')?>
                        </div>
                    </div>
                <?php endif; ?>
                <h3 class="card-title m-0 font-weight-bold">Data Target Costing</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
               <div class="card-body">
                   <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Perkiraan Harga Jual</th>
                                <th>Laba (%)</th>
                                <th>Harga Produksi</th>
                                <th>Target Costing</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          foreach($targetcosting as $row):
                              ?>
                                  <tr>
                                      
                                      
                                        <td><?= $row['id_tc'];?></td>
                                       <td><?= $row['nama_produk'];?></td>
                                       <td><?= rupiah($row['hargajual']);?></td>
                                       <td><?= $row['laba'];?>%</td>
                                       <td><?= rupiah($row['harga_produksi']);?></td>
                                       <td><?= rupiah($row['targetcost']);?></td>
                                  
                              <?php
                          endforeach;    
                        ?>                                              
                        </tbody>
                    </table>
                </div>    
    <!-- /.container-fluid -->
    </div>
    <!-- /.card -->
</section>
<?= $this->endSection() ?>
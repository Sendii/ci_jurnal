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
        <div class="row">
          <!-- left column -->
          <!-- <div class="col-md-6"> -->
          <div class="col-xs-4">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header" >
                <h3 class="card-title">Input Supplier</h3>
              </div>
              <!-- /.card-header -->

              <?php
              if(isset($validation)){
              echo $validation->listErrors();
              }
              ?>
              
              <!-- form start -->
              <?= form_open_multipart('supplier/index') ?>
                <div class="card-body">
                <div class="mb-3">
                    <label for="nama_suplier" class="form-label">Nama Supplier</label>
                    <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" value="<?= set_value('nama_suplier')?>" placeholder="Diisi dengan nama supplier">
                </div>
                <div class="mb-3">
                    <label for="nama_cv" class="form-label">Nama Toko</label>
                    <input type="text" class="form-control" id="nama_cv" name="nama_cv" value="<?= set_value('nama_cv')?>" placeholder="Diisi dengan nama toko">
                </div>
                 <div class="mb-3">
                    <label for="alamat_supplier" class="form-label">Alamat Supplier</label>
                    <input type="text" class="form-control" id="alamat_supplier" name="alamat_supplier" value="<?= set_value('alamat_supplier')?>" placeholder="Diisi dengan alamat supplier"></p>
                </div>
                <div class="mb-3">
                    <label for="no_telp_supplier" class="form-label">No Telp Supplier</label>
                    <input type="text" class="form-control" id="no_telp_supplier" name="no_telp_supplier" value="<?= set_value('no_telp_supplier')?>" placeholder="Diisi dengan Nomor Telepon (082144067745)">
                </div>
                <div class="mb-3">
                    <label for="ktp" class="form-label">KTP</label>
                    <input type="file" class="form-control" id="ktp" name="ktp" value="<?= set_value('ktp')?>" >
                </div>
                <!-- /.form group -->
              
              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
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

          
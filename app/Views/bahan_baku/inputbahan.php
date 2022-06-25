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
        <div class="row">
          <!-- left column -->
          <!-- <div class="col-md-6"> -->
          <div class="col-xs-4">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header" >
                <h3 class="card-title">Input Bahan Baku</h3>
              </div>
              <!-- /.card-header -->

              <?php
              if(isset($validation)){
              echo $validation->listErrors();
              }
              ?>
              
              <!-- form start -->
              <?= form_open_multipart('bahan_baku/index') ?>
                <div class="card-body">
                <div class="mb-3">
                    <label for="nama_bahanbaku">Nama Bahan Baku</label>
                    <input type="text" class="form-control" id="nama_bahanbaku" name="nama_bahanbaku" value="<?= set_value('nama_bahanbaku')?>" placeholder="Masukkan Nama Bahan Baku">
                  </div>

                <div class="mb-3">
                    <label for="satuan_bb" class="form-label">Satuan</label>
                    <select class="form-select" aria-label="Default select example" name="satuan_bb">
                    <option selected>Satuan</option>
                        <option value="roll">roll</option>
                        <option value="lembar">lembar</option>
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="qty_bb">Qty BB</label>
                    <input type="text" class="form-control" id="qty_bb" name="qty_bb" value="<?= set_value('qty_bb')?>" placeholder="Masukkan Qty bb">
                  </div>

                  <div class="mb-3">
                    <label for="harga_bb">Harga BB</label>
                    <input type="text" class="form-control" id="harga_bb" name="harga_bb" value="<?= set_value('harga_bb')?>" placeholder="Masukkan Harga BB">
                  </div>

                  <div class="mb-3">
                    <label for="jenis_bb" class="form-label">Jenis BB</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_bb">
                    <option selected>Jenis bahan baku</option>
                        <option value="bahan baku">bahan baku</option>
                        <option value="bahan penolong">bahan penolong</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="biaya_pesan">Biaya Pesan</label>
                    <input type="text" class="form-control" id="biaya_pesan" name="biaya_pesan" value="<?= set_value('biaya_pesan')?>" placeholder="Masukkan Biaya Pesan">
                  </div>

                  <div class="mb-3">
                    <label for="biaya_simpan">Biaya Simpan</label>
                    <input type="text" class="form-control" id="biaya_simpan" name="biaya_simpan" value="<?= set_value('biaya_simpan')?>" placeholder="Masukkan Biaya Simpan">
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

          
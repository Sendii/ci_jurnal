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
        <div class="row">
          <!-- left column -->
          <div class="col-xs-4">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit BOP </h3>
              </div>
              <!-- /.card-header -->

        <?php
        if(isset($validation)){
          echo $validation->listErrors();
        }

        //dapatkan data dari umkm_puri_utami dan simpan ke variabel lokal
        foreach($bop as $row):
          $id_bop        = $row->id_bop;
          $nama_bop      = $row->nama_bop;
          $satuan_bop    = $row->satuan_bop;
          $qty_bop       = $row->qty_bop;
          $harga_bop     = $row->harga_bop;
          $total_bop     = $row->total_bop;
         
        endforeach;
      ?>
              <!-- form start -->
              <?= form_open_multipart('bop/editbopproses') ?>
              <input type="hidden" id="id_bop" name="id_bop" value="<?=$id_bop?>">

                <div class="card-body">
                  <div class="form-group">
                  <label for="nama_bop" class="form-label">Nama BOP</label>
                    <?php
                        //jika set value nama_suplier tidak kosong maka isi $nama_suplier diganti dengan isian dari user
                        if(strlen(set_value('nama_bop'))>0){
                          $nama_bop = set_value('nama_bop');
                        }
                
                    ?>
                     <input type="text" class="form-control" id="nama_bop" name="nama_bop" value="<?= $nama_bop?>" placeholder="Diisi dengan nama bop">
                  </div>

                  <div class="form-group">
                  <label for="satuan_bop" class="form-label">Satuan</label>
                    <?php
                        //jika set value nama_cv tidak kosong maka isi $nama_cv diganti dengan isian dari user
                        if(strlen(set_value('satuan_bop'))>0){
                          $satuan_bop = set_value('satuan_bop');
                        }
                
                    ?>
                    <input type="text" class="form-control" id="satuan_bop" name="satuan_bop" value="<?= $satuan_bop?>" placeholder="Diisi dengan satuan">
                  </div>

                  <div class="form-group">
                  <label for="qty_bop" class="form-label">QTY </label>
                    <?php
                        //jika set value alamat_supplier tidak kosong maka isi $alamat_supplier diganti dengan isian dari user
                        if(strlen(set_value('qty_bop'))>0){
                          $qty_bop = set_value('qty_bop');
                        }
                
                    ?>
                    <input type="text" class="form-control" id="qty_bop" name="qty_bop" value="<?= $qty_bop?>" placeholder="Diisi dengan quantity">
                  </div> 
                  
                  
                  <div class="mb-3">
                    <label for="harga_bop" class="form-label">Harga BOP</label>
                    <?php
                        //jika set value no_telp_supplier tidak kosong maka isi $no_telp_supplier diganti dengan isian dari user
                        if(strlen(set_value('harga_bop'))>0){
                          $harga_bop = set_value('harga_bop');
                        }
                
                    ?>
                    <input type="text" class="form-control" id="harga_bop" name="harga_bop" value="<?= $harga_bop?>" placeholder="Diisi dengan harga bop ">
                </div>

                <div class="mb-3">
                    <label for="total_bop" class="form-label">Total BOP</label>
                    <?php
                        //jika set value no_telp_supplier tidak kosong maka isi $no_telp_supplier diganti dengan isian dari user
                        if(strlen(set_value('total_bop'))>0){
                          $total_bop = set_value('total_bop');
                        }
                
                    ?>
                    <input type="text" class="form-control" id="total_bop" name="total_bop" value="<?= $total_bop?>" placeholder="Diisi dengan total BOP ">
                </div>

                

                
                
                 
              
                <!-- /.card-body -->

              
            <!-- /.card -->

          </tbody>
                </table>
              </div>



              
              <!-- /col -->
          </div>

          <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>
            </div>
              <!-- /col -->
          </section>
          <?=$this->endSection()?>
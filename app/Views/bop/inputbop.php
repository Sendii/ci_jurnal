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
          <!-- <div class="col-md-6"> -->
          <div class="col-xs-4">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header" >
                <h3 class="card-title">Input BOP</h3>
              </div>
              <!-- /.card-header -->

              <?php
              if(isset($validation)){
              echo $validation->listErrors();
              }
              ?>
              
              <!-- form start -->
              <?= form_open_multipart('bop/index') ?>
                <div class="card-body">
				
				  
                <div class="mb-3">
                    <label for="nama_bop">Nama BOP</label>
                    <input type="text" class="form-control" id="nama_bop" name="nama_bop" value="<?= set_value('nama_bop')?>" placeholder="Masukkan Nama BOP">
                  </div>


				<div class="mb-3">
                    <label for="satuan_bop" class="form-label">Satuan BOP</label>
					 <input type="text" class="form-control" id="satuan_bop" name="satuan_bop" value="<?= set_value('satuan_bop')?>" placeholder="Masukkan Quantity BOP">
                  </div>
				  
                <div class="mb-3">
                    <label for="qty_bop" class="form-label">Quantity BOP</label>
					 <input type="text" class="form-control" id="qty_bop" name="qty_bop" value="<?= set_value('qty_bop')?>" placeholder="Masukkan Quantity BOP">
                  </div>
				  
				  <div class="mb-3">
                    <label for="harga_bop" class="form-label">Harga BOP</label>
					 <input type="text" class="form-control" id="harga_bop" name="harga_bop" value="<?= set_value('harga_bop')?>" placeholder="Masukkan harga BOP">
                  </div>

                  

                  <div class="mb-3">
                    <label for="total_bop">Total BOP</label>
                    <input type="text" class="form-control" id="total_bop" name="total_bop" value="<?= set_value('total_bop')?>" placeholder="Masukkan total BOP">
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
		  
		  	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	 <script type="text/javascript">
	 $(document).ready(function(){
		 $("#qty_bop, #harga_bop").keyup(function(){
			 var qty_bop = $("#qty_bop).val();
			 var harga_bop    = $("#harga_bop").val();
			 
			 var total_bop =( parseInt(qty_bop) * parseInt(harga_bop);
			 $("#total_bop").val(total_bop);
		 });
	 });
	 </script>

          
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
            <h1 class="m-0">Biaya Produksi</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Biaya Produksi</li>
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
            <h3 class="card-title">Input Produksi</h3>
            </div>
            <!-- /.card-header -->

            <?php
            if(isset($validation)){
            echo $validation->listErrors();
            }
            ?>
            
            <!-- form start -->
            <form action="<?= base_url('Produksi/simpan')?>" method="post">  
            <div class="card-body">
                <div class="mb-3">
                    <label for="kode_produksi">Kode Produksi</label>
                    <input type="text" class="form-control" id="kode_produksi" name="kode_produksi" value="<?= $kode ?>" placeholder="Masukkan kode" readonly>
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal Produksi</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d')?>" placeholder="Masukkan kode">
                </div>
                <div class="mb-3">
                    <label for="produk">Nama Produk</label>
                    <input type="text" class="form-control" id="produk" name="produk" value="<?= set_value('produk')?>" placeholder="Masukkan Nama Produk">
                  </div>
                <!-- bb -->
                <div class="mb-3">
                    <label for="nama_akun">Biaya Bahan Baku</label>
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-sm-3">
                            <select name="bahan_baku" id="bahan_baku" class="form-control">
                                <option value="">-</option>
                                <?php foreach ($bahan_baku as $item) { ?>
                                <option value="<?= $item->id_bahanbaku?>"><?= $item->nama_bahanbaku?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="harga_bb" name="harga_bb" value="" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="qty" name="qty" value="" placeholder="Masukkan qty">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="subtotal" name="subtotal" value="" placeholder="" readonly>
                        </div>
                    </div>
                </div>

                <!-- bop -->
                <div class="mb-3">
                    <label for="bop">BOP</label>
                    <div class="bop">
                        <div class="wrapper">
                            <div class="row" style="margin-bottom: 15px;" id="input-1">
                                <div class="col-sm-3">
                                    <select name="bop[]" id="bop" class="form-control bop">
                                        <option value="">-</option>
                                        <?php foreach ($bop as $item) { ?>
                                        <option value="<?= $item->id_bahanbaku?>"><?= $item->nama_bahanbaku?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="harga_bop_1" name="harga_bop[]" value="" placeholder="" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="qty_bop_1" name="qty_bop[]" value="" placeholder="Masukkan qty">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="total_bop_1" name="total_bop[]" value="" placeholder="" readonly>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-default" onclick="tambahInput()"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper1">

                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="btk">BTK</label>
                    <div class="wrapper-btk">
                        <div class="wrapper-peg-1">
                            <div class="row" style="margin-bottom: 15px;" id="input-peg-1">
                                <div class="col-sm-3">
                                    <select name="btk[]" id="btk" class="form-control btk">
                                        <option value="">-</option>
                                        <?php foreach ($karyawan as $item) { ?>
                                        <option value="<?= $item->id_karyawan?>"><?= $item->nama_karyawan?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-2 peg">
                                    <input type="text" class="form-control" id="nominal_1" name="nominal[]" value="" placeholder="Masukkan nominal">
                                </div>
                                <div class="col-sm-2 peg">
                                    <input type="text" class="form-control" id="qty_btk_1" name="qty_btk[]" value="" placeholder="Masukkan jumlah hari">
                                </div>
                                <div class="col-sm-2 peg">
                                    <input type="text" class="form-control" id="total_1" name="total[]" value="" readonly>
                                </div>
                                <div class="col-sm-2 peg">
                                    <button type="button" class="btn btn-default" onclick="tambahPeg()"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-peg">

                        </div>
                    </div>
                </div>
                 <div class="mb-3">
                    <label for="q_bp">Jumlah Produk </label>
                    <input type="text" class="form-control" id="q_bp" name="q_bp" value="<?= set_value('q_bp')?>" placeholder="Masukkan Jumlah Produk yang akan diProduksi">
                  </div>
                
            
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
            <?=$this->Section('script')?>
            <script>
                $(document).ready(function() {
                    // $('.aselole').on('change', '.bahan_baku', function() {
                    //     var id = $(this).val()
                    //     console.log(id)
                    // })
                    $("#qty").hide()
                    $("#subtotal").hide()

                    $("#bahan_baku").on('change', function() {
                        var id = $(this).val()
                        // console.log(id)
                        $("#harga_bb").val('')

                        if (id) {
                            $.ajax({
                                url     : "<?= base_url('Produksi/find_by_id/')?>", 
                                method  : "post", 
                                data    : {
                                    id:id
                                },
                                success : function(e) {
                                    var obj = JSON.parse(e)
                                    $("#harga_bb").val(obj.harga_bb)
                                    $("#qty").show()
                                    $("#subtotal").show()

                                    $("input[name='qty']").focusout(function() {
                                        var typing = $(this).val()
                                        var harga = $("#harga_bb").val()
                                        var total = typing * harga
                                        console.log(total)
                                        $("#subtotal").val(total)
                                    })

                                }
                            })
                        }
                    })
                })
            </script>
            <script>
                var x = 1;
                var limit = 5;

                var y = 1;

                function tambahInput() {
                    if (x < limit) {
                        x+=1
                        var html = '<div id="input-'+x+'" class="row" style="margin-bottom: 15px;">'+
                            '<div class="col-sm-3">'+
                                '<select name="bop[]" class="form-control bop">'+
                                    '<option value="">-</option>'+
                                    '<?php foreach ($bop as $item) { ?>'+
                                    '<option value="<?= $item->id_bahanbaku?>"><?= $item->nama_bahanbaku?></option>'+
                                    '<?php } ?>'+
                                '</select>'+
                            '</div>'+
                            '<div class="col-sm-2"><input type="text" class="form-control" id="harga_bop_'+x+'" name="harga_bop[]" value="" placeholder="" readonly></div>'+
                            '<div class="col-sm-2"><input type="text" class="form-control" id="qty_bop_'+x+'" name="qty_bop[]" value="" placeholder="Masukkan qty"></div>'+
                            '<div class="col-sm-2"><input type="text" class="form-control" id="total_bop_'+x+'" name="total_bop[]" value="" placeholder="" readonly></div>'+
                            '<div class="col-sm-2"><button type="button" class="btn btn-default" onclick="deleteInput('+x+')" ><i class="fa fa-trash"></i></button></div>'+
                        '</div>';  
    
                        $('.wrapper1').append(html)
                    } else {
                        alert('maximal input field')
                    }
                }

                function tambahPeg() {
                    // console.log(x)
                    if (y < limit) {
                        y+=1
                        var html = '<div id="input-peg-'+y+'" class="row" style="margin-bottom: 15px;" id="input-1">'+
                                '<div class="col-sm-3">'+
                                '<select name="btk[]" id="btk" class="form-control btk">'+
                                '<option value="">-</option>'+
                                '<?php foreach ($karyawan as $item) { ?>'+
                                '<option value="<?= $item->id_karyawan?>"><?= $item->nama_karyawan?></option>'+
                                '<?php } ?>'+
                                '</select>'+
                                '</div>'+
                                '<div class="col-sm-2">'+
                                '<input type="text" class="form-control" id="nominal_'+y+'" name="nominal[]" value="" placeholder="Masukkan nominal">'+
                                '</div>'+
                                '<div class="col-sm-2">'+
                                '<input type="text" class="form-control" id="qty_btk_'+y+'" name="qty_btk[]" value="" placeholder="Masukkan jumlah hari">'+
                                '</div>'+
                                '<div class="col-sm-2"><input type="text" class="form-control" id="total_'+y+'" name="total[]" value="" readonly></div>'+
                                '<div class="col-sm-2">'+
                                '<button type="button" class="btn btn-default" onclick="hapuspeg('+y+')"><i class="fa fa-trash"></i></button>'+
                                '</div>'+
                                '</div>';  
    
                        $('.wrapper-peg').append(html)
                    } else {
                        alert('maximal input field')
                    }
                }

                function deleteInput(id) {
                    // console.log(x)
                    $('#input-'+x).remove()
                    x--
                }

                function hapuspeg(id) {
                    // console.log(x)
                    $('#input-peg-'+y).remove()
                    x--
                }

                $('.bop').on('change', '.bop', function() {
                    var id = $(this).val()
                    
                    console.log(id)
                    $("#harga_bop_"+x).val('')
                    if (id) {
                        $.ajax({
                            url     : "<?= base_url('Produksi/bop/')?>", 
                            method  : "post", 
                            data    : {
                                id:id
                            },
                            success : function(e) {
                                var obj = JSON.parse(e)
                                $("#harga_bop_"+x).val(obj.harga_bb)
                                // $("#qty_bop").show()
                                // $("#total_bop").show()

                                $("#qty_bop_"+x).focusout(function() {
                                    var typing = $(this).val()
                                    var harga = $("#harga_bop_"+x).val()
                                    var total = typing * harga
                                    console.log(typing)
                                    $("#total_bop_"+x).val(total)
                                })

                            }
                        })
                    }
                })

                $(".peg").hide()
                $('.wrapper-btk').on('change', '.btk', function() {
                    var id = $(this).val()
                    $(".peg").show()

                    $("#qty_btk_"+y).focusout(function() {
                        var typing = $(this).val()
                        var nominal = $("#nominal_"+y).val()
                        var total = typing * nominal
                        console.log(typing)
                        $("#total_"+y).val(total)
                    })
                })
            </script>
            <?=$this->endSection()?>
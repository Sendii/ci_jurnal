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
                            <h3 class="card-title">Bill of Material</h3>
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
                                    <label for="nama_akun">Bahan Baku</label>
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
                                    <label for="bop">Bahan Penolong</label>
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
                                                    <button type="button" class="btn btn-default" id="btnAddBOP"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrapperBop">

                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="overhead">Overhead</label>
                                    <div class="overhead">
                                        <div class="wrapper">
                                            <div class="row" style="margin-bottom: 15px;" id="input-1">
                                                <div class="col-sm-3">
                                                    <select name="overhead[]" id="overhead" class="form-control overhead">
                                                        <option value="">-</option>
                                                        <?php foreach ($overhead as $item) { ?>
                                                            <option value="<?= $item->id_overhead?>"><?= $item->nama_overhead?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="harga_overhead_1" name="harga_overhead[]" value="" placeholder="" readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="qty_overhead_1" name="qty_overhead[]" value="" placeholder="Masukkan qty">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="total_overhead_1" name="total_overhead[]" value="" placeholder="" readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="button" class="btn btn-default" id="btnAddOverhead"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrapperOverhead">

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="btk">Tenaga Kerja</label>
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
                                                    <button type="button" class="btn btn-default" id="btnAddPEG"><i class="fa fa-plus"></i></button>
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
            var x = 1;
            var limit = 5;
            var z=1;
            var y = 1;

            $("#qty_overhead").hide()
            $("#t_overhead").hide()

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

            $('.overhead').on('change', '.overhead', function() {
                var id = $(this).val()

                $("#harga_overhead_"+z).val('')

                if (id) {
                    $.ajax({
                        url     : "<?= base_url('Produksi/overhead/')?>", 
                        method  : "post", 
                        data    : {
                            id:id
                        },
                        success : function(f) {
                            var obj = JSON.parse(f)
                            console.log(obj)
                            $("#harga_overhead_"+z).val(obj.harga_overhead)
                            $("#qty_overhead").show()
                            $("#t_overhead").show()
                        }
                    })
                }
            })

            
            $('body').on('keyup', '[id^="qty_overhead_"]', function(e){
                var typing = $(this).val()
                console.log(typing)
                console.log(z)
                var harga = $("#harga_overhead_"+z).val()
                var total = typing * harga
                
                $("#total_overhead_"+z).val(total)
            })

            $("#qty").hide()
            $("#subtotal").hide()

            $("#bahan_baku").on('change', function() {
                var id = $(this).val()
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

            $('body').on('click', '[id^="deleteInputBOP"]', function(e){
                e.preventDefault()
                let numb = $(this).attr('id').replace( /^\D+/g, '')
                $('#input-'+x).remove()
                x--
            })

            $('body').on('click', '[id^="deleteInputOverhead"]', function(e){
                e.preventDefault()
                let numb = $(this).attr('id').replace( /^\D+/g, '')
                $('#input-over'+z).remove()
                z--
            })

            $('body').on('click', '[id^="deleteInputPEG"]', function(e){
                e.preventDefault()
                let numb = $(this).attr('id').replace( /^\D+/g, '')
                $('#input-peg-'+y).remove()
                y--
            })
            $('body').on('click', '[id="btnAddBOP"]', function(e){
                e.preventDefault()
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
                '<div class="col-sm-2"><button type="button" class="btn btn-default" id="deleteInputBOP'+x+'" ><i class="fa fa-trash"></i></button></div>'+
                '</div>';  

                $('.wrapperBop').append(html)
            });

            
            $('body').on('click', '[id="btnAddOverhead"]', function(e){
                e.preventDefault()
                z+=1
                var html = '<div id="input-over'+z+'" class="row" style="margin-bottom: 15px;">'+
                '<div class="col-sm-3">'+
                '<select name="overhead[]" class="form-control overhead">'+
                '<option value="">-</option>'+
                '<?php foreach ($overhead as $item) { ?>'+
                '<option value="<?= $item->id_overhead?>"><?= $item->nama_overhead?></option>'+
                '<?php } ?>'+
                '</select>'+
                '</div>'+
                '<div class="col-sm-2"><input type="text" class="form-control" id="harga_overhead_'+z+'" name="harga_overhead[]" value="" placeholder="" readonly></div>'+
                '<div class="col-sm-2"><input type="text" class="form-control" id="qty_overhead_'+z+'" name="qty_overhead[]" value="" placeholder="Masukkan qty"></div>'+
                '<div class="col-sm-2"><input type="text" class="form-control" id="total_overhead_'+z+'" name="total_overhead[]" value="" placeholder="" readonly></div>'+
                '<div class="col-sm-2"><button type="button" class="btn btn-default" id="deleteInputOverhead'+z+'" ><i class="fa fa-trash"></i></button></div>'+
                '</div>';  

                $('.wrapperOverhead').append(html)
            })
            $('body').on('click', '[id="btnAddPEG"]', function(e){
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
                '<button type="button" class="btn btn-default" id="deleteInputPEG'+y+'"><i class="fa fa-trash"></i></button>'+
                '</div>'+
                '</div>';  

                $('.wrapper-peg').append(html)
            })
        })
    </script>
    <?=$this->endSection()?>

<?php
namespace App\Controllers;

use App\Models\ProduksiModel;


class Produksi extends BaseController{
    public function __construct(){
		
        $this->ProduksiModel = new ProduksiModel();
        
    }

	public function index(){

       
	   //cek dulu apakah kondisi form sudah diisi atau belum, kalau belum berarti tidak perlu memanggil fungsi validasi
        if( //isset($_POST['nama_karyawan'])and
         
            isset($_POST['waktu']) and
            isset($_POST['nama_bahanbaku']) and
			isset($_POST['satuan_bb']) and
			isset($_POST['qty_bb']) and
			isset($_POST['harga_bb']) and
			
			isset($_POST['nama_bop']) and
            isset($_POST['satuan_bop']) and			
			isset($_POST['qty_bop']) and 
			isset($_POST['harga_bop']) and)
			
			isset($_POST['nama_karyawan']) and
			isset($_POST['qty_karyawan']) and
			isset($_POST['satuan_karyawan']) and
			isset($_POST['harga_karyawan']) and 

            isset($_POST['total']) and 
			
			){
                //
                $validation =  \Config\Services::validation();

                if (! $this->validate(
                        [  //'id_pembayaran'=>'required`,
                            //'nama_karyawan' => 'required',
							'waktu'     => 'required',
                            
							'nama_bahanbaku'   => 'required',
                            'satuan_bb'        => 'required',
                            'qty_bb'           => 'required',
							'harga'     => 'required',
							
							'nama_bop'			=> 'required',
							'qty_bop'			=> 'required',
							'satuan_bop' 		=> 'required',
							'harga_bop'			=> 'required',
							
							'nama_karyawan'		=> 'required',
							'qty_karyawan'		=> 'required',
							'satuan_karyawan'	=> 'required',
							'harga_karyawan'	=> 'required',
							'total'             => 'required'
                         ],
                        [   /* Errors
                            'id_pembayaran' =>[
                                'required' => 'id pembayaran tidak boleh kosong,
                           ],
                           'nama_karyawan' =>[
                               'required' => 'keterangan nama tidak boleh kosong'
                           ],*/
                            'nama_bahanbaku' => [
                                'required' => 'Keterangan tanggal yang disetorkan tidak boleh kosong'
                            ],
                            'satuan_bb' => [
                                'required' => 'kehadiran disetorkan tidak boleh kosong'
                            ],
                            'qty_bb' => [
                                'required' => 'gaji disetorkan tidak boleh kosong'
                            ]
							 'harga_bb' => [
                                'required' => 'gaji disetorkan tidak boleh kosong'
                            ]
							 'jenis_bb' => [
                                'required' => 'gaji disetorkan tidak boleh kosong'
                            ]
							 'total_bb' => [
                                'required' => 'gaji disetorkan tidak boleh kosong'
                            ]
							'nama_bop' => [
                                'required' => 'Keterangan tanggal yang disetorkan tidak boleh kosong'
                            ],
                            'satuan_bop' => [
                                'required' => 'kehadiran disetorkan tidak boleh kosong'
                            ],
                            'qty_bop' => [
                                'required' => 'gaji disetorkan tidak boleh kosong'
                            ]
							 'harga_bop' => [
                                'required' => 'gaji disetorkan tidak boleh kosong'
							]	
						    'nama_karyawan' => [
                                'required' => 'nama karyawan yang disetorkan tidak boleh kosong'
                            ],
                            'satuan_karyawan' => [
                                'required' => 'tarif karyawan karyawan disetorkan tidak boleh kosong'
                            ],
                            'qty_karyawan' => [
                                'required' => 'jumlah hari kerja karyawan disetorkan tidak boleh kosong'
                            ]
							 'harga_karyawan' => [
                                'required' => 'harga karyawan disetorkan tidak boleh kosong'
							]
							'total' => [
                                'required' => 'total disetorkan tidak boleh kosong'
							]
                ))
                {                
                    
                    echo view('HeaderBootstrap');
                    echo view('SidebarBootstrap');
                    echo view('Produksi/InputProduksi',[
                        'validation' => $this->validator,
                        //'karyawan'   => $this->KaryawanModel->getAll()
                    ]);

                }
                else{
                    //panggil metod dari kosan model untuk diinputkan datanya
                    $hasil = $this->ProduksiModel->setorProduksi();
                    if($hasil->connID->affected_rows>0){
                        ?>
                        <script type="text/javascript">
                            alert("Sukses ditambahkan");
                        </script>
                        <?php	
                    }

                    $data['produksi'] = $this->ProduksiModel->getAll();
                    echo view('HeaderBootstrap');
                    echo view('SidebarBootstrap');
                    echo view('Produksi/ListProduksi', $data);
                }    
                //
        }else{
                    //kondisi awal ketika di akses, jadi tidak perlu memanggil validasi
                  
                    $data['produksi'] = $this->ProduksiModel->getAll();
                    echo view('HeaderBootstrap');
                    echo view('SidebarBootstrap');
                    echo view('Produksi/InputProduksi', $data);
        }
	}

    public function listproduksi(){
        helper('rupiah');
        //tambahkan pengecekan login
        /*if(!isset($_SESSION['nama'])){
            return redirect()->to(base_url('home')); 
        }*/

        $data['produksi'] = $this->ProduksiModel->getAll();
        echo view('HeaderBootstrap');
        echo view('SidebarBootstrap');
        echo view('Produksi/ListProduksi', $data);
}
 /*public function deleteaset($id_tc){
		$this->TargetcostingModel->deleteData($id_tc);

		return redirect()->to(base_url('targetcosting/listtargetcosting')); 
	}*/

 }
 

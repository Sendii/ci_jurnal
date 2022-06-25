<?php
namespace App\Controllers;

use App\Models\targetprodModel;

class target_produksi extends BaseController
{
	public function __construct()
    {
        //load kelas supplierModel
        $this->targetprodModel = new targetprodModel();
        //load helper
    }

    public function index()
	{

        //cek dulu apakah kondisi form sudah diisi atau belum, kalau belum berarti tidak perlu memanggil fungsi validasi
        if( 
        isset($_POST['nama_produk']) and 
        isset($_POST['target_produksi']) and 
        isset($_POST['periode_target'])
         ){
            
            $validation =  \Config\Services::validation();
                //di cek dulu apakah data isian memenuhi rules validasi yang dibuat
                if (! $this->validate([
                        'nama_produk' => 'required',
                        'target_produksi' => 'required',
                        'periode_target' => 'required',
                ],
                        [   //erors
                            
                            'nama_produk' => [
                                'required' => 'Nama produk tidak boleh kosong',
                            ],
                            'target_produksi' => [
                                'required' => 'target tidak boleh kosong', 
                            ],
                            'periode_target' => [
                                'required' => 'periode tidak boleh kosong',    
                            ]
                           
                        ]
                ))
                {                
                    // //kirim data error ke views, karena ada isian yang tidak sesuai rules
                    // echo view('HeaderBootstrap');
                    // echo view('SidebarBootstrap');
                    echo view('target_produksi/inputtargetprod',[
                        'validation' => $this->validator,
                    ]);

                }
                else
                {
                    $hasil = $this->targetprodModel->insertData();
                    if($hasil->connID->affected_rows>0){
                        ?>
                        <script type="text/javascript">
                            alert("Sukses ditambahkan");
                        </script>
                        <?php	
                    }
                    $data['target_produksi'] = $this->targetprodModel->getAll();
                    // echo view('HeaderBootstrap');
                    // echo view('SidebarBootstrap');
                    echo view('target_produksi/daftartargetprod', $data);
                }    
        }else{
        //kondisi awal ketika di akses, jadi tidak perlu memanggil validasi
        // echo view('HeaderBootstrap');
        // echo view('SidebarBootstrap');
        echo view('target_produksi/inputtargetprod'); 
	}
}
    public function edittargetprod($id_target){
        $data['target_produksi'] = $this->targetprodModel->editData($id_target);
        // echo view('HeaderBootstrap');
        // echo view('SidebarBootstrap');
        echo view('target_produksi/edittargetprod', $data);
    }

    public function edittargetproses(){
        $id_target= $_POST['id_target'];
        $nama_produk = $_POST['nama_produk'];
        $target_produksi = $_POST['target_produksi'];
        $periode_target = $_POST['periode_target'];
        
        $validation =  \Config\Services::validation();

        //jika input gambar diisi oleh user
        if( !$this->validate( [
                    'nama_produk' => 'required',
                    'target_produksi' => 'required',
                    'periode_target' => 'required'
                  
                ],
                        [   // Errors
                            'nama_produk' => [
                                'required' => 'Target produksi tidak boleh kosong',
                               
                            ],
                            'target_produksi' => [
                                'required' => 'target produksi tidak boleh kosong',
                               
                            ],
                            'periode_target' => [
                                'required' => 'periode target tidak boleh kosong', 
                            ]
                        ]
            ))
             {
         
            // echo view('HeaderBootstrap');
            // echo view('SidebarBootstrap');
            echo view('target_produksi/edittargetprod',[
                'validation' => $this->validator,
                'target_produksi' => $this->targetprodModel->editData($id_target)
            ]);

        } else{

            //validasi tidak menemukan error sehingga bisa langsung di submit ke database
            //blok ini adalah blok jika sukses, yaitu panggil method insertData()
            $hasil = $this->targetprodModel->updateData($ktp);
            if($hasil->connID->affected_rows>0){
                ?>
                <script type="text/javascript">
                    alert("Sukses diupdate");
                </script>
                <?php	
            }
            $data['target_produksi'] = $this->targetprodModel->getAll();
            // echo view('HeaderBootstrap');
            // echo view('SidebarBootstrap');
            echo view('target_produksi/daftartargetprod', $data); 
        }   
    }
    public function daftartargetprod(){
        $data['target_produksi'] = $this->targetprodModel->getAll();
        // echo view('HeaderBootstrap');
        // echo view('SidebarBootstrap');
        echo view('target_produksi/daftartargetprod', $data);
    }

    public function deletetargetprod($id_target){
		$this->targetprodModel->deleteData($id_target);

		return redirect()->to(base_url('target_prduksi/daftartargetprod')); 
	}
}
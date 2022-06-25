<?php
namespace App\Controllers;

use App\Models\BopModel;

class bop extends BaseController
{
	public function __construct()
    {
        //load kelas bahanbakuModel
        $this->BopModel = new BopModel();
        helper('rupiah');
        //load helper
    }

    public function index()
	{

        //cek dulu apakah kondisi form sudah diisi atau belum, kalau belum berarti tidak perlu memanggil fungsi validasi
        if( 
        isset($_POST['nama_bop']) and 
        isset($_POST['satuan_bop']) and 
        isset($_POST['qty_bop'])and 
        isset($_POST['harga_bop']) and 
        isset($_POST['total_bop']) 
        
        ){
            
            $validation =  \Config\Services::validation();
                //di cek dulu apakah data isian memenuhi rules validasi yang dibuat
                if (! $this->validate([
                        'nama_bop'   => 'required',
                        'satuan_bop' => 'required',
                        'qty_bop'    => 'required',
                        'harga_bop'  => 'required',
                        'total_bop' => 'required'
                        
                ],
                        [  //erors
                            
                            'nama_bop' => [
                                'required' => 'Nama bop tidak boleh kosong'
                            ],
                            'satuan_bop' => [
                                'required' => 'satuan bop tidak boleh kosong'
                            ],
                            'qty_bop' => [
                                'required' => 'qty tidak boleh kosong'   
                            ],
                            'harga_bop' => [
                                'required' => 'harga bop tidak boleh kosong'
                            ],
                            'total_bop' => [
                                'required' => 'total_bop tidak boleh kosong'  
                            ]
                           
                        ]
                ))
                {                
                    //kirim data error ke views, karena ada isian yang tidak sesuai rules
                    // echo view('HeaderBootstrap');
                    // echo view('SidebarBootstrap');
                    echo view('bop/inputbop',[
                        'validation' => $this->validator,
                    ]);
                }
                else
                {
                    $hasil = $this->BopModel->insertData();
                    if($hasil->connID->affected_rows>0){
                        ?>
                        <script type="text/javascript">
                            alert("Sukses ditambahkan");
                        </script>
                        <?php	
                    }
                    $data['bop'] = $this->BopModel->getAll();
                    // echo view('HeaderBootstrap');
                    // echo view('SidebarBootstrap');
                    echo view('bop/daftarbop', $data);
                }    
        }else{
        //kondisi awal ketika di akses, jadi tidak perlu memanggil validasi
        $data['bop'] = $this->BopModel->getAll();
        // echo view('HeaderBootstrap');
        // echo view('SidebarBootstrap');
        echo view('bop/inputbop'); 
	}
}
    public function daftarbop(){
        $data['bop'] = $this->BopModel->getAll();
        // echo view('HeaderBootstrap');
        // echo view('SidebarBootstrap');
        echo view('bop/daftarbop', $data);
    }
    public function editbop($id_bop){
        $data['bop'] = $this->BopModel->editData($id_bop);
        // echo view('HeaderBootstrap');
        // echo view('SidebarBootstrap');
        echo view('bop/editbop', $data);
    }

    public function editbopproses(){
        $id_bop= $_POST['id_bop'];
        $nama_bop = $_POST['nama_bop'];
        $satuan_bop = $_POST['satuan_bop'];
        $qty_bop = $_POST['qty_bop'];
        $harga_bop = $_POST['harga_bop'];
        $total_bop = $_POST['total_bop'];
        
        
        $validation =  \Config\Services::validation();

        //jika input gambar diisi oleh user
        if( !$this->validate([
                    'nama_bop' => 'required',
                    'satuan_bop' => 'required',
                    'qty_bop' => 'required',
                    'harga_bop' => 'required',
                    'total_bop' => 'required'
                    // ,
                    // 'metode_penggunaan' => 'required'
                  
                ],
                        [   // Errors
                            'nama_bop' => [
                                'required' => 'nama bahan tidak boleh kosong',
                               
                            ],
                            'satuan_bop' => [
                                'required' => 'satuan tidak boleh kosong',
                               
                            ],
                            'qty_bop' => [
                                'required' => 'qty tidak boleh kosong', 
                            ],
                            'harga_bop' => [
                                'required' => 'harga bop tidak boleh kosong',    
                            ],
                            'total_bop' => [
                                'required' => 'total tidak boleh kosong',
                            ]

                            // ,
                            // 'metode_penggunaan' => [
                            //     'required' => 'metode tidak boleh kosong',    
                            // ]
                        ]
                 ))
                {
            
            // echo view('HeaderBootstrap');
            // echo view('SidebarBootstrap');
            echo view('bop/editbop',[
                'validation' => $this->validator,
                'bop' => $this->BopModel->editData($id_bop),
                //$data['bop']=$this->BopModel->getAll(),
            ]);

        }else{
            //validasi tidak menemukan error sehingga bisa langsung di submit ke database
            //blok ini adalah blok jika sukses, yaitu panggil method insertData()
            $hasil = $this->BopModel->updateData();
            if($hasil->connID->affected_rows>0){
                ?>
                <script type="text/javascript">
                    alert("Sukses diupdate");
                </script>
                <?php	
            }
            $data['bop'] = $this->BopModel->getAll();
            // echo view('HeaderBootstrap');
            // echo view('SidebarBootstrap');
            echo view('bop/daftarbop', $data); 
        }   
    }
   

    public function deletebop($id_bop){
		$this->BopModel->deleteData($id_bop);

		return redirect()->to(base_url('bop/daftarbop')); 
	}
}

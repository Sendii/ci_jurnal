<?php
namespace App\Controllers;

use App\Models\BahanbakuModel;

class bahanbaku extends BaseController
{
	public function __construct()
    {
        //load kelas BahanbakuModelModel
        $this->BahanbakuModel = new BahanbakuModel();
    }

    /*public function index()
	{

        //cek dulu apakah kondisi form sudah diisi atau belum, kalau belum berarti tidak perlu memanggil fungsi validasi
        if(isset($_POST['kode_bb']) and isset($_POST['nama_bb']) and isset($_POST['harga_bb'])){
            
            $validation =  \Config\Services::validation();
                //di cek dulu apakah data isian memenuhi rules validasi yang dibuat
                if (! $this->validate([
                    'kode_bb' => 'required',    
                    'nama_bb' => 'required',
                    'harga_bb' => 'required'
                    
                ],
                        [   // Errors
                            'kode_bb' => [
                                'required' => 'Kode aset tidak boleh kosong'
                            ],
                            'nama_bb' => [
                                'required' => 'Nama akun tidak boleh kosong'  
                            ],
                            'harga_bb' => [
                                'required' => 'Jenis aset tidak boleh kosong' 
                            ]
                        ]
                ))
                {                
                    //kirim data error ke views, karena ada isian yang tidak sesuai rules
                    echo view('HeaderBootstrap');
                    echo view('SidebarBootstrap');
                    echo view('bahanbaku/Inputbb',[
                        'validation' => $this->validator,
                    ]);

                }
                else
                {
                    //blok ini adalah blok jika sukses, yaitu panggil method insertData()
                    //panggil metod dari model akun untuk diinputkan datanya
                    $hasil = $this->BahanbakuModel->insertData();
                    if($hasil->connID->affected_rows>0){
                        ?>
                        <script type="text/javascript">
                            alert("Sukses ditambahkan");
                        </script>
                        <?php	
                    }
                    $data['bahanbaku'] = $this->BahanbakuModel->getAll();
                    echo view('HeaderBootstrap');
                    echo view('SidebarBootstrap');
                    echo view('bahanbaku/daftarbb', $data);
                }    
        }else{
        //kondisi awal ketika di akses, jadi tidak perlu memanggil validasi
        echo view('HeaderBootstrap');
        echo view('SidebarBootstrap');
        echo view('bahanbaku/Inputbb'); 
	}
}*/

    public function daftarbb(){
        $data['bahan_baku'] = $this->BahanbakuModel->getAll();
        echo view('HeaderBootstrap');
        echo view('SidebarBootstrap');
        echo view('bahanbaku/daftarbb', $data);
    }

    /*public function editbb($id){
        $data['bahanbaku'] = $this->BahanbakuModel->editData($id);
        echo view('HeaderBootstrap');
        echo view('SidebarBootstrap');
        echo view('bahanbaku/editbb', $data);
    }

    public function editbbproses(){
        $id = $_POST['id'];
        $kode_bb = $_POST['kode_bb'];
        $nama_bb = $_POST['nama_bb'];
        $harga_bb = $_POST['harga_bb'];
       
        

        $validation =  \Config\Services::validation();

        if (! $this->validate([
            'kode_bb' => 'required',    
            'nama_bb' => 'required',
            'harga_bb' => 'required'
        ],
                [   // Errors
                    'kode_bb' => [
                        'required' => 'Kode bahanbaku tidak boleh kosong' 
                    ],
                    'nama_bb' => [
                        'required' => 'Nama bahanbaku tidak boleh kosong'
                    ],
                    'harga_bb' => [
                        'required' => 'Jenis bahanbaku tidak boleh kosong'
                    ]
                ]
        ))
        {                
            
            echo view('HeaderBootstrap');
            echo view('SidebarBootstrap');
            echo view('bahanbaku/editbb',[
                'validation' => $this->validator,
                'bahanbaku' => $this->BahanbakuModel->editData($id)
            ]);

        }
        else
        {
            //panggil metod dari model akun untuk diinputkan datanya
            $hasil = $this->BahanbakuModel->updateData();
            if($hasil->connID->affected_rows>0){
                ?>
                <script type="text/javascript">
                    alert("Sukses diupdate");
                </script>
                <?php	
            }
            $data['bahanbaku'] = $this->BahanbakuModel->getAll();
            echo view('HeaderBootstrap');
            echo view('SidebarBootstrap');
            echo view('bahanbaku/daftarbb', $data);
        }    
    }

    public function deletebb($id){
		$this->BahanbakuModel->deleteData($id);

		return redirect()->to(base_url('bahanbaku/daftarbb')); 
	}*/
}
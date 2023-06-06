<?php 
    namespace App\Controllers;
    use App\Models\m_pegawai;

    class C_Pegawai extends BaseController
        {
            public function pegawai()
            {
                $biodata = new M_Pegawai();
                $data = $biodata->getpegawai();
                return view('V_Pegawai', compact('data'));
                
            }

            public function create()
            {   
                return view('V_Create_Pegawai');
            }

            public function store()
            {
                // $validation = \
                

                $data = [
                    'NIP' => $this->request->getPost('NIP'),
                    'Nama' => $this->request->getPost('Nama'),
                    'Gender' => $this->request->getPost('Gender'),
                    'Telp' => $this->request->getPost('Telp'),
                    'Email' => $this->request->getPost('Email'),
                    'Pendidikan' => $this->request->getPost('Pendidikan'),
                ];

                $pegawai = new M_Pegawai();

                $pegawai->tambahData($data);
                return redirect()->to('/pegawai');
            }

        }

?>
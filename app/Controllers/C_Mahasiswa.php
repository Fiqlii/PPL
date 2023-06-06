<?php
namespace App\Controllers;
use App\Models\M_Mahasiswa;
class C_Mahasiswa extends BaseController
{
    protected $M_Mahasiswa;
    public function __construct()
    {
        $this->M_Mahasiswa = new M_Mahasiswa();
    }
    public function index()
    {
        $search = $this->request->getGet('cari');
        if($search){
            $data = $this->M_Mahasiswa->getSearch($search);
        }else{
            $data = $this->M_Mahasiswa->GetData();
        }
        // return view('V_Mahasiswa', $data);
        return view('V_Mahasiswa', compact('data'));
    }
    public function create()
    {
        return view('V_Create_Mahasiswa');
    }
    public function save()
    {
        $data['Nama'] = $this->request->getPost('Nama');
        $data['Nim'] = $this->request->getPost('Nim');
        $data['Umur'] = $this->request->getPost('Umur');
        $this->M_Mahasiswa->saveMahasiswa($data);
        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {
        $this->M_Mahasiswa->delete($id);
        return redirect()->to('/mahasiswa');
    }
    public function edit($Nim)
    {
        // $model = new M_Mahasiswa();
        // $data = $model->Detail($Nim);
        // return view('V_Edit', compact('data'));
        $mahasiswa = new M_Mahasiswa();
        $data['mahasiswa'] = $mahasiswa->Detail($Nim);
        return view('V_Edit', $data);
    }
    public function Detail($Nim)
    {
        // DD($Nim);
        $mahasiswa = $this->M_Mahasiswa->Detail($Nim);
        return view('V_ViewDetail', compact('mahasiswa'));
    }
    public function updated ()
    {
        $data = [
            'Nim' => $this->request->getPost('Nim'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur')
        ];
    
        $this->M_Mahasiswa->updated($data);
        return redirect()->to('/mahasiswa');
    }
    
}
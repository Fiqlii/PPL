<?php 
namespace App\Models;
use CodeIgniter\Model;

class M_Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'NIP';
    protected $allowedFields = ['NIP', 'Nama', 'Gender', 'Telp', 'Email', 'Pendidikan'];

    public function getpegawai()
    {
        $db = db_connect();
        $data = $db->query('SELECT * FROM pegawai');
        return $data->getResultArray();
    }

     public function tambahData($data)
    {
        $db = db_connect();
        $NIM = $data['NIP'];
        $Nama = $data['Nama'];
        $Gender = $data['Gender'];
        $Telp = $data['Telp'];
        $Email = $data['Email'];
        $Pendidikan = $data['Pendidikan'];
        $data = $db->query("INSERT INTO pegawai(NIP, Nama, Gender, Telp, Email, Pendidikan) VALUES ('$NIP', '$Nama', '$Gender', '$Telp', '$Email', '$Pendidikan')");

        return $data;

    }
    public function rules()
    {
        return [
            [
                'field' => 'NIP',
                'label' => 'NIP',
                'rules' => 'required|integer|max_length[12]|min_length[10]|'
            ],
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'required|max_length[255]|min_length[8]|'
            ],
            [
                'field' => 'Gender',
                'label' => 'Gender',
                'rules' => 'required'
            ],
            [
                'field' => 'Telp',
                'label' => 'Telp',
                'rules' => 'required|integer|max_length[25]|min_length[12]|'
            ],
            [
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'required|valid_email|max_length[75]|min_length[12]|'
            ],
            [
                'field' => 'Pendidikan',
                'label' => 'Pendidikan',
                'rules' => 'required|max_length[255]|min_length[8]|'
            ],
        ];
    }

}

?>
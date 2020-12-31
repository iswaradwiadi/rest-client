<?php 
use GuzzleHttp\Client;

class Siswa_model extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-ci/index.php/siswa',
           
         ]);
    }


    public function getAllSiswa()
    {
       
        $response = $this->_client->request('GET', 'siswa', [
            'query' => [
                'X-API-KEY' => '123456'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getSiswaById($id_siswa)
    {
        $response = $this->_client->request('GET', 'siswa', [
            'query' => [
                'X-API-KEY' => '123456',
                'id_siswa' => $id_siswa
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
       
    }


    public function tambahDataSiswa()
    {
   
        $data = [
            
            'id_siswa' =>$this->input->post('id_siswa', true),
            'nama_siswa' =>$this->input->post('nama_siswa', true),
            'nomor_induk' =>$this->input->post('nomor_induk', true),
            'jurusan' =>$this->input->post('jurusan', true),
            'kelas' =>$this->input->post('kelas', true),
            'X-API-KEY' => '123456'
        ];
        $response = $this->_client->request('POST', 'siswa', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

     
    }

    public function hapusDataSiswa($id_sis)
    {
        $response = $this->_client->request('DELETE', 'siswa', [
            'form_params' => [
                'id_sis' => $id_sis,
                'X-API-KEY' => '123456'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
        
        
     
    }

    

    public function ubahDataSiswa()
    {
        $data = [
            'id_siswa' =>$this->input->post('id_siswa', true),
            'nama_siswa' =>$this->input->post('nama_siswa', true),
            'nomor_induk' =>$this->input->post('nomor_induk', true),
            'jurusan' =>$this->input->post('jurusan', true),
            'kelas' =>$this->input->post('kelas', true),
            'X-API-KEY' => '123456'
        ];

        $response = $this->_client->request('PUT', 'siswa', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

       
    }

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_siswa', $keyword);
        $this->db->or_like('nama_siswa', $keyword);
        $this->db->or_like('nomor_induk', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('kelas', $keyword);
        return $this->db->get('siswa')->result_array();
    }
}
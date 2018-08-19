<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model {

	private $table = "tbl_pendaftar";
	private $order_by = "no_daftar";
	private $pktbl = "no_daftar";

	public function all()
	{
		$query = "SELECT * FROM $this->table ORDER BY $this->order_by DESC";
		return $query = $this->db->query($query);
	}

	public function simpan($gambar){
        $data=array(
                    'no_daftar'   		=>  random_string('numeric', 6),
                    'nik' 				=>  $this->input->post('nik'),
                    'nisn' 				=>  $this->input->post('nisn'),
                    'skhun' 			=>  $this->input->post('skhun'),
                    'nama_lengkap'		=>  $this->input->post('nama_lengkap'),
                    'gender' 			=>  $this->input->post('jenis_kelamin'),
                    'tempat_lahir' 		=>  $this->input->post('tmpt_lahir'),
                    'tanggal_lahir' 	=>  $this->input->post('tgl_lahir'),
                    'agama' 			=>  $this->input->post('agama'),
                    'alamat' 			=>  $this->input->post('alamat'),
                    'no_hp' 			=>  $this->input->post('no_hp'),
                    'email' 			=>  $this->input->post('email'),
                    'kewarganegaraan' 	=>  $this->input->post('kewarganegaraan'),
                    'berat_badan' 		=>  $this->input->post('bb'),
                    'tinggi_badan'	 	=>  $this->input->post('tb'),
                    'asal_sekolah'	 	=>  $this->input->post('asal_sekolah'),
                    'tahun_lulus'	 	=>  $this->input->post('tahun_lulus'),
                    'nilai_b_indo' 		=>  $this->input->post('bindo'),
                    'nilai_b_ingg' 		=>  $this->input->post('bingg'),
                    'nilai_mtk' 		=>  $this->input->post('mtk'),
                    'nilai_ipa' 		=>  $this->input->post('ipa'),
                    'photo' 			=>  $gambar,
                    'tgl_daftar' 		=>  date('Y-m-d'),
                    'pilihan_satu' 		=>  $this->input->post('pil1'),
                    'pilihan_dua' 		=>  $this->input->post('pil2')
 				);
        $this->db->insert($this->table,$data);
    }

}

/* End of file Formulir_model.php */
/* Location: ./application/models/Formulir_model.php */
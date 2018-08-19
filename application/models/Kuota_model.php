<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuota_model extends CI_Model {

	private $table = "tbl_kuota_pendaftaran";
	private $order_by = "id_kuota";
	private $pktbl = "id_kuota";

	public function all()
	{
		$query = "SELECT * FROM $this->table ORDER BY $this->order_by DESC";
		return $query = $this->db->query($query);
	}

    public function get_all() 
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'tbl_kuota_pendaftaran');
        $this->db->join ( 'tbl_jurusan', 'tbl_jurusan.id_jurusan = tbl_kuota_pendaftaran.id_jurusan' , 'left' );
        $this->db->join ( 'tbl_fase_pendaftaran', 'tbl_fase_pendaftaran.id_fase = tbl_kuota_pendaftaran.id_fase' , 'left' );
        $this->db->order_by ($this->pktbl, 'DESC');
        $query = $this->db->get();
        return $query;
    }

 //     function get_album_data($album_id) {

 //    $this->db->select ( '*' ); 
 //    $this->db->from ( 'Album' );
 //    $this->db->join ( 'Category', 'Category.cat_id = Album.cat_id' , 'left' );
 //    $this->db->join ( 'Soundtrack', 'Soundtrack.album_id = Album.album_id' , 'left' );
 //    $this->db->where ( 'Album.album_id', $album_id);
 //    $query = $this->db->get ();
 //    return $query->result ();
 // }

	public function simpan(){
        $data=array(
                    'id_fase'   =>  $this->input->post('gelombang_dftr'),
                    'id_jurusan' =>  $this->input->post('jurusan_dftr'),
                    'kuota' =>  $this->input->post('jml_kuota')
 				);
        $this->db->insert($this->table,$data);
    }

    function update(){
        $data=array(
                    'id_fase'   =>  $this->input->post('gelombang_dftr'),
                    'id_jurusan' =>  $this->input->post('jurusan_dftr'),
                    'kuota' =>  $this->input->post('jml_kuota')
 				);
        $this->db->where($this->pktbl,$this->input->post('id'));
        $this->db->update($this->table,$data);
    }
	

}

/* End of file program_keahlian_model.php */
/* Location: ./application/models/program_keahlian_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_keahlian_model extends CI_Model {

	private $table = "tbl_jurusan";
	private $order_by = "id_jurusan";
	private $pktbl = "id_jurusan";

	public function all()
	{
		$query = "SELECT * FROM $this->table ORDER BY $this->order_by DESC";
		return $query = $this->db->query($query);
	}

	public function simpan(){
        $data=array(
                    'jurusan'   =>  $this->input->post('program_keahlian'),
                    'singkatan' =>  $this->input->post('singkatan')
 				);
        $this->db->insert($this->table,$data);
    }

    function valid_skt($skt)
    {
        $query = $this->db->get_where($this->table, array('singkatan' => $skt));
        if ($query->num_rows() > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    function update(){
        $data=array(
                    'jurusan'   =>  $this->input->post('program_keahlian'),
                    'singkatan' =>  $this->input->post('singkatan')
 				);
        $this->db->where($this->pktbl,$this->input->post('id'));
        $this->db->update($this->table,$data);
    }
	

}

/* End of file program_keahlian_model.php */
/* Location: ./application/models/program_keahlian_model.php */
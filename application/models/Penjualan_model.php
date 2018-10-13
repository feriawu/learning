<?php /**
 * 
 */
class Penjualan_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	// public function get_penjualan(){
	// 	$this->db->order_by('id', 'DESC');
	// 	// $this->db->join('kategori', 'kategori.id = barang.kategori_id');
	// 	$query = $this->db->get('barang');
	// 	return $query->result_array();
	// }
} ?>
<?php /**
 * 
 */
class Barang_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_barang($slug = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
				$this->db->limit($limit, $offset);
		}

		if($slug === FALSE){
				$this->db->order_by('id', 'DESC');
				// $this->db->join('kategori', 'kategori.id = barang.kategori_id');
				$query = $this->db->get('barang');
				return $query->result_array();
			}

			$query = $this->db->get_where('barang', array('slug' => $slug));
			return $query->row_array();
	}

} ?>
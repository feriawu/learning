<?php /**
 * 
 */
class Barang_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_barang($slug = FALSE, $limit = FALSE, $offset = FALSE)
	{
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

	public function add_barang($foto)
	{
		$slug = url_title($this->input->post('nama'));

		$data = array(
						'user_id' => 1,
						'nama' => $this->input->post('nama'),
						'foto' => $foto,
						'stok' => $this->input->post('stok'),
						'harga' => $this->input->post('harga'),
						'slug' => $slug
		);

		return $this->db->insert('barang', $data);


	}

	public function delete_barang($id){
		$this->db->where('id', $id);
		$this->db->delete('barang');
		return true;
	}

	public function update_barang($slug){

	}

} ?>
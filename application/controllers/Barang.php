<?php /**
 * 
 */
class Barang extends CI_Controller
{
	
	public function index($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'barang/index/';
		$config['total_rows'] = $this->db->count_all('barang');
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);

		$data['title'] = 'Master Barang';
		$data['barang'] = $this->barang_model->get_barang(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/header');
		$this->load->view('barang/index', $data);
		$this->load->view('templates/header');
	}
} ?>
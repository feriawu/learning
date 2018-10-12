<?php /**
 * 
 */
class Penjualan extends CI_Controller
{
	
	public function index($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'penjualan/index/';
		$config['total_rows'] = $this->db->count_all('penjualan');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');

		// Init Pagination
		$this->pagination->initialize($config);

		$data['title'] = 'Penjualan';
		$data['barang'] = $this->barang_model->get_barang(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/header');
		$this->load->view('penjualan/index', $data);
		$this->load->view('templates/footer');
	}
} ?>
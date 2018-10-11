<?php /**
 * 
 */
class Barang extends CI_Controller
{
	
	public function index($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'barang/index/';
		$config['total_rows'] = $this->db->count_all('barang');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'page-link');

		// Init Pagination
		$this->pagination->initialize($config);

		$data['title'] = 'Master Barang';
		$data['barang'] = $this->barang_model->get_barang(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/header');
		$this->load->view('barang/index', $data);
		$this->load->view('templates/footer');
	}

	private function images_upload(){
			$config['upload_path'] = './assets/img/barang';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$foto = 'nomedia.png';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$foto = $_FILES['userfile']['name'];
			}
	}

	public function add(){
		$data['title'] = 'Add Barang';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('barang/add', $data);
			$this->load->view('templates/footer');
		} else {

			$this->images_upload();

			$this->barang_model->add_barang($foto);

			redirect('barang');
		}
	}

	public function delete($id = NULL){
		$this->barang_model->delete_barang($id);

		$this->session->set_flashdata('barang_deleted', 'Barang Telah Dihapus');
		redirect('barang');
		
	}

	public function edit($slug = NULL){
		$data['title'] = 'Edit Barang';

		$data['barang'] = $this->barang_model->get_barang($slug);

		$this->load->view('templates/header');
		$this->load->view('barang/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($slug = NULL)
	{
		$this->barang_model->update_barang();
		redirect('barang');
	}
} ?>
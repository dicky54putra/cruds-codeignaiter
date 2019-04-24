<?php 

/**
 * 
 */
class Mahasiswa extends CI_COntroller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ( $this->input->post('keyword') ) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = "Form Tambah Mahasiswa";
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');

		// jika mau lebih dari satu rules
		// $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|numeric');

		if ($this->form_validation->run() == FALSE) 
		{
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/tambah');
		$this->load->view('templates/footer');
		}
		else
		{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('hapus', 'Dihapus');
		redirect('mahasiswa');
	}

	public function detail($id)
	{
		$data['judul'] = "Detail Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = "Form Ubah Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');

		// jika mau lebih dari satu rules
		// $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|numeric');

		if ($this->form_validation->run() == FALSE) 
		{
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/ubah', $data);
		$this->load->view('templates/footer');
		}
		else
		{
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('mahasiswa');
		}
	}

}

?>
<?php
class Pengguna extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function index()
	{
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->m_pengguna->get_pengguna_login($kode);
		$x['data'] = $this->m_pengguna->get_all_pengguna();
		$this->load->view('admin/v_pengguna', $x);
	}

	function simpan_pengguna()
	{
		$config['upload_path'] = './assets/images/'; // Path folder for uploaded images
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Allowed image types
		$config['encrypt_name'] = TRUE; // Encrypts the uploaded file name

		$this->upload->initialize($config);

		$nama = $this->input->post('xnama');
		$jenkel = $this->input->post('xjenkel');
		$username = $this->input->post('xusername');
		$password = $this->input->post('xpassword');
		$konfirm_password = $this->input->post('xpassword2');
		$email = $this->input->post('xemail');
		$nohp = $this->input->post('xkontak');
		$level = $this->input->post('xlevel');

		// Check if an image is uploaded
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				// Compress the uploaded image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
			} else {
				// If image upload fails, show a warning message and redirect
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pengguna');
				return;
			}
		} else {
			// If no image is uploaded, set $gambar to NULL
			$gambar = NULL;
		}

		// Check if the password and confirmation password match
		if ($password !== $konfirm_password) {
			echo $this->session->set_flashdata('msg', 'error');
		} else {
			if ($gambar === NULL) {
				// Save user data without an image
				$this->m_pengguna->simpan_pengguna_tanpa_gambar($nama, $jenkel, $username, $password, $email, $nohp, $level);
			} else {
				// Save user data with an uploaded image
				$this->m_pengguna->simpan_pengguna($nama, $jenkel, $username, $password, $email, $nohp, $level, $gambar);
			}
			echo $this->session->set_flashdata('msg', 'success');
		}

		redirect('admin/pengguna');
	}

	function update_pengguna()
	{
		$config['upload_path'] = './assets/images/'; // Path folder for uploaded images
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; // Allowed image types
		$config['encrypt_name'] = TRUE; // Encrypts the uploaded file name

		$this->upload->initialize($config);

		// Check if an image is uploaded
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				// Compress the uploaded image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
			} else {
				// If image upload fails, show a warning message and redirect
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/pengguna');
				return;
			}
		} else {
			// If no image is uploaded, set $gambar to NULL (no change in the image)
			$gambar = NULL;
		}

		$kode = $this->input->post('kode');
		$nama = $this->input->post('xnama');
		$jenkel = $this->input->post('xjenkel');
		$username = $this->input->post('xusername');
		$password = $this->input->post('xpassword');
		$konfirm_password = $this->input->post('xpassword2');
		$email = $this->input->post('xemail');
		$nohp = $this->input->post('xkontak');
		$level = $this->input->post('xlevel');

		// Check if password and confirmation password are empty and match
		if (empty($password) && empty($konfirm_password)) {
			if ($gambar === NULL) {
				// Update user data without changing the password and image
				$this->m_pengguna->update_pengguna_tanpa_pass_dan_gambar($kode, $nama, $jenkel, $username, $email, $nohp, $level);
			} else {
				// Update user data without changing the password but with a new image
				$this->m_pengguna->update_pengguna_tanpa_pass($kode, $nama, $jenkel, $username, $email, $nohp, $level, $gambar);
			}
			echo $this->session->set_flashdata('msg', 'info');
		} elseif ($password === $konfirm_password) {
			// Update user data with a new password and possibly a new image
			$this->m_pengguna->update_pengguna($kode, $nama, $jenkel, $username, $password, $email, $nohp, $level, $gambar);
			echo $this->session->set_flashdata('msg', 'info');
		} else {
			// If the password and confirmation password do not match, show an error message
			echo $this->session->set_flashdata('msg', 'error');
		}

		// Redirect back to the 'admin/pengguna' page after the update process
		redirect('admin/pengguna');
	}


	function hapus_pengguna()
	{
		$kode = $this->input->post('kode');
		$data = $this->m_pengguna->get_pengguna_login($kode);
		$q = $data->row_array();
		$p = $q['pengguna_photo'];
		$path = base_url() . 'assets/images/' . $p;
		delete_files($path);
		$this->m_pengguna->hapus_pengguna($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/pengguna');
	}

	function reset_password()
	{
		$id = $this->uri->segment(4);
		$get = $this->m_pengguna->getusername($id);
		if ($get->num_rows() > 0) {
			$a = $get->row_array();
			$b = $a['pengguna_username'];
		}
		$pass = rand(123456, 999999);
		$this->m_pengguna->resetpass($id, $pass);
		echo $this->session->set_flashdata('msg', 'show-modal');
		echo $this->session->set_flashdata('uname', $b);
		echo $this->session->set_flashdata('upass', $pass);
		redirect('admin/pengguna');
	}

	function reset_pengguna()
	{
		$kode = $this->input->post('kode');
		$password = $this->input->post('xpassword');
		$konfirm_password = $this->input->post('xpassword2');
		if ($password <> $konfirm_password) {
			echo $this->session->set_flashdata('msg', 'error');
			redirect('admin/pengguna');
		} else {
			$this->m_pengguna->update_password($kode, $password);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/pengguna');
		}
	}
}

<?php
class visi_misi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_about');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}

	function index()
	{
		$x['data'] = $this->m_about->get_all_about();
		$this->load->view('depan/v_visi_misi', $x);
	}
}

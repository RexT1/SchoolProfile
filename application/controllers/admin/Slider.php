<?php
class Slider extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_slider');
    }

    function index()
    {
        $x['data'] = $this->m_slidert->get_all_slider();
        $this->load->view('admin/v_slider', $x);
    }

    // function get_edit()
    // {
    //     $kode = $this->uri->segment(4);
    //     $x['data'] = $this->m_about->get_all_about($kode);
    //     $this->load->view('admin/v_edit_about', $x);
    // }

    // function simpan_about()
    // {
    //     $sambutan = $this->input->post('xsambutan');
    //     $visi = $this->input->post('xvisi');
    //     $misi = $this->input->post('xmisi');
    //     $this->m_about->simpan_about($sambutan, $visi, $misi);
    //     echo $this->session->set_flashdata('msg', 'success');
    //     redirect('admin/about');
    // }

    // function update_about()
    // {
    //     $kode = strip_tags($this->input->post('kode'));
    //     $sambutan = $this->input->post('xsambutan');
    //     $visi = $this->input->post('xvisi');
    //     $misi = $this->input->post('xmisi');
    //     $this->m_about->update_about($kode, $sambutan, $visi, $misi);
    //     echo $this->session->set_flashdata('msg', 'info');
    //     redirect('admin/about');
    // }

    // function hapus_about()
    // {
    //     $kode = strip_tags($this->input->post('kode'));
    //     $this->m_about->hapus_about($kode);
    //     echo $this->session->set_flashdata('msg', 'success-hapus');
    //     redirect('admin/about');
    // }
}

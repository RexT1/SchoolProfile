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
        $this->load->model('m_pengguna');
        $this->load->library('upload');
    }


    function index()
    {
        $x['data'] = $this->m_slider->get_all_slider();
        $this->load->view('admin/v_slider', $x);
    }

    function simpan_slider()
    {
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 400;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $judul = strip_tags($this->input->post('xjudul'));
                $kode = $this->session->userdata('idadmin');
                $user = $this->m_pengguna->get_pengguna_login($kode);
                $p = $user->row_array();
                $user_id = $p['pengguna_id'];
                $user_nama = $p['pengguna_nama'];
                $this->m_slider->simpan_slider($judul, $album, $user_id, $user_nama, $gambar);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('admin/slider');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('admin/slider');
            }
        } else {
            redirect('admin/slider');
        }
    }

    function update_slider()
    {

        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 400;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $slider_id = $this->input->post('kode');
                $judul = strip_tags($this->input->post('xjudul'));
                $images = $this->input->post('gambar');
                $path = './assets/images/' . $images;
                unlink($path);
                $kode = $this->session->userdata('idadmin');
                $user = $this->m_pengguna->get_pengguna_login($kode);
                $p = $user->row_array();
                $user_id = $p['pengguna_id'];
                $user_nama = $p['pengguna_nama'];
                $this->m_slider->update_slider($slider_id, $judul, $album, $user_id, $user_nama, $gambar);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('admin/slider');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('admin/slider');
            }
        } else {
            $slider_id = $this->input->post('kode');
            $judul = strip_tags($this->input->post('xjudul'));
            $kode = $this->session->userdata('idadmin');
            $user = $this->m_pengguna->get_pengguna_login($kode);
            $p = $user->row_array();
            $user_id = $p['pengguna_id'];
            $user_nama = $p['pengguna_nama'];
            $this->m_slider->update_slider_tanpa_img($slider_id, $judul, $album, $user_id, $user_nama);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('admin/slider');
        }
    }

    function hapus_slider()
    {
        $kode = $this->input->post('kode');
        $album = $this->input->post('album');
        $gambar = $this->input->post('gambar');
        $path = './assets/images/' . $gambar;
        unlink($path);
        $this->m_slider->hapus_slider($kode, $album);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/slider');
    }
}

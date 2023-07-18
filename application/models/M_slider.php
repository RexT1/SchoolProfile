<?php
class M_slider extends CI_Model
{

    function get_all_slider()
    {
        $hsl = $this->db->query("SELECT tbl_slider.*,DATE_FORMAT(slider_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_slider ORDER BY slider_id DESC");
        return $hsl;
    }

    function simpan_slider($judul, $user_id, $user_nama, $gambar)
    {
        $this->db->trans_start();
        $this->db->query("insert into tbl_slider(slider_judul,slider_pengguna_id,slider_author,slider_gambar) values ('$judul','$user_id','$user_nama','$gambar')");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }

    function update_slider($slider_id, $judul, $user_id, $user_nama, $gambar)
    {
        $hsl = $this->db->query("update tbl_slider set slider_judul='$judul',slider_pengguna_id='$user_id',slider_author='$user_nama',slider_gambar='$gambar' where slider_id='$slider_id'");
        return $hsl;
    }

    function update_slider_tanpa_img($slider_id, $judul, $user_id, $user_nama)
    {
        $hsl = $this->db->query("update tbl_slider set slider_judul='$judul',slider_pengguna_id='$user_id',slider_author='$user_nama' where slider_id='$slider_id'");
        return $hsl;
    }
    function hapus_slider($kode)
    {
        $this->db->trans_start();
        $this->db->query("delete from tbl_slider where slider_id='$kode'");
        // $this->db->query("update tbl_album set album_count=album_count-1 where album_id='$album'");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }

    //Front-End
    function get_slider_home()
    {
        $hsl = $this->db->query("SELECT tbl_slider.*,DATE_FORMAT(slider_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_slider ORDER BY slider_id DESC limit 4");
        return $hsl;
    }

    function slider()
    {
        $hsl = $this->db->query("SELECT * FROM tbl_slider");
        return $hsl;
    }
    
}

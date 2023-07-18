<?php
class M_about extends CI_Model
{

	function get_all_about()
	{
		$hsl = $this->db->query("select * from tbl_about");
		return $hsl;
	}

	function update_about($about_id, $about_sambutan, $about_visi, $about_misi)
	{
		$hsl = $this->db->query("update tbl_about set about_sambutan='$about_sambutan',about_visi='$about_visi',about_misi='$about_misi' where about_id='$about_id'");
		return $hsl;
	}
}

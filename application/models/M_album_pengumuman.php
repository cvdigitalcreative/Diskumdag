<?php 
/**
 * 
 */
class M_album_pengumuman extends CI_Model
{
	function get_album_pengumuman_by_id($kode){
		$hsl=$this->db->query("SELECT tbl_album_pengumuman.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album_pengumuman WHERE album_id='$kode'");
		return $hsl;
	}

	function get_all_album(){
		$hsl=$this->db->query("SELECT tbl_album_pengumuman.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album_pengumuman ORDER BY album_tanggal DESC");
		return $hsl;
	}

	function get_pengumuman_by_slug($kode){
		$hsl=$this->db->query("SELECT tbl_album_pengumuman.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album_pengumuman where tulisan_slug='$kode'");
		return $hsl;
	}

	function get_all_pengumuman_by_tanggal(){
		$hsl=$this->db->query("SELECT tbl_album_pengumuman.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album_pengumuman ORDER BY album_tanggal DESC limit 3 ");
		return $hsl;
	}

	function simpan_album_pengumuman($gambar,$album_id,$album_nama,$user_id,$user_nama){
		$hsl=$this->db->query("INSERT into tbl_album_pengumuman(album_id,album_kategori_id,album_nama,album_gambar,tulisan_pengguna_id,author) values ('','$album_id','$album_nama','$gambar','$user_id','$user_nama')");
		return $hsl;
	}
	function simpan_album_pengumuman_tanpa_gambar($album_id,$album_nama,$user_id,$user_nama){
		$hsl=$this->db->query("INSERT into tbl_album_pengumuman(album_id,album_kategori_id,album_nama,tulisan_pengguna_id,author) values ('','$album_id','$album_nama','$user_id','$user_nama')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_album_pengumuman.*,DATE_FORMAT(album_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_album_pengumuman where album_id='$kode'");
		return $hsl;
	}
	function update_album_pengumuman($gambar,$album_kategori,$album_nama,$user_id,$user_nama,$album_id){
		$hsl=$this->db->query("UPDATE tbl_album_pengumuman set album_kategori_id='$album_kategori',album_nama='$album_nama',album_gambar='$gambar',tulisan_pengguna_id='$user_id',author='$user_nama' where album_id='$album_id'");
		return $hsl;
	}
	function update_album_pengumuman_tanpa_gambar($album_kategori,$album_nama,$user_id,$user_nama,$album_id){
		$hsl=$this->db->query("UPDATE tbl_album_pengumuman set album_kategori_id='$album_kategori',album_nama='$album_nama',tulisan_pengguna_id='$user_id',author='$user_nama'where album_id='$album_id'");
		return $hsl;
	}
	function hapus_tulisan($kode){
		$hsl=$this->db->query("DELETE from tbl_album_pengumuman where album_id='$kode'");
		return $hsl;
	}
}
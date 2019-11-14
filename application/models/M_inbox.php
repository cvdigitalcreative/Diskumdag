<?php  

class M_inbox extends CI_Model{

	function get_all_inbox(){
		$hsl=$this->db->query("SELECT tbl_inbox_reply.*,DATE_FORMAT(inbox_tanggal,'%Y /%d/%m') AS tanggal FROM tbl_inbox_reply ORDER BY DATE_FORMAT(inbox_tanggal,'%Y/%d/%m/') DESC");
		return $hsl;
	}

	function hapus($id){
		$hsl=$this->db->query("DELETE FROM tbl_inbox WHERE inbox_id='$id'");
		return $hsl;
	}
        
	function get_all_inbox_all(){
		$hsl=$this->db->query("SELECT a.inbox_id,b.inbox_pesan,b.inbox_reply FROM tbl_inbox a INNER JOIN tbl_inbox_reply b USING(inbox_id)");
		return $hsl;
	}

	function edit_balasan($id,$balas){
		$hsl=$this->db->query("UPDATE tbl_inbox_reply SET inbox_reply='$balas' WHERE inbox_id='$id'");
		return $hsl;
	}
}

?>
<?php
class M_berita extends CI_Model{

    function get_join_table($slug)
    {
        return $this->db->query("SELECT * FROM tbl_galeri WHERE galeri_slug='$slug'");
    }

}
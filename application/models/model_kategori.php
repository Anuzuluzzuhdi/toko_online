<?php

class Model_kategori extends CI_Model{
    public function data_fruits(){
        return $this->db->get_where("tb_barang",array('kategori'=>'fruits'));
    }

    public function data_flowers(){
        return $this->db->get_where("tb_barang",array('kategori'=>'flowers'));
    }

    public function data_tree(){
        return $this->db->get_where("tb_barang",array('kategori'=>'tree'));
    }

    public function data_vegetables(){
        return $this->db->get_where("tb_barang",array('kategori'=>'vegetables'));
    }
}
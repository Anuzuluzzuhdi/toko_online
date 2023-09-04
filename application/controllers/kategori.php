<?php

class Kategori extends CI_Controller{
    public function fruits()
{
    $data['fruits'] = $this->model_kategori->data_fruits()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('fruits', $data);
    $this->load->view('templates/footer'); 
}

public function flowers()
{
    $data['flowers'] = $this->model_kategori->data_flowers()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('flowers', $data);
    $this->load->view('templates/footer'); 
}

public function tree()
{
    $data['tree'] = $this->model_kategori->data_tree()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('tree', $data);
    $this->load->view('templates/footer'); 
}

public function vegetables()
{
    $data['vegetables'] = $this->model_kategori->data_vegetables()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('vegetables', $data);
    $this->load->view('templates/footer'); 
}

}
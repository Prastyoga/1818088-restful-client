<?php
Class Buku extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/Perpustakaan/index.php/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data
    function index(){
        $data['databuku'] = json_decode($this->curl->simple_get($this->API.'/buku'));
        $data['databuku'] = $data['databuku']->data ;
        $this->load->view('buku',$data);
        
    }
    
    // insert data
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_buku'       =>  $this->input->post('id_buku'),
                'judul_buku'      =>  $this->input->post('judul_buku'),
                'penulis_buku'=>  $this->input->post('penulis_buku'),
                'penerbit_buku'      =>  $this->input->post('penerbit_buku'),
                'thterbit_buku'      =>  $this->input->post('thterbit_buku'));
                
            $insert =  $this->curl->simple_post($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Data Buku Berhasil Dimasukkan');
            }else
            {
               $this->session->set_flashdata('hasil','Data Buku Gagal Dimasukkan');
            }
            redirect('buku');
        }else{
            $this->load->view('tambah');
        }
    }
    
    // edit data
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_buku'            =>  $this->input->post('id_buku'),
                'judul_buku'         =>  $this->input->post('judul_buku'),
                'penulis_buku'       =>  $this->input->post('penulis_buku'),
                'penerbit_buku'      =>  $this->input->post('penerbit_buku'),
                'thterbit_buku'      =>  $this->input->post('thterbit_buku'));

            $update =  $this->curl->simple_put($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Data Buku Berhasil Dimasukkan');
            }else
            {
               $this->session->set_flashdata('hasil','Data Buku Gagal Dimasukkan');
            }
            redirect('buku');
        }else{
            $params =  $this->uri->segment(3);
            $params = $params - 1;
            $data['databuku'] = json_decode($this->curl->simple_get($this->API.'/buku'));
            $data['databuku'] = $data['databuku']->data[$params] ;
            $this->load->view('edit',$data);
        }
    }
    
    // delete data
    function delete($id_buku){
        if(empty($id_buku)){
            redirect('buku');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/buku', array('id_buku'=>$id_buku), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Data Berhasil Dihapus');
            }else
            {
               $this->session->set_flashdata('hasil','Data Gagal Dihapus');
            }
            redirect('buku');
        }
    }
}
<?php

class kasir extends CI_Controller {
   
    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
    }

    public function indexkasir(){
        if ($this->session->userdata('status_log')!= 'Online' && $this->session->userdata('stat') != 'kasir') {
            // redirect('sistem/login');
            echo "<script>alert('Access Denied');history.go(-1);</script>";
        }elseif ($this->session->userdata('status_log')== 'Online' && $this->session->userdata('stat') != 'kasir') {
            // redirect('sistem/logout');
            echo "<script>alert('Access Denied');history.go(-1);</script>";
        }

        $judul['title'] = "indexkasir";
        $id = $this->session->userdata('out');
        $data['title'] = "Starbhak Laundry";
        $data['user'] = $this->modelsistem->get_user();
        $data['c_user'] = $this->modelsistem->count_user();
        $data['member'] = $this->modelsistem->get_member();
        $data['c_member'] = $this->modelsistem->count_member();
        $data['outlet'] = $this->modelsistem->get_outlet();
        $data['c_outlet'] = $this->modelsistem->count_outlet();
        $data['paket'] = $this->modelsistem->get_paket();
        $data['c_paket'] = $this->modelsistem->count_paket(); 
        $data['total_transaksi_harian'] = $this->modelsistem->get_transaksi_day1($id); 
        $data['paket_outlet'] = $this->modelsistem->get_db_paket_outlet($id);
        $this->load->view('index/indexkasir',$data);
    }
    public function homekasir(){
        if ($this->session->userdata('status_log') != 'Online') {
            redirect('sistem/login');
        }

        $judul['title'] = "Home";
        $this->load->view('homekasir',$judul);
        
    }

    ///MEMBER///
    public function memberkasir(){
        if ($this->session->userdata('status_log') != 'Online') {
            redirect('sistem/login');
        }

        $judul['title'] = "member";
        $this->load->view('memberkasir',$judul);
    }

    public function simpan_member_kasir(){
        $this->modelsistem->simpan_member_kasir();
    }

    public function edit_data_member($id){
        $data['member'] = $this->modelsistem->get_member();
        $data['c_member'] = $this->modelsistem->count_member();
        $data['data_edit'] = $this->modelsistem->get_data_edit($id);
        $this->load->view('index/indexkasir',$data);
    }

    public function aksi_edit(){
        $this->modelsistem->edit_db_kasir();
    }

    public function delete_data($id){
        $this->modelsistem->delete_db($id);
        header("Location:".base_url().'kasir/indexkasir/memberkasir');
    }
}

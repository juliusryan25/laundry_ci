<?php

class owner extends CI_Controller {
   
    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
    }

    public function indexowner(){
        if ($this->session->userdata('status_log')!= 'Online' && $this->session->userdata('stat') != 'owner') {
            // redirect('sistem/login');
            echo "<script>alert('Access Denied');history.go(-1);</script>";
        }elseif ($this->session->userdata('status_log')== 'Online' && $this->session->userdata('stat') != 'owner') {
            // redirect('sistem/logout');
            echo "<script>alert('Access Denied');history.go(-1);</script>";
        }

        $judul['title'] = "indexowner";
        $id = $this->session->userdata('out');
        $data['title'] = "Starbhak Laundry";
        $data['user'] = $this->modelsistem->get_user();
        $data['user_online'] = $this->modelsistem->get_user_online($id);
        $data['c_user'] = $this->modelsistem->count_user();
        $data['member'] = $this->modelsistem->get_member();
        $data['c_member'] = $this->modelsistem->count_member();
        $data['outlet'] = $this->modelsistem->get_outlet();
        $data['c_outlet'] = $this->modelsistem->count_outlet();
        $data['paket'] = $this->modelsistem->get_paket();
        $data['c_paket'] = $this->modelsistem->count_paket(); 
        $data['c_transaksi_outlet'] = $this->modelsistem->count_transaksi_outlet($id);
        $data['c_transaksi'] = $this->modelsistem->count_transaksi();
        $data['total_transaksi_harian'] = $this->modelsistem->get_transaksi_harian($id); 
        $data['total_transaksi_hari'] = $this->modelsistem->get_pendapatan_hari(); 
        $data['total_pendapatan'] = $this->modelsistem->get_pendapatan();
        $data['total_lunas'] = $this->modelsistem->get_total_lunas();
        $data['total_pending'] = $this->modelsistem->get_total_pending();
        $this->load->view('index/indexowner',$data);
    }
    public function homeowner(){
        if ($this->session->userdata('status_log') != 'Online') {
            redirect('sistem/login');
        }

        $judul['title'] = "Home";
        $this->load->view('homeowner',$judul);
    }
    public function memberowner(){
        if ($this->session->userdata('status_log') != 'Online') {
            redirect('sistem/login');
        }

        $judul['title'] = "member";
        $this->load->view('memberowner',$judul);
    }
}

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
       
        $data['title'] = "Starbhak Laundry";
        $data['user'] = $this->modelsistem->get_user();
        $data['c_user'] = $this->modelsistem->count_user();
        $data['member'] = $this->modelsistem->get_member();
        $data['c_member'] = $this->modelsistem->count_member();
        $data['outlet'] = $this->modelsistem->get_outlet();
        $data['c_outlet'] = $this->modelsistem->count_outlet();
        $data['paket'] = $this->modelsistem->get_paket();
        $data['c_paket'] = $this->modelsistem->count_paket(); 
        $this->load->view('indexkasir',$data);
    }
    public function homekasir(){
        if ($this->session->userdata('status_log') != 'Online') {
            redirect('sistem/login');
        }

        $judul['title'] = "Home";
        $this->load->view('homekasir',$judul);
    }
    public function memberkasir(){
        if ($this->session->userdata('status_log') != 'Online') {
            redirect('sistem/login');
        }

        $judul['title'] = "member";
        $this->load->view('memberkasir',$judul);
    }
}

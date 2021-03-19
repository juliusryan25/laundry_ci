<?php

    class sistem extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('modelsistem');
        }        
      

        public function index(){
            if ($this->session->userdata('status_log')!= 'Online' && $this->session->userdata('stat') != 'admin') {
                // redirect('sistem/login');               
                // header("Location:".base_url().'sistem/indexkasir/home/'.$this->session->userdata('usernama'));
                echo "<script>alert('Access Denied');history.go(-1);</script>";
            }elseif ($this->session->userdata('status_log')== 'Online' && $this->session->userdata('stat') != 'admin') {
                // redirect('sistem/logout');                
                // header("Location:".base_url().'sistem/indexkasir/home/'.$this->session->userdata('usernama'));
                echo "<script>alert('Access Denied');history.go(-1);</script>";
            }
            $id = $this->session->userdata('out');
            $data['title'] = "Starbhak Laundry";
            $data['user'] = $this->modelsistem->get_user();
            // $data['user_online'] = $this->modelsistem->get_user_online();
            $data['c_user'] = $this->modelsistem->count_user();
            $data['member'] = $this->modelsistem->get_member();
            $data['c_member'] = $this->modelsistem->count_member();
            $data['outlet'] = $this->modelsistem->get_outlet();
            $data['c_outlet'] = $this->modelsistem->count_outlet();
            $data['paket'] = $this->modelsistem->get_paket();
            $data['c_paket'] = $this->modelsistem->count_paket();
            $data['transaksi'] = $this->modelsistem->get_transaksi($id);
            $data['c_transaksi'] = $this->modelsistem->count_transaksi();
            $data['outlet'] = $this->modelsistem->get_db_outlet();
            $data['paket'] = $this->modelsistem->get_db_paket();
            $data['paket_outlet'] = $this->modelsistem->get_db_paket_outlet($id);
            $data['member'] = $this->modelsistem->get_db_member();
            $data['usern'] = $this->modelsistem->get_db_user();
            $data['membern'] = $this->modelsistem->get_db_member(); 
            $data['total_transaksi_harian'] = $this->modelsistem->get_transaksi_day1($id);           
            $this->load->view('index',$data);
        }
       
        ///Login///
        public function login(){
            if($this->session->userdata('status_log')=='Online'){
                redirect('sistem/indexif');
            }

            $judul['title'] = "Login";
            $this->load->view('login',$judul);
        }

        public function aksi_login(){
            $usernames = $this -> input->post('user');
            $passwords = $this -> input->post('pass');


            $where = array (
                'username' => $usernames,
                // 'password' => $passwords
                'password' => password_verify($passwords)
            );
            $cek = $this ->modelsistem->cek_login("user",$where)->num_rows();

            if ($cek > 0) {
                $log_stat = 'Online';
                $this -> modelsistem ->update_login($log_stat,$usernames);

                $data = $this->modelsistem->cek_login("user",$where)->result();

                foreach($data as $datas){
                    $data_session = array(
                        'id' => $datas->id_user,
                        'usernama' => $datas->username, 
                        'mail' => $datas->email, 
                        'notelp' => $datas->no_telp,
                        'out' => $datas->id_outlet, 
                        'stat' => $datas->status, 
                        'gambar' => $datas->image, 
                        'status_log' => $datas->status_login, 
                    );
                }

                $this->session->set_userdata($data_session);
                    if ($this->session->userdata('status_log') == 'Online') {
                        redirect('sistem/indexif');
                        
                    }else{
                        $this->session->sess_destroy();
                        redirect(base_url().'sistem/login');
                    }                            
               
            }
            else {
                echo "<script>alert('Username atau Password salah!');history.go(-1);</script>";
                $this->session->sess_destroy();
               
            }
            
        }

        public function indexif(){
            if ($this->session->userdata('status_log')!= 'Online') {
                redirect('sistem/login');
            }else if($this->session->userdata('status_log')== 'Online'  && $this->session->userdata('stat') == 'admin'){
                redirect('sistem/index/home/'.$this->session->userdata('usernama'));
            }
            else if($this->session->userdata('status_log')== 'Online'  && $this->session->userdata('stat') == 'kasir'){
                redirect('kasir/indexkasir/homekasir/'.$this->session->userdata('usernama'));
            }
            else if($this->session->userdata('status_log')== 'Online'  && $this->session->userdata('stat') == 'owner'){
                redirect('owner/indexowner/homeowner/'.$this->session->userdata('usernama'));
            }           
        }


        ///Logout///
        public function logout(){

            $log_stat="Offline";
            $this->modelsistem->update_login($log_stat,$this->session->userdata('usernama'));
            $this->session->sess_destroy();
            redirect(base_url().'sistem/login');

        }

        public function home(){
            if ($this->session->userdata('status_log') != 'Online') {
                redirect('sistem/login');
            }

            $judul['title'] = "Home";
            $this->load->view('home',$judul);
        }

        ///User///
        public function data_karyawan(){
            $data['title'] = "Data Karyawan";
            $this->load->view('base', $data);
          
        }
        public function simpan_data(){
            $this->modelsistem->simpan_db();
        }
        public function delete_data_user($id){
            $this->modelsistem->delete_user_db($id);
            header("Location:".base_url().'sistem/index/data_karyawan');
        }

        public function edit_data_user($id){
            $data['user'] = $this->modelsistem->get_user();
            $data['c_user'] = $this->modelsistem->count_user();
            $data['data_edit_user'] = $this->modelsistem->get_data_edit_user($id);
            $this->load->view('index',$data);
        }

        public function aksi_edit_user(){
            $this->modelsistem->edit_user_db();
        }

        public function preview_data_user(){
            $data['user'] = $this->modelsistem->get_user();
            $data['c_user'] = $this->modelsistem->count_user();
            $this->load->view('pdf_datauser_priview',$data);
        }

        public function cetakDataUser_pdf(){
            ob_start();

            //butuh view untuk load tablenya
            $data['c_user']= $this->modelsistem->count_user();
            $data['user']= $this->modelsistem->get_user();
            $this->load->view('cetak/pdf_datauser_priview',$data);

            $html = ob_get_contents();
            ob_end_clean();
    
            //folder asset
            require'./assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
            $pdf->WriteHTML($html);

            //Nama File
            $pdf->Output('Data_User_'.date('d-m-Y').'.pdf','D');

        }

        public function cetakDataUser_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_User.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $data['user']=$this->modelsistem->get_user();
            $this->load->view('cetak/excel_datauser_preview',$data);

        }

        ///member///
        public function member(){
            $judul['title'] = "Member";
            $this->load->view('member',$judul);
        }

        public function simpan_member(){
            $this->modelsistem->simpan_member();
        }        

        public function delete_data($id){
            $this->modelsistem->delete_db($id);
            header("Location:".base_url().'sistem/index/member1');
        }

        public function edit_data_member($id){
            $data['member'] = $this->modelsistem->get_member();
            $data['c_member'] = $this->modelsistem->count_member();
            $data['data_edit'] = $this->modelsistem->get_data_edit($id);
            $this->load->view('index',$data);
        }

        public function aksi_edit(){
            $this->modelsistem->edit_db();
        }

        public function cetakDataMember_pdf(){
            ob_start();

            //butuh view untuk load tablenya
            $data['c_member']= $this->modelsistem->count_member();
            $data['member']= $this->modelsistem->get_member();
            $this->load->view('cetak/pdf_datamember_preview',$data);

            $html = ob_get_contents();
            ob_end_clean();
    
            //folder asset
            require'./assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
            $pdf->WriteHTML($html);

            //Nama File
            $pdf->Output('Data_Member_'.date('d-m-Y').'.pdf','D');

        }

        public function cetakDataMember_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Member.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $data['member']=$this->modelsistem->get_member();
            $this->load->view('cetak/excel_datamember_preview',$data);

        }


        ///outlet///
        public function outlet(){
            $judul['title'] = "Outlet";
            $this->load->view('Outlet',$judul);
        }

        public function simpan_data_outlet(){
            $this->modelsistem->simpan_outlet();
        }

        public function delete_outlet($id_outlet){
            $this->modelsistem->delete_outlet($id_outlet);
            header("Location:".base_url().'sistem/index/outlet');
        }

        public function edit_outlet($id_outlet){
            $judul['title'] = "Edit Outlet";
            $data['outlet'] = $this->modelsistem->get_member();
            $data['c_outlet'] = $this->modelsistem->count_member();
            $data['data_edit_outlet'] = $this->modelsistem->get_data_edit_outlet($id_outlet);
            $this->load->view('index',$data,$judul);
        }

        public function aksi_edit_outlet(){
            $this->modelsistem->edit_db_outlet();
        }

        public function cetakDataOutlet_pdf(){
            ob_start();

            //butuh view untuk load tablenya
            $data['c_outlet']= $this->modelsistem->count_outlet();
            $data['outlet']= $this->modelsistem->get_outlet();
            $this->load->view('cetak/pdf_dataoutlet_preview',$data);

            $html = ob_get_contents();
            ob_end_clean();
    
            //folder asset
            require'./assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
            $pdf->WriteHTML($html);

            //Nama File
            $pdf->Output('Data_Outlet_'.date('d-m-Y').'.pdf','D');

        }

        public function cetakDataOutlet_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Outlet.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $data['outlet']=$this->modelsistem->get_outlet();
            $this->load->view('cetak/excel_dataoutlet_preview',$data);

        }



          ///paket///
          public function paket(){
            $judul['title'] = "paket";
            $this->load->view('paket',$judul);
        }

        public function simpan_data_paket(){
            $this->modelsistem->simpan_paket();
        }

        public function delete_paket($id_paket){
            $this->modelsistem->delete_paket($id_paket);
            header("Location:".base_url().'sistem/index/paket');
        }

        public function edit_paket($id_paket){
           
            $data['paket'] = $this->modelsistem->get_paket();
            $data['c_paket'] = $this->modelsistem->count_paket();
            $data['data_edit_paket'] = $this->modelsistem->get_data_edit_paket($id_paket);
            $this->load->view('index',$data);
        }

        public function aksi_edit_paket(){
            $this->modelsistem->edit_db_paket();
        }
      
        public function cetakDataPackage_pdf(){
            ob_start();

            //butuh view untuk load tablenya
            $data['c_paket']= $this->modelsistem->count_paket();
            $data['paket']= $this->modelsistem->get_paket();
            $this->load->view('cetak/pdf_datapaket_preview',$data);

            $html = ob_get_contents();
            ob_end_clean();
    
            //folder asset
            require'./assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
            $pdf->WriteHTML($html);

            //Nama File
            $pdf->Output('Data_Package_'.date('d-m-Y').'.pdf','D');

        }

        public function cetakDataPackage_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Package.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $data['paket']=$this->modelsistem->get_paket();
            $this->load->view('cetak/excel_datapaket_preview',$data);

        }
        //report//
        public function report(){
            $judul['title'] = "report";
            $this->load->view('report',$judul);
        }

          ///Transaksi///
          public function transaksi(){
            $judul['title'] = "Transaksi";
           $this->load->view('transaksi',$judul);
        }

        function ambildata(){
            $id = $this->session->userdata('out');
            $data_transaksi = $this->modelsistem->get_transaksi($id);
            echo json_encode($data_transaksi); 
                        
        }
        function transaksi_day(){
            $id = $this->session->userdata('out');
            $data_transaksi_day = $this->modelsistem->get_transaksi_day($id);
            echo json_encode($data_transaksi_day);             
            
        }
        function transaksi_day1(){
            $id = $this->session->userdata('out');
            $data_transaksi_day = $this->modelsistem->get_transaksi_harian1($id);
            echo json_encode($data_transaksi_day);             
            
        }
        function transaksi_outlet(){
            $id = $this->session->userdata('out');
            $data_transaksi_outlet = $this->modelsistem->get_transaksi_outlet($id);
            echo json_encode($data_transaksi_outlet);             
            
        }

        function get_data_paket(){
            $id=$this->input->post('id_paket',true);
            // $where=array('id_paket'=>$id);                     
            $data_pilih_paket = $this->modelsistem->get_data_paket1($id)->result();
            echo json_encode($data_pilih_paket);
        }

         function tambahtransaksi(){
            $id_outlet = $this->input->post('id_outlet');
            $id_member = $this->input->post('id_member');
            $keterangan = $this->input->post('keterangan');
            $qty = $this->input->post('qty');
            $nama_paket = $this->input->post('nama_paket');
            $tgl_order = $this->input->post('tgl_order');
            $tgl_bayar = $this->input->post('tgl_bayar');
            $harga = $this->input->post('harga');
            $diskon = $this->input->post('diskon');
            $pajak = $this->input->post('pajak');
            $status = $this->input->post('status_order');
            $total = $this->input->post('total');
            $uang_bayar = $this->input->post('uang_bayar');
            $kembalian = $this->input->post('kembalian');
            $status_bayar = $this->input->post('status_bayar');
            $id_user = $this->input->post('id_user');
            
            if ($id_member=='') {
                $result['pesan']="member harus disi";
            }
            elseif ($keterangan=='') {
                $result['pesan']="keterangan harus disi";
            }
            elseif ($qty=='') {
                $result['pesan']="paket harus disi";
            }
            elseif ($nama_paket=='') {
                $result['pesan']="paket harus disi";
            }
            elseif ($uang_bayar=='') {
                $result['pesan']="uang harus disi minimal 0";
            }
            elseif ($tgl_order=='') {
                $result['pesan']="tanggal order harus disi";
            }
            elseif ($tgl_bayar=='') {
                $result['pesan']="tanggal bayar harus disi";
            }
            
            elseif ($status=='') {
                $result['pesan']="status order harus disi";
            }
            elseif ($status_bayar=='') {
                $result['pesan']="status bayar harus disi";
            }else {
                $result['pesan']="";

                $data=array(
                    'id_outlet'=>$id_outlet,
                    'id_member'=>$id_member,
                    'keterangan'=>$keterangan,
                    'qty'=>$qty,
                    'nama_paket'=>$nama_paket,
                    'tgl_order'=>$tgl_order,
                    'tgl_bayar'=>$tgl_bayar,
                    'harga'=>$harga,
                    'diskon'=>$diskon,
                    'pajak'=>$pajak,
                    'status'=>$status,
                    'total'=>$total,
                    'uang_bayar'=>$uang_bayar,
                    'kembalian'=>$kembalian,
                    'status_bayar'=>$status_bayar,
                    'id_user'=>$id_user

                );
                $this->modelsistem->tambahtransaksi($data,'tb_transaksi');

            }

            echo json_encode($result);
             
         }


         function hapus_transaksi(){
            $id=$this->input->post('id');
            $where=array('id_transaksi'=>$id);
            $this->modelsistem->hapus_transaksi($where,'tb_transaksi');
         }

         function ambilId(){
            $id=$this->input->post('id');
            $where=array('id_transaksi'=>$id);
            $data_transaksi = $this->modelsistem->ambilId('tb_transaksi',$where)->result();
            echo json_encode($data_transaksi);
        }

        function ubahdata(){
            $id_transaksi = $this->input->post('id_transaksi');
            $id_outlet = $this->input->post('id_outlet');
            $id_member = $this->input->post('id_member');
            $keterangan = $this->input->post('keterangan');
            $qty = $this->input->post('qty');
            $nama_paket = $this->input->post('nama_paket');
            $tgl_order = $this->input->post('tgl_order');
            $tgl_bayar = $this->input->post('tgl_bayar');
            $harga = $this->input->post('harga');
            $diskon = $this->input->post('diskon');
            $pajak = $this->input->post('pajak');
            $status = $this->input->post('status_order');
            $total = $this->input->post('total');
            $uang_bayar = $this->input->post('uang_bayar');
            $kembalian = $this->input->post('kembalian');
            $status_bayar = $this->input->post('status_bayar');
            $id_user = $this->input->post('id_user');
            
            if ($id_member=='') {
                $result['pesan']="member harus disi";
            }
            elseif ($keterangan=='') {
                $result['pesan']="keterangan harus disi";
            }
            elseif ($qty=='') {
                $result['pesan']="paket harus disi";
            }
            elseif ($nama_paket=='') {
                $result['pesan']="paket harus disi";
            }
            elseif ($uang_bayar=='') {
                $result['pesan']="uang harus disi minimal 0";
            }
            elseif ($tgl_order=='') {
                $result['pesan']="tanggal order harus disi";
            }
            elseif ($tgl_bayar=='') {
                $result['pesan']="tanggal bayar harus disi";
            }            
            elseif ($status=='') {
                $result['pesan']="status order harus disi";
            }
            elseif ($status_bayar=='') {
                $result['pesan']="status bayar harus disi";
            }else {
                $result['pesan']="";
                $where = array('id_transaksi'=>$id_transaksi);
                $data=array(
                    'id_transaksi'=>$id_transaksi,
                    'id_outlet'=>$id_outlet,
                    'id_member'=>$id_member,
                    'keterangan'=>$keterangan,
                    'qty'=>$qty,
                    'nama_paket'=>$nama_paket,
                    'tgl_order'=>$tgl_order,
                    'tgl_bayar'=>$tgl_bayar,
                    'harga'=>$harga,
                    'diskon'=>$diskon,
                    'pajak'=>$pajak,
                    'status'=>$status,
                    'total'=>$total,
                    'uang_bayar'=>$uang_bayar,
                    'kembalian'=>$kembalian,
                    'status_bayar'=>$status_bayar,
                    'id_user'=>$id_user

                );
                $this->modelsistem->updatetransaksi($where,$data,'tb_transaksi');

            }

            echo json_encode($result);
             
         }

         public function cetakDataTransaksi_pdf(){
            ob_start();

            //butuh view untuk load tablenya
            $data['c_transaksi']= $this->modelsistem->count_transaksi();
            $data['transaksi']= $this->modelsistem->get_transaksi();
            $this->load->view('cetak/pdf_datatransaksi_preview',$data);

            $html = ob_get_contents();
            ob_end_clean();
    
            //folder asset
            require'./assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
            $pdf->WriteHTML($html);

            //Nama File
            $pdf->Output('Data_Transaksi_'.date('d-m-Y').'.pdf','D');

        }

        public function cetakStruk_pdf(){
            ob_start();

            $id=$this->input->post('id');
            $where=array('id_transaksi'=>$id);

            //butuh view untuk load tablenya
            $data['c_transaksi']= $this->modelsistem->count_transaksi();
            $data['transaksi']= $this->modelsistem->get_transaksi_struk($id);
            $this->load->view('cetak/pdf_struk',$data);

            $html = ob_get_contents();
            ob_end_clean();
    
            //folder asset
            require'./assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
            $pdf->WriteHTML($html);

            //Nama File
            $pdf->Output('Data_Transaksi_'.date('d-m-Y').'.pdf','D');

        }

        public function cetakDataTransaksi_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Transaksi.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $id = $this->session->userdata('out');

            $data['transaksi']=$this->modelsistem->get_transaksi($id);
            $this->load->view('cetak/excel_datatransaksi_preview',$data);

        }
        public function cetakDataTransaksiDay_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Transaksi.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $id = $this->session->userdata('out');

            $data['transaksi']=$this->modelsistem->get_transaksi_day($id);
            $this->load->view('cetak/excel_datatransaksi_preview',$data);

        }
        public function cetakDataTransaksiDay_excel_owner(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Transaksi.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $id = $this->session->userdata('out');

            $data['transaksi']=$this->modelsistem->get_transaksi_harian1($id);
            $this->load->view('cetak/excel_datatransaksi_preview',$data);

        }
        public function cetakDataTransaksiOutlet_excel(){
            header('Content-Type: application / vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="Data_Transaksi.xls"');
            //namafilenya//
            header('Cache-Control: max-age=0');

            $id = $this->session->userdata('out');

            $data['transaksi']=$this->modelsistem->get_transaksi_outlet($id);
            $this->load->view('cetak/excel_datatransaksi_preview',$data);

        }


    }
    
    
    

?>
<?php
Class modelsistem extends CI_Model{

    ///Login///
    public function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    public function update_login($log_stat,$usernames){
        $this->db->set('status_login',$log_stat);
        $this->db->where('username',$usernames);
        $this->db->update('user');
    }

    ///Data Karyawan///

    public function simpan_db(){
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '2048000';
        $config['width'] = '300';
        $config['height'] = '300';  
        $config['file_name'] = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $data = $this->upload->data();

        $data = array(
            'id_user' => "",
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('telepon'),
            'password' => $this->input->post('password'),
            'id_outlet' => $this->input->post('id_outlet'),
            'status' => $this->input->post('status'),
            'image' => $data['file_name']
        );

        $this->db->insert('user', $data);
        header("Location:".base_url().'sistem/index/data_karyawan');
    }

        public function get_user(){
            $data = $this->db->get('user');
            return $data->result();
        }

        public function count_user(){
            $data = $this->db->get('user');
            return $data->num_rows();
        }
        public function get_db_outlet(){
			$data = $this->db->get("tb_outlet");
			return $data->result();
		}

        public function delete_user_db($id){
            $this->db->delete('user',array('id_user'=> $id));   
        }

        public function get_data_edit_user($id){
            $data = $this->db->query("SELECT * FROM user where id_user='$id'");
            return $data->result();
        }
    
        public function edit_user_db(){
    
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '2048000';
        $config['file_name'] = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $data = $this->upload->data();

        $id = $this->input->post('id');
        $data = array(
            
            'id_user' => "$id",
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('telepon'),
            'id_outlet' => $this->input->post('id_outlet'),
            'password' => $this->input->post('password'),
            'status' => $this->input->post('status'),
            'image' => $data['file_name']
        );
    
            $this->db->where('id_user',$id);
            $this->db->update('user',$data);
            header("Location:".base_url().'sistem/index/data_karyawan');
    
        }

        


    ///MEMBER///

    public function simpan_member(){

        $data_member = array(
            'id_member' => "",
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jeniskelamin'),
            'tlp' => $this->input->post('telepon')

        );

        $this->db->insert('tb_member', $data_member);
        header("Location:".base_url().'sistem/index/member1');
    }

    public function get_member(){
        $data = $this->db->get('tb_member');
        return $data->result();
    }
    
    public function count_member(){
        $data = $this->db->get('tb_member');
        return $data->num_rows();
    }
   
    public function delete_db($id){
        $this->db->delete('tb_member',array('id_member'=> $id));   
    }

    public function get_data_edit($id){
        $data = $this->db->query("SELECT * FROM tb_member where id_member='$id'");
        return $data->result();
    }

    public function edit_db(){

        $id = $this->input->post('id');
        $data = array(
            'id_member' => "$id",
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jeniskelamin'),
            'tlp' => $this->input->post('telepon')
            
        );   

        $this->db->where('id_member',$id);
        $this->db->update('tb_member',$data);
        header("Location:".base_url().'sistem/index/member1');

    }

    ///Outlet///

    public function simpan_outlet(){
    $data_outlet = array(
        'id_outlet' => "",
        'nama' => $this->input->post('namaout'),
        'alamat' => $this->input->post('alamat'),
        'tlp' => $this->input->post('telepon')

    );

    $this->db->insert('tb_outlet', $data_outlet);
    header("Location:".base_url().'sistem/index/outlet');
    }

    public function get_outlet(){
        $data = $this->db->get('tb_outlet');
        return $data->result();
    }

    public function count_outlet(){
        $data = $this->db->get('tb_outlet');
        return $data->num_rows();
    }

    public function delete_outlet($id_outlet){
        $this->db->delete('tb_outlet',array('id_outlet'=> $id_outlet));   
    }

    public function get_data_edit_outlet($id_outlet){
        $data = $this->db->query("SELECT * FROM tb_outlet where id_outlet='$id_outlet'");
        return $data->result();
    }

    public function edit_db_outlet(){

        $id_outlet = $this->input->post('id_outlet');
        $data = array(
            'id_outlet' => "$id_outlet",
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tlp' => $this->input->post('telepon')
            
        );   

        $this->db->where('id_outlet',$id_outlet);
        $this->db->update('tb_outlet',$data);
        header("Location:".base_url().'sistem/index/outlet');


}
 ///Paket///

 public function simpan_paket(){
    $data_paket = array(
        'id_paket' => "",
        'id_outlet' => $this->input->post('idout'),
        'jenis' => $this->input->post('jenis'),
        'nama_paket' => $this->input->post('nama_paket'),
        'harga' => $this->input->post('harga'),
        'diskon' => $this->input->post('diskon')

    );

    $this->db->insert('tb_paket', $data_paket);
    header("Location:".base_url().'sistem/index/paket');
    }

    public function get_paket(){
        $data = $this->db->get('tb_paket');
        return $data->result();
    }

    public function count_paket(){
        $data = $this->db->get('tb_paket');
        return $data->num_rows();
    }

    public function delete_paket($id_paket){
        $this->db->delete('tb_paket',array('id_paket'=> $id_paket));   
    }

    public function get_data_edit_paket($id_paket){
        $data = $this->db->query("SELECT * FROM tb_paket where id_paket='$id_paket'");
        return $data->result();
    }

    public function edit_db_paket(){

        $id_paket = $this->input->post('id_paket');
        $data = array(
            'id_paket' => "$id_paket",
            'id_outlet' => $this->input->post('idout'),
            'jenis' => $this->input->post('jenis'),
            'nama_paket' => $this->input->post('nama_paket'),
            'harga' => $this->input->post('harga'),
            'diskon' => $this->input->post('diskon')
    
        );
    

        $this->db->where('id_paket',$id_paket);
        $this->db->update('tb_paket',$data);
        header("Location:".base_url().'sistem/index/paket');


}
    ////transaksi////
    public function get_transaksi(){
        $data = $this->db->get('tb_transaksi');
        return $data->result();
    }

    public function count_transaksi(){
        $data = $this->db->get('tb_transaksi');
        return $data->num_rows();
    }
    public function get_transaksi_harian($id){
        $data = $this->db->query("SELECT * FROM tb_transaksi where id_outlet='$id' AND tgl_order=DATE(NOW())");
        return $data->num_rows();
    }
    public function get_data_paket1($table,$where){
        // $data = $this->db->query("SELECT * FROM $table where id_paket='$where'");
        // return $data->result();
        return $this->db->get_where($table,$where);
    }
    public function get_db_user(){
        $data = $this->db->get("user");
        return $data->result();
    }
    public function get_db_member(){
        $data = $this->db->get("tb_member");
        return $data->result();
   }
   public function get_db_paket(){
    $data = $this->db->get('tb_paket');
    return $data->result();
   }
   public function get_id_paket($id){
    $data = $this->db->query("SELECT * FROM tb_paket where id_paket='$id'");
    // $query = $this->db->get_where("tb_paket", ['id_paket' => $id]);
    return $data;
   }

   public function tambahtransaksi($data,$table){
        $this->db->insert($table,$data);
   }

   public function hapus_transaksi($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
   }

   public function ambilId($table,$where){
   return $this->db->get_where($table,$where);
    
   }
   public function updatetransaksi($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
     
    }
   
}
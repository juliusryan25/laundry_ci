<main role="main" class="container-fluid">
<title>home</title>
<div class="row" style="margin-top: 10%;padding:10px">
          <div class="col-sm-offset-2 col-sm-2"></div>
            <div class="col-sm-8">
            <div class="card mb-0" style="max-width:100%;height:100%">
              <div class="row no-gutters">
                <div class="col-md-4">
                 <center>  <img src="<?php echo base_url().'assets/'.$this->session->userdata('gambar'); ?>" class="card-img" style="width:250px;padding:5px;border-radius:10px;margin:3%" class="card-img" alt="..."></center>
                </div>
                <div class="col-md-8">
                  <div class="card-body mt-0">
                    <center>
                    <!-- DI ISI NAMA PEGAWAI YANG LOGIN -->
                    <h2 class="card-title"><?php echo $this->session->userdata('usernama'); ?></h2>
                    <p class="card-text">Status : <?php echo $this->session->userdata('stat'); ?></p>
                    <p class="card-text">Outlet : <?php echo $this->session->userdata('out'); ?></p>
                    <p class="card-text"><small class="text-muted">Login Succes</small></p>
                    <a href="<?php echo site_url('sistem/logout'); ?>"><button type="button" class="btn btn-outline-primary">Logout</button></a>
                    </center> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-offset-2 col-sm-2"></div>
          </div>
        </div>
</main>
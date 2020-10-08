<main role="main" class="container-fluid" style="margin-top: 0%;">
<div class="row">
            <!-- <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: #FF1493;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 2.5%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,#FF1493);">
                        <div class="card-body" style="margin: 2%;">
                          <center>
                          <h4 class="card-title" style="color: white;">Outlet</h4>
                          <form action="<?php echo site_url('sistem/simpan_data_outlet');?>" method="post" enctype="multipart/form-data" >
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">name</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"  style="width: 115px;">Nama Outlet</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="namaout" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">tlp</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"  style="width: 115px;">No.Telp</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                           <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">alamat</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 101.5px;">Alamat</div>
                              </div>
                              <textarea name="alamat" id="" cols="90" style="border-radius:5px" rows="5"></textarea>
                            </div>
                          </div>
                          
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
                         </center>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div> -->
        </div>
        <div class="row">
        &nbsp&nbsp&nbsp&nbsp<h3>Outlet</h3>
            <div class="col-md-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add" > <i class="far fa-building"></i> &nbsp+ </butttom>
            </div>

           
          <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <td>ID_Outlet</td>
                  <td>Nama_Outlet</td>
                  <td>Alamat</td>
                  <td>No.Telp</td>
                  <td>Action</td>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              if ($c_outlet>0){
                foreach ($outlet as $datas){
              ?>
               <tr>
                  <td style="width:140px" ><?php echo $datas->id_outlet;?></td>
                  <td><?php echo $datas->nama;?></td>
                  <td><?php echo $datas->alamat;?></td>
                  <td><?php echo $datas->tlp;?></td>      
                  <td style="width:140px">
                  <center>
                  <div class="row">
                  <div class="col-12">
                    <a href="<?php echo site_url('sistem/edit_outlet/'.$datas->id_outlet); ?>"> <button class=" btn btn-success btn-sm edit_data" style="width: 80%;"><i class="fas fa-edit"></i> Edit</button></a>
                  </div>
                    <div class="col-12 mt-1" >
                      <button class=" btn btn-danger btn-sm edit_data"  data-toggle="modal" data-target="#hapus" style="width: 80%;"><i class="fas fa-trash"></i> Delete</button>
                    </div>
                  </div>
                  </center>
                  </td>         
                </tr>
                <?php }
                } else {
                  ?>
                  <tr>
                    <td colspan="8"><center> Data Outlet kosong!</center></td>
                  </tr> 
                  <?php
                }
                  ?>
              </tbody>
          </div>
        </div>
        </div>
        
        <!-- modal -->

  <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:red;color:white">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="text-align:center">
      <center>  <img src="<?php echo base_url(); ?>assets/image/seru.png" style="width:150px" class="card-img" alt="..."></center><br>
                    Are You Sure ? .....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="<?php echo site_url('sistem/delete_outlet/'.$datas->id_outlet); ?>"> <button type="button" class="btn btn-primary">Yes</button></a>
      </div>
    </div>
  </div>
</div>

        <div class="modal fade " id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-primary" style="color:white">
                      <h5 class="modal-title" id="exampleModalLabel">ADD OUTLET</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="row">
                    <div class="modal-body " style="text-align:center">
                    <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: DodgerBlue;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 3%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,DodgerBlue);">
                        <div class="card-body" style="margin: 2%;">
                        <div class="row">
                        <div class="col-sm-12">
                          <center>
                          <h4 class="card-title " style="color: white;">Outlet</h4></div>
                          <form action="<?php echo site_url('sistem/simpan_data_outlet');?>" method="post" enctype="multipart/form-data" >
                          <div class="col-12">
                            <label class="sr-only" for="inlineFormInputGroup">name</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"  style="width: 115px;">Nama Outlet</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="namaout" placeholder="">
                            </div>
                          </div>
                          <div class="col-12">
                            <label class="sr-only" for="inlineFormInputGroup">tlp</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"  style="width: 115px;">No.Telp</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                           <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">alamat</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 115px;">Alamat</div>
                              </div>
                              <textarea name="alamat" id="" cols="66.9" style="border-radius:5px" rows="5"></textarea>
                            </div>
                        
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
                         </center>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        </div>  

  
              
    </main>
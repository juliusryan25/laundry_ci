<main role="main" class="container-fluid" style="margin-top: 7%;>
<div class="row">
            <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: #FF1493;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 2.5%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,#FF1493);">
                        <div class="card-body" style="margin: 2%;">
                        <div class="row">
                        <div class="col-sm-12">
                          <center>
                          <h4 class="card-title " style="color: white;">Member</h4></div>
                          <form action="<?php echo site_url('sistem/simpan_member');?>" method="post" enctype="multipart/form-data" >
                        
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Nama</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Nama</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="nama" placeholder="">
                            </div>
                          </div>
                         
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">no telpon</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >No.Telp</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">alamat</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Alamat</div>
                              </div>
                              <textarea name="alamat" id="" cols="90" style="border-radius:5px" rows="5"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Jenis</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text" style="width: 97px; text-align: center;" for="inputGroupSelect01">Gender</label>
                            </div>
                            <select class="custom-select" name="jeniskelamin" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="L">Laki-laki</option>
                              <option value="P">Perempuan</option>
                              
                            </select>
                          </div> 
                          </div>
                          </div>
                       
                          <center>
                         
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
                         </center>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Alamat</td>
                  <td>No.Telepon</td>
                  <td>Gender</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
              <?php
              if ($c_member>0){
                foreach ($member as $datas){
              ?>
               <tr>
                  <td><?php echo $datas->id_member;?></td>
                  <td><?php echo $datas->nama;?></td>
                  <td><?php echo $datas->alamat;?></td>
                  <td><?php echo $datas->tlp;?></td>
                  <td><?php echo $datas->jenis_kelamin;?></td>
             
                
                  <td style="width:140px">
                  <div class="col-12">
                    <a href="<?php echo site_url('sistem/edit_data_member/'.$datas->id_member); ?>"><button  class=" btn btn-success btn-sm edit_data" style="width: 100%;" ><i class="fas fa-edit"></i>  Edit </button></a>
                    </div>
                    <div class="col-12 mt-2" >
                   <button data-toggle="modal" data-target="#exampleModal" class=" btn btn-danger btn-sm hapus_data" style="width: 100%;" ><i class="fas fa-trash"></i>  Delete </button>
                    </div>
                  </td>
                </tr>
                <?php }
                } else {
                  ?>
                  <tr>
                    <td colspan="8"><center> Data user kosong!</center></td>
                  </tr> 
                  <?php
                }
                  ?>
              </tbody>
          </div>
        </div>
        </div>
        
        <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body " style="text-align:center">
                    Are You Sure ? .....
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?php echo site_url('sistem/delete_data/'.$datas->id_member); ?>"> <button type="button" class="btn btn-primary">Yes</button></a>
                    </div>
                  </div>
                </div>
              </div>
    </main>
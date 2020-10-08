<main role="main" class="container-fluid" ;>
          <div class="row">
            <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: dodgerblue;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 9%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,dodgerblue);">
                        <div class="card-body" style="margin: 2%;">
                          <center>
                          <h4 class="card-title" style="color: white;">Edit Register</h4>

                          <form action="<?php echo site_url('sistem/aksi_edit_user');?>" method="post" enctype="multipart/form-data" >

                        <?php
                        foreach($data_edit_user as $e):?>
                         <input type="hidden" name="id" value="<?php echo $e->id_user;?>">
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">Username</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="username" value="<?php echo $e->username; ?>" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">email</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Email</div>
                              </div>
                              <input type="email" value="<?php echo $e->email; ?>" class="form-control" id="inlineFormInputGroup" name="email" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">no telpon</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >No.Telp</div>
                              </div>
                              <input type="text" value="<?php echo $e->no_telp; ?>" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">id_outlet</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >Id_Outlet</div>
                              </div>
                              <input type="text" readonly value="<?php echo $e->id_outlet; ?>" class="form-control" id="inlineFormInputGroup" name="id_outlet" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px; text-align: center;">Password</div>
                              </div>
                              <input type="password" value="<?php echo $e->password; ?>" class="form-control" id="inlineFormInputGroup" name="password" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Status</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text" style="width: 97px; text-align: center;" for="inputGroupSelect01">Status</label>
                            </div>
                            <select class="custom-select" name="status" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="Admin">Admin</option>
                              <option value="Kasir">Kasir</option>
                              <option value="Owner">Owner</option>
                            </select>
                          </div>  
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" style="width: 97px;" id="inputGroupFileAddon01" >Images</span>
                            </div>  
                            <div class="custom-file">
                              <input type="file" value="<?php echo $e->image; ?>" class="custom-file-input" id="inputGroupFile01" name="gambar" aria-describedby="inputGroupFileAddon01">
                              <label style="text-align:left" class="custom-file-label" for="inputGroupFile01">Choose...</label>
                            </div>
                          </div> 
                          <center>                      
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
                         <?php endforeach ?>
                         </form>
                        </div>
                        
                        
                        <a href="<?php echo site_url('sistem/index/data_karyawan'); ?>"><button   class="btn btn-danger mt-1"> Cancel </button></a>&nbsp&nbsp&nbsp
                         </center></div> 
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        </main>

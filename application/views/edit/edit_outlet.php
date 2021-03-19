<main role="main" class="container-fluid" style="margin-top: 5%;">
 
<div class="row">
            <div class="col-12">
                <div class="card shadow" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 4.5%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,white);">
                        <div class="card-body" style="margin: 2%;">
                          <center>
                          <h4 class="card-title" style="color: black;">Edit Outlet</h4>

                          <form action="<?php echo site_url('sistem/aksi_edit_outlet');?>" method="post" enctype="multipart/form-data" >

                        <?php
                        foreach($data_edit_outlet as $e):?>
                         <input type="hidden" name="id_outlet" value="<?php echo $e->id_outlet;?>"> 
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"  style="width: 101.5px;">Outlet</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="nama" value="<?php echo $e->nama; ?>" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">tlp</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"  style="width: 101.5px;">No.Telp</div>
                              </div>
                              <input type="text" value="<?php echo $e->tlp; ?>" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                           <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">alamat</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 101.5px;">Alamat</div>
                              </div>
                              <textarea name="alamat" id="" cols="56" style="border-radius:5px" rows="5"><?php echo $e->alamat;?></textarea>
                            </div>
                          </div>
                          <center>
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
                         
                         <?php endforeach ?>
                         </form>
                         <a href="<?php echo site_url('sistem/index/outlet'); ?>"><button  class="btn btn-danger"> Cancel</button></a>
                         </center>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

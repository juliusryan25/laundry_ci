<main role="main" class="container-fluid" style="margin-top: 3%;>
<div class="row">

            <div class="col-12">
                <div class="card shadow" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 7%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,white);">
                        <div class="card-body" style="margin: 2%;">
                        <div class="row">
                        <div class="col-sm-12">
                          <center>
                          <h4 class="card-title " style="color: black;">Edit Member</h4></div>


                          <form action="<?php echo site_url('kasir/aksi_edit');?>" method="post" enctype="multipart/form-data" >
                    

                    <?php
                        foreach($data_edit as $e):?>

                        <input type="hidden" name="id" value="<?php echo $e->id_member;?>">

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Nama</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Nama</div>
                              </div>
                              <input type="text" value="<?php echo $e->nama; ?>" class="form-control" id="inlineFormInputGroup" name="nama" placeholder="">
                            </div>
                          </div>
                         
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">no telpon</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >No.Telp</div>
                              </div>
                              <input type="text"  value="<?php echo $e->tlp; ?>" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">alamat</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Alamat</div>
                              </div>
                              <textarea  name="alamat"  value="<?php echo $e->alamat;?>" id="" cols="55" style="border-radius:5px" rows="5"><?php echo $e->alamat;?></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Jenis</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text" style="width: 97px; text-align: center;" for="inputGroupSelect01">Gender</label>
                            </div>
                            <select class="custom-select"  value="<?php echo $e->jenis_kelamin;?>" name="jeniskelamin" id="inputGroupSelect01">
                              <option selected></option>
                              <option value="L">Laki-laki</option>
                              <option value="P">Perempuan</option>
                              
                            </select>
                          </div> 
                          </div>
                          </div>
                       
                          <center>
                          
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
       
                         <?php endforeach ?>
                         </form>
                         <a href="<?php echo site_url('kasir/indexkasir/memberkasir'); ?>"><button type="submit" name="save"  class="btn btn-danger"> Cancel </button></a>&nbsp&nbsp&nbsp
                         </center>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
      
        </div>
        </div>
        
    </main>
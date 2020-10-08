<main role="main" class="container-fluid" style="margin-top: 0%;">

        <div class="row">
        &nbsp&nbsp&nbsp&nbsp<h3>Package</h3>
            <div class="col-md-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add" > <i class="fas fa-box-open"></i>&nbsp +</butttom>
            </div>

          <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <td>Id_Paket</td>
                  <td>Id_Outlet</td>
                  <td>Jenis</td>
                  <td>Nama_Paket</td>
                  <td>Harga</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
              <?php
              if ($c_paket>0){
                foreach ($paket as $datas){
              ?>
               <tr>
                  <td><?php echo $datas->id_paket;?></td>
                  <td><?php foreach($outlet as $cabang) : ?>
                        <?php if( $cabang->id_outlet == $datas->id_outlet) { ?>
                          <?= $cabang->nama; ?>
                        <?php } ?>
                      <?php endforeach; ?></td>
                  <td><?php echo $datas->jenis;?></td>
                  <td><?php echo $datas->nama_paket;?></td>
                  <td><?php echo $datas->harga;?></td>
             
                
                  <td style="width:140px">
                  <div class="col-12">
                    <a href="<?php echo site_url('sistem/edit_paket/'.$datas->id_paket); ?>"><button  class=" btn btn-success btn-sm edit_data" style="width: 100%;" ><i class="fas fa-edit"></i>  Edit </button></a>
                    </div>
                    <div class="col-12 mt-2" >
                   <button  data-toggle="modal" data-target="#exampleModal" class=" btn btn-danger btn-sm hapus_data" style="width: 100%;" ><i class="fas fa-trash"></i>  Delete </button>
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
                    <center>  <img src="<?php echo base_url(); ?>assets/image/seru.png" style="width:150px" class="card-img" alt="..."></center><br>
                    Are You Sure ? .....
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?php echo site_url('sistem/delete_paket/'.$datas->id_paket); ?>"> <button type="button" class="btn btn-primary">Yes</button></a>
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
                    <div class="modal-body " style="text-align:center">
                    <div class="row">
            <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: dodgerblue;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 2.5%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,dodgerblue);">
                        <div class="card-body" style="margin: 2%;">
                        <div class="row">
                        <div class="col-sm-12">
                          <center>
                          <h4 class="card-title " style="color: white;">Paket</h4></div>
                          <form action="<?php echo site_url('sistem/simpan_data_paket');?>" method="post" enctype="multipart/form-data" >
                        </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">id_outlet</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Id_Outlet</div>
                              </div>
                              <select class="custom-select" id="cabang" name="idout">
                                <option value="" selected disabled> Choose </option>
                                <?php foreach($outlet as $cabang) : ?>
                                  <!-- /</?php if( $cabang == $edit->jenis_cabang) { ?> -->
                                    <option value="<?= $cabang->id_outlet; ?>"><?= $cabang->nama; ?></option>
                                  <!-- /</?php }?> -->
                                <?php endforeach; ?>
                              </select>
                              <!-- <input type="number" class="form-control" id="inlineFormInputGroup" name="idout" placeholder=""> -->
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Jenis</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text" style="width: 97px; text-align: center;" for="inputGroupSelect01">Jenis</label>
                            </div>
                            <select class="custom-select" name="jenis" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="kiloan">Kiloan</option>
                              <option value="selimut">Selimut</option>
                              <option value="bed_cover">Bed Cover</option>
                              <option value="kaos">Kaos</option>
                              <option value="lain-lain">Lain-lain</option>
                              
                            </select>
                          </div> 
                          </div>                         
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Harga</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Harga</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="harga" placeholder="">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Nama_Paket</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 117px;">Nama_Paket</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="nama_paket" placeholder="">
                            </div>
                          </div>
                          <!-- </div> -->
                       
                         
                         
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
                    </div>
                  </div>
            </div>
        </div>
        </div>  

        
    </main>
<main role="main" class="container-fluid" style="margin-top: 5%;">
<center><div class="col-xl-6">
              <!-- <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body" style="width:100%">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     <h2>Print PDF</h2>
                     <div class="input-group">
                        <select class="custom-select" id="table">
                            <option selected>Choose...</option>
                            <option value="1">Employe</option>
                            <option value="2">Member</option>
                            <option value="3">Package</option>
                            <option value="4">Outlet</option>
                            <option value="5">Transaction</option>
                        </select>
                        <div class="input-group-append">
                           <button class="btn btn-warning"  onclick="hasil()" type="button"><i class="fas fa-file-download"></i></button>
                        </div>
                        </div>
                    </div>             
                  </div>
                </div>
              </div> -->

              <div class="card border-left-success mt-4 shadow h-100 py-2">
                <div class="card-body" style="width:100%">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     <h2>Print Excel</h2>
                     <div class="input-group">
                        <select class="custom-select" id="table2">
                            <option selected>Choose...</option>
                            <option value="1">Employe</option>
                            <option value="2">Member</option>
                            <option value="3">Package</option>
                            <option value="4">Outlet</option>
                            <option value="5">Transaction</option>
                        </select>
                        <div class="input-group-append">
                           <button class="btn btn-success"  onclick="hasil2()" type="button"><i class="fas fa-file-download"></i></button>
                        </div>
                        </div>
                    </div>             
                  </div>
                </div>
              </div>
            </div></center>

            <script>
                 function hasil() {
                    var pilihan= document.getElementById("table").value;
                        
                    if(pilihan=="1") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataUser_pdf");
                    }
                    else if(pilihan=="2") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataMember_pdf");
                    }
                    else if(pilihan=="3") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataPackage_pdf");
                    }
                    else if(pilihan=="4") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataOutlet_pdf");
                    }
                    else if(pilihan=="5") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataTransaksi_pdf");
                    };
                 };
                 function hasil2() {
                    var pilihan= document.getElementById("table2").value;
                        
                    if(pilihan=="1") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataUser_excel");
                    }
                    else if(pilihan=="2") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataMember_excel");
                    }
                    else if(pilihan=="3") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataPackage_excel");
                    }
                    else if(pilihan=="4") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataOutlet_excel");
                    }
                    else if(pilihan=="5") {
                        window.location.assign("<?php echo base_url();?>/sistem/cetakDataTransaksi_excel");
                    };
                 };
            </script>
</main>
<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 mt-4">
            <h1 style="text-align: center">Data User</h1>
            <p style="text-align: center"><?php echo "Tanggal: ".date('d-m-Y'); ?></p>
            <br><br>
            <div class="table-responsive mb-4">
            <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr style="text-align: center">
                            <td scope="col">ID</td>
                            <td scope="col">Username</td>
                            <td scope="col">Email</td>
                            <td scope="col">No.Telp</td>
                            <td scope="col">Password</td>
                            <td scope="col">Id_Outlet</td>
                            <td scope="col">Status</td>
                            <td scope="col">Images</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                           
                            foreach ($user as $datas){
                        ?>
                            <tr style="text-align: center">
                                <td><?php echo $datas->id;?></td>
                                <td><?php echo $datas->username;?></td>
                                <td><?php echo $datas->email;?></td>
                                <td><?php echo $datas->no_telp;?></td>
                                <td><?php echo $datas->password;?></td>
                                <td><?php echo $datas->id_outlet;?></td>
                                <td><?php echo $datas->status;?></td>
                                <td><img style="width: 100px" src="<?php echo base_url('assets/'.$datas->image)?>" alt=""></td>
                            </tr>
                        <?php } 
                        ?>
                    </tbody>
            </table>            
            </div>
        </div>
      </div>
      <!-- <a href="<?php echo site_url('sistem/cetak_pdf')?>">Download</a> -->
      </div>
</body>
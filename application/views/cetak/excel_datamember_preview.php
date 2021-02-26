<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 mt-4">
            <h1 style="text-align: center">Data Member</h1>
            <p style="text-align: center"><?php echo "Tanggal: ".date('d-m-Y'); ?></p>
            <br><br>
            <div class="table-responsive mb-4">
            <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr style="text-align: center">
                            <td scope="col">ID</td>
                            <td scope="col">Nama</td>
                            <td scope="col">Alamat</td>
                            <td scope="col">Gender</td>
                            <td scope="col">No.Telp</td>                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                           
                            foreach ($member as $datas){
                        ?>
                            <tr style="text-align: center">
                                <td><?php echo $datas->id_member;?></td>
                                <td><?php echo $datas->nama;?></td>
                                <td><?php echo $datas->alamat;?></td>
                                <td><?php echo $datas->jenis_kelamin;?></td>
                                <td><?php echo $datas->tlp;?></td>                               
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
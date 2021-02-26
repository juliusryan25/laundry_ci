<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 mt-4">
            <h1 style="text-align: center">Data Package</h1>
            <p style="text-align: center"><?php echo "Tanggal: ".date('d-m-Y'); ?></p>
            <br><br>
            <div class="table-responsive mb-4">        
            <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr style="text-align: center">
                            <td scope="col">Id_paket</td>
                            <td scope="col">Id_outlet</td>
                            <td scope="col">Jenis</td>
                            <td scope="col">Nama_paket</td>
                            <td scope="col">Harga</td>                            
                            <td scope="col">Diskon</td> 
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            if($c_paket>0){
                            foreach ($paket as $datas){
                        ?>
                            <tr style="text-align: center">
                                <td><?php echo $datas->id_paket;?></td>
                                <td><?php echo $datas->id_outlet;?></td>
                                <td><?php echo $datas->jenis;?></td>
                                <td><?php echo $datas->nama_paket;?></td>
                                <td><?php echo $datas->harga;?></td>
                                <td><?php echo $datas->diskon;?>%</td>                              
                            </tr>
                        <?php } }
                            else {
                                ?>
                                <!-- <tr>
                                    <td colspan="8">Data User Kosong!</td>
                                </tr> -->
                                <?php
                            }
                        ?>
                    </tbody>
            </table>            
            </div>
        </div>
      </div>
      <!-- <a href="<?php echo site_url('sistem/cetak_pdf')?>">Download</a> -->
      </div>
</body>
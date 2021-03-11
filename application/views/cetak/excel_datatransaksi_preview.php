<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 mt-4">
            <h1 style="text-align: center">Data Transaction</h1>
            <p style="text-align: center"><?php echo "Tanggal: ".date('d-m-Y'); ?></p>
            <br><br>
            <div class="table-responsive mb-4">
            <table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                    <tr style="text-align: center">
                                <td>Id_Transaksi</td>
                                <td>Id_Outlet</td>                 
                                <td>Id_member</td>
                                <td>keterangan</td>
                                <td>id_paket</td>
                                <td>Tgl_masuk</td>                 
                                <td>Tgl_bayar</td>
                                <td>Qty</td>
                                <td>Harga</td>
                                <td>Diskon</td>
                                <td>Pajak</td>
                                <td>Status</td>
                                <td>Total</td>
                                <td>Uang_bayar</td>
                                <td>Kembalian</td>
                                <td>Status_Pembayaran</td>
                                <td>Id_user</td>                                   
                            </tr>
                    </thead>

                    <tbody>
                        <?php
                           
                            foreach ($transaksi as $datas){
                        ?>
                            <tr style="text-align: center">
                                <td><?php echo $datas->id_transaksi;?></td>
                                <td><?php echo $datas->id_outlet;?></td>
                                <td><?php echo $datas->id_member;?></td>
                                <td><?php echo $datas->keterangan;?></td>
                                <td><?php echo $datas->nama_paket;?></td>
                                <td><?php echo $datas->tgl_order;?></td>
                                <td><?php echo $datas->tgl_bayar;?></td>
                                <td><?php echo $datas->qty;?></td>
                                <td><?php echo $datas->harga;?></td>
                                <td><?php echo $datas->diskon;?></td>
                                <td><?php echo $datas->pajak;?></td>
                                <td><?php echo $datas->status;?></td>
                                <td><?php echo $datas->total;?></td>
                                <td><?php echo $datas->uang_bayar;?></td>
                                <td><?php echo $datas->kembalian;?></td>
                                <td><?php echo $datas->status_bayar;?></td>
                                <td><?php echo $datas->id_user;?></td>                                
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
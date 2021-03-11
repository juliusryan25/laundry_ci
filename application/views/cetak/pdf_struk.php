<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 mt-4">
            <h1 style="text-align: center">Data Transaction</h1>
            <p style="text-align: center"><?php echo "Tanggal: ".date('d-m-Y'); ?></p>
            <br><br>
            <div class="table-responsive mb-4">
            <table id="example" border="1px" cellspacing="0" class="table table-striped " border="0" style="width: 100%;margin:auto">
                   <?php
                            if($c_transaksi>0){
                            foreach ($transaksi as $datas){
                        ?>
                        <tr style="text-align: left">                         
                            <td>Id_Transaksi</td>
                            <td style="padding-right:10px">    :    </td>
                            <td><?php echo $datas->id_transaksi;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>Id_Outlet</td>    
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->id_outlet;?></td>          
                        </tr>
                        <tr style="text-align: left">   
                            <td>Id_member</td>
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->id_member;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>keterangan</td>
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->keterangan;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>id_paket</td>  
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->nama_paket;?></td>  
                        </tr>     
                        <tr style="text-align: left">         
                            <td>Qty</td>          
                            <td style="padding-right:10px">    :    </td>        
                                <td><?php echo $datas->qty;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>Diskon</td>
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->diskon;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>Pajak</td>     
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->pajak;?></td>      
                        </tr>
                        <tr style="text-align: left">       
                            <td>Total</td>
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->total;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>Uang_bayar</td>
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->uang_bayar;?></td>
                        </tr>
                        <tr style="text-align: left">
                            <td>Kembalian</td> 
                            <td style="padding-right:10px">    :    </td>
                                <td><?php echo $datas->kembalian;?></td>      
                        </tr>
                        <tr style="text-align: left">            
                            <td>Id_user</td>   
                            <td style="padding-right:10px">    :    </td>                              
                                <td><?php echo $datas->id_user;?></td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                        </tr>
                    <?php } } ?>                 
            </table>            
            </div>
        </div>
      </div>
      <!-- <a href="<?php echo site_url('sistem/cetak_pdf')?>">Download</a> -->
      </div>
</body>
<main role="main" class="container-fluid" >
<div class="row">
&nbsp&nbsp&nbsp&nbsp<h3>Transaction</h3>
            <div class="col-md-2">
            <a class="btn btn-primary" href="#form" data-toggle="modal" onclick="submit('tambah')"  > <i class="fas fa-shopping-cart"></i> + </a>
            </div>

           
          <div class="col-md-12 mt-4">
            <div class="table-responsive mb-4">
            <table    id="mydata" class="table table-striped table-bordered" style="width:100%">
              <thead class="bg-primary text-light">
                <tr>
                  <td>Id_Transaksi</td>
                  <td>Id_Outlet</td>
                  <!-- <td>Kode_Invoice</td> -->
                  <td>Id_member</td>
                  <td>keterangan</td>
                  <td>id_paket</td>
                  <td>Tgl_masuk</td>                 
                  <td>Tgl_bayar</td>
                  <!-- <td>Biaya_tambahan</td> -->
                  <td>Diskon</td>
                  <td>Pajak</td>
                  <td>Status</td>
                  <td>Total</td>
                  <td>Uang_bayar</td>
                  <td>Kembalian</td>
                  <td>Status_Pembayaran</td>
                  <td>Id_user</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody id='targetdata' >
             
              </tbody>
              </table>
          </div>
        </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade " id="form" class="modal"  role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-primary" style="color:white">
                      <h5 class="modal-title" id="exampleModalLabel">TRANSACTION</h5>
                      <button type="button" class="close" data-dismiss="modal" onclick="cancel()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="row">
                    <div class="modal-body " style="text-align:center">
                    <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: DodgerBlue;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 5%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,DodgerBlue);">
                        <div class="card-body" style="margin: 2%;">
                        <div class="row">
                        <div class="col-sm-12">
                          <center>
                          <h4 class="card-title " style="color: white;">Transaction</h4></div>
                          
                         <div class="col-12">
                           <center><b> <p class="text-danger" id="pesan"></p></b></center>
                
                          </div>
                          <!-- <form action="<?php echo site_url('sistem/simpan_member');?>" method="post" enctype="multipart/form-data" > -->
                          <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id');?>"> 
                          <input type="hidden" name="id_outlet" value="<?php echo $this->session->userdata('out');?>"> 
                          <input type="hidden" name="id_transaksi" value=""> 
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Member</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-light" style="width: 107px; text-align: center;" for="inputGroupSelect01">Member</label>
                            </div>
                            <select class="custom-select" name="id_member" id="id_member">
                            <option value="" selected > Choose </option>
                                <?php foreach($member as $member) : ?>
                               
                                    <option value="<?= $member->id_member; ?>"><?= $member->nama; ?></option>
                                  
                                <?php endforeach; ?>
                              
                            </select>
                          </div> 
                          </div>
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Keterangan</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text bg-primary text-light" style="width: 97px;padding-right:90px">Keterangan</div>
                              </div>
                              <textarea name="keterangan" id="keterangan" cols="68.9" style="border-radius:5px" rows="5"></textarea>
                            </div>
                          </div>
                         
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Paket</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text" style="width: 97px; text-align: center;" for="inputGroupSelect01">Paket</label>
                            </div>
                            <select class="custom-select" name="paket" id="paket">
                            <option value="" selected > Choose </option>
                                <?php foreach($paket as $paket) : ?>
                               
                                    <option value="<?= $paket->id_paket; ?>"><?= $paket->nama_paket; ?></option>
                                  
                                <?php endforeach; ?>
                              
                            </select>
                          </div> 
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Harga</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >Harga</div>
                              </div>
                              <input type="text" readonly class="form-control" id="harga" name="harga" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Diskon</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >Diskon % </div>
                              </div>
                              <input type="text" readonly class="form-control" id="diskon" name="diskon" placeholder="">
                            </div>
                          </div>
                          
                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Pajak</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >Pajak</div>
                              </div>
                              <input type="int" readonly class="form-control" id="pajak" name="pajak" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Total</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >Total</div>
                              </div>
                              <input type="text" readonly class="form-control" id="total_harga" name="total_bayar" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Bayar</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text bg-primary text-light"style="width: 97px; text-align: center;" >Bayar</div>
                              </div>
                              <input type="text"  class="form-control" id="bayar" name="uang_bayar" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Kembalian</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >Kembalian</div>
                              </div>
                              <input type="text" readonly class="form-control" id="kembalian" name="kembalian" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">tgl</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text  bg-primary text-light"style="width: 97px; text-align: center;" >Tgl Order</div>
                              </div>
                              <input type="date"  class="form-control" id="tanggal_order" name="tanggal_order" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">tglbayar</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text  bg-primary text-light"style="width: 97px; text-align: center;" >Tgl Bayar</div>
                              </div>
                              <input type="date"  class="form-control" id="tanggal_bayar" name="tanggal_bayar" placeholder="">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Status</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-light" style="width: 115px; text-align: center;" for="inputGroupSelect01">Status Order</label>
                            </div>
                            <select class="custom-select" name="status_order" id="inputGroupSelect01">
                              <option value="" selected>Choose...</option>
                              <option value="baru">Baru</option>
                              <option value="proses">Proses</option>
                              <option value="selesai">Selesai</option>
                              <option value="diambil">Diambil</option>
                              
                            </select>
                          </div> 
                          </div>

                          <div class="col-sm-12">
                            <label class="sr-only" for="inlineFormInputGroup">Status</label>
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text bg-primary text-light" style="width: 115px; text-align: center;" for="inputGroupSelect01">Status Bayar</label>
                            </div>
                            <select class="custom-select" name="status_bayar" id="inputGroupSelect01">
                              <option value="" selected>Choose...</option>
                              <option value="dibayar">Dibayar</option>
                              <option value="belum_dibayar">Belum_dibayar</option>
                              <option value="kurang">Kurang</option>
                
                              
                            </select>
                          </div> 
                          </div>

                         
                          </div>
                         

                       
                          <center>
                         
                          <button type="button" id="btn-tambah" onclick="tambahdata()" class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Submit</button>&nbsp&nbsp&nbsp
                          <button type="button" id="btn-edit" onclick="ubahdata()" class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Edit</button>&nbsp&nbsp&nbsp
                          <button type="button" id="btn-cancel" onclick="cancel()" class="btn btn-danger">Cancel</button>&nbsp&nbsp&nbsp
                         
                         </center> </div>
                         <!-- </form> -->
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

              <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background:red;color:white" >
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
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <a href="<?php echo site_url('sistem/delete_data/'.$datas->id_member); ?>"> <button type="button" class="btn btn-primary">Yes</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
              <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
              <script type="text/javascript" src="js/bootstrap.js"></script>
              
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script type="text/javascript">

///TAMPIL DATA ///
      $(document).ready(function() {

      ambildata();

      $('#mydata').dataTable();

     function ambildata(){
      $.ajax({
      type:'GET',
      async: false,
      url:'<?php echo base_url()."index.php/sistem/ambildata"?>',
      dataType:'json',
      success: function(data){
        var baris = '';
        for(var i = 0;i < data.length;i++){
          baris += '<tr>'+
                      '<td>'+ data[i].id_transaksi + '</td>'+
                      '<td>'+ data[i].id_outlet + ' </td>'+                      
                      '<td>'+ data[i].id_member + ' </td>'+
                      '<td>'+ data[i].keterangan + ' </td>'+
                      '<td>'+ data[i].nama_paket + ' </td>'+
                      '<td>'+ data[i].tgl_order + ' </td>'+
                      '<td>'+ data[i].tgl_bayar + ' </td>'+                                    
                      '<td>'+ data[i].diskon + ' </td>'+
                      '<td>'+ data[i].pajak + ' </td>'+
                      '<td>'+ data[i].status + ' </td>'+
                      '<td>'+ data[i].total + ' </td>'+
                      '<td>'+ data[i].uang_bayar + ' </td>'+
                      '<td>'+ data[i].kembalian + ' </td>'+
                      '<td>'+ data[i].status_bayar + ' </td>'+
                      '<td>'+ data[i].id_user+ ' </td>'+          
                      '<td><a href="#form" data-toggle="modal" class="btn btn-success col-12" onclick="submit('+data[i].id_transaksi+')"><i class="fas fa-edit"></i></a><a onclick="hapusdata('+data[i].id_transaksi+')" class="btn btn-danger col-12 mt-2"><i class="fas fa-trash"></i> </a><a onclick="print('+data[i].id_transaksi+')" class="btn btn-warning col-12 mt-2"><i class="fas fa-file"></i> </a></td>'+                                  
                    '</tr>';
        }
        $('#targetdata').html(baris);
   
      }
      });
    }
  });

  ///TAMBAH DATA///
  function tambahdata(){
        var id_outlet = $("[name = 'id_outlet']").val();
        var id_member = $("[name = 'id_member']").val();
        var keterangan = $("[name = 'keterangan']").val();
        var nama_paket = $("[name = 'paket']").val();
        var tgl_order = $("[name = 'tanggal_order']").val();
        var tgl_bayar = $("[name = 'tanggal_bayar']").val();
        var harga = $("[name = 'harga']").val();
        var diskon = $("[name = 'diskon']").val();
        var pajak = $("[name = 'pajak']").val();
        var status_order = $("[name = 'status_order']").val();
        var total = $("[name = 'total_bayar']").val();
        var bayar = $("[name = 'uang_bayar']").val();
        var kembalian = $("[name = 'kembalian']").val();
        var status_bayar = $("[name = 'status_bayar']").val();
        var id_user = $("[name = 'id_user']").val();

        $.ajax({
          type:'POST',
          async: false,
          data:'id_outlet='+id_outlet+
               '&id_member='+id_member+
               '&keterangan='+keterangan+
               '&nama_paket='+nama_paket+
               '&tgl_order='+tgl_order+
               '&tgl_bayar='+tgl_bayar+
               '&harga='+harga+
               '&diskon='+diskon+
               '&pajak='+pajak+
               '&status_order='+status_order+
               '&total='+total+
               '&uang_bayar='+bayar+
               '&kembalian='+kembalian+
               '&status_bayar='+status_bayar+
               '&id_user='+id_user,
               
          url:'<?php echo base_url()."sistem/tambahtransaksi"?>',
          dataType:'json',
          success: function(hasil){
            // console.log(hasil);
            $("#pesan").html(hasil.pesan);

            if (hasil.pesan=='') {
             
              document.getElementById("form").click('hide');            
       
              $(document).ready(function() {

               ambildata();

                  $('#mydata').dataTable();

                  function ambildata(){
                  $.ajax({
                  type:'GET',
                  async: false,
                  url:'<?php echo base_url()."index.php/sistem/ambildata"?>',
                  dataType:'json',
                  success: function(data){
                    var baris = '';
                    for(var i = 0;i < data.length;i++){
                      baris += '<tr>'+
                                  '<td>'+ data[i].id_transaksi + '</td>'+
                                  '<td>'+ data[i].id_outlet + ' </td>'+                        
                                  '<td>'+ data[i].id_member + ' </td>'+
                                  '<td>'+ data[i].keterangan + ' </td>'+
                                  '<td>'+ data[i].nama_paket + ' </td>'+
                                  '<td>'+ data[i].tgl_order + ' </td>'+
                                  '<td>'+ data[i].tgl_bayar + ' </td>'+                
                                  '<td>'+ data[i].diskon + ' </td>'+
                                  '<td>'+ data[i].pajak + ' </td>'+
                                  '<td>'+ data[i].status + ' </td>'+
                                  '<td>'+ data[i].total + ' </td>'+
                                  '<td>'+ data[i].uang_bayar + ' </td>'+
                                  '<td>'+ data[i].kembalian + ' </td>'+
                                  '<td>'+ data[i].status_bayar + ' </td>'+
                                  '<td>'+ data[i].id_user+ ' </td>'+         
                                  '<td><a href="#form" data-toggle="modal" class="btn btn-success col-12" onclick="submit('+data[i].id_transaksi+')"><i class="fas fa-edit"></i></a><a onclick="hapusdata('+data[i].id_transaksi+')" class="btn btn-danger col-12 mt-2"><i class="fas fa-trash"></i> </a></td>'+
                                '</tr>';
                    }
                    $('#targetdata').html(baris);

                  }
                  });
                  }
                  });

                  $("[name = 'id_member']").val('');
                  $("[name = 'keterangan']").val('');
                  $("[name = 'paket']").val('');
                  $("[name = 'harga']").val('');
                  $("[name = 'tanggal_order']").val('');
                  $("[name = 'tanggal_bayar']").val('');
                  $("[name = 'harga']").val('');
                  $("[name = 'diskon']").val('');
                  $("[name = 'pajak']").val('');
                  $("[name = 'status_order']").val('');
                  $("[name = 'total_bayar']").val('');
                  $("[name = 'uang_bayar']").val('');
                  $("[name = 'kembalian']").val('');
                  $("[name = 'status_bayar']").val('');
            
            }

          }
        });
      }

 /// UPDATE ///
 function submit(x) {
        if(x=='tambah'){
          $('#btn-tambah').show();
          $('#btn-edit').hide();
        }else{
          $('#btn-tambah').hide();
          $('#btn-edit').show();

          $.ajax({
            type:"POST",
            data:'id='+x,
            url:'<?php echo base_url()."sistem/ambilId"?>',
            dataType:'json',
            success:function(hasil) {
              $("[name = 'id_transaksi']").val(hasil[0].id_transaksi);
              $("[name = 'id_outlet']").val(hasil[0].id_outlet);
              $("[name = 'id_member']").val(hasil[0].id_member);
              $("[name = 'keterangan']").val(hasil[0].keterangan);
              $("[name = 'paket']").val(hasil[0].nama_paket);
              $("[name = 'harga']").val(hasil[0].nama_paket);
              $("[name = 'tanggal_order']").val(hasil[0].tgl_order);
              $("[name = 'tanggal_bayar']").val(hasil[0].tgl_bayar);
              $("[name = 'harga']").val(hasil[0].harga);
              $("[name = 'diskon']").val(hasil[0].diskon);
              $("[name = 'pajak']").val(hasil[0].pajak);
              $("[name = 'status_order']").val(hasil[0].status);
              $("[name = 'total_bayar']").val(hasil[0].total);
              $("[name = 'uang_bayar']").val(hasil[0].uang_bayar);
              $("[name = 'kembalian']").val(hasil[0].kembalian);
              $("[name = 'status_bayar']").val(hasil[0].status_bayar);
              $("[name = 'id_user']").val(hasil[0].id_user);

            }
          })
        }
      }

      function ubahdata(){

        var id_transaksi = $("[name = 'id_transaksi']").val();
        var id_outlet = $("[name = 'id_outlet']").val();
        var id_member = $("[name = 'id_member']").val();
        var keterangan = $("[name = 'keterangan']").val();
        var nama_paket = $("[name = 'paket']").val();
        var tgl_order = $("[name = 'tanggal_order']").val();
        var tgl_bayar = $("[name = 'tanggal_bayar']").val();
        var harga = $("[name = 'harga']").val();
        var diskon = $("[name = 'diskon']").val();
        var pajak = $("[name = 'pajak']").val();
        var status_order = $("[name = 'status_order']").val();
        var total = $("[name = 'total_bayar']").val();
        var bayar = $("[name = 'uang_bayar']").val();
        var kembalian = $("[name = 'kembalian']").val();
        var status_bayar = $("[name = 'status_bayar']").val();
        var id_user = $("[name = 'id_user']").val();

        $.ajax({
          type:'POST',       
          data:'id_transaksi='+id_transaksi+
               '&id_outlet='+id_outlet+
               '&id_member='+id_member+
               '&keterangan='+keterangan+
               '&nama_paket='+nama_paket+
               '&tgl_order='+tgl_order+
               '&tgl_bayar='+tgl_bayar+
               '&harga='+harga+
               '&diskon='+diskon+
               '&pajak='+pajak+
               '&status_order='+status_order+
               '&total='+total+
               '&uang_bayar='+bayar+
               '&kembalian='+kembalian+
               '&status_bayar='+status_bayar+
               '&id_user='+id_user,

          url:'<?php echo base_url()."sistem/ubahdata"?>',
          dataType:'json',

          success: function(hasil) {

            $("#pesan").html(hasil.pesan);

            if (hasil.pesan=='') {
             
              document.getElementById("form").click('hide');            
       
              $(document).ready(function() {

               ambildata();

                  $('#mydata').dataTable();

                  function ambildata(){
                  $.ajax({
                  type:'GET',
                  async: false,
                  url:'<?php echo base_url()."index.php/sistem/ambildata"?>',
                  dataType:'json',
                  success: function(data){
                    var baris = '';
                    for(var i = 0;i < data.length;i++){
                      baris += '<tr>'+
                                  '<td>'+ data[i].id_transaksi + '</td>'+
                                  '<td>'+ data[i].id_outlet + ' </td>'+                        
                                  '<td>'+ data[i].id_member + ' </td>'+
                                  '<td>'+ data[i].keterangan + ' </td>'+
                                  '<td>'+ data[i].nama_paket + ' </td>'+
                                  '<td>'+ data[i].tgl_order + ' </td>'+
                                  '<td>'+ data[i].tgl_bayar + ' </td>'+                
                                  '<td>'+ data[i].diskon + ' </td>'+
                                  '<td>'+ data[i].pajak + ' </td>'+
                                  '<td>'+ data[i].status + ' </td>'+
                                  '<td>'+ data[i].total + ' </td>'+
                                  '<td>'+ data[i].uang_bayar + ' </td>'+
                                  '<td>'+ data[i].kembalian + ' </td>'+
                                  '<td>'+ data[i].status_bayar + ' </td>'+
                                  '<td>'+ data[i].id_user+ ' </td>'+         
                                  '<td><a href="#form" data-toggle="modal" class="btn btn-success col-12" onclick="submit('+data[i].id_transaksi+')"><i class="fas fa-edit"></i></a><a onclick="hapusdata('+data[i].id_transaksi+')" class="btn btn-danger col-12 mt-2"><i class="fas fa-trash"></i> </a></td>'+
                                '</tr>';
                    }
                    $('#targetdata').html(baris);

                  }
                  });
                  }
                  });

                  $("[name = 'id_member']").val('');
                  $("[name = 'keterangan']").val('');
                  $("[name = 'paket']").val('');
                  $("[name = 'harga']").val('');
                  $("[name = 'tanggal_order']").val('');
                  $("[name = 'tanggal_bayar']").val('');
                  $("[name = 'harga']").val('');
                  $("[name = 'diskon']").val('');
                  $("[name = 'pajak']").val('');
                  $("[name = 'status_order']").val('');
                  $("[name = 'total_bayar']").val('');
                  $("[name = 'uang_bayar']").val('');
                  $("[name = 'kembalian']").val('');
                  $("[name = 'status_bayar']").val('');
            
            }
          }
        })
      }

///Print///
function print(id_transaksi) {       

       
          $.ajax({
            type:'POST',
            data:'id='+id_transaksi,
            url:'<?php echo base_url()."sistem/cetakStruk_pdf"?>',
            success: function(){}
            
            
          })}    
    


 ///HAPUS///
 function hapusdata(id_transaksi) {
        var tanya = confirm('Are You Sure?');

        if (tanya) {
          $.ajax({
            type:'POST',
            data:'id='+id_transaksi,
            url:'<?php echo base_url()."sistem/hapus_transaksi"?>',
            success: function(){

              
              $(document).ready(function() {

                ambildata();

                  $('#mydata').dataTable();

                  function ambildata(){
                  $.ajax({
                  type:'GET',
                  async: false,
                  url:'<?php echo base_url()."index.php/sistem/ambildata"?>',
                  dataType:'json',
                  success: function(data){
                    var baris = '';
                    for(var i = 0;i < data.length;i++){
                      baris += '<tr>'+
                                  '<td>'+ data[i].id_transaksi + '</td>'+
                                  '<td>'+ data[i].id_outlet + ' </td>'+                        
                                  '<td>'+ data[i].id_member + ' </td>'+
                                  '<td>'+ data[i].keterangan + ' </td>'+
                                  '<td>'+ data[i].nama_paket + ' </td>'+
                                  '<td>'+ data[i].tgl_order + ' </td>'+
                                  '<td>'+ data[i].tgl_bayar + ' </td>'+                
                                  '<td>'+ data[i].diskon + ' </td>'+
                                  '<td>'+ data[i].pajak + ' </td>'+
                                  '<td>'+ data[i].status + ' </td>'+
                                  '<td>'+ data[i].total + ' </td>'+
                                  '<td>'+ data[i].uang_bayar + ' </td>'+
                                  '<td>'+ data[i].kembalian + ' </td>'+
                                  '<td>'+ data[i].status_bayar + ' </td>'+
                                  '<td>'+ data[i].id_user+ ' </td>'+         
                                  '<td><a href="#form" data-toggle="modal" class="btn btn-success col-12" onclick="submit('+data[i].id_transaksi+')"><i class="fas fa-edit"></i></a><a onclick="hapusdata('+data[i].id_transaksi+')" class="btn btn-danger col-12 mt-2"><i class="fas fa-trash"></i> </a></td>'+
                                '</tr>';
                    }
                    $('#targetdata').html(baris);

                  }
                  });
                  }
                  });

            }

          })
        }
      }

    

///PILIH PAKET///
  $("#paket").on("change", function () {
    var id = $(this).val();
    
            $.ajax({
						url:'<?php echo base_url()."sistem/get_data_paket"?>',
						method: "POST",
						data: {id_paket:id},
						async: true,
						dataType: 'json',
						success: function(data){
							var diskon = "";
							var harga = "";
             
							for(i=0; i<data.length; i++){
								harga += data[i].harga;
                diskon += data[i].diskon;
								
						}
            // console.log(data);
          
           	$("#harga").val(harga);
						$("#diskon").val(diskon);
          
            if(diskon == 0){
              var pajak = harga * (2/100);
              var total = parseInt(harga)+parseInt(pajak);
              $("#pajak").val(pajak);
              $("#total_harga").val(total);
							
							}else{
								var nilai_harga = harga;
								var nilai_diskon = diskon;

								var hasil_diskon = harga*(nilai_diskon/100);
								var hasil_akhir = nilai_harga-hasil_diskon;
                var pajak = hasil_akhir * (2/100);
                var total = hasil_akhir+pajak;
								$("#total_harga").val(total);
                $("#pajak").val(pajak);
							
							
       }  
        }
      });
        });

        $( "#kembalian" ).keyup(function() {
        var total = $("#total_harga").val();
        var bayar = $("#bayar").val();
        var kembali = bayar - total;
 
          $("#kembalian").val(kembali);
       });
      
     
      function cancel() {

        document.getElementById("form").click('hide');
                  $("[name = 'id_transaksi']").val('');
                  $("[name = 'id_member']").val('');
                  $("[name = 'keterangan']").val('');
                  $("[name = 'paket']").val('');
                  $("[name = 'harga']").val('');
                  $("[name = 'tanggal_order']").val('');
                  $("[name = 'tanggal_bayar']").val('');
                  $("[name = 'harga']").val('');
                  $("[name = 'diskon']").val('');
                  $("[name = 'pajak']").val('');
                  $("[name = 'status_order']").val('');
                  $("[name = 'total_bayar']").val('');
                  $("[name = 'uang_bayar']").val('');
                  $("[name = 'kembalian']").val('');
                  $("[name = 'status_bayar']").val('');
      }
      
</script>


    </main> 
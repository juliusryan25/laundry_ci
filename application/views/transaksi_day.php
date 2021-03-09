<main role="main" class="container-fluid" >
<div class="row">
    <div class="col-10">
    &nbsp&nbsp&nbsp&nbsp<h3>Transaction / Day</h3>  
    </div>
    <div class="col-2">
    <a href="<?php echo site_url('sistem/index/report'); ?>" class="btn btn-success col-12 mt-4"> Generate XLS <i class="fas fa-file"></i> </a> 
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
      url:'<?php echo base_url()."index.php/sistem/transaksi_day"?>',
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
                      '<td>'+ data[i].harga + ' </td>'+                                    
                      '<td>'+ data[i].diskon + ' </td>'+
                      '<td>'+ data[i].pajak + ' </td>'+
                      '<td>'+ data[i].status + ' </td>'+
                      '<td>'+ data[i].total + ' </td>'+
                      '<td>'+ data[i].uang_bayar + ' </td>'+
                      '<td>'+ data[i].kembalian + ' </td>'+
                      '<td>'+ data[i].status_bayar + ' </td>'+
                      '<td>'+ data[i].id_user+ ' </td>'+                               
                    '</tr>';
        }
        $('#targetdata').html(baris);
   
      }
      });
    }
  });

  

    
      
      
</script>


    </main> 
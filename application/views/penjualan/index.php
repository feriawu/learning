<?php $no=1; ?>
<div class="row text-center text-md-left">
		
	<div class="col-12">
		<h1><?= $title ?></h1>
		<hr>
	</div>

	<div class="col-8">

		<div class="card h-100">

			<div class="card-body">
				<h5 class="float-left mr-2">Show Per page :</h5>
				<select>
					<?php for ($i=1; $i <21 ; $i++): ?>
						<?php echo "<option value='$i'>$i</option>"; ?>
					<?php endfor; ?>
				</select>
                  
                <div class="table-responsive">
                	<table collapse="collapse" class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Foto</th>
                          <th>Nama</th>
                          <th>Stok</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($barang as $brg): ?>
						<tr class="baris" id="<?php echo $brg['id'] ?>">
						  <th scope="row"><?php echo $no; ?></th>
						  <td>
                <img width="100px" class=" mr-0" src="<?php echo base_url('assets/img/barang/').$brg['foto']; ?>">
              </td>
						  <td class="nama_<?php echo $brg['id'] ?>"><?php echo $brg['nama']; ?></td>
						  <td><?php echo $brg['stok']; ?></td>
              <input value="<?php echo $brg['harga']; ?>" type="hidden" name="harga" class="harga_<?php echo $brg['id']; ?>">						  
              <td><?php echo $brg['harga']; ?></td>						
						</tr>

						<?php $no++; ?>
					   <?php endforeach; ?>
            </tbody>
          </table>
        </div>
    </div>

    <div class="pagination mb-3 ml-3">          		
    	<?php echo $this->pagination->create_links('class'); ?>      	
    </div>

  </div>
</div>

    <div class="col-4">
    	<div class="card h-100">
    		<div class="card-body">
    			<h5 class="card-title">List Order</h5>
    			<hr>
          <?php echo form_open('penjualan/order'); ?>
            <ul class="list-order">
              <input type="hidden" name="barang_id" value="">
          
            </ul>
          <?php echo  form_close(); ?>
    			<hr>
          <h5 class="float-left">Rp,</h5>
    			<h5 class="total">0</h5>
    		</div>
    	</div>
    </div>

</div>




<script type="text/javascript">
      $(document).ready(function(){
        $('.baris').click(function(){
          var id = $(this).attr('id');
          var harga = $('.harga_'+id).val();
          var total = $('.total').text();
          var total = parseInt(harga)+parseInt(total);
            if (id) {
              $('.list-order').append('<li width="100%" class="'+id+'">'+$('.nama_'+id).text()+'</li>qty: <input type="number" name="qty" value=1><hr>');
              $('.total').html(total);
            }
          $('tr.baris').removeAttr('id', id);
        });

      });
    </script>
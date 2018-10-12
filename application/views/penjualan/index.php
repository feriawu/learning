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
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($barang as $brg): ?>
						<tr class="baris">
						  <th scope="row"><?php echo $no; ?></th>
						  <td><img width="100px" class=" mr-0" src="<?php echo base_url('assets/img/barang/').$brg['foto']; ?>"></td>
						  <td><?php echo $brg['nama']; ?></td>
						  <td><?php echo $brg['stok']; ?></td>
						  <td><?php echo $brg['harga']; ?></td>
						  <td class="text-center">
						  	<a class="btn btn-info" href="<?php echo base_url('barang/edit/').$brg['id']; ?>">
						  		<img width="20px" src="<?php echo base_url('assets/img/edit.png'); ?>">
						  	</a>
						  	<a class="btn btn-danger" href="<?php echo base_url('barang/delete/').$brg['id']; ?>">
						  		<img width="20px" src="<?php echo base_url('assets/img/delete.png'); ?>">
						  	</a>
						  </td>							
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
    			<div class="list-order">
    				
    			</div>
    			<hr>
    			<h5>Subtotal:</h5>
    		</div>
    	</div>
    </div>
</div>
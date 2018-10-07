
  <?php foreach ($barang as $brg): ?>
  	<div class="col-md-2">
  		<img src="<?php echo base_url('assets/img/barang/').$brg['foto'] ?>"><br>
  		<h5><?php echo  $brg['nama']; ?></h5>
  		stok : <?php echo $brg['stok']; ?><br>

  	</div>
  <?php endforeach; ?>

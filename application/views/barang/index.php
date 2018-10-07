<div class="container-fluid my-3">
	<div class="row text-center text-md-left">
		<div class="col-12">
			<h1><?= $title ?></h1>
			<hr>

			<a class="btn btn-primary float-right" href="<?php echo base_url() ?>barang/add">+ Add</a>
		</div>

		<div class="col-md-8">			
			<?php foreach ($barang as $brg): ?>
		  		<div class="col-lg-3 col-sm-4 col-xs-3 text-center">
		      		<a href="<?php echo base_url(); ?>barang/view/<?php echo $brg['slug'] ?>" class="d-block mb-4 h-100">
			        	<img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/img/barang/<?php echo $brg['foto']; ?>" alt="">
			      		<h5><?php echo  $brg['nama']; ?></h5>
			  			stok : <?php echo $brg['stok']; ?><br>
		     		</a>
			  	</div>
		 	<?php endforeach; ?>	
		</div>

		<div class="col-md-3 float-left">
			ini konten
		</div>
	</div>
</div>

			
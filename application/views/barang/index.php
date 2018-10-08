<?php $no=1; ?>
	<div class="row text-center text-md-left">
		<div class="col-12">
			<h1><?= $title ?></h1>
			<a class="btn btn-primary" href="<?php echo base_url() ?>barang/add">+ Add</a>
			<hr>

			<div class="card">

		<div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
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
							<tr>
							  <th scope="row"><?php echo $no; ?></th>
							  <td><img width="100px" class=" mr-0" src="<?php echo base_url('assets/img/barang/').$brg['foto']; ?>"></td>
							  <td><?php echo $brg['nama']; ?></td>
							  <td><?php echo $brg['stok']; ?></td>
							  <td><?php echo $brg['harga']; ?></td>
							  <td class="text-center">
							  	<a class="btn btn-info" href="<?php echo base_url('barang/edit/').$brg['id']; ?>"><img width="20px" src="<?php echo base_url('assets/img/edit.png'); ?>"></a>
							  	<a class="btn btn-danger" href="<?php echo base_url('barang/delete/').$brg['id']; ?>"><img width="20px" src="<?php echo base_url('assets/img/delete.png'); ?>"</a>
							  </td>
							</tr>
							<?php $no++; ?>
						<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
              </div>
        </div>

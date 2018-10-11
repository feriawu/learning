<div class="col-lg-6 my-4 mx-auto">
<div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?= $title ?></h4>
                </div>
                <div class="card-body">
                  <p>Form Edit barang</p>
                  <?php if(validation_errors()): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?php echo validation_errors(); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  
                  <?php echo form_open_multipart('barang/update'); ?>
                    <div class="form-group">
                      <input type="hidden" name="slug" value="<?php echo $barang['slug'] ?>">
                      <label>Nama</label>
                      <input name="nama" type="text" placeholder="Nama Barang" class="form-control" value="<?php echo $barang['nama'] ?>">
                    </div>
                    <div class="form-group">       
                      <label>Stok</label>
                      <input name="stok" type="number" placeholder="Stok Barang" class="form-control" value="<?php echo $barang['stok'] ?>">
                    </div>
                    <div class="form-group">       
                      <label>Harga</label>
                      <input name="harga" type="number" placeholder="Harga" class="form-control" value="<?php echo $barang['harga'] ?>">
                    </div>
                    <div class="form-group">
                      <label class="d-block">Change Images</label>       
                      <input type="file" name="userfile">
                    </div>
                    <img width="100%" class="mb-2" src="<?php echo base_url('assets/img/barang/'.$barang['foto']) ?>">
                    <div class="form-group">       
                      <input type="submit" value="Submit" class="btn btn-primary float-right">
                    </div>
                  </form>
                </div>
              </div>
            </div>
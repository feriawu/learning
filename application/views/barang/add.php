<div class="col-lg-6 my-4 mx-auto">
<div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?= $title ?></h4>
                </div>
                <div class="card-body">
                  <p>Form tambah barang</p>
                  <?php echo form_open('barang/add'); ?>
                    <div class="form-group">
                      <label>Nama</label>
                      <input name="nama" type="text" placeholder="Nama Barang" class="form-control">
                    </div>
                    <div class="form-group">       
                      <label>Stok</label>
                      <input name="stok" type="number" placeholder="Stok Barang" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="d-block">Upload Image</label>       
                      <input type="file" name="userfile">
                    </div>
                    <div class="form-group">       
                      <input type="submit" value="Submit" class="btn btn-primary float-right">
                    </div>
                  </form>
                </div>
              </div>
            </div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Barang
            </div>
            <div class="card-body">
                <!-- PENGECEKAN ERROR -->
                <?php if( validation_errors() ) : ?>
                    <!-- PESAN PEMBERITAHUAN KALAU ADA ERROR -->
                    <div class="alert alert-warning" role="alert">
                        <?= validation_errors(); ?>
                    </div>                    
                <?php endif; ?>
                

            <!-- action nya tidak didisi supaya ditangani oleh controller  -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="namabarang">Nama Barang</label>
                        <input type="text" name="namabarang" class="form-control" id="namabarang" >
                    </div>
                    <div class="form-group">
                        <label for="jenisbarang">Jenis Barang</label>
                        <select class="form-control" id="jenisbarang" name="jenisbarang">
                            <option value="Tas Raket">Tas Reket</option>
                            <option value="Shuttlecock">Shuttlecock</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" >
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" >
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Barang 1</button>
                    <!-- <a href="<?= base_url() ?>barang" class="">Tambah Barang</a> -->
                </form>
            </div>
        </div>
            
        </div>
    </div> 
</div>
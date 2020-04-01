<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['nama_barang']; ?></h5>
                    <p class="card-text">Anda bisa mendapatkan <?= $barang['nama_barang']; ?> dengan Harga Rp. <?= $barang['harga']; ?>. Kondisi nya <?= $barang['keterangan']; ?>. </p>
                    <a href="<?= base_url(); ?>barang" class="btn btn-primary">Ke Daftar Barang</a>
                </div>
            </div>
        </div>
    </div>
</div>

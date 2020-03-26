<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3><?= $judul; ?></h3>
            <ul class="list-group">
                <?php foreach($barang as $brg) : ?>
                    <li class="list-group-item"><?= $brg['nama_barang']; ?></li>
                <?php endforeach; ?>
                
                
            </ul>
        </div>
    </div>
</div>    
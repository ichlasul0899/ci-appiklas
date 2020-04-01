<div class="container">

    <!-- PENGECEKAN FLASH DATA , 'flash' diambil dari function tambah-->
    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
        
    <?php endif; ?>
    

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>barang/tambah" class="btn btn-primary">Tambah barang</a>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-6">


            <h3><?= $judul; ?></h3>
            <ul class="list-group">
                <?php foreach($barang as $brg) : ?>
                    <li class="list-group-item">
                        <?= $brg['nama_barang']; ?>
                        <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang'] ; ?>" class="badge btn-danger float-right" onclick="return confirm('Are you sure ? ');">hapus</a>
                        <a href="<?= base_url(); ?>barang/detail/<?= $brg['id_barang'] ; ?>" class="badge btn-primary float-right" >detail</a>
                    </li>
                <?php endforeach; ?>
                
                
            </ul>
        </div>
    </div>
</div>    
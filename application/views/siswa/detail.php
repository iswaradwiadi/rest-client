<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Siswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $siswa['id_siswa']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $siswa['nama_siswa']; ?></h6>
                    <p class="card-text"><?= $siswa['nomor_induk']; ?></p>
                    <p class="card-text"><?= $siswa['jurusan']; ?></p>
                    <p class="card-text"><?= $siswa['kelas']; ?></p>
                    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>
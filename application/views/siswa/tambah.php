<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data siswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_siswa">Id Siswa</label>
                            <input type="text" name="id_siswa" class="form-control" id="id_siswa">
                            <small class="form-text text-danger"><?= form_error('id_siswa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_siswa">Nama siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
                            <small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nomor_induk">Nomor Induk</label>
                            <input type="text" name="nomor__induk" class="form-control" id="nomor_induk">
                            <small class="form-text text-danger"><?= form_error('nomor_induk'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan">
                            <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Jurusan</label>
                            <input type="text" name="kelas" class="form-control" id="kelas">
                            <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
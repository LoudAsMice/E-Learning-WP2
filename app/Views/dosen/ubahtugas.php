<!-- Begin Page Content --> 
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-lg-9">
        <?= session()->getFlashdata('pesan');?>
            <form action="<?= base_url('dosen/ubahtugas').'/'.$tugas['id'];?>" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <select name="prodi" class="form-control form-control-user">
                            <option value="<?= $tugas['prodi'];?>"><?= $tugas['prodi'];?></option>
                        <?php if($tugas['prodi'] == 'Ilmu Komputer') {?>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Ilmu Ekonomi">Ilmu Ekonomi</option>
                        <?php }elseif($tugas['prodi'] == 'Ilmu Komunikasi'){?>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Ilmu Ekonomi">Ilmu Ekonomi</option>
                        <?php }elseif($tugas['prodi'] == 'Ilmu Ekonomi'){?>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Matakuliah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="<?= $tugas['matakuliah'];?>">
                        <small class="text-danger pl-3"><?= $validation->getError('matakuliah');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $tugas['judul'];?>">
                        <small class="text-danger pl-3"><?= $validation->getError('judul');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $tugas['deskripsi'];?>">
                        <small class="text-danger pl-3"><?= $validation->getError('deskripsi');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Pertemuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pertemuan" name="pertemuan" value="<?= $tugas['pertemuan'];?>">
                        <small class="text-danger pl-3"><?= $validation->getError('pertemuan');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link" name="link" value="<?= $tugas['link'];?>">
                        <small class="text-danger pl-3"><?= $validation->getError('link');?></small>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button class="btn btn-dark" onclick="history.back();return false"> Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>

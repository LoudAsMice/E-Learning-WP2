<!-- Begin Page Content --> 
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-lg-9"> 
            <?php if (session('role_id') == 2){?>
            <form action="<?= base_url('user/ubahprofil');?>" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nip" name="nip" value="<?= $dosen['nip'];?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama'];?>">
                        <small class="text-danger pl-1"><?= $validation->getError('nama');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $dosen['email'];?>">
                        <small class="text-danger pl-1"><?= $validation->getError('nama');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dosen['alamat'];?>">
                        <small class="text-danger pl-1"><?= $validation->getError('nama');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        Gambar
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile').'/'.$user['image'];?>" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label for="image" class="custom-file-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button class="btn btn-dark" onclick="window.history.back"> Kembali</button>
                </div>
            </form>
            <?php }?>
            <?php if (session('role_id') == 3){?>
            <form action="<?= base_url('user/ubahprofil');?>" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $mhs['nim'];?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama'];?>">
                        <small class="text-danger pl-1"><?= $validation->getError('nama');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $mhs['email'];?>">
                        <small class="text-danger pl-1"><?= $validation->getError('email');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?= $mhs['fakultas'];?>" readonly>
                        <small class="text-danger pl-1"><?= $validation->getError('fakultas');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $mhs['prodi'];?>" readonly>
                        <small class="text-danger pl-1"><?= $validation->getError('prodi');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mhs['alamat'];?>">
                        <small class="text-danger pl-1"><?= $validation->getError('alamat');?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        Gambar
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile').'/'.$user['image'];?>" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label for="image" class="custom-file-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button class="btn btn-dark" onclick="history.back();return;"> Kembali</button>
                </div>
            </form>
            <?php }?>
        </div>
    </div>
</div>

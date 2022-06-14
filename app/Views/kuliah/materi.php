<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?= session()->getFlashdata('pesan');?>
            <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-alt"> Buku Baru</i></a> -->
            <!-- if mahasiswa -->
            <table class="table table-hover" id="mytable">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Matakuliah</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">Pertemuan</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Link Materi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $a = 1;
                        foreach($materi as $m) {?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $m['matakuliah'];?></td>
                        <td><?= $m['nama'];?></td>
                        <td><?= $m['pertemuan'];?></td>
                        <td><?= $m['judul'];?></td>
                        <td><?= $m['deskripsi'];?></td>
                        <td><?= $m['link'];?></td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End of Main Content -->

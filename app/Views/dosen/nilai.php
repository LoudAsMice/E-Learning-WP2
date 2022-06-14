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
                        <th scope="col">Prodi</th>
                        <th scope="col">Matakuliah</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Link Tugas</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $a = 1;
                    foreach($nilai as $n) {?>
                    <tr>
                        <td><?= $a++;?></td>
                        <td><?= $n['prodi'];?></td>
                        <td><?= $n['matakuliah'];?></td>
                        <td><?= $n['nim'];?></td>
                        <td><?= $n['nama'];?></td>
                        <td><?= $n['judul'];?></td>
                        <td><?= $n['link'];?></td>
                        <td><?= $n['komentar'];?></td>
                        <td><?= $n['nilai'];?></td>
                        <td>
                        <a href="<?= base_url('dosen/send').'/'.$n['id'];?>" class="btn btn-success">Input Nilai</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End of Main Content -->

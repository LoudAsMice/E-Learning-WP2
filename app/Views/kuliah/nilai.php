<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?= session()->getFlashdata('pesan');?>
            <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-alt"> Buku Baru</i></a> -->
            <!-- if mahasiswa -->
            <div class="table-responsive">
            <table class="table table-hover table-stripped table-success" id="dataTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Matakuliah</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Link Tugas</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $a = 1;
                        foreach($nilai as $m) {?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $m['matakuliah'];?></td>
                        <td><?= $m['judul'];?></td>
                        <td><?= $m['link'];?></td>
                        <td><?= $m['komentar'];?></td>
                        <td><?= $m['nilai'];?></td>
                        <td><?= date('d-m-Y H:i:s', $m['tanggal']);?></td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

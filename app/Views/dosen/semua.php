<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?= session()->getFlashdata('pesan');?>
            <div class="table-responsive">
            <table class="table table-hover table-success" id="dataTable">
                <thead class="thead-dark">
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
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<h5>Halaman Data Siswa.</h5>
<a href="?url=tambah-siswa" class="btn btn-dark"> Tambah Siswa </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>NO</td>
        <td>NISN</td>
        <td>NIS</td>
        <td>NAMA</td>
        <td>Kelas</td>
        <td>ALAMAT</td>
        <td>NO TELP</td>
        <td>SPP</td>
        <td>Edit</td>
        <td>Hapus</td>

    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER By nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nisn'] ?></td>
        <td><?= $data['nis']?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['nama_kelas']?></td>
        <td><?= $data['alamat']?></td>
        <td><?= $data['no_telp']?></td>
        <td><?= $data['tahun']?> - <?= number_format($data['nominal'],2,',','.');?></td>
        <td>
            <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-success'>EDIT</a>
        </td>
        <td>
            <a onclick="return confirm('Apakah Anda Ingin Menghapus Data')" 
            href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-danger'>HAPUS</a>
        </td>
    </tr>
    <?php } ?>

</table>
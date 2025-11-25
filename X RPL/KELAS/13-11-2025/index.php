<form action="" method="POST">
    <label for="nis">NIS</label>
    <input type="number" name="nis" id="nis" required><br>

    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" required><br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat"><br>

    <label for="telepon">Telepon</label>
    <input type="number" name="telepon" id="telepon"><br>

    <input type="submit" name="simpan" value="simpan">
</form>

<?php
$db = 'dbsekolah';
$host = 'localhost';
$user = 'root';
$password = '';

$koneksi = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO tblsiswa (nis, nama, alamat, telepon)
            VALUES ($nis, '$nama', '$alamat', '$telepon')";
    mysqli_query($koneksi, $sql);
}

$sql = "SELECT * FROM tblsiswa";
$query = mysqli_query($koneksi, $sql);
?>

<table border=1>
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($siswa = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $siswa['NIS']; ?></td>
                <td><?php echo $siswa['Nama']; ?></td>
                <td><?php echo $siswa['alamat']; ?></td>
                <td><?php echo $siswa['telepon']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

echo $siswa;

?>
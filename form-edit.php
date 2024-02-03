<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi PPDB by WebPro</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="shortcut icon" href="logo-programming.jpg" type="image/x-icon">
</head>
<body>
    <header>
    <h1>WebPro</h1>
    <h3>Penerima Peserta Didik Baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
            <li><a href="https://www.tesla.com/">Pendaftar</a></li>
        </ul>
    </nav>
    <h4>formulir edit PPDB</h4>
    <?php
    include_once("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-edit.php" method="post">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name ="nama" value ="<?php echo $r['nama']; ?>" require>
            </div>
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="alamat" cols="30" rows="10"><?= $r['alamat'];?></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name ="jenis_kelamin" <?= $r['jenis_kelamin'] == 'laki laki' ? 'checked' : ''?> value="laki laki">laki laki
                <input type="radio" name ="jenis_kelamin" <?= $r['jenis_kelamin'] == 'perempuan' ? 'checked' : ''?> value="perempuan">perempuan
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="islam" <?= $r['agama'] == 'islam' ? 'selected' : ''?>>islam</option>
                    <option value="kristen" <?= $r['agama'] == 'kristen' ? 'selected' : ''?>>Kisten</option>
                    <option value="katholik" <?= $r['agama'] == 'katholik' ? 'selected' : ''?>>katholik</option>
                    <option value="hindu" <?= $r['agama'] == 'hindu' ? 'selected' : ''?>>hindu</option>
                    <option value="Budha"  <?= $r['agama'] == 'Budha' ? 'selected' : ''?>>Budha</option>
                    <option value="khonghucu"  <?= $r['agama'] == 'khonghucu' ? 'selected' : ''?>>khonghucu</option>
                </select>
            </div>
        </div>
        <div>
            <label for="">Sekolah Asal</label>
            <input type="text" name ="sekolah_asal" value="<?= $r['sekolah_asal']; ?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
            <input type="reset">
            <input type="submit"  name="update" value="update">
        </div>
    
    </form>
    </div>
    <footer>
        <hr>
        <i>Di buat dengan &copy:by <b>Student Day Programming</b></i>
    </footer>
</body>
</html>
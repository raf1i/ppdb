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
    <h4>formulir PPDB</h4>
    <div>
        <form action="proses-pendaftaran.php" method="post">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name ="nama">
            </div>
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="alamat" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name ="jenis_kelamin" value="laki-laki">laki laki
                <input type="radio" name ="jenis_kelamin" value="perempuan">perempuan
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="islam">islam</option>
                    <option value="kristen">Kisten</option>
                    <option value="katholik">katholik</option>
                    <option value="hindu">hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="khonghucu">khonghucu</option>
                </select>
            </div>
        </div>
        <div>
            <label for="">Sekolah Asal</label>
            <input type="text" name ="sekolah_asal">
        </div>
        <div>
            <input type="reset">
            <input type="submit"  name="simpan" value="Simpan">
        </div>
    
    </form>
    </div>
    <footer>
        <hr>
        <i>Di buat dengan &copy:by <b>Student Day Programming</b></i>
    </footer>
</body>
</html>
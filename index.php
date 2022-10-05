<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form beasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="container">
            <h1>Form Beasiswa</h1>
            <form action="form_add_aksi.php" method="POST">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat_lahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" namne="tanggal_lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jk">
                                <option>~~Pilih Gender~~</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td><input type="number" name="no_telepon"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Jenjang Pendidikan</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jp" value="SD">SD
                            <input type="radio" name="jp" value="SMP">SMP
                            <input type="radio" name="jp" value="SMA">SMA
                            <input type="radio" name="jp" value="Perguruan Tinggi">Perguruan Tinggi
                        </td>
                    </tr>
                    <tr>
                        <td>Total Donasi</td>
                        <td>:</td>
                        <td><input type="number" name="total_donasi"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Donasi</td>
                        <td>:</td>
                        <td><input type="date" namne="tanggal_donasi"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="kirim">Kirim</button>
                            <button type="reset" name="reset">Hapus</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
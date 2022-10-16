<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('nama'); ?>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('nis'); ?>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('kelas'); ?>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggal" id="tanggal" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('tanggal'); ?>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat" id="tempat" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('tempat'); ?>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="textarea" name="alamat" id="alamat" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('alamat'); ?>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis" id="jenis" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="Jenis" id="jenis" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih SKS</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Katholik">Kristen Katholik</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
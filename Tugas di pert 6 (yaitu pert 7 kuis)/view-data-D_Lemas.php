<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data D_Lemas</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan='3'>
                    Tampil data D_Lemas
                </th>
            </tr>
            <tr>
                <td colspan='3'>
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama siswa</th>
                <th>:</th>
                <td>
                    <?=$nama;?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?=$NIS;?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?=$kelas;?>
                </td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td>
                    <?=$tanggal_lahir;?>
                </td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td>:</td>
                <td>
                    <?=$tempat_lahir;?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?=$alamat;?>
                </td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>
                    <?=$jenis_kelamin;?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?=$agama;?>
                </td>
            </tr>
            <tr>
                <td colspan='3' align='center'>
                    <a href="<?=base_url('D_Lemas');?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
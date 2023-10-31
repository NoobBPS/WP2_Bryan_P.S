<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
    Program D-Lemas
    <center>
        <form action="<?=base_url('D_Lemas/cetak');?>" method='post'>
        <table>
            <tr>
                <th colspan='3'>
                Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan='3'>
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type='text' name='nama' id='nama'>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td>
                    <input type='text' name='NIS' id='NIS'>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <input type='text' name='kelas' id='kelas'>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <input type='text' name='tanggal_lahir' id='tanggal_lahir'>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <input type='text' name='tempat_lahir' id='tempat_lahir'>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <input type='text' name='alamat' id='alamat'>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <input type='radio' name='jenis_kelamin' value='laki-laki'>
                    <label for="laki-laki">laki-laki</label><br>
                    <input type='radio' name='jenis_kelamin' value='perempuan'>
                    <label for="perempuan">perempuan</label>
    
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <th>:</th>
                <td>
                    <label for="agama"></label>
                    <select name="agama">
                        <option value="islam">Islam</option>
                        <option value="protestant">Kristen Protestan</option>
                        <option value="catholic">Kristen Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Budha</option>
                        <option value="confucian">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value='submit'>
                </td>
            </tr>
        </table>
</body>
</html>
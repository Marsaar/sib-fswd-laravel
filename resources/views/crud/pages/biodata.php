<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/javascript/bootstrap.bundle.min.js"></script>
    <title>Hasil Biodata PHP</title>
</head>
<body>

    <table>
        <tr>
            <th>Photo</th>
            <th colspan="2">Identitas Diri</th>
        </tr>

        <tr>
            <td rowspan="7" align="center">
                <img src="<?php echo $_POST['foto']; ?>" height="300px" width="200px" alt="">
            </td>
            <td>
                Nama Lengkap
            </td>
            <td>
                <?php echo $_POST['nama']; ?>
            </td>
        </tr>

        <tr>
            <td>
               Tempat, Tanggal Lahir
            </td>
            <td>
                <?php echo $_POST['tmplahir']; ?>, 
                <?php echo $_POST['tgllahir']; ?>
            </td>
        </tr>
        <tr>
            <td>
               Jenis Kelamin
            </td>
            <td>
                <?php echo $_POST['kelamin']; ?>
            </td>
        </tr>
        <tr>
            <td>
               Alamat
            </td>
            <td>
                <?php echo $_POST['alamat']; ?>
            </td>
        </tr>
        <tr>
            <td>
               Riwayat Pendidikan
            </td>
            <td>
                <?php echo $_POST['riwayat']; ?>
            </td>
        </tr>
        <tr>
            <td>
               Hobby
            </td>
            <td>
                <?php echo $_POST['hobi']; ?>
            </td>
        </tr>
    </table>
</body>
</html>
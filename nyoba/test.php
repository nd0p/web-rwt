<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nama = ["Nizar", "Jonathan", "ghatisa", "memet", "niken", "adit (cina)"]; ?>
    <h1>Absensi</h1>
    <?php for ($i=0; $i <count($nama); $i++) {; ?>
    <table border="2">
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $nama[$i];?></td>
        </tr>
    </table>
    <?php };?>
</body>
</html>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
</head>
<body>
    <h1>Halo, <?= $name; ?></h1>
    <p>Daftar pempek:</p>
    <ul>
        <?php foreach ($food as $fo) : ?>
            <li><?= $fo['name'];?> - Rp<?= $fo['price'];?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
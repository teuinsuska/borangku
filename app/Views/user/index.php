<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BorangKu | <?= $title; ?></title>
</head>

<body>
  <h1>
    Hallo <?= $title ?>
  </h1>
  <h2>Nim kamu adalah: <?= $nim; ?></h2>
  <h2>Status kamu adalah: <?= $status; ?></h2>
  <h2>E-mail kamu adalah: <?= $email; ?></h2>
  <h2>Kamu adalah Angkatan: <?= $angkatan; ?></h2>
  <img src="https://iraise.uin-suska.ac.id/site/image/id/<?= $nim; ?>" alt="" width="200" height="300">
  <button type="button" onclick="window.location.href='<?= base_url('/logout'); ?>'">Keluar</button>
  <!-- Coming soon -->
  <!-- <img src="http://103.193.19.228/otomasi/foto/20<?= $angkatan; ?>/<?= $nim; ?>.jpg" alt="" width="200" height="300"> -->
</body>

</html>
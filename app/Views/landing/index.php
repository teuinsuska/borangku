<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/landing.css" />
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/landingresponsive.css" />
  <!-- My Icon -->
  <link rel="icon" href="<?= base_url('assets') ?>/img/icon.png" />
  <!-- Title -->
  <title>TheSiS | <?= $title; ?></title>
</head>

<body>
  <header>
    <div class="container">
      <div class="header-left">
        <img class="logo" src="<?= base_url('assets') ?>/img/logo-head.png">
      </div>
      <!-- Tambahkan menu ikon dibaris bawah -->
      <span class="fa fa-bars menu-icon"></span>
      <div class="header-right">
        <!-- <a href="<?= base_url('guide') ?>">Simulasi</a> -->
        <a href="<?= base_url('register') ?>">Daftar</a>
        <a href="<?= base_url('login') ?>" class="login">Masuk</a>
      </div>
    </div>
  </header>
  <div class="top-wrapper">
    <div class="container">
      <h1>BorangKu</h1>
      <h1>Aplikasi Generate Borang untuk Perlengkapan KP/ProMin dan TA</h1>
      <p>BorangKu merupakan aplikasi yang mempermudah pembuatan Borang untuk keperluan KP/ProMin dan Tugas Akhir berbasis Web.</p>
      <p>Borangku diharapkan memberikan kemudahan mahasiswa untuk membuat seluruh Perlengkapan Borang.</p>
      <div class="btn-wrapper">
        <a href="<?= base_url('kp') ?>" class="btn facebook">KP/ProMin</a>
        <a href="<?= base_url('ta') ?>" class="btn twitter">Tugas Akhir</a>
        <p>atau</p>
        <a href="<?= base_url('guide') ?>" class="btn signup">Panduan</a>
      </div>
    </div>
  </div>
  <div class="lesson-wrapper">
    <div class="container">
      <div class="heading">
        <h2>Permudah pembuatatan borang kelengkapan anda!</h2>
      </div>
      <div class="lessons">
        <div class="lesson">
          <div class="lesson-icon">
            <img src="<?= base_url('assets') ?>/img/jQuery.png">
            <p>Generate</p>
          </div>
          <p class="txt-contents">Buat Kelengkapan borang anda secara otomatis.</p>
        </div>
        <div class="lesson">
          <div class="lesson-icon">
            <img src="<?= base_url('assets') ?>/img/html.png">
            <p>Bot Support</p>
          </div>
          <p class="txt-contents">Terima Hasilnya melalui Bot Whatsapp kami.</p>
        </div>
        <div class="lesson">
          <div class="lesson-icon">
            <img src="<?= base_url('assets') ?>/img/ruby.png">
            <p>E-Mail</p>
          </div>
          <p class="txt-contents">Anda juga dapat menerima borang melalui email yag telah didaftarkan.</p>
        </div>
        <div class="lesson">
          <div class="lesson-icon">
            <img src="<?= base_url('assets') ?>/img/php.png">
            <p>Support</p>
          </div>
          <p class="txt-contents">Dapatkan bantuan terkait perosedur pembuatan borang anda.</p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="message-wrapper">
    <div class="container">
      <div class="heading">
        <h1>Jika HiMaTE.... | Berkaryalah</h1>
        <h2>Apakah Anda siap untuk bergabung menjadi pengembang sistem ini?</h2>
        <h3>Ayo belajar coding, ayo belajar menjadi lebih kreatif!</h3>
      </div>
      <a href="https://github.com/teuinsuska/borangku" target="_blank">
        <span class=" btn message">About Us</span>
      </a>
    </div>
  </div>
  <footer>
    <div class="container">
      <img src="<?= base_url('assets') ?>/img/logo-foot.png">
      <p>Form Kelengkapan KP/TA</p>
      <p><i>Copyleft of</i> KAnggara75<i class="fa fa-copyright fa-flip-horizontal" aria-hidden="true"></i>| <?= date(' M Y'); ?></p>
    </div>
  </footer>
</body>

</html>
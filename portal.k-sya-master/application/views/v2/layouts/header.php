<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>K-Sya</title>
  <!-- <link rel="shortcut icon" type="image/x-icon" href="http://development.kktpti.org/theme/img/logo.png"> -->
  <link rel="manifest" href="<?= base_url('assets/v2')?>/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="<?= base_url('assets/v2')?>/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <link href="<?= base_url('assets/v2')?>/assets/css/theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85"
      data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('v2/beranda')?>">
          <!-- <img class="d-inline-block align-top img-fluid" src="http://development.kktpti.org/theme/img/logo.png" alt=""
            width="150" /> -->
          <span class="text-theme font-monospace fs-4 ps-2"></span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2">
              <a class="nav-link fw-medium active" aria-current="page" href="<?= base_url('v2/beranda')?>">Beranda</a>
            </li>
            <li class="dropdown mt-2 nav-item px-2">
              <div class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> Tentang Kami </div>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url('')?>">Sejarah</a>
                <a class="dropdown-item" href="<?= base_url('')?>">Visi & Misi</a>
                <a class="dropdown-item" href="<?= base_url('')?>">Struktur Organisasi</a> 
                <!-- <a class="dropdown-item" href="<?= base_url('')?>">Teknologi KKT-PTI</a> -->
                <a class="dropdown-item" href="<?= base_url('v2/mitra')?>">Mitra</a>
              </ul>
            </li>
            <!-- <li class="dropdown mt-2 nav-item px-2">
              <div class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> Galeri </div>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url('v2/foto')?>">Foto</a>
                <a class="dropdown-item" href="<?= base_url('v2/vidio')?>">Video</a>
              </ul>
            </li> -->
            <li class="nav-item px-2">
              <a class="nav-link fw-medium" href="<?= base_url('v2/blog')?>">Blog</a>
            </li>
            <li class="nav-item px-2">  
              <a class="nav-link fw-medium" href="<?= base_url('v2/hubungi_kami')?>">Hubungi Kami </a>
            </li>
          </ul> 
          <!-- <form class="d-flex"> -->
            <a href="http://member.kktpti.org/" class="btn btn-lg bg-gradient order-0" type="submit" style="border:2px solid #71ae6c;color:#71ae6c" >
              Masuk</a>  
            <a href="http://member.kktpti.org/registrasi" class="btn btn-lg btn-success bg-gradient order-0" type="submit" style="margin-left:12px;">
              Daftar</a>  
          <!-- </form> -->
        </div>
      </div>
    </nav>
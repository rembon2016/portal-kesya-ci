<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>K-SYA</title>
  <!-- <link rel="shortcut icon" type="image/x-icon" href="http://development.kktpti.org/theme/img/logo.png"> -->
  <link rel="manifest" href="<?= base_url('assets/v2')?>/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="<?= base_url('assets/v2')?>/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <link href="<?= base_url('assets/v2')?>/assets/css/theme.css" rel="stylesheet" />
  <link href="https://icono-49d6.kxcdn.com/icono.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src="<?= base_url('assets/v2')?>/vendors/@popperjs/popper.min.js"></script>
  <script src="<?= base_url('assets/v2')?>/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/v2')?>/vendors/is/is.min.js"></script>
  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="<?= base_url('assets/v2') ?>/assets/js/theme.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  
  

    <!-- <style>
      html,body{
        overflow-x: hidden;
      }


      .kk1:nth-child(3) img {
        width: calc(100% - 90px);
      }

      .kk1:nth-child(4) img {
        width: calc(100% - 90px);
      }

      nav.navbar {
        margin-top: 20px !important;
      }

      #carouselExampleCaptions {
        margin-top: 100px !important;
      }

            
      .audio-player {
          height: auto;
          width: 100%;
          background: #444;
          /* box-shadow: 0 0 20px 0 #000a; */
          font-family: arial;
          color: white;
          font-size: 0.75em;
          overflow: hidden;
          display: grid;
          grid-template-rows: auto;
          z-index: 9999;
          position: fixed;
      }
      .audio-player .timeline {
        background: #5EB462;
        width: 100%;
        position: relative;
        cursor: pointer;
        box-shadow: 0 2px 10px 0 #0008;
      }
      .audio-player .timeline .progress {
        background: #E8D707;
        width: 0%;
        height: 100%;
        transition: 0.25s;
      }
      .audio-player .controls {
        display: flex;
        justify-content: space-between;
        align-items: stretch;
        padding: 0 20px;
      }
      .audio-player .controls > * {
        display: flex;
        align-items: center;
      }
      .audio-player .controls .toggle-play.play {
        cursor: pointer;
        position: relative;
        left: 0;
        height: 0;
        width: 0;
        border: 7px solid #0000;
        border-left: 13px solid white;
      }
      .audio-player .controls .toggle-play.play:hover {
        transform: scale(1.1);
      }
      .audio-player .controls .toggle-play.pause {
        height: 15px;
        width: 20px;
        cursor: pointer;
        position: relative;
      }
      .audio-player .controls .toggle-play.pause:before {
        position: absolute;
        top: 0;
        left: 0px;
        background: white;
        content: "";
        height: 15px;
        width: 3px;
      }
      .audio-player .controls .toggle-play.pause:after {
        position: absolute;
        top: 0;
        right: 8px;
        background: white;
        content: "";
        height: 15px;
        width: 3px;
      }
      .audio-player .controls .toggle-play.pause:hover {
        transform: scale(1.1);
      }
      .audio-player .controls .time {
        display: flex;
      }
      .audio-player .controls .time > * {
        padding: 2px;
      }
      .audio-player .controls .volume-container {
        cursor: pointer;
        position: relative;
        z-index: 2;
      }
      .audio-player .controls .volume-container .volume-button {
        height: 26px;
        display: flex;
        align-items: center;
      }
      .audio-player .controls .volume-container .volume-button .volume {
        transform: scale(0.7);
      }
      .audio-player .controls .volume-container .volume-slider {
        position: absolute;
        left: -3px;
        top: 15px;
        z-index: -1;
        width: 0;
        height: 15px;
        background: #eee;
        /* box-shadow: 0 0 20px #000a; */
        transition: 0.25s;
      }
      .audio-player .controls .volume-container .volume-slider .volume-percentage {
        background: coral;
        height: 100%;
        width: 75%;
      }
      .audio-player .controls .volume-container:hover .volume-slider {
        left: -123px;
        width: 120px;
      }

      .carousel-inner .carousel-item {
          height : 700px;
      }

      @media(max-width: 501px){
        .carousel-inner .carousel-item {
          height : 260px;
      }

      }

      .carousel-inner .carousel-item img {
          height : 100%;
          object-fit: cover;
      }
    </style> -->
</head>

<body>
  
<!-- <div class="audio-player">
 
 <div class="controls">
   <div class="play-container">
     <div class="toggle-play play">
   </div>
   </div>
   <div class="time">
     <div class="current">0:00</div>
     <div class="divider">/</div>
     <div class="length"></div>
   </div>
    <div class="timeline">
   <div class="progress"></div>
 </div>
   <div class="volume-container">
     <div class="volume-button">
       <div class="volume icono-volumeMedium"></div>
     </div>
     
     <div class="volume-slider">
       <div class="volume-percentage"></div>
     </div>
   </div>
 </div>
</div> -->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light "
      data-navbar-on-scroll="data-navbar-on-scroll" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16);">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('beranda')?>">
          <img class="d-inline-block align-top img-fluid" src="<?php echo site_url();?>assets/images/kesya.png" alt="kesya"
            width="180" />
          <span class="text-theme font-monospace fs-4 ps-2"></span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-4">
            <div class="row justify-content-lg-between min-vh-10" style="padding-left:9rem">
              <a class="nav-link fw-medium active" aria-current="page" href="<?= base_url('beranda')?>">Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link fw-medium" href="<?= base_url('tentang_kami')?>">Fitur</a>
            </li>
            <!-- <li class="dropdown mt-2 nav-item px-2">
              <div class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> Galeri </div>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url('foto')?>">Foto</a>
                <a class="dropdown-item" href="<?= base_url('vidio')?>">Video</a>
              </ul>
            </li> -->
            <li class="nav-item px-3">
              <a class="nav-link fw-medium" href="<?= base_url('mitra')?>">Screenshoot</a>
            </li>
            <li class="nav-item px-3">  
              <a class="nav-link fw-medium" href="<?= base_url('hubungi_kami')?>">Bantuan</a>
            </li>
          </ul> 
          <!-- <form class="d-flex"> -->
            <a href="https://kasya.rembon.com/" class="btn btn-lg bg-gradient order-0" type="submit" style="border:2px solid #71ae6c;color:#71ae6c" >
              Masuk</a>  
            <a href="https://kasya.rembon.com/register" class="btn btn-lg btn-success bg-gradient order-0" type="submit" style="margin-left:12px;">
              Daftar</a>  
          <!-- </form> -->
        </div> 
      </div>
    </nav>

    <script>
          
    const audioPlayer = document.querySelector(".audio-player");
    const audio = new Audio(
      "<?php echo base_url(); ?>assets/sound.mp3"
    );

    console.dir(audio);

    audio.addEventListener(
      "loadeddata",
      () => {
        audioPlayer.querySelector(".time .length").textContent = getTimeCodeFromNum(
          audio.duration
        );
        audio.volume = .75;
      },
      false
    );

    const timeline = audioPlayer.querySelector(".timeline");
    timeline.addEventListener("click", e => {
      const timelineWidth = window.getComputedStyle(timeline).width;
      const timeToSeek = e.offsetX / parseInt(timelineWidth) * audio.duration;
      audio.currentTime = timeToSeek;
    }, false);

    const volumeSlider = audioPlayer.querySelector(".controls .volume-slider");
    volumeSlider.addEventListener('click', e => {
      const sliderWidth = window.getComputedStyle(volumeSlider).width;
      const newVolume = e.offsetX / parseInt(sliderWidth);
      audio.volume = newVolume;
      audioPlayer.querySelector(".controls .volume-percentage").style.width = newVolume * 100 + '%';
    }, false)

    setInterval(() => {
      const progressBar = audioPlayer.querySelector(".progress");
      progressBar.style.width = audio.currentTime / audio.duration * 100 + "%";
      audioPlayer.querySelector(".time .current").textContent = getTimeCodeFromNum(
        audio.currentTime
      );
    }, 500);

    const playBtn = audioPlayer.querySelector(".controls .toggle-play");
    playBtn.addEventListener(
      "click",
      () => {
        if (audio.paused) {
          playBtn.classList.remove("play");
          playBtn.classList.add("pause");
          audio.play();
        } else {
          playBtn.classList.remove("pause");
          playBtn.classList.add("play");
          audio.pause();
        }
      },
      false
    );

    audioPlayer.querySelector(".volume-button").addEventListener("click", () => {
      const volumeEl = audioPlayer.querySelector(".volume-container .volume");
      audio.muted = !audio.muted;
      if (audio.muted) {
        volumeEl.classList.remove("icono-volumeMedium");
        volumeEl.classList.add("icono-volumeMute");
      } else {
        volumeEl.classList.add("icono-volumeMedium");
        volumeEl.classList.remove("icono-volumeMute");
      }
    });

    function getTimeCodeFromNum(num) {
      let seconds = parseInt(num);
      let minutes = parseInt(seconds / 60);
      seconds -= minutes * 60;
      const hours = parseInt(minutes / 60);
      minutes -= hours * 60;

      if (hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
      return `${String(hours).padStart(2, 0)}:${minutes}:${String(
        seconds % 60
      ).padStart(2, 0)}`;
    }

    </script>
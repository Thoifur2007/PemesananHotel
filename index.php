<?php
include "header.php";
include "koneksi.php";


if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index </title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
    <!-- component -->



<section class="relative  bg-blueGray-50">
<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('');
          ">
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  EXPRO HOTEL
                </h1>
                <p class="mt-4 text-lg text-blueGray-200">
                Selamat datang di Expro Hotel, tempat di mana kenyamanan dan kehangatan bertemu dengan
                layanan berkualitas tinggi. Terletak di jantung Kota Bogor, kami menawarkan pengalaman
                menginap yang tak terlupakan bagi anda.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-10 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Restoran Bergengsi</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                  Para tamu dapat menikmati hidangan lezat dari berbagai masakan
                  internasional di restoran kami yang bergengsi. Dari sarapan lezat hingga makan malam
                  romantis, pengalaman kuliner di Expro Hotel tidak akan terlupakan.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Kamar dan Suite yang Mewah</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                  Setiap kamar di Expro Hotel dirancang dengan
                  rancangan yang modern dan dilengkapi dengan sentuhan klasik yang elegan. Nikmati
                  kenyamanan tempat tidur yang mewah dan pemandangan menakjubkan dari jendela
                  kamar.
                  
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Kolam Renang dan Pusat Kebugaran</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                  Untuk tetap bugar dan rileks selama
                  menginap, kami menyediakan kolam renang yang menyegarkan dan pusat kebugaran
                  lengkap dengan peralatan terkini. Tamu dapat menjaga rutinitas kebugaran mereka atau
                  sekadar bersantai di sekitar kolam renang.
                  </p>
                </div>
              </div>
            </div>
          </div>
           <footer class="relative  pt-8 pb-6 mt-1">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
      </div>
    </div>
  </div>
</footer>
      </section>
      </section>
</body>
</html>
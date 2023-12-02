<?php
if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Password</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans main">
  <!-- Navbar -->
  <nav class="navbar p-4 h-16 fixed top-0 w-full bg-gray-800">
    <div class="container-fluid mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">Sistem Tata Tertib</div>
        <div class="containerBarsMobile toggle_bars_mobile">
            <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
    </div>
</nav>

  <!-- Sidebar -->
  <div class="flex">
    <aside class="p-4 sidebar">
      <div class="profil_db">
        <img src="assets/profil/profil.png" alt="" class="foto_profil">
        <h3 class="nama_profil">Rizky Arifiansyah</h3>
        <div class="containerBars containerBarsDefault">
          <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
      </div>
      <ul>
        <li class="mb-2 sidebar_item"><a href="dosen.php" class="text_sidebar"><img src="assets/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
        <li class="mb-2 sidebar_item"><a href="riwayat_pengaduan.php" class="text_sidebar"><img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Riwayat Pengaduan</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/password.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Ubah Password</span></a></li>
        <li class="mb-2 sidebar_item"><a href="logout.php" class="text_sidebar"><img src="assets/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
      </ul>
    </aside>

    <!-- Content -->
    <div class="pl-8 pb-8 pt-6 pr-8 main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Ubah Password</h1>
      <div class=" bg-white h-10 items-center subtitle_dashboard">
        <div class="ml-4 mt-1">Masukkan Password Baru</div>
      </div>
      <div class=" bg-white p-4 rounded-b-lg border-t-2 border-neutral-300 text-center">
          <label for="newPass">Password Baru:</label>
          <br>
          <input class="w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-3 pl-2" type="password" name="newPass" id="newPass">
          <br>
          <br>
          <label for="newPass">Konfirmasi Password Baru:</label>
          <br>
          <input class="w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-3 pl-2" type="password" name="newPass" id="newPass">
          <br>
          <button type="submit" class="w-[170px] h-[50px] items-center bg-sky-600 rounded-3xl text-white text-2xl font-normal font-['Inter'] mt-5  hover:bg-sky-700">Simpan</button>
      </div>
    </div>
    <script>
    const checkWidth = () => {
        var windowWidth = $(window).width();
        var sidebar = $(".sidebar");

        if (windowWidth <= 768) {
            sidebar.addClass("fixed_sidebar");
            $('.containerBarsMobile').removeClass("toggle_bars_mobile");
            $('.containerBarsDefault').css('visibility', 'hidden');
            $('.containerBars_toggled').css('visibility', 'hidden');
        } else {
            sidebar.removeClass("fixed_sidebar");
            $('.containerBarsMobile').addClass("toggle_bars_mobile");
            $('.containerBarsDefault').css('visibility', 'visible');
            $('.containerBars_toggled').css('visibility', 'visible');
        }
    }
    $(document).ready(function () {
        checkWidth();
        $('.toggle_bars').on("click", function () {
            $('.sidebar').toggleClass('sidebar_toggled');
            $('.main').toggleClass('main_toggled');
        });

        $(window).resize(function () {
            checkWidth();
        });
    });
</script>

</body>

</html>
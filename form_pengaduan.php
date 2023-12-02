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
  <title>Form Pengaduan</title>
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
        <li class="mb-2 sidebar_item"><a href="riwayat_pengaduan.php" class="text_sidebar"><img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Riwayat Pelanggaran</span></a></li>
        <li class="mb-2 sidebar_item"><a href="ubah_password_dosen.php" class="text_sidebar"><img src="assets/icon/password.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Ubah Password</span></a></li>
        <li class="mb-2 sidebar_item"><a href="logout.php" class="text_sidebar"><img src="assets/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
      </ul>
    </aside>

    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content text-center ">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-4xl font-bold mb-5">Ajukan Pengaduan</h1>
      <div class="flex-col bg-white items-center shadow-lg subtitle_dashboard text-center mx-80 shadow-neutral-800">
        <div class="flex-1 bg-white mt-3">
          <label for="nimPengaduan">NIM:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-1" type="text" name="nimPengaduan" id="nimPengaduan">
          <br>
          <br>
          <label for="namaMhsPengaduan">Nama Mahasiswa:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-1" type="text" name="namaMhsPengaduan" id="namaMhsPengaduan">
          <br>
          <br>
          <label for="noHpMhsPengaduan">Nomor Hp Mahasiswa:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-1" type="text" name="noHpMhsPengaduan" id="noHpMhsPengaduan">
          <br>
          <br>
          <label for="jenisPelanggaran">Jenis Pelanggaran:</label>
          <br>
          <select name="jenisPelanggaran" id="jenisPelanggaran" class="border border-neutral-400 w-[250px] h-[40px] rounded-lg">
          <?php
            include "koneksi.php";
            $nip = $_SESSION['username'];
            $query = "SELECT m.nim, m.nama, p.tanggal_pengaduan, pe.tingkat, pe.pelanggaran
            FROM mahasiswa m 
            join pengaduan p on m.nim = p.nim
            join pelanggaran pe on p.pelanggaran_id = pe.pelanggaran_id
            JOIN dosen d on p.nip = d.nip
            WHERE d.nip = '$nip'";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result)
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)) {?>
          <option value="<?=$row['pelanggaran'];?>"><?php echo $row['pelanggaran'];?></option>  
            <?php }?>
          </select>
          <br>
          <br>
          <label for="fotoPengaduan">Upload Foto:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] mt-1" type="file" name="fotoPengaduan" id="fotoPengaduan">
          <br>
          <br>
          <label for="tglPengaduan">Tanggal Pengaduan:</label>
          <br>
          <input class="pl-2 mt-1 border border-neutral-400 w-[250px] h-[40px] rounded-lg " type="date" name="tglPengaduan" id="tglPengaduan" value="<?php echo date('Y-m-d'); ?>" required>
          <br>
          <input type="submit" class="w-[130px] h-[40px] items-center align-center bg-sky-600 rounded-3xl text-white text-2xl font-normal font-['Inter'] mt-3 mb-3 text-center hover:bg-sky-700" value="Simpan"/>
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
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
  <title>Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
        <li class="mb-2 sidebar_item"><a href="riwayat_pengaduan.php" class="text_sidebar"><img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Riwayat Pengaduan</span></a></li>
        <li class="mb-2 sidebar_item"><a href="ubah_password_dosen.php" class="text_sidebar"><img src="assets/icon/password.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Ubah Password</span></a></li>
        <li class="mb-2 sidebar_item"><a  onclick="confirmLogin()" href="#" class="text_sidebar"><img src="assets/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
      </ul>
    </aside>

    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Dashboard Dosen</h1>
      <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
        <div class="flex-1 ml-4">Ringkasan System</div>
      </div>
      <hr class="hr_db">
      <div class="flex bg-white flex-col xl:flex-row">
        <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
          <div class="flex-1 notif_db h-10 flex items-center pl-2">
          <p><b>Info! </b>Berikut adalah Biodata diri anda</p>
          </div>
          <table class="items-center w-full  mt-3">
          <?php
              include "koneksi.php";
              $nip = $_SESSION['username'];
              $query = "SELECT * FROM dosen where nip='$nip'";
              $result = mysqli_query($koneksi, $query);          
              while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tbody>
              <tr>
                <td rowspan="10"><img src="assets/profil/mhs1.png" class="m-auto" alt="profil"></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><?= $row['nama'];  ?></td>
              </tr>
              <tr>
                <td>NIP</td>
                <td><?= $row['nip'];  ?></td>
              </tr>
              <tr>
                <td>TTL</td>
                <td><?= $row['TTL'];  ?></td>
              </tr>
              <tr>
                <td>Jen. Kelamin</td>
                <td><?php if ($row['jenis_kelamin'] == 'L') {
                    echo 'Laki-laki';
                  }else{
                    echo 'Perempuan';
                  }  ?> </td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td><?= $row['pendidikan'];  ?></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td><?= $row['jabatan'];  ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?= $row['email'];  ?></td>
              </tr>
              <tr>
                <td>Phone</td>
                <td><?= $row['no_phone'];  ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><?= $row['alamat'];  ?></td>
              </tr>   
              <?php
              }
              ?>
            </tbody>
          </table>
          <div class="text-center mt-10">
            <a href="form_pengaduan.php" class="text-white text-lg font-sans text-center"><button class="w-[180px] h-[50px] bg-sky-600 hover:bg-sky-700 rounded-xl">
            Ajukan Pengaduan</button></a>
          </div>
        </div>
        <div class="flex-1 bg-white jumlah_pelanggaran shadow-lg">
          <h3 class="pelanggaran_tbr_title">Jumlah Pengaduan</h3>
          <hr class="hr_db">
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-red-700 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">I</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 1</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-orange-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">II</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 2</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-yellow-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">III</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 3</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-yellow-200 rounded-lg grid justify-center items-center text-yellow-600"><p class="text-lg font-bold">IV</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 4</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-green-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">V</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 5</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="bg-red-700 w-[30px] h-[30] rounded-full flex">
              Sangat Berat
            </div>
          </div>
      </div>
    <script>
      const confirmLogin = () => {
          Swal.fire({
            title: 'Apakah anda yakin ingin keluar?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Keluar`,
            denyButtonText: `Batal`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location.href = "logout.php";
            }
          })
        }

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
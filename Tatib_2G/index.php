<?php
include "koneksi.php";

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!empty($_SESSION['level'])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dan Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body class="font-sans main">
    <!-- Navbar -->
    <nav class="navbar p-4 h-16 fixed top-0 w-full bg-gray-800">
      <div class="container-fluid mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">Sistem Tata Tertib</div>
        <!-- <div>
            <a href="#" class="text-white mr-4">Home</a>
            <a href="#" class="text-white mr-4">About</a>
            <a href="#" class="text-white">Contact</a>
        </div> -->
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
          <h3 class="nama_profil">AdminRizky</h3>
          <div class="containerBars containerBarsDefault">
            <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
          </div>
        </div>
        <ul>
          <li class="mb-2 sidebar_item" id="dashboard_nav"><a href="#" class="text_sidebar"><img src="assets/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
          <li class="mb-2 sidebar_item" id="data_dosen_nav"><a href="#" class="text_sidebar"><img src="assets/icon/data_dosen.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Dosen</span></a></li>
          <li class="mb-2 sidebar_item" id="data_mahasiswa_nav"><a href="#" class="text_sidebar"><img src="assets/icon/data_mahasiswa.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Mahasiswa</span></a></li>
          <li class="mb-2 sidebar_item relative" id="laporan_nav">
            <a href="#" class="text_sidebar flex items-center">
              <img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt="">
              <span class="sidebar_text">Laporan</span>
            </a>
            <ul class="left-0 top-full hidden mt-2 bg-white submenu_laporan">
              <li id="laporan_pelanggaran_nav"><a href="#" class="text_sidebar ml-2"><img src="assets/icon/warning.png" class="inline icon_sidebar" alt="">Laporan Pelanggaran</a></li>
              <li id="laporan_kompen_nav"><a href="#" class="text_sidebar ml-2"><img src="assets/icon/centangKotak.png" class="inline icon_sidebar" alt="">Laporan Kompen</a></li>
            </ul>
          </li>

          <li class="mb-2 sidebar_item"><a href="#" onclick="confirmLogin()" class="text_sidebar"><img src="assets/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
        </ul>
      </aside>
      <script>
        // Script untuk menangani keadaan aktif pada elemen
        document.addEventListener('DOMContentLoaded', function() {
          const sidebarItems = document.querySelectorAll('.sidebar_item');

          sidebarItems.forEach(item => {
            item.addEventListener('click', function() {
              sidebarItems.forEach(item => item.classList.remove('sidebar_item_aktif'));
              this.classList.add('sidebar_item_aktif');
            });
          });
        });
      </script>
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
        document.addEventListener('DOMContentLoaded', function() {
          var laporanNav = document.getElementById('laporan_nav');
          var dropdown = laporanNav.querySelector('ul');

          laporanNav.addEventListener('click', function() {
            laporanNav.classList.add('active_dropdown_laporan');
            dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
          });
        });
      </script>
      <!-- Content -->
      <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
        <!-- Dashboard -->
        <div id="dashboard">
          <div class="containerBars_toggled">
            <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
          </div>
          <h1 class="text-2xl font-bold mb-2">Dashboard</h1>

          <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
            <div class="flex-1 ml-4">Ringkasan System</div>
          </div>
          <hr class="hr_db">
          <div class="flex bg-white flex-col xl:flex-row">
            <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
              <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div>
              <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="assets/img/dosen.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Dosen</div>
                      <div class="text-xl block">8</div>
                    </div>
                  </div>


                </div>
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="assets/img/jurusan.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Mahasiswa</div>
                      <div class="text-xl block">8</div>
                    </div>
                  </div>
                </div>
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="assets/img/pelanggaran.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Prodi</div>
                      <div class="text-xl block">8</div>
                    </div>
                  </div>
                </div>
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="assets/img/user.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Pelanggaran</div>
                      <div class="text-xl block">8</div>
                    </div>
                  </div>
                </div>
                <!-- Tambahkan elemen sesuai kebutuhan Anda -->
              </div>

            </div>

            <div class="flex-1 bg-white pelanggaran_terbaru shadow-lg">
              <h3 class="pelanggaran_tbr_title">Laporan Terbaru</h3>
              <hr class="hr_pelanggaran">
              <hr class="hr_db">
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
            </div>
            <!-- Tambahkan elemen sesuai kebutuhan Anda -->
          </div>
        </div>
        <!-- end dashboard -->
        <!-- mulai data dosen  -->
        <?php include 'data_dosen.php' ?>
        <?php include 'data_mahasiswa.php' ?>
        <?php include 'laporan_pelanggaran.php' ?>
        <?php include 'laporan_kompen.php' ?>
        
        <!-- end data dosen  -->
      </div>

      <script>
        $('#data_dosen').hide();
        $('#data_mahasiswa').hide();
        $('#laporan_pelanggaran').hide();
        $('#laporan_kompen').hide();
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
        $('#data_dosen_nav').on("click", function() {
          $('#dashboard').hide();
          $('#data_dosen').show();
          $('#data_mahasiswa').hide();
          $('#laporan_pelanggaran').hide();
          $('#laporan_kompen').hide();
        });
        $('#dashboard_nav').on("click", function() {
          $('#dashboard').show();
          $('#data_dosen').hide();
          $('#data_mahasiswa').hide();
          $('#laporan_pelanggaran').hide();
          $('#laporan_kompen').hide();
        });
        $('#data_mahasiswa_nav').on("click", function() {
          $('#dashboard').hide();
          $('#data_dosen').hide();
          $('#data_mahasiswa').show();
          $('#laporan_pelanggaran').hide();
          $('#laporan_kompen').hide();
        });
        $('#laporan_pelanggaran_nav').on("click", function() {
          $('#dashboard').hide();
          $('#data_dosen').hide();
          $('#data_mahasiswa').hide();
          $('#laporan_pelanggaran').show();
          $('#laporan_kompen').hide();
        });
        $('#laporan_kompen_nav').on("click", function() {
          $('#dashboard').hide();
          $('#data_dosen').hide();
          $('#data_mahasiswa').hide();
          $('#laporan_pelanggaran').hide();
          $('#laporan_kompen').show();
        });
        $(document).ready(function() {
          checkWidth();
          $('.toggle_bars').on("click", function() {
            $('.sidebar').toggleClass('sidebar_toggled');
            $('.main').toggleClass('main_toggled');
          });

          $(window).resize(function() {
            checkWidth();
            // anjay 
          });
        });
        const modalKompen = document.getElementById('static-modal-kompen');
        const showModalKompen = () => {
          $('.sidebar').addClass('sidebar-backdrop');
          modalKompen.classList.remove('hidden');
        }
        const tutupModalKompen = document.getElementById('tutupModalKompen');
        const tutupModalKompen2 = document.getElementById('tutupModalKompen2');


        tutupModalKompen.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen.classList.add('hidden');
        });
        tutupModalKompen2.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen.classList.add('hidden');
        });

        const showModal = () => {
          const modal = document.getElementById('static-modal');
          $('.sidebar').addClass('sidebar-backdrop');
          modal.classList.remove('hidden');
        }


        const buttonTambahDosen = document.getElementById('buttonTambahDosen');
        const staticModal = document.getElementById('static-modal');
        const tutupModal = document.getElementById('tutupModal');
        const tutupModa2 = document.getElementById('tutupModal2');



        tutupModal.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          staticModal.classList.add('hidden');
        });
        tutupModal2.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          staticModal.classList.add('hidden');
        });
      </script>
  </body>

  </html>

<?php
} else {
  header("location: login.php");
}
?>
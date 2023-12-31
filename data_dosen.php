<div id="data_dosen">
  <div class="containerBars_toggled">
    <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
  </div>
  <h1 class="text-2xl font-bold mb-2">Data Dosen</h1>

  <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
    <div class="flex-1 ml-4">Kelola Data Dosen</div>
  </div>
  <hr class="hr_db">
  <div class="flex bg-white">
    <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
      <!-- <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div> -->
      <div class="grid grid-cols-1 gap-4">
        <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
          <table id="tableDosen" class="min-w-full border ">
            <!-- Tambahkan header tabel di sini -->
            <thead>
              <tr class="border-b">
                <th class="py-2 px-4 border-r">Nama Dosen</th>
                <th class="py-2 px-4 border-r">NIP</th>
                <th class="py-2 px-4 border-r">TTL</th>
                <th class="py-2 px-4 border-r">Jen. Kelamin</th>
                <th class="py-2 px-4 border-r">No. Telp</th>
                <th class="py-2 px-4 border-r">Alamat</th>
                <th class="py-2 px-4 border-r">Aksi</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM dosen";
            $result = mysqli_query($koneksi, $query);
            ?>
              <tbody>
              <?php while ($row = mysqli_fetch_assoc($result)) {?>
                <!-- Tambahkan baris-baris data di sini -->
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"> <img src="assets/profil/profil.png" alt="" class="foto_profil_dosen_table inline ">
                    <p class="nama_dosen_table inline"><?= $row['nama']; ?></p>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['nip']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['TTL']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <?php
                      if ($row['jenis_kelamin'] == 'L') {
                      echo '<div class="w-[120px] h-[30px] rounded-full px-1 text-lg font-medium text-blue-800 text-center" style="background-color: #92a9f9;">Laki-Laki</div>';
                    } else {
                      echo '<div class="w-[120px] h-[30px] rounded-full px-1 text-lg font-medium text-rose-600 text-center" style="background-color: #FFB5B5;">Perempuan</div>';
                    }
                    ?>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['no_phone']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['alamat']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <div class="py-2 px-4 flex space-x-1.5">
                      <a href="#" onclick="showModal();" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="#" class="bg-red-500 hover:bg-red-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </td>
                  <!-- Tambahkan data lainnya sesuai kebutuhan -->
                </tr>
              <?php
            }
              ?>
              </tbody>
          </table>
        </div>
        <!-- Tambahkan elemen sesuai kebutuhan Anda -->
      </div>

    </div>

    <!-- Tambahkan elemen sesuai kebutuhan Anda -->
  </div>
</div>
<?php include 'modalTambahEdit.php'?>
<script>
  $(document).ready(function() {


    $('#tableDosen').DataTable({
      rowReorder: {
        selector: 'td:nth-child(2)'
      },
      lengthChange: false,
      responsive: {
        breakpoints: [{
            name: 'bigdesktop',
            width: Infinity
          },
          {
            name: 'meddesktop',
            width: 1480
          },
          {
            name: 'smalldesktop',
            width: 1280
          },
          {
            name: 'medium',
            width: 1188
          },
          {
            name: 'tabletl',
            width: 1024
          },
          {
            name: 'btwtabllandp',
            width: 848
          },
          {
            name: 'tabletp',
            width: 768
          },
          {
            name: 'mobilel',
            width: 480
          },
          {
            name: 'mobilep',
            width: 320
          }
        ]
      }
    });
    $('#tableDosen_filter').append('<div id="buttonTambahDosen"><a onclick="showModal();"data-modal-toggle="static-modal" href="#" class="bg-blue-500 hover:bg-blue-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
  });
</script>
<script>
  // Dapatkan elemen tombol dan modal
  $(document).ready(function(){
    $("#buttonTambahDosen").click(function(){
      $("h3").html("Tambah Data Dosen");
      $("label#nim").html("NIP");
      $("input#nim").attr("name", "nip");
    });
  });
</script>
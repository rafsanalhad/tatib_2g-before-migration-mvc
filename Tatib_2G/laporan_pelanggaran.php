<div id="laporan_pelanggaran">
  <div class="containerBars_toggled">
    <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
  </div>
  <h1 class="text-2xl font-bold mb-2">Laporan Pelanggaran</h1>

  <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
    <div class="flex-1 ml-4">Kelola Data Mahasiswa</div>
  </div>
  <hr class="hr_db">
  <div class="flex bg-white">
    <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
      <!-- <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div> -->
      <div class="grid grid-cols-1 gap-4 mt-5">
        <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
          <table id="tableLaporan" class="min-w-full border ">
            <!-- Tambahkan header tabel di sini -->
            <thead>
              <tr class="border-b">
              <th class="py-2 px-4 border-r">Tanggal</th>
                <th class="py-2 px-4 border-r">Nama Mahasiswa</th>
                <th class="py-2 px-4 border-r">NIM</th>
                <th class="py-2 px-4 border-r">Tingkat</th>
                <th class="py-2 px-4 border-r">Jen. Pelanggaran</th>
                <th class="py-2 px-4 border-r">Aksi</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM dosen";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tbody>
                <!-- Tambahkan baris-baris data di sini -->
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"><?= $row['tanggal']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <p class="nama_dosen_table inline"><?= $row['nama']; ?></p>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['nip']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['TTL']; ?></td>
                  <!-- <td class="py-2 px-4 border-r">
                    <div class="containerJenkel"><?php
                                                  if ($row['jenis_kelamin'] == 'L') {
                                                    echo 'Laki-laki';
                                                  } else {
                                                    echo 'Perempuan';
                                                  }
                                                  ?></div>
                  </td> -->
                  <td class="py-2 px-4 border-r"><?= $row['no_phone']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['alamat']; ?></td>
                  <td class="py-2 px-4 border-r ">
                    <a href="#" onclick="showModalKompen();" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="bg-green-500 hover:bg-green-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fa-solid fa-check"></i></a>
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
<script>
  $(document).ready(function() {


    $('#tableLaporan').DataTable({
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
    // $('#tableMahasiswa_filter').append('<div id="buttonTambahDosen"><a href="#" class="bg-blue-500 hover:bg-blue-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
  });
</script>
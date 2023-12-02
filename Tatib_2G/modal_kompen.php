<div id="static-modal-kompen" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
  <!-- Backdrop -->
  <div class="fixed inset-0 bg-black opacity-50 ">

  </div>

  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full max-w-3xl h-500 p-8 rounded-lg shadow-md relative">
      <!-- Tombol untuk menutup modal -->
      <button id="tutupModalKompen" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-times"></i>
      </button>
      <!-- Konten Modal -->
      <!-- <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1> -->

      <div class="flex flex-col md:flex-row">
        <div class="w-1/4">
          <img src="assets/profil/freya.png" alt="" style="border: none; height: 230px !important;">
        </div>
        <div class="containerFormModal w-3/4 ml-3">
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Nama</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">Freya</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="flex items-center w-200">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">NIM</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">2241720040</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Jenis Kelamin</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">Perempuan</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">No Telp</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">085767456876</p>
              </div>
            </div>
          </div>
          <div class="mb-1">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Jurusan</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">Teknik Informatika</p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">No. Telp Ortu</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">085767456876</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="font-bold text-lg mb-3">Pelanggaran</h3>
      <div>
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-md overflow-hidden">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-2 px-4 border-b">Tanggal</th>
              <th class="py-2 px-4 border-b">Jenis Pelanggaran</th>
              <th class="py-2 px-4 border-b">Tingkat</th>
              <th class="py-2 px-4 border-b">Bukti</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-50">
              <td class="py-2 px-4 border-b">12 November 2023</td>
              <td class="py-2 px-4 border-b">Tidak menjaga kebersihan di seluruh area Polinema</td>
              <td class="py-2 px-4 border-b">Cukup berat</td>
              <td class="py-2 px-4 border-b">
                <a href="#" class="text-blue-500 hover:underline">Download</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <div class="form flex mt-3">
          <div class="block">
            <label for="sanksi">
              <h3 class="font-bold text-base">Sanksi</h3>
            </label>
            <textarea class="w-full h-14 p-2 border rounded-md resize-none focus:outline-none focus:border-blue-500"></textarea>

          </div>
          <div class="block ml-5">
            <label for="sanksi">
              <h3 class="font-bold text-base">Catatan</h3>
            </label>
            <textarea class="w-full h-14 p-2 border rounded-md resize-none focus:outline-none focus:border-blue-500"></textarea>

          </div>
        </div>
      </div>
      <div class="flex w-full">
        <div class="ml-auto">
          <button id="tutupModalKompen2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Tolak
          </button>
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Simpan
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
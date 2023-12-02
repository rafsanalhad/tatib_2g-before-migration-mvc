<div id="static-modal" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
  <!-- Backdrop -->
  <div class="fixed inset-0 bg-black opacity-50 ">

  </div>

  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full max-w-3xl p-8 rounded-lg shadow-md relative">
      <!-- Tombol untuk menutup modal -->
      <button id="tutupModal" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-times"></i>
      </button>

      <!-- Konten Modal -->
      <!-- <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1> -->
      <h3 class="text-2xl mb-7 font-bold">Tambah Data Mahasiswa</h3>
      <div class="flex flex-col md:flex-row">
        <div class="containerGroupImg md:w-1/4">
          <img src="assets/icon/Group.png" alt="" style="padding: 50px;">
        </div>
        <div class="containerFormModal md:w-3/4 ml-3">
          <form class="mb-3">
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="nama" id="nama" class="block text-sm font-medium text-gray-900">Nama</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="nama" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="nim" id="nim" class="block text-sm font-medium text-gray-900">NIM</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="nim" id="nim" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="ttl" id="ttl" class="block text-sm font-medium text-gray-900">TTL</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="ttl" id="ttl" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="jenkel" id="jenkel" class="block text-sm font-medium text-gray-900">Jenis Kelamin
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <select name="pl-2 jenisPelanggaran" id="jenisPelanggaran" class="mt-1 p-2 w-full border rounded-md">  
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    <option value="L" selected>Pilih Jenis Kelamin Anda</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="notelp" class="block text-sm font-medium text-gray-900">No Telp</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="notelp" id="notelp" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="jurusan" class="block text-sm font-medium text-gray-900">Jurusan</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="jurusan" id="jurusan" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="notelp_ortu" class="block text-sm font-medium text-gray-900">No Telp Ortu</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="notelp_ortu" id="notelp_ortu" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="flex w-full">
        <div class="ml-auto">
          <button id="tutupModal2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Tutup
          </button>
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Simpan
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
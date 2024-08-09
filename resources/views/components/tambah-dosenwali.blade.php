<div>
    
    <!-- Main modal tambah-->
    <div id="tambah-dosenwaliModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Tetapkan Dosen Wali
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambah-dosenwaliModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body tambah -->
                    <form action="#">
                        <div class="grid gap-4 mb-4 sm:grid-cols-1">
                            
                            <div>
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas ID</label>
                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Pilih Kelas</option>
                                    <option value="GA">K_001</option>
                                    <option value="PH">K_002</option>
                                </select>
                            </div>
                            <div>
                            <div>
                                <label for="nama_dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dosen</label>
                                <div class="flex items-center">
                                    <input type="checkbox" name="nama_dosen" id="nama_dosen_1" data-kode="D_011" data-nip="0607058401"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <label for="nama_dosen_1" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Andesita Prihantara</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="nama_dosen" id="nama_dosen_2" data-kode="D_012" data-nip="0014058602"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <label for="nama_dosen_2" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Annisa Romadloni</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="nama_dosen" id="nama_dosen_3" data-kode="D_013" data-nip="0609058102"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <label for="nama_dosen_3" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Nur Wahyu Rahadi</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="nama_dosen" id="nama_dosen_4" data-kode="D_014" data-nip="0008089002"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <label for="nama_dosen_4" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Prih Diantono Abda'u</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="nama_dosen" id="nama_dosen_5" data-kode="D_015" data-nip="060058105"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <label for="nama_dosen_5" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Oman Soemantri</label>
                                </div>
                                <!-- Tambahkan lebih banyak checkbox dengan data yang sesuai -->
                            </div>

                            <script>
                                // Pilih semua checkbox dengan atribut name 'nama_dosen'
                                const checkboxes = document.querySelectorAll('input[name="nama_dosen"]');

                                // Tambahkan event listener untuk setiap checkbox
                                checkboxes.forEach(checkbox => {
                                    checkbox.addEventListener('change', function() {
                                        if (this.checked) {
                                            // Ambil data NIP dan Kode Dosen dari atribut data- checkbox yang dipilih
                                            const kode = this.getAttribute('data-kode');
                                            const nip = this.getAttribute('data-nip');
                                            
                                            // Tampilkan data atau lakukan aksi lain dengan data tersebut
                                            alert(
                                                'Kode Dosen : ' + kode + 
                                                '\nNIP : ' + nip  
                                                
                                            );

                                            // Anda bisa menampilkan data ini di tempat lain di halaman sesuai kebutuhan
                                        }
                                    });
                                });
                            </script>
                            </div>

                        <a href="{{ route('route.tambahDosenwali') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tetapkan Dosen Wali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>



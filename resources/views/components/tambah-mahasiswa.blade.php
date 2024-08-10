<div>
    <!-- Main modal tambah-->
    <div id="tambah-mahasiswa" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Tetapkan Mahasiswa
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="tambah-mahasiswa">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body tambah -->
                <form action="{{ route('plottingupdatemahasiswa') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-1">

                        <div>
                            <label for="id_kelas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas ID</label>
                            <select name="id_kelas" id="id_kelas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Pilih Kelas</option>
                                @foreach ($kelas as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="nama_mahasiswa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Mahasiswa</label>
                                @foreach ($mahasiswa as $m)
                                <div class="flex items-center">
                                    <input type="checkbox" name="mahasiswa_ids[]" value="{{ $m->id }}" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <label for="nama_dosen_1"
                                        class="ml-2 text-sm text-gray-900 dark:text-gray-300">{{ $m->nama }}</label>
                                </div>
                                @endforeach


                            <!-- Tambahkan lebih banyak checkbox dengan data yang sesuai -->
                        </div>


                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tetapkan Mahasiswa</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

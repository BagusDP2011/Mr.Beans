@include('AdminDashboardHeader')
<div class="ml-64 p-8">
    <header>
        <h5 class="text-lg font-semibold"><i class="fa fa-users mr-5"></i>List Pengguna</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Username</th>
                        <th scope="col" class="py-3 px-6">Full Name</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                        <th scope="col" class="py-3 px-6">Alamat</th>
                        <th scope="col" class="py-3 px-6">No HP</th>
                        <th scope="col" class="py-3 px-6">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">{{ $user->username }}</td>
                        <td class="py-4 px-6">{{ $user->fullName }}</td>
                        <td class="py-4 px-6">{{ $user->email }}</td>
                        <td class="py-4 px-6">{{ $user->alamat }}</td>
                        <td class="py-4 px-6">{{ $user->noHp }}</td>
                        <td class="py-4 px-6">{{ $user->role }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="fixed bottom-10 right-10">
            <button id="btnCetakResi" class="bg-blue-500 text-white px-4 py-2 rounded shadow-md hover:bg-blue-600">
                Cetak Resi
            </button>
        </div>
        <script>
    // Mengambil tombol "Cetak Resi" berdasarkan ID
    const btnCetakResi = document.getElementById('btnCetakResi');

    // Menambahkan event listener untuk menangani klik tombol
    btnCetakResi.addEventListener('click', async () => {
        try {
            // Mengirim permintaan ke server untuk menghasilkan resi PDF
            const response = await fetch('/cetak/resi', {
                method: 'GET',
            });

            // Memeriksa apakah respons adalah PDF
            if (!response.ok) {
                throw new Error('Gagal menghasilkan resi PDF');
            }

            // Membaca respons sebagai blob
            const blob = await response.blob();

            // Membuat URL objek untuk blob
            const url = window.URL.createObjectURL(blob);

            // Membuat link untuk menampilkan PDF di browser
            const link = document.createElement('a');
            link.href = url;
            link.target = '_blank'; // Buka di jendela/tab baru
            link.click(); // Klik link untuk menampilkan PDF di browser
        } catch (error) {
            console.error(error);
            alert('Terjadi kesalahan saat mencetak resi');
        }
    });
</script>


    </body>
</div>
@include('AdminDashboardFooter')

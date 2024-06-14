@include('AdminDashboardHeader')
<div class="ml-64 p-8">
    <header>
        <h5 class="text-lg font-semibold"><i class="fa fa-users mr-5 mb-3"></i>List Pengguna</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-black">
                <thead class="text-xs text-gray-700 uppercase bg-gray-400 border-2 border-black dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Username</th>
                        <th scope="col" class="py-3 px-6">Full Name</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                        <th scope="col" class="py-3 px-6">Alamat</th>
                        <th scope="col" class="py-3 px-6">No HP</th>
                        <th scope="col" class="py-3 px-6">Role</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200 dark:bg-gray-800 dark:border-gray-700"> @foreach ($users as $user)
                    <tr class="border border-black">
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
    </body>
</div>
<div class="items-end self-end mr-10 mb-5">
    <form action="{{ route('cetak.user') }}" method="GET">
        @csrf
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow-md hover:bg-blue-600">
            Cetak Resi
        </button>
    </form>
</div>
@include('AdminDashboardFooter')
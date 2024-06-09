<div class="ml-64 p-8">
    <header>
        <h5 class="text-lg font-semibold"><i class="fa fa-users mr-5"></i>List Pengguna</h5>
    </header>

    <body>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-6">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="background-color: #f3f4f6;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #d1d5db;">Username</th>
                        <th style="padding: 10px; border: 1px solid #d1d5db;">Full Name</th>
                        <th style="padding: 10px; border: 1px solid #d1d5db;">Email</th>
                        <th style="padding: 10px; border: 1px solid #d1d5db;">Alamat</th>
                        <th style="padding: 10px; border: 1px solid #d1d5db;">No HP</th>
                        <th style="padding: 10px; border: 1px solid #d1d5db;">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr style="background-color: #ffffff;">
                        <td style="padding: 10px; border: 1px solid #d1d5db;">{{ $user->username }}</td>
                        <td style="padding: 10px; border: 1px solid #d1d5db;">{{ $user->fullName }}</td>
                        <td style="padding: 10px; border: 1px solid #d1d5db;">{{ $user->email }}</td>
                        <td style="padding: 10px; border: 1px solid #d1d5db;">{{ $user->alamat }}</td>
                        <td style="padding: 10px; border: 1px solid #d1d5db;">{{ $user->noHp }}</td>
                        <td style="padding: 10px; border: 1px solid #d1d5db;">{{ $user->role }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</div>

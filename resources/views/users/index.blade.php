@extends('auth.layouts')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$user->photo) }}" width="150px">
                        </td>
                        <td>
                            <!-- Tambahkan tombol-tombol aksi di sini, seperti Edit, Hapus, dan Resize -->
                            <a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                            </form>
                            <a href="{{ route('users.resize', $user->id) }}" class="btn btn-primary">Resize</a>



                            {{-- <form action="{{ route('users.resize', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-secondary">Resize</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.master')

@section('content');
    <div class="container">
        <a href="/karyawan/create" class="btn btn-primary mb-4">Tambah Karyawan</a>
        <table border="1" class="table table-hover">
            <tr>
                <th>NAMA</th>
                <th>UMUR</th>
                <th>ALAMAT</th>
                <th>NOMOR TELP</th>
                <th>EDIT</th>
            </tr>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k -> nama }}</td>
                    <td>{{ $k -> umur }}</td>
                    <td>{{ $k -> alamat }}</td>
                    <td>{{ $k -> nomor_telp }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="/karyawan/{{ $k -> id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/karyawan/{{ $k -> id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
@endsection
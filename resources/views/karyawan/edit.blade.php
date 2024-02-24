<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memperbarui Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .center-form {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
      </style>
  </head>
  <body class="container center-form">
    <div class="container">
        <h1>Memperbarui Data</h1>
        <form action="/karyawan/{{ $karyawan -> id }}" method="POST">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $karyawan -> nama }}">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Umur</label>
                <input type="number" name="umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $karyawan -> umur }}">
                @error('umur')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $karyawan -> alamat }}">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input type="text" name="nomor_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $karyawan -> nomor_telp }}">
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
            <a href="/" class="btn btn-danger">Kembali</a>
        </form>
    </div>
  </body>
 </html>


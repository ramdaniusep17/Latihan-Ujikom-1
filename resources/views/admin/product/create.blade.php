<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
  </head>
<body>

    <h1>Tambah Produk</h1>


    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="row g-3">
        <div class="col">
            <label for="judul">Judul:</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
        </div>
        <div class="col">
            <label for="harga">Harga:</label>
          <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
        </div>
      </div>

        <div class="col">
            <label for="keterangan">Keterangan (Satu per baris)</label>
    <textarea name="keterangan" id="keterangan" class="form-control" rows="5" required>{{ old('keterangan') }}</textarea>
    <small class="text-muted">Masukkan setiap fitur di baris baru.</small>
        </div>

      <button class="btn btn-primary" type="submit">Kirim</button>
    </form>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

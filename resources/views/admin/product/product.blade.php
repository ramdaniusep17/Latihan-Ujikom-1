@extends('layouts.admin')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Product</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Product</h5>
                    <p>Berikut adalah produk perusahaan fesnuk....</p>



                    <!-- Tombol Tambah product -->
                    <div class="mb-3">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Tambah Product
                        </a>
                    </div>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop data product -->
                                @foreach ($products as $index => $item )
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>
                                            <ul>
                                                @foreach(explode("\n", $item->keterangan) as $line)
                                                    <li>{{ $line }}</li>
                                                @endforeach
                                            </ul>
                                         </td>
                                        <td>
                                          <a href="{{ route('admin.product.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('admin.product.destroy', $item->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">Hapus</button>

                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
</section>


    <script>
    function confirmDelete(itemId) {
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("delete-form-" + itemId).submit();
            }
        });
    }
</script>

@endsection

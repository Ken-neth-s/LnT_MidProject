@extends("layout.app")

@section("title", "Daftar Karyawan")

@section("content")
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Daftar Karyawan</h1>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">+ Tambah Karyawan</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach ($karyawans as $karyawan)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $karyawan->name }}</h5>
                    <p class="card-text">Data lengkap karyawan:</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Usia:</strong> {{ $karyawan->age }}</li>
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $karyawan->address }}</li>
                    <li class="list-group-item"><strong>Telepon:</strong> {{ $karyawan->phone }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="card-link btn btn-warning text-white">
                        Edit
                    </a>
                    <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="card-link btn btn-danger text-white">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

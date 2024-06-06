@extends('layouts.admin')
@section('judul', 'Ubah Customer')
@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ubah Pelanggan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">Ubah Pelanggan</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    @if(session('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
        {{ session('status') }}
    </div>
    @endif
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card card-primary w-100 h-100">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Data Pelanggan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputKodeCustomer">Kode Pelanggan</label>
                            <input type="text" id="inputKodeCustomer" name="kode_customer" class="form-control @error('kode_customer') is-invalid @enderror" placeholder="Masukkan Kode Customer" value="{{ $customer->kode_customer }}" required autocomplete="kode_customer">
                            @error('kode_customer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputNamaCustomer">Nama Pelanggan</label>
                            <input type="text" id="inputNamaCustomer" name="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror" placeholder="Masukkan Nama Customer" value="{{ $customer->nama_customer }}" required autocomplete="nama_customer">
                            @error('nama_customer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAlamat">Alamat</label>
                            <input type="text" id="inputAlamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ $customer->alamat }}" required autocomplete="alamat">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputNoTelp">Nomor Telepon</label>
                            <input type="text" id="inputNoTelp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Masukkan Nomor Telepon" value="{{ $customer->no_telp }}" required autocomplete="no_telp">
                            @error('no_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="javascript:history.back()" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Ubah Pelanggan" class="btn btn-success float-right">
            </div>
        </div>
    </form>
</section>
<!-- /.content -->

@endsection
@section('script_footer')
<script>
    // Add any additional scripts if needed
</script>
@endsection
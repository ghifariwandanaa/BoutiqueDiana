@extends('layouts.admin')
@section('judul', 'List Vendor')
@section('script_head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('main-content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Vendor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">Vendor</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('vendor.add') }}">
                <button type="button" class="btn btn-primary">
                    Tambah Data
                </button>
            </a>
        </div>
        <div class="card-body p-0" style="margin: 20px">
            <table id="previewVendor" class="table table-striped table-bordered display" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Vendor</th>
                        <th>Nama Vendor</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection
@section('script_footer')

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#previewVendor').DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                "url": "{{ route('vendor.dataTable') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    _token: "{{ csrf_token() }}"
                }
            },
            "columns": [{
                    "data": "kode_vendor"
                },
                {
                    "data": "nama_vendor"
                },
                {
                    "data": "alamat"
                },
                {
                    "data": "no_telp"
                },
                {
                    "data": "options"
                }
            ],
            "language": {
                "decimal": "",
                "emptyTable": "Tak ada data yang tersedia pada tabel ini",
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
                "infoFiltered": "(difilter dari _MAX_ total entri)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Tampilkan _MENU_ entri",
                "loadingRecords": "Loading...",
                "processing": "Sedang Mengambil Data...",
                "search": "Pencarian:",
                "zeroRecords": "Tidak ada data yang cocok ditemukan",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "aria": {
                    "sortAscending": ": aktifkan untuk mengurutkan kolom ascending",
                    "sortDescending": ": aktifkan untuk mengurutkan kolom descending"
                }
            }
        });

        // hapus data
        $('#previewVendor').on('click', '.hapusData', function() {
            var kode_vendor = $(this).data("id");
            var url = $(this).data("url");

            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Kamu tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Hapus data setelah konfirmasi
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            "kode_vendor": kode_vendor,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire('Terhapus!', response.msg, 'success');
                            $('#previewVendor').DataTable().ajax.reload();
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
{{-- @extends('layouts.master')
@section('title','New Zikra || Produk')

@section('css')
<!-- Pastikan Anda memuat CSS Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/produk/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Merk</th>
                    <th>Harga Beli</th>
                    <th>Diskon</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pro as $item)
                    <tr>
                        <td>{{ $nomor++ }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nm_produk }}</td>
                        <td>{{ $item->kategoris->nm_kat }}</td>
                        <td>{{ $item->merk }}</td>
                        <td>{{ $item->harga_bel }}</td>
                        <td>{{ $item->diskon }}</td>
                        <td>{{ $item->harga_jul }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{ $item->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->nm_produk }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Kode Produk</td>
                                                        <th>{{ $item->kode }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Produk</td>
                                                        <th>{{ $item->nm_produk }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kategori</td>
                                                        <th scope="row">{{ $item->kategoris->nm_kat }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Merk</td>
                                                        <th>{{ $item->merk }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga Beli</td>
                                                        <th>{{ $item->harga_bel }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Diskon</td>
                                                        <th>{{ $item->diskon }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga Jual</td>
                                                        <th>{{ $item->harga_jul }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Stok</td>
                                                        <th>{{ $item->stock }}</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/produk/edit/{{ $item->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{ $item->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal Hapus -->
                            <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin ingin menghapus data Produk <b>{{$item->nm_produk}}</b>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form action="/produk/{{ $item->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak Ada Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<!-- Pastikan Anda memuat JS jQuery dan Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection --}}

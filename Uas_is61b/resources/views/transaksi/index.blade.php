@extends('layouts.master')
@section('title','New Zikra || Supplier')

@section('css')
<!-- Pastikan Anda memuat CSS Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <a href="/supplier/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Master</th>
                    <th>Tanggal</th>
                    <th>Nama Pembeli</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trs as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->kdm}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->total}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{ $item->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->nama }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Kode Master</td>
                                                        <th>{{ $item->kdm }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal</td>
                                                        <th>{{ $item->tanggal }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <th>{{ $item->nama }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <th>{{ $item->total}}</th>
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
                            <a href="/supplier/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Yakin ingin menghapus data Supplier <b>{{$item->nm_sup}}</b>?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="/supplier/{{$item->id}}" method="post">
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
                        <td colspan="4">Tidak Ada Data</td>
                    </tr>
                @endforelse

            </tfbosy>
        </table>
    </div>
</div>
<div class="card">
    <div class="card-header">
    <a href="/supplier/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Detail</th>
                    <th>Kode Master</th>
                    <th>Produk</th>
                    <th>Quantiti</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trs as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->kdd}}</td>
                        <td>{{$item->kdm}}</td>
                        <td>{{$item->produks->kode}} - {{$item->produks->nm_produk}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{ $item->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->nm_sup }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Kode Detail</td>
                                                        <th>{{ $item->kdd }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Master</td>
                                                        <th>{{ $item->kdm }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <th>{{ $item->alamat }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>No Hp</td>
                                                        <th>{{ $item->hp }}</th>
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
                            <a href="/supplier/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Yakin ingin menghapus data Supplier <b>{{$item->nm_sup}}</b>?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="/supplier/{{$item->id}}" method="post">
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
                        <td colspan="4">Tidak Ada Data</td>
                    </tr>
                @endforelse

            </tfbosy>
        </table>
    </div>
</div>
@endsection

<!-- Pastikan Anda memuat JS jQuery dan Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@section('js')

@endsection

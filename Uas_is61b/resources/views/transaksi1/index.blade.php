@extends('layouts.master')
@section('title','New Zikra || Transaksi')

@section('css')
<!-- Pastikan Anda memuat CSS Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/transaksi1/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Faktur</th>
                    <th>Tanggal Transaksi</th>
                    <th> Produk</th>
                    <th>Quantity</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tr as $item)
                    <tr>
                        <td>{{ $nomor++ }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nofak }}</td>
                        <td>{{ $item->karyawans->nm_kar }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->produks->nm_produk }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->total }}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{ $item->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->nofak }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Nomor Faktur</td>
                                                        <th>{{ $item->nofak }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Transaksi</td>
                                                        <th>{{ $item->tanggal }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Produk</td>
                                                        <th scope="row">{{ $item->produks->nm_produk }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah</td>
                                                        <th>{{ $item->jumlah }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <th>{{ $item->harga }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <th>{{ $item->harga_jul }}</th>
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

                            <a href="/transaksi1/edit/{{ $item->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

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
                                            Yakin ingin menghapus data Transaksi <b>{{$item->nofak}}</b>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form action="/transaksi1/{{ $item->id }}" method="post">
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
@endsection

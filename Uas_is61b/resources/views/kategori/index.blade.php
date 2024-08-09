@extends('layouts.master')
@section('title','New Zikra || Kategori')

@section('css')

@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <a href="/kategori/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>

    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kategori</th>
                    <th> Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kat as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->kode}}</td>
                        <td>{{$item->nm_kat}}</td>
                        <td>

                            <a href="/kategori/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

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
                                    Yakin ingin menghapus data Kategori <b>{{$item->nm_kat}}</b>?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="/kategori/{{$item->id}}" method="post">
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

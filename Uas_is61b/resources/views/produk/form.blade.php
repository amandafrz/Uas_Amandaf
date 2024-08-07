@extends('layouts.master')
@section('title', 'Tambah Produk')

@section('css')
<link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />
<link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" />
<link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin />
<link
  href="{{asset('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap')}}"
  rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/vendor/fonts/remixicon/remixicon.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css" class="template-customizer-core-css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
<script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
<script src="{{asset('assets/js/config.js')}}"></script>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        Tambah Produk
    </div>
    <div class="card-body">
        <form method="post" action="/produk/store/">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode Produk</label>
                <input type="text" class="form-control" name="kode" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nm_produk" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="kategori" class="form-control" id="nm_kat">
                    <option value="">-Pilih Kategori-</option>
                    @foreach ($kat as $item)
                        <option value="{{ $item->id }}">{{ $item->nm_kat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Merk</label>
                <input type="text" class="form-control" name="merk" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Beli</label>
                <input type="text" class="form-control" name="harga_bel" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Diskon</label>
                <input type="text" class="form-control" name="diskon">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Jual</label>
                <input type="text" class="form-control" name="harga_jul" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok Produk</label>
                <input type="text" class="form-control" name="stock" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@endsection

@extends('layouts.master')
@section('title','New Zikra || Supplier')

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
    </div>
    </div>
    <div class="card-body">
        <form method="post" action="/supplier/{{$sup->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Supplier</label>
                <input type="text" value="{{$sup->nm_sup}}" class="form-control" name="nm_sup">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" value="{{$sup->alamat}}" class="form-control" name="alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">No Hp</label>
                <input type="text" value="{{$sup->hp}}" class="form-control" name="hp">
            </div>

            <button type="submit" class="btn btn-primary">Edit Data</button>
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

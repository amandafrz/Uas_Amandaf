@extends('layouts.master')

@section('title')
    Kategori
@endsection


@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <button class="btn btn-succes xs btn-flat"><i class="fa fa-plus circle"></i>Tambah Data</button>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-stiped table-bordered">
                    <thead>
                        <th width="5%">No</th>
                        <th>Kategori</th>
                        <th width="15%"><i class="fa fa-cog"></i></th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>

@endsection


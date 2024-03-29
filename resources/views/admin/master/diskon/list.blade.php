@extends('layout.layout')
@section('content')
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-item-center">
                                    <h4 class="card-title">{{ $title }}</h4>
                                    <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalCreate">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                @foreach ($data_diskon as $d)
                                <form method="POST" action="/admin/setdiskon/update/{{ $d->id }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Belanja</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"><span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="number" name="total_belanja" value="{{ $d->total_belanja}}" class="form-control" placeholder="Total Belanja" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Diskon</label>
                                            <div class="input-group mb-3">
                                                <input type="number" name="diskon" value="{{ $d->diskon}}" placeholder="Diskon ..." class="form-control" required>
                                                <div class="input-group-append"><span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save Changes</i></button>
                                </div>
                                @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@endsection

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
                                </div>
                            </div>
                            <hr/>
                            <form method="POST" action="/transaksi/store">
                                @csrf
                                <div class="card-body">
                                    <button class="btn btn-sm btn-primary" type="button" data-target="#modalCreate" data-toggle="modal">
                                        <i class="fa fa-plus"></i> Tambah Data
                                    </button>
                                    <hr/>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                <th>Harga</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                            <tr>
                                                <td>No</td>
                                                <td>Barang</td>
                                                <td>Harga</td>
                                                <td>Qty</td>
                                                <td>Subtotal</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Diskon</td>
                                                <td>Diskon</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Total Bayar</td>
                                                <td>Total Bayar</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Transaksi</label>
                                                <input type="text" class="form-control" name="no_transaksi" value="NT-001" readonly required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tgl Transaksi</label>
                                                <input type="text" class="form-control"  value="{{ date('d/M/Y')}}" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Uang Pembeli</label>
                                                <input type="number" class="form-control" name="uang_pembeli" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kembalian</label>
                                                <input type="number" class="form-control" name="kembalian"  readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save Changes</i></button>
                                    <a href="/transaksi" class="btn btn-danger"><i class="fa fa-undo"> Cancel</i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

        <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create {{ $title }}</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="/transaksi/cart">
                    @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Barang</label>
                                <select class="form-control" name="id_jenis" required>
                                    <option value="" >-- Pilih Barang --</option>
                                </select>
                            </div>
                            <div id="tampil_barang"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"> Cancel</i></button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

@extends('layouts.default')
@section('content')
<section>
    <div class="container mt-5">
        <H1>Edit Barang</H1>

        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/update/' . $data->id)}}" method="POST">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="Nama_Barang" class="form-control" value="{{ $data->Nama_Barang}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{ $data->stok}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Jumlah Terjual</label>
                        <input type="text" name="Jumlah_Terjual" class="form-control" value="{{ $data->Jumlah_Terjual}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Tanggal Transaksi</label>
                        <input type="date" name="Tanggal_Transaksi" class="form-control" value="{{ $data->Tanggal_Transaksi}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Jenis Barang</label>
                        <input type="text" name="Jenis_Barang" class="form-control" value="{{ $data->Jenis_Barang}}">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Barang</button>
                    </div>
                    <div class="form-group mt-2">
                        <a href="{{url('/')}}">
                            << Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
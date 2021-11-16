@extends('layouts.default')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST">
                    @crsf
                    <div class="form-group mt-2">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="Nama_Barang" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Jumalah Terjual</label>
                        <input type="text" name="Jumalah_Terjual" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Tanggal Transaksi</label>
                        <input type="date" name="Tanggal_Transaksi" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama">Jenis Barang</label>
                        <input type="text" name="Jenis_Barang" class="form-control">
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

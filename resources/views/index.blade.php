@extends('layouts.default')

@section('content')
<section>
    <div class="cointener mt-5">
        <div class="row">
            <div class="col-lg-8 mt">
                <h1>DATA BARANG</h1>
                <a href="{{ url('create') }}" class=" btn btn-primary">Tambah Barang</a>
            </div>
            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>stok</th>
                        <th>Jumlah Terjual</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Barang</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $dataBarang)
                    <tr>
                        <td style="width: 200px">{{ $dataBarang->id}}</td>
                        <td style="width: 500px">{{ $dataBarang->Nama_Barang}}</td>
                        <td style="width: 500px">{{ $dataBarang->stok}}</td>
                        <td style="width: 500px">{{ $dataBarang->Jumlah_Terjual}}</td>
                        <td style="width: 500px">{{ $dataBarang->Tanggal_Transaksi}}</td>
                        <td style="width: 500px">{{ $dataBarang->Jenis_Barang}}</td>

                        <td style="width: 100px"><a href="{{url('/show/'. $dataBarang->id)}}"><button class="btn-warning">Edit</button></td>
                        <td style="width: 100px"><a href="{{url('/destroy/' .$dataBarang->id)}}"><button class="btn-danger">Hapus</button></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
</td>
@extends('layouts.tes')
@section('content')

<div class="panel">
       <div class="panel-body">
            <div class=col-lg-12>
                <h3>Daftar Gudang</h3>
                <br></br>
                 <table class="table bordered">
                     <tr>
                         <td width='300'><h4>Biodata</h4></td>
                         <td width='300'><h4>Studi Kasus</h4></td>
                     </tr>
                     <tr>
                         <td>Nama   : Ni Wayan Sri Indah Yani</td>
                         <td>Judul  : Sistem Manajemen Toko Kelontong</td>
                     </tr>
                     <tr rowspan='2'>
                         <td>NIM   : 1815051094</td>
                         <td>Penjelasan: Sistem Manajemen Toko Kelontong merupakan sebuah gagasan untuk membuat sebuah manajemen toko baik itu manajemen dalam hal penjualan,pembelian maupun barang pada suatu toko kelontong</td>
                     </tr>
                     <tr>
                         <td>Program Studi: Pendidikan Teknik Informatika</td>
                         <td></td>
                     </tr>

                 </table>
                 
            </div>



        <div class=col-lg-12>
        <a href="{{route('barang.create')}}">Tambah Data</a>
        <table class="table table-borederd">
        <thead>
            <tr><th>No</th><th>Kode Gudang</th><th>Alamat Gudang</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($barang as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->kode_gudang}}</td><td>{{$val->tempat_gudang}}</td>
                <td>
                    <a href="{{route('barang.edit',$val->id_gudang)}}">update</a>
                    <form action="{{route('barang.destroy',$val->id_gudang)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        {{$barang->links()}}
        </div>
    </div>
</div>
@endsection
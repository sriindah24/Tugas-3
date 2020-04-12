@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($barang))?route('barang.update',$barang->id_gudang):route('barang.store')}}" method="POST">
       @csrf
       @if(isset($barang))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Gudang</h3>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">Kode Gudang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$barang->kode_gudang:old('kode_gudang')}}" name="kode_gudang" class="form-control"></div>
               @error('kode_gudang')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Alamat Gudang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$barang->tempat_gudang:old('tempat_gudang')}}" name="tempat_gudang" class="form-control"></div>
              @error('tempat_gudang')<small style="color:red">{{$message}}</small>@enderror
         </div>
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection
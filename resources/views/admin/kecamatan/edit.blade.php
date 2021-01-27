@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Provinsi 
                         <div class="card-body">
                             <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="POST">
                        @method('put')
                        @csrf
                          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            

                    <div class="form-group">
                        <label for="">Kota</label>
                        <select name="id_kota" class="form-control" id="">
                        @foreach($kota as $data)
                        <option value="{{$data->id}}" {{ $data->id == $kecamatan->id_kota ? 'selected' : '' }}  > {{$data->nama_kota}}</option>
                        @endforeach
                    </select>
                        
                    </div>
                        <div class="form-group">
                        <label for="">Kode Kecaamatan</label>
                        <input type="text" name="kode_kecamatan"  value="{{$kecamatan->kode_kecamatan}}" class="form-control" id="">
                    </div>
                        <div class="form-group">
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kecamatan"  value="{{$kecamatan->nama_kecamatan}}" class="form-control" id="">   
                    </div>
                        <div class ="form-group">
                        <button type ="submit" class = "btn btn-primary btn-primary btn-block">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection


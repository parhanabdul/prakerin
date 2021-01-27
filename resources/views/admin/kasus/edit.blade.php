@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Provinsi 
                         <div class="card-body">
                             <form action="{{route('kasus.update',$kasus->id)}}" method="POST">
                        @method('put')
                        @csrf
                          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            

                    <div class="form-group">
                        <label for="">RW</label>
                        <select name="id_rw" class="form-control" id="">
                        @foreach($rw as $data)
                        <option value="{{$data->id}}" {{ $data->id == $kasus->id_rw ? 'selected' : '' }}  > {{$data->nama_rw}}</option>
                        @endforeach
                    </select>
                        
                    </div>
                        <div class="form-group">
                        <label for="">Positif</label>
                        <input type="text" name="positif"  value="{{$kasus->positif}}" class="form-control" id="">
                    </div>
                        <div class="form-group">
                        <label for="" class="form-label">Sembuh</label>
                        <input type="text" name="sembuh"  value="{{$kasus->sembuh}}" class="form-control" id="">   
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Meninggal</label>
                        <input type="text" name="meninggal"  value="{{$kasus->meninggal}}" class="form-control" id="">   
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Sembuh</label>
                        <input type="date" name="tanggal"  value="{{$kasus->tanggal}}" class="form-control" id="">   
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


@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data RW 
                         <div class="card-body">
                             <form action="{{route('rw.update',$rw->id)}}" method="POST">
                        @method('put')
                        @csrf
                          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            

                    <div class="form-group">
                        <label for="">Desa</label>
                        <select name="id_desa" class="form-control" id="">
                        @foreach($desa as $data)
                        <option value="{{$data->id}}" {{ $data->id == $rw->id_desa ? 'selected' : '' }}  > {{$data->nama_desa}}</option>
                        @endforeach
                    </select>
                        
                    </div>
                        
                        <div class="form-group">
                        <label for="" class="form-label">Nama Rw</label>
                        <input type="text" name="nama_rw"  value="{{$rw->nama_rw}}" class="form-control" id="">   
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


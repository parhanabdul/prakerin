@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kasus
                         <div class="card-body">
                             <form action="{{route('kasus.store')}}" method="POST">
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
                                <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                                @endforeach
                          </select>
                         </div>
                             <div class ="form-group">
                             <label for="">Positif</label>
                             <input type="text" name="positif" class="form-control" require>
                        </div>  
                    <div class="mb-3">
                        <label for="" class="form-label">Sembuh</label>
                        <input type="text" name="sembuh" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Meninggal</label>
                        <input type="text" name="meninggal" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="">
                    </div>
                        <div class="form-group">
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


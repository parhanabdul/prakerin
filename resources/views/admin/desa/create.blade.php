@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kecamatan
                         <div class="card-body">
                             <form action="{{route('desa.store')}}" method="POST">
                        @csrf       
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group">
                         <label for="">Kecamatan</label>
                            <select name="id_kecamatan" class="form-control" id="">
                            @foreach($kecamatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                @endforeach
                          </select>
                         </div>
                             <div class ="form-group">
                             <label for="">Kode Desa</label>
                             <input type="text" name="kode_desa" class="form-control" require>
                        </div>  
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Desa</label>
                        <input type="text" name="nama_desa" class="form-control" id="">
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


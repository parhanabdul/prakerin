@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
                    show Kota
                         <div class="card-body">
                             <form action="{{route('kota.update',$kota->id)}}" method="post">

                        <div class="form-group">
                        <label for="">Nama Provinsi</label>
                        <input type="text" name ="nama_provinsi" value="{{$kota->provinsi->nama_provinsi}}" class ="form-control" readonly>
                    </div>
                        <div class="form-group">
                        <label for="">Kode Kota</label>
                        <input type="text" name="kode_kota"  value="{{$kota->kode_kota}}" class="form-control" id="" readonly>
                    </div>
                        <div class="form-group">
                        <label for="" class="form-label">Kota</label>
                        <input type="text" name="nama_kota"  value="{{$kota->nama_kota}}" class="form-control" id="" readonly>
                    </div>
                    
                     <div class ="form-group">
                        <a href="{{route('kota.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection


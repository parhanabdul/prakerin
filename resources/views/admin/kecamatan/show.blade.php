@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
       

                        <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" name="nama_kota"  value="{{$kecamatan->kota->nama_kota}}" class="form-control" id="" readonly>
                        </div>

                        <div class="form-group">
                        <label for="">Kode kecamatan</label>
                        <input type="text" name="kode_kecamatan"  value="{{$kecamatan->kode_kecamatan}}" class="form-control" id="" readonly>    
                        </div>

                        <div class="form-group">
                        <label for="" class="form-label">kecamatan</label>
                        <input type="text" name="nama_kecamatan"  value="{{$kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                        </div>
                    
                     <div class ="form-group">
                        <a href="{{route('kecamatan.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection


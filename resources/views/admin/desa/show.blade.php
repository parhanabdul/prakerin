@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
       

                        <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" name="nama_kecamatan"  value="{{$desa->kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                        </div>

                        <div class="form-group">
                        <label for="">Kode desa</label>
                        <input type="text" name="kode_desa"  value="{{$desa->kode_desa}}" class="form-control" id="" readonly>    
                     </div>

                        <div class="form-group">
                        <label for="" class="form-label">Desa</label>
                        <input type="text" name="nama_desa"  value="{{$desa->nama_desa}}" class="form-control" id="" readonly>
                        </div>
                    
                     <div class ="form-group">
                        <a href="{{route('desa.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection


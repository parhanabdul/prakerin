@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
       

                        <div class="form-group">
                        <label for="">Desa</label>
                        <input type="text" name="nama_desa"  value="{{$rw->desa->nama_desa}}" class="form-control" id="" readonly>
                        </div>

                        <div class="form-group">
                        <label for="" class="form-label">RW</label>
                        <input type="text" name="nama_rw"  value="{{$rw->nama_rw}}" class="form-control" id="" readonly>
                        </div>
                    
                     <div class ="form-group">
                        <a href="{{route('rw.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection


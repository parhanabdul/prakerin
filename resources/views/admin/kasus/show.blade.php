@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
       

                        <div class="form-group">
                        <label for="">RW</label>
                        <input type="text" name="nama_rw"  value="{{$kasus->rw->nama_rw}}" class="form-control" id="" readonly>
                        </div>

                        <div class="form-group">
                        <label for="">Positif</label>
                        <input type="text" name="positif"  value="{{$kasus->positif}}" class="form-control" id="" readonly>    
                     </div>

                        <div class="form-group">
                        <label for="" class="form-label">Sembuh</label>
                        <input type="text" name="sembuh"  value="{{$kasus->sembuh}}" class="form-control" id="" readonly>
                        </div>

                        <div class="form-group">
                        <label for="" class="form-label">Meninggal</label>
                        <input type="text" name="meninggal"  value="{{$kasus->meninggal}}" class="form-control" id="" readonly>
                        </div>

                        <div class="form-group">
                        <label for="" class="form-label">tanggal</label>
                        <input type="text" name="tanggal"  value="{{$kasus->tanggal}}" class="form-control" id="" readonly>
                        </div>

                     <div class ="form-group">
                        <a href="{{route('kasus.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection


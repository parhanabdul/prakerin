@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <b>  Data Kecamatan</b> 
                <a href="{{route('kecamatan.create')}}"  
                   class="btn btn-primary float-right">
                   Tambah
                   </a> 
                 </div>
                 <div class="card-body">
                 <div class="table-responsive">
                 <table class="table">
                 <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Kode Kecamatan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Action</th>
                </tr>
                @php $no=1; @endphp
                @foreach($kecamatan as $data)
                <tr>
                       <th scope="row">{{$no++}}</th>
                        <td>{{$data->kota->nama_kota}}</td>
                        <td>{{$data->kode_kecamatan}}</td>
                        <td>{{$data->nama_kecamatan}}</td>
                    <td>
                    <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-warning">show</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                               </table>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection
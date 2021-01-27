@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <b>  Data Desa</b> 
                <a href="{{route('desa.create')}}"  
                   class="btn btn-primary float-right">
                   Tambah
                   </a> 
                 </div>
                 <div class="card-body">
                 <div class="table-responsive">
                 <table class="table">
                 <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kode Desa</th>
                        <th scope="col">Nama Desa</th>
                        <th scope="col">Action</th>
                </tr>
                @php $no=1; @endphp
                @foreach($desa as $data)
                <tr>
                       <td scope="row">{{$no++}}</td>
                        <td>{{$data->kecamatan->nama_kecamatan}}</td>
                        <td>{{$data->kode_desa}}</td>
                        <td>{{$data->nama_desa}}</td>
                    <td>
                    <form action="{{route('desa.destroy', $data->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{route('desa.edit',$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('desa.show',$data->id)}}" class="btn btn-warning">show</a>
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
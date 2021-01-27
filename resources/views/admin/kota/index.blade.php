@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <b>  Data Kota</b> 
        
                  <a href="{{route('kota.create')}}"  
                   class="btn btn-primary float-right">
                   Tambah
                   </a> 
                 </div>
                 <div class="card-body">
                 <div class="table-responsive">
                 <table class="table">
                 <tr>
                      <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kode Kota</th>
                        <th scope="col">Nama Kota</th>
                        <th scope="col">Action</th>
                </tr>
                @php $no=1; @endphp
                @foreach($kota as $data)
                <div>
                <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->provinsi->nama_provinsi}}</td>
                        <td>{{$data->kode_kota}}</td>
                        <td>{{$data->nama_kota}}</td>
                    </div>
                    <td>
                     <form action="{{route('kota.destroy', $data->id)}}" method="post">  
                        @method('delete')
                        @csrf
                        <a href="{{route('kota.edit',$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('kota.show',$data->id)}}" class="btn btn-warning">show</a>
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
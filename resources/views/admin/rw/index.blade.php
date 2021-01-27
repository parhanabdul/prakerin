@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <b>  Data Rw</b> 
                <a href="{{route('rw.create')}}"  
                   class="btn btn-primary float-right">
                   Tambah
                   </a> 
                 </div>
                 <div class="card-body">
                 <div class="table-responsive">
                 <table class="table">
                 <tr>
                        <th scope="col">No</th>
                        <th scope="col">Desa</th>
                        <th scope="col">Nama Rw</th>
                        <th scope="col">Action</th>
                </tr>
                @php $no=1; @endphp
                @foreach($rw as $data)
                <tr>
                       <td scope="row">{{$no++}}</td>
                        <td>{{$data->desa->nama_desa}}</td>
                        <td>{{$data->nama_rw}}</td>
                    <td>
                    <form action="{{route('rw.destroy', $data->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{route('rw.edit',$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('rw.show',$data->id)}}" class="btn btn-warning">show</a>
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
@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <b>  Data Kasus</b> 
                <a href="{{route('kasus.create')}}"  
                   class="btn btn-primary float-right">
                   Tambah
                   </a> 
                 </div>
                 <div class="card-body">
                 <div class="table-responsive">
                 <table class="table">
                 <tr>
                        <th scope="col">NO</th>
                        <th scope="col">RW</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Action</th>
                </tr>
                @php $no=1; @endphp
                @foreach($kasus as $data)
                <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->rw->nama_rw}}</td>
                        <td>{{$data->positif}}</td>
                        <td>{{$data->sembuh}}</td>
                        <td>{{$data->meninggal}}</td>
                        <td>{{$data->tanggal}}</td>


                    <td>
                    <form action="{{route('kasus.destroy', $data->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('kasus.show',$data->id)}}" class="btn btn-warning">show</a>
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
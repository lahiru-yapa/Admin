@extends('Layout.app')
@section('header')
<div class="header  pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8">
                    <h6 class="h2 text-dark d-inline-block mb-0">Category Management</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Category Management
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{route('categories.new')}}" class=" btn btn-sm btn-neutral float-right">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<table class="table table-success table-striped">
        <tr>
            <th> ID</th>
            <th> Title</th>
            <th>	Description </th>
            <th> image</th>
            <th> Status</th>
            <th> Aaction</th>
        </tr>
            
        @foreach ($category as $data)
        <tr>
            <td>{{$data->id}} </td>
            <td> {{$data->title}} </td>
            <td> {{$data->	description}} </td>
            <td> {{$data->	image}} </td>
            <td> {{$data->	status}} </td>
            <td> <a class="btn btn-primary" href="{{route('categories.edit',$data->id)}}"> Edit</a>
           </td>
          
        </tr>
        @endforeach
    </table>



 <button type="button" class="btn btn-warning">Middle</button>

@endsection

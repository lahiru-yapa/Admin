@extends('Layout.app')
@section('header')
<div class="header  pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8">
                    <h6 class="h2 text-dark d-inline-block mb-0">Item Management</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Item Management
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{route('item.new')}}" class=" btn btn-sm btn-neutral float-right">
                        <i class="fa fa-plus-circle"></i> Add New Item
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="table-responsive py-4">
    <table class="table" id="item">
        <thead class="thead-light">
            <tr>
                <th> ID</th>
                <th> category_id</th>
                <th> title </th>
                <th> description</th>
                <th> introduction</th>
                <th> image</th>
                <th> price</th>
                <th> quantity</th>
                <th> weight</th>
                <th> action</th>
            </tr>
        </thead>
        <tbody class="list">
            @foreach ($item as $data)
            <tr>
                <td>{{$data->id}} </td>
                <td> {{$data->category_id}} </td>
                <td> {{$data->title}} </td>
                <td> {!!$data->description!!} </td>
                <td> {!!$data->introduction!!} </td>
                <td>

                    @if ($data->images)
                    <img src="{{config('images.access_path').'/thumb/35x35/'.$data->images->name}}" alt="">
                    @endif
                </td>
                <td> {{$data->price}} </td>
                <td> {{$data->quantity}} </td>
                <td> {{$data->weight}} </td>

                <td>
                    <div class="dropdown no-arrow mb-1">
                        <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                            aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                            style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item edit-product" href="{{ route('item.edit',$data->id) }}"
                                class="btn btn-warning" title="">
                                <i class="fas fa-edit"></i>&nbsp;Edit
                            </a>
                            <a class="dropdown-item delete-product" href="{{ route('item.delete',$data->id) }}"
                                class="btn btn-danger" title=""><i class="far fa-trash-alt"></i>&nbsp;Delete</a>
                            @if ($data->status == 1)
                            <a class="dropdown-item change-status"
                                href="{{ route('categories.status.change',$data->id) }}" class="btn btn-danger"
                                title=""><i class="fas fa-times-circle"></i>&nbsp;Draft</a>
                            @else
                            <a class="dropdown-item change-status"
                                href="{{ route('categories.status.change',$data->id) }}" class="btn btn-danger"
                                title=""><i class="far fa-check-square"></i>&nbsp;Publish</a>
                            @endif
                        </div>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function () {
        $('#item').dataTable({
            "language": {
                "emptyTable": "No data available in the table",
                "paginate": {
                    "previous": '<i class="ni ni-bold-left"></i>',
                    "next": '<i class="ni ni-bold-right"></i>'
                },
                "sEmptyTable": "No data available in the table"
            }

        });
    });

</script>
@endpush

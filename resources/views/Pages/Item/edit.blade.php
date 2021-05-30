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
                                Category Management
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{route('item.all')}}" class=" btn btn-sm btn-neutral float-right">
                        <i class="fa fa-plus-circle"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <form action="{{route('item.update',$item->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-7">
                <div class="card_body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">item Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$item->title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">item introduction</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{$item->introduction}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <textarea name="description" rows="4" class="form-control form-control-alternative"
                                        id="description" value="{{$item->description}}" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">item Price</label>
                                    <input type="text" class="form-control" name="Price" value="{{$item->Price}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">item weight </label>
                                    <input type="text" class="form-control" name="weight" value="{{$item->weight}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">item quantity</label>
                                    <input type="text" class="form-control" name="quantity" value="{{$item->quantity}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-">
                <div class="card_body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">

                                <label for="category_id">Choose a Category:</label>

                                <select id="cars" name="category_id" required>
                                    <option value=""></option>
                                    @foreach ($category as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select><br><br>
                                <div class="form-group">

                                    <label class="form-control-label">Image</label>
                                    <input type="file" class="form-control form-control-alternative dropify"
                                        name="images"
                                        data-default-file="{{$item->images? asset('uploads/'.$item->images->name) : asset('/uploads/no.jpg')}}"
                                        id="inp_image" accept="image/jpg, image/jpeg, image/png">


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@push('css')
<style>
    .categorycard {
        margin-left: 20%;

    }

</style>
@endpush
@push('js')
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
        CKEDITOR.replace('description');
    });

</script>
@endpush

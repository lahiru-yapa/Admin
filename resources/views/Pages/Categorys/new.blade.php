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
                    <a href="{{route('categories.all')}}" class=" btn btn-sm btn-neutral float-right">
                        <i class="fa fa-plus-circle"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="categorycard">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Edit your existing Category hear </div>
        <div class="card-body text-primary">
            <form action="{{route('categories.store')}}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Discription</label>
                    <input type="text" class="form-control" name="description">
                </div>

                {{-- image upload part --}}
                <div class="box__input">
                    <input class="box__file" type="file" name="photo" id="file"
                        data-multiple-caption="{count} files selected" multiple />
                    <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it
                            here</span>.</label>
                </div>

                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>
</div>

@endsection
@push('css')
<style>
    .categorycard {
        margin-left: 20%;

    }

</style>
@endpush

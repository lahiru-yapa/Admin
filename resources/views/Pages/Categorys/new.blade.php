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

<div class="container">
    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-7">
                <div class="card_body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <textarea name="description" rows="4" class="form-control form-control-alternative"
                                        id="description" required></textarea>
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

                                <div class="form-group">
                                    <label class="form-control-label">Image</label>
                                    <input type="file" class="form-control form-control-alternative dropify"
                                        name="images" id="inp_image" accept="image/jpg, image/jpeg, image/png" required>
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
{{-- ?
sdcsdcscs --}}

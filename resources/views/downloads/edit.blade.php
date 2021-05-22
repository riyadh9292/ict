@extends('layouts.'.$type.'.app')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Downloads</li>
                <li>Edit</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="wc-title">
                        <h4>Edit File</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ route('download.update' , $download->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>Update File Information</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Title</label>
                                    <div>
                                        <textarea class="form-control" name="title" rows="3" required>{{$download->title}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Description</label>
                                    <div>
                                    <textarea class="form-control" name="description" rows="20">{{$download->description}}</textarea>
                                    </div>
                                </div>
                                @if($notice->file_path)
                                <div class="form-group col-12">
                                    <label class="col-form-label">Old File</label>
                                    <div>
                                    <a href="{{route('download' , $download->id)}}" class="btn">Download</a>
                                    </div>
                                </div>
                                @else
                                <div class="form-group col-12">
                                    <label class="col-form-label">Old File</label>
                                    <div>
                                    <p>No Old File is found</p>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group col-12">
                                    <label class="col-form-label">New File</label>
                                    <div>
                                        <input class="form-control" name="file" type="file">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@endsection

@section('scripts')

@endsection
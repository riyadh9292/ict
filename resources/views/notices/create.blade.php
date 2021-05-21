@extends('layouts.'.$type.'.app')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Notices</li>
                <li>Create</li>
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
                        <h4>Create New Notice</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ route('notice.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>Notice Information</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Title</label>
                                    <div>
                                        <textarea class="form-control" name="title" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Description</label>
                                    <div>
                                    <textarea class="form-control" name="description" rows="20"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">File</label>
                                    <div>
                                        <input class="form-control" name="file" type="file">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn">Save</button>
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
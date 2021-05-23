@extends('layouts.'.$type.'.app')

@section('styles')
<style>
    .album-photo-grid {
        width: 100px !important;
        height: 100px !important;
        margin: 2px !important;
    }
</style>
@endsection

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Albums</li>
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
                        <h4>Edit Album</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ route('album.update' , $album->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>Update Album</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Title</label>
                                    <div>
                                        <input type="text" class="form-control" name="title" value="{{$album->title}}" required>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Description</label>
                                    <div>
                                        <textarea class="form-control" name="description" rows="20">{{$album->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Add New Photos</label>
                                    <div>
                                        <input class="form-control" type="file" name="file[]" id="file" multiple="">
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
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    @if (session('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('danger') }}
                    </div>
                    @endif
                    <div class="wc-title">
                        <h4>Delete Photos of the Album</h4>
                    </div>
                    <div class="widget-inner">
                        @if($album->photos)
                        @php
                        $count = 0;
                        @endphp
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="30px">#</th>
                                    <th>Upload At</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($album->photos as $photo)
                                @php
                                $count++;
                                $path = '/'.$photo->path;
                                @endphp
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $photo->updated_at }}</td>
                                    <td><img class="album-photo-grid" src="{{ URL::to('/') }}{{$path}}" alt=""></td>
                                    <td>
                                        <form action="{{route('photo.destroy', $photo->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger btn-delete-form" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-danger" role="alert">
                            There is no photo of this album.
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#table").DataTable({});
    });

    $('.btn-delete-form').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        swal({
                title: "Are you sure?",
                text: "Once deleted, this process cannot be reverted!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                } else {
                    return;
                }
            });
    });
</script>
@endsection
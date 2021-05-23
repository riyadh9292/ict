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
                <li>List</li>
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
                    @elseif (session('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('danger') }}
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
                        <h4>Existing Albums</h4>
                    </div>
                    <div class="widget-inner table-responsive">
                        @php
                        $count = 0;
                        @endphp
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="30px">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Photos</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($albums as $album)
                                @php
                                $count++;
                                @endphp
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $album->title }}</td>
                                    <td>{{ $album->description }}</td>
                                    <td>{{ $album->updated_at }}</td>
                                    <td>
                                        @php
                                        $photos = $album->photos;
                                        @endphp
                                        @if($album->photos)
                                        @foreach($album->photos as $photo)
                                        <img class="album-photo-grid" src="{{$photo->path}}" alt="">
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('album.edit', $album->id) }}" class="btn btn-info btn-sm mb-2">Edit</a>
                                        <form action="{{route('album.destroy', $album->id)}}" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger btn-delete-form" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
@extends('layouts.'.$type.'.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Notices</li>
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
                        <h4>Existing Notices</h4>
                    </div>
                    <div class="widget-inner table-responsive">
                        @php
                        $count = 0;
                        @endphp
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30px">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($notices as $notice)
                                @php
                                $count++;
                                @endphp
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{{ $notice->description }}</td>
                                    <td>{{ $notice->created_at }}</td>
                                    <td>
                                        @if($notice->file_path)
                                        <a href="{{route('notice.download' , $notice->id)}}" class="btn btn-success">Download</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('notice.edit', $notice->id) }}" class="btn btn-info btn-sm mb-2">Edit</a>
                                        <form action="{{route('notice.destroy', $notice->id)}}" method="POST">
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
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
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
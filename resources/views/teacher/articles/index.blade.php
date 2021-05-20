@extends('layouts.teacher.app')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Articles</li>
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
                    <div class="wc-title">
                        <h4>My Articles</h4>
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
                                    <th>Authors</th>
                                    <th>Publisher</th>
                                    <th>Details</th>
                                    <th>Year</th>
                                    <th>Doi</th>
                                    <th>URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($articles as $article)
                                @php
                                $count++;
                                @endphp
                                <tr>
                                    <td class="pl-3">{{$count}}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->authors }}</td>
                                    <td>{{ $article->publisher }}</td>
                                    <td>{{ $article->details }}</td>
                                    <td>{{ $article->year }}</td>
                                    <td>{{ $article->doi }}</td>
                                    <td>{{ $article->url }}</td>
                                    <td>
                                        <a href="{{route('teacher.article.edit', $article->id) }}" class="btn btn-info btn-sm mb-2">Edit</a>
                                        <form action="{{route('teacher.article.destroy', $article->id)}}" method="POST">
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
        $("#table").DataTable({

        });
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
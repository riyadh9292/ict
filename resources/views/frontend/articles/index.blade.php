@extends('layouts.frontend.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<style>
    /* .notices-banner {
        background-image: url("{{ asset('assets/images/banner/banner3.jpg') }}")
    } */
</style>
@endsection

@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark notices-banner">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Articles</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Articles</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="widget-inner table-responsive">
                                @php
                                $count = 0;
                                @endphp
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="30px">#</th>
                                            <th>Title</th>
                                            <th>Authors</th>
                                            <th>Publisher</th>
                                            <th>Details</th>
                                            <th>Type</th>
                                            <th>Year</th>
                                            <th>Doi</th>
                                            <th>URL</th>
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
                                            <td class="text-capitalize">{{ $article->type }}</td>
                                            <td>{{ $article->year }}</td>
                                            <td>{{ $article->doi }}</td>
                                            <td>{{ $article->url }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
@endsection
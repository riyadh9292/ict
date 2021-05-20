@extends('layouts.teacher.app')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Articels</li>
                <li>Add</li>
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
                        <h4>Add New Article</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ route('teacher.article.create') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>Article Information</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Title</label>
                                    <div>
                                        <textarea class="form-control" name="title" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Authors (Comma Seperated)</label>
                                    <div>
                                        <textarea class="form-control" name="authors" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Publisher</label>
                                    <div>
                                        <textarea class="form-control" name="publisher" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Details (e.g. Volume: XX, Issue: XX, pp.XX-YY)</label>
                                    <div>
                                        <textarea class="form-control" name="details" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Year</label>
                                    <div>
                                        <input class="form-control" name="year" type="number" min="0" step="1" value="" required>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">DOI (Optional)</label>
                                    <div>
                                        <input class="form-control" name="doi" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">URL (Optional)</label>
                                    <div>
                                        <input class="form-control" name="url" type="text" value="">
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
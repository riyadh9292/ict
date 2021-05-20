@extends('layouts.admin.app')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Users</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Users</li>
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
                    <div class="wc-title">
                        <h4>Create New User</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ route('admin.user.create') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>User Information</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Full Name</label>
                                    <div>
                                        <input class="form-control" name="name" type="text" value="" required>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Email</label>
                                    <div>
                                        <input class="form-control" name="email" type="email" value="" required>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Designation</label>
                                    <div>
                                        <input class="form-control" name="designation" type="text" value="" required>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Type</label>
                                    <div>
                                        <select class="form-control" name="type" aria-label="Default select example">
                                            <option selected value="teacher">Teacher</option>
                                            <option value="officer">Officer</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Status</label>
                                    <div>
                                        <select class="form-control" name="status" aria-label="Default select example">
                                            <option selected value="active">Active</option>
                                            <option value="on_leave">On Leave</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Password</label>
                                    <div>
                                        <input class="form-control" name="password" type="password" value="" required>
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
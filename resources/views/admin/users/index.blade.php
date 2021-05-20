@extends('layouts.admin.app')

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Users</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Users</li>
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
                    @endif
                    <div class="wc-title">
                        <h4>Existing Users</h4>
                    </div>
                    <div class="widget-inner">
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="30px">#</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                <!-- get all data from Table by Controller -->
                                @foreach($users as $user)
                                <tr class="row1" data-id="{{ $user->id }}">
                                    <td class="pl-3"><i class="fa fa-sort"></i></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->designation }}</td>
                                    <td class="text-capitalize">{{ $user->type }}</td>
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
<script type="text/javascript">
    $(function() {
        $("#table").DataTable({ "bSort" : false });
        // this is need to Move Ordera accordin user wish Arrangement
        $("#tablecontents").sortable({
            items: "tr",
            cursor: 'move',
            opacity: 0.6,
            update: function() {
                sendOrderToServer();
            }
        });

        function sendOrderToServer() {
            var users = [];
            var token = $('meta[name="csrf-token"]').attr('content');
            //   by this function User can Update hisOrders or Move to top or under
            $('tr.row1').each(function(index, element) {
                users.push({
                    id: $(this).attr('data-id'),
                    position: index + 1
                });
            });
            // the Ajax Post update 
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('admin.user.sort') }}",
                data: {
                    users: users,
                    _token: token
                },
                success: function(response) {
                    if (response.status == "success") {
                        console.log(response);
                    } else {
                        console.log(response);
                    }
                }
            });
        }
    });
</script>
@endsection
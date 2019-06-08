 @extends('layouts.header')
 @section('content')
 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Members</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Members List</h4>
                            <div class="add-product">
                                <a href="{{ route('member.create') }}">Add Members</a>
                            </div>
                            <div class="asset-inner">
                            <table class="table" id="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Phonenumber</th>
                                        <th>Gender</th>
                                        <th>ID No</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach( $total_member as $member )
                                        <tr>
                                            <td>{{ $member->id }}</td>
                                            <td>{{ $member->firstname}}</td>
                                            <td>{{$member->lastname}}</td>
                                            <td>{{$member->email}}</td>
                                            <td>{{$member->phonenumber}}</td>
                                            <td>{{$member->gender}}</td>
                                            <td>{{$member->id_no}}</td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
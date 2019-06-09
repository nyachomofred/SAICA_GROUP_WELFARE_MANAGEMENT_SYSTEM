
@extends('layouts.header')
@section('content')

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                 <h4>Welfare Members</h4>
                                <div class="add-product">
                                    <a href="{{route('member.create')}}">Add Member</a>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="firstname" data-editable="false">Firstname</th>
                                                <th data-field="lastname" data-editable="false">Lastname</th>
                                                <th data-field="email" data-editable="false">Email</th>
                                                <th data-field="phone" data-editable="false">Phonenumbre</th>
                                                <th data-field="gender" data-editable="false">Gender</th>
                                                <th data-field="id_no" data-editable="false">ID No</th>
                                                <th data-field="action" data-editable="false">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach( $total_member as $member )
                                            <tr>
                                            <th data-field="id_no" data-editable="false">ID No</th>                                                <td></td>
                                                <td>{{ $member->id }}</td>
                                                <td>{{ $member->firstname}}</td>
                                                <td>{{$member->lastname}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>{{$member->phonenumber}}</td>
                                                <td>{{$member->gender}}</td>
                                                <td>{{$member->id_no}}</td>
                                                <td>
                                                    <div class="login-social-inner">
                                                        <a href="{{URL::to('/admin/members/view/'.$member->id)}}" class="button btn-social basic-ele-mg-b-10 facebook " style="height:32px;width:70px"> <i class="fa fa-edit"></i> View </a>
                                                        <a href="#" class="button btn-social basic-ele-mg-b-10 twitter " style="height:32px;width:101px"> <i class="fa fa-plus"></i>Dependency </a>
                                                        <a href="#" class="button btn-social basic-ele-mg-b-10 googleplus " style="height:32px;width:70px"> <i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
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
@endsection
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
                                            <li><span class="bread-blod">Add Member</span>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Member</a></li>
                            </ul>
                            @if($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                  @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div>
                            @endif
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="{{ url('/admin/members/create') }}" method="POST" class="add-department">
                                                   {{ csrf_field() }}  
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="firstname" type="text" class="form-control" placeholder="Firstname" value="{{ old('firstname') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="lastname" type="text" class="form-control" placeholder="Lastname" value="{{old('lastname')}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="phonenumber" type="text" class="form-control" placeholder="Phonenumber" value="{{old('phonenumber')}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="gender" type="text" class="form-control" placeholder="Gender" value="{{old('gender')}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="id_no" type="text" class="form-control" placeholder="ID No" value="{{old('id_no')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <input type="submit" class="btn btn-primary waves-effect waves-light" value="Submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
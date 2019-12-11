@extends('layouts.adminlte')
@section('content')

<?php
$totalevents=count(DB::table('events')->get());
?>
<div class="card card-info">
    <div class="card-header">
        <h5>
            {{$totalevents}} Events
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AddEvent" style="float:right;">Create New Event</button>
        </h5>
    </div>
    <div class="card-body">
       
          @if (session('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session('status') }}
                </div>
          @endif
          
           @if (session('deletestatus'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" style="color:white">X</button>
                    {{ session('deletestatus') }}
                </div>
          @endif
          

           @if ($errors->any())
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">X</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                        
                      
        <div class="row">
            <div class="col-sm-12"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Event Name</th>
                                <th>Event Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Ctreated By</th>
                                <th>Action</th>
                            </tr>
                            @if(!empty($event))
                            @foreach($event as $key=>$events)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$events->name}}</td>
                                <td>{{$events->description}}</td>
                                <td>{{$events->start_date}}</td>
                                <td>{{$events->end_date}}</td>
                                <td>{{$events->created_by}}</td>
                                <td>
                                    <a href="{{url('/admin/events/view/'.$events->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye">View</i></a>
                                    <a href="{{url('/admin/events/view/'.$events->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit">Update</i></a>
                                    <a href="{{url('/admin/events/delete/'.$events->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash">delete</i></a>
                                </td>
                                
                                
                            </tr>
                            @endforeach
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
        
       <!---->
       
       <div class="modal fade" id="AddEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="{{route('events.create')}}">
                  @csrf
                  
                  <div class="modal-body">
                     
                      <label>Event Name</label>
                      <input type="text" name="name" class="form-control">
                      <label>Event Description</label>
                      <textarea name="description" class="form-control"></textarea>
                      
                      <label>Start Date</label>
                      <input type="date" name="start_date" class="form-control">
                      
                      <label>End Date</label>
                      <input type="date" name="end_date" class="form-control">
                      
                       
                      <label>Created By</label>
                      @guest
                        <input type="text" name="created_by" class="form-control" readOnly=true>
                      @else
                        <input type="text" name="created_by" class="form-control" value="{{Auth::user()->name}}" readOnly=true>
                      @endguest
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
       <!---->
       
       
      
       
       
       <!---->
       
       
       <!---->
        
    </div>
</div>
@endsection
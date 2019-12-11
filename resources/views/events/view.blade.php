@extends('layouts.adminlte')
@section('content')
<div class="card card-info">
    <div class="card-header">
        <h5>
            Events
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
                        
                      
         <form method="post" action="{{route('events.update')}}">
                  @csrf
                     
                     
                      <input type="text" name="id" class="form-control" value="{{$event->id}}" style="display:none;">
                      
                      
                      <label>Event Name</label>
                      <input type="text" name="name" class="form-control" value="{{$event->name}}">
                      
                      <label>Event Description</label>
                      <textarea name="description" class="form-control">{{$event->description}}</textarea>
                      
                      <label>Start Date</label>
                      <input type="date" name="start_date" class="form-control" value="{{$event->start_date}}">
                      
                      <label>End Date</label>
                      <input type="date" name="end_date" class="form-control" value="{{$event->end_date}}">
                      
                       
                      <label>Created By</label>
                      @guest
                        <input type="text" name="created_by" class="form-control" readOnly=true>
                      @else
                        <input type="text" name="created_by" class="form-control" value="{{$event->created_by}}" readOnly=true>
                      @endguest
                     
                     <br>
                    <a href="{{route('events.index')}}" class="btn btn-primary">Cancel</a>
                    <button type="submit" class="btn btn-success">Save</button>
                 
              </form>
        
      
    </div>
</div>
@endsection
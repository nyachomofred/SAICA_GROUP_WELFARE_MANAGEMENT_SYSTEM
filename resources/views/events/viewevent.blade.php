@extends('layouts.adminlte')
@section('content')

<?php
$totalevents=count(DB::table('events')->get());
?>
<div class="card card-info">
    <div class="card-header">
        <h5>
            {{$totalevents}} Events
           
        </h5>
    </div>
    <div class="card-body">
       
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
                                
                            </tr>
                            @endforeach
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
       
        
    </div>
</div>
@endsection
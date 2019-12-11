
@extends('layouts.layout')
@section('content')
<div class="row">
             
             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                 <div class="x_title">
              
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                   <p class="text-muted font-13 m-b-30">
                   </p>
                     <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Project Name</th>
                            <th>Description</th>
                            <th>Documentation</th>
                            <th>Project Link</th>
                            <th>Date Uploaded</th>
                            <th>Status</th>
                            <th>Comment</th>
                            
                        </tr>
                        </thead>

                        <tbody>
                        
                        </tbody>
                    </table>
                 </div>
               </div>
             </div>
           </div>
@endsection
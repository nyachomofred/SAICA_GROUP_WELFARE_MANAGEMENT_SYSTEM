@extends('layouts.layout')
@section('content')
           <div class="row">
             
             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                 <div class="x_title">
                 <h2>  <a  href="{{route('students.create')}}" class="btn btn-info btn-xs" ><i class="fa fa-plus"></i> Create </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Registered students At Laikipia Campus</h2>
                   <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                   <p class="text-muted font-13 m-b-30">
                   </p>
                   <table id="datatable-buttons" class="table table-striped table-bordered">
                     <thead>
                       <tr>
                         <th>Student Id</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phonenumber</th>
                         <th>Gender</th>
                        
                         <th>Campus</th>
                         <th>Course Period</th>
                         <th>Sponsor</th>
                       </tr>
                     </thead>


                     <tbody>
                      @foreach($all_student as $student_record)
                       <tr>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->student_id}}</a></td>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->full_name}}</a></td>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->email}}</a></td>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->phonenumber}}</a></td>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->gender_gender}}</a></td>
                        
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->campus}}</a></td>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->course_period}}</a></td>
                         <td><a href="{{URL::to('/admin/students/view/'.$student_record->id)}}">{{$student_record->self_sponsered}}</a></td>
                       </tr>
                       @endforeach
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>

           </div>
               
@endsection
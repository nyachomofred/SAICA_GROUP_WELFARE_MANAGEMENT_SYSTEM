@extends('layouts.adminlte')
@section('content')
<?php
$mark=count(DB::table('marks')->get());
$project=count(DB::table('clasasesments')->get());
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    
    <!-- Main content -->
    <section class="content">
        <div class="card card-default">
           <div class="card-header"><h4>Assets</h4></div>
               <div class="card-body">
                   <div class="row">
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>0</h3>
            
                            <p>Ict Hardware  Assets</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-user-plus"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>0<sup style="font-size: 20px"></sup></h3>
            
                            <p>Ict Software Assets</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-user-plus"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
            </div>
            
                       <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>0</h3>
            
                            <p>Other Assets</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-user-plus"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div>
                   </div>
               </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
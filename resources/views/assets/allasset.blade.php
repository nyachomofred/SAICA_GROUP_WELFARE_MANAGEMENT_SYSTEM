@extends('layouts.adminlte')
@section('content')
<?php
$mark=count(DB::table('marks')->get());
$project=count(DB::table('clasasesments')->get());
?>
   
    <!-- Main content -->
    <section class="content" style="color:black;font-size:20px;font-family:verdana">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="{{asset('img/zaleu.jpg')}}" style="height:100px;width:300px">
                    <small class="float-right"><img src="{{asset('img/zalo.PNG')}}"></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                   <center>
                       <p style="color:black;font-size:20px;font-family:verdana"> 
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Devan Plaza 6Th Floor Crossway Road, Westlands|PO Box 105024-00101, Nairobi<br>
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       Phone: +254723 274 774 |Email:info@zalegoinstitute.ac.ke|Website:www.zalegoinstitute.ac.ke</p>
                   </center>
              </div>
              <!-- /.row -->
              
              <!-- info row -->
              <div class="row invoice-info">
                   <center>
                       <p> 
                       <br>
                      
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       ALL ASSETS OF ZALEGO ACADEMY</p>
                   </center>
              </div>
              <!-- /.row -->
              <div class="row">
                  <div class="col-sm-12">
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
                     <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Serial Number</th>
                                  <th> Model</th>
                                  <th>Type</th>
                                  <th>supplier</th>
                                  <th>Order Number</th>
                                  <th>Status</th>
                                  <th>Purchase Date</th>
                                  <th>Cost Ksh</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                         @if(!empty($data))
                             @foreach($data as $key=>$record)
                                  <tr>
                                     
                                      <td>{{++$key}}</td>
                                      <td>{{$record->assetName}}</td>
                                      <td>{{$record->serialNumber}}</td>
                                      <td>{{$record->assetModel}}</td>
                                      <td>{{$record->assetType}}</td>
                                      <td>{{$record->supplier}}</td>
                                      <td>{{$record->orderNumber}}</td>
                                      <td>{{$record->status}}</td>
                                      <td>{{$record->purchaseDate}}</td>
                                      <td>{{$record->purchaseCost}}</td>
                                      <td>
                                          
                                          <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#view{{$record->id}}"><i class="fa fa-eye">More Info</i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update{{$record->id}}"><i class="fa fa-edit">Update</i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{$record->id}}"><i class="fa fa-trash">Delete</i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deploy{{$record->id}}"><i class="fa fa-trash">Deploy</i></a>
                                              </div>
                                            </div>
                                      </td>
                                      
                                  </tr> 
                                  
                                  
                                       <div class="modal fade" id="view{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">More Information About Asset</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                           <form action="{{route('assets.update')}}" method="POST">
                                             @csrf
                                              <div class="modal-body">
                                                
                                                 <div class="form-group row" style="display:none;">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label">id</label>
                                                    <div class="col-sm-8">
                                                      <input type="text"  class="form-control"  name="id" value="{{$record->id}}">
                                                    </div>
                                                  </div>
                                                  
                                                   <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Asset Name</label>
                                                    <div class="col-sm-8">
                                                      <input type="text"  class="form-control"  name="assetName" value="{{$record->assetName}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Serial Number</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="serialNumber" value="{{$record->serialNumber}}">
                                                    </div>
                                                  </div>
                                                  
                                                   <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Asset Model</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control" name="assetModel"   value="{{$record->assetModel}}">
                                                    </div>
                                                  </div>
                                                   
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Asset Type</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="assetType" value="{{$record->assetType}}">
                                                    </div>
                                                  </div>
                                                  
                                                   
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Supplier</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="supplier" value="{{$record->supplier}}">
                                                    </div>
                                                  </div>
                                                  
                                                   
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Company</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="company" value="{{$record->company}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Order Number</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="orderNumber" value="{{$record->orderNumber}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Purchase Cost</label>
                                                    <div class="col-sm-8">
                                                      <input type="number" class="form-control"  name="purchaseCost" value="{{$record->purchaseCost}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Purchase Date</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="purchaseDate" value="{{$record->purchaseDate}}">
                                                    </div>
                                                  </div>
                                                  
                                                   <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Waranty</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="waranty" value="{{$record->waranty}}">
                                                    </div>
                                                  </div>
                                                  
  
                                              </div>
                                        </form>
                                        </div>
                                      </div>
                                    </div>
                                   
                                      <div class="modal fade" id="update{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Asset</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                           <form action="{{route('assets.update')}}" method="POST">
                                             @csrf
                                              <div class="modal-body">
                                                
                                                 <div class="form-group row" style="display:none;">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label">id</label>
                                                    <div class="col-sm-8">
                                                      <input type="text"  class="form-control"  name="id" value="{{$record->id}}">
                                                    </div>
                                                  </div>
                                                  
                                                   <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Asset Name</label>
                                                    <div class="col-sm-8">
                                                      <input type="text"  class="form-control"  name="assetName" value="{{$record->assetName}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Serial Number</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="serialNumber" value="{{$record->serialNumber}}">
                                                    </div>
                                                  </div>
                                                  
                                                   <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Asset Model</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control" name="assetModel"   value="{{$record->assetModel}}">
                                                    </div>
                                                  </div>
                                                   
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Asset Type</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="assetType" value="{{$record->assetType}}">
                                                    </div>
                                                  </div>
                                                  
                                                   
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Supplier</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="supplier" value="{{$record->supplier}}">
                                                    </div>
                                                  </div>
                                                  
                                                   
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Company</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="company" value="{{$record->company}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Order Number</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="orderNumber" value="{{$record->orderNumber}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Purchase Cost</label>
                                                    <div class="col-sm-8">
                                                      <input type="number" class="form-control"  name="purchaseCost" value="{{$record->purchaseCost}}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Purchase Date</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="purchaseDate" value="{{$record->purchaseDate}}">
                                                    </div>
                                                  </div>
                                                  
                                                   <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Waranty</label>
                                                    <div class="col-sm-8">
                                                      <input type="text" class="form-control"  name="waranty" value="{{$record->waranty}}">
                                                    </div>
                                                  </div>
                                                  
  
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                              </div>
                                        </form>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    
                                     <div class="modal fade" id="delete{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are You sure you want to delete this record ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                           <form action="{{route('assets.delete')}}" method="POST">
                                             @csrf
                                              <div class="modal-body">
                                                
                                                 <div class="form-group row" style="display:none;">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label">id</label>
                                                    <div class="col-sm-8">
                                                      <input type="text"  class="form-control"  name="id" value="{{$record->id}}">
                                                    </div>
                                                  </div>
                                                  
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                              </div>
                                        </form>
                                        </div>
                                      </div>
                                    </div>
                                    
                                     <div class="modal fade" id="deploy{{$record->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to deploy this item?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                           <form action="{{route('assets.deploy')}}" method="POST">
                                             @csrf
                                              <div class="modal-body">
                                                
                                                 <div class="form-group row" style="display:none;">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label">id</label>
                                                    <div class="col-sm-8">
                                                      <input type="text"  class="form-control"  name="id" value="{{$record->id}}">
                                                    </div>
                                                  </div>
                                                  
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Deploy</button>
                                              </div>
                                        </form>
                                        </div>
                                      </div>
                                    </div>


                             @endforeach
                          @endif
                      </table>
                   </tbody>
                  </div>
                  
              </div>
             
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
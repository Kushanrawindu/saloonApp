@extends('admin.layouts.app')

@section('main-content')    
    <!--main-container-part-->
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="/price" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Team Members</a></div>
        </div>
        <!--End-breadcrumbs-->
        <div class="space">

        </div>
        <br>
        <div>
                {{-- <a href="{{route('courseMaterials.create')}}" class="btn btn-success">ADD SUBJECT MATERIALS</a> --}}
                <div class="container">
                  <a href="#myModal" data-toggle="modal" class="btn btn-primary">Add Team Member</a>
                </div>
          
                <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">Add Team Member</h4>
                          </div>
                          <div class="modal-body">
          
                             
                            <form role="form">
                                <div class="form-group">
                                    <label for="subject">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Member's Name">
                                </div>

                                <div class="form-group">
                                    <label for="subject">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Member's Address">
                                </div>

                                <div class="form-group">
                                    <label for="subject">Age</label>
                                    <input type="text" class="form-control" name="age" id="age" placeholder="Enter Member's Age">
                                </div>

                                <div class="form-group">
                                    <label for="subject">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Member's Email">
                                </div>

                                <div class="form-group">
                                    <label for="subject">Telephone</label>
                                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter Member's Telephone">
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Joined Date</label>
                                    <div class="col-sm-13">
                                        <input id="dp1" type="date" name="joined_date" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="expert">Expert In</label>
                                    <select class="form-control input-sm m-bot15" name="expert" id="expert">
                                    <option>Hair Cutting</option>
                                    <option>Facial</option>
                                    <option>Beard Styling</option>
                                    <option>Waxing</option>
                                    </select>
                                </div>
                              
                                <div class="form-group">
                                    <label for="subject">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="Insert Member Image">
                                    
                                </div>
                                <br>
                                <div class="form-group">
                                    <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <button type="submit" class="btn btn-success">Add Member</button>
                                    </form>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
        </div>

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Data table</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>joined_date</th>
                            <th>Expert In</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($team as $team)
                        <tr>
                            <tr class="gradeC">
                            <th scope="row">{{$team->id}}</th>
                                <td>{{$team->name}}</td>
                                <td>{{$team->address}}</td>
                                <td>{{$team->age}}</td>
                                <td>{{$team->email}}</td>
                                <td>{{$team->telephone}}</td>
                                <td>{{$team->joined_date}}</td>
                                <td>{{$team->expert}}</td>
                                <td>{{$team->image}}</td>

                                <td><a href="{{route('team.edit', $team->id)}}" class="btn btn-warning"><i class="icon-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    {{-- <a href="{{route('team.destroy', $team->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a> --}}
                                    <form action="{{route('team.destroy', $team->id)}}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" ><i class="icon-trash"></i></button>
                                          
                                    </form>
                                </td>
                            </tr>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
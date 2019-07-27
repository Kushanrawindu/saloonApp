@extends('admin.layouts.app')

@section('main-content')
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="/price" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Team Members | Edit</a></div>
        </div>
        <!--End-breadcrumbs-->

        <div class="form-group">
                <form action="{{route('team.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">Update Member Details</h4>
                          </div>
                          <div class="modal-body">
          
                             
                            <form role="form">
                                <div class="form-group">
                                    <label for="subject">Name</label>
                                    <input type="text" class="form-control" name="newName" id="newName" placeholder="Enter New Name" value="{{$team->name}}">
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
    </div>
@endsection
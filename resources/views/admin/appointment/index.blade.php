@extends('admin.layouts.app')

@section('main-content')
    <!--main-container-part-->
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="/appointment" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Appointment</a></div>
        </div>
        <!--End-breadcrumbs-->

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Data table</h5>
            </div>
                <div class="widget-content nopadding">
                  <table class="table table-bordered data-table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="gradeC">
                        <td>3</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>kushanrawindu@gmail.com</td>
                        <td>Windows</td>
                        <td>Windows</td>
                        <td>Not Complete</td>
                        <td><a href="#" class="btn btn-success btn-mini">Mark As Complete</a></td>
                      </tr>
                      <tr class="gradeC">
                        <td>2</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>kushanrawindu@gmail.com</td>
                        <td>Windows</td>
                        <td>Windows</td>
                        <td>Complete</td>
                        <td><a href="#" class="btn btn-warning btn-mini">Mark As Not Complete</a></td>
                      </tr>
                      <tr class="gradeU">
                        <td>1</td>
                        <td>All others</td>
                        <td>PSP</td>
                        <td>kushanrawindu@gmail.com</td>
                        <td>Windows</td>
                        <td>Windows</td>
                        <td>Complete</td>
                        <td><a href="#" class="btn btn-warning btn-mini">Mark As Not Complete</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
        </div>
    </div>

    
@endsection
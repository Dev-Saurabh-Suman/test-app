@extends('layout.main')

@section('content')

<div class="content-wrapper">
            <div class="row">

<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Employee Table</h4>
                    <p class="card-description"> <a  href="{{url('/emp/create')}}" class="btn btn-primary btn-fw">Add Employee</a> <code>List of Employees</code> </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Basic</th>
                          <th>HRA</th>
                          <th>DA</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($users as $user)
                      	<tr>
                      		<td>{{$user->name}}</td>
                      		<td>{{$user->email}}</td>
                      		<td>{{$user->salary->basic}}</td>
                      		<td>{{$user->salary->hra}}</td>
                      		<td>{{$user->salary->da}}</td>
                      		<td>{{$user->salary->total}}</td>
                      	</tr>
                      	@endforeach
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
  </div>

@endsection
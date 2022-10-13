@extends('layout.main')

@section('content')

<div class="content-wrapper">
            <div class="row">

<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Projects Table</h4>
                    <p class="card-description"> <a  href="{{url('/project/create')}}" class="btn btn-primary btn-fw">Add Project</a> <code>List of Projects</code> </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Project Name</th>
                          <th>Project Description</th>
                          <th>Assigned To</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($projects as $project)
                      	<tr>
                      		<td>{{$project->project_name}}</td>
                      		<td>{{$project->project_description}}</td>
                      		<td>
                      			@foreach($project->user as $user)
                      			<b>{{$user->name.', '}}</b>
                      			@endforeach
                      		</td>
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
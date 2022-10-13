@extends('layout.main')

@section('content')
<br>
	<h1>Enter the details to create a new project</h1><br>
	
		<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Form to add project</h4>
                    
                    <form class="forms-sample" method="post" action="{{url('/project/store')}}">
                    	@csrf
                      <div class="form-group">
                        <label for="exampleInputName1"> Project Name</label>
                        <input name="project_name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Project Description</label>
                        <input name="project_description" type="text" class="form-control" id="exampleInputEmail3" placeholder="Describe">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Assigned To</label>
                        <input  name="name" type="text" class="form-control" id="exampleInputPassword4" placeholder="">
                      </div>
                      
                      
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

	

@endsection
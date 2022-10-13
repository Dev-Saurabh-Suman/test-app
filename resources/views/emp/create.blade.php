@extends('layout.main')

@section('content')
<br>
	<h1>Enter the details to create a new employee</h1><br>
	
		<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Form to add employee</h4>
                    
                    <form class="forms-sample" method="post" action="{{url('/emp/store')}}">
                    	@csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input  name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Role Id</label>
                        <input  name="role_id" type="text" class="form-control" id="exampleInputCity1" placeholder="Role Id">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Basic Salary</label>
                        <input id="basic" name="basic" type="number" min="0"  class="form-control sal" id="exampleInputPassword4" placeholder="Basic" value="0">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">HRA</label>
                        <input id="hra" name="hra" type="number" min="0"  class="form-control sal" id="exampleInputPassword4" placeholder="HRA" value="0">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputCity1">DA</label>
                        <input id="da" name="da" type="number" min="0" class="form-control sal" id="exampleInputCity1" placeholder="DA" value="0">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Total Salary</label>
                        <input id="total"  name="total" type="number"  class="form-control" id="exampleInputCity1" placeholder="Total">
                      </div>
                      
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

              
              <script type="">
                $(document).ready(function(){
                  $(".sal").keyup(function(){
                    var i = parseInt($("#basic").val());
                    var j = parseInt($("#hra").val());
                    var k = parseInt($("#da").val());
                    $("#total").val(i+j+k);
                  })
                })
              </script>

@endsection
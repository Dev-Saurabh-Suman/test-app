@extends('layout.main')

@section('content')
                  <form method="post" action="{{url('/project/assign')}}">
                    @csrf
                  <div class="form-group">
                      <label for="exampleFormControlSelect2">Select Project</label>
                      <select name ="project_id" class="form-control" id="exampleFormControlSelect2">
                        @foreach($projects as $project)
                        <option value="{{$project->id}}">{{$project->project_name}}</option>
                        @endforeach
                        </select>
                  </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Select Employee</label>
                      <select name="user_id" class="form-control form-control-sm" id="exampleFormControlSelect3">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <input type="submit" name="">
                  </form>

@endsection
@extends('layout',['title' => 'Edit'])

@section('page-content')
    <legend>Edit Employee</legend>
    <form method="post" action="{{route('employees.update')}}">
        @csrf
        
        <input type="hidden" name="id" value="{{$employee->id}}">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{old('name',$employee->name)}}" id="name" name="name"
                       placeholder="Name">
                <div class="invalid-feedback">
                    @error('name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="job_title" class="col-sm-2 control-label">Job tiltle</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{old('job_title', $employee->job_title)}}" id="job_title" name="job_title"
                       placeholder="Job title">
                <div class="invalid-feedback">
                    @error('job_title')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="joining_date" class="col-sm-2 control-label">Joining Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control is-invalid " value="{{old('joining_date', $employee->joining_date)}}" id="joining_date" name="joining_date"
                       placeholder="Joining date">
                <div class="invalid-feedback">
                    @error('joining_date')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="salary" class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
                <input type="number" class="form-control is-invalid " value="{{old('salary', $employee->salary)}}" id="salary" name="salary"
                       placeholder="Salary">
                <div class="invalid-feedback">
                    @error('salary')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control is-invalid " value="{{old('email', $employee->email)}}" id="email" name="email"
                       placeholder="Email">
                {{-- <div class="invalid-feedback">
                    @error('email')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div> --}}
            </div>
        </div>

        <div class="form-group">
            <label for="monile_no" class="col-sm-2 control-label">Mobile</label>
            <div class="col-sm-10">
                <input type="number" class="form-control is-invalid " value="{{old('mobile_no', $employee->mobile_no)}}" id="mobile_no" name="mobile_no"
                       placeholder="Mobile">
                <div class="invalid-feedback">
                    @error('mobile_no')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{old('address', $employee->address)}}" id="address" name="address"
                       placeholder="Address">
                <div class="invalid-feedback">
                    @error('address')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="{{route('employees.index')}}">Back</a>
            </div>
        </div>
    </form>

@endsection




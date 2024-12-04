@extends('layout', ['title' => 'Show'])

    @section('page-content')
        
        <h2>Employees Details</h2>

        <table class='table table-striped' border="2">
            <tr>
                <th>Name</th>
                <td>{{$employee->name}}</td>
            </tr>
            <tr>
                <th>Job title</th>
                <td>{{$employee->job_title}}</td>
            </tr>
            <tr>
                <th>Joining Date</th>
                <td>{{$employee->joining_date}}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>{{$employee->salary}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$employee->email}}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{$employee->mobile_no}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$employee->address}}</td>
            </tr>

            
        </table>

        <p>
            <a class="btn btn-success" href="{{route('employees.index')}}">Back</a>
        </p>

    @endsection
    


















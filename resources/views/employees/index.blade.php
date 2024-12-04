 @extends('layout', ['title' => 'Home'])

    @section('page-content')

        
        <div class="row mt-4">
            <div class="col-lg-10">
                <form class="d-flex" action="{{route('employees.index')}}" method="GET ">
                    <input class="form-control me-2" type="search" name="search" value="{{request('search')}}" placeholder="Search" aria-label="Search" >
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>

            <div class="col-lg-2 ">
                <p class="text-end">
                    <a href="{{route('employees.create')}}" class="btn btn-primary">New Employee</a>
                </p>
            </div>

        </div>

        <h2>Employees List</h2>

        <table class = 'table table-striped' border="2">
            {{-- <th>Id</th> --}}
            <th>Name</th>
            <th>Job title</th>
            <th>Action</th>

            @foreach($es as $e)
            <tr>
            {{-- <td>{{$e->id}}</td> --}}
            <td>{{$e->name}}</td>
            <td>{{$e->job_title}}</td>
            <td>
                <a class="btn btn-success" href="{{route('employees.show',$e->id) }}">View</a>
                <a class="btn btn-primary" href="{{route('employees.edit',$e->id)}}">Edit</a>
                <form action="{{ route('employees.destroy') }}" method="post" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" value="{{ $e->id }}" name="id">
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                
            </td>
            </tr>
            @endforeach
        </table>

        {{ $es->links() }}

    @endsection
    


















<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {   
        if($request -> has('search')){
            $employees = Employee::query()
                -> where('name','LIKE','%'.$request -> get('search').'%')
                ->orWhere('job_title','LIKE','%'.$request -> get('search').'%')
                    ->paginate(10);
               
        }else{
            $employees = Employee::paginate(10);
         } 
         //dd($e);
        return view("employees.index")->with("es", $employees);
    } 

    public function show($id){
        $employee = Employee::findOrFail($id);

        return view("employees.show")->with("employee", $employee);
    }

    public function create(){
        return view("employees.create");

    }

    public function store(Request $request){
    // Validation rules
    $rules = [
        "name" => "required|string",            
        "job_title" => "required|string",
        "joining_date" => "required|date",
        "salary" => "required|numeric",
        "mobile_no" => [
            "required",
            "regex:/^(01[3-9]\d{8})$/"
        ],
        "address" => "required|string",
    ];
    $request->validate($rules);

    // Creating a new Employee object
    $employee = new Employee();
    $employee->name = $request->name;
    $employee->job_title = $request->job_title;
    $employee->joining_date = $request->joining_date;
    $employee->salary = $request->salary;
    $employee->email = $request->email;
    $employee->mobile_no = $request->mobile_no;
    $employee->address = $request->address;

    // Saving to the database
    $employee->save();

    // Redirect with a success message
    return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
}

public function edit($id){
    
    
    $employee = Employee::findOrFail($id);
    return view('employees.edit')->with('employee', $employee);    

}

public function update(Request $request ){

     
    $rules = [
        "name" => "required|string",            
        "job_title" => "required|string",
        "joining_date" => "required|date",
        "salary" => "required|numeric",
        "mobile_no" => [
            "required",
            "regex:/^(01[3-9]\d{8})$/"
        ],
        "address" => "required|string",
    ];
    $request->validate($rules);
    $employee = Employee::findOrFail($request->id);

    $employee->name = $request->name;
    $employee->job_title = $request->job_title;
    $employee->joining_date = $request->joining_date;
    $employee->salary = $request->salary;
    $employee->email = $request->email;
    $employee->mobile_no = $request->mobile_no;
    $employee->address = $request->address;

    $employee->save();

    return redirect()->route("employees.show", $employee->id);

}


public function destroy(Request $request){
    $employee = Employee::findOrFail($request->id);
    $employee->delete();
    return redirect()->route("employees.index");

}

}

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        
        return view('admin-panel.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('admin-panel.employee.create', compact('employees'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $employee = new Employee();
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->country = $request->country;
        $employee->zip = $request->zip;
        $employee->position = $request->position;
        $employee->department = $request->department;
        $employee->salary = $request->salary;
        $employee->start_date = $request->start_date;
        $employee->end_date = $request->end_date;
        $employee->bank_name = $request->bank_name;
        $employee->account_number = $request->account_number;
        $employee->account_name = $request->account_name;
        $employee->branch_address = $request->branch_address;
        $employee->branch_no = $request->branch_no;
        $employee->routing_no = $request->routing_no;
        $employee->swift_code = $request->swift_code;
        $employee->mobile = $request->mobile;
        $employee->bank_email = $request->bank_email;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('employees', 'public');
            $employee->image = $imagePath;
        }

        $employee->save();
        return redirect()->back()->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin-panel.employee.view', compact('employee'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('admin-panel.employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->country = $request->country;
        $employee->zip = $request->zip;
        $employee->position = $request->position;
        $employee->department = $request->department;
        $employee->salary = $request->salary;
        $employee->start_date = $request->start_date;
        $employee->end_date = $request->end_date;
        $employee->bank_name = $request->bank_name;
        $employee->account_number = $request->account_number;
        $employee->account_name = $request->account_name;
        $employee->branch_address = $request->branch_address;
        $employee->branch_no = $request->branch_no;
        $employee->routing_no = $request->routing_no;
        $employee->swift_code = $request->swift_code;
        $employee->mobile = $request->mobile;
        $employee->bank_email = $request->bank_email;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('eployees', 'public');
            $employee->image = $imagePath;
        }

        $employee->save();
        return redirect()->back()->with('success', 'Employee updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('success', 'Employee deleted successfully.');
    }


    public function getEmployee($id)
{
    $employee = Employee::where('employee_id', $id)->first();

    if ($employee) {
        return response()->json([
            'success' => true,
            'data' => $employee,
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Employee not found!',
        ]);
    }
}

}

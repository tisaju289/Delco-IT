<?php

namespace App\Http\Controllers;

use App\Models\Kam;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\FiverrProfile;

class KamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kams = Kam::all();
        return view('admin-panel.kam.index', compact('kams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fiverrProfiles = FiverrProfile::all();
        $employees = Employee::all();
        return view('admin-panel.kam.create', compact('employees', 'fiverrProfiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $kam = new Kam();
        $kam->employee_id = $request->employee_id;
        $kam->employee_name = $request->employee_name;
        $kam->inc_date = $request->inc_date;
        $kam->profile_name = $request->profile_name;
        $kam->gross_sales = $request->gross_sales;
        $kam->deduction_percentage = $request->deduction_percentage;
        $kam->deduction_amount = $request->deduction_amount;
        $kam->client_name = $request->client_name;
        $kam->order_id = $request->order_id;
        $kam->order_page_url = $request->order_page_url;
        $kam->order_sheet_url = $request->order_sheet_url;
        $kam->remarks = $request->remarks;
        $kam->assigned_person = $request->assigned_person;
        $kam->order_status = $request->order_status;
        $kam->service_line = $request->service_line;
        $kam->delivered_by = $request->delivered_by;
        $kam->fiverr_delivery_date = $request->fiverr_delivery_date;
        $kam->net_amount = $request->net_amount;
        $kam->actual_delivery_last_time = $request->actual_delivery_last_time;
        $kam->deadline = $request->deadline;
        $kam->op_department = $request->op_department;
        $kam->platform_source = $request->platform_source;
        $kam->order_source = $request->order_source;
        $kam->platform_status = $request->platform_status;
        $kam->client_feedback = $request->client_feedback;

        
        $kam->save();
        return redirect()->back()->with('success', 'KAM created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kam $kam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kam = Kam::find($id);
        return view('admin-panel.kam.edit', compact('kam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kam = Kam::find($id);
        $kam->employee_id = $request->employee_id;
        $kam->employee_name = $request->employee_name;
        $kam->inc_date = $request->inc_date;
        $kam->profile_name = $request->profile_name;
        $kam->gross_sales = $request->gross_sales;
        $kam->deduction_percentage = $request->deduction_percentage;
        $kam->deduction_amount = $request->deduction_amount;
        $kam->client_name = $request->client_name;
        $kam->order_id = $request->order_id;
        $kam->order_page_url = $request->order_page_url;
        $kam->order_sheet_url = $request->order_sheet_url;
        $kam->remarks = $request->remarks;
        $kam->assigned_person = $request->assigned_person;
        $kam->order_status = $request->order_status;
        $kam->service_line = $request->service_line;
        $kam->delivered_by = $request->delivered_by;
        $kam->fiverr_delivery_date = $request->fiverr_delivery_date;
        $kam->net_amount = $request->net_amount;
        $kam->actual_delivery_last_time = $request->actual_delivery_last_time;
        $kam->deadline = $request->deadline;
        $kam->op_department = $request->op_department;
        $kam->platform_source = $request->platform_source;
        $kam->order_source = $request->order_source;
        $kam->platform_status = $request->platform_status;
        $kam->client_feedback = $request->client_feedback;
        $kam->save();
        return redirect()->back()->with('success', 'KAM updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kam $kam)
    {
        $kam->delete();
        return redirect()->back()->with('success', 'KAM deleted successfully.');
    }
}

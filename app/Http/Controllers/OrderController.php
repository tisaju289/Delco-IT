<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\FiverrProfile;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin-panel.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fiverrProfiles = FiverrProfile::all();
        $designers = Employee::where('position', 'Designer')->get();
        $sales = Employee::where('position', 'Sales Executive')->get();
        return view('admin-panel.orders.create', compact('sales', 'designers', 'fiverrProfiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   

    // Create a new order
        $order = new Order();

        $order->order_type = $request->order_type;
        $order->client_name = $request->client_name;
        $order->order_id = $request->order_id;
        $order->price = $request->price;
        $order->profile_name = $request->profile_name;



        $order->name = $request->name;
        $order->deadline = $request->deadline;
        $order->assigned_to = $request->assigned_to;
        $order->team_leader = $request->team_leader;
        $order->created_by = $request->created_by;
        $order->client_drive_url = $request->client_drive_url;
        $order->client_instructions = $request->client_instructions;
        $order->login_credentials = $request->login_credentials;
        $order->special_requirements = $request->special_requirements;
        $order->text = $request->text;
        $order->client_social_media_link = $request->client_social_media_link;

    // Handle file uploads
    if ($request->hasFile('reference_file')) {
        $order->reference_file = $request->file('reference_file')->store('uploads', 'public');
    }
    if ($request->hasFile('reference_website')) {
        $order->reference_website = $request->file('reference_website')->store('uploads', 'public');
    }
    if ($request->hasFile('client_details_screenshot')) {
        $order->client_details_screenshot = $request->file('client_details_screenshot')->store('uploads', 'public');
    }
    if ($request->hasFile('client_requirements_screenshot')) {
        $order->client_requirements_screenshot = $request->file('client_requirements_screenshot')->store('uploads', 'public');
    }
    if ($request->hasFile('conversation_screenshot')) {
        $order->conversation_screenshot = $request->file('conversation_screenshot')->store('uploads', 'public');
    }
    if ($request->hasFile('shared_files')) {
        $order->shared_files = $request->file('shared_files')->store('uploads', 'public');
    }


    $order->revisions = json_encode($request->revisions);
    // Save the order
    $order->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Order created successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin-panel.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->name = $request->name;
        $order->deadline = $request->deadline;
        $order->assigned_to = $request->assigned_to;
        $order->team_leader = $request->team_leader;
        $order->created_by = $request->created_by;
        $order->client_drive_url = $request->client_drive_url;
        $order->client_instructions = $request->client_instructions;
        $order->login_credentials = $request->login_credentials;
        $order->special_requirements = $request->special_requirements;
        $order->text = $request->text;
        $order->client_social_media_link = $request->client_social_media_link;
    
        // Handle file uploads
        if ($request->hasFile('reference_file')) {
            $order->reference_file = $request->file('reference_file')->store('uploads', 'public');
        }
        if ($request->hasFile('reference_website')) {
            $order->reference_website = $request->file('reference_website')->store('uploads', 'public');
        }
        if ($request->hasFile('client_details_screenshot')) {
            $order->client_details_screenshot = $request->file('client_details_screenshot')->store('uploads', 'public');
        }
        if ($request->hasFile('client_requirements_screenshot')) {
            $order->client_requirements_screenshot = $request->file('client_requirements_screenshot')->store('uploads', 'public');
        }
        if ($request->hasFile('conversation_screenshot')) {
            $order->conversation_screenshot = $request->file('conversation_screenshot')->store('uploads', 'public');
        }
        if ($request->hasFile('shared_files')) {
            $order->shared_files = $request->file('shared_files')->store('uploads', 'public');
        }
    
    
        $order->revision_1 = $request->revision_1;
        $order->revision_2 = $request->revision_2;
        $order->revision_3 = $request->revision_3;
    
        // Save the order
        $order->save();
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
}

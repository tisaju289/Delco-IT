<?php

namespace App\Http\Controllers;

use App\Models\FiverrProfile;
use Illuminate\Http\Request;

class FiverrProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiverrProfiles = FiverrProfile::all();
        return view('admin-panel.fiverr-profile.index', compact('fiverrProfiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin-panel.fiverr-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
        
    // $validated = $request->validate([
    //     // Personal Information
    //     'first_name' => 'required|string|max:255',
    //     'last_name' => 'required|string|max:255',
    //     'date_of_birth' => 'nullable|date',
    //     'nid_or_passport' => 'nullable|string|max:255',
    //     'bank_account_number' => 'nullable|string|max:255',
    //     'branch_name' => 'nullable|string|max:255',
    //     'bank_name' => 'nullable|string|max:255',
    //     'address_line_1' => 'required|string|max:255',
    //     'address_line_2' => 'nullable|string|max:255',
    //     'city' => 'required|string|max:255',
    //     'postal_code' => 'required|string|max:20',
    //     'country' => 'required|string|max:100',
    //     'account_creation_date' => 'nullable|date',

    //     // Common Information
    //     'profile_name' => 'required|string|max:255',
    //     'category' => 'required|string|max:255',
    //     'mobile_number' => 'required|string|max:20',
    //     'sim_owner' => 'nullable|string|max:255',
    //     'current_sim_holder' => 'nullable|string|max:255',

    //     // Email Information
    //     'email_address' => 'required|email|max:255',
    //     'email_password' => 'required|string|max:255',
    //     'backup_email' => 'nullable|email|max:255',
    //     'backup_phone' => 'nullable|string|max:20',
    //     'email_2_address' => 'nullable|email|max:255',
    //     'email_2_password' => 'nullable|string|max:255',
    //     'backup_2_email' => 'nullable|email|max:255',
    //     'backup_2_phone' => 'nullable|string|max:20',
    //     'email_3_address' => 'nullable|email|max:255',
    //     'email_3_password' => 'nullable|string|max:255',
    //     'backup_3_email' => 'nullable|email|max:255',
    //     'backup_3_phone' => 'nullable|string|max:20',

    //     // Yahoo Information
    //     'yahoo_address' => 'nullable|email|max:255',
    //     'yahoo_password' => 'nullable|string|max:255',
    //     'yahoo_2_address' => 'nullable|email|max:255',
    //     'yahoo_2_password' => 'nullable|string|max:255',

    //     // Technical Information
    //     'ip_address' => 'nullable|ip',
    //     'mac_address' => 'nullable|string|max:255',

    //     // Social Media Information
    //     'facebook' => 'nullable|url|max:255',
    //     'facebook_password' => 'nullable|string|max:255',
    //     'instagram_username' => 'nullable|string|max:255',
    //     'instagram_password' => 'nullable|string|max:255',
    //     'linkedin' => 'nullable|url|max:255',
    //     'linkedin_password' => 'nullable|string|max:255',
    //     'linkedin_username' => 'nullable|string|max:255',
    //     'dribbble' => 'nullable|url|max:255',
    //     'dribbble_password' => 'nullable|string|max:255',
    //     'stackoverflow' => 'nullable|url|max:255',
    //     'stackoverflow_password' => 'nullable|string|max:255',
    //     'vimeo' => 'nullable|url|max:255',
    //     'vimeo_password' => 'nullable|string|max:255',
    //     'twitter' => 'nullable|url|max:255',
    //     'twitter_password' => 'nullable|string|max:255',
    //     'github_id' => 'nullable|string|max:255',
    //     'github_password' => 'nullable|string|max:255',
    //     'behance' => 'nullable|url|max:255',
    //     'behance_password' => 'nullable|string|max:255',

    //     // Fiverr Information
    //     'fiverr_creation_date' => 'nullable|date',
    //     'fiverr_verify_status' => 'nullable|string|max:255',
    //     'fiverr_account_status' => 'nullable|string|max:255',
    //     'fiverr_account_category' => 'nullable|string|max:255',
    //     'fiverr_account_create_date' => 'nullable|date',
    //     'fiverr_account_disable_date' => 'nullable|date',
    //     'fiverr_mobile_number' => 'nullable|string|max:20',
    //     'fiverr_sim_owner' => 'nullable|string|max:255',
    //     'fiverr_current_sim_holder' => 'nullable|string|max:255',
    //     'fiverr_username' => 'nullable|string|max:255',
    //     'fiverr_email' => 'nullable|email|max:255',
    //     'fiverr_password' => 'nullable|string|max:255',
    //     'fiverr_security_question_1' => 'nullable|string|max:255',
    //     'fiverr_security_answer_1' => 'nullable|string|max:255',
    //     'fiverr_security_question_2' => 'nullable|string|max:255',
    //     'fiverr_old_email' => 'nullable|email|max:255',
    //     'fiverr_old_password' => 'nullable|string|max:255',
    //     'fiverr_old_number' => 'nullable|string|max:20',
    // ]);

    //     FiverrProfile::create($request->all());
    //     return redirect()->route('fiverr-profiles.index')
    //     ->with('success', 'Fiverr Profile created successfully');
   
    // }

    public function store(Request $request)
    {
        // Validate required fields and allow nullable fields
        $validatedData = $request->validate([
            // Personal Information
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'date_of_birth' => 'nullable|nullable|string',
            'nid_or_passport' => 'nullable|string|max:50',
            'bank_account_number' => 'nullable|string|max:50',
            'branch_name' => 'nullable|string|max:100',
            'bank_name' => 'nullable|string|max:100',
            'address_line_1' => 'required|string|max:200',
            'address_line_2' => 'nullable|string|max:200',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'account_creation_date' => 'nullable|nullable|string',
    
            // Common Information
            'profile_name' => 'required|string|max:150',
            'category' => 'required|string|max:100',
            'mobile_number' => 'required|string|max:20',
            'sim_owner' => 'nullable|string|max:100',
            'current_sim_holder' => 'nullable|string|max:100',
    
            // Email Information
            'email_address' => 'required|email|max:150',
            'email_password' => 'required|string',
            'backup_email' => 'nullable|email|max:150',
            'backup_phone' => 'nullable|string|max:20',
            'email_2_address' => 'nullable|email|max:150',
            'email_2_password' => 'nullable|string',
            'backup_2_email' => 'nullable|email|max:150',
            'backup_2_phone' => 'nullable|string|max:20',
            'email_3_address' => 'nullable|email|max:150',
            'email_3_password' => 'nullable|string',
            'backup_3_email' => 'nullable|email|max:150',
            'backup_3_phone' => 'nullable|string|max:20',
    
            // Yahoo Information
            'yahoo_address' => 'nullable|email|max:150',
            'yahoo_password' => 'nullable|string',
            'yahoo_2_address' => 'nullable|email|max:150',
            'yahoo_2_password' => 'nullable|string',
    
            // Technical Information
            'ip_address' => 'nullable|string|max:50',
            'mac_address' => 'nullable|string|max:50',
    
            // Social Media Information
            'facebook' => 'nullable|string|max:150',
            'facebook_password' => 'nullable|string',
            'instagram_username' => 'nullable|string|max:150',
            'instagram_password' => 'nullable|string',
            'linkedin' => 'nullable|string|max:150',
            'linkedin_password' => 'nullable|string',
            'linkedin_username' => 'nullable|string|max:150',
            'dribbble' => 'nullable|string|max:150',
            'dribbble_password' => 'nullable|string',
            'stackoverflow' => 'nullable|string|max:150',
            'stackoverflow_password' => 'nullable|string',
            'vimeo' => 'nullable|string|max:150',
            'vimeo_password' => 'nullable|string',
            'twitter' => 'nullable|string|max:150',
            'twitter_password' => 'nullable|string',
            'github_id' => 'nullable|string|max:150',
            'github_password' => 'nullable|string',
            'behance' => 'nullable|string|max:150',
            'behance_password' => 'nullable|string',
    
            // Fiverr Information
            'fiverr_creation_date' => 'nullable|nullable|string',
            'fiverr_verify_status' => 'nullable|string|max:100',
            'fiverr_account_status' => 'nullable|string|max:100',
            'fiverr_account_category' => 'nullable|string|max:100',
            'fiverr_account_create_date' => 'nullable|nullable|string',
            'fiverr_account_disable_date' => 'nullable|nullable|string',
            'fiverr_mobile_number' => 'nullable|string|max:20',
            'fiverr_sim_owner' => 'nullable|string|max:100',
            'fiverr_current_sim_holder' => 'nullable|string|max:100',
            'fiverr_username' => 'nullable|string|max:150',
            'fiverr_email' => 'nullable|email|max:150',
            'fiverr_password' => 'nullable|string',
            'fiverr_security_question_1' => 'nullable|string|max:200',
            'fiverr_security_answer_1' => 'nullable|string|max:200',
            'fiverr_security_question_2' => 'nullable|string|max:200',
            'fiverr_old_email' => 'nullable|email|max:150',
            'fiverr_old_password' => 'nullable|string',
            'fiverr_old_number' => 'nullable|string|max:20',

            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);
    
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $validatedData['profile_image'] = $imagePath;
        }


        $dateFields = ['date_of_birth', 'account_creation_date', 'fiverr_creation_date', 'fiverr_account_create_date', 'fiverr_account_disable_date'];
        foreach ($dateFields as $field) {
            if (!empty($validatedData[$field])) {
                try {
                    $validatedData[$field] = \Carbon\Carbon::createFromFormat('d-M-Y', $validatedData[$field])->format('Y-m-d');
                } catch (\Exception $e) {
                    return back()->withErrors([$field => 'Invalid date format. Please use DD-MMM-YYYY format.']);
                }
            }
        }
        
        
        
        
        // Store all data in the database, empty fields will be NULL if they are nullable
        FiverrProfile::create($validatedData);
    
        // Redirect to the index page with success message
        return redirect()->route('fiverr-profiles.index')->with('success', 'Fiverr profile created successfully!');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(FiverrProfile $fiverrProfile)
    {
        return view('admin-panel.fiverr-profile.view', compact('fiverrProfile'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FiverrProfile $fiverrProfile)
    {

      
        $fiverrProfile = FiverrProfile::find($fiverrProfile->id);
        return view('admin-panel.fiverr-profile.edit', compact('fiverrProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FiverrProfile $fiverrProfile)
    {
        
        $fiverrProfile = FiverrProfile::find($fiverrProfile->id);
        $fiverrProfile->update($request->all());
        return redirect()->route('fiverr-profiles.index')
            ->with('success', 'Fiverr Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FiverrProfile $fiverrProfile)
    {
        $fiverrProfile->delete();
        return redirect()->route('fiverr-profiles.index')
            ->with('success', 'Fiverr Profile deleted successfully');
    }
}

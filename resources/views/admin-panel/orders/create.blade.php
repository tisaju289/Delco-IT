@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add order</h4>
                <h6><a href="{{ route('orders.index')}}">All order /</a> Create new order category</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Laravel form for creating a category -->
                    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <h3 class="text-center bg-warning text-black p-2">Project Details</h3>
                            </div>

                            <!-- Name -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="order_type">Order Type *</label>
                                    <input type="text" id="order_type" name="order_type" class="form-control" required />
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_name">Client Name *</label>
                                    <input type="text" id="client_name" name="client_name" class="form-control" required />
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="order_id">Order ID *</label>
                                    <input type="text" id="order_id" name="order_id" class="form-control" required />
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="price">Price *</label>
                                    <input type="text" id="price" name="price" class="form-control" required />
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="profile_name">Profile Name *</label>
                                    <select id="profile_name" name="profile_name" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($fiverrProfiles as $fiverrProfile)
                                            <option value="{{ $fiverrProfile->profile_name }}">{{ $fiverrProfile->profile_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Project Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" readonly />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="deadline">Project Deadline *</label>
                                    <input type="date" id="deadline" name="deadline" class="form-control" required />
                                </div>
                            </div>

                            {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="assigned_to">Assigned To *</label>
                                    <select id="assigned_to" name="assigned_to" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="Fahad">Fahad</option>
                                        <option value="Tanvir">Tanvir</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="assigned_to">Assigned To *</label>
                                    <select id="assigned_to" name="assigned_to" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($designers as $designer)
                                            <option value="{{ $designer->id }}">{{ $designer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="team_leader">Responsible Team & Leader *</label>
                                    <select id="team_leader" name="team_leader" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($designers as $designer)
                                            <option value="{{ $designer->id }}">{{ $designer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="created_by">Order Sheet Created By *</label>
                                    <select id="created_by" name="created_by" class="form-control" required>
                                        <option value="">select</option>
                                        @foreach($sales as $sale)
                                            <option value="{{ $sale->id }}">{{ $sale->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <h3 class="text-center bg-warning text-black p-2">Project Instructions</h3>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_drive_url">Client Drive URL</label>
                                    <input type="text" id="client_drive_url" name="client_drive_url" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_instructions">Client Instructions or Meeting URL</label>
                                    <input type="text" id="client_instructions" name="client_instructions" class="form-control" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="login_credentials">Login Credentials for Domain and Hosting</label>
                                    <input type="text" id="login_credentials" name="login_credentials" class="form-control" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="special_requirements">Any Special Requirements From Client</label>
                                    <input id="special_requirements" name="special_requirements" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <input type="text" id="text" name="text" class="form-control" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_social_media_link">Client Design/Social Media Link</label>
                                    <input type="text" name="client_social_media_link" class="form-control" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reference_file">Reference Or Competitors URL/File</label>
                                    <input type="file" name="reference_file" class="form-control" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reference_website">Reference Website for text, images, icons, or doc</label>
                                    <input type="file" name="reference_website" class="form-control" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_details_screenshot">Client Details Screenshot: pdf, jpg, png</label>
                                    <input type="file" name="client_details_screenshot" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_requirements_screenshot">Client Requirements Screenshot: pdf, jpg, png</label>
                                    <input type="file" name="client_requirements_screenshot" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="conversation_screenshot">Conversation Page Screenshot: pdf, jpg, png</label>
                                    <input type="file" name="conversation_screenshot" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="shared_files">Shared Files/Link/ By Client (if any): pdf, jpg, png</label>
                                    <input type="file" name="shared_files" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <h3 class="text-center bg-warning text-black p-2">Revision History</h3>
                            </div>

                            <div id="revisionFields">
                                <div class="col-lg-12 revision-group">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="revision_1" class="mr-2">Revision 1</label>
                                        <textarea name="revisions[]" id="revision_1" cols="30" rows="3" class="form-control"></textarea>
                                        <button type="button" class="btn btn-success ml-2" onclick="addRevisionField()">+</button>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="revision_2">Revision 2</label>
                                    <textarea name="revision_2" id="revision_2" cols="30" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="revision_3">Revision 3</label>
                                    <textarea name="revision_3" id="revision_3" cols="30" rows="3"></textarea>
                                </div>
                            </div> --}}

                            <!-- Submit Button -->
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Create order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Function to auto-generate Project Name
    function generateProjectName() {
        const orderType = document.getElementById("order_type").value;
        const clientName = document.getElementById("client_name").value;
        const orderId = document.getElementById("order_id").value;
        const price = document.getElementById("price").value;
        const profileName = document.getElementById("profile_name").value;

        // Combine the values to create the project name
        const projectName = `${orderType}-${clientName}-${orderId}-$${price}-${profileName}`;
        
        // Set the generated name in the Project Name field
        document.getElementById("name").value = projectName;
    }

    // Add event listeners to the input fields
    document.getElementById("order_type").addEventListener("input", generateProjectName);
    document.getElementById("client_name").addEventListener("input", generateProjectName);
    document.getElementById("order_id").addEventListener("input", generateProjectName);
    document.getElementById("price").addEventListener("input", generateProjectName);
    document.getElementById("profile_name").addEventListener("change", generateProjectName);





    let revisionCount = 1;

        function addRevisionField() {
            revisionCount++;
            const revisionContainer = document.getElementById('revisionFields');

            // নতুন রিভিশন ফিল্ড তৈরির জন্য
            const newRevisionField = document.createElement('div');
            newRevisionField.classList.add('col-lg-12', 'revision-group');
            newRevisionField.innerHTML = `
                <div class="form-group d-flex align-items-center">
                    <label for="revision_${revisionCount}" class="mr-2">Revision ${revisionCount}</label>
                    <textarea name="revisions[]" id="revision_${revisionCount}" cols="30" rows="3" class="form-control"></textarea>
                    <button type="button" class="btn btn-danger ml-2" onclick="removeRevisionField(this)">-</button>
                </div>
            `;
            
            revisionContainer.appendChild(newRevisionField);
        }

        function removeRevisionField(button) {
            button.parentElement.parentElement.remove();
        }
</script>
@endsection

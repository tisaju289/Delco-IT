@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Update Order</h4>
                <h6><a href="{{ route('orders.index') }}">All Orders /</a> Update Order</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Laravel form for updating an order -->
                    <form action="{{ route('orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Required for updating -->

                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <h3 class="text-center bg-warning text-black p-2">Project Details</h3>
                            </div>

                            <!-- Name -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">Project Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $order->name }}" required />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="deadline">Project Deadline *</label>
                                    <input type="date" id="deadline" name="deadline" class="form-control" value="{{ $order->deadline }}" required />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="assigned_to">Assigned To *</label>
                                    <select id="assigned_to" name="assigned_to" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="Fahad" {{ $order->assigned_to == 'Fahad' ? 'selected' : '' }}>Fahad</option>
                                        <option value="Tanvir" {{ $order->assigned_to == 'Tanvir' ? 'selected' : '' }}>Tanvir</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="team_leader">Responsible Team & Leader *</label>
                                    <select id="team_leader" name="team_leader" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="Fahad" {{ $order->team_leader == 'Fahad' ? 'selected' : '' }}>Fahad</option>
                                        <option value="Tanvir" {{ $order->team_leader == 'Tanvir' ? 'selected' : '' }}>Tanvir</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="created_by">Order Sheet Created By *</label>
                                    <select id="created_by" name="created_by" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="Saju" {{ $order->created_by == 'Saju' ? 'selected' : '' }}>Saju</option>
                                        <option value="Sabbir" {{ $order->created_by == 'Sabbir' ? 'selected' : '' }}>Sabbir</option>
                                        <option value="Tanvir" {{ $order->created_by == 'Tanvir' ? 'selected' : '' }}>Tanvir</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <h3 class="text-center bg-warning text-black p-2">Project Instructions</h3>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_drive_url">Client Drive URL</label>
                                    <input type="text" id="client_drive_url" name="client_drive_url" class="form-control" value="{{ $order->client_drive_url }}" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_instructions">Client Instructions or Meeting URL</label>
                                    <input type="text" id="client_instructions" name="client_instructions" class="form-control" value="{{ $order->client_instructions }}" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="login_credentials">Login Credentials for Domain and Hosting</label>
                                    <input type="text" id="login_credentials" name="login_credentials" class="form-control" value="{{ $order->login_credentials }}" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="special_requirements">Any Special Requirements From Client</label>
                                    <input id="special_requirements" name="special_requirements" class="form-control" value="{{ $order->special_requirements }}" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <input type="text" id="text" name="text" class="form-control" value="{{ $order->text }}" />
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_social_media_link">Client Design/Social Media Link</label>
                                    <input type="text" name="client_social_media_link" class="form-control" value="{{ $order->client_social_media_link }}" />
                                </div>
                            </div> 

                            <!-- File Fields -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reference_file">Reference Or Competitors URL/File</label>
                                    <input type="file" name="reference_file" class="form-control" />
                                    <small>Current File: {{ $order->reference_file }}</small>
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reference_website">Reference Website for text, images, icons, or doc</label>
                                    <input type="file" name="reference_website" class="form-control" />
                                    <small>Current File: {{ $order->reference_website }}</small>
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="client_details_screenshot">Client Details Screenshot: pdf, jpg, png</label>
                                    <input type="file" name="client_details_screenshot" class="form-control" />
                                    <small>Current File: {{ $order->client_details_screenshot }}</small>
                                </div>
                            </div>

                            <!-- Revision History -->
                            <div class="col-lg-12 mb-3">
                                <h3 class="text-center bg-warning text-black p-2">Revision History</h3>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="revision_1">Revision 1</label>
                                    <textarea name="revision_1" id="revision_1" cols="30" rows="3" class="form-control">{{ $order->revision_1 }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="revision_2">Revision 2</label>
                                    <textarea name="revision_2" id="revision_2" cols="30" rows="3" class="form-control">{{ $order->revision_2 }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="revision_3">Revision 3</label>
                                    <textarea name="revision_3" id="revision_3" cols="30" rows="3" class="form-control">{{ $order->revision_3 }}</textarea>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Update Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

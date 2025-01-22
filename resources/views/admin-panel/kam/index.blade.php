@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>KAM List</h4>
                <h6>View/Search KAM</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('kams.create') }}" class="btn btn-added">
                    <img src="{{ asset('admin-panel/assets/img/icons/plus.svg') }}" class="me-1" alt="img">Add KAM
                </a>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ asset('admin-panel/assets/img/icons/filter.svg') }}" alt="img">
                                <span><img src="{{ asset('admin-panel/assets/img/icons/closes.svg') }}" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{ asset('admin-panel/assets/img/icons/search-white.svg') }}" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="PDF"><img src="{{ asset('admin-panel/assets/img/icons/pdf.svg') }}" alt="img"></a></li>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="{{ asset('admin-panel/assets/img/icons/excel.svg') }}" alt="img"></a></li>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><img src="{{ asset('admin-panel/assets/img/icons/printer.svg') }}" alt="img"></a></li>
                        </ul>
                    </div>
                </div>
                
                <table class="table table-striped table-bordered text-center datanew">
                    <thead>
                        <tr>
                            <th>Profile Name</th>
                            <th>Client Name</th>
                            <th>Order Id</th>
                            <th>Assigned Person</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            @foreach ($kams as $kam)
                                <tr>
                                    <td>{{ $kam->profile_name }}</td>
                                    <td>{{ $kam->client_name }}</td>
                                    <td>{{ $kam->order_id }}</td>
                                    <td>{{ $kam->assigned_person }}</td>
                                    <td>
                                        <a href="{{ route('kams.edit', $kam->id) }}" class="btn btn-edit"><i class="fa fa-edit"></i></a>
                                        <form id="delete-form-{{ $kam->id }}" action="{{ route('kams.destroy', $kam->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href="#" class="btn btn-delete" onclick="confirmDelete({{ $kam->id }})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

    function confirmDelete(kamId) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this KAM?')) {
            document.getElementById('delete-form-' + kamId).submit();
        }
    }
</script>

@endsection

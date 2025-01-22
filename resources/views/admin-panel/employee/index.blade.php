@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Employee List</h4>
                <h6>View/Search employee</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('employees.create') }}" class="btn btn-added">
                    <img src="{{ asset('admin-panel/assets/img/icons/plus.svg') }}" class="me-1" alt="img">Add employee
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="product-img">
                                            <!-- Check if the product has an image -->
                                            @if($employee->image)
                                            <img src="{{ asset('storage/' . $employee->image) }}" alt="employee image" style="width: 30px; height: 30px; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('admin-panel/assets/img/shopticart-fav.png') }}" alt="default image" style="width: 50px; height: 50px; object-fit: cover;">
                                        @endif
                                        
                                        
                                        </a>
                                    </td>
                                    
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->position }}</td>
                                  
                                    <td>
                                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-view" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href="#" class="btn btn-delete" onclick="confirmDelete({{ $employee->id }})" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
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

    function confirmDelete(employeeId) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this employee?')) {
            document.getElementById('delete-form-' + employeeId).submit();
        }
    }
</script>

@endsection

@extends('layouts.admin.master')

@section('title', 'Add Teacher')

@section('content') 

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Teacher</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="expert" class="form-label">Expert In</label>
                                <input type="text" class="form-control" name="expert">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Teachers List --}}
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Teachers</h4> 
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Expert In</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teachers as $key => $teacher)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                  <td>
                                       @if($teacher->image)
                                            <img src="{{ asset($teacher->image) }}" width="60" height="60" class="rounded-circle" alt="{{ $teacher->name }}">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                  </td>

                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->expert ?? 'N/A' }}</td>
                                    <td class="d-flex flex-column gap-2">
                                       
                                         <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-success px-3">Edit</a>
                                        
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-3" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No teachers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

<script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

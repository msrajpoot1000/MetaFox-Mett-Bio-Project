@extends('layouts.admin.master')

@section('title', 'Edit Teacher')

@section('content') 

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Teacher</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Required for PUT method -->
                    
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
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $teacher->name) }}" required>
                                </div>
                            </div>
                    
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="expert" class="form-label">Expert In</label>
                                    <input type="text" class="form-control" name="expert" value="{{ old('expert', $teacher->expert) }}">
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image (leave blank to keep old)</label>
                                    <input type="file" class="form-control" name="image">
                                    @if($teacher->image)
                                        <div class="mt-2">
                                            <img src="{{ asset($teacher->image) }}" width="80" class="rounded">
                                            <p class="mb-0"><small>Current Image</small></p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    
                        <div>
                            <button type="submit" class="btn btn-success w-md">Update</button>
                        </div>
                    </form>

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

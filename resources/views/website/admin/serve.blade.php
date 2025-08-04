@extends('layouts.admin.master')

@section('title', 'dashboard | Add Project Category')

@section('content') 

 <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Industry Served</h4>
                        </div>
                    </div>
                    <div class="card-body">
            
                        <form action="{{ route('serve.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Add Industry serve name" id="name" name="name" value="">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" value="">
                                    </div>
                                </div>
                                
                                  <div class="col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="description" name="description" value="">
                                    </div>
                                </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">View Industry Serve</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
        
                                <thead>
                                    <tr>
                                        <th>SN.</th>
                                        <th>Industry Serve</th>
                                        <th>Industry Serve Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($serves as $serve)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        
                                        <td>{{ $serve->name }}</td>
                                        
                                        <td>
                                            <img src="{{ asset($serve->image) }}" width="40" height="40" class="rounded-circle" alt="">
                                        </td>
                                        
                                        <td>{{ $serve->description }}</td>
                                        
                                        <td>
                                             <a href="{{ route('serve.edit', $serve->id) }}" class="btn btn-warning btn-sm px-4">Edit</a>
                                             
                                            <form action="{{ route('serve.destroy', $serve->id) }}" method="POST" style="display:inline-block;">
                                             @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-danger btn-sm px-4" onclick="return confirm('Are you sure you want to delete this Product Category?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        
@endsection



@section('scripts')
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>

<!-- CKEditor Script -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('editor1');
        });
    </script

@endsection
@extends('layouts.admin.master')

@section('title', 'Add blogs')

@section('content') 


      <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
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
                        
                        <div class="col">
                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control" placeholder="" value="" name="heading" required>
                            </div>
                        </div>
                        
                        <div class="row">

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" value="" name="image" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" placeholder="" value="" name="date" required>
                                </div>
                            </div>
                             <div class="col-6">
                                <div class="mb-3">
                                    <label for="user" class="form-label">User</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="user" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <label for="description" class="form-label">Short Description</label>
                            <textarea name="description" id="editor1"></textarea>
                        </div>
                        
                        <div class="card-body">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea name="long_description" id="editor2"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Blog</h4> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>User</th>
                                    <th>Heading</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allBlogs as $blog)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $blog->user }}</td>
                                    <td>{{ $blog->heading }}</td>
                                    <td title="{{ strip_tags($blog->description) }}">
                                        {{ Str::limit(strip_tags($blog->description), 100) }}
                                    </td>
                                    
                                    <td title="{{ strip_tags($blog->long_description) }}">
                                        {{ Str::limit(strip_tags($blog->long_description), 100) }}
                                    </td>
                                    
                                  <td>
                                    @if($blog->date)
                                        {{ \Carbon\Carbon::parse($blog->date)->format('F d, Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                                                    
                                    
                                    <td>
                                        <img src="{{ asset('uploads/' . $blog->image) }}" width="40" height="40" class="rounded-circle" alt="">
                                    </td>
                                    <td class="d-flex flex-column gap-2">
                                        <a href="{{ route('update.blog', $blog->id) }}" class="btn btn-sm btn-success px-3">Edit</a>
                                        <form action="{{ route('blog.dlt', $blog->id) }}" method="POST" style="display:inline-block;">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-danger btn-sm px-3" onclick="return confirm('Are you sure you want to delete this User?')">Delete</button>
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
    
       <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');
            });
        </script>

        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection

  


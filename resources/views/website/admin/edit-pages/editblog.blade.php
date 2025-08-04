@extends('layouts.admin.master')

@section('title', 'Add blogs')

@section('content') 


<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Edit blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.updateStore', ['id' => $fetchBlogs->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col">
                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control" placeholder="" value="{{ $fetchBlogs->heading }}" name="heading" required>
                            </div>
                        </div>
                        
                        <div class="row">
                    
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" value="{{ $fetchBlogs->image }}" name="image" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" placeholder="" value="{{ $fetchBlogs->date }}" name="date" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="user" class="form-label">User</label>
                                    <input type="text" class="form-control" value="{{ $fetchBlogs->user }}" name="user" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="editor1">{{ $fetchBlogs->description }}</textarea>
                        </div>
                        
                        <div class="card-body">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea name="long_description" id="editor2">{{ $fetchBlogs->long_description }}</textarea>
                        </div>
                        
                        
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
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

  


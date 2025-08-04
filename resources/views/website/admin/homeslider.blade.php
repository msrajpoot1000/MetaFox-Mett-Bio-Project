@extends('layouts.admin.master')

@section('title', 'dashboard')

@section('content') 

 <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add New Home Slider</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('homeslider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="heading1" class="form-label">Heading 1</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="heading1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="heading2" class="form-label">Heading 2</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="heading2">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="homesliderimage" class="form-label">Slider Image</label>
                                    <input type="file" class="form-control" value="" name="homesliderimage">
                                </div>
                            </div> 
                            
                            <div class="col-md-6">
                               <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="description">
                                </div>
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
        <!-- end col -->
        <!-- end col -->
    </div>
    <!-- end row -->



    <div class="row mt-5">
        <div class="col">
            <div class="card">
                   <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Home Slider</h4>
                   </div>
                 <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Hedding 1</th>
                                    <th>Hedding 2</th>
                                    <th>Description</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($sliders as $slider)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                   
                                    <td>{{ $slider->heading1 }}</td>
                                    
                                    <td>{{ $slider->heading2 }}</td>
                                    
                                    <td>{{ $slider->description }}</td>
                                    
                                    <td>
                                        <img src="{{ asset($slider->homesliderimage) }}" width="40" height="40" class="rounded-circle" alt="">
                                    </td>
                                    
                                    <td class="d-flex flex-column row-gap-2">
                                        <a href="" target="_blank" class="btn btn-sm btn-success px-4">Edit</a>
                                        <form action="{{ route('homeslider.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-danger btn-sm px-4" onclick="return confirm('Are you sure you want to delete this User?')">Delete</button>
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
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection

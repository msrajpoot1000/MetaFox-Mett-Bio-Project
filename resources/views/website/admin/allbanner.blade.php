@extends('layouts.admin.master')

@section('title', 'dashboard')

@section('content') 

 <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">All Banner</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('allbanners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="aboutimage" class="form-label">About Us Banner</label>
                                    <input type="file" class="form-control" value="" name="aboutimage">
                                 </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="mb-3">
                                    <label for="productimage" class="form-label">Product Banner</label>
                                    <input type="file" class="form-control" value="" name="productimage">
                                 </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="mb-3">
                                    <label for="certificateimage" class="form-label">Certificate Banner</label>
                                    <input type="file" class="form-control" value="" name="certificateimage">
                                 </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="mb-3">
                                   <label for="contactusimage" class="form-label">Contact Us Banner</label>
                                    <input type="file" class="form-control" value="" name="contactusimage"
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
                <div class="card-header">
                    <h4 class="card-title">All Banner Data</h4> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>All Section Banner</th>
                                    <th>Section Banner Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                  @foreach($banners as $key => $banner)
                                    @foreach([
                                        'aboutimage' => 'About Us Banner',
                                        'productimage' => 'Product Banner',
                                        'certificateimage' => 'Certificate Banner',
                                        'contactusimage' => 'Contact Us Banner'
                                    ] as $field => $label)
                                        @if($banner->$field)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                        
                                                <td>
                                                    <img src="{{ asset($banner->$field) }}" width="60" height="60" class="rounded-circle" alt="{{ $label }}">
                                                </td>
                        
                                                <td>{{ $label }}</td>
                        
                                                <td class="d-flex flex-column row-gap-2">
                        
                                                    <form action="{{ route('allbanners.destroy', ['id' => $banner->id, 'field' => $field]) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm px-4" onclick="return confirm('Are you sure you want to delete this banner set?')">Delete</button>
                                                    </form>
                                                </td>       
                                            </tr>
                                        @endif
                                    @endforeach             
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
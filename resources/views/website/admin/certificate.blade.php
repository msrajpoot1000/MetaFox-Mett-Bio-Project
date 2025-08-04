@extends('layouts.admin.master')

@section('title', 'dashboard')

@section('content') 

 <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add Certificate</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="certificateimage" class="form-label">Certificates</label>
                
                        <input type="file"
                               class="form-control"
                               id="certificateimage"
                               name="certificateimage"
                               multiple>
                    </div>
                    
                        
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="" value="" name="name">
                    </div>
              
                
                    <button type="submit" class="btn btn-primary">Submit</button>
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
                                <th>All Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                    
                                   <td>
                                            <img src="{{ asset($certificate->certificateimage) }}"
                                                 width="60" height="60"
                                                 class="rounded-circle"
                                                 alt="Certificate">
                                        
                                    </td>
                                    
                                     <td>{{ $certificate->name }}</td>
                    
                                    <td>
                                        <form action="{{ route('certificate.destroy', $certificate->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this certificate?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-4">Delete</button>
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
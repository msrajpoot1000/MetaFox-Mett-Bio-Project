@extends('layouts.admin.master')

@section('title', 'Add blogs')

@section('content') 

<div class="row mt-5">
    <div class="col">
        <h4 class="mb-4 fw-bold">About Section</h4>

        @if($about)
            <div class="card shadow rounded-3 border-0">
                <div class="card-body d-md-flex align-items-start justify-content-between gap-4 flex-wrap">

                    <!-- Images -->
                    <div class="d-flex align-items-center gap-2 mb-3 mb-md-0">
                        @if(!empty($about->image1))
                            <img src="{{ asset($about->image1) }}" alt="Image 1" class="rounded border shadow-sm" width="80" height="80">
                        @endif
                        @if(!empty($about->image2))
                            <img src="{{ asset($about->image2) }}" alt="Image 2" class="rounded border shadow-sm" width="80" height="80">
                        @endif
                        @if(!empty($about->image3))
                            <img src="{{ asset($about->image3) }}" alt="Image 3" class="rounded border shadow-sm" width="80" height="80">
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="flex-fill">
                        <h5 class="mb-2 text-dark fw-semibold">{{ $about->heading }}</h5>
                        
                        <p class="mb-1 text-muted" title="{{ strip_tags($about->description) }}">
                            <strong>Short:</strong> {{ strip_tags($about->description) }}
                        </p>

                        <p class="mb-1 text-muted" title="{{ strip_tags($about->long_description) }}">
                            <strong>Long:</strong> {{ strip_tags($about->long_description) }}
                        </p>

                        <p class="mb-1 text-muted" title="{{ strip_tags($about->our_mission_description) }}">
                            <strong>Our Mission:</strong> {{ strip_tags($about->our_mission_description) }}
                        </p>

                        <p class="mb-0 text-muted" title="{{ strip_tags($about->our_vision_description) }}">
                            <strong>Our Vision:</strong> {{ strip_tags($about->our_vision_description) }}
                        </p>
                    </div>

                    <!-- Actions -->
                    <div class="text-end">
                        <a href="{{ route('add.about') }}" class="btn btn-outline-primary btn-sm mb-2">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('about.destroy') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-trash me-1"></i> Delete
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        @else
            <div class="alert alert-info d-flex justify-content-between align-items-center">
                <div>No About section added yet.</div>
                <a href="{{ route('add.about') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add About Section
                </a>
            </div>
        @endif
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

    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

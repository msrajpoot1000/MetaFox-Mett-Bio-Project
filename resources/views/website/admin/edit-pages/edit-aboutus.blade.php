@extends('layouts.admin.master')

@section('title', 'Edit About')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Edit About Section</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
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

                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading"
                            value="{{ old('heading', $about->heading ?? '') }}" required>
                    </div>

                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="image1" class="form-label">About Image</label>
                            <input type="file" class="form-control" name="image1">
                            @if(!empty($about->image1))
                                <img src="{{ asset($about->image1) }}" width="70" height="70" class="mt-2" alt="Image 1">
                            @endif
                        </div>

                        <div class="col-4 mb-3">
                            <label for="image2" class="form-label">Our mission</label>
                            <input type="file" class="form-control" name="image2">
                            @if(!empty($about->image2))
                                <img src="{{ asset($about->image2) }}" width="70" height="70" class="mt-2" alt="Image 2">
                            @endif
                        </div>

                        <div class="col-4 mb-3">
                            <label for="image3" class="form-label">Our Vision</label>
                            <input type="file" class="form-control" name="image3">
                            @if(!empty($about->image3))
                                <img src="{{ asset($about->image3) }}" width="70" height="70" class="mt-2" alt="Image 3">
                            @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="our_mission_description" class="form-label">Our mission</label>
                             <textarea name="our_mission_description" id="our_mission_description">{{ old('our_mission_description', $about->our_mission_description ?? '') }}</textarea>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="our_vision_description" class="form-label">Our Vision</label>
                            <textarea name="our_vision_description" id="our_vision_description">{{ old('our_vision_description', $about->our_vision_description ?? '') }}</textarea>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Short Description</label>
                        <textarea name="description" id="editor1">{{ old('description', $about->description ?? '') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea name="long_description" id="editor2">{{ old('long_description', $about->long_description ?? '') }}</textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
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
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>
@endsection

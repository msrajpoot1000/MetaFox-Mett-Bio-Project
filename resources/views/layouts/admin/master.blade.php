@php
    $companyinfos = DB::table('companyinfos')->first();
@endphp

<!doctype html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="PK Managing Solutions" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favi.png') }}">
     
    
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
     
     <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- include head css -->
    @include('layouts.admin.head-css')


</head>


<body>
    <div id="layout-wrapper">
        
        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')
        
        <!-- Start right Content here -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('layouts.admin.footer')

        </div>
        <!-- end main content-->
    </div>

<!-- vendor-scripts -->
@include('layouts.admin.vendor-scripts')

</body>

</html>
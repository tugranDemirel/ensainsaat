<!DOCTYPE html>
<html lang="tr_TR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Favicon -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/admin/plugins/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="{{ asset('assets/admin/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Metis Menu Css -->
    <link href="{{ asset('assets/admin/plugins/metisMenu/dist/metisMenu.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />

    @yield('styles')

</head>
<body>
<div class="all-content-wrapper">
    <!-- Top Bar -->

    @include('admin.layouts.header')
    <!-- #END# Top Bar -->
    @include('admin.layouts.sidebar')
    <!-- Right Sidebar -->
    <!-- #END# Right Sidebar -->
    <section class="content dashboard">
        <div class="page-heading">
            <h1>@yield('page_title')</h1>
        </div>

        <div class="page-body">
            @if(session()->has('success'))
                @include('admin.partials.success', ['message' => session()->get('success')])
            @endif
            @if(session()->has('error'))
                @include('admin.partials.error', ['message' => session()->get('error')])
            @endif
           @yield('content')
        </div>
    </section>
    <!-- Footer -->
    @include('admin.layouts.footer')
    <!-- #END# Footer -->
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('assets/admin/plugins/jquery/dist/jquery.min.js') }}"></script>

<!-- JQuery UI Js -->
<script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('assets/admin/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Js -->
<script src="{{ asset('assets/admin/plugins/metisMenu/dist/metisMenu.js') }}"></script>

<!-- Jquery Slimscroll Js -->
<script src="{{ asset('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/admin/js/admin.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/dashboard/dashboard_v2.js') }}"></script>
@yield('scripts')
<script src="{{ asset('js/sweetalert.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{--<meta http-equiv="refresh" content="3" >--}}
        <link rel="icon" href="{{url('/')}}/image/favicon.jfif">
        <title>Jiva Sport | @yield('title')</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{module_path()}}/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{module_path()}}/font-awesome/css/font-awesome.min.css">
        <!-- End CSS -->

        <!-- jQuery 3 -->
        <script src="{{module_path()}}/jquery/dist/jquery.js"></script>

        <!-- Bootstrap 3.3.7 -->
        <script src="{{module_path()}}/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- End JS -->

        <!-- APP Csss - JS -->
        <link rel="stylesheet" href="{{asset('assets/webs/app.css')}}" />
        <script src="{{asset('assets/webs/app.js')}}"/>
        <!-- End App -->

        <!-- Toastr Notify-->
        <link href="{{module_path()}}/toastr/build/toastr.css" rel="stylesheet"/>
        <script src="{{module_path()}}/toastr/toastr.js"></script>
        <!-- End Toastr -->


    </header>
    <style>
        body{
            min-width: 1200px;
        }
    </style>
    <body>
        <!-- Header -->
        <div class="header">
            @include('webs.layouts.header')
        </div>
        <!-- End Header -->
        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>

    <!-- Footer -->
    <footer>
        @include('webs.layouts.footer')
    </footer>
    <!-- End Footer -->
</html>
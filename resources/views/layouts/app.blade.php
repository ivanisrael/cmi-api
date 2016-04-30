<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body class="homepage">

        @include('layouts.partials.top-nav')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </div><!-- /.content-wrapper -->
    
        @include('layouts.partials.footer')
   
@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.sb-admin2-rtl-master.partials.head')
</head>

<body>
    <div id="wrapper">
        @include('layouts.sb-admin2-rtl-master.partials.navbar')
        @yield('navbar')
        <div id="page-wrapper">
        @yield('content')
        </div>

</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    @include('layouts.sb-admin2-rtl-master.partials.footer-script')

</body>

</html>


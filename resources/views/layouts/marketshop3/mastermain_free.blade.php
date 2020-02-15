<!DOCTYPE html>
<html dir="rtl">
 <head>
   @include('layouts.marketshop3.partials.head')
 </head>
 <body>
<div class="wrapper-wide">
@include('layouts.marketshop3.partials.header')
@yield('content')

  <!-- Feature Box Start-->
  @yield('featurebox')
  <!-- Feature Box End-->
    @include('layouts.marketshop3.partials.footer')
    @include('layouts.marketshop3.partials.footer-scripts')
</div>
 </body>
</html>

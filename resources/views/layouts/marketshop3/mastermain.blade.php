<!DOCTYPE html>
<html dir="rtl">
 <head>
   @include('layouts.marketshop3.partials.head')
 </head>
 <body>
<div class="wrapper-wide">
@include('layouts.marketshop3.partials.header')
<div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-xs-12">
          <div class="row">
            <div class="col-sm-8">
              <!-- Slideshow Start-->
              @yield('sliderR')
              <!-- Slideshow End-->
            </div>
            <div class="col-sm-4 pull-right flip">
                @yield('sliderL')
            </div>
          </div>
          <!-- پرفروش ها محصولات Start-->
          @yield('porforosh')
          <!-- Featured محصولات End-->
          <!-- Banner Start-->
          @yield('banner')
          <!-- Banner End-->
          <!-- دسته ها محصولات Slider Start-->
          @yield('dastehaSlider')
         <!-- دسته ها محصولات Slider End-->
          <!-- دسته ها محصولات Slider Start -->
          @yield('dastehaSlider2')
          <!-- دسته ها محصولات Slider End -->
          <!-- Banner Start -->
          @yield('banner2')
          <!-- Banner End -->
          <!-- برند Logo Carousel Start-->
          @yield('carousellogobrand')
          <!-- برند Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>
  <!-- Feature Box Start-->
  @yield('featurebox')
  <!-- Feature Box End-->
@include('layouts.marketshop3.partials.footer')
@include('layouts.marketshop3.partials.footer-scripts')
</div>
 </body>
</html>

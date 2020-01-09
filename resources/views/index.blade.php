@extends('layout')
@section('title')
  سازه نـگاران ایـمن فارس
@endsection
@section('content')

<nav>
   <ul>
       <li >خدمات
         <ul class="submenu">
           <li>پروژه های عمرانی</li>
           <li>رزومه عمرانی</li>
         </ul>
       </li>


      <li> محصولات
        <ul class="submenu">
          <li> اخبار</li>
          <li>تماس با ما</li>
        </ul>
      </li>

      <li > درباره ما
        <ul class="submenu">
          <li><a href="/about">معرفی</a></li>

          <li><a href="/personel">اعضاء</a></li>
        </ul>
      </li>
      <li>اخبار </li>
      <li>ارتباط با ما </li>
      <li><a  class="a" href="/estekhdam">استخدام</a></li>

   </ul>
</nav>

<div class="image">

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner image2">
    <div class="carousel-item active">
      <img src="image\1.jpg" width="980" height="360" alt="">
    </div>
    <div class="carousel-item">
      <img src="image\2.jpg" width="980" height="360" alt="">
    </div>
    <div class="carousel-item">
      <img src="image\3.jpg"width="980" height="360" alt="">
    </div>
    <div class="carousel-item">
      <img src="image\4.jpg"width="980" height="360" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

   </div>
</div>



@endsection
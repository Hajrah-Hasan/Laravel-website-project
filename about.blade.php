
@extends('hi')
@section('content')
<div class="row bg " style=" background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col bg text-dark text-center ">

  <div style="opacity: 0.5; background-color: rgb(20, 33, 33); background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col  text-center ">
   <p  class="fs-sm-1  " style=" color:white; font-size:12.5vh;  padding-top: 15%; padding-bottom:11%; 
 font-family: Georgia, serif;
 
" > About Us</p> 

  </div>
</div>  
<div class="row text-center fs-4 py-5 px-2" style="background-color:beige">
    <div class="col-md-4" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
      <i class="fa-solid fa-pizza-slice py-4 fs-1 "style="color: #e86a38"></i><br>
      <b class="fs-3 " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">QUALITY FOODS</b>
       <br>Where culinary mastery meets impeccable taste, delivering an unforgettable dining experience that tantalizes the senses and delights the palate.
    </div>
    <div class="col-md-4 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
      <i class="fa-solid fa-medal py-4 fs-1"style="color: #e86a38"></i><br>
      <b class="fs-3" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" >ORIGINAL RECIPES </b><br>
      Experience the fusion of tradition and innovation in our Original Recipe dishes, curated to delight and surprise your palate with every bite.
    </div>
    <div class="col-md-4"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
      <i class="fa-solid fa-truck-fast py-4 fs-1 " style="color: #e86a38"></i>    <br>
      <b class="fs-3" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" >FAST DELIVERY </b><br>
      Experience swift satisfaction with our rapid delivery, bringing the taste of PH directly to your doorstep with unbeatable speed and freshness.

    </div>
  </div>

  <br>
<div class="row " style="background-image: url(images/); " >
    <div class="col-md-6 px-5 m-auto"><img style="height: " class="img-fluid" src="{{URL('images/stpic2_cleanup (1).jpg')}}" alt=""></div>
    <div class="col-md-6 fs-5 m-auto ps-5 px-3">
     <b> <p class="fs-1 "style="font-family: Georgia, serif;  color: rgb(139, 35, 35)" ><br> Opening Hours</p></b>
      <p class="fs-5"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Welcome to our restaurant, where culinary artistry meets exceptional dining experiences. At, we strive to create a gastronomic haven that.</p>
  <br> 
  SUNDAY - THURSDAY: 11:30AM - 11PM
  <br><hr>
  FRIDAY & SATURDAY: 11:30AM - 12AM
  
  
      </div>
    </div>
<br>
<div class="row px-5"style="">
  <div class="col-12 text-center fs-1 "style="font-family: Georgia, serif;" >
    SPECIALITIES</div>
  
   <div class="col-md-4 mt-sm-3 mt-3 " style="position: relative"><img  style="opacity: 0.7" class="img-fluid" src="{{URL('images/piza3.jpg')}}" alt=""><p class="fs-2 fw-bold" style="position: absolute; opacity:2.5; top:40%; left:40%; color:white;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    ">PIZZA</p> </div>

  <div class="col-md-4 mt-sm-3 mt-4 " style="position: relative"><img  style="opacity: 0.7" class="img-fluid" src="{{URL('images/burger.jpeg')}}" alt=""><p class="fs-2 fw-bold" style="position: absolute; opacity:2.5; top:40%; left:35%; color:white;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    ">BURGERS</p> </div> 

<div class="col-md-4 mt-sm-3 mt-4" style="position: relative"><img  style="opacity: 0.7" class="img-fluid" src="{{URL('images/piza2.jpg')}}" alt=""><p class="fs-2 fw-bold" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; position: absolute; opacity:2.5; top:40%; left:30%; color:white;   
  ">SPECIAL PIZZA</p> </div>
 
  
  {{-- <div class="col-md-4"><img class="img-fluid" src="{{URL('images/burger.jpeg')}}" alt=""></div>

  <div class="col-md-4"><img class="img-fluid h-30" src="{{URL('images/piza3.jpg')}}" alt=""></div> --}}

 
</div> <br>
        
@endsection

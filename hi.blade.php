
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/9884a11afa.js" crossorigin="anonymous"></script>
    <title>PizzaHouse</title>
    <style>
        .bg{
      background-image:url(images/slice.png) ;


  }


    .to-top{
      background: white;
      bottom: 16px;
      position: fixed;
      right:32px;
      width:50px ;
      height:50px ;
      color:#e86a38 ;
      font-size:50px ;
      justify-content: center;
      align-items: center;
      display: flex;
      border-radius:50% ;
text-decoration: none;
opacity: 0;
pointer-events: none;
transition: all .4s;    
}
.to-top.active{
bottom: 32px;
pointer-events: auto;
opacity: 1
;
}
html{
  scroll-behavior:smooth;
}

    </style>
</head>
<body>
    
<div class="container-fluid">
  @yield('content')

  {{-- <div class="row bg " style=" background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col bg text-dark text-center ">

      <div style="opacity: 0.5; background-color: rgb(20, 33, 33); background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col  text-center ">
       <p  class="fs-sm-1  " style=" color:white; font-size:12.5vh;  padding-top: 15%; padding-bottom:11%; 
     font-family: Georgia, serif;
     
    " > About Us</p> 
    
      </div>
  </div>   --}}
    {{-- <div class="row " style="background-image:url(images/slice.png) ;
       background-size:cover;  background-attachment: fixed;o background-repeat: no-repeat;">
        <div class="col  px-0 
        ">
<p class="text-center text-light  fs-1" style="opacity: 0.5; background-color: rgb(20, 33, 33);padding-top:15%;padding-bottom:15%; ;">About Us</p>
        </div> 
     </div> --}}

    <nav style="width:95% ;         font-family: Georgia, serif;
    " class="navbar  position-absolute top-0 navbar-expand-lg ">
        <div class="container-fluid">
          {{-- <a href="">          <img style="" src="images/slphlogo.jpg" alt="">
          </a> --}}
          <a class="navbar-brand text-light ps-md-3 fs-5" style="font-family: Georgia, serif;" href="#"> PIZZ<i class="fa-solid fa-pizza-slice"></i>A<br>  
            HOUSE </a>
                   {{-- <a class="navbar-brand text-light " href="#">Navbar</a> --}}
           
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
                       <ul class="navbar-nav  m-auto mb-2  mb-lg-0">
 <li class="nav-item ">
                <a style="font-family: Georgia, serif;"  class="nav-link text-light  active px-4" aria-current="page" href="/hello">HOME</a>
              </li>
              <li class="nav-item">
                <a style="font-family: Georgia, serif;"  class="nav-link text-light  active px-4" aria-current="page" href="/about">ABOUT</a>
              </li>  <li class="nav-item">
                <a style="font-family: Georgia, serif;"  class="nav-link text-light  active px-4" aria-current="page" href="/menu">MENU</a>
                
              </li>  <li class="nav-item">
                <a style="font-family: Georgia, serif;" class="nav-link text-light  active px-4" aria-current="page" href="/shop">SHOP</a>
              </li>  <li class="nav-item">
                <a style="font-family: Georgia, serif;"   class="nav-link text-light  active px-3" aria-current="page" href="/contact">CONTACT</a>
              </li>
            </ul>
          
                     
            <i style="word-spacing: 4ch; color: rgb(25, 114, 25) " class="fa-solid fa-phone-volume fs-2 "></i><b style="color: white; font-family: Georgia, serif;">
              <p style="word-spacing: -.4ch; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:white; " class="fs-5">            +(92)
                300-0000000
           </p></b>
          </div>
        </div>
      </nav>


{{-- <div class="row  row-cols-sm-3 ">
  <div class="col-sm-3    row1 p-0 "
  style="background-image: url(images/stpeople.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div>
  <div class="col-sm-3 mx-0 overflow-hidden  row1 p-0 "
  style="background-image: url(images/stpic2.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div>
  <div class="col-sm-3  overflow-hidden  row1 p-0 "
  style="background-image: url(images/stpic.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div>
  <div class="col-sm-3    row1 p-0 "
  style="background-image: url(images/stpizzap.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div> --}}


    {{-- <div class="col-sm-3   row1 p-0 "><img style="height: " class="img-fluid" src="{{URL('images/stpeople.jpg')}}" alt=""></div>
  <div class="col-sm-3 row1 p-0"><img style="height: "  class="img-fluid" src="{{URL('images/stpic2.jpg')}}" alt=""></div>
  <div class="col-sm-3   row1 p-0 "><img style="height: "  class="img-fluid" src="{{URL('images/stpic.jpg')}}" alt=""></div> --}}
  {{-- <div class="col   row1 px-0"><img style="height: "  class="img-fluid" src="{{URL('images/stpizzap.jpg')}}" alt=""></div> --}}
{{-- </div> --}}


<div class="row text-light" style=" padding-top: 9%;background-color:rgb(14, 14, 14) ">
  
  <div class="col-md-4 ">
    <p  class="text-light ps-4 fs-5 " style="color:darkred; font-family: Georgia, serif;">PIZZ<i class="fa-solid fa-pizza-slice" style="color:darkred;"></i>A<br>  
      HOUSE </p>
   <span style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  class="lh-lg ps-4"> 123 STREET SAMANABAD,FAISALABAD</span><br>
<span class="lh-lg ps-4 "><a style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href=""><i  class="fa-brands fa-facebook"></i> @pizzahouse</a> 
  </span> <br>
  <span class="lh-lg ps-4 "><a style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href=""><i  class="fa-brands fa-instagram"></i>
    @pizzahouse</a> </span> <br>
   <span class="lh-lg ps-4" >+(92) 300-0000000</span>
  </span></div> <br> <br>

  <div class="col-md-2"> <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-5 pt-sm-0 pt-3 ps-md-0 ps-4 ">PRODUCTS</p>
    <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"  class="lh-lg ps-md-0  ps-4"><a class="" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/homepage">PIZZAS</a> <br>
   <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="/about">FASTFOOD PRODUCTS</a>  <br>
   <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/menu">CRISPY FLAVORS</a>

    <br>
    <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/registration">KING DELIGHT PRODUCTS</a>
    

    
</span></div>

 
    <div class="col-md-2"> <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" fs-5 ps-md-0 ps-4 "></p>

      <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"  class="lh-lg ps-md-0  ps-4"><a class="" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/homepage">KIDS MENUS</a> <br>
        <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="/about">DESSERTS</a>  <br>
        <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/menu">BEVERAGES</a>
 
         <br>
         <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/registration">SAUCES</a>     
  </span>

          </div>
      <div class="col-md-2"> <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-5 ps-md-0 ps-4 ">QUICK LINKS</p>
        <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"  class="lh-lg ps-md-0  ps-4"><a class="" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/hello">HOME</a> <br>
       <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="/about">ABOUT</a>  <br>
       <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/menu">MENU</a>

        <br>
        <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/registration">CONTACT US</a>
        <br><a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/shop">SHOP</a>

        
 </span></div>
        <div class="col-md-2"> <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-5 ps-lg-0 ps-4 ">OPENING HOURS</p>
          <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="lh-lg ps-lg-0 ps-4">
            SUNDAY - THURSDAY: 11:30AM - 11PM
<br><hr> <span class="ps-4 ps-lg-0">
FRIDAY & SATURDAY: 11:30AM - 12AM</span>
            </span></div>
   
<div class="col-sm-12 text-center pb-3" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding-top: 10%">
  <hr>
  Copyright © 2024 PH. All rights reserved
</div>



<a href="#" class="to-top">
    <i class="fa-solid fa-circle-chevron-up"></i>
  </a>
</div>

<script>
  const toTop = document.querySelector(".to-top");
   window.addEventListener("scroll",()=>{
     if(window.pageYOffset>100){
 toTop.classList.add("active");
     }
     else{
       toTop.classList.remove("active");
 
     }
   })
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

{{-- <p class="btn">${postData.button}</p> --}}

{{-- <h1>My new controller</h1> --}}
{{-- <h1>{{$id}}</h1> --}}
{{-- <a href="{{route('blog')}}">Blog</a> --}}

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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script src="https://kit.fontawesome.com/9884a11afa.js" crossorigin="anonymous"></script>
    <title>PizzaHouse</title>
    <style>
      *{
        font-family: Georgia, serif;

        margin: 0;
        padding: 0;
         box-sizing: border-box;
         font-family: sans-serif;
      }
      h1{
        font-size: 120%
      }
      /* .carousel-caption{
      bottom: 20%;
      font-size: 300%;
      right: 60%; 
      } */
      /* .row1:hover{
        /* transform: scale(1);      } */ 
    .bg{
      background-image:url(images/carosal2.jpeg) ;
      opacity: 0.7;

  }
.row1:hover{
  opacity: 0.7;
  transform: scale(1.01);
}

    .ii:hover{
      color: aliceblue
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

{{--   
  @if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div style="color: red;">{{ session('error') }}</div>
@endif
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}








<div style="         font-family: Georgia, serif;
background-color:;
"  class="container-fluid px-0 overflow-hidden">
<div class="row ">
  <div style=" background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col bg text-dark text-center">
     <p  class="  " style=" color:black; font-size:8.5vh;  padding-top: 20%; 
   font-family: Georgia, serif;
   
  " > WE ARE OPEN TO TAKING OUT ORDERS</p> 
  <b> Explore our menu options and place a curbside pick-up order. Enjoy fresh food from the comfort of your own home. Stay healthy and safe, friends!</b>

   <br><a href="tel:03157129156"><button type="button" style="color:black;" class="btn btn-outline-dark border-2  mt-5 mb-5  fw-bold ">MAKE AN ORDER NOW!</button></a> <p  class=" invisible
  "> </p></div>
</div>  

{{-- <div class="row h-100vh">
        <div class="col-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class= " carousel-item active">
                    <img src="{{URL('images/carosal2.jpeg')}}" class="d-block image-fluid  w-100" alt="...">
                    <div class="carousel-caption  ">
                      <h1 class="animated bounceInRight text-sm-8" style="animation-delay: 1s">First slide label</h1>
                      <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 1s ">Some representative placeholder content for the first slide.</p>
                    </div> 
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL('images/pizzapicce.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                      <h1>First slide label</h1>
                      <p class="animated bounceInLeft d-none d-md-block">Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL('images/pexels-valeria-boltneva-1639562.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption ">
                      <h1>First slide label</h1>
                      <p class="animated bounceInLeft d-none d-md-block">Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div> --}}

    <nav style="width:95% ;         font-family: Georgia, serif;
    " class="navbar  position-absolute top-0 navbar-expand-lg ">
        <div class="container-fluid">
          {{-- <a href="">          <img style="" src="images/slphlogo.jpg" alt="">
          </a> --}}
          {{-- <div>        <img src="images/Borcelle(2).png" alt=""> --}}
          {{-- </div> --}}
                   <a class="navbar-brand text-light ps-md-3 fs-5" style="font-family: Georgia, serif;" href="#"> PIZZ<i class="fa-solid fa-pizza-slice"></i>A<br>  
                    HOUSE </a>
           
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav  m-auto mb-2  mb-lg-0">
 <li class="nav-item ">
                <a style="font-family: Georgia, serif;"  class="nav-link text-dark  active px-4" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a style="font-family: Georgia, serif;"  class="nav-link text-dark  active px-4" aria-current="page" href="/about">ABOUT</a>
              </li>  <li class="nav-item">
                <a style="font-family: Georgia, serif;"  class="nav-link text-dark  active px-4" aria-current="page" href="/menu">MENU</a>
                
              </li>  <li class="nav-item">
                <a style="font-family: Georgia, serif;" class="nav-link text-dark  active px-4" aria-current="page" href="/shop">SHOP</a>
              </li>  <li class="nav-item">
                <a style="font-family: Georgia, serif;"   class="nav-link text-dark  active px-3" aria-current="page" href="/contact">CONTACT</a>
              </li>
            </ul>
          
                     
            {{-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              {{-- <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
            <i style="color: green " class="fa-solid fa-phone-volume fs-4 "></i><b style="color: white; font-family: Georgia, serif;">
               <p style="word-spacing: -.4ch; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  color:rgb(102, 98, 98); " class="fs-4">            +(92)300-0000000
            </p></b>
          </div>
        </div>
      </nav>

<div class="row text-center fs-4 py-5 px-2" style="background-color:beige">
  <div class="col-md-4" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
    <i class="fa-solid fa-pizza-slice py-4 fs-1 "style="color: #e86a38"></i><br>
    <b class="fs-3 " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">QUALITY FOODS</b>
     <br>
    Where culinary mastery meets impeccable taste, delivering an unforgettable dining experience that tantalizes the senses and delights the palate.</div>
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

<div class="row text-light" style="background-color: #e86a38;">
  <div class="col-md-8 text-center py-sm-5 pt-5 pb-4">
   <span class="fs-1 fw-bolder"> GET YOUR PIZZA DELIVERED! </span> <br>
<span class="fs-5 lh-lg fst-italic fw-bolder">Enjoy our luscious dishes wherever you want</span>
  </div>
  <div class="col-md-4 my-auto   py-md-5 pb-3 text-center  " >
    <a href="tel:03157129156"><button type="button" class="btn btn-outline-dark border-2 px-4   fw-bold text-light border-light">MAKE AN ORDER NOW!</button></a>
  </div>
</div>  <br>
<div class="row " style="background-image: url(images/); " >
  <div class="col-md-6 px-5 m-auto"><img style="height: " class="img-fluid" src="{{URL('images/stpic2_cleanup (1).jpg')}}" alt=""></div>
  <div class="col-md-6 fs-5 m-auto ps-5 px-3">
   <b> <p class="fs-1 "style="font-family: Georgia, serif;  color: rgb(139, 35, 35)" ><br> Opening Hours</p></b>
    <p class="fs-5"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Welcom to our restaurant, where culinary artistry meets exceptional dining experiences. At, we strive to create a gastronomic haven that.</p>
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

<div class="col-md-4 mt-sm-3 mt-4" style="position: relative"><img  style="opacity: 0.7" class="img-fluid" src="{{URL('images/piza2.jpg')}}" alt=""><p class="fs-2 fw-bold " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; position: absolute; opacity:2.5; top:40%; left:30%; color:white;   
  ">SPECIAL PIZZA</p> </div>
 
  
  {{-- <div class="col-md-4"><img class="img-fluid" src="{{URL('images/burger.jpeg')}}" alt=""></div>

  <div class="col-md-4"><img class="img-fluid h-30" src="{{URL('images/piza3.jpg')}}" alt=""></div> --}}

 
</div>
   <br> 
<div class="row"style="background-image: url(images/;">
  <div class="col-sm-12 text-center fs-1" >
    <b style="color: brown ;font-weight:bold;" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  class="fs-4 ">  <br> Food Menu</b>
 <br> <b style="font-family: Georgia, serif;" >Most Popolar Items </b> <br>  </div> 
  <div class="row mt-sm-3 mt-5  text-center mx-auto px-5">
    <div class="col-md-6 mt-sm-3  " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" pt-sm-2   fs-4 d-inline text-decoration-underline">Behari Kabab Pizza  </p> <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">1000Rs <br></p>
      Roasted duck breast (served pink) with gratin potato and a griottine cherry sauce
      
      </div>
    <div class="col-md-6 mt-sm-3 " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline text-decoration-underline ">Mayu Garlic Pizza </p> <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">1000Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    <div class="col-md-6 mt-sm-3 "><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 text-decoration-underline d-inline">PH Special Pizza  </p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">1000Rs</p><br>
      Chargrilled chicken with avocado, baby gem lettuce, baby spinach, shallots, French beans, walnuts, croutons and a mustard dressing
      
      </div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 text-decoration-underline d-inline">Malai Boti Pizza</p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">1000Rs</p> <br>
      Chargrilled fresh tuna steak (served medium rare) on classic Niçoise salad with French beans, cherry tomatoes, black olives, peppers, new potatoes, egg, baby gem lettuce and red onion
      
      </div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline text-decoration-underline">Achari PIzza  </p><p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">1000Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline text-decoration-underline">PH Special Platter</p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">450Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline  text-decoration-underline">Jalapeno Cheese Stick</p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">300Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline text-decoration-underline">Oven Baked Wings</p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">400Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline text-decoration-underline">Lasagna </p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">650Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    <div class="col-md-6 mt-sm-3 "style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-4 d-inline text-decoration-underline">Oven Flame Pasta </p>  <p style="color: brown ;font-weight:bold;  display:inline; padding-left:14%;">400Rs</p> <br>
      Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</div>
    
    <div class="col-sm-12 px-auto">
      <br>
     <a href="/shop"> <button type="button" class="btn btn-outline-dark border-2 px-4  fw-bold">EXPLORE FULL MENU</button></a>
    </div>
  </div>
</div><br> <hr>
<div class="row my-5 py-5">
  <div class="col-lg-6 text-center"> <span style=" color: rgba(189, 151, 77, 0.958); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-5  ">SUBSCRIBE TO OUR NEWSLETTER</span> <br> <br>
    <span style="font-family: Georgia, serif;"  class="fw-bold fs-4 px-5 "> Happiness is an extra scoop of a soup. Discover the most delicious recipes.</span>
   </div>
  <div class="col-lg-6 py-auto">
  


    @if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






<form method="post" action="{{ route('signup') }}">
    @csrf
    <div class="input-group mb-3">

        {{-- <label for="email">Email:</label> --}}
        <input type="email" id="email" name="email"  class="form-control py-3 fs-5 " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" placeholder="Your Email Address" value="{{ old('email') }}" required>

    <button type="submit" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="btn btn-outline-secondary  fs-6 bg-white py-1 ">Signup</button>
        </div>

</form>


    {{-- <form action="submit" method="POST">
      @csrf
    <div class="input-group mb-3">
      <input type="email" name="email" id="email" class="form-control py-3 fs-5 " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" placeholder="Your Email Address"  value="{{ old('email') }}" required >
      <button type="" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="btn btn-outline-secondary  fs-6 bg-white py-1 " >SIGN UP</button>
    </div>
    </form> --}}

   
   
    
    




  </div>
</div>

<div class="row  overflow-hidden ">
  {{-- <div class="col-3    row1 p-0 "
  style="background-image: url(images/stpeople.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div>
  <div class="col-3 mx-0 overflow-hidden  row1 p-0 "
  style="background-image: url(images/stpic2.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div>
  <div class="col-3  overflow-hidden  row1 p-0 "
  style="background-image: url(images/stpic.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div>
  <div class="col-3    row1 p-0 "
  style="background-image: url(images/stpizzap.jpg);background-size:cover;background-repeat:no-repeat;height:40vh;">
  </div> --}}


    {{-- <div class="col-sm-3   row1 p-0 "><img style="height: " class="img-fluid" src="{{URL('images/stpeople.jpg')}}" alt=""></div>
  <div class="col-sm-3 row1 p-0"><img style="height: "  class="img-fluid" src="{{URL('images/stpic2.jpg')}}" alt=""></div>
  <div class="col-sm-3   row1 p-0 "><img style="height: "  class="img-fluid" src="{{URL('images/stpic.jpg')}}" alt=""></div> --}}
  {{-- <div class="col   row1 px-0"><img style="height: "  class="img-fluid" src="{{URL('images/stpizzap.jpg')}}" alt=""></div> --}}
</div> 
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

  {{-- <div class="col-md-2"> <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="fs-5 ps-md-0 ps-4 ">PRODUCTS</p> 
    <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="ps-4 lh-lg ps-md-0 ps-4">

      <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">PIZZAS </span> <br>
     <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">FASTFOOD PRODUCTS </span> <br>
         <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">CRISPY FLAVORS</span> <br>
        <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">KING DELIGHT PRODUCTS</span>
    </span></div> --}}
    <div class="col-md-2"> <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" fs-5 ps-md-0 ps-4 "></p>

      <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"  class="lh-lg ps-md-0  ps-4"><a class="" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/homepage">KIDS MENUS</a> <br>
        <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="/about">DESSERTS</a>  <br>
        <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/menu">BEVERAGES</a>
 
         <br>
         <a class="ps-4 ps-md-0" style=" text-decoration:none; color:white;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="/registration">SAUCES</a>     
  </span>

      {{-- <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4"> <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">KIDS MENUS </span><br>
       <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">DESSERTS</span><br>
       <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">BEVERAGES</span><br>
        <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class=" lh-lg ps-md-0 ps-4">SAUCES</span></span> --}}
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-DIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


{{-- 

@if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






<form method="post" action="{{ route('signup') }}">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <button type="submit">Signup</button>
</form> --}}

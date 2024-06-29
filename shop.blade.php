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

        <div class="row bg " style=" background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col bg text-dark text-center ">

            <div style="opacity: 0.5; background-color: rgb(20, 33, 33); background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col  text-center ">
             <p  class="fs-sm-1  " style=" color:white; font-size:12.5vh;  padding-top: 15%; padding-bottom:11%; 
           font-family: Georgia, serif;
           
          " > Shop</p> 
          
            </div>
          </div>  

       
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
                    <p style="word-spacing: -.4ch; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:white; " class="fs-5">            +(92) 300-0000000
                 </p></b>    
               
              </div>
            </div>
          </nav>
          <div class="row"style="background-image: url(images/;">
            <div class="col-sm-12 text-center fs-1" >
              {{-- <b style="color: brown ;font-weight:bold;" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  class="fs-4">  Food Menu</b> --}}
           <br> <b style="font-family: Georgia, serif; color:brown;" >Shop Now </b><br> <br>  </div> 
          <div class="container-fluid me-0">
            <div class="row one ">
                {{-- <div class="col-md-3"></div> --}}
                {{-- <div class="card">
                    <div class="card-heading">
                    This is  heading.
                    </div>
                        <div class="card-body"> 
                            This is body.     
                              </div> --}}
                {{-- </div> --}}
                
             
                  </div>
                  <div class="row"><div class="col-12  mt-4 mb-5 text-center">
                  <a href="tel:03157129156"><button type="button" class="btn btn-outline-dark border-2 px-5 py-2 fs-5  fw-bold">MAKE AN ORDER NOW!</button></a>
                  </div></div>
            </div>
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
        
          
          
          <a href="#" class="to-top">
              <i class="fa-solid fa-circle-chevron-up"></i>
            </a>
          </div>
          
          
          
      
{{-- <style>
    *{
        text-transform: capitalize;
        letter-spacing: .1px;
        box-sizing: border-box;
        margin: 0;padding: 0;
    }
    .row{ 
/* width: 100%; */
/* top:50vh; */
/* display: grid; */
/* grid-template-columns: repeat(2,1fr); */
/* gap: 2rem; */
    }
    .card{
/* padding: 2rem; */
box-shadow: 0 0 .4rem .4rem rgba(5, 4, 4, 0.828);
transition: .4s,ease-in;
    }
    .card:hover{
background-color: aliceblue
    }
    .card-heading{
color: tomato;
/* margin-bottom: .5rem; */
    }
    .card-body{
color: navy;
    }
    .imgg{
    /* object-fit: contain; */
}

</style> --}}



<script>
    const cardData=[
        {
         img:'<img class="img-fluid" src="{{URL('https://wallpapercave.com/wp/wp8620219.png')}}" alt="">',
         heading:'Cheesy Cheese',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',

         button:'addtocart'
     },
     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/R.64ef8564e1f4e4e118d9b22cdb66570d?rik=zFfRvPL7fyFa0g&riu=http%3a%2f%2fwww.milanospizzainheath.com%2fwp-content%2fuploads%2f2016%2f02%2fpizza_trad_veggie.png&ehk=Mc9ekNIauW5S5hy8q7sZR1rK43n3KpAqffMGa77DeKw%3d&risl=&pid=ImgRaw&r=0')}}" alt="">',
         heading:'Veggie Lover',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://wallpaperaccess.com/full/3668071.png')}}" alt="">',
         heading:'Chicken Supreme ',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',

         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.Ewfsz32HOgNJYoUsekTMUAHaDv?w=1538&h=776&rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Chicken Tikka',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',

         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.JdeMR6WUCMVUhUlIP9aRsgHaDv?w=1538&h=776&rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'The Euro',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',

         button:'addtocart'
     },     
     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/R.cf7225ae4e5eb8b9fe4b62f919080413?rik=tDIaeHzhl9%2bECw&riu=http%3a%2f%2fpizza-holic.weebly.com%2fuploads%2f1%2f0%2f1%2f4%2f101407688%2fbuffalochicken_orig.png&ehk=Fo1dEO%2fuo0lbONlq9kEq6BTJQnRHJzu%2fF%2bVMNxN287c%3d&risl=&pid=ImgRaw&r=0')}}" alt="">',
         heading:'Chicken Fajita',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',

         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.2rrDoyUkcIVP-xLoajO4SQHaD3?w=303&h=180&c=7&r=0&o=5&pid=1.7')}}" alt="">',
         heading:'Chicken Spin Rolls',
         body: '300PKR',
         button:'addtocart'
     }, 
     {
         img:'<img class="img-fluid" src="{{URL('https://img.freepik.com/premium-photo/picture-lumpia_871710-29666.jpg')}}" alt="">',
         heading:'Bihari kabab Rolls',
         body: '350PKR',
         button:'addtocart'
     },     
     {
         img:'<img class="img-fluid" src="{{URL('https://www.pngmart.com/files/16/Spring-Rolls-Transparent-PNG.png')}}" alt="">',
         heading:'Delicious Rolls',
         body: '300PKR',
         button:'addtocart'
     },
    
     {
         img:'<img class="img-fluid" src="{{URL('https://pngimg.com/uploads/mayonnaise/small/mayonnaise_PNG48.png')}}" alt="">',
         heading:'Extra Dip Sauce',
         body: '50PKR',
         button:'addtocart'
     },          {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/R.df44d1af48b87939a93aec2b9f0b019c?rik=%2bJVopiXnH6ruQw&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fspaghetti-png-hd-spaghetti-transparent-png-640.png&ehk=P4wvwYL8FPQDrKxaw%2b3ejrjUqDP0jwt9ZrdoUoltXs8%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1')}}" alt="">',
         heading:'PH Special Pasta',
         body: '400PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://s3.amazonaws.com/zweb-s3.uploads/ez2/wp-content/uploads/2013/10/deep-dish-meat-lasagna.jpg')}}" alt="">',
         heading:'Oven Flame Pasta',
         body: '400PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.AB5hsN8cV1MahvcEgj6A9wHaEI?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Fettuccine Pasta',
         body: '400PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.U2sn6A1Qfjl_kaKLAW5LFQHaFk?w=626&h=471&rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Lasagna',
         body: '450PKR',
         button:'addtocart'
     },    {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.u88brNJfw7wrO2YyqNE55AHaEb?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'PH Special Sandwich',
         body: '350PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://www.shutterstock.com/image-photo/close-fresh-tasty-kebab-sandwich-260nw-496008382.jpg')}}" alt="">',
         heading:'Turkish Doner',
         body: '350PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/R.3f8f70c27f619ca54adc13ea986afc4f?rik=YhiTvpk9NQ98jQ&pid=ImgRaw&r=0')}}" alt="">',
         heading:'Delicious Sandwitch',
         body: '380PKR',
         button:'addtocart'
     },      {
         img:'<img class="img-fluid" src="{{URL('https://thumbs.dreamstime.com/z/beef-burger-isolated-white-background-30569226.jpg?w=360')}}" alt="">',
         heading:'Steak Burger',
         body: '250PKR',
         button:'addtocart'
     },
     {
         img:'<img class="img-fluid" src="{{URL('https://www.mediaspacesolutions.com/hs-fs/hub/131366/file-51083850-png/images/mcdonalds_quarterpounder.png#keepProtocol')}}" alt="">',
         heading:'Patty Burger',
         body: '150PKR',
         button:'addtocart'
     },   
     {
         img:'<img class="img-fluid" src="{{URL('https://ocs-pl.oktawave.com/v1/AUTH_876e5729-f8dd-45dd-908f-35d8bb716177/amrest-web-ordering/KFC/Images/Web/kanapki/zinger.png')}}" alt="">',
         heading:'Zinger Burger',
         body: '200PKR',
         button:'addtocart'
     },      {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.uHWEeEgyjDpf_ysvy40RKwAAAA?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Grilled Chicken Sandwich',
         body: '380PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/R.b294f367d7887c55ca5769b972be4a89?rik=BUIxxe%2baY27FOw&riu=http%3a%2f%2f4.bp.blogspot.com%2f-z5CeUJCuJPM%2fUbdRVCXTtEI%2fAAAAAAAAAEg%2fLeqdUjLCX1I%2fs1600%2fsandwich.jpg&ehk=bKikh0p74L4szVjK4cQ3j%2bamiPF5MusdBelLd6pISck%3d&risl=&pid=ImgRaw&r=0')}}" alt="">',
         heading:'Chicken Supreme Sandwich',
         body: '380PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.WNmRSIsfBHYY0GVrwjIQ1gAAAA?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'PH Dream (Brownie with Ice Cream)',
         body: '300PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://freepngimg.com/thumb/grocery/54206-9-ice-cream-balls-download-hd-png-thumb.png')}}" alt="">',
         heading:'Ice Cream',
         body: '195-350PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://www.capecrystalbrands.com/cdn/shop/articles/gluten-free-chocolaty-fudgy-brownie-blasts-recipe-103835_360x.jpg?v=1690474555')}}" alt="">',
         heading:'Brownie',
         body: '150PKR',
         button:'addtocart'
     },     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.x1azczOgKMsDuYai2wRbCQAAAA?w=164&h=164&rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Slice Of Cake',
         body: '250PKR',
         button:'addtocart'
     },   
     {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.Rey1LaX-EVcNC5JdtWNGWQAAAA?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Black Coffee',
         body: '110PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://toppng.com/uploads/thumbnail/cup-mug-coffee-food-transparent-png-11665871268l9vp5abkmm.png')}}" alt="">',
         heading:'Tea',
         body: '90PKR',
         button:'addtocart'
     }, 
     {
         img:'<img class="img-fluid" src="{{URL('https://rootandspring.com/cdn/shop/collections/Teas.png?v=1483848142&width=300')}}" alt="">',
         heading:'Green Tea',
         body: '90PKR',
         button:'addtocart'
     },  {
         img:'<img class="img-fluid" src="{{URL('https://pngimg.com/uploads/cappuccino/small/cappuccino_PNG60.png')}}" alt="">',
         heading:'Coffee',
         body: '250PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://freepngimg.com/thumb/mojito/30000-4-mojito-transparent-background-thumb.png')}}" alt="">',
         heading:'Mint Margirita',
         body: '200PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.AYE9_jBJi9C7zGVXL1-s5QAAAA?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Mineral Water',
         body: '(S)40PKR  <br>   (L)70PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/OIP.rvoYxwNnOK6r9HPAWNULxgAAAA?rs=1&pid=ImgDetMain')}}" alt="">',
         heading:'Chocolate Shake',
         body: '200PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://th.bing.com/th/id/R.2a2771c3261899a1b321d79c6e35a1fa?rik=ob9%2fQSLT8coY5A&riu=http%3a%2f%2fwww.especiallyoffice.com%2fshop%2fcontents%2fmedia%2fcoca_cola_375ml_can.jpg&ehk=y8w%2fInye0o9vH4HUagu%2bOB%2fjSIG6ARjrOLKdgO2vRlk%3d&risl=&pid=ImgRaw&r=0')}}" alt="">',
         heading:'Tin Pack',
         body: '60PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://toppng.com/uploads/thumbnail/juice-png-transparent-image-mango-shake-in-a-glass-11562906044fjdcd89bxh.png')}}" alt="">',
         heading:'Kit n Bite Shake',
         body: '250PKR',
         button:'addtocart'
     }, {
         img:'<img class="img-fluid" src="{{URL('https://cdn.shopify.com/s/files/1/1243/6750/products/LEMON_JUICE_ae803a7c-ca60-4edc-b442-ac272be04896_large.jpg?v=1567692195')}}" alt="">',
         heading:'Lemonade',
         body: '140PKR',
         button:'addtocart'
     }
  ]
  const postContainer= document.querySelector('.one');
  const postmethods = ()=>{
 cardData.map((postData)=>
 {
     const postElement=document.createElement('div');
     postElement.classList.add('col-lg-2');
     postElement.classList.add('col-md-3');
     postElement.classList.add('col-4');


     postElement.innerHTML=`
     <img class="img-fluid imgg" >${postData.img}</img> 

     <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="card-heading fs-4  d-inline">${postData.heading}</h3>
     <p style="font-family: Georgia, serif;" class="card-body text-danger fw-bold" >${postData.body}</p>
 `
 
     postContainer.appendChild(postElement)
 })
  }
  postmethods();
 
 
 
 
 
 
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









{{-- {
    img:'<img class="img-fluid" src="{{URL('')}}" alt="">',
    heading:'Cardamom Tea',
    body: '120PKR',
    button:'addtocart'
} 
 {
         img:'<img class="img-fluid" src="{{URL('https://thumbs.dreamstime.com/b/pizza-bavarian-sausages-mozzarella-cheese-onion-cucumbers-isolated-white-background-195511839.jpg')}}" alt="">',
         heading:'Malai Boti Pizza',
         body: '(S) 300PKR<br>(M) 700PKR <br> (L) 900PKR',
         button:'addtocart'
     },
{
         img:'<img class="img-fluid" src="{{URL('https://images-na.ssl-images-amazon.com/images/G/02/aplusautomation/vendorimages/89dcdb5a-7385-4f84-bf5d-5868122a1991.jpg._CB305418250__SL220__.jpg')}}" alt="">',
         heading:'Cappuccine',
         body: '150PKR',
         button:'addtocart'
     }, 

--}}
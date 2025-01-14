@extends('hi')
@section('content')
<div class="row bg " style=" background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col bg text-dark text-center ">

    <div style="opacity: 0.5; background-color: rgb(20, 33, 33); background-size:cover; color:black;  background-attachment: fixed;o background-repeat: no-repeat;" class="col  text-center ">
     <p  class="fs-sm-1  " style=" color:white; font-size:12.5vh;  padding-top: 15%; padding-bottom:11%; 
   font-family: Georgia, serif;
   
  " >Contact Us</p> 
  
    </div>
  </div>  
<div class="row">
    <div class="col text-center">
        <br>
        <h1>Contact for any query</h1>
        <i class="fa-solid fa-envelope py-4 fs-4 pe-2 text-warning "style="color: #e86a38"></i>
        info@PizzaHouse.com
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-4 ps-5" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.0292257796996!2d73.11061227469159!3d31.413320852424814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39226880398f818b%3A0x38ddc7c1b58f5376!2sJaranwala%20Rd%2C%20People&#39;s%20Colony%20No%201%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1716702394239!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
    </div>
    <div class="col-md-6 pt-3 ps-5">
      <div class="mb-3">
        <i class="fa-solid fa-location-dot py-4 fs-4 pe-2 " style="color:gray"></i>
                123 street , Jaranwala road , FSD
      </div>
      <div class="mb-3 ">
        <i class="fa-solid fa-phone  py-4 fs-4 pe-2 " style="color:grey"></i>
        +92 00000000      </div>
      <div class="mb-3">
        <i class="fa-solid fa-envelope py-4 fs-4 pe-2  "style="color:grey"></i>
        info@PizzaHouse.com
      </div>
      <div class="mb-3">
        <i class="fa-brands fa-linkedin py-4 fs-4 pe-2  "style="color:grey"></i>
        info@PizzaHouse.com
      </div>
        {{-- <form  action="/submit" method="post">
             
            <div class="mb-3">
              <input type="text"  name="name"  placeholder="Your Name" class="form-control" >
            </div>            <div class="mb-3">

            <input type="email" name="email" class="form-control" placeholder="Your Email" aria-describedby="emailHelp">
        </div>
            <div class="mb-3"> 
                <input type="text" name="subject" placeholder="Subject" class="form-control" >
               </div>
              <div class="mb-3">
                <textarea type="text" name="message" placeholder="Message" class="form-control " ></textarea>
              </div>
              <div class="d-grid gap-2">

              <button class="btn btn-warning mb-2" type="submit">SEND MESSAGE</button>
              </div>            
          </form> --}}
    </div>
</div>
@endsection

{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8794242602485!2d73.06693517469063!3d31.38988805357876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39225dd9d416c5bb%3A0x536e667dbbffe911!2sStreet%20light%20pizza%20house!5e0!3m2!1sen!2s!4v1713362207977!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Listudios (Pvt) Ltd">
        <meta property="og:site_name" content="Giralang">
        <meta property="og:image" content="{{asset('/images/giralang-share.jpg')}}" />
        
        <meta name="description" content="">
        <meta property="og:title" content="TP Dynamics will develop G+ on Block 6 Section 79 Giralang, on the Canopus Street site between Menkar Close and Atalumba Close" />
        <meta property="og:type" content="website" />


        <title>Giralang</title>
        <link rel="icon" type="image/png" href="/images/g+-favicon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="//db.onlinewebfonts.com/c/d592bb492b28515987de431a85f70054?family=Marr+Sans+Cond+Web+Bold" rel="stylesheet" type="text/css"/>
        <link href="//db.onlinewebfonts.com/c/d592bb492b28515987de431a85f70054?family=Marr+Sans+Cond+Web+Bold" rel="stylesheet" type="text/css"/>
        <link href="//db.onlinewebfonts.com/c/d592bb492b28515987de431a85f70054?family=Marr+Sans+Cond+Web+Bold" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        @yield('styles')
        
    </head>
    <body>
    <div id="preloader"></div>

    

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    
    <!--jQuery-->
    
    <!--Plugin JavaScript file-->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    
    {!! NoCaptcha::renderJs() !!}



  <script>
		var loder = document.getElementById("preloader");
		      window.addEventListener("load",function(){
          loder.style.display = 'none';
    })
	</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
    function openNav() {

   

    document.getElementById("mySidebarmob").style.width = "75%";
    // document.getElementById("main").style.marginLeft = "250px";

    
}
function openmobNav() {
    document.getElementById("mymobSidebarmob").style.width = "75%";
    // document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebarmob").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
}
function closemobNav() {
    document.getElementById("mymobSidebarmob").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
}
  </script>








<script type="text/javascript">
   const sections = document.querySelectorAll("section");
   const navLi = document.querySelectorAll("nav ul li");

   const navLi1 = document.querySelectorAll(".p-header");

  
    window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop - sectionHeight / 7) {
      current = section.getAttribute("id"); 
    }
  });

  
  


  navLi.forEach((li) => {

   

    li.classList.remove("active");

    

    if(li.classList.contains(current)) {

     

      if(current=="home"){
        
        $('#apartmet_show').hide()
        $('#retail-show').hide()
        $('#location-show').hide()
        $('#memeto-show').hide()
        $('#vision-show').hide()
        $('#questions-show').hide()
        $('#developer-show').hide()
       

     
      }

      if(current=="apartments"){

        $('#apartmet_show').show()
        $('#retail-show').hide()
        $('#location-show').hide()
        $('#memeto-show').hide()
        $('#vision-show').hide()
        $('#questions-show').hide()
        $('#developer-show').hide()

      }

     if(current=="retail"){

        $('#retail-show').show()
        $('#apartmet_show').hide()
        $('#location-show').hide()
        $('#memeto-show').hide()
        $('#vision-show').hide()
        $('#questions-show').hide()
        $('#developer-show').hide()
     }
     if(current=="location"){
      
        $('#apartmet_show').hide()
        $('#retail-show').hide()
        $('#location-show').show()
        $('#memeto-show').hide()
        $('#vision-show').hide()
        $('#questions-show').hide()
        $('#developer-show').hide()
      }
      if(current=="memeto"){
      
        $('#apartmet_show').hide()
        $('#retail-show').hide()
        $('#location-show').hide()
        $('#memeto-show').show()
        $('#vision-show').hide()
        $('#questions-show').hide()
        $('#developer-show').hide()
      }
      if(current=="vision"){
      
      
        $('#memeto-show').hide()
        $('#vision-show').show()
        $('#questions-show').hide()
       
      }
      if(current=="questions"){
      
        $('#apartmet_show').hide()
        $('#retail-show').hide()
        $('#location-show').hide()
        $('#memeto-show').hide()
        $('#vision-show').hide()
        $('#questions-show').show()
        $('#developer-show').hide()
      }
      if(current=="developer"){

       
      
        $('#apartmet_show').hide()
        $('#retail-show').hide()
        $('#location-show').hide()
        $('#memeto-show').hide()
        $('#vision-show').hide()
        $('#questions-show').hide()
        $('#developer-show').show()
      }

      
      li.classList.add("active");
    }
  });


  navLi1.forEach((p) => {
      p.classList.add("active");
   });



  
});


</script>
    


      @yield('scripts')
        
    </body>
</html>

<!DOCTYPE html>
@extends('master')
<html>
  
  <head data-gwd-animation-mode="proMode">
    <title>LAMOPS.com - beta testing</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="generator" content="Google Web Designer 1.0.6.0428">
    <!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <link href="open-iconic/font/css/open-iconic.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>


  

    <style type="text/css">
      html, body {
        overflow: hidden;
        width: 100%;
        height: 100%;
        margin: 0px;
        display:flex;
      flex-direction:column;
      font-family: 'Lato', sans-serif;
      }
      body > * {
      flex-shrink: 0;
    }
      body {
        -webkit-transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
        -webkit-transform-style: preserve-3d;
        background-image: none;
        background-color: rgb(224, 224, 224);
      }

      .item {
      	width:200px;
      	display:inline-block;
      	background-color:#E0E0E0;
      	margin: 20px 20px 20px 20px;
      	padding:5px 5px 5px 5px;
        cursor:pointer;
         border-radius: 10px;

      }

      .item-img {
      	padding-top:5px;
        border-radius: 10px;
      }

    </style>
    <style type="text/css" id="" title="Temp" media="screen"></style>

    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>


    //onload
          
   


    //resize
    $(window).resize(setDivVisibility);
      function setDivVisibility(){

           // if (($(window).width()) < '1024'){  
           //   $('#nav-media').css('display','none');  
           //   } else {  
           //   $('#nav-media').css('display','block');  
           // } 

           // if (($(window).width()) < '769'){  
           //   $('#sidebar1').css('display','none');  
           //   $('#sidebar2').css('display','none');  
           //   $('#sidebar3').css('display','none');
           //   $('#slide-img1').css('width','100%');
           //   $('#slide-img2').css('width','100%');
           //   $('#slide-img3').css('width','100%');
           //   $('#kontak-inner').css('width','100%');
           //   $('#map').css('display','none');

           // } else {  
           //   $('#sidebar1').css('display','block');  
           //   $('#sidebar2').css('display','block');  
           //   $('#sidebar3').css('display','block');  
           //   $('#slide-img1').css('width','70%'); 
           //   $('#slide-img2').css('width','70%');  
           //   $('#slide-img3').css('width','70%'); 
           //   $('#kontak-inner').css('width','50%');
           //   $('#map').css('display','block');
           // } 
            if (($(window).width()) < '600'){  
             $('#logo').css('display','none');  
             } else {  
             $('#logo').css('display','block');  
           } 

           var tinggi = $(window).height();
           tinggi = tinggi*(70/100);
           $('#daftar-produk').css('height',tinggi);  


           if (($(window).width()) < '600'){  
             $('#logo').css('display','none');  
             } else {  
             $('#logo').css('display','block');  
           } 

           

           // if (($(window).width()) < '600'){  
           //   $('#logo').css('display','none');  
           //   } else {  
           //   $('#logo').css('display','block');  
           // } 


            if (($(window).width()) < ($(window).height()) ){  
             $('#bottom-bar1').css('display','block');
             $('#bottom-button-group1').css('display','block');
             $('#bottom-bar2').css('display','block');
             $('#bottom-button-group2').css('display','block');
             $('#bottom-bar3').css('display','block');
             $('#bottom-button-group3').css('display','block');
             $('#sidebar1').css('display','none');
             $('#sidebar2').css('display','none');  
             $('#sidebar3').css('display','none');
             $('#slide-img1').css('width','100%');
             $('#slide-img2').css('width','100%');
             $('#slide-img3').css('width','100%');
             $('#kontak').css('width','100%');
             $('#kontak-inner').css('width','100%');
             $('#map').css('display','none');
             $('#nav-media').css('display','none'); 
             $('#map').css('display','none');  

           } else {  
             $('#bottom-bar1').css('display','none');
             $('#bottom-button-group1').css('display','none');
             $('#bottom-bar2').css('display','none');
             $('#bottom-button-group2').css('display','none');
             $('#bottom-bar3').css('display','none');
             $('#bottom-button-group3').css('display','none');
             $('#sidebar1').css('display','block');  
             $('#sidebar2').css('display','block');  
             $('#sidebar3').css('display','block');  
             $('#slide-img1').css('width','70%'); 
             $('#slide-img2').css('width','70%');  
             $('#slide-img3').css('width','70%'); 
             $('#kontak-inner').css('width','50%');
             $('#map').css('display','block');
             $('#nav-media').css('display','block');
             $('#map').css('display','inline-block');  
           } 


         }



$(document).ready(function(){


         
            if (($(window).width()) < ($(window).height()) ){  
             $('#bottom-bar1').css('display','block');
             $('#bottom-button-group1').css('display','block');
             $('#bottom-bar2').css('display','block');
             $('#bottom-button-group2').css('display','block');
             $('#bottom-bar3').css('display','block');
             $('#bottom-button-group3').css('display','block');
             $('#sidebar1').css('display','none');
             $('#sidebar2').css('display','none');  
             $('#sidebar3').css('display','none');
             $('#slide-img1').css('width','100%');
             $('#slide-img2').css('width','100%');
             $('#slide-img3').css('width','100%');
             $('#kontak').css('width','100%');
             $('#kontak-inner').css('width','100%');
             $('#map').css('display','none');
             $('#nav-media').css('display','none'); 
             $('#map').css('display','none');  

           } else {  
             $('#bottom-bar1').css('display','none');
             $('#bottom-button-group1').css('display','none');
             $('#bottom-bar2').css('display','none');
             $('#bottom-button-group2').css('display','none');
             $('#bottom-bar3').css('display','none');
             $('#bottom-button-group3').css('display','none');
             $('#sidebar1').css('display','block');  
             $('#sidebar2').css('display','block');  
             $('#sidebar3').css('display','block');  
             $('#slide-img1').css('width','70%'); 
             $('#slide-img2').css('width','70%');  
             $('#slide-img3').css('width','70%'); 
             $('#kontak-inner').css('width','50%');
             $('#map').css('display','block');
             $('#nav-media').css('display','block');
             $('#map').css('display','block');  
           } 

          

          var tinggi = $(window).height();
           tinggi = tinggi*(70/100);
           $('#daftar-produk').css('height',tinggi); 
  
    $(".item").hover(
        function () {
          $(this).css('background', '#FFF');

        }, 
        function () {
          $(this).css('background', '#E0E0E0');
        }
      );

    $("#kontak").hide();
    $("#about").hide();
    // $("#news").hide();
    $("#map").hide();
    $("#hidekontak").hide();
    $("#hidenews").hide();
    $("#hideabout").hide();
    $("#nav").hide();
    $("#content").hide();
    $("#nav").slideDown(500, function() {
    $("#content").fadeIn(500);
    });


    $("#logo").click(function(){
    $("#slide1").show();
    $("#slide2").show();
    $("#slide3").show();
    $("#kontak").hide();
    $("#about").hide();
    $("#map").hide();
    $("#hidekontak").hide();
    $("#hideabout").hide();
    $("#showkontak").show();
    $("#showabout").show();
    $("#nav").hide();
    $("#content").hide();
    $("#nav").slideDown(1000, function() {
    $("#content").show(2000);
    });
    });


    // $("#slide2").hide();
    // $("#sidebar1").hide();
    // $("#slide1").hide();
    
    $("#showkontak").click(function(){
        
        $("#showabout").show();
        $("#hideabout").hide();
        
        $("#about").slideUp("slow", function() {
          $("#showkontak").hide();
          $("#hidekontak").show();
          $("#kontak").slideDown("slow", function() {
              
            if (($(window).width()) > ($(window).height()) ){  
              $("#map").fadeIn("slow");
            }
          });


        });
        

        
    });


  $("#hidekontak").click(function(){

        $("#showkontak").show();
        $("#hidekontak").hide();
        $("#kontak").slideUp("slow");
        $("#map").fadeOut("slow");
    });


     $("#showabout").click(function(){
        $("#showkontak").show();
        $("#hidekontak").hide();
        $("#map").fadeOut("slow");
        $("#kontak").slideUp("slow", function(){
          $("#showabout").hide();
        $("#hideabout").show();
        $("#about").slideDown("slow");
        });        
    });
    


    $("#hideabout").click(function(){

        $("#showabout").show();
        $("#hideabout").hide();
        $("#about").slideUp("slow");
    });


    $("#shownews").click(function(){
        $("#showkontak").show();
        $("#hidekontak").hide();
        $("#map").fadeOut("slow");
        $("#about").slideUp("slow", function(){
          $("#shownews").hide();
          $("#hidenews").show();
          $("#news").slideDown("slow");
        });
        // $("#kontak").slideUp("slow", function(){
        //   $("#shownews").hide();
        //   $("#hidenews").show();
        //   $("#news").slideDown("slow");
        // });        
    });
    


    $("#hidenews").click(function(){

        $("#shownews").show();
        $("#hidenews").hide();
        $("#news").slideUp("slow");
    });

    


    $("#showproduk").click(function(){
        $("#showkontak").show();
        $("#hidekontak").hide();
        $("#showabout").show();
        $("#hideabout").hide();
        $("#kontak").slideUp("slow");
        $("#map").fadeOut("slow");
        $("#about").slideUp("slow");
        $("#slide1").slideUp(900);
        $("#slide2").slideUp(700);
        $("#slide3").slideUp(500);
        $('#content').fadeIn();
        $('#content').css('background', '#F2F2F2');

        

    });

    function showslide1(){
        $("#slide1").slideDown(1000, function() {
            $("#button-group1").show("fast")
        });
      };
    
    function hideslide1(){
       $("#slide1").slideUp(1000);
    }

    function showslide2(){
        $("#slide2").slideDown(1000);
      };
    
    function hideslide2(){
      $("#slide2").slideUp(1000);
    }

    function showslide3(){
        $("#slide3").slideDown(1000);
      };
    
    function hideslide3(){
      $("#slide3").slideUp(1000);
      $('#content').css('background', '#F2F2F2');
    }



    $("#hideslide1").click(hideslide1);
    $("#bottom-hideslide1").click(hideslide1);
    $("#showslide1").click(showslide1);
    $("#bottom-showslide1").click(showslide1);

    $("#hideslide2").click(hideslide2);
    $("#bottom-hideslide2").click(hideslide2);
    $("#showslide2").click(showslide2);
    $("#bottom-showslide2").click(showslide2);

    $("#hideslide3").click(hideslide3);
    $("#bottom-hideslide3").click(hideslide3);
    $("#showslide3").click(showslide3);
    $("#bottom-showslide3").click(showslide3);

   

});



    </script>
  </head>
  
  <body id="body" style="height:100%">
    <div id="kontak" style="height:85%;overflow-y:hidden;background-color:#121314">
     <div id="kontak-inner" style="color:white;float:left;height:100%;width:50%;font-size:18px">
      <div style="padding:75px 75px 75px 75px;">
      
      <p stye="font-size:18">
      <strong>E-mail</strong><br>
      apadah@lamops.com
      <p/>
      <p stye="font-size:18">
      <strong>Phone</strong><br>
      +62 81916010121
      <p/>
      <p stye="font-size:18">
      <strong>Address</strong><br>
      Gunung Merapi 269 Dasan Agung<br>
      Mataram - Indonesia<br>
      83125
      <p/>


      </div>
     </div>
     <div id="map" style="background-color:white;float:left;height:100%;width:50%;">
    <iframe width='100%' height='100%' frameBorder='0' src='https://a.tiles.mapbox.com/v4/herpiko.ioj3bcp3/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiaGVycGlrbyIsImEiOiJEd3ZCTWlBIn0.aITioyaUFdxK5SK9z-_Qow'></iframe>
     </div>
    </div>

    <div id="about" style="height:85%;overflow-y:hidden;background-color:#534733;">
     <div style="color:white;float:left;width:85%;margin:75px 75px 75px 75px;font-size:24px;">
     About Us
     <p stye="font-size:18">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. 
     </p>
     <br><br>     
    </div>
    </div>

<!--     <div id="news" style="height:85%;overflow-y:hidden;background-color:#534733;">
     <div style="color:white;float:left;width:85%;margin:75px 75px 75px 75px;font-size:24px;">
     News
     <p stye="font-size:18">
      Ini halaman news
     </p>
     <br><br>     
    </div>
    </div>

 -->

<div id="nav" style="height:15%">
  <div id="logo" style="float:left;position: relative;top:45%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);padding-left:5%;padding-right:30px;font-size:35px;cursor:pointer">
LAMOPS
<div style="font-size:12px;padding-left:5px;margin-top:-5px;color:#222326">Kucing garong specialist</div>
</div>
<div style="position: relative;top:35%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
  <div>

     <div id="showabout" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      About Us
      </div>

      <div id="hideabout" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      About Us
      </div>

       <div id="showproduk" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      Product
      </div>

      <div id="showkontak" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      Contact
      </div>

      <div id="hidekontak" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      Contact
      </div>

     <!--  <div id="shownews" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      News
      </div>

      <div id="hidenews" style="float:left;cursor: pointer;text-align:center;color:#222326;font-size:24px;margin-left:5%" onclick="location.href='#'">
      News
      </div> -->

<div id="nav-media" style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">

      <div id="twitter" style="float:right !important;cursor: pointer;text-align:right;color:#222326;font-size:16px;margin-right:50px" onclick="location.href='#'">
      <img src="img/twitter.png">
      </div>

       <div id="facebook" style="float:right !important;cursor: pointer;text-align:right;color:#222326;font-size:16px;margin-right:50px" onclick="location.href='#'">
      <img src="img/fb.png">
      </div>
</div>
      


      
    
    
  </div>

</div>
</div>


 <div id="content" style="background-color:#fffff;flex-grow:1;color:white;">


        <div id="slide1" style="position:absolute;z-index:6;width:100%;background-color:#222326;height:85%">
            
            <div id="sidebar1" style="position:relative;z-index:7;width:30%;background-color:#222326;height:100%;float:right !important">    

                <div id="button-group1" style="  position:absolute;  width: 100%;    height: 20%; bottom: 0;    margin-top:-100px;    background: #121314;">
                
                <div style="float:left;height:100%;width:33%;">
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#222326"></div>
                <div id="hideslide1" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:30px;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-bottom" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#222326"></div>
                <div style="float:left;height:100%;width:33%;"></div>
                </div>

            </div>

             <div style="z-index:6;width:70%;height:100%;" id="slide-img1">
              <div style="z-index:6;width:100%;">
              <img src="img/1.jpg" style="width:100%;">
              </div>
              


                <div id="bottom-bar1" style="position:relative;  width: 100%%;    height: 25%; bottom: 0;  margin-top:-25%;     background: #222326;">
               <div id="bottom-button-group1" style="  position:relative;  width: 100%%;    height: 20%;        background: #121314;">
                <div style="float:left;height:100%;width:33%;">
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#222326"></div>
                <div id="bottom-hideslide1" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-bottom" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#222326"></div>
                <div style="float:left;height:100%;width:33%;"></div>
               
                </div>
              </div>
              </div>
              </div>

        <div id="slide2" style="position:absolute;z-index:5;width:100%;background-color:#E16B5F;height:85%">
            
            <div id="sidebar2" style="position:relative;z-index:6;width:30%;background-color:#E16B5F;height:100%;float:right !important">    

                <div id="button-group2" style="  position:absolute;  width: 100%;    height: 20%; bottom: 0;    margin-top:-100px;    background: #C85E53;">
                
                <div id="showslide1" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-top" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#E16B5F"></div>
                <div id="hideslide2" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-bottom" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#E16B5F"></div>
                <div style="float:left;height:100%;width:33%;"></div>
                </div>

            </div>

             <div style="z-index:6;width:70%;height:100%;" id="slide-img2">
              <div style="z-index:6;width:100%;">
              <img src="img/2.jpg" style="width:100%;">
              </div>

                <div id="bottom-bar2" style="position:relative;  width: 100%%;    height: 25%; bottom: 0;  margin-top:-25%;     background: #E16B5F;">
               <div id="bottom-button-group2" style="position:relative;  width: 100%%;    height: 20%;     background: #C85E53;">
                <div id="bottom-showslide1" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-top" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#E16B5F"></div>
                <div id="bottom-hideslide2" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-bottom" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#E16B5F"></div>
                <div style="float:left;height:100%;width:33%;"></div>
                </div>

              </div>
              </div>
              </div>


         <div id="slide3" style="position:absolute;z-index:4;width:100%;background-color:#138F54;height:85%">
            
            <div id="sidebar3" style="position:relative;z-index:5;width:30%;background-color:#138F54;height:100%;float:right !important">    

                <div id="button-group3" style="  position:absolute;  width: 100%;    height: 20%; bottom: 0;    margin-top:-100px;    background: #0E7946;">
                
                <div id="showslide2" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                 <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-top" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#138F54"></div>
                <div id="hideslide3" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:130%;" onclick="location.href='#'">
                 <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="cart" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#138F54"></div>
                <div style="float:left;height:100%;width:33%;"></div>
                </div>
            </div>

             <div style="z-index:6;width:70%;height:100%;" id="slide-img3">
              <div style="z-index:6;width:100%;">
              <img src="img/3.jpg" style="width:100%;">
              </div>

                <div id="bottom-bar3" style="position:relative;  width: 100%%;    height: 25%; bottom: 0;  margin-top:-25%;  background: #138F54;">
               <div id="bottom-button-group3" style=" position:relative;  width: 100%%;    height: 20%;    background: #0E7946;">
                <div id="bottom-showslide2" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:30px;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="chevron-top" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#138F54"></div>
                <div id="bottom-hideslide3" style="float:left;height:100%;width:33%;cursor: pointer;text-align:center;color:#FFF;font-size:30px;" onclick="location.href='#'">
                  <div style="position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);">
                <span class="oi" data-glyph="cart" style=""></span>
                </div>
                </div>
                <div style="float:left;height:100%;width:2px;background-color:#138F54"></div>
                <div style="float:left;height:100%;width:33%;"></div>
                </div>

        </div>
        </div>
        </div>
        

        <div id="produk" style="text-align:center;color:black;overflow:auto;display:block">
<span id="showslide3" style="float:right !important;cursor:pointer;font-size:30px;color:#222326;padding-right:20px" class="oi" data-glyph="chevron-top"></span>
<div id="nav-user" style="float:right !important;position: relative;top:50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);    transform: translateY(-50%);padding-top:30px">

      <div id="login" style="text-align:right;color:#222326;font-size:16px;margin-right:20px;text-decoration:none">
         <span style="cursor:pointer;font-size:15px;color:#222326" class="oi" data-glyph="person" style=""></span>
     @if(Auth::check())
Logged in as
<strong>{{{Auth::user()->username}}}</strong>
<a style="text-decoration:none" href="/logout">Log out</a>
@else
<a style="text-decoration:none" href="/login">Log in</a>
@endif
      </div>

</div>
          
          
            
            
            @if(Auth::check())
            <a style="text-decoration:none" href="/admin">
            <div style="float:left;padding-left:10px;padding-top:5px"><span class="oi" data-glyph="grid-three-up"></span> Dashboard</div>
            </a>
            @else
            @endif
            
             
             @foreach ($item as $y)
             <div id="preview{{ $y['id'] }}" style="overflow:auto;position:absolute;z-index:1000;height:80%;width:100%;background-color:#F0F9F9;display:none" >
              <br><a style="float:right;margin-right:30px" href="#" id="hidepreview{{ $y['id'] }}"><span class="oi" data-glyph="circle-x" style="font-size:200%"></span></a>
                <br>
                
                <img id="itempreview{{ $y['id'] }}" style="display:none"  class="item-img" src="" width="500" height="500" >
                
                
              </div>   
              
              @endforeach
            <br><br><br>
            <div id="daftar-produk" style="font-size:18px;overflow:auto !important;">

            <!--THUMBs-->
            @foreach($item as $x)
                <div class="item" id="showpreview{{ $x['id'] }}" onclick="location.href='#'">
                <strong>{{ $x['nama'] }}</strong><br>
                <img id="itemthumb{{ $x['id'] }}" style="display:none" class="item-img" src="" width="180" height="180" ></a>
                <br>{{ $x['harga'] }}
                </div>
            <script>
                  $("#showproduk").click(function(){
                      $("#itemthumb{{ $x['id'] }}").delay(500).attr("src","{{ $x['img_thumb'] }}").delay(500).fadeIn();
                    });
                   $("#hideslide3").click(function(){
                      $("#itemthumb{{ $x['id'] }}").delay(500).attr("src","{{ $x['img_thumb'] }}").delay(500).fadeIn();
                    });

                    $("#showpreview{{ $x['id'] }}").click(function(){
                      $("#preview{{ $x['id'] }}").fadeIn(function(){
                        $('#itempreview{{ $x['id'] }}').attr("src","{{ $x['img'] }}");
                      });
                      $("#itempreview{{ $x['id'] }}").fadeIn();
                      
                    });
                      $("#hidepreview{{ $x['id'] }}").click(function(){
                      $("#preview{{ $x['id'] }}").fadeOut();
                    });
            </script>   



            @endforeach


            

 

             <div id="footer" style="  position:absolute;  width: 100%;    height: 30px; bottom: 0;    margin-top:-100px;    background: #E0E0E0;"><div style="cursor:pointer;float:right;padding-right:30px;padding-bottom:10px;margin-top:5px" onclick="location.href='http://kukujar.pdft.net'">crafted by Kukujar</div></div>
          </div>

        
    
          
        
        


    </div>

  <script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>\
  </body>
</html>
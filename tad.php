

<?php

include 'connect.php';

if(isset($_COOKIE['admin_id'])){
   $admin_id = $_COOKIE['admin_id'];
}else{
   $admin_id = '';
   header('location:login.php');
}

if(isset($_POST['delete'])){

   $delete_id = $_POST['delete_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

   $verify_delete = $conn->prepare("SELECT * FROM `messages` WHERE id = ?");
   $verify_delete->execute([$delete_id]);

   if($verify_delete->rowCount() > 0){
      $delete_bookings = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
      $delete_bookings->execute([$delete_id]);
      $success_msg[] = 'Message deleted!';
   }else{
      $warning_msg[] = 'Message deleted already!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preload" href="https://www.cspi.uz/themes/vue-institute/assets/css/combined.css" as="style" onload="this.rel='stylesheet'">

    <link rel="preload" as="font" href="https://www.cspi.uz/themes/vue-institute/assets/fonts/fontawesome-webfont.woff2?v=4.7.0" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="https://www.cspi.uz/themes/vue-institute/assets/fonts/themify.woff?-fvbane" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="https://www.cspi.uz/themes/vue-institute/assets/fonts/Flaticon.woff2" type="font/woff" crossorigin="anonymous">

    
    <link href="style.css" rel="stylesheet">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
       <!--header start-->
       <header id="masthead" class="header ttm-header-style-01">



          

</snowfall>
<!-- top_bar -->
<div class="top_bar ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-flex flex-row align-items-center">
                <div class="top_bar_contact_item">
                    <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:tvchdpi@edu.uz">Tipi@gmail.com</a>
                </div>
                <div class="top_bar_contact_item">
                    <div class="top_bar_icon"><i class="fa fa-phone"></i></div>+998 (95) 500-06-04
                </div>
                <div class="top_bar_contact_item ml-auto">
                    <!--   <a href="#">Test</a> -->
                </div>
                <div class="top_bar_contact_item">
                    <!--  <a href="#">Admin panel</a> -->


                    <!-- <div class="header-search main-header-top-item"></div> -->
                    <div class="languages main-header-top-item">
                        <p style="    margin: 0 0 1px;">
                             &nbsp &nbsp
                            <a href="#" data-request="onSwitchLocale" data-request-data="locale: 'uz'"><span class="flag-icon flag-icon-uz"></span>&nbsp O'zb</a> &nbsp&nbsp&nbsp

                            <a href="#" data-request="onSwitchLocale" data-request-data="locale: 'ru'"><span class="flag-icon flag-icon-ru"></span>&nbsp Рус</a> &nbsp&nbsp&nbsp
                        </p>

                    </div>
                </div>
                <div class="top_bar_contact_item">
                    <div class="top_bar_social">
                        <ul class="social-icons">
                            
                        </ul>
                    </div>
                </div>
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="index.html">Bosh Sahifa </a>
            </div>
        </div>
    </div>
</div>
<!-- top_bar end-->






<!-- site-header-menu -->
<div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
    <div class="site-header-menu-inner ttm-stickable-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!--site-navigation -->
                    <div class="site-navigation d-flex flex-row">
                        <!-- site-branding -->
                        <div class="site-branding mr-auto">
                            <a class="home-link" href="/" title="CHDPU" rel="home">
                            <img id="logo-img" class="img-center lazyload" src="themes/vue-institute/assets/images/logo.png" alt="logo-img" style="max-height: 90px;">
                    </a>
                        </div>
                        <!-- site-branding end -->
                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                            <span class="menubar-box">
                        <span class="menubar-inner"></span>
                            </span>
                        </div>


                        <!-- menu -->
                        <nav class="main-menu menu-mobile" id="menu">
                            <ul class="menu" style="font-size: 1px; width: max-content;">





                                <li class="mega-menu-item active">
                                    <a href="#" class="mega-menu-link">Yangilik</a>
                                    <ul class="mega-submenu">

                                       

                                        <li><a href="tad.php">Ommaviy tadbirlar</a></li>
                                   



                                    </ul>
                                </li>

                                <li class="mega-menu-item megamenu-fw">
                                    <a href="#" class="mega-menu-link">Tuzilma</a>
                                    <ul class="mega-submenu megamenu-content" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-menu col-md-4">
                                                    <h6 class="title">Rahbariyat</h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="bdek.html">OTM Rektori</a></li>
                                                            <li><a href="pro.html">O'quv ishlari bo'yicha prorektor</a></li>
                                                            <li><a href="dek.html">Fakultet Rektori</a></li>
                                                            <li><a href="ha.html">Uslubchi</a></li>
                                                            <!-- <li><a href="/raxbarlar-sahifasi/ortikov-oybek-abdullayevich">Moliya-iqtisod ishlari bo'yicha prorektor</a></li> -->

                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                         
                                                <!-- end col-3 -->


                                                

                                            </div>
                                            <!-- end row -->

                                            <!-- Ikkinchi qator boshlandi -->
                                            <div class="row">
                                                <div class="col-menu col-md-4">
                                                    
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                          


                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                

                                                <!--  <div class="col-menu col-md-4">
                                           <h6 class="title">Fakultetlar</h6>
                                           <div class="content">
                                               <ul class="menu-col">
                                                   <li><a href="#">Aniq fanlar fakulteti</a></li>
                                                   <li><a href="#">Tabiiy fanlar fakulteti</a></li>
                                                   <li><a href="#">Tarix va tillar fakulteti</a></li>
                                                   <li><a href="#">Pedagogika fakulteti</a></li>
                                                   <li><a href="#">Maktabgacha va boshlang’ich ta’lim fakulteti</a></li>
                                                   <li><a href="#">Sport va chaqiriqqacha xarbiy ta'lim fakulteti</a></li>
                                                 
                                               </ul>
                                           </div>
                                             </div>     -->

                                            </div>
                                            <!-- end row -->
                                        </li>
                                    </ul>
                                </li>


                                <li class="mega-menu-item">
                                    <a href="#" class="mega-menu-link">Talabalar</a>
                                    <ul class="mega-submenu">
                                       
                                        <li>
                                            <a href="kon.html" class="mega-menu-link">Bakalavriyat Qabul Kontrakt</a>

                                        </li>
                                       

                                      

                                    </ul>
                                </li>

                               


                                <li class="mega-menu-item">
                                    <a href="/qarorlar-bolimlari/default/" class="mega-menu-link">Hujjatlar</a>
                                    <ul class="mega-submenu">
                                       
                                        <li><a href="lit.html">Oliy Talim Litsenziya</a></li>
                                  

                                    </ul>
                                </li>

                                <li class="mega-menu-item">
                                    <a href="#" class="mega-menu-link">Bog'lanish</a>
                                    <ul class="mega-submenu">
                                        <li><a href="/qayta-loqa">Chaqiruv qog'ozini olish</a></li>
                                        <li><a href="https://student.uztipi.uz/dashboard/login">Talabalar Hemis</a></li>
                                        <li><a href="index.html">Aloqa uchun <br>+998 (55)-901-0604</a></li>
                                      
                                    </ul>
                                </li>
                                
                               

                            </ul>
                        </nav>
                    </div>
                    <!-- site-navigation end-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- site-header-menu end-->
</header>
<!--header end-->








<div class="side-bar">

   
<img id="logo-img" class="img-center lazyload" src="themes/vue-institute/assets/images/logo.png" alt="logo-img" style="max-height: 800px;">
<h5 style=" text-align: center;">
TOSHKENT IQTISODIYOT VA PEDAGOGIKA INSTITUTI <br> <br><br>
Axmorot manbasi Instut hayotini yorqin yoritgan holda uning keng rivojlanishiga va yuksalishiga o'z hissasini qo'shib boraveradi. Darxaqiqat Institutning shxsiy axborot beruvchi jamoasi bo'lib uyerda sizga jamoa tomonidan aniq xolatdagi tadbirga oid xabarlarni olishingiz va ularda qatnashishingiz munkun buning uchun bizga murojat eting: 
<br> <br>
<br>
<hr>
+998 (55)-901-0604 <br>
Koll center telefon raqami


</h5>


</div>

<section class="courses">

   <h1 class="heading">Barcha Xabarlar</h1>

   <div class="box-container">
   

   <?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      if($select_messages->rowCount() > 0){
         while($fetch_messages = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>


      <div class="box">
         <div class="tutor">
            
            <div class="info">
               <h3><?= $fetch_messages['name']; ?></h3>
               <span><?= $fetch_messages['email']; ?></span>
            </div>
         </div>
         <div class="thumb">
            <img src="themes/vue-institute/assets/images/o.jpg" alt="">
      
         </div>
        
         <h4  class="title"><?= $fetch_messages['message']; ?></h4>
         <a href="https://t.me/ToshkentIqtisodiyotPedagogika" class="inline-btn">To'lq ma'lumot</a>
      </div>



      <?php
      }
   }else{
   ?>
   <div class="box" style="text-align: center;">
      <p>no messages found!</p>
      <a href="index.html" class="btn">Ma'lumot mavjud emas</a>
   </div>
   <?php
      }
   ?>

     
   </div>

</section>
















<!-- custom js file link  -->
<script src="js/script.js"></script>




    <!-- <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="/modules/system/assets/js/framework.combined-min.js"></script>
<link rel="stylesheet" property="stylesheet" href="/modules/system/assets/css/framework.extras-min.css">


<script async=true src="https://www.cspi.uz/themes/vue-institute//assets/js/combined.js"></script>


<script src=""></script>

<script src="https://www.cspi.uz/themes/vue-institute/assets/js/owl.carousel.min.js"></script>



<script>
    // -----------------------------
    // =============================
    $('.owl-news .owl-carousel').owlCarousel({
        loop: true,
        margin: 5,
        nav: false,
        dots: true,
        autoHeight: true,
        autoplay: true,
        autoplaySpeed: 800,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<!-- now, we'll customize the snowStorm object -->

   
</body>
</html>
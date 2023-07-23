<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SIGNATURE CUISINE</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="{{asset('css/home.css')}}">

</head>

<body>

    <!-- navbar -->
    <header class="header">
        <section class="flex">
            <a class="logo">SIGNATURE-CUISINE 😋</a>

            <nav class="navbar">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/menu') }}">Menu</a>
                <a href="{{ url('/orders') }}">Orders</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>

            <div class="icons">
                <a href="{{ url('/card') }}"><i class="fas fa-shopping-cart"></i><span></span></a>
                <a><i class="fas fa-user" onclick="showHide()"></i><span></span></a>
                <a href="{{ url('/adminlogin') }}"><i class="fas fa-screwdriver-wrench"></i><span></span></a>
            </div>

            <div class="profile" id="profile">
                <p class="name">Vijay</p>
                <div class="flex">
                    <a href="" class="btn">profile</a>
                    <a href="" onclick="return confirm('logout from this website?');"
                        class="delete-btn">logout</a>
                </div>
            </div>
        </section>
    </header>

    <section class="hero">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>delicious pizza</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>chezzy hamburger</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>rosted chicken</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="category">

        <h1 class="title">food category</h1>
     
        <div class="box-container">
     
           <a href="" class="box">
              <img src="images/cat-1.png" alt="">
              <h3>fast food</h3>
           </a>
     
           <a href="" class="box">
              <img src="images/cat-2.png" alt="">
              <h3>main dishes</h3>
           </a>
     
           <a href="" class="box">
              <img src="images/cat-3.png" alt="">
              <h3>drinks</h3>
           </a>
     
           <a href="" class="box">
              <img src="images/cat-4.png" alt="">
              <h3>desserts</h3>
           </a>
     
        </div>
     
    </section>

    <section class="products">

        <h1 class="title">latest dishes</h1>

        <div class="box-container">

            <div class="box">
                <a class="fas fa-eye"></a>
                <button class="fas fa-shopping-cart"></button>
                <img src="projectimages/dessert-1.png" alt="">
                <a class="cat">dessert</a>
                <div class="name">dessert 01</div>
                <div class="flex">
                    <div class="price"><span>$4</div>
                </div>
            </div>
            <div class="box">
                <a class="fas fa-eye"></a>
                <button class="fas fa-shopping-cart"></button>
                <img src="projectimages/dish-2.png" alt="">
                <a class="cat">main dish</a>
                <div class="name">dish 03</div>
                <div class="flex">
                    <div class="price"><span>$5</div>
                </div>
            </div>
            <div class="box">
                <a class="fas fa-eye"></a>
                <button class="fas fa-shopping-cart"></button>
                <img src="projectimages/burger-2.png" alt="">
                <a class="cat">fast food</a>
                <div class="name">burger 02</div>
                <div class="flex">
                    <div class="price"><span>$8</div>
                  
                </div>
            </div>
            <div class="box">
                <a class="fas fa-eye"></a>
                <button class="fas fa-shopping-cart"></button>
                <img src="projectimages/drink-1.png" alt="">
                <a class="cat">drink</a>
                <div class="name">drink 01</div>
                <div class="flex">
                    <div class="price"><span>$3</div>
             
                </div>
            </div>
            <div class="box">
                <a class="fas fa-eye"></a>
                <button class="fas fa-shopping-cart"></button>
                <img src="projectimages/dessert-3.png" alt="">
                <a class="cat">dessert</a>
                <div class="name">dessert 03</div>
                <div class="flex">
                    <div class="price"><span>$4</div>
                 
                </div>
            </div>
            <div class="box">
                <a class="fas fa-eye"></a>
                <button class="fas fa-shopping-cart"></button>
                <img src="projectimages/dish-4.png" alt="">
                <a class="cat">main dish</a>
                <div class="name">dish 04</div>
                <div class="flex">
                    <div class="price"><span>$7</div>
                </div>
            </div>
        </div>

        <div class="more-btn">
            <a class="btn">veiw all</a>
        </div>

    </section>

    <footer class="footer">
        <section class="grid">

      <div class="box">
         <img src="images/email-icon.png" alt="">
         <h3>our email</h3>
         <a href="mailto:shaikhanas@gmail.com">RockVijay@gmail.com</a>
         <a href="mailto:anasbhai@gmail.com">RoackStar@gmail.com</a>
      </div>

      <div class="box">
         <img src="images/clock-icon.png" alt="">
         <h3>opening hours</h3>
         <p>00:07am to 00:10pm</p>
      </div>

      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>our address</h3>
         <a href="#">Colombo, SriLanka- 400104</a>
      </div>

      <div class="box">
         <img src="images/phone-icon.png" alt="">
         <h3>our number</h3>
         <a href="tel:1234567890">123-456-7890</a>
         <a href="tel:1112223333">111-222-3333</a>
      </div>

         </section>

        <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>mr. web designer</span> | all rights reserved!</div>

    </footer>

    <!-- <div class="loader">
        <img src="images/loader.gif" alt="">
    </div> -->


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
    const divcon = document.querySelector('#profile');
    let showHide = function () {
        divcon.classList.toggle('active');
    }
</script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>
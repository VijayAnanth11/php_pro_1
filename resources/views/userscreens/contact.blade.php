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

    <div class="heading">
        <h3>contact us</h3>
        <p><a href="{{ url('/') }}">home</a> <span> / contact</span></p>
    </div>

    <section class="contact">
        <div class="row">
            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

          <form action="" method="post">
            <h3>tell us something!</h3>
            <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
            <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number" required maxlength="10">
            <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
            <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
          </form>
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
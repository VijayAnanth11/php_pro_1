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
        <h3>shopping cart</h3>
        <p><a href="home.php">home</a> <span> / cart</span></p>
    </div>

<section class="products">
   <h1 class="title">your cart</h1>

   <div class="box-container">
      @foreach($cards as $item)
      <div class="box">
         <a href="" class="fas fa-eye"></a>
      
         <div class="flex-btn">
         <form method="POST" action="{{ url('/card' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline;">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="fas fa-times" onclick="return confirm('delete this item?');"></button>
         </form>
         </div>

         <img src="{{asset($item->image)}}" alt="">
         <div class="name">{{ $item->proname}}</div>
         <div class="flex">
            <div class="price"><span>$</span>{{ $item->proprice}}</div>
            <div class="qty">{{ $item->qty}}</div>
         </div>
         <div class="sub-total"> sub total : <span>$100/-</span> </div>
      </div>
      @endforeach
   </div>

   <div class="cart-total">
      <p>cart total : <span>$</span></p>
      <a href="" class="btn">proceed to checkout</a>
   </div>

   <div class="more-btn">
      <a href="" class="btn">continue shopping</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ADMIN PANEL</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
   <link rel="stylesheet" href="{{asset('css/admin_home.css')}}">

</head>

<body>

<header class="header">

   <section class="flex">
      <a href="" class="logo">Admin<span>Panel</span></a>
      <nav class="navbar">
         <a href="{{ url('/dashboard') }}">Home</a>
         <a href="{{ url('/product') }}">Products</a>
         <a href="{{ url('/placed_orders') }}">Orders</a>
         <a href="{{ url('/messages') }}">Messages</a>
      </nav>

      <div class="icons">
         <a><i class="fas fa-user" onclick="showHide()"></i></a>
      </div>

      <div class="profile" id="profile">
            <p class="name">Admin</p>
            <div class="flex">
               <a href="{{ url('/') }}" onclick="return confirm('logout from this website?');"
                  class="delete-btn">logout</a>
            </div>
      </div>
   </section>

</header>

<section class="placed-orders">

   <h1 class="heading">placed orders</h1>

   <div class="box-container">

   <div class="box">
      <p> user id : <span>demo1</span> </p>
      <p> placed on : <span>demo</span> </p>
      <p> name : <span>dem</span> </p>
      <p> email : <span>demo@gmail.com</span> </p>
      <p> number : <span>07615268396</span> </p>
      <p> address : <span>colombo</span> </p>
      <p> total products : <span>10</span> </p>
      <p> total price : <span>$68/-</span> </p>
      <p> payment method : <span>deleivery</span> </p>
      <form action="" method="POST">
         <select name="payment_status" class="drop-down">
            <option value="pending">pending</option>
            <option value="completed">completed</option>
         </select>
         <div class="flex-btn">
            <!-- <input type="submit" value="update" class="btn" name="update_payment"> -->
            <a href="" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </div>
      </form>
   </div>

   </div>

</section>


<script src="../js/admin_script.js"></script>

<script>
    const divcon = document.querySelector('#profile');
    let showHide = function () {
        divcon.classList.toggle('active');
    }
</script>

</body>
</html>
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

<section class="messages">

   <h1 class="heading">messages</h1>

   <div class="box-container">

   <div class="box">
      <p> name : <span>demo</span> </p>
      <p> number : 07589236485</span> </p>
      <p> email : <span>dem@gmail.com</span> </p>
      <p> message : <span>Good Services !!</span> </p>
      <a href="" class="delete-btn" onclick="return confirm('delete this message?');">delete</a>
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
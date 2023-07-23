<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SIGNATURE CUISINE</title>

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

<section class="add-products">

   <form action="{{ url('product') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <h3>add product</h3>
      <input type="text" required placeholder="enter product name" name="proname" id="proname" maxlength="100" class="box">
      <input type="number" min="0" max="9999999999" required placeholder="enter product price" name="proprice" id="proprice" onkeypress="if(this.value.length == 10) return false;" class="box">
      <select name="category" id="category" class="box" required>
         <option value="" disabled selected>select category --</option>
         <option value="main dish">main dish</option>
         <option value="fast food">fast food</option>
         <option value="drinks">drinks</option>
         <option value="desserts">desserts</option>
      </select>

      <input type="file" name="image" id="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp" required>
      <input type="submit" value="add product" name="add_product" class="btn">
   </form>

</section>

<section class="show-products" style="padding-top: 0;">
   <div class="box-container">

   @foreach($products as $item)
   <div class="box">
      <img src="{{asset($item->image)}}" alt="">
      <div class="flex">
         <div class="price"><span>$</span>{{ $item->proprice}}<span>/-</span></div>
         <div class="category">{{ $item->category}}</div>
      </div>
      <div class="name">{{ $item->proname}}</div>
      <div class="flex-btn">
         <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline; width: 300px;">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="delete-btn" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
         </form>
      </div>
   </div>
   @endforeach

   </div>
</section>



<script src="js/admin_script.js"></script>

<script>
    const divcon = document.querySelector('#profile');
    let showHide = function () {
        divcon.classList.toggle('active');
    }
</script>

</body>
</html>

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

</head>
<body>

<section class="form-container">

   <form>
      <h3>Admin login</h3>
      <p>default username = <span>admin</span> & password = <span>111</span></p>
      <input type="text" name="name" maxlength="20" required placeholder="enter your username" class="box">
      <input type="password" name="pass" maxlength="20" required placeholder="enter your password" class="box">
      <!-- <input type="submit" value="login now" name="submit" class="btn"> -->
      <a href="{{ url('/dashboard') }}" class="btn">login now</a>
   </form>

</section>

</body>
</html>
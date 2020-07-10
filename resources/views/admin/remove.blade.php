{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<title>Remove Product</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    .wrapper {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
        text-align: center;
        grid-auto-rows: minmax(100px, auto);
      }
    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
      }
      .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }
      .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
      }
      .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #38ACEC;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
      }
      .form button:hover,.form button:active,.form button:focus {
        background: #38ACEC;
      }
      .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
      }
      .form .message a {
        color: #38ACEC;
        text-decoration: none;
      }
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="admin" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="add" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Product</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Remove Product</a>
    <a href="request" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Request</a>
    {{-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a> --}}
    <a href="/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
</div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:80px 16px">
  <h1 class="w3-margin w3-jumbo">REMOVE PRODUCTS</h1>
</header>

<h2 style="text-align:center">Product List</h2>
<div class="wrapper">
@foreach($products ?? '' as $product)
<div>
    <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->image)) }}" height="100" width="100">

  <h1>{{ $product->productname }}</h1>
  <p class="price">{{ $product->price }}Rs</p>
  <p>{{ $product->desc }}</p>
  <p><button onclick="window.location='{{ url("remove/".$product->id) }}'">Remove</button></p>
</div>
@endforeach
</div>
<footer>
<div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>
</footer>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>

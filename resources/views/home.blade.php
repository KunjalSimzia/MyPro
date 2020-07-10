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
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white ">Home</a>
    <a href="buy" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Buy Product</a>
    <a href="cart" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cart</a>
    <a href="sell" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sell Product</a>
    <a href="status" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Status</a>
    <a href="contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
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
<header class="w3-container w3-red w3-center" style="padding:80px 16px">

    <h1 class="w3-margin w3-jumbo">WELCOME {{session('user')->firstname}}</h1>


</header>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    {{-- <div class="w3-twothird"> --}}
      <h1>The best plastic management service</h1>
      <h5 class="w3-padding-32">Our sevices.</h5>

      <p class="w3-text-grey">We provide best service to our customer. We buy all youe plastic waste, we recycle it and create different plastic products for you which are cost efficient, best quality and harmless to our nature. We provide services like:</p>
      <ul>
        <li>Sell plastic waste</li>
        <li>Buy quality plastic products</li>
      </ul>
      <h5 class="w3-padding-32">Sell plastic waste.</h5>
      <p class="w3-text-grey">We provide service to our customer to sell thier plastic waste to our company. They have to just register themselves. They have give some details like product name, quantity of waste, description about the waste and picture of it. The price of plastic waste to sell is 50/KG.</p>
      <h5 class="w3-padding-32">Buy plastic Products.</h5>
      <p class="w3-text-grey">We provide service to our customer to buy our quality plastic products. They have to just register themselves. Our plastic products are which are cost efficient, best quality and harmless to our nature.</p>

    </div>
      </div>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>


{{-- <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer> --}}

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

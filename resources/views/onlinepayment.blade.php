<!DOCTYPE html>
<html lang="en">
<title>Payment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

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
        background: #ff3333;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
      }

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<body>

    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="hom" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white ">Home</a>
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
    <header class="w3-container w3-red w3-center" style="padding:80px 16px">
        <h1 class="w3-margin w3-jumbo">Payment Details</h1>
      </header>
      <div class="login-page">
        <div class="form">
        <div id="login">
          <form class="login-form" action="online" method="POST">
              @csrf
              <label>Card Number :</label>
            <input type="text" placeholder="Enter Card No." name="prodname" required/>
            <label>CVV :</label>
            <input type="text" placeholder="CVV" name="quantity" required/>
            <div class="w3-red"> <button >PAY</button></div>
        </form>
        </div>
        </div>
      </div>
      <div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
        <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
    </div>

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

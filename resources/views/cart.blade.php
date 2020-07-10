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
<title>Cart</title>
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

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }

      .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      .card button:hover {
        opacity: 0.7;
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
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:80px 16px">
  <h1 class="w3-margin w3-jumbo">Cart</h1>
</header>


<h2 style="text-align:center">Product Cart</h2>
<div class="wrapper">
 @foreach($stack as $stacks)
<div>
    {{-- <form action="qwe" action="POST"> --}}
    <img src="data:image/png;base64,{{ chunk_split(base64_encode($stacks[0]->image)) }}" height="100" width="100">
    <h1>{{  $stacks[0]->productname }}</h1>
    <p class="price">Rs {{ $stacks[0]->price }}</p>
    <p>{{ $stacks[0]->desc }}</p>
    {{-- {{ var_dump($stacks[0]->id) }} --}}
  <p> <input type="number" name="quantity" placeholder="Enter Quantity" value="1" id="quantity"  onchange="calculatePrice({{ $stacks[0]->id}},{{$stacks[0]->price}},  document.getElementById('quantity').innerHTML = this.value)"/></p>
  <p> <button onclick="window.location='{{ url("los/".$stacks[0]->id) }}'">Remove</button></p>
  <p> <input type="text" name="any" value = "{{$stacks[0]->price}}" id="{{ $stacks[0]->id}}" readonly></p>
</div>
 @endforeach
</div>

<p>Total Cart Value: <input readonly type="text" id="totalCart" value="{{ session('cartTotal') }}"/></p>
<p><button onclick="total()">Check Out</button></p>
<div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {Name = x.className.replace(" w3-show", "");
  }
}

function calculatePrice(id,price,quantity){
    //console.log(id +",,,,,,,,,,,"+price+"..............."+quantity);
    var productPrice = quantity * price;
    document.getElementById(id).value =  productPrice;
    //var x=x+productPrice;

    var arr = document.getElementsByName('any');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }
    document.getElementById('totalCart').value = tot;
    document.getElementById('quantity').value = quantity;

  //  var query = "?quantity=" + quantity;

    //window.location.href = "{{ url("checkout") }}" + query;
}
function total(){
    var x=document.getElementById('quantity').value;
    var query = "?quantity=" + x;


    var totalAmount = document.getElementById('totalCart').value;
    console.log(totalAmount);
    var queryString = "?cartvalue=" + totalAmount;
console.log(queryString);
    window.location.href = "{{ url("checkout") }}" + queryString ;
}


</script>
</body>
</html>

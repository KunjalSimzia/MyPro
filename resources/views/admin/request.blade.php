
<!DOCTYPE html>
<html lang="en">
<title>Request</title>
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
table, td, th {
    border: 1px solid #ddd;
    text-align: left;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    padding: 15px;
  }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="admin" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="add" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Product</a>
    <a href="remove" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Remove Product</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Request</a>
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
  <h1 class="w3-margin w3-jumbo">Requests</h1>
</header>
<h2 style="text-align:center">Request List</h2>

<table>
    <tr>
      <th>Sr No.</th>
      <th>Customer ID</th>
      <th>Product</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>Status</th>
      <th>Image</th>
      <th></th><th></th>
    </tr>

    @foreach($requests ?? '' as $request)
    <tr>
      <td>{{ $request->id }}</td>
      <td>{{ $request->cID }}</td>
      <td>{{ $request->productname }}</td>
      <td>{{ $request->desc }}</td>
      <td>{{ $request->quantity }}</td>
      <td>{{ $request->status }}</td>
      <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($request->image)) }}" height="100" width="100">
      </td>
    <td><a href="approve/{{ $request->id }}">
        Approve
    </a></td>
    <td><a href="disapprove/{{ $request->id }}">
        Disapprove
    </a></td>
    </tr>

    {{-- <img src="{{URL::asset('/home/kunjalsimzia'.$request->image) }}" /><br> --}}

    @endforeach

  </table>
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

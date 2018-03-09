
 
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome to the site</h2>
<br/>
 

 <p style="color:blue;">Customer details</p>
 <hr>
<strong>Name:</strong> {{ $thename }} <br>
<strong>Contact:</strong> {{ $thecontact }} <br><br>

 <p style="color:blue;">Product details</p>
<hr>

<img src="{{ asset('sales/'.$theimage) }}" width="200px" height="auto" />

<strong>Product id:</strong> {{ $theid }}<br>
<strong>Posted by:</strong> {{ $thesellername ($thesellerid) }}<br>
<strong>Description:</strong> {{ $thedescription }}<br>
<strong>Price:</strong> {{ $theprice }}<br><br>

 <p style="color:blue;">Quantity</p>
<hr>
<strong>Pieces:</strong> {{ $thequantity }}

</body>
 
</html>
<?php 
    include"connection.php";
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $latitude =$_POST['latitude'];
        $longitude =$_POST['longitude'];
        $sql="INSERT INTO details VALUES('','$name','$email','$longitude','$latitude')";
        mysqli_query($conn,$sql);

        echo
        "
        <script>
        alert('data added successfully');
        document.location.href='data.php';
        </script>
        "
        ;

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="jquery-3.6.0.js"></script>
    </head>
    <body onload ="getLocation();">
        <form action="" class="myForm" method="post" autocomplete="off">
            <label for="">Name</label>
            <input type="text" name="name" required value=""><br>
            <label for="">Email</label>
            <input type="email" name="email" required value=""><br>
            <input type="hidden" name="latitude" required value="">
            <input type="hidden" name="longitude" required value=""><br>
            <button type="submit" name="submit">Sumbit</button>

        </form>
        <script>
           function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);            
            }
           }
           function showPosition(position){
            document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
           }
           function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("You must allow the request  for Geolocation to fill out the form");
                    location.reload();
                    break;

            }
           }
        </script>
    </body>

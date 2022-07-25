<?php
$servername="localhost";
$username="root";
$password="";
$db="crime_db";
//create connections
$conn=mysqli_connect($servername,$username,$password, $db);
//check connection
            if(!$conn){
            die("connection failed:".mysqli_connect_error());
            }else{
                echo "connected succesfully";
            }
            $sql_admin = "CREATE TABLE Image (
                id int(10) AUTO_INCREMENT PRIMARY KEY,
                filename varchar(100)
            )";
            if ($conn->query($sql_admin) === TRUE) {
                echo "Image table created successfully <br/>";
            } else {
                echo "<br/> Error creating table 'image': <br/> " . $conn->error;
            }
            
?>            
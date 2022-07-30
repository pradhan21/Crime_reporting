<?php
$id=$_SESSION['id'];
  echo"<script>alert($id)</script>"; //to check value of id
 if(isset($_SESSION['id'])){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "crime_db";
                $fisrt1="";
                $last1="";
                $phone1="";
                $email1="";  
                $address1="";   
                $image1="";       
                $conn = new mysqli($servername,$username, $password, $dbname);
                if($conn === false){ die("ERRORRRRRR: Could not connect. ". mysqli_connect_error());
                }
                $sql = "SELECT f_name,l_name,address,email,image from user WHERE user_id='$id' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $first1 = $row["f_name"];
                    $last1=$row["l_name"];
                    $address1 = $row["address"];
                    $email1=$row["email"];
                    $image1=$row["image"]; 
                  }
                }
            }else{
                echo "error";
            }
          ?>

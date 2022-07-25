<?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "crime_db";
                $folder = "Report_file/" ;
                
                //$report="";
                $conn = new mysqli($servername,$username, $password, $dbname);

                if(isset($_POST['submit'])){
                    $email=$_POST['email'];
                    $file=$folder.basename($_FILES['fimage']['name']);
                    $report=$_POST['report'];
                    $id=$_POST['id'];
                
                    $sql="INSERT INTO user_complaints VALUES('','$id','') ";
                    
                    if(mysqli_query($conn,$sql)){
                        header("location:index.php");
                    }else{
                        echo mysqli_error($conn);
                    }            
                }                   
                
            
                if($conn === false){ die("ERRORRRRRR: Could not connect. ". mysqli_connect_error());
                                  }
                                  
                                  $sql = "INSERT INTO user_complaints(user_id,crime_place)VALUES (select user_id from user where username='Nischal','$report')";
                                  
                              if(mysqli_query($conn, $sql)){
                                  echo "<h3>data stored in a database successfully."
                                      . " Please browse your localhost php my admin"
                                      . " to view the updated data</h3>";
                       
                                  echo nl2br("\n$f_name\n $l_name\n "
                                      . "$gender\n $address\n $email");
                              } else{
                                  echo "ERROR: Hush! Sorry $sql. "
                                      . mysqli_error($conn);
                              }
                               
                              // Close connection
                              mysqli_close($conn);
              ?>

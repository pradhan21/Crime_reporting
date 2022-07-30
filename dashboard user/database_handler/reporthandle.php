<?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "crime_db";
                $folder = "images1/" ;
             //   $folder = "../image/". $_FILES['fimage']['name'];
                
                //$report="";
                $conn = new mysqli($servername,$username, $password, $dbname);

                if(isset($_POST['submit'])){    
                    $email=$_POST['email'];
                    $file=$folder.basename($_FILES['fimage']['name']);
                    $report=$_POST['report'];
                    $id=$_POST['id'];
                    
                    $location=$_POST['location'];
                
                    $sql="INSERT INTO user_complaints VALUES('','$id','$location','','$report','$file','') ";
                    
                    
                        if(mysqli_query($conn, $sql)){
                            move_uploaded_file($_FILES['fimage']['tmp_name'],$folder);
                            header("location:../index.php");
                            exit();
                
                        
                    }else{
                        echo mysqli_error($conn);
                    }            
                }     
                else{
                    echo mysqli_error($conn);
                }              
            
              ?>

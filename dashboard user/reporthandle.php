<?php 
SESSION_start();
include "connection.php";
                // $servername = "localhost";
                // $username = "root";
                // $password = "";
                // $dbname = "crime_db";
               // $folder = "images1/" ;
            //   $folder = "image/".$_FILES['fimage']['name'];
                //$report="";
                // $conn = new mysqli($servername,$username, $password, $dbname);

                if(isset($_POST['submit'])){   
                    $folder = "images/";
                    // $filename = $_FILES["fimage"]["name"];
                    // $tempname = $_FILES["uploadfile"]["tmp_name"];
                    // $folder = "image/" . $filename;
                    $contact=$_POST['contact'];
                    $file=$folder.basename($_FILES['fimage']['name']);
                    $report=$_POST['report'];
                    $id=$_SESSION['id'];
                    $type=$_POST['type'];
                    $location=$_POST['location'];
                
                    $sql="INSERT INTO user_complaints(user_id,crime_place,crime_type,crime_evidence,image) VALUES('$id','$location','$type','$report','$file') ";
                    // move_uploaded_file($tempname, $folder);
                            move_uploaded_file($_FILES['fimage']['tmp_name'],$file);
                    
                    
                        if(mysqli_query($conn, $sql)){
                            header("location:index.php");
                            exit();
                
                        
                    }else{
                        echo mysqli_error($conn);
                    echo "error2";

                    }            
                }     
                else{
                    echo mysqli_error($conn);
                    echo "error1";
                }              
            
              ?>

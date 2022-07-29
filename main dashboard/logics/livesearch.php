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
    }

    if(isset($_REQUEST['input'])){
        $input = $_REQUEST['input'];
        $search = "SELECT * FROM blog WHERE title LIKE '%{$input}%' OR date_col LIKE '{$input}%'  ";

         $result = mysqli_query($conn, $search);
         if(mysqli_num_rows($result) > 0){
            // while($row = mysqli_fetch_assoc($result)){
                foreach($result as $row){?>
                

                    <div class="entry2 mb-5">
                        <a href="single.php?b_id=<?php echo $row['blog_id'];?>"><img src="http://localhost/crime_reporting/dashboard%20user/<?=$row['featured_image']; ?>" alt="Image" class="img-fluid rounded" style="width:95%; "></a>
                        <br>
                        <span class="post-category text-white bg-primary mb-3">News</span>
                        <h5><a href="single.php?b_id=<?php echo $row['blog_id'];?>"><?php echo $row['title']; ?> </a></h5>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1">By <i class="bi bi-person-fill"></i> <a href="#"><?php echo $row['author']; ?></a></span>
                            <span>&nbsp;&nbsp; <i class="bi bi-pencil-fill"></i> <?php echo $row['date_col']; ?></span>
                        </div>
                    </div>

            <?php

            }
         }else{
            echo "<h5 class = 'text-danger text-center mt-4 mb-5'>No data Fournd</h5>";
         }
    }


?>
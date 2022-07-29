<!-- EDIT And DELETE Does not work -->
<?php

    include "logics/bloglogic.php";

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
               ?>
                

                <thead class=" table-light">
                    <tr>
                        <th scope="col">Blog_Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Published Date</th>
                        <th scope="col">Image</th>
                        <!-- <th scope="col">added Image</th> -->
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                
                <!-- Using loop to get recorded blog from database -->
                <?php foreach($result as $q) { ?> 
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $q['blog_id']; ?></th>
                        <td><?php echo $q['title']; ?></td>
                        <td><?php echo $q['date_col']; ?></td>
                        <td><img class="table_image" src="http://localhost/crime_reporting/dashboard%20user/<?=$q['featured_image']; ?> "></td>
                        <!-- <td><img class="table_image" src="http://localhost/crime_reporting/dashboard%20user/<?=$q['add_image']; ?> "></td> -->
                        <form action = "updatedata.php" method="POST">
                            <input type="hidden" name = "id" value = "<?php echo $q['blog_id']; ?>">
                            <td><input type="submit" name = "edit" class="btn btn-info" value="Edit"></td>
                        </form>

                        <form method="POST">
                            <input type="hidden" name = "id" value = "<?php echo $q['blog_id']; ?>">
                            <td><input type="submit" name = "delete" class="btn btn-danger" value="Delete"></td>
                        </form>
                    
                    </tr>
                </tbody>
                <script src="js/toggle.js"></script>


            <?php

            }
         }else{
            echo "<h5 class = 'text-danger text-center mt-4 mb-5'>No data Fournd</h5>";
         }
    }


?>
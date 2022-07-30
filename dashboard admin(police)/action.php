<!-- EDIT And DELETE Does not work -->
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
        $search = "SELECT * FROM criminal_details WHERE criminal_name LIKE '%{$input}%' OR description LIKE '{$input}%'  ";

         $result = mysqli_query($conn, $search);
         if(mysqli_num_rows($result) > 0){
            // while($row = mysqli_fetch_assoc($result)){
               ?>
                

              
                                <h2 class="mb-4" >Criminal Details1 </h2>
                                <form>
                                <div class="mb-3">
                                <?php foreach($result as $q) { ?> 
                                    <!-- <h4 class="mb-4">Image : </h4>
                                    <img src="<?php //cho $q['image']?>" alt=""> -->
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Criminal name :</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value ="<?php echo $q['criminal_name'];?>"
                                            aria-describedby="emailHelp">
                                        
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Age :</label>
                                        <input type="text" class="form-control" id="exampleInput1" value ="<?php echo $q['age'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Height :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['height'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Weight :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['weight'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Gender :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['gender'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Hair type :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['hair_type'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Skin color :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['skin_color'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Race :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['race'];?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Description :</label>
                                        <textarea class="form-control" placeholder="Description" id="floatingTextarea" name ="crimeD" style="height: 150px;"  ><?php echo $q['description'];?></textarea>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Records :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $q['records'];?>">
                                    </div>
                                    <hr>
                                </div>    
                                </form>
                           
                <script src="js/toggle.js"></script>


            <?php

            }
         }else{
            echo "<h5 class = 'text-danger text-center mt-4 mb-5'>No data Fournd</h5>";
         }
    }


?>
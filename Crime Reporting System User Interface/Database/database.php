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
echo "connection successfuly";





// <?php
// include('main.php')
    
    $sql_admin = "CREATE TABLE Admin (
        admin_id int(10) AUTO_INCREMENT PRIMARY KEY,
        f_name VARCHAR(30) NOT NULL,
        l_name VARCHAR(30) NOT NULL,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(40) NOT NULL,
        city VARCHAR(40),
        address VARCHAR(40) NOT NULL,
        contact_no CHAR(10) Unique,
        land_line_no CHAR(10) Unique,
        email_id VARCHAR(40) NOT NULL
    )";


    if ($conn->query($sql_admin) === TRUE) {
        echo "1.  Admin table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }

    $sql_user = "CREATE TABLE User (
        user_id int(10) AUTO_INCREMENT PRIMARY KEY,
        f_name VARCHAR(30) NOT NULL,
        l_name VARCHAR(30) NOT NULL,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(40) NOT NULL,
        liscence_no VARCHAR(40) NOT NULL,
        city VARCHAR(40),
        address VARCHAR(40) NOT NULL,
        near_police_station VARCHAR(20)
        )";
    
    
        if ($conn->query($sql_user) === TRUE) {
            echo "2.  User table created successfully <br/>";
        } else {
            echo "<br/> Error creating table: <br/> " . $conn->error;
        }


    $sql_police_station = "CREATE TABLE Police_Station (
        station_id int(10) AUTO_INCREMENT PRIMARY KEY,
        city VARCHAR(40),
        address VARCHAR(40) NOT NULL,
        contact_no CHAR(10) Unique,
        no_of_officers int(10) Unique,
        criminal_name varchar(50),
        FOREIGN KEY (criminal_name) REFERENCES Criminal_Details(criminal_name)
        )";
    
    
        if ($conn->query($sql_police_station) === TRUE) {
            echo "3.  Police station table created successfully <br/>";
        } else {
            echo "<br/> Error creating table: <br/> " . $conn->error;
        }
    
    
    $sql_police_reg = "CREATE TABLE Police_Registration (
        police_id int(10) AUTO_INCREMENT PRIMARY KEY,
        f_name VARCHAR(30) NOT NULL,
        l_name VARCHAR(30) NOT NULL,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(40) NOT NULL,
        city VARCHAR(40),
        address VARCHAR(40) NOT NULL,
        contact_no CHAR(10) Unique,
        email_id VARCHAR(40) NOT NULL,
        station_id int(10),
        FOREIGN KEY (station_id) REFERENCES Police_Station(station_id)
        )";

    if ($conn->query($sql_police_reg) === TRUE) {
        echo "4. police_reg table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }

    
    $sql_criminal_details = "CREATE TABLE Criminal_Details (
        criminal_name varchar(50) PRIMARY KEY,
        age int(5) NOT NULL,  
        height FLOAT(10) NOT NULL,
        weight FLOAT(10) NOT NULL,
        gender varchar(6) Not NULL,
        hair_type varchar(20) NOT NULL,
        skin_color Varchar(20) NOT NULL, 
        race varchar(10),
        description varchar(700) NOT NULL, 
        records varchar(700) NOT NULL,
        image longblob NOT NULL
        )";

    if ($conn->query($sql_criminal_details) === TRUE) {
        echo "5. criminal_details table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }


    $sql_crimes = "CREATE TABLE Crimes (
        crime_id int(10)  AUTO_INCREMENT PRIMARY KEY,
        complaint_id int(10),
        FOREIGN KEY (complaint_id) REFERENCES User_Complaints(complaint_id),
        user_id int(10),
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        admin_id int(10),
        FOREIGN KEY (admin_id) REFERENCES Admin(admin_id),
        crime_place varchar(50) NOT NULL,  
        crime_type varchar(50) NOT NULL,
        crime_evidence varchar(50) NOT NULL,
        image longblob NOT NULL,
        missing_id int(10),
        FOREIGN KEY (missing_id) REFERENCES Missing_Details(missing_id),
        sms_mobile_no int(10),
        FOREIGN KEY (sms_mobile_no) REFERENCES SMS(sms_mobile_no),
        criminal_name varchar(50),
        FOREIGN KEY (criminal_name) REFERENCES Criminal_Details(criminal_name)
        )";


    if ($conn->query($sql_crimes) === TRUE) {
        echo "6. Crimes table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }


    $sql_investigation = "CREATE TABLE Investigation (
        investigation_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        crime_id int(10),
        FOREIGN KEY (crime_id) REFERENCES Crimes(crime_id),
        complaint_id int(10),
        FOREIGN KEY (complaint_id) REFERENCES User_Complaints(complaint_id),
        criminal_name varchar(50), 
        FOREIGN KEY (criminal_name) REFERENCES Criminal_Details(criminal_name),
        station_id int(10), 
        FOREIGN KEY (station_id) REFERENCES Police_Station(station_id),
        investigation_del_id int(10),
        FOREIGN KEY (investigation_del_id) REFERENCES Investigation_Details(investigation_del_id)

        )";

    if ($conn->query($sql_investigation) === TRUE) {
        echo "7. Investigation table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }


    $sql_investigation_del = "CREATE TABLE Investigation_Details (
        investigation_del_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        details VARCHAR(500),
        image longblob NOT NULL,
        evidences VARCHAR(500) NOT NULL,
        police_id int(10), 
        FOREIGN KEY (police_id) REFERENCES Police_Registration(police_id)
        )";

    if ($conn->query($sql_investigation_del) === TRUE) {
        echo "8. Investigation_Details table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }


    $sql_user_complaints = "CREATE TABLE User_Complaints (
        complaint_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        user_id int(10), 
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        crime_place varchar(50) NOT NULL,  
        crime_type varchar(50) NOT NULL,
        crime_evidence varchar(50) NOT NULL,
        image longblob NOT NULL
        )";

    if ($conn->query($sql_user_complaints) === TRUE) {
        echo "9. User Complaints table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }



    $sql_sms = "CREATE TABLE SMS (
        sms_mobile_no int(10) AUTO_INCREMENT  PRIMARY KEY,
        complaint varchar(500) not null
        )";

    if ($conn->query($sql_sms) === TRUE) {
        echo "10. SMS table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }



    $sql_search= "CREATE TABLE Search (
        
        criminal_name varchar(50),
        FOREIGN KEY (criminal_name) REFERENCES Criminal_Details(criminal_name),
        station_id int(10), 
        FOREIGN KEY (station_id) REFERENCES Police_Station(station_id),
        admin_id int(10), 
        FOREIGN KEY (admin_id) REFERENCES Admin(admin_id),
        user_id int(10), 
        FOREIGN KEY (user_id) REFERENCES User(user_id),
        police_id int(10), 
        FOREIGN KEY (police_id) REFERENCES Police_Registration(police_id)
                
        )";

    if ($conn->query($sql_search) === TRUE) {
        echo "11. search table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }



    $sql_missing_details = "CREATE TABLE Missing_Details (
        missing_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        name varchar(50) NOT NULL,
        address varchar(50) NOT NULL, 
        age int(5) NOT NULL,  
        height FLOAT(10) NOT NULL,
        weight FLOAT(10) NOT NULL,
        gender varchar(6) Not NULL,
        hair_type varchar(20) NOT NULL,
        skin_color Varchar(20) NOT NULL, 
        race varchar(10),
        description varchar(700) NOT NULL, 
        missing_date DATE,
        image longblob NOT NULL
        )";

    if ($conn->query($sql_missing_details) === TRUE) {
        echo "12. missing_details table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }


    $sql_blog = "CREATE TABLE Blog (
        blog_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        title varchar(50) NOT NULL,
        sub_title varchar(50), 
        author varchar(50) Not NULL,
        featured_image longblob NOT NULL,
        add_image longblob,
        description1 longtext NOT NULL, 
        description2 longtext,
        date_col datetime default current_timestamp
        )";

    if ($conn->query($sql_blog) === TRUE) {
        echo "13. blog table created successfully <br/>";
    } else {
        echo "<br/> Error creating table: <br/> " . $conn->error;
    }




//close mysqli
mysqli_close($conn);
 ?>

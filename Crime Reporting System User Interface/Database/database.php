<?php
include('main.php')
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
    email_id VARCHAR(40) NOT NULL,
    )";


    if ($conn->query($sql_admin) === TRUE) {
        echo "1.  Admin table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }


    $sql_police_station = "CREATE TABLE Police_Station (
        station_id int(10) AUTO_INCREMENT PRIMARY KEY,
        city VARCHAR(40),
        address VARCHAR(40) NOT NULL,
        contact_no CHAR(10) Unique,
        no_of_officers int(10) Unique,
        criminal_name FOREIGN KEY REFERENCES Criminal_Details(criminal_name),
        )";
    
    
        if ($conn->query($sql_police_station) === TRUE) {
            echo "2.  Police station table created successfully <br/>";
        } else {
            echo "Error creating table: " . $conn->error;
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
        station_id int(10) FOREIGN KEY REFERENCES Police_Station(station_id)
        )";

    if ($conn->query($sql_police_reg) === TRUE) {
        echo "3. police_reg table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    
    $sql_criminal_details = "CREATE TABLE Criminal_Details (
        criminal_name PRIMARY KEY,
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

    if ($conn->query($sql_police_reg) === TRUE) {
        echo "4. criminal_details table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }



    $sql_company = "CREATE TABLE Company (
        company_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        company_username VARCHAR(30) NOT NULL,
        company_name VARCHAR(50) NOT NULL,
        Email VARCHAR(40) NOT NULL Unique,
        Password CHAR(16),
        contact_num CHAR(10) Unique,
        agent_id int(10),
        FOREIGN KEY(agent_id) REFERENCES Agent(agent_id)
        )";

    if ($conn->query($sql_company) === TRUE) {
        echo "3. Company table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sql_task = "CREATE TABLE Task (
        task_id int(20) AUTO_INCREMENT PRIMARY KEY,
        company_id int(10),
        subject VARCHAR(50) NOT NULL,
        task VARCHAR(40) NOT NULL,
        report VARCHAR (90),
        status tinyint(1) default 0,
        due_date date,
        closed_date date,
        FOREIGN KEY(company_id) REFERENCES Company(company_id)
        )";

    if ($conn->query($sql_task) === TRUE) {
        echo "4. Task table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $sql_contact = "CREATE TABLE Contactus (
        contactus_id int(20) AUTO_INCREMENT PRIMARY Key,
        F_name VARCHAR(50) NOT NULL,
        company_name VARCHAR(50) NOT NULL,
        Email VARCHAR(40) NOT NULL,
        contact_num CHAR(10) NOT NULL,
        subject VARCHAR(30) NOT NULL,
        message VARCHAR(180) NOT NULL,
        mgs_date DATE
        )";

    if ($conn->query($sql_contact) === TRUE) {
        echo "5. Contact table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    mysqli_close($conn);
     ?>

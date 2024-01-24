<?php

class DB 
{
    private $db;

    function __construct()
    {
        $this->dbConnect();
        $this->userTable = 'users';
    }

    function dbConnect()
    {
        // Database configuration
        $dbServer = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'mysqlcode';

        // Use try-catch for better error handling
        try {
            $this->db = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);
            if ($this->db->connect_error) {
                throw new Exception("Database connection error: " . $this->db->connect_error);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    function checkUser($userdata)
    {
        $oauth_uid = $userdata->id;
        $email = $userdata->emailAddress;

        // Use prepared statements to prevent SQL injection
        $stmt = $this->db->prepare("SELECT * FROM $this->userTable WHERE oauth_uid = ? AND email = ?");
        $stmt->bind_param("ss", $oauth_uid, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Use prepared statement to update user data
            $stmt = $this->db->prepare("UPDATE $this->userTable SET fname = ?, lname = ?, email = ?, location = ?, country = ?, picture_url = ?, profile_url = ?, modified = ? WHERE id = ?");
            $stmt->bind_param("ssssssssi", $userdata->firstName, $userdata->lastName, $userdata->emailAddress, $userdata->location->name, $userdata->location->country->code, $userdata->pictureUrl, $userdata->publicProfileUrl, date("Y-m-d H:i:s"), $row['id']);
            $stmt->execute();

            return $row['id'];
        } else {
            // Use prepared statement to insert new user data
            $stmt = $this->db->prepare("INSERT INTO $this->userTable(oauth_provider,oauth_uid,fname,lname,email,location,country,picture_url,profile_url,created,modified) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssssssss", 'linkedin', $userdata->id, $userdata->firstName, $userdata->lastName, $userdata->emailAddress, $userdata->location->name, $userdata->location->country->code, $userdata->pictureUrl, $userdata->publicProfileUrl, date("Y-m-d H:i:s"), date("Y-m-d H:i:s"));
            $stmt->execute();

            return $this->db->insert_id;
        }
    }
}

?>

<?php 
    

    if(isset($_POST)) {
        $fname = $_POST['newfrstname'];
        $lname = $_POST['newlstname'];
        $email = $_POST['newupemail'];
        $pass = $_POST['newuppass'];
        $cpass = $_POST['newconfirmuppass'];
        }

        
        //check passwords
        if($pass!=$cpass) {
            die("passwords dont match!");
        }

        
        //connection parameters
        $server = "localhost";
        $usrname = "root";
        $passkey= "luckysingh1233";

        //create connection
         $conn = new mysqli($server, $usrname, $passkey);

        //check connection
         if($conn->connect_error) {
             die("Connection failed:".$conn->connect_error);
         }
          else {
              echo "Connection Successful";
          }
        
        $db_selected = mysqli_select_db($conn, 'users');
        if (!$db_selected) {
        die ("Can\'t use foo : " . mysqli_error($conn));
        }
        
        // removes backslashes
        $fname = stripslashes($_POST['newfrstname']);
        $lname = stripslashes($_POST['newlstname']);
        $email = stripslashes($_POST['newupemail']);
        $pass = stripslashes($_POST['newuppass']);
        $cpass = stripslashes($_POST['newconfirmuppass']);
        
        
        //escapes special characters in a string
        $fname = mysqli_real_escape_string($conn,$fname);
        $lname = mysqli_real_escape_string($conn,$lname); 
        $email = mysqli_real_escape_string($conn,$email);
        $pass = mysqli_real_escape_string($conn,$pass);
        $cpass = mysqli_real_escape_string($conn,$cpass);

        
        $query = "INSERT INTO loginfo (firstname, lastname, emailid, pswd) VALUES ('$fname', '$lname', '$email', 'md5($pass)')";
        
        $result = mysqli_query($conn,$query);
        
        if($result){
            echo " <h3>You are registered successfully.</h3> ";
        }
        
        mysqli_query($conn, $query) or die(mysqli_error($conn));
    
?>
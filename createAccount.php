<?php
    $error = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["fname"]))
        {
            $nameErr = "*Name is required";
            $error = 1;
            
        }
        else
        {
            $fName = test_input($_POST["fname"]);
            $lName = test_input($_POST["lname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$fName) || !preg_match("/^[a-zA-Z ]*$/",$lName))
            {
                $nameErr = "*Only letters and white space allowed";
                $error = 1;
                
            }
        }

        if (empty($_POST["email"]))
        {
            $emailErr = "*Email is required";
            $error = 1;
            
        }
        else 
        {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailErr = "*Invalid email format";
                $error = 1;
                
            }    
        }

        if (empty($_POST["uname"]))
        {
            $uNameErr = "*Username is required";
            $error = 1;
            
        }
        else 
        {
            $uName = test_input($_POST["uname"]);
            // check if username already exist or not
            if (1==2)
            {
                $uNameErr = "*This username already exist";
                $error = 1;
                
            }    
        }

        if (empty($_POST["pwd"]))
        {
            $passwordErr = "*Password is required";
            $error = 1;
            
        }
        else
        {
            $password = test_input($_POST["pwd"]);
            if(strlen($password) < 8)
            {
                $passwordErr = "*Weak password";
                $error = 1;
                
            }    
        }

        if($error == 0)
        {
            require 'connectToDB.php';

            $query = "INSERT INTO `login` (`FirstName`, `LastName`, `Email`, `UserName`, `UserName`) VALUES ('".$fName."', '".$lName."', '".$email."', '".$uName."', '".$password."')";

            $is_query_run = mysql_query($query);
        }
    }

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
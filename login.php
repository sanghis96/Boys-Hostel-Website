<?php
    session_start();

    require 'connectToDB.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = $_POST['email'];
        $password = $_POST['pwd'];

        // admin password is accepted
        
        $sql_querry = "SELECT * FROM login WHERE username='$username' and password=MD5('$password') ";
        $result = mysqli_query($link, $sql_querry)
        or die("falied to connect".mysql_error());

        if(mysqli_num_rows($result) == 1) {
            
            $row = mysqli_fetch_array($result);

              $_SESSION['login_user'] = $username;
				$_SESSION['login_id'] = $orw['U_id']; // column name change required for U_id
            print $row['username'] . " login successful! ";
            
            if($row['admin']) {
                print "Admin";
                header("location: admin.php");
            } else {
                print "Student";
                header("location: index.php");
            }

            //echo $_SESSION["login_user"];
            //header("location: dashboard.php");

        } else{
            print " invalid username password! ";
        }
    }
?>

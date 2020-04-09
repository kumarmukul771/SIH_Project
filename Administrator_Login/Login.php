<?php
        session_start();
        $con=mysqli_connect("localhost","root","","sih");
        $email=trim($_POST['email']);
       
        $pass=trim($_POST['password']);
        $q="SELECT password FROM administrator where email='".$email."' and head=1";
       $stmt=$con->query($q);
        
       if($stmt->num_rows > 0)
       {
        $ans= mysqli_fetch_array($stmt);
        if($pass==$ans['password'])
        header('location:http://localhost/SIH/Administrator_Login/After_login/Pg1.php');
        }
        else
        echo "WRONG ID PASSWORD!";

?>
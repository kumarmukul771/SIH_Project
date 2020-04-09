<?php
    
    require_once('partials/connection.php');
    include_once('partials/header.php');

    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['link']) && !empty($_GET['link'])) 
    {
        $email = mysqli_escape_string($conn,$_GET['email']);    
        $link = mysqli_escape_string($conn,$_GET['link']);    
      
        $sql = "SELECT email, link, status FROM user WHERE email = '".$email."' AND link = '".$link."' AND status = 0";
        
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);

        if( $row )
        {
            $sql = "UPDATE user SET status=1 WHERE email='".$email."' AND link = '".$link."' AND status = 0";
            $result = mysqli_query($conn,$sql);

            echo '<div class="alert alert-success">Your account has been activated, you can now login</div>';

            // Create an entry for a user in userdetails table
            $sql="SELECT * FROM user where email='".$email."'";
            $stmt=$conn->query($sql);
            $res=mysqli_fetch_array($stmt);
            $usermuk=$res['userid'];
            
            $sql="insert into userdetails(email,userid) values('$email',$usermuk)";
            $stm=$conn->query($sql);
            if($stm)
            {
        ?>
            <br><br><a href="localhost://SIH/User_Login/Login.php" class="btn btn-danger">click here to login</a>
        <?php
    }
    else echo "Error";
        }

        else
        echo '<div class="alert alert-danger">The url is either invalid or you already have activated your account.</div>';
    }

    else
    echo '<div class="alert alert-danger">Invalid approach, please use the link that has been send to your email.</div>';

?>
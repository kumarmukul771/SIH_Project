<?php
if(!isset($_POST['submit']))
    header('location:http://localhost/SIH/Home_page/Home/Status/Form/status.php');
else
{
    $id=$_POST['id'];
    $conn=new mysqli('localhost','root','','sih');
    $q="SELECT * FROM userdetails WHERE applicationId=$id";
    $stmt=$conn->query($q);

    $result=mysqli_fetch_array($stmt);
    if($stmt->num_rows==0)
        {
        ?>
        <div class="jumbotron">
            <p>Invalid application ID</p>
        </div>
        <?php
    }
    else
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="contet.css">
    <style type="text/css">
        .add
        {
            background: green;
        }
        .add2
        {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Application Status</h1>
                </div>
        </div>

        <div class="row">

      <!-- <div class="space"></div>   -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="circle" id="c1"></div>
            
            </div>

            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="line"></div></div> -->
            
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="circle" id="c2"></div>
            </div>

            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="line"></div></div> -->

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="circle" id="c3"></div>
             </div>

            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="line"></div></div> -->

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="circle" id="c4"></div>
            </div>

        </div>

        <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                <div class="line" id="l1"></div>
                </div>
    
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="line" id="l2"></div>
                </div>
    
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="line" id="l3"></div>
                </div>
        </div>
        <div class="row">

            <!-- <div class="space"></div>   -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="status"><h3 id="a1">Submitted</h3></div>
                
                </div>
    
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="line"></div></div> -->
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="status"><h3 id="a2">Verified</h3></div>
                </div>
    
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="line"></div></div> -->
    
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="status"><h3 id="a3">Approved</h3></div>
                 </div>
    
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="line"></div></div> -->
    
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <div class="status"><h3 id="a4">Accepted</h3></div>
                </div>
      
              </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="http://localhost/SIH/Home_page/Home/index.php"><button class="btn btn-lg btn-success">Go Back</button></a>
                </div>
        </div>      
    </div>
</body>
<script type="text/javascript">
    <?php 
    if($result['submitted']==1)
    {
        ?>
        document.getElementById("c1").classList.add("add");
        document.getElementById("a1").classList.add("add2");
        <?php 
    }
    if($result['verified']==1)
    {
        ?>
        document.getElementById("c2").classList.add("add");
        document.getElementById("l1").classList.add("add");
        document.getElementById("a2").classList.add("add2");
        <?php 
    }
    if($result['approved']==1)
    {
        ?>
        document.getElementById("c3").classList.add("add");
        document.getElementById("l2").classList.add("add");
        document.getElementById("a3").classList.add("add2");
        <?php 
    }
    if($result['accepted']==1)
    {
        ?>
        document.getElementById("c4").classList.add("add");
        document.getElementById("l3").classList.add("add");
        document.getElementById("a4").classList.add("add2");
        <?php 
    }
    ?>
</script>
</html>
<?php 
}
}
?>
<?php

	session_start();

	$conn=new mysqli('localhost','root','','sih');

?>

<!DOCTYPE html>
<html>
<head>

	<title>Loan Accepted</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../../partials/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../partials/css/header.css">

</head>

<body>

	<?php

		$applicationId = $_POST['applicationId'];
		echo $applicationId;
		$sql = "SELECT * from loans";
		
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);

		$loanDigit = $row['loanDigit']+1;

		$sql = "UPDATE loans SET loanDigit = $loanDigit";		
		$result = mysqli_query($conn,$sql);

		$sql = "SELECT *from userdetails where applicationId = $applicationId";		
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		
		$outstanding = $row['amount'];
		$loanAmount = $row['amount'];
		$email = $row['email'];

		$sql = "SELECT *from user where email = '$email'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);

		$name = $row['name'];

		$loanAccountNumber = $loanDigit;
		$acceptedDate = date('Y-m-d');
		
		// echo gettype($acceptedDate);

		// echo $acceptedDate;

		$sql = "UPDATE userdetails SET accepted = 1,approved=1,verified=1,submitted=0, loanAccountNumber = $loanAccountNumber, acceptedDate='$acceptedDate', outstanding = $outstanding where applicationId = $applicationId";
		
		$result = mysqli_query($conn,$sql);
		// $row = mysqli_fetch_array($result);

		$sql = "SELECT *from userdetails where email = '$email'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);

		$tenure = intval($row['tenure'])*12;

		$years = intval($row['tenure']);
		$years+=3;
		// $tenure = 7;

		$conn = new mysqli('localhost', 'root', '', 'account');

		if (mysqli_connect_error())
		die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());

		$table = "loan".$loanAccountNumber;

		$sql = "create table ".$table." (amount int(11), dueDate varchar(30), paidDate varchar(30), status varchar(10))";
		$result = mysqli_query($conn, $sql);

		$count = 0;

		$interestPerMonth = (8.5*$years*$loanAmount)/(100*36);

		$amoutPerMonth = ceil($loanAmount/($tenure*12));
		$amoutPerMonth+= $interestPerMonth;

		while( $tenure>0 )
		{
			$loanDate = strval(date('Y-m-d', strtotime('+3 years +'.$count.' months')));

			$sql = "INSERT into $table (amount, dueDate, paidDate, status) values ('$amoutPerMonth', '$loanDate', '0000-00-00','Unpaid')";
			$result = mysqli_query($conn,$sql);

			$count++;
			$tenure--;
		}

		require ('Email/PHPMailerAutoload.php');

		$mail = new PHPMailer;

		$mail->isSMTP();                                      		// Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';						  		// Specify main and backup SMTP servers
		
		$mail->SMTPAuth = true;                               		// Enable SMTP 
		$mail->Username = 'mkpubg771@gmail.com';                 	// SMTP username
		$mail->Password = 'mukul3112';                           	// SMTP password
		$mail->SMTPSecure = 'tls';                            		// Enable TLS encryption, 
		$mail->Port = 587;                                    		// TCP port to connect to

		$mail->setFrom('mkpubg771@gmail.com', 'MUKUL KUMAR');
		$mail->addAddress($email);     								// Add a recipient

		$mail->isHTML(true);                                  		// Set email format to HTML

		$mail->Subject = 'noReply SIH';
		$mail->Body    = "Congratulations! ".$name." Your request for the loan of amount ".$loanAmount." has been accepted . Amount mentioned will be transferred to the registered account within 7 working days.";
		$mail->AltBody = 'Thank You for choosing our portal.';

		if($mail->send()) 
		echo 'Message has been sent successfully';
		else
		echo 'Mailer Error: ' . $mail->ErrorInfo;   
		  					
	?>

</body>

</html>
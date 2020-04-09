<?php
// Connection Codes....

if(isset($_POST["submit"]))
{
	
	$upload_file = $_FILES['pdf_file']['name'];
    move_uploaded_file($_FILES['pdf_file']['tmp_name'],"images/uploads/pdf/".$_FILES['pdf_file']['name']);
   $qry=mysqli_query($con,"INSERT INTO `upload_pdf_file`(`pdf_file`)VALUES('".$upload_file."')");
   if($qry)
   {
   	echo "Upload Successfull";
   }
   else

   {
   	echo "Upload failed";
   }
}
?>
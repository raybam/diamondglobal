<?php
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$date=$_POST['date'];
		// $websitedesign=$_POST['websitedesign'];
		// $graphicsdesign=$_POST['graphicsdesign'];
		// $videoediting=$_POST['videoediting'];

		$to='diamondgraphics94@gmail.com';
		$subject='Form Submission';
		$message="Name: ".$name."\n"."email: ".$email."\n". "Wrote the following: "."\n\n".$msg;
		$headers="from: ".$email;

		if (mail($to, $subject, $message, $headers)) {
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly</h1>"; 
		}else {
			echo "Something went wrong!";
		}
	}

 ?>
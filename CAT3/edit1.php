<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Record</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$name = $_POST['name'];
		    $age = $_POST['age'];
			$gender = $_POST['gender'];
			$course = $_POST['course'];
			$address = $_POST['address'];
			$comment = $_POST['comment'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE stuinfo set stu_name ="'.$name.'",
					age ="'.$age.'", gender="'.$gender.'", course="'.$course.'",
					address="'.$address.'", 
					comment="'.$comment.'" WHERE
					stu_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>
<?php

 session_start();


include 'Template.php';
include 'connection.php';


if($_SESSION['logg'] == 2)
		{
			header("location:profile2.php"); // redirects page to Review page
		}


?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>

	</head>
	<body class="loggedin">

		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>FirstName:</td>
						<td><?=$_SESSION['FirstName']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['Password']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['EmailAddress']?></td>
					</tr>
				</table>
			</div>
		</div>
		
		</br>
		</br>
		</br>
		</br>
		<?php
		$id = $_SESSION['AuthorID'];
		
		$query_update = "SELECT * FROM [CPMS].[dbo].[Author] WHERE AuthorID = '{$id}'";
		$update_result = sqlsrv_query($conn, $query_update);
		
		while($row = sqlsrv_fetch_array($update_result)){
				$set['AuthorID'] = $row['AuthorID'];
				$set['FirstName'] = $row['FirstName'];
				$set['MiddleInitial'] = $row['MiddleInitial'];
				$set['LastName'] = $row['LastName'];
				$set['Affiliation'] = $row['Affiliation'];
				$set['Department'] = $row['Department'];
				$set['Address'] = $row['Address'];
				$set['City'] = $row['City'];
				$set['State'] = $row['State'];
				$set['ZipCode'] = $row['ZipCode'];
				$set['PhoneNumber'] = $row['PhoneNumber'];
				$set['EmailAddress'] = $row['EmailAddress'];
				$set['Password'] = $row['Password'];
		}
		
		if(isset($_POST['update'])) // when click on Update button
		{
			$FirstName = $_POST['FirstName'];
			$Address = $_POST['Address'];
			$MiddleInitial = $_POST['MiddleInitial'];
			$City = $_POST['City'];
			$LastName = $_POST['LastName'];
			$State = $_POST['State'];
			$Affiliation = $_POST['Affiliation'];
			$ZipCode = $_POST['ZipCode'];
			$Department = $_POST['Department'];
			$PhoneNumber = $_POST['PhoneNumber'];
			$EmailAddress = $_POST['EmailAddress'];
			$Password = $_POST['Password'];
		



			$query = "UPDATE [CPMS].[dbo].[Author] SET 
				FirstName= (?),
				MiddleInitial = (?),
				LastName = (?),
				Affiliation = (?),
				Department = (?),
				Address = (?),
				City = (?),
				State = (?),
				ZipCode = (?),
				PhoneNumber = (?),
				EmailAddress = (?),
				Password  = (?)
				WHERE AuthorID = '{$id}'";

		$params = array($FirstName,$MiddleInitial,$LastName,$Affiliation,$Department,$Address,$City,$State,$ZipCode,$PhoneNumber,$EmailAddress,$Password);
	
			$edit = sqlsrv_query($conn,$query,$params);
			if( $edit === false ) {
				die( print_r( sqlsrv_errors(), true));
			}

			
	
		if($edit)
		{
			header("location:profile.php"); // redirects to all records page
		}
		else
		{
			echo "Error.";
		}


		}    	
?>

		
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Modify your profile below</p>
				<form method="POST">
					<input type="text" name="FirstName" value="<?php echo $set['FirstName'] ?>" placeholder="FirstName" Required>
					<input type="text" name="MiddleInitial" value="<?php echo $set['MiddleInitial'] ?>"  placeholder="MiddleInitial" Required>
					<input type="text" name="LastName" value="<?php echo $set['LastName'] ?>"   placeholder="LastName" Required>
					<input type="text" name="Affiliation" value="<?php echo $set['Affiliation'] ?>"   placeholder="Affiliation" Required>
					<input type="text" name="Department" value="<?php echo $set['Department'] ?>"   placeholder="Department" Required>
					<input type="text" name="Address" value="<?php echo $set['Address'] ?>"   placeholder="Address" Required>
					<input type="text" name="City" value="<?php echo $set['City'] ?>"   placeholder="City" Required>
					<input type="text" name="State" value="<?php echo $set['State'] ?>"   placeholder="Enter State" Required>
					<input type="text" name="ZipCode" value="<?php echo $set['ZipCode'] ?>"  placeholder="ZipCode" Required>
					<input type="text" name="PhoneNumber" value="<?php echo $set['PhoneNumber'] ?>"  placeholder="PhoneNumber" Required>
					<input type="text" name="EmailAddress" value="<?php echo $set['EmailAddress'] ?>"  placeholder="EmailAddress" Required>
					<input type="text" name="Password" value="<?php echo $set['Password'] ?>"  placeholder="Password" Required>
					<input type="submit" name="update"   value="Update">
					</form>
			</div>
		</div>
	</body>
	<div id = "footer">
<footer>
    <p>All rights reserved by </br> Consortium for Computing Sciences in Colleges Midwest </br>(CCSCMW)</p>
</footer>
</html>

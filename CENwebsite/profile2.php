<?php

 session_start();
//Profile page for reviewers.

include 'Template.php';
include 'connection.php';
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
				<p>Your account details are below:</p>	<!-- Some info given to the users by calling session variables loated in loginaction.php.-->
				<table>
					<tr>
						<td>First Name:</td>
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
		
		$id = $_SESSION['ReviewerID'];
		
		$query_update = "SELECT * FROM [CPMS].[dbo].[Reviewer] WHERE ReviewerID = '{$id}'";	//Query will echo variables in form.
		$update_result = sqlsrv_query($conn, $query_update);
		
		while($row = sqlsrv_fetch_array($update_result)){
				$set['ReviewerID'] = $row['ReviewerID'];
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
				$set['AnalysisOfAlgorithms'] = ($row['AnalysisOfAlgorithms']);
				$set['Applications'] = ($row['Applications']);
				$set['Architecture'] = ($row['Architecture']);
				$set['ArtificialIntelligence'] = ($row['ArtificialIntelligence']);
				$set['ComputerEngineering'] = ($row['ComputerEngineering']);
				$set['Curriculum'] = ($row['Curriculum']);
				$set['DataStructures'] = ($row['DataStructures']);
				$set['Databases'] = ($row['Databases']);
				$set['DistancedLearning'] = ($row['DistancedLearning']);
				$set['DistributedSystems'] = ($row['DistributedSystems']);
				$set['EthicalSocietalIssues'] = ($row['EthicalSocietalIssues']);
				$set['FirstYearComputing'] = ($row['FirstYearComputing']);
				$set['GenderIssues'] = ($row['GenderIssues']);
				$set['GrantWriting'] = ($row['GrantWriting']);
				$set['GraphicsImageProcessing'] = ($row['GraphicsImageProcessing']);
				$set['HumanComputerInteraction'] = ($row['HumanComputerInteraction']);
				$set['LaboratoryEnvironments'] = ($row['LaboratoryEnvironments']);
				$set['Literacy'] = ($row['Literacy']);
				$set['MathematicsInComputing'] = ($row['MathematicsInComputing']);
				$set['Multimedia'] = ($row['Multimedia']);
				$set['NetworkingDataCommunications'] = ($row['NetworkingDataCommunications']);
				$set['NonMajorCourses'] = ($row['NonMajorCourses']);
				$set['ObjectOrientedIssues'] = ($row['ObjectOrientedIssues']);
				$set['OperatingSystems'] = ($row['OperatingSystems']);
				$set['ParallelProcessing'] = ($row['ParallelProcessing']);
				$set['Pedagogy'] = ($row['Pedagogy']);
				$set['ProgrammingLanguages'] = ($row['ProgrammingLanguages']);
				$set['Research'] = ($row['Research']);
				$set['Security'] = ($row['Security']);
				$set['SoftwareEngineering'] = ($row['SoftwareEngineering']);
				$set['SystemsAnalysisAndDesign'] = ($row['SystemsAnalysisAndDesign']);
				$set['UsingTechnologyInTheClassroom'] = ($row['UsingTechnologyInTheClassroom']);
				$set['WebAndInternetProgramming'] = ($row['WebAndInternetProgramming']);
				$set['Other'] = ($row['Other']);
				$set['OtherDescription'] = ($row['OtherDescription']);
				$set['ReviewsAcknowledged'] = ($row['ReviewsAcknowledged']);
				
		}
		
		if(isset($_POST['update'])) // Update button that modifies the variables
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
			$AnalysisOfAlgorithms = ($_POST['AnalysisOfAlgorithms']);
			$Applications = ($_POST['Applications']);
			$Architecture = ($_POST['Architecture']);
			$ArtificialIntelligence = ($_POST['ArtificialIntelligence']);
			$ComputerEngineering = ($_POST['ComputerEngineering']);
			$Curriculum = ($_POST['Curriculum']);
			$DataStructures = ($_POST['DataStructures']);
			$Databases = ($_POST['Databases']);
			$DistancedLearning = ($_POST['DistancedLearning']);
			$DistributedSystems = ($_POST['DistributedSystems']);
			$EthicalSocietalIssues = ($_POST['EthicalSocietalIssues']);
			$FirstYearComputing = ($_POST['FirstYearComputing']);
			$GenderIssues = ($_POST['GenderIssues']);
			$GrantWriting = ($_POST['GrantWriting']);
			$GraphicsImageProcessing = ($_POST['GraphicsImageProcessing']);
			$HumanComputerInteraction = ($_POST['HumanComputerInteraction']);
			$LaboratoryEnvironments = ($_POST['LaboratoryEnvironments']);
			$Literacy = ($_POST['Literacy']);
			$MathematicsInComputing = ($_POST['MathematicsInComputing']);
			$Multimedia = ($_POST['Multimedia']);
			$NetworkingDataCommunications = ($_POST['NetworkingDataCommunications']);
			$NonMajorCourses = ($_POST['NonMajorCourses']);
			$ObjectOrientedIssues = ($_POST['ObjectOrientedIssues']);
			$OperatingSystems = ($_POST['OperatingSystems']);
			$ParallelProcessing = ($_POST['ParallelProcessing']);
			$Pedagogy = ($_POST['Pedagogy']);
			$ProgrammingLanguages = ($_POST['ProgrammingLanguages']);
			$Research = ($_POST['Research']);
			$Security = ($_POST['Security']);
			$SoftwareEngineering = ($_POST['SoftwareEngineering']);
			$SystemsAnalysisAndDesign = ($_POST['SystemsAnalysisAndDesign']);
			$UsingTechnologyInTheClassroom = ($_POST['UsingTechnologyInTheClassroom']);
			$WebAndInternetProgramming = ($_POST['WebAndInternetProgramming']);
			$Other = ($_POST['Other']);
			$OtherDescription = ($_POST['OtherDescription']);
			$ReviewsAcknowledged = ($_POST['ReviewsAcknowledged']);
		



			$query = "UPDATE [CPMS].[dbo].[Reviewer] SET 	//paramatized query to 
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
				Password  = (?),
				AnalysisOfAlgorithms = (?),
				Applications = (?),
				Architecture = (?),
				ArtificialIntelligence = (?),
				ComputerEngineering = (?),
				Curriculum = (?),
				DataStructures = (?),
				Databases = (?),
				DistancedLearning = (?),
				DistributedSystems = (?),
				EthicalSocietalIssues = (?),
				FirstYearComputing = (?),
				GenderIssues = (?),
				GrantWriting = (?),
				GraphicsImageProcessing = (?),
				HumanComputerInteraction = (?),
				LaboratoryEnvironments = (?),
				Literacy = (?),
				MathematicsInComputing = (?),
				Multimedia = (?),
				NetworkingDataCommunications = (?),
				NonMajorCourses = (?),
				ObjectOrientedIssues = (?),
				OperatingSystems = (?),
				ParallelProcessing = (?),
				Pedagogy = (?),
				ProgrammingLanguages = (?),
				Research = (?),
				Security = (?),
				SoftwareEngineering = (?),
				SystemsAnalysisAndDesign = (?),
				UsingTechnologyInTheClassroom = (?),
				WebAndInternetProgramming = (?),
				Other = (?),
				OtherDescription = (?),
				ReviewsAcknowledged = (?)
				WHERE ReviewerID = '{$id}'";

		$params = array($FirstName,$MiddleInitial,$LastName,$Affiliation,$Department,$Address,$City,$State,$ZipCode,$PhoneNumber,$EmailAddress,$Password,$AnalysisOfAlgorithms,$Applications,
$Architecture,$ArtificialIntelligence,$ComputerEngineering,$Curriculum,$DataStructures,$Databases,$DistancedLearning,$DistributedSystems,$EthicalSocietalIssues,$FirstYearComputing,
$GenderIssues,$GrantWriting,$GraphicsImageProcessing,$HumanComputerInteraction,$LaboratoryEnvironments,$Literacy,$MathematicsInComputing,$Multimedia,$NetworkingDataCommunications,
$NonMajorCourses,$ObjectOrientedIssues,$OperatingSystems,$ParallelProcessing,$Pedagogy,$ProgrammingLanguages,$Research,$Security,$SoftwareEngineering,$SystemsAnalysisAndDesign,
$UsingTechnologyInTheClassroom,$WebAndInternetProgramming,$Other,$OtherDescription,$ReviewsAcknowledged);
	
			$edit = sqlsrv_query($conn,$query,$params);
			if( $edit === false ) {
				die( print_r( sqlsrv_errors(), true));
			}

			
	
		if($edit)
		{
			header("location:profile2.php"); // reload page.
		}
		else
		{
			echo "Error.";
		}


		}    	
?>

		
		<div class="content">	<!-- The form to update and modify account.-->
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
					<input type="text" name="AnalysisOfAlgorithms" value="<?php echo $set['AnalysisOfAlgorithms'] ?>" placeholder="AnalysisOfAlgorithms" Required>
					<input type="text" name="Applications" value="<?php echo $set['Applications'] ?>"  placeholder="Applications" Required>
					<input type="text" name="Architecture" value="<?php echo $set['Architecture'] ?>"   placeholder="Architecture" Required>
					<input type="text" name="ArtificialIntelligence" value="<?php echo $set['ArtificialIntelligence'] ?>"   placeholder="ArtificialIntelligence" Required>
					<input type="text" name="ComputerEngineering" value="<?php echo $set['ComputerEngineering'] ?>"   placeholder="ComputerEngineering" Required>
					<input type="text" name="Curriculum" value="<?php echo $set['Curriculum'] ?>"   placeholder="Curriculum" Required>
					<input type="text" name="DataStructures" value="<?php echo $set['DataStructures'] ?>"   placeholder="DataStructures" Required>
					<input type="text" name="Databases" value="<?php echo $set['Databases'] ?>"   placeholder="Databases" Required>
					<input type="text" name="DistancedLearning" value="<?php echo $set['DistancedLearning'] ?>"  placeholder="DistancedLearning" Required>
					<input type="text" name="DistributedSystems" value="<?php echo $set['DistributedSystems'] ?>"  placeholder="DistributedSystems" Required>
					<input type="text" name="EthicalSocietalIssues" value="<?php echo $set['EthicalSocietalIssues'] ?>"  placeholder="EthicalSocietalIssues" Required>
					<input type="text" name="FirstYearComputing" value="<?php echo $set['FirstYearComputing'] ?>"  placeholder="FirstYearComputing" Required><input type="text" name="FirstName" value="<?php echo $set['FirstName'] ?>" placeholder="FirstName" Required>
					<input type="text" name="GenderIssues" value="<?php echo $set['GenderIssues'] ?>"  placeholder="GenderIssues" Required>
					<input type="text" name="GrantWriting" value="<?php echo $set['GrantWriting'] ?>"   placeholder="GrantWriting" Required>
					<input type="text" name="GraphicsImageProcessing" value="<?php echo $set['GraphicsImageProcessing'] ?>"   placeholder="GraphicsImageProcessing" Required>
					<input type="text" name="HumanComputerInteraction" value="<?php echo $set['HumanComputerInteraction'] ?>"   placeholder="HumanComputerInteraction" Required>
					<input type="text" name="LaboratoryEnvironments" value="<?php echo $set['LaboratoryEnvironments'] ?>"   placeholder="LaboratoryEnvironments" Required>
					<input type="text" name="Literacy" value="<?php echo $set['Literacy'] ?>"   placeholder="Literacy" Required>
					<input type="text" name="MathematicsInComputing" value="<?php echo $set['MathematicsInComputing'] ?>"   placeholder="MathematicsInComputing" Required>
					<input type="text" name="Multimedia" value="<?php echo $set['Multimedia'] ?>"  placeholder="Multimedia" Required>
					<input type="text" name="NetworkingDataCommunications" value="<?php echo $set['NetworkingDataCommunications'] ?>"  placeholder="NetworkingDataCommunications" Required>
					<input type="text" name="NonMajorCourses" value="<?php echo $set['NonMajorCourses'] ?>"  placeholder="NonMajorCourses" Required>
					<input type="text" name="ObjectOrientedIssues" value="<?php echo $set['ObjectOrientedIssues'] ?>"  placeholder="ObjectOrientedIssues" Required>
					<input type="text" name="OperatingSystems" value="<?php echo $set['OperatingSystems'] ?>" placeholder="OperatingSystems" Required>
					<input type="text" name="ParallelProcessing" value="<?php echo $set['ParallelProcessing'] ?>"  placeholder="ParallelProcessing" Required>
					<input type="text" name="Pedagogy" value="<?php echo $set['Pedagogy'] ?>"   placeholder="Pedagogy" Required>
					<input type="text" name="ProgrammingLanguages" value="<?php echo $set['ProgrammingLanguages'] ?>"   placeholder="ProgrammingLanguages" Required>
					<input type="text" name="Research" value="<?php echo $set['Research'] ?>"   placeholder="Research" Required>
					<input type="text" name="Security" value="<?php echo $set['Security'] ?>"   placeholder="Security" Required>
					<input type="text" name="SoftwareEngineering" value="<?php echo $set['SoftwareEngineering'] ?>"   placeholder="SoftwareEngineering" Required>
					<input type="text" name="SystemsAnalysisAndDesign" value="<?php echo $set['SystemsAnalysisAndDesign'] ?>"   placeholder="SystemsAnalysisAndDesign" Required>
					<input type="text" name="UsingTechnologyInTheClassroom" value="<?php echo $set['UsingTechnologyInTheClassroom'] ?>"  placeholder="UsingTechnologyInTheClassroom" Required>
					<input type="text" name="WebAndInternetProgramming" value="<?php echo $set['WebAndInternetProgramming'] ?>"  placeholder="WebAndInternetProgramming" Required>
					<input type="text" name="Other" value="<?php echo $set['Other'] ?>"  placeholder="Other" Required>
					<input type="text" name="OtherDescription" value="<?php echo $set['OtherDescription'] ?>"  placeholder="OtherDescription" Required>
					<input type="text" name="ReviewsAcknowledged" value="<?php echo $set['ReviewsAcknowledged'] ?>"  placeholder="ReviewsAcknowledged" Required>
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

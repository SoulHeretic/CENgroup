<?php

#starts a new session
session_start();

include 'connection.php';

#catches EmailAddress/password submitted by html form
$EmailAddress = ($_POST['EmailAddress']);
$Password = ($_POST['Password']);

#searches for EmailAddress and password in the database
$query = "SELECT * FROM [CPMS].[dbo].[Reviewer] WHERE EmailAddress = '{$EmailAddress}' AND Password='{$Password}'";


$result = sqlsrv_query($conn, $query);  

#checks if the search was made
if($result === false){
 die( print_r( sqlsrv_errors(), true));
}
else{

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
   echo "Email/password not found";
}else{

#creates sessions
while($row = sqlsrv_fetch_array($result)){
   $_SESSION['ReviewerID'] = $row['ReviewerID'];
   $_SESSION['FirstName'] = $row['FirstName'];
   $_SESSION['MiddleInitial'] = $row['MiddleInitial'];
   $_SESSION['LastName'] = $row['LastName'];
   $_SESSION['Affiliation'] = $row['Affiliation'];
   $_SESSION['Department'] = $row['Department'];
   $_SESSION['Address'] = $row['Address'];
   $_SESSION['City'] = $row['City'];
   $_SESSION['State'] = $row['State'];
   $_SESSION['ZipCode'] = $row['ZipCode'];
   $_SESSION['PhoneNumber'] = $row['PhoneNumber'];
   $_SESSION['EmailAddress'] = $row['EmailAddress'];
   $_SESSION['Password'] = $row['Password'];
	$_SESSION['AnalysisOfAlgorithms'] = ($row['AnalysisOfAlgorithms']);
	$_SESSION['Applications'] = ($row['Applications']);
	$_SESSION['Architecture'] = ($row['Architecture']);
	$_SESSION['ArtificialIntelligence'] = ($row['ArtificialIntelligence']);
	$_SESSION['ComputerEngineering'] = ($row['ComputerEngineering']);
	$_SESSION['Curriculum'] = ($row['Curriculum']);
	$_SESSION['DataStructures'] = ($row['DataStructures']);
	$_SESSION['Databases'] = ($row['Databases']);
	$_SESSION['DistancedLearning'] = ($row['DistancedLearning']);
	$_SESSION['DistributedSystems'] = ($row['DistributedSystems']);
	$_SESSION['EthicalSocietalIssues'] = ($row['EthicalSocietalIssues']);
	$_SESSION['FirstYearComputing'] = ($row['FirstYearComputing']);
	$_SESSION['GenderIssues'] = ($row['GenderIssues']);
	$_SESSION['GrantWriting'] = ($row['GrantWriting']);
	$_SESSION['GraphicsImageProcessing'] = ($row['GraphicsImageProcessing']);
	$_SESSION['HumanComputerInteraction'] = ($row['HumanComputerInteraction']);
	$_SESSION['LaboratoryEnvironments'] = ($row['LaboratoryEnvironments']);
	$_SESSION['Literacy'] = ($row['Literacy']);
	$_SESSION['MathematicsInComputing'] = ($row['MathematicsInComputing']);
	$_SESSION['Multimedia'] = ($row['Multimedia']);
	$_SESSION['NetworkingDataCommunications'] = ($row['NetworkingDataCommunications']);
	$_SESSION['NonMajorCourses'] = ($row['NonMajorCourses']);
	$_SESSION['ObjectOrientedIssues'] = ($row['ObjectOrientedIssues']);
	$_SESSION['OperatingSystems'] = ($row['OperatingSystems']);
	$_SESSION['ParallelProcessing'] = ($row['ParallelProcessing']);
	$_SESSION['Pedagogy'] = ($row['Pedagogy']);
	$_SESSION['ProgrammingLanguages'] = ($row['ProgrammingLanguages']);
	$_SESSION['Research'] = ($row['Research']);
	$_SESSION['Security'] = ($row['Security']);
	$_SESSION['SoftwareEngineering'] = ($row['SoftwareEngineering']);
	$_SESSION['SystemsAnalysisAndDesign'] = ($row['SystemsAnalysisAndDesign']);
	$_SESSION['UsingTechnologyInTheClassroom'] = ($row['UsingTechnologyInTheClassroom']);
	$_SESSION['WebAndInternetProgramming'] = ($row['WebAndInternetProgramming']);
	$_SESSION['Other'] = ($row['Other']);
	$_SESSION['OtherDescription'] = ($row['OtherDescription']);
	$_SESSION['ReviewsAcknowledged'] = ($row['ReviewsAcknowledged']);

}
	$_SESSION['logg'] = 2;
#redirects user
header("Location: homepage.php");
}
}
?>
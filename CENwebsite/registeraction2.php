<?php

#starts a new session. This is a reviewer registration form.
session_start();

include 'connection.php';

#catches EmailAddress/password submitted by html form
$EmailAddress = ($_POST['EmailAddress']);
$Password = ($_POST['Password']);
$FirstName = ($_POST['FirstName']);
$MiddleInitial = ($_POST['MiddleInitial']);
$LastName= ($_POST['LastName']);
$Affiliation = ($_POST['Affiliation']);
$Department = ($_POST['Department']);
$Address = ($_POST['Address']);
$City = ($_POST['City']);
$State = ($_POST['State']);
$ZipCode = ($_POST['ZipCode']);
$PhoneNumber = ($_POST['PhoneNumber']);
$EmailAddress = ($_POST['EmailAddress']);
$Password = ($_POST['Password']);
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
$OperatingSystems = ($_POST['Password']);
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
$OtherDescription = ($_POST['Password']);
$ReviewsAcknowledged = ($_POST['ReviewsAcknowledged']);

#searches for EmailAddress and password in the database
$query = ("Insert INTO [CPMS].[dbo].[Reviewer] (FirstName,MiddleInitial,LastName,Affiliation,Department,Address,City,State,ZipCode,PhoneNumber,EmailAddress,Password,
AnalysisOfAlgorithms,Applications,Architecture,ArtificialIntelligence,ComputerEngineering,Curriculum,DataStructures,Databases,DistancedLearning,DistributedSystems,EthicalSocietalIssues,
FirstYearComputing,GenderIssues,GrantWriting,GraphicsImageProcessing,HumanComputerInteraction,LaboratoryEnvironments,Literacy,MathematicsInComputing,Multimedia,NetworkingDataCommunications,
NonMajorCourses,ObjectOrientedIssues,OperatingSystems,ParallelProcessing,Pedagogy,ProgrammingLanguages,Research,Security,SoftwareEngineering,SystemsAnalysisAndDesign,
UsingTechnologyInTheClassroom,WebAndInternetProgramming,Other,OtherDescription,ReviewsAcknowledged )Values
('{$FirstName}','{$MiddleInitial}','{$LastName}','{$Affiliation}','{$Department}','{$Address}','{$City}','{$State}','{$ZipCode}','{$PhoneNumber}','{$EmailAddress}','{$Password}','{$AnalysisOfAlgorithms}',
'{$Applications}',
'{$Architecture}',
'{$ArtificialIntelligence}',
'{$ComputerEngineering}',
'{$Curriculum}',
'{$DataStructures}',
'{$Databases}',
'{$DistancedLearning}',
'{$DistributedSystems}',
'{$EthicalSocietalIssues}',
'{$FirstYearComputing}',
'{$GenderIssues}',
'{$GrantWriting}',
'{$GraphicsImageProcessing}',
'{$HumanComputerInteraction}',
'{$LaboratoryEnvironments}',
'{$Literacy}',
'{$MathematicsInComputing}',
'{$Multimedia}',
'{$NetworkingDataCommunications}',
'{$NonMajorCourses}',
'{$ObjectOrientedIssues}',
'{$OperatingSystems}',
'{$ParallelProcessing}',
'{$Pedagogy}',
'{$ProgrammingLanguages}',
'{$Research}',
'{$Security}',
'{$SoftwareEngineering}',
'{$SystemsAnalysisAndDesign}',
'{$UsingTechnologyInTheClassroom}',
'{$WebAndInternetProgramming}',
'{$Other}',
'{$OtherDescription}',
'{$ReviewsAcknowledged}')");

//$params = array(($FirstName,$MiddleInitial,$LastName,$Affiliation,$Department,$Address,$City,$State,$ZipCode,$PhoneNumber,$EmailAddress,$Password));

$result = sqlsrv_query($conn,$query);


#checks if the search was made
if($result === false){
 die( print_r( sqlsrv_errors(), true));
}
else{
	echo "Registration Successful";	//Replace with redirect and pop up later.
}
?>
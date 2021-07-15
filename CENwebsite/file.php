<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
if($_SESSION['log'] != 1)
		{
			header("location:homepage.php"); 
		}

include 'Template.php';
include 'connection.php';
?>

<html>
<head>
<title>File Submission</title>
</head>
<body>
</br>
</br>
</br>
</br>
<center>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Paper to Upload:
	</br>
	</br>
	</br>
	Information on your paper below submitting here please. Filling in the correct information will make reviews easier. If you paper does not fit into a category leave it as 0, otherwise
	put in a 1.
	</br>
	</br>
	</br>
	<label for="Title">Title</label><br>
    <input type="text" id="Title" name="Title"><br>
  
    <label for="NotesToReviewers">NotesToReviewers</label><br>
    <input type="text" id="NotesToReviewers" name="NotesToReviewers"><br>
	
	<label for="Certification">Certification</label><br>
    <input type="text" id="Certification" name="Certification"><br>
  
    <label for="AnalysisOfAlgorithms">Analysis Of Algorithms</label><br>
    <input type="text" id="AnalysisOfAlgorithms" name="AnalysisOfAlgorithms" ><br>
  
    <label for="Applications">Applications</label><br>
    <input type="text" id="Applications" name="Applications" ><br>
  
    <label for="Architecture">Architecture</label><br>
    <input type="text" id="Architecture" name="Architecture" ><br>
  
    <label for="ArtificialIntelligence">Artificial Intelligence</label><br>
    <input type="text" id="ArtificialIntelligence" name="ArtificialIntelligence" ><br>
  
    <label for="ComputerEngineering">ComputerEngineering</label><br>
    <input type="text" id="ComputerEngineering" name="ComputerEngineering"><br>
  
    <label for="Curriculum">Curriculum</label><br>
    <input type="text" id="Curriculum" name="Curriculum"><br>
  
    <label for="DataStructures">Data Structures</label><br>
    <input type="text" id="DataStructures" name="DataStructures" ><br>
  
    <label for="Databases">Databases</label><br>
    <input type="text" id="Databases" name="Databases" ><br>
  
    <label for="DistanceLearning">Distance Learning</label><br>
    <input type="text" id="DistanceLearning" name="DistanceLearning" ><br>
  
    <label for="DistributedSystems">Distributed Systems</label><br>
    <input type="text" id="DistributedSystems" name="DistributedSystems" ><br>
	
	<label for="EthicalSocietalIssues">Ethical Societal Issues</label><br>
    <input type="text" id="EthicalSocietalIssues" name="EthicalSocietalIssues" ><br>
  
    <label for="FirstYearComputing">First Year Computing</label><br>
    <input type="text" id="FirstYearComputing" name="FirstYearComputing" ><br>
  
    <label for="GenderIssues">Gender Issues</label><br>
    <input type="text" id="GenderIssues" name="GenderIssues"><br>
  
    <label for="GrantWriting">Grant Writing</label><br>
    <input type="text" id="GrantWriting" name="GrantWriting"><br>
  
    <label for="GraphicsImageProcessing">Graphics Image Processing</label><br>
    <input type="text" id="GraphicsImageProcessing" name="GraphicsImageProcessing" ><br>
  
    <label for="HumanComputerInteraction">Human Computer Interaction</label><br>
    <input type="text" id="HumanComputerInteraction" name="HumanComputerInteraction" ><br>
  
    <label for="LaboratoryEnvironments">Laboratory Environments</label><br>
    <input type="text" id="LaboratoryEnvironments" name="LaboratoryEnvironments" ><br>
  
    <label for="Literacy">Literacy</label><br>
    <input type="text" id="Literacy" name="Literacy" ><br>
	
	<label for="MathematicsInComputing">Mathematics In Computing</label><br>
    <input type="text" id="MathematicsInComputing" name="MathematicsInComputing" ><br>
  
    <label for="Multimedia">Multimedia</label><br>
    <input type="text" id="Multimedia" name="Multimedia"><br>
  
    <label for="NetworkingDataCommunications">Networking Data Communications</label><br>
    <input type="text" id="NetworkingDataCommunications" name="NetworkingDataCommunications"><br>
  
    <label for="NonMajorCourses">Non Major Courses</label><br>
    <input type="text" id="NonMajorCourses" name="NonMajorCourses" ><br>
  
    <label for="ObjectOrientedIssues">Object Oriented Issues</label><br>
    <input type="text" id="ObjectOrientedIssues" name="ObjectOrientedIssues" ><br>
  
    <label for="OperatingSystems">Operating Systems</label><br>
    <input type="text" id="OperatingSystems" name="OperatingSystems" ><br>
  
    <label for="ParallelsProcessing">Parallels Processing</label><br>
    <input type="text" id="ParallelsProcessing" name="ParallelsProcessing" ><br>
	
	<label for="Pedagogy">Pedagogy</label><br>
    <input type="text" id="Pedagogy" name="Pedagogy"><br>
  
    <label for="ProgrammingLanguages">Programming Languages</label><br>
    <input type="text" id="ProgrammingLanguages" name="ProgrammingLanguages"><br>
  
    <label for="Research">Research</label><br>
    <input type="text" id="Research" name="Research" ><br>
  
    <label for="Security">Security</label><br>
    <input type="text" id="Security" name="Security" ><br>
  
    <label for="SoftwareEngineering">Software Engineering</label><br>
    <input type="text" id="SoftwareEngineering" name="SoftwareEngineering" ><br>
  
    <label for="SystemsAnalysisAndDesign">Systems Analysis And Design</label><br>
    <input type="text" id="SystemsAnalysisAndDesign" name="SystemsAnalysisAndDesign" ><br>
  
    <label for="UsingTechnologyInTheClassroom">Using Technology In The Classroom</label><br>
    <input type="text" id="UsingTechnologyInTheClassroom" name="UsingTechnologyInTheClassroom"><br>
  
    <label for="WebAndInternetProgramming">WebAndInternetProgramming</label><br>
    <input type="text" id="WebAndInternetProgramming" name="WebAndInternetProgramming"><br>
  
    <label for="Other">Other</label><br>
    <input type="text" id="Other" name="Other" ><br>
	
	<label for="OtherDescription">Other Description</label><br>
    <input type="text" id="OtherDescription" name="OtherDescription" ><br>
	
	<br>
	<br>
	
	<input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
	
	
</form>
</center>
</body>
</html>


<footer>
    <p>All rights reserved by </br> Consortium for Computing Sciences in Colleges Midwest </br>(CCSCMW)</p>
</footer>
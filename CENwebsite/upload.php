<?php
// Include the database configuration file
include 'connection.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$Filename = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $Filename;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$Title = ($_POST['Title']);
$Certification = ($_POST['Certification']);
$NotesToReviewers =($_POST['NotesToReviewers']);
$AnalysisOfAlgorithms = ($_POST['AnalysisOfAlgorithms']);
$Applications = ($_POST['Applications']);
$Architecture = ($_POST['Architecture']);
$ArtificialIntelligence = ($_POST['ArtificialIntelligence']);
$ComputerEngineering = ($_POST['ComputerEngineering']);
$Curriculum = ($_POST['Curriculum']);
$DataStructures = ($_POST['DataStructures']);
$Databases = ($_POST['Databases']);
$DistanceLearning = ($_POST['DistanceLearning']);
$DistributedSystems = ($_POST['DistributedSystems']);
$EthicalSocietalIssues = ($_POST['EthicalSocietalIssues']);
$FirstYearComputing =($_POST['FirstYearComputing']);
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
$ParallelsProcessing = ($_POST['ParallelsProcessing']);
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

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('pdf','doc','docx');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert file name into database
            $query = ("Insert INTO [CPMS].[dbo].[Paper] (Filename,Title,Certification,NotesToReviewers,AnalysisOfAlgorithms,Applications,Architecture,ArtificialIntelligence,ComputerEngineering,Curriculum,DataStructures
,Databases,DistanceLearning,DistributedSystems,EthicalSocietalIssues,FirstYearComputing,GenderIssues,GrantWriting,GraphicsImageProcessing,HumanComputerInteraction
,LaboratoryEnvironments,Literacy,MathematicsInComputing,Multimedia,NetworkingDataCommunications,NonMajorCourses,ObjectOrientedIssues,OperatingSystems,ParallelsProcessing
,Pedagogy,ProgrammingLanguages,Research,Security,SoftwareEngineering,SystemsAnalysisAndDesign,UsingTechnologyInTheClassroom,WebAndInternetProgramming,Other,OtherDescription)Values
('{$Filename}','{$Title}','{$Certification}','{$NotesToReviewers}','{$AnalysisOfAlgorithms}','{$Applications}','{$Architecture}',
'{$ArtificialIntelligence}','{$ComputerEngineering}','{$Curriculum}','{$DataStructures}','{$Databases}','{$DistanceLearning}','{$DistributedSystems}','{$EthicalSocietalIssues}',
'{$FirstYearComputing}','{$GenderIssues}','{$GrantWriting}','{$GraphicsImageProcessing}','{$HumanComputerInteraction}','{$LaboratoryEnvironments}','{$Literacy}','{$MathematicsInComputing}',
'{$Multimedia}','{$NetworkingDataCommunications}','{$NonMajorCourses}','{$ObjectOrientedIssues}','{$OperatingSystems}','{$ParallelsProcessing}','{$Pedagogy}','{$ProgrammingLanguages}',
'{$Research}','{$Security}','{$SoftwareEngineering}','{$SystemsAnalysisAndDesign}','{$UsingTechnologyInTheClassroom}','{$WebAndInternetProgramming}',
'{$Other}','{$OtherDescription}')");
			
			$result = sqlsrv_query($conn,$query);
            if($query){
                $statusMsg = "The file ".$Filename. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
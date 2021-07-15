<?php

include 'Template.php';
include 'connection.php';
if($_SESSION['logg'] != 2)
		{
			header("location:homepage.php"); 
		}

?>

<div class= "content">
<div>

<?php 	/*
//Get images from the database
$_SESSION['AuthorID']

$query = "SELECT * FROM [CPMS].[dbo].[Review] WHERE ReviewerID = $_SESSION['ReviewerID'] AND PaperID = '{$PaperID}'";
$result = sqlsrv_query($conn, $query);  

if ($handle = opendir('/uploads/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='download.php?file=".$entry."'>".$entry."</a>\n";
        }
    }
    closedir($handle);

*/?>
<a href="/Uploads/file.pdf" download>
Download you paper to review here.
</a>

<table>
<center>
Information on your paper below submitting here please. Filling in the correct information will make reviews easier. If you paper does not fit into a category leave it as 0, otherwise put in a 1.

<form>
  <label for="AppropriatenessOfTopic">Appropriateness Of Topic</label><br>
  <input type="text" id="AppropriatenessOfTopic" name="AppropriatenessOfTopic"><br>
  
  <label for="TimelinessOfTopic">Timeliness Of Topic</label><br>
  <input type="text" id="TimelinessOfTopic" name="TimelinessOfTopic"><br>
  
  <label for="SupportiveEvidence">Supportive Evidence</label><br>
  <input type="text" id="SupportiveEvidence" name="SupportiveEvidence" ><br>
  
  <label for="TechnicalQuality">Technical Quality</label><br>
  <input type="text" id="TechnicalQuality" name="TechnicalQuality" ><br>
  
  <label for="ScopeofCoverage">Scope of Coverage</label><br>
  <input type="text" id="ScopeofCoverage" name="ScopeofCoverage" ><br>
  
  <label for="CitationofPreviousWork">Citation of Previous Work</label><br>
  <input type="text" id="CitationofPreviousWork" name="CitationofPreviousWork" ><br>
  
  <label for="Originality">Originality</label><br>
  <input type="text" id="Originality" name="Originality" ><br>
  
  <label for="ContentComments">Content Comments</label><br>
  <input type="text" id="ContentComments" name="ContentComments" ><br>
  
  <label for="OrganizationPaper">Organization Paper:</label><br>
  <input type="text" id="OrganizationPaper" name="OrganizationPaper" ><br>
  
  <label for="ClarityOfMainMessage">Clarity Of Main Message</label><br>
  <input type="text" id="ClarityOfMainMessage" name="ClarityOfMainMessage" ><br>
  
  <label for="Mechanics">Mechanics</label><br>
  <input type="text" id="Mechanics" name="Mechanics" ><br>
  
  <label for="WrittenDocumentComments">Written Document Comments</label><br>
  <input type="text" id="WrittenDocumentComments" name="WrittenDocumentComments" ><br>
  
  <label for="SuitabilityForPresentation">Suitability For Presentation</label><br>
  <input type="text" id="SuitabilityForPresentation" name="SuitabilityForPresentation" ><br>
  
  <label for="PotentialInterestInTopic">Potential Interest In Topic:</label><br>
  <input type="text" id="PotentialInterestInTopic" name="PotentialInterestInTopic" ><br>
  
  <label for="PotentialForORalPresentationComments">Potential For Oral Presentation Comments</label><br>
  <input type="text" id="PotentialForORalPresentationComments" name="PotentialForORalPresentationComments" ><br>
  
  <label for="OverallRating">Overall Rating</label><br>
  <input type="text" id="OverallRating" name="OverallRating" ><br>
  
  <label for="OverallRatingComments">Overall Rating Comments</label><br>
  <input type="text" id="OverallRatingComments" name="OverallRatingComments" ><br>
  
  <label for="ComfortLevelTopic">Comfort Level Topic</label><br>
  <input type="text" id="ComfortLevelTopic" name="ComfortLevelTopic" ><br>
  
  <label for="ComfortLevelAcceptability">Comfort Level Acceptability</label><br>
  <input type="text" id="ComfortLevelAcceptability" name="ComfortLevelAcceptability" ><br>
  
  <label for="Complete">Complete</label><br>
  <input type="text" id="Complete" name="Complete" ><br>
  
  <input type="submit" value="Submit">
  
</form>
</center>
</table>
</div>
</div>
</br>
</br>
<footer>
    <p>All rights reserved by </br> Consortium for Computing Sciences in Colleges Midwest </br>(CCSCMW)</p>
</footer>
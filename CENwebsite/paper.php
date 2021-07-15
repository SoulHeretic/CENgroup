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
            echo "<a href='downloads.php?file=".$entry."'>".$entry."</a>\n";
        }
    }
    closedir($handle);

*/?>
<a href="/Uploads/file.pdf" download>
<center>
Download your paper to review here.
<br>
<br>
</a>

<table>
Please read the following before reviewing your paper. Filling in the correct information will make reviews easier. If the text above an entry specifies that it is for comments, type your comment in that entry. If the text specifies that the input should be 0 or 1, only input those values (0 = False, 1 = True). Otherwise, every input is a rating from 1 to 5 with the legend shown below.
<br>
<br>
<strong>Rating: 1 - Poor, 2 - Fair, 3 - Average, 4 - Good, 5 - Excellent</strong>
<br>
<br>

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
  
  <label for="ContentComments">Content Comments<strong> (Comment)</strong></label><br>
  <input type="text" id="ContentComments" name="ContentComments" ><br>
  
  <label for="OrganizationPaper">Organization Paper:</label><br>
  <input type="text" id="OrganizationPaper" name="OrganizationPaper" ><br>
  
  <label for="ClarityOfMainMessage">Clarity Of Main Message</label><br>
  <input type="text" id="ClarityOfMainMessage" name="ClarityOfMainMessage" ><br>
  
  <label for="Mechanics">Mechanics</label><br>
  <input type="text" id="Mechanics" name="Mechanics" ><br>
  
  <label for="WrittenDocumentComments">Written Document Comments<strong> (Comment)</strong></label><br>
  <input type="text" id="WrittenDocumentComments" name="WrittenDocumentComments" ><br>
  
  <label for="SuitabilityForPresentation">Suitability For Presentation</label><br>
  <input type="text" id="SuitabilityForPresentation" name="SuitabilityForPresentation" ><br>
  
  <label for="PotentialInterestInTopic">Potential Interest In Topic:</label><br>
  <input type="text" id="PotentialInterestInTopic" name="PotentialInterestInTopic" ><br>
  
  <label for="PotentialForORalPresentationComments">Potential For Oral Presentation Comments<strong> (Comment)</strong></label><br>
  <input type="text" id="PotentialForORalPresentationComments" name="PotentialForORalPresentationComments" ><br>
  
  <label for="OverallRating">Overall Rating</label><br>
  <input type="text" id="OverallRating" name="OverallRating" ><br>
  
  <label for="OverallRatingComments">Overall Rating Comments<strong> (Comment)</strong></label><br>
  <input type="text" id="OverallRatingComments" name="OverallRatingComments" ><br>
  
  <label for="ComfortLevelTopic">Comfort Level Topic</label><br>
  <input type="text" id="ComfortLevelTopic" name="ComfortLevelTopic" ><br>
  
  <label for="ComfortLevelAcceptability">Comfort Level Acceptability</label><br>
  <input type="text" id="ComfortLevelAcceptability" name="ComfortLevelAcceptability" ><br>
  
  <label for="Complete">Complete<strong> (0/1)</strong></label><br>
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
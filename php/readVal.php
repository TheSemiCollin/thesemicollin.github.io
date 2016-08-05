<html>
<head>
  <title>Read Value that had been stored in file</title>
</head>
<body>
<?php 
  // Use the same filepath as in the writeVal.php file
  $filePath = "..\temp\TempHoffman.tmp";  
 
  // Get the old count value
  $fileDataLst = file($filePath);
  $count = (float) $fileDataLst[0];
  printf("<p><xml><Value> %f </Value><xml></p>", $count);
?>

</body>
</html>



<?php

if(isset($_POST['submit'])) {

  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $fileLink = "uploads/".$fileName;

  

  $fileExt = explode('.', $fileName);
  $fileActualEx = strtolower(end($fileExt));
  $allowed = array('jpeg', 'png');

}

  if(in_array($fileActualEx, $allowed)){
    if($fileError === 0){
      if($fileSize < 700000){
        $fileNameNew = uniqid('', true).".".$fileActualEx;
        $fileDestination = 'uploads'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        echo "Uploaded successfully!";

        echo "Successfully uploaded <a href=\"".$fileDestination."\"> Länk </a>";

   

      } else {
        echo "Your file is too big.";
      }
      
    } else {
      echo "There was an error.";
    }

  } else{
    echo "You cannot upload this type of file.";
  }






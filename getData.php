0<?php

  // database connection
  $con = mysqli_connect("localhost", "root", "" , "applicants") or die($con);

  // post data
  if(!empty($_POST)) {
    $code = $_POST['code'];
    $index_no = $_POST['index_no'];
    $birth_cert = $_POST['birth_cert'];
     

    // insert data into database
    $sql = "INSERT INTO details (code, index_no,birth_cert) VALUES ('$code', '$index_no', '$birth_cert')";
    $insertData = mysqli_query($con,$sql);

    if($insertData){
      echo "The form has been successfully submitted.";
    } else {
      echo "Something went wrong!";
    }
  }

?>

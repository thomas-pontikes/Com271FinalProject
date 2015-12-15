<?php

require'connect.php';

if(isset($_POST["name"]) && $_POST["name"] !='' && isset($_POST["comment"]) && $_POST["comment"]!='')
{

$name = $_POST["name"];
$comment = $_POST["comment"];

$sql = "INSERT INTO comments VALUES('','$name','$comment')";

$result = $link->query($sql);

header("Location: form.html");

}else{

include'form.html';

  echo" <h1>You did not enter text in one or both of the fields</h1>";
  echo" <h2> Please Try Again! </h2>";
}



?>
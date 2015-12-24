<?php

require'connect.php';

if(isset($_POST["name"]) && $_POST["name"] !='' && isset($_POST["comment"]) && $_POST["comment"]!='')
{

$name = mysqli_real_escape_string($link, $_POST["name"]);
$comment = mysqli_real_escape_string($link, $comment = $_POST["comment"]);
$email = mysqli_real_escape_string($link, $comment = $_POST["email"]);

$name = htmlspecialchars($name);
$comment = htmlspecialchars($comment);

$choice = $_POST["YesNo"];

$sql = "INSERT INTO comments VALUES('','$name','$comment','$email','$choice')";

$result = $link->query($sql);

header("Location: form.html");

}else{

include'form.html';

  echo" <h1>You did not enter text in one or both of the fields</h1>";
  echo" <h2> Please Try Again! </h2>";
}



?>
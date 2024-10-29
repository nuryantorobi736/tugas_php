<?php 
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = test_input($_POST["nama"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment "]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
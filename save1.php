<?php

$conn = mysqli_connect("localhost","root","","eventdb");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event_name'];

$sql = "INSERT INTO registrations(name,email,phone,event_name)
VALUES('$name','$email','$phone','$event')";

mysqli_query($conn,$sql);

echo "Registration Successful";

?>

<br><br>
<a href="form.html">Back</a>
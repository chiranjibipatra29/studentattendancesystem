<?php
$conn = mysqli_connect("localhost","root","","attendancedb");

$student_name = $_POST['student_name'];
$date = $_POST['date'];
$status = $_POST['status'];

$sql = "INSERT INTO attendance(student_name, date, status)
VALUES('$student_name','$date','$status')";

mysqli_query($conn,$sql);

echo "<h2>Attendance Saved Successfully</h2>";
echo "<a href='form.html'>Go Back</a>";
?>
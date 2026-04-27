<?php
$conn = mysqli_connect("localhost","root","","attendancedb");
$result = mysqli_query($conn,"SELECT * FROM attendance");
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Attendance</title>

  <style>
    body {
      font-family: Arial;
      background: #f4f4f4;
      padding: 20px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
    }

    table {
      width: 90%;
      margin: auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
    }

    th {
      background: #4facfe;
      color: white;
    }

    tr:nth-child(even) {
      background: #f9f9f9;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #333;
      padding: 10px 15px;
      background: #4facfe;
      color: white;
      border-radius: 5px;
    }
  </style>
</head>

<body>

<h2>Attendance Records</h2>

<table>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Date</th>
  <th>Status</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['student_name']; ?></td>
  <td><?php echo $row['date']; ?></td>
  <td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="form.html">Back</a>

</body>
</html>
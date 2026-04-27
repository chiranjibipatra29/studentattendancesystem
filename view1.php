<?php

$conn = mysqli_connect("localhost","root","","eventdb");

$result = mysqli_query($conn,"SELECT * FROM registrations");

echo "<h2>Event Registrations</h2>";

echo "<table border='1'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Event</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['event_name']."</td>";
echo "</tr>";
}

echo "</table>";

?>

<br><br>
<a href="form.html">Back</a>
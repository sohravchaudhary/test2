<?php

$conn = mysqli_connect('localhost','root','','college');

$select_query = "select * from courses";
$result = mysqli_query($conn,$select_query);

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th>course_id</th>
<th>course_name</th>
</tr>";


while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['course_id'] . "</td>";
    echo "<td>" . $row['course_name'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
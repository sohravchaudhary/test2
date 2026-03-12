<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "SELECT * FROM courses";

$result = mysqli_query($conn,$sql);

?>

<form>
Select Course:

<select>

<?php

while($row = mysqli_fetch_assoc($result))
{
 echo "<option>".$row['course_name']."</option>";
}

?>

</select>

</form>
<?php


include_once 'timesheetDBH.php';

$x=0;
$name=$_POST['name'];
$year=$_POST['yr'];
$month=$_POST['mth'];


// $sql="SELECT name FROM timesheet2 WHERE name='$name' AND yr='$year' AND mth='$month'";
// $result=mysqli_query($conn, $sql);
// echo mysqli_num_rows($result);
// echo $name;
// echo $year;
// echo $month;
//
// if (mysqli_num_rows($result)<=0){
//     echo "No report exists for that name, date, year";
// }
// else{
  $sql = "SELECT name, yr, mth, day1, day2, day3 FROM timesheet2 WHERE name='$name' AND yr='$year' AND mth='$month'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
     echo "name: " . $row["name"]. " Year: " . $row["yr"]. " month" . $row["mth"]. "Day1".$row["day1"];
   }
 } else {
   echo "0 results";
 }

 mysqli_close($conn);
 ?>

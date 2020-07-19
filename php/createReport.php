<?php



include_once 'timesheetDBH.php';

$tableName="timesheet3";

$name=$_POST['name'];
$year=$_POST['yr'];
$month=$_POST['mth'];


// $sql="SELECT name FROM $tableName WHERE name='$name' AND yr='$year' AND mth='$month'";
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
  $sql = "SELECT *FROM $tableName WHERE name='$name' AND yr='$year' AND mth='$month'";
  $result = mysqli_query($conn, $sql);


  $data = array();

  if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
     // echo "name: " . $row["name"]. " Year: " . $row["yr"]. " month" . $row["mth"]. "Day1".$row["day1"];
     foreach($row as $value){
       // echo $value." | ";
       //storing in array
       $data[]=$value;
     }
    echo json_encode($data);
    }
 } else {
   echo json_encode("0results");
   // echo $name;
   // echo $year;
   // echo $month;
 }

 mysqli_close($conn);
 ?>

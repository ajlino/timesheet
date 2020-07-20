<?php



include_once 'timesheetDBH.php';

$tableName="timesheet3";

$name=$_POST['name'];
$year=$_POST['yr'];
$month=$_POST['mth'];


  if ($name="all"){
    $sql = "SELECT *FROM $tableName WHERE yr='$year' AND mth='$month'";
  } else{
    $sql = "SELECT *FROM $tableName WHERE name='$name' AND yr='$year' AND mth='$month'";
  }

  $result = mysqli_query($conn, $sql);

  $data = array();

  if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
     // echo "name: " . $row["name"]. " Year: " . $row["yr"]. " month" . $row["mth"]. "Day1".$row["day1"];
     // $data[]=$row;
     foreach($row as $value){
       array_push($data, $value);
     }
     array_push($data, "End-Of-Row");
    }
    echo json_encode($data);
  } else {

   echo json_encode("0results");
   // echo $name;
   // echo $year;
   // echo $month;
  }

 mysqli_close($conn);
 ?>

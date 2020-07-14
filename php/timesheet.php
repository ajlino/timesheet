<?php


include_once 'timesheetDBH.php';

//$sql="UPDATE timesheet2 SET day3='3' WHERE name='Andy'";

$x=0;
$name=$_POST['name'];
$year=$_POST['yr'];
$month=$_POST['mth'];


//$sql="SELECT name FROM timesheet2 WHERE name='$name', yr='$year', mth='$month'";

$sql="SELECT name FROM timesheet2 WHERE name='$name' AND yr='$year' AND mth='$month'";
$result=mysqli_query($conn, $sql);
echo mysqli_num_rows($result);

if (mysqli_num_rows($result)>0){
    $x=0;
}
else{
    $sql = "INSERT INTO timesheet2 (name, yr, mth) VALUES ('$name', '$year', '$month')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } 

}



for ($i=1; $i<32; $i++){
    $day='day'.$i;
    $rb="radioButton_Day".$i;
    $value=$_POST[$rb];
    
    if (is_null($value)){
        $value=0;
    }
    
    $sql = "UPDATE timesheet2 SET $day=$value WHERE name='$name' AND yr='$year' AND mth='$month'";
    mysqli_query($conn,$sql);
}



//foreach ($_POST as $value){
//    //Here we create a SQL statement that insert data into our database
//    $value=(int)$value; //Convert string to integer value
//    $day='day'.$x;
//	$sql = "UPDATE timesheet2 SET $day=$value WHERE name='$name' AND yr='$year' AND mth='$month'";
//    $x++;
//    
//    //Here we "query" the data in the database
//	mysqli_query($conn, $sql);
//}
//
//
//
//
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  echo $name;
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

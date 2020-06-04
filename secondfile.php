<?php
include_once 'dbConn.php';
$noOfTestData = $_POST['noOfTestData'];
echo $noOfTestData;
$result = mysqli_query($conn,"SELECT * FROM wp_testing order by 1 asc LIMIT $noOfTestData");
$row = mysqli_fetch_array($result);
echo $row
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Test Data</title>
 </head>
<body>
<?php
if(isset($_POST['submit']))
{
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>SNO</td>
    <td>MSISDN</td>
    <td>SIM</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["SNO"]; ?></td>
    <td><?php echo $row["MSISDN"]; ?></td>
    <td><?php echo $row["SIM"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
}
?>
 </body>
</html>

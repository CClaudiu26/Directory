<?php



include_once ("libs/config.php");

if (isset($_POST['submit'])){

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];

$email = $_POST['Email'];

$department_query = "select id from department where name = '"  . $_POST['Search'] . "'";
$result = $conn-> query($department_query);

while ($row = $result->fetch_assoc()){
    $iddepartment = $row['id'];
}




$sql = "INSERT INTO personnel (`lastName`,`firstName`, `email`, `departmentID`) VALUES ('$lastname', '$firstname'  , '$email' , $iddepartment )";

$result = mysqli_query($conn, $sql);

if ($result){
    echo 'Data inserted';

}else{
    echo "Data not inserted";
}

mysqli_close($conn);

header("refresh:0; url = index.php");
}
?>
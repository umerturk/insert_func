<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post">
    <label for="">Department Number</label>
    <input type="number" name="deptnumber" id="">
    <br>
    <label for=""> Department Name</label>
    <input type="text" name="departmentname" id="">
    <input type="submit" value="Submit" name="sub_btn">
    </form>

    <?php
    include('db.php');
if(isset($_POST['sub_btn'])){
    $d_num=$_POST['deptnumber'];
    $d_name=$_POST['departmentname'];
$query="insert into dept values ('$d_num','$d_name')";
$run=mysqli_query($con,$query);

if($run){
    echo "data inserted ";
}
else{
    echo "data inserted failed";
}


}

?>
</body>
</html>
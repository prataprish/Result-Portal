<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resultDB";
$name = $_POST['name'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        
        $sql = 'SELECT Subject_Code FROM teacher_subject where Teacher_Name="'.$name.'"';
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
        	$sub = $row['Subject_Code'];
        echo "<button title='remove ".$sub."' class='btn' style='margin:0px 2px 2px 0;' onclick=deleteSubjectTeacher('".$row['Subject_Code']."','".$name."')>".$row['Subject_Code']."</button><script>$('#newBtn').prop('disabled',false);</script>";}

?>
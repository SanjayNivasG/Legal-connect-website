<?php
session_start();
require "db.php";

if(!isset($_SESSION["user_id"])){
    header("Location: login.html");
    exit;
}

$user_id = $_SESSION["user_id"];

$stmt = $conn->prepare("SELECT title,status,description FROM cases WHERE user_id=?");
$stmt->bind_param("i",$user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<h2>My Cases</h2>

<?php
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<h3>".$row["title"]."</h3>";
        echo "<b>Status:</b> ".$row["status"]."<br>";
        echo "<p>".$row["description"]."</p><hr>";
    }
}else{
    echo "No cases found";
}
?>

<a href="dashboard.php">Back</a>

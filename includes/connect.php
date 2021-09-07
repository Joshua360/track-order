<?php


$orderNumber = $_POST['orderNumber'];
$orderName = $_POST['orderName'];
$date = $_POST['date'];
if (isset($_POST['orderStatus'])) {
    $orderStatus = $_POST['orderStatus'];
}

header('Location: ../option-a.php');


var_dump($_POST);

//db connection

$conn = mysqli_connect('localhost','root','','ordertracker');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into orders(orderNumber, orderName, date, orderStatus) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $orderNumber, $orderName, $date, $orderStatus);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data posted successfully...";
		$stmt->close();
		$conn->close();
	}

    ?>



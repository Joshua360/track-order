<?php



if (isset($_POST['checkOrder'])) {
    $checkOrder = $_POST['checkOrder'];
    if($checkOrder ==="42536J"){
        header('Location: ../option-a.php');
        
    }else{
        echo "<script>alert('Order not in database');</script>";
        header('Location: ../index.php');

    }
}





//db connection

// $conn = mysqli_connect('localhost','root','','ordertracker');
// 	if($conn->connect_error){
// 		echo "$conn->connect_error";
// 		die("Connection Failed : ". $conn->connect_error);
// 	} else {
// 		$stmt = $conn->prepare("insert into orders(orderNumber, orderName, date, orderStatus) values(?, ?, ?, ?)");
// 		$stmt->bind_param("ssss", $orderNumber, $orderName, $date, $orderStatus);
// 		$execval = $stmt->execute();
// 		echo $execval;
// 		echo "Data posted successfully...";
// 		$stmt->close();
// 		$conn->close();
// 	}

//     ?>
<!-- manage-insert.php -->
<?php 
session_start();
include_once 'dbCon.php';
$con = connect();
	if (isset($_POST['regascus'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = 2;

        // existing email chaeck
        $checkSQL = "SELECT * FROM `user_info` WHERE email = '$email';";
        $checkresult = $con->query($checkSQL);
        if ($checkresult->num_rows > 0) {
        	echo '<script>alert("This Email Already Exist.")</script>';
        	echo '<script>window.location="register.php"</script>';
				}else{
			

					$iquery="INSERT INTO `user_info`(`user_name`, `email`, `password`, `role`) 
			        		VALUES ('$name','$email', '$password','$role');";
		        	if ($con->query($iquery) === TRUE) {
		        		echo '<script>alert("New user added successfully")</script>';
		        		echo '<script>window.location="login.php"</script>';
		        	}else {
		                echo "Error: " . $iquery . "<br>" . $con->error;
		            }
				}
        }
		
	

		
		
/*

	

    
    if (isset($_POST['book'])) {

    	$bdinsert = false;
    	$u_id = $_SESSION['id'];
    	$res_id = $_POST['res_id'];
  		$reservation_name = $_POST['reservation_name'];
		$reservation_phone = $_POST['reservation_phone'];
		$reservation_date = $_POST['reservation_date'];
		$reservation_time = $_POST['reservation_time'];
		$total_price = $_POST['total_price'];
		$transactionid = $_POST['transaction_id'];

		date_default_timezone_set("Asia/Dhaka");
         $make_time =date("h:i:sa");
         $make_date =date("Y-m-d");
		$booking_id= uniqid();

		$iquery="INSERT INTO `booking_details`(`booking_id`,`res_id`,`c_id`,`make_date`, `make_time`, `name`, `phone`, `booking_date`, `booking_time`, `bill`,`transactionid`) 
		    VALUES ('$booking_id','$res_id','$u_id','$make_date','$make_time','$reservation_name','$reservation_phone','$reservation_date','$reservation_time','$total_price','$transactionid');";
		if ($con->query($iquery) === TRUE) {
			$bdinsert = true;
		}else {
            echo "Error: " . $iquery . "<br>" . $con->error;
        }

        $cinsert = false;
        if ($bdinsert == true) {
        	for($q = 0; $q < count($_POST["chair"]); $q++){
                $c_id = $_POST['chair'][$q]; 
                $chair_no = ""; 
                $sql5 = "SELECT * FROM `restaurant_chair` WHERE id = '$c_id';";
                $result5 = $con->query($sql5);
                foreach ($result5 as $r5) {
                	$chair_no = $r5['chair_no'];
                }
                $ciQuery = "INSERT INTO `booking_chair`(`booking_id`, `chair_id`, `chair_no`) 
                		VALUES ('$booking_id','$c_id','$chair_no');";
                if ($con->query($ciQuery) === TRUE) {
					$cinsert = true;
				}else {
		            echo "Error: " . $ciQuery . "<br>" . $con->error;
		        }
            }
        }

        $iinsert = false;
        if ($cinsert == true) {
        	for($i = 0; $i < count($_POST["item"]); $i++){
                $i_id = $_POST['item'][$i];
                $qty = $_POST['qty'][$i];
                $itmQuery = "INSERT INTO `booking_menus`(`booking_id`, `item_id`, `qty`) 
                		VALUES ('$booking_id','$i_id','$qty');";
                if ($con->query($itmQuery) === TRUE) {
					$iinsert = true;
				}else {
		            echo "Error: " . $itmQuery . "<br>" . $con->error;
		        }
            }
        }

       if ($bdinsert == true && $cinsert == true && $iinsert == true) {
    		echo '<script>alert("Your booking is done. You will get an email soon.")</script>';
    		echo '<script>window.location="index.php"</script>';
    	}else {
    		echo "Error: " . $iquery . "<br>" . $con->error;
    		echo "Error: " . $ciQuery . "<br>" . $con->error;
            echo "Error: " . $iquery . "<br>" . $con->error;
        } 
    }	
*/	
?>
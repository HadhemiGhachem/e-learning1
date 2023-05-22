<?php 
include "config.php";
if (isset ($_POST['submit'])) {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    
    $payment = $_POST['payment'];

	// Check if the 'title' key is set in the $_POST array
    if (isset($_POST['title'])) {
        $title = $_POST['title'];
    } else {
        $title = '';
    }

    $sql = "INSERT INTO `workshop`(`fullname`,`email`,`telephone`,`title`,`payment`) 
        VALUES ('$fullname','$email','$telephone','$title','$payment')";


$result = $conn->query($sql);


if ($result == TRUE) {
	
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Workshop Registration Form</title>
	<style>
       
		form {
			margin: auto;
			width: 50%;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
            
		}

		input[type=text], input[type=email], input[type=tel], select {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
        h1{
            text-align: center;
            padding-bottom: 30px;
            padding-top: 20px;
            color: #0159a1;
        }
        label{
            color: #00325c;
        }
	</style>
</head>
<body>
<h1>Workshop Registration Form</h1>
	<form action="inscrire.php" method="post">
		
		<label for="fullname">Full Name</label>
		<input type="text" id="fullname" name="fullname" required>

		<label for="email">Email Address</label>
		<input type="email" id="email" name="email" required>

		<label for="telephone">Contact Number</label>
		<input type="tel" id="telephone" name="telephone" required>

        
        <label for="title">Workshop Title</label>
        <select id="title" name="title" required>
			<option value="">--Please select--</option>
			<option value="python">python</option>
			<option value="Graphic Design">Graphic Design</option>
			<option value="JavaScript">JavaScript</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
			<option value="Digital Marketing">Digital Marketing</option>
			<option value="Cyber Security">Cyber Security</option>
			<option value="Gaming">Gaming</option>
			<option value="Business intelligence">Business intelligence</option>
			<option value="PHP">PHP</option>

		</select>
		
		<label for="payment">Payment method</label>
        <select id="payment" name="payment" required>
			<option value="">--Please select--</option>
			<option value="cash">Cash</option>
			<option value="card">Credit/Debit Card</option>
			<option value="transfer">Bank Transfer</option>
		</select>

		<input name="submit" type="submit" value="Submit">
	</form>
</body>
</html>

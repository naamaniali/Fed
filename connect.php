<?php

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$Gender = $_POST['Gender'];
		$Email = $_POST['Email'];
		$date = $_POST['date'];
		$Event = $_POST['Event'];
		$Venue = $_POST['Venue'];
		$Motif = $_POST['Motif'];
		$Type = $_POST['Type'];
		$Budget = $_POST['Budget'];
		$Request = $_POST['Request'];
		
		if (!empty($fname) || !empty($lname) || !empty($Gender) || !empty($Email) ||
		!empty($date) || !empty($Event) || !empty($Venue) || !empty($Motif) || !empty($Type) ||
		!empty($Budget) || !empty($Request)) {
		
		$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "reservation";
		
		$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
		if(mysqli_connect_error()) {
			die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }	
			else {
				$Select = "SELECT Email FROM reserves WHERE Email = ? LIMIT 1";
				$Insert = "INSERT INTO reserves (fname, lname, Gender, Email, date, Event, 
				Venue, Motif, Type, Budget, Request) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				
				$pst = $conn -> prepare($Select);
				$pst->bind_param("s", $Email);
				$pst->execute();
				$pst->bind_result($Email);
				$pst->store_result();
				$rnum = $pst->num_rows;
				
				if ($rnum == 0) {
                $pst->close();
				
					$pst = $conn->prepare($Insert);
					$pst->bind_param("sssssssssss",$fname, $lname, $Gender, $Email, $date, 
					$Event, $Venue, $Motif, $Type, $Budget, $Request);
				
					$pst->execute();
				
					echo "New record inserted sucessfully.";
                }
					else {
						echo "Someone already registers using this email.";
					}
						$pst->close();
						$conn->close();
			}
		}
    else {
        echo "All field are required.";
        die();
    }


?>